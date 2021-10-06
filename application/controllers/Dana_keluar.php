<?php

class Dana_keluar extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dana');
        // $this->load->model('Model_instansi');
        $this->load->model('Model_desa');
    }

    public function index()
    {
        $data['judul'] = 'Dana Masuk';
        $data['danakeluar'] = $this->Model_dana->getalldanakeluar();
        // $data['instansi'] = $this->Model_instansi->getallinstansi();
        $data['desa'] = $this->Model_desa->getalldesa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dana/dana_keluar', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahdanakeluar()
    {
       $tgl_keluar = $this->input->post('tgl_keluar');
       $id_desa = $this->input->post('id_desa');
       $kebutuhan = $this->input->post('kebutuhan');
       $jml_biaya = $this->input->post('jml_biaya');

       $query = $this->db->query("select * from tb_dana_masuk where id_desa='$id_desa' and status='realisasi'");

		foreach ($query->result() as $row)
		{
		    $sa = $row->saldo_awal;
		}

		$sisa = $sa - $jml_biaya;

       $data = [
             'id_desa' => $id_desa,
             'kebutuhan' => $kebutuhan,
             'jml_biaya' => $jml_biaya,
             'tgl_keluar' => $tgl_keluar
           ];

      $this->Model_dana->insertdanakeluar($data, 'tb_dana_keluar');

      $this->db->set('sisa_saldo', $sisa);
	  $this->db->where('id_desa', $id_desa);
	  $this->db->update('tb_dana_masuk');
	  
       redirect('Dana_keluar');

    }

    public function hapusdanamasuk($id)
    {
       $this->Model_dana->deletedanamasuk($id);
       redirect('Dana_masuk');
    }

}

?>
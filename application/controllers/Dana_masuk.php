<?php

class Dana_masuk extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dana');
        $this->load->model('Model_instansi');
        $this->load->model('Model_desa');
    }

    public function index()
    {
        $data['judul'] = 'Dana Masuk';
        $data['danamasuk'] = $this->Model_dana->getalldanamasuk();
        $data['instansi'] = $this->Model_instansi->getallinstansi();
        $data['desa'] = $this->Model_desa->getalldesa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dana/dana_masuk', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahdanamasuk()
    {
       $tgl_masuk = $this->input->post('tgl_masuk');
       $id_instansi = $this->input->post('id_instansi');
       $id_desa = $this->input->post('id_desa');
       $saldo_awal = $this->input->post('saldo_awal');
       $keperluan = $this->input->post('keperluan');
       $lokasi = $this->input->post('lokasi');

       $file = $_FILES['file']['name'];

       if ($file) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('file')) {
             } else {
                echo $this->upload->display_errors();
             }
        }

       $data = [
             'id_instansi' => $id_instansi,
             'id_desa' => $id_desa,
             'tgl_masuk' => $tgl_masuk,
             'saldo_awal' => $saldo_awal,
             'keperluan' => $keperluan,
             'sisa_saldo' => $saldo_awal,
             'file_rak' => $file,
             'lokasi' => $lokasi,
             'status' => 'realisasi'
           ];
      $this->Model_dana->insertdanamasuk($data, 'tb_dana_masuk');
       redirect('Dana_masuk');
    }

    public function hapusdanamasuk($id)
    {
       $this->Model_dana->deletedanamasuk($id);
       redirect('Dana_masuk');
    }

}

?>
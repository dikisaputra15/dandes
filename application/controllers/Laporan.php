<?php

class Laporan extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_laporan');
        $this->load->model('Model_desa');
    }

    public function index()
    {
        $data['judul'] = 'Laporan';
        $data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_danadesa', $data);
        $this->load->view('templates/footer'); 
    }

    public function detaildana($id)
    {
        $data['judul'] = 'detail dana keluar';
        $data['laporan'] = $this->Model_laporan->getlaporanbyid($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/detaillap', $data);
        $this->load->view('templates/footer'); 
    }

	 public function pekerjaan()
    {
        $data['judul'] = 'lpj';
        $data['lpj'] = $this->Model_laporan->lpj();
        $data['desa'] = $this->Model_desa->getalldesa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lpj', $data);
        $this->load->view('templates/footer'); 
    } 

     public function tambahlpj()
    {
       $id_desa = $this->input->post('id_desa');
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
             'id_desa' => $id_desa,
             'file_lpj' => $file
           ];

      $this->Model_laporan->insertlpj($data, 'tb_lpj');

      $this->db->set('status', 'selesai');
	  $this->db->where('id_desa', $id_desa);
	  $this->db->update('tb_dana_masuk');

       redirect('Laporan/pekerjaan');
    }   

}

?>
<?php

class Desa extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_desa');
    }

    public function index()
    {
        $data['judul'] = 'Data Desa';
        $data['desa'] = $this->Model_desa->getalldesa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('desa/desa', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahdesa()
    {
       $nama_desa = $this->input->post('nama_desa');
       $alamat = $this->input->post('alamat');
       $kepala_desa = $this->input->post('kepala_desa');
       $data = [
             'nama_desa' => $nama_desa,
             'alamat' => $alamat,
             'kepala_desa' => $kepala_desa
           ];
      $this->Model_desa->insert($data, 'tb_desa');
       redirect('Desa');
    }

    public function editdesa($id_desa)
    {
       $data['judul'] = 'Edit';
       $data['desa'] = $this->Model_desa->getdesaById($id_desa);
       $this->form_validation->set_rules('id_desa', 'id_desa', 'required');
       $this->form_validation->set_rules('nama_desa', 'nama_desa', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('desa/edit_desa', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_desa->updatedesa();
          redirect('Desa');
       }
    }

    public function hapusdesa($id)
    {
       $this->Model_desa->delete($id);
       redirect('Desa');
    }

}

?>
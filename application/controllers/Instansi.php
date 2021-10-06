<?php

class Instansi extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_instansi');
    }

    public function index()
    {
        $data['judul'] = 'Data Instansi';
        $data['instansi'] = $this->Model_instansi->getallinstansi();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('instansi/instansi', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahinstansi()
    {
       $nama_instansi = $this->input->post('nama_instansi');
       $data = [
             'nama_instansi' => $nama_instansi
           ];
      $this->Model_instansi->insert($data, 'tb_instansi');
       redirect('Instansi');
    }

    public function editinstansi($id_instansi)
    {
       $data['judul'] = 'Edit';
       $data['instansi'] = $this->Model_instansi->getinstansiById($id_instansi);
       $this->form_validation->set_rules('id_instansi', 'id_instansi', 'required');
       $this->form_validation->set_rules('nama_instansi', 'nama_instansi', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('instansi/edit_instansi', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_instansi->updateinstansi();
          redirect('Instansi');
       }
    }

    public function hapusinstansi($id)
    {
       $this->Model_instansi->delete($id);
       redirect('Instansi');
    }

}

?>
<?php

class User extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['judul'] = 'Data User';
        $data['user'] = $this->Model_user->getalluser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahuser()
    {
       $username = $this->input->post('username');
       $password = $this->input->post('password');
       $nama = $this->input->post('nama');
       $level = $this->input->post('level');
       $data = [
             'username' => $username,
             'password' => $password,
             'nama_lengkap' => $nama,
             'level' => $level
           ];
      $this->Model_user->insert($data, 'tb_user');
       redirect('User');
    }

    public function edituser($id_user)
    {
       $data['judul'] = 'Edit';
       $data['user'] = $this->Model_user->getuserById($id_user);
       $this->form_validation->set_rules('id_user', 'id_user', 'required');
       $this->form_validation->set_rules('username', 'username', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_user->updateuser();
          redirect('User');
       }
    }

    public function hapususer($id)
    {
       $this->Model_user->delete($id);
       redirect('User');
    }

}

?>
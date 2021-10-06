<?php

class auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('username')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/login');
         $this->load->view('login_template/footer');
      }else{
         redirect('Home');
      }
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'id_user' => $user['id_user'],
               'username' => $user['username'],
               'nama_lengkap' => $user['nama_lengkap'],
               'password' => $user['password'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
            redirect('Home');
         } else {
            redirect('auth');
         }
      } else {
         redirect('auth');
      }      
   }

   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('password');

      redirect('auth');
   }
}

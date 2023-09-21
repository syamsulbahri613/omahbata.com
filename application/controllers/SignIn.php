<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SignIn extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
      $this->load->model('Login_model');
   }

   public function index()
   {
      if ($this->session->userdata('login_status') != FALSE) {
         redirect("home", "refresh");
      } else {
         $data['title'] = 'Sign Up | Sign In';
         $data['_page'] = 'Sign In';
         $this->load->view('templates/header.php', $data);
         $this->load->view('content/SignIn/SignIn.php');
         $this->load->view('templates/footer.php');
      };
   }
}
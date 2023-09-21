<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
   }

   public function index()
   {
		$this->load->library('user_agent');	
      $data['title'] = 'Contact';
      $data['_page'] = 'CONTACT';
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/contact/contact.php');
      $this->load->view('templates/footer.php');
   }
}

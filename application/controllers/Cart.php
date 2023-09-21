<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('Cart_model');
      $this->load->model('Login_model');
   }

   function index()
   {

      $result = $this->Login_model->loginUser(get_cookie('gmail'));
        if ($result) {
         foreach ($result as $row) {
            $sess_array = array(
                'MsCustomerId' => $row->MsCustomerId,
                'MsCustomerTokenGmail' => $row->MsCustomerTokenGmail,
                'MsCustomerName' => $row->MsCustomerName,
                'MsCustomerImage' => $row->MsCustomerImage,
                'MsCustomerEmail' => $row->MsCustomerEmail,
                'login_status' => true,
            );
            $this->session->set_userdata($sess_array);
                $data['title'] = 'Shoping Cart';
                $data['_page'] = 'Cart';
                $data['data'] = $this->Cart_model->get_all_produk($this->session->userdata("MsCustomerTokenGmail"));
                $this->load->view('templates/header.php', $data);
                $this->load->view('content/cart/cart.php');
                $this->load->view('templates/footer.php');
            }
        } else {
            if ($this->session->userdata('login_status') != FALSE) {
               $data['title'] = 'Shoping Cart';
               $data['_page'] = 'Cart';
               $data['data'] = $this->Cart_model->get_all_produk($this->session->userdata("MsCustomerTokenGmail"));
               $this->load->view('templates/header.php', $data);
               $this->load->view('content/cart/cart.php');
               $this->load->view('templates/footer.php');
            } else {
               $data['title'] = 'Shoping Cart';
               $data['_page'] = 'Cart';
               $data['data'] = $this->Cart_model->get_test();
               $this->load->view('templates/header.php', $data);
               $this->load->view('content/cart/cart.php');
               $this->load->view('templates/footer.php');
               // $data['title'] = 'Sign Up | Sign In';
               // $data['_page'] = 'Sign In';
               // $this->load->view('templates/header.php', $data);
               // $this->load->view('content/SignIn/SignIn.php');
               // $this->load->view('templates/footer.php');
            };
        }
   }

   function add_to_cart()
   {
      $idItem = $this->input->post('MsItemRef');
      $token = $this->input->post('MsCustomerTokenGmailref');
      $check_item = $this->Cart_model->check_item($idItem, $token);

      if($check_item){
         $error;
      }else{
         $data = array(
            'MsItemRef' => $this->input->post('MsItemRef'),
            'MsCustomerTokenGmailref' => $this->input->post('MsCustomerTokenGmailref'),
            'Qty' => $this->input->post('Qty')
         );
   
         $this->db->insert('TblMsItemCart' ,$data);

      }
   }
}

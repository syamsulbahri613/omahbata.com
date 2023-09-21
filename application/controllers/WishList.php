<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WishList extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Cart_model');
      $this->load->model('Login_model');
   }

   public function index()
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
            $data['title'] = 'Wish List';
            $data['_page'] = 'Wish';
            $data['data'] = $this->Cart_model->get_all_produk_wishlist($this->session->userdata("MsCustomerTokenGmail"));
            $this->load->view('templates/header.php', $data);
            $this->load->view('content/wishList/wishList.php');
            $this->load->view('templates/footer.php');
          }
      } else {
          if ($this->session->userdata('login_status') != FALSE) {
             $data['title'] = 'Shoping Cart';
             $data['_page'] = 'Cart';
             $data['data'] = $this->Cart_model->get_all_produk_wishlist($this->session->userdata("MsCustomerTokenGmail"));
             $this->load->view('templates/header.php', $data);
             $this->load->view('content/wishList/wishList.php');
             $this->load->view('templates/footer.php');
          } else {
             $data['title'] = 'Sign Up | Sign In';
             $data['_page'] = 'Sign In';
             $this->load->view('templates/header.php', $data);
             $this->load->view('content/SignIn/SignIn.php');
             $this->load->view('templates/footer.php');
          };
      }
   }

   function add_to_wishlist()
   {

      $data = array(
         'MsItemRef' => $this->input->post('MsItemRef'),
         'MsCustomerTokenGmailref' => $this->input->post('MsCustomerTokenGmailref')
      );

      $this->db->insert('TblMsitemWishlist' ,$data);
   }
}
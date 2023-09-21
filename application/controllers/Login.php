<?php

use Google\Service\Adsense\Alert;
use Google\Service\AlertCenter\Alert as AlertCenterAlert;

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->helper('cookie');
    }
    public function index()
    {
        $data['title'] = 'Login';
        $result = $this->Login_model->login(get_cookie('username'), get_cookie('password'));
        if ($result) {
            foreach ($result as $row) {
                $sess_array = array(
                    'MsEmpId' => $row->MsEmpId,
                    'MsEmpCode' => $row->MsEmpCode,
                    'MsEmpName' => $row->MsEmpName,
                    'MsEmpPositionName' => $row->MsEmpPositionName,
                    'MsEmpPositionId' => $row->MsEmpPositionId,
                    'MsEmpPass' => $row->MsEmpPass,
                    'login_status' => true,
                );
                $this->session->set_userdata($sess_array);
                redirect('admin', 'refresh');
            }
        } else {
            if ($this->session->userdata('login_status') != FALSE) {
                redirect('admin', 'refresh');
            } else {
                // redirect('admin','refresh');
                $this->load->view('admin/login', $data);
            };
        }
    }

    

    function logout()
    {

        delete_cookie('username');
        delete_cookie('password');

        $this->session->unset_userdata('MsEmpId');
        $this->session->unset_userdata('MsEmpCode');
        $this->session->unset_userdata('MsEmpName');
        $this->session->unset_userdata('MsEmpPositionName');
        $this->session->unset_userdata('MsEmpPositionId');
        $this->session->unset_userdata('MsWorkplaceCode');
        $this->session->unset_userdata('MsEmpPass');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif', '<p class="alert alert-success"><font FACE="calibri" Size="3px" color="RED"> Logout berhasil, Terima kasih telah menggunakan aplikasi ini...!!!</font></p>');

        redirect('Login', 'refresh');
    }

    public function check()
    {
        $username = $this->input->post('MsEmpCode');
        $pass = $this->input->post('MsEmpPass');
        $check_user = $this->Login_model->check_user($username);
        if ($check_user) {
            $result = $this->Login_model->login($username, $pass);
            if ($result) {
                foreach ($result as $row) {
                    $sess_array = array(
                        'MsEmpId' => $row->MsEmpId,
                        'MsEmpCode' => $row->MsEmpCode,
                        'MsEmpName' => $row->MsEmpName,
                        'MsEmpPositionName' => $row->MsEmpPositionName,
                        'MsEmpPositionId' => $row->MsEmpPositionId,
                        'MsWorkplaceCode' => $row->MsWorkplaceCode,
                        'MsEmpPass' => $row->MsEmpPass,
                        'login_status' => true,
                    );
                    $this->session->set_userdata($sess_array);

                    $json = array(
                        "status" => "Success",
                        "username" => "",
                        "password" => ""
                    );

                    set_cookie('username', $row->MsEmpCode, '3600');
                    set_cookie('password', $pass, '3600');
                }
            } else {
                $json = array(
                    "status" => "failed",
                    "username" => "",
                    "password" => "Password tidak cocok"
                );
            }
        } else {
            $json = array(
                "status" => "failed",
                "username" => "User belum terdaftar atau tidak aktif",
                "password" => ""
            );
        }

        header('Content-type: application/json');
        echo json_encode($json);
    }

    function loginGmail()
    {
        // $token = $this->input->post('MsCustomerTokenGmail');
        $gmail = $this->input->post('MsCustomerEmail');
        $token = $this->input->post('MsCustomerTokenGmail');
        $img = $this->input->post('MsCustomerImage');

        $dataUpdate = array(
            'MsCustomerTokenGmail' => $token,
            'MsCustomerEmail' => $gmail,
            'MsCustomerImage' => $img
        );

        $data = array(
            'MsCustomerTokenGmail' => $token,
            'MsCustomerName' => $this->input->post('MsCustomerName'),
            'MsCustomerImage' => $this->input->post('MsCustomerImage'),
            'MsCustomerEmail' => $gmail
        );

        $check_gmail = $this->Login_model->check_gmail($gmail);

        if ($check_gmail) {
            $result = $this->Login_model->loginUser($gmail);
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
                    $this->db->where('MsCustomerEmail', $gmail);
                    $this->db->update('TblMsCustomer', $dataUpdate);
                    $this->session->set_userdata($sess_array);

                    $json = array(
                        "status" => "Success",
                        "username" => "",
                        "password" => ""
                    );

                    // set_cookie('username', $row->MsEmpCode, '3600');
                    set_cookie('token', $row->MsCustomerTokenGmail, '3600');
                    set_cookie('gmail', $row->MsCustomerEmail, '3600');
                }
            }
            
            header('Content-type: application/json');
             echo json_encode($json);
        }else{
            $this->db->insert('TblMsCustomer', $data);
        }
        
    }

    function logoutUser()
    {

        delete_cookie('token');
        delete_cookie('gmail');

        $this->session->unset_userdata('MsCustomerId');
        $this->session->unset_userdata('MsCustomerTokenGmail');
        $this->session->unset_userdata('MsCustomerName');
        $this->session->unset_userdata('MsEmpPositionName');
        $this->session->unset_userdata('MsCustomerImage');
        $this->session->unset_userdata('MsCustomerEmail');
        $this->session->unset_userdata('login_status');

        redirect('home', 'refresh');
    }
}
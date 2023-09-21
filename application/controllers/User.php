<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Login_model');
      $this->load->model('User_model');
      $this->load->model('Product_model');
   }

   public function order()
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
               $data['title'] = 'Pesanan Saya';
               $data['_page'] = 'user';
               $this->load->view('templates/header.php', $data);
               $this->load->view('user/order.php');
               $this->load->view('templates/footer.php');
            }
        }else {
         if ($this->session->userdata('login_status') != FALSE) {
            $data['title'] = 'User Dashboard';
               $data['_page'] = 'user';
               $this->load->view('templates/header.php', $data);
               $this->load->view('user/order.php');
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

   public function addOrder($id, $detail)
   {
    $data['title'] = 'User Order';
    $data['_page'] = 'userOrder';
    
    $data['product'] = $this->Product_model->getDataItemOrderById($id, $detail);
    $data['alamat'] = $this->User_model->getAlamatById($this->session->userdata("MsCustomerId"));
    $data['qty'] = $this->input->get('qty');
    $this->load->view('templates/header.php', $data);
    $this->load->view('user/addOrder.php');
    $this->load->view('templates/footer.php');
   }

   public function kelolaAkun()
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
                $data['title'] = 'Kelola AKun';
                $data['_page'] = 'user';
                $data['data'] = $this->User_model->getAlamatById($this->session->userdata("MsCustomerId"));
                $this->load->view('templates/header.php', $data);
                $this->load->view('user/kelolaAkun.php');
                $this->load->view('templates/footer.php');
            }
        } else {
            if ($this->session->userdata('login_status') != FALSE) {
                $data['title'] = 'Kelola AKun';
                $data['_page'] = 'user';
                $data['data'] = $this->User_model->getAlamatById($this->session->userdata("MsCustomerId"));
                $this->load->view('templates/header.php', $data);
                $this->load->view('user/kelolaAkun.php');
                $this->load->view('templates/footer.php');
            } else {
                $data['title'] = 'Kelola AKun';
                $data['_page'] = 'user';
                $data['data'] = $this->User_model->getAlamatById($this->session->userdata("MsCustomerId"));
                $this->load->view('templates/header.php', $data);
                $this->load->view('user/kelolaAkun.php');
                $this->load->view('templates/footer.php');
            //    $data['title'] = 'Sign Up | Sign In';
            //    $data['_page'] = 'Sign In';
            //    $this->load->view('templates/header.php', $data);
            //    $this->load->view('content/SignIn/SignIn.php');
            //    $this->load->view('templates/footer.php');
            };
        }
   }

   public function get_data_city()
   {
       $type = $this->input->post("type");
       $select = $this->input->post("select");
       if($type == "provinsi"){
           $query = $this->db->query("SELECT * FROM TblMsProvince")->result();
           $list = array();
           $key = 0;
           foreach ($query as $row) {
               $list[$key]['id'] = $row->MsProvinceId;
               $list[$key]['value'] = $row->MsProvinceName;
               $list[$key]['text'] = $row->MsProvinceName;
               $list[$key]['kode'] = "";
               $key++;
           }
           echo json_encode($list);
           exit;
       }
       if($type == "kota"){
           $query = $this->db->query("SELECT * FROM TblMsRegency where MsProvinceId = '".$select["provinsi"]["id"]."'")->result();
           $list = array();
           $key = 0;
           foreach ($query as $row) {
               $list[$key]['id'] = $row->MsRegencyId;
               $list[$key]['value'] = $row->MsRegencyName;
               $list[$key]['text'] = $row->MsRegencyName;
               $list[$key]['kode'] = "";
               $key++;
           }
           echo json_encode($list);
           exit;
       }
       if($type == "kecamatan"){
           $query = $this->db->query("SELECT * FROM TblMsDistrict where MsProvinceId = '".$select["provinsi"]["id"]."' and MsRegencyId = '".$select["kota"]["id"]."'")->result();
           $list = array();
           $key = 0;
           foreach ($query as $row) {
               $list[$key]['id'] = $row->MsDistrictId;
               $list[$key]['value'] = $row->MsDistrictName;
               $list[$key]['text'] = $row->MsDistrictName;
               $list[$key]['kode'] = "";
               $key++;
           }
           echo json_encode($list);
           exit;
       }
       if($type == "kelurahan"){
           $query = $this->db->query("SELECT * FROM TblMsVillage where MsProvinceId = '".$select["provinsi"]["id"]."' and MsRegencyId = '".$select["kota"]["id"]."' and MsDistrictId = '".$select["kecamatan"]["id"]."'")->result();
           $list = array();
           $key = 0;
           foreach ($query as $row) {
               $list[$key]['id'] = $row->MsVillageId;
               $list[$key]['value'] = $row->MsVillageName;
               $list[$key]['kode'] = $row->MsVillageKodePos;
               $list[$key]['text'] = "<b>".$row->MsVillageKodePos . "</b>, " .$row->MsVillageName;
               $key++;
           }
           echo json_encode($list);
           exit;
       }
       
   }
   
   public function get_data_city_search()
   {
       $search = $this->input->post("search"); 
       $query = $this->db->join("TblMsProvince","TblMsProvince.MsProvinceId=TblMsVillage.MsProvinceId")
           ->join("TblMsRegency","TblMsRegency.MsRegencyId=TblMsVillage.MsRegencyId")
           ->join("TblMsDistrict","TblMsDistrict.MsDistrictId=TblMsVillage.MsDistrictId")
           ->like("MsProvinceName",$search)->or_like("MsRegencyName",$search)->or_like("MsDistrictName",$search)->or_like("MsVillageName",$search)->or_like("MsVillageKodePos",$search)
           ->get("TblMsVillage",100,0)->result();
       $list = array();
       $key = 0;
       foreach ($query as $row) {
           $list[$key]['provinsi']['id'] = $row->MsProvinceId;
           $list[$key]['provinsi']['value'] = $row->MsProvinceName; 
           $list[$key]['kota']['id'] = $row->MsRegencyId;
           $list[$key]['kota']['value'] = $row->MsRegencyName; 
           $list[$key]['kecamatan']['id'] = $row->MsDistrictId;
           $list[$key]['kecamatan']['value'] = $row->MsDistrictName; 
           $list[$key]['kelurahan']['id'] = $row->MsVillageId;
           $list[$key]['kelurahan']['value'] = $row->MsVillageName; 
           $list[$key]['kelurahan']['kode'] = $row->MsVillageKodePos; 
           $list[$key]['text'] =  "<b>".$row->MsVillageKodePos . "</b>, " .$row->MsVillageName. ", " .$row->MsDistrictName. ", " .$row->MsRegencyName. ", " .$row->MsProvinceName;
           $key++;
       }
       echo json_encode($list);
       exit; 
   }

   public function getCheckout($category, $index, $sessionid)
   {
      $data = $this->User_model->getDataCheckout($category, $index, $sessionid);
      $html = "";
      $delay = 0;
      foreach ($data as $row) {
         if ($delay == 400) {
            $delay = 100;
         } else {
            $delay += 100;
         }

         $status = $row->statusCheckout;

         if($status == 1){
            $status = "Belum bayar";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #ff00006b; color: #ffffffb5; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }else if($status == 2){
            $status = "Dikemas";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #7eb2ff9e; color: #ffffffc7; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }else if($status == 3){
            $status = "Dikirim";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #7a7a5bab; color: #ffffffc7; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }else if($status == 4){
            $status = "Selesai";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #004cd78c; color: #ffffff82; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }else if($status == 5){
            $status = "Dibatalkan";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #0000008c; color: #ffffff82; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }else if($status == 6){
            $status = "Pengembalian";
            $prntStatus = '<span style="padding: 0.4rem 0.6rem; border-radius: 0.3rem; background-color: #0000008c; color: #ffffff82; font-size: 0.8rem; letter-spacing: 1px;">'.$status.'</span>';
         }

         $html .= '
         <div class="mb-5">
         <div class="mb-2 p-3" style="width: 100%; background-color: #1e2124;">
             <div class="d-flex justify-content-between align-items-center" style="padding: 1rem 0;">
                <div class="d-flex flex-column" style="gap:0.3rem">
                    <span style="letter-spacing: 2px; font-size: 0.9rem; font-weight: 200;">No. Pesanan: '.$row->codeCheckout.'</span>
                    <span style="letter-spacing: 2px; font-size: 0.9rem; font-weight: 200;"><i class="fas fa-calendar"></i> '.$row->dateCheckout.'</span>
                </div>

                <div>
                    '.$prntStatus.'
                </div>
             </div>
             <hr style="color: white;">

             <div class="d-flex py-2 align-items-center justify-content-between">
                 <div class="d-flex gap-5">
                     <img class="img-fluid lazy" width="100px" height="100px"
                         src="'. base_url() .'/asset/image/product/BTL0002.png"></img>
                     <div class="d-flex flex-column justify-content-center">
                         <span
                             style="font-size: 0.8rem; letter-spacing: 3px; font-weight: 200; margin-bottom: 0.5rem;">BATA
                             TEMPEL</span>
                         <span style="font-size: 1.2rem; letter-spacing: 4px; font-weight: 700;">Aussy
                             Brick</span>
                         <span
                             style="font-size: 0.9rem; letter-spacing: 3px; font-weight: 300; margin-bottom: 1rem;">Ukuran
                             20 x 20 x 10 cm</span>
                         <span
                             style="font-size: 1rem; font-weight: 700; letter-spacing: 2px;">x100</span>
                     </div>
                 </div>


                 <div class="">
                     <span style="letter-spacing: 4px;">Rp. 10,000</span>
                 </div>
             </div>
         </div>

         <div class="p-3" style="background-color: #1e2124; width: 100%; margin-bottom: 0.1rem;">
            <div class="row row-cols-md-2 py-2" style="align-items: center; font-weight: 300; letter-spacing: 3px;">
                <div class="col-md-8">
                    <span style="font-size: 1rem; font-weight: 500; letter-spacing: 3px;"><i class="fas fa-tag"></i> Voucher Omahbata</span>
                </div>

                <div class="col-md-4 d-flex justify-content-end">
                    <span style="cursor: pointer; font-size: 0.8rem; font-weight: 200; letter-spacing: 3px; border: 1px solid #ffffff54; padding: 0.5rem;">Pilih Voucher</span>
                </div>

            </div>
        </div>

        <div class="p-3" style="background-color: #1e2124;">
            <div class="row row-cols-md-2 py-2" style="font-size: 0.8rem; font-weight: 300; letter-spacing: 3px;">
                <div class="col-md-8">
                    <div class="row row-cols-3">
                        <div class="col-4">
                            <span>Sub total</span>
                        </div>
                        
                        <div class="col-3">
                            <span> : Rp.</span>
                        </div>

                        <div class="col-5 d-flex justify-content-end">
                            <span>1.000.000</span>
                        </div>
                    </div>

                    <div class="row row-cols-3">
                        <div class="col-4">
                            <span>Grand total</span>
                        </div>
                        
                        <div class="col-3">
                            <span> : Rp.</span>
                        </div>

                        <div class="col-5 d-flex justify-content-end">
                            <span>1.000.000</span>
                        </div>
                    </div>

                    <div class="row row-cols-3">
                        <div class="col-4">
                            <span>Discount</span>
                        </div>
                        
                        <div class="col-3">
                            <span> : Rp.</span>
                        </div>

                        <div class="col-5 d-flex justify-content-end">
                            <span>0</span>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 d-flex justify-content-end">
                    <div class="d-flex flex-row gap-1" style="height: fit-content; align-self: end;">
                        <span style="letter-spacing: 1px; font-size: 0.8rem; padding: 0.3rem 0.8rem; border: 1px solid #5a5e62; background-color: #1e2124; color: #959ca3;">Bayar sekarang</span>
                        <span style="letter-spacing: 1px; font-size: 0.8rem; padding: 0.3rem 0.8rem; border: 1px solid #5a5e62; background-color: #1e2124; color: #959ca3;">Chat admin</span>
                    </div>
                </div>

            </div>
        </div>
     </div> ';
   }

   if ($html == ""){
      $html = "Data Tidak Ditemukan";
   }
   echo $html;
      
   }
}
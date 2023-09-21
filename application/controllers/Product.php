<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
      $this->load->model('Login_model');
   }

   public function index()
   {
      $data['title'] = 'Products';
      $data['_page'] = 'PRODUCTS';
      $data['product'] = $this->Product_model->getDataProduct();
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/product/products.php', $data);
      $this->load->view('templates/footer.php');
   }
   // public function productsById($id)
   // {
   //    $data['title'] = "Products Byid";
   //    $data['_page'] = 'PRODUCTS';
   //    $data['productsById'] = $this->Product_model->getDataProductById($id);
   //    $data['productKategori'] = $this->Product_model->getDataProductKategori();
   //    $data['productKategoriById'] = $this->Product_model->getDataProductKategoriById($id);
   //    $this->load->view('templates/header.php', $data, $id);
   //    $this->load->view('content/product/productsById.php', $data);
   //    $this->load->view('templates/footer.php');
   // }
   public function detailItem($id)
   {

      $configfile = getcwd() . "/asset/image/produk/".$id; 
        $myfiles = array_diff(scandir($configfile), array('.', '..'));  
        $dataimage = array();
        foreach($myfiles as $file){ 
            $dataimage[] = 'data:image/png;base64,' . base64_encode(file_get_contents(getcwd() . "/asset/image/produk/".$id."/".$file));
        } 
        $data["produkimage"]=$dataimage;
      //   $data["satuan"] = $this->db->get("TblMsSatuan")->result();
      //   $data["berat"]= $this->db->get("TblMsBerat")->result();
      //   $data["produk"]= $this->db->where("MsProdukId",$id)->get("TblMsProduk")->row();
      //   $data["produkdetail"]= $this->db->where("MsProdukDetailRef",$id)->get("TblMsProdukDetail")->result();
      //   echo $this->load->view('message/master/item_edit', $data, TRUE);

      $this->load->library('user_agent');
      $data['title'] = "Detail Item";
      $data['_page'] = 'PRODUCTS';
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $data['MsitemById'] = $this->Product_model->getDataItemById($id);
      $data['MsitemDeskripsi'] = $this->Product_model->getDataItemDeskripsiById($id);
      // $data['MsItemSubImg'] = $this->Product_model->getDataItemSubImgById($id);
      $data['MsItemSubImgFirst'] = $this->Product_model->getDataItemSubImgFirstById($id);
      $data['DataProjectItem'] = $this->Product_model->getDataProjectItem($id);
      $this->load->view('templates/header.php', $data, $id);
      $this->load->view('content/product/itemById.php', $data);
      $this->load->view('templates/footer.php');
   }

   public function getitem($category, $index)
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
            $data = $this->Product_model->getDataProductNext($category, $index);
            $html = "";
            $delay = 0;
            foreach ($data as $row) {
               if ($delay == 400) {
                  $delay = 100;
               } else {
                  $delay += 100;
               }

               $url = base_url()."asset/image/produk/".$item["MsProdukId"]."/".$item["MsProdukCode"]."";

                        // Menambahkan "_1" pada akhir URL
               $url_baru = str_replace($item["MsProdukCode"], "".$item["MsProdukCode"]."_1.png", $url);
      
      
      
               $html .= '

               <div class="produknew-contain d-flex flex-column p-2">
                  <img class="produknew-img lazy skeleton" data-src="' .$url_baru. '" alt="">
      
                  <div class="produknew-detail d-flex flex-column">
                  <span style="letter-spacing: 1px; margin-top: 2.7rem; padding: 0 0.3rem; font-size: 1.4vh; font-weight: 200;">' . $row->MsItemCatName . ' | <span style=" font-weight: 700;">  ' . $row->MsProdukName . ' </span></span>
                  <span style="padding: 0.4rem 0.3rem; font-size: 1.4vh;">Rp. <span style="font-size: 1.7vh;">'. number_format($row->MsProdukDetailPrice) .'</span></span>
                     
      
                     <a href="'.base_url("signIn").'"><div id="btnCart" class="produknew-marker swalWishList">
                        <i class="fas fa-heart"></i>
                     </div></a>
                     <input type="hidden" id="qtycart" value="1">
      
                     <div class="produknew-detail-button">
                     <i class="add_cart btn-produknew-cart fas fs-4 fa-shopping-cart swalCart" onClick="addCart(this)" data-msitemref="'.$row->MsProdukId.'" data-token="'.$this->session->userdata("MsCustomerTokenGmail").'"></i>
                       <a style="text-decoration: none; " href="' . base_url("product/detailItem/" . $row->MsProdukId) . '"><span class="btn-produknew-buy">BELI</span></a>
                     </div>
                  </div>
               </div>';
            }
            echo $html;
            }
        }else{
         $data = $this->Product_model->getDataProductNext($category, $index);
            $html = "";
            $delay = 0;
            foreach ($data as $row) {
               if ($delay == 400) {
                  $delay = 100;
               } else {
                  $delay += 100;
               }
      
               $url = base_url()."asset/image/produk/".$row->MsProdukId."/".$row->MsProdukCode."";

               // Menambahkan "_1" pada akhir URL
                $url_baru = str_replace($row->MsProdukCode, "".$row->MsProdukCode."_1.png", $url);
      
      
               $html .= '
      
               <div class="produknew-contain d-flex flex-column p-2">
                  <img class="produknew-img lazy skeleton" data-src="' .$url_baru. '" alt="">
      
                  <div class="produknew-detail d-flex flex-column">
                  <span style="letter-spacing: 1px; margin-top: 2.7rem; padding: 0 0.3rem; font-size: 1.4vh; font-weight: 200;">' . $row->MsItemCatName . ' | <span style=" font-weight: 700;">  ' . $row->MsProdukName . ' </span></span>
                  <span style="padding: 0.4rem 0.3rem; font-size: 1.4vh;">Rp. <span style="font-size: 1.7vh;">'. number_format($row->MsProdukDetailPrice) .'</span></span>
                     
      
                     <a href="'.base_url("signIn").'"><div id="btnCart" class="produknew-marker swalWishList">
                        <i class="fas fa-heart"></i>
                     </div></a>
                     <input type="hidden" id="qtycart" value="1">
      
                     <div class="produknew-detail-button">
                       <a href="'.base_url("signIn").'"><i class="add_cart btn-produknew-cart fas fa-shopping-cart swalCart"></i></a>
                       <a style="text-decoration: none; " href="' . base_url("product/detailItem/" . $row->MsProdukId) . '"><span class="btn-produknew-buy">BELI</span></a>
                     </div>
                  </div>
               </div>';
            }
            echo $html;
        }
   }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Uploaded extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->helper('file');
      $this->load->model('Product_model');
      $this->load->model('Project_model');
   }

   function uploadProductImage($id = null)

   {
      if (!empty($_FILES['userFile'])) {
         $config['upload_path'] = FCPATH . '/asset/image/subProduct';
         $config['allowed_types'] = 'gif|jpg|jpeg|png';
         $this->load->library('upload', $config);
         for ($i = 0; $i < count($_FILES['userFile']['name']); $i++) {
            $_FILES['tmp'] = array(
               'name' => $_FILES['userFile']['name'][$i],
               'type' => $_FILES['userFile']['type'][$i],
               'tmp_name' => $_FILES['userFile']['tmp_name'][$i],
               'error' => $_FILES['userFile']['error'][$i],
               'size' => $_FILES['userFile']['size'][$i],
            );

            if (!$this->upload->do_upload('tmp')) {
               $error = array('error' => $this->upload->display_errors());
               echo $error;
            } else {
               $data = array('upload_data' => $this->upload->data());
               echo json_encode($data);
               $this->Product_model->insertProductImage($data, $id);
            }
         }

      }
   }

   function uploadGalleryProject($id = null)
   {
      if (!empty($_FILES['userFile'])) {
         $config['upload_path'] = FCPATH . '/asset/image/galleryProject/';
         $config['allowed_types'] = 'gif|jpg|jpeg|png';
         $this->load->library('upload', $config);
         for ($i=0; $i < count($_FILES['userFile']['name']); $i++) { 
            $_FILES['tmp'] = array(
               'name' => $_FILES['userFile']['name'][$i],
               'type' => $_FILES['userFile']['type'][$i],
               'tmp_name' => $_FILES['userFile']['tmp_name'][$i],
               'error' => $_FILES['userFile']['error'][$i],
               'size' => $_FILES['userFile']['size'][$i],
            );

            if (!$this->upload->do_upload('tmp')) {
               $error = array('error' => $this->upload->display_errors());
               echo $error;
            } else {
               $data = array('upload_data' => $this->upload->data());
               echo json_encode($data);
               $this->Project_model->insertProjectGallery($data, $id);
            }
         }

      }
   }

   function uploadProjectImg($id = null)
   {
      if (!empty($_FILES['userFile'])) {
         $config['upload_path'] = FCPATH . '/asset/image/project/';
         $config['allowed_types'] = 'gif|jpg|jpeg|png';
         $this->load->library('upload', $config);
         for ($i=0; $i < count($_FILES['userFile']['name']); $i++) { 
            $_FILES['tmp'] = array(
               'name' => $_FILES['userFile']['name'][$i],
               'type' => $_FILES['userFile']['type'][$i],
               'tmp_name' => $_FILES['userFile']['tmp_name'][$i],
               'error' => $_FILES['userFile']['error'][$i],
               'size' => $_FILES['userFile']['size'][$i],
            );

            if (!$this->upload->do_upload('tmp')) {
               $error = array('error' => $this->upload->display_errors());
               echo $error;
            } else {
               $data = array('upload_data' => $this->upload->data());
               echo json_encode($data);
               $this->Project_model->insertProjectimg($data, $id);
            }
         }
      }
   }

   // function removeGalleryProduct()
   // {
   //    $token = $this->input->post('token');

   //    $foto = $this->db->get_where('TblMsItemGallery', array('TblMsItemGalleryRef' => $token));

   //    if ($foto->num_rows() > 0) {
   //       $hasil = $foto->row();
   //       $nama_foto = $hasil->nama_foto;
   //       if (file_exists($file = FCPATH . './asset/image/product/test' . $nama_foto)) {
   //          unlink($file);
   //       }
   //       $this->db->delete('TblMsItemGallery', array('TblMsItemGalleryref' => $token));
   //    }

   //    echo "{}";
   // }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
      $this->load->model('Project_model');
   }

   public function index()
   {
      $data['title'] = 'Project';
      $data['_page'] = 'PROJECT';
      $data['project'] = $this->Project_model->getDataProject();
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/project/project.php');
      $this->load->view('templates/footer.php');
   }
   public function projectById($id)
   {
      $data['title'] = 'Customer Project';
      $data['_page'] = 'PROJECT';
      $data['productKategori'] = $this->Product_model->getDataProductKategori();
      $data['projectGallery'] = $this->Project_model->getDataProjectGallery($id);
      $data['projectById'] = $this->Project_model->getDataProjectById($id);
      $data['projectItem'] = $this->Project_model->getDataProjectItem($id);
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/project/projectById.php');
      $this->load->view('templates/footer.php');
   }
}

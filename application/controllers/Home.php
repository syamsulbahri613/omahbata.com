<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Project_model');
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->output->delete_cache();

		$data['title'] = 'Homepage';
		$data['_page'] = 'HOME';
		$data['project'] = $this->Project_model->getDataProjectLastUpdate();
		$data['productKategori'] = $this->Product_model->getDataProductKategori();
		$data['WebClientLogo'] = $this->Project_model->getDataProjectClient();
		$this->load->view('templates/header.php', $data);
		$this->load->view('content/home/HomePage.php');
		$this->load->view('templates/footer.php');
	}

	public function About()
	{

		$data['title'] = 'Omahbata Group';
		$this->load->view('About/About.php', $data);
	}

	
}

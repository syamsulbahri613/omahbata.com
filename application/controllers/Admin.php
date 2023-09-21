<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Project_model');
	}

	public function index()
	{
		// $data['title'] = 'Login';
		// $this->load->view('admin/login.php', $data);
		$data['title'] = 'Dashboard';
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/dashboard.php');
		$this->load->view('templates/footerAdmin.php');
	}

	// public function Dashboard()
	// {
	// 	$data['title'] = 'Dashboard';
	// 	$this->load->view('templates/adminHeader.php', $data);
	// 	$this->load->view('admin/dashboard.php');
	// 	$this->load->view('templates/footerAdmin.php');
	// }

	public function kategori()
	{
		$data['title'] = 'Kategori';
		// $data['_page'] = 'HOME';
		// $data['project'] = $this->Project_model->getDataProjectLastUpdate();
		// $data['productKategori'] = $this->Product_model->getDataProductKategori();
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/kategori.php');
		$this->load->view('templates/footerAdmin.php');
	}
	public function getDataProject()
	{
		$data['title'] = 'project';
		// $data['_page'] = 'HOME';
		$data['project'] = $this->Project_model->getDataProjectGallery();
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/adminProject.php');
		$this->load->view('templates/footerAdmin.php');
	}

	public function item()
	{
		$data['title'] = 'Produk';
		$id = $this->input->post("idRef");
		$data['galleryProduk'] = $this->Project_model->getDataProjectItem($id);
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/produk.php');
		$this->load->view('templates/footerAdmin.php');

	}

	public function project()
	{
		$data['title'] = 'Project';
		$this->load->view('templates/adminHeader.php', $data);
		$this->load->view('admin/project.php');
		$this->load->view('templates/footerAdmin.php');

	}
	// public function list_product()
	// {
	// 	set_time_limit(0);
	// 	$dir    = './asset/image/product';
	// 	$files = array_diff(scandir($dir), array('.', '..'));
	// 	foreach ($files as $row) {
	// 		if (!file_exists('./asset/image/product/remove/' . $row)) {
	// 			if (pathinfo($row, PATHINFO_EXTENSION)) {
	// 				$this->remove_product($row);
	// 				sleep(10);
	// 			}
	// 		}
	// 	}
	// }
	// public function remove_product($product)
	// {
	// 	$client = new GuzzleHttp\Client(); #guzzle
	// 	try {
	// 		$response = $client->request(
	// 			'POST',
	// 			'https://api.remove.bg/v1.0/removebg',
	// 			[
	// 				'multipart' => [
	// 					[
	// 						'name'     => 'image_file',
	// 						'contents' => fopen('./asset/image/product/' . $product, 'r')
	// 					],
	// 					[
	// 						'name'     => 'size',
	// 						'contents' => 'auto'
	// 					]
	// 				],
	// 				'headers' => [
	// 					'X-Api-Key' => 'hwWcp1ySgbpLnA46Nr5RN15f'
	// 				]
	// 			]
	// 		);
	// 		$fp = fopen("./asset/image/product/remove/" . $product, "wb");
	// 		fwrite($fp, $response->getBody());
	// 		fclose($fp);
	// 	} catch (GuzzleHttp\Exception\BadResponseException $e) {
	// 		#guzzle repose for future use
	// 		$response = $e->getResponse();
	// 		$responseBodyAsString = $response->getBody()->getContents();
	// 		print_r($responseBodyAsString);
	// 	}
	// }
}

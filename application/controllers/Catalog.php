<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->model('Model_drug');

	}
	public function index()
	{
		$data['title'] = 'catalog';
		$data['catalog'] = $this->Model_drug->get_drug_by_category($_GET['c']);
		$data['category'] = $_GET['c'];
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');
	}


	

}
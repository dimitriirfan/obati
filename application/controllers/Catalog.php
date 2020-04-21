<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {


	public function index()
	{
		$data['title'] = 'catalog';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog');
		$this->load->view('template/footer');
	}

	

}
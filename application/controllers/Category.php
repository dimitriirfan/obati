<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	public function index()
	{
		$data['title'] = 'category';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_category');
		$this->load->view('template/footer');
	}

	

}
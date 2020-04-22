<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_drugdetail extends CI_Controller {


	public function index()
	{
		$data['title'] = 'drugDetail';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_drugdetail');
		$this->load->view('template/footer');
	}

}
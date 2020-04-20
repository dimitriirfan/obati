<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_cart extends CI_Controller {


	public function index()
	{
		$data['title'] = 'cart';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_cart');
		$this->load->view('template/footer');
	}

}
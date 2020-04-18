<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_article extends CI_Controller {


	public function index()
	{
		$data['title'] = 'article';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_article');
	}

	public function toLanding() { 
		$this->load->view("view_landing");
		$this->load->view("template/footer");
	}

}
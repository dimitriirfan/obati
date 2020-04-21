<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {


	public function index()
	{
		$data['title'] = 'article';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_article');
		$this->load->view("template/footer");

	}


}
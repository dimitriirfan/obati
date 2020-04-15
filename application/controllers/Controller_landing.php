<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_landing extends CI_Controller {


	public function index()
	{
		$data['title'] = 'landing';
		$this->load->view('template/header', $data);
		$this->load->view('view_landing');
		$this->load->view('template/footer');
	}

	public function toLogin() { 
		$this->load->view("view_login");

	}

	public function toRegister() { 
		$this->load->view("view_register");

	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {


	public function index()
	{
		$this->load->view('view_login');
	}

	public function toLanding() { 
		$this->load->view("view_landing");
		$this->load->view("template/footer");
	}


	public function toRegister() { 
		$this->load->view('view_register');
	}
}
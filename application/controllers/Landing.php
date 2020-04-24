<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		$data['title'] = 'landing';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_landing');
		$this->load->view('template/footer');
		
	}

	public function logout() { 
		session_destroy();
		redirect('landing');
	}

}
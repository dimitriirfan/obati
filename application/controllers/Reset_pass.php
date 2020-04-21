<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_pass extends CI_Controller {


	public function index()
	{
		$data['title'] = 'reset';
		$this->load->view('template/header', $data);
		$this->load->view('view_resetpass');
	}

	
}
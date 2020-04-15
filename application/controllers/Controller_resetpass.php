<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_resetpass extends CI_Controller {


	public function index()
	{
		$data['title'] = 'reset';
		$this->load->view('template/header', $data);
		$this->load->view('view_resetpass');
	}

	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {


	public function index()
	{
        $data['title'] = 'profile';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_profile');
		$this->load->view('template/footer');
	}

}
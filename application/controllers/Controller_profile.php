<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_profile extends CI_Controller {


	public function index()
	{
        $data['title'] = 'Edit Profile';
		$this->load->view('template/header', $data);
		$this->load->view('view_editprofile');
		$this->load->view('template/footer');
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_detail_category extends CI_Controller {


	public function index()
	{
		$this->load->view('view_detail_category');
		$this->load->view('template/footer');
	}


}
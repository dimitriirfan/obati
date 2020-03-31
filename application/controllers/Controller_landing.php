<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_landing extends CI_Controller {


	public function index()
	{
		$this->load->view('view_landing');
	}

}
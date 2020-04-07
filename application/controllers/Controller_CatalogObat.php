<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_CatalogObat extends CI_Controller {


	public function index()
	{
		$this->load->view('View_CatalogObat');
	}

}
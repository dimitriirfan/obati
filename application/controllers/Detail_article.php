<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_article extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->model('Model_article');
		
	}


	public function detail($id)
	{
		
		$data['title'] = 'detail';
		$data['detail'] = $this->Model_article->get_article_by_id($id);

		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_detailarticle',$data);
		$this->load->view('template/footer');
	}

}
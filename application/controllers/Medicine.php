<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicine extends CI_Controller {


	public function index()
	{
		$data['title'] = 'drugDetail';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_medicine');
		$this->load->view('template/footer');
	}

	public function search() {
		$this->load->model('Model_drug');
		$keyword = $this->input->get('keyword');
		
		if ($keyword != "" && $keyword != null) { 
			$res = $this->Model_drug->search($keyword);
			echo json_encode($res);

		}
		
		

	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {


	public function index()
	{
		$this->load->model('Model_drug');

		$data['title'] = 'landing';
		$data['c1'] = $this->Model_drug->count_row_by_category("Batuk dan Flu");
		$data['c2'] = $this->Model_drug->count_row_by_category("Vitamin dan suplemen");
		$data['c3'] = $this->Model_drug->count_row_by_category("Mata");
		$data['c4'] = $this->Model_drug->count_row_by_category("Kulit");

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
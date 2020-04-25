<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_pass extends CI_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_user');
	
	}

	public function index()
	{
		$data['title'] = 'reset';
		$this->load->view('template/header', $data);
		$this->load->view('view_resetpass');
		$this->load->library('form_validation');

	}

	public function reset_pass() { 

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_rules('confirm', 'Confirm', 'required|trim');

		if ($this->form_validation->run() == false ) {
			$data['title'] = 'reset';
			$this->load->view('template/header', $data);
			$this->load->view('view_resetpass');
		}else { 
			
			
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->Model_user->get_user_by_email($email);
			
			if($user) {
			

				$this->Model_user->update_password($password, $email);
				redirect('Login');

			 }
			else {
				$this->session->set_flashdata('message','<div class="alert
				alert-danger" role="alert">maaf email anda belom terdaftar!</div>');
				redirect('Reset_pass');
			}


		}



	}

	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {


	public function __construct() { 
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->model('Model_user');
	}
	public function index()
	{
		$data['title'] = 'login';
		$this->load->view('template/header', $data);
		$this->load->view('view_login');
	}

	public function login() { 
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() != FALSE) { 
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$isValid = $this->Model_user->login($email, $password);
			if ($isValid) { 
				$user = $this->Model_user->getUserByEmail($email);
				$this->session->set_userdata('user', $user);
				redirect('Controller_landing');
			} else { 
				$this->session->set_flashdata('message', 'Username or password invalid');
				redirect('Controller_login');
			}
			
		}else { 
			$this->session->set_flashdata('message', 'Username or password invalid');
			redirect('Controller_login');

		}


	}
}
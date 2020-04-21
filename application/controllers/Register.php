<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct () {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Model_user');

	}

	public function index()
	{
		$data['title'] = 'register';
		$this->load->view('template/header', $data);
		$this->load->view('view_register');
	}

	public function register() { 

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('birth', 'Birth', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[confirm]');
		$this->form_validation->set_rules('confirm', 'Confirm', 'required|trim');

		if ($this->form_validation->run() == false ) {
			$data['title'] = 'register';
			$this->load->view('template/header', $data);
			$this->load->view('view_register');

		}else { 
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'birth' =>  $this->input->post('birth'), 
				'password' => $this->input->post('password'),
				'pic' => './assets/img/profile/defaultpic.jpg',
				'gender' => '',
				'no_hp' => ''
			];

			$user = $this->Model_user->get_user_by_email($data['email']);
			if ($user == NULL) { 
				$this->Model_user->register($data);
				$this->session->set_flashdata('message', 'success');
				redirect('register');

			}
		}

		
	}
}
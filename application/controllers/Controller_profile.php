<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_profile extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->library('form_validation');
		$this->load->model('Model_user');
	}


	public function index()
	{
        $data['title'] = 'profile';
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_profile');
		$this->load->view('template/footer');
	}

	public function uploadPhoto() { 

		$config['upload_path']          = './assets/img/profile/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 3000;
		$config['max_height']           = 3000;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload("image")) {
			$pic = './assets/img/profile/'.$this->upload->data("file_name");
			$this->Model_user->uploadPhoto($this->session->userdata("user")->id, $pic);
			$user = $this->Model_user->getUserById($this->session->userdata("user")->id);
			$this->session->set_userdata('user', $user);
			$this->session->set_flashdata("message-success", "Successfully updated");
			redirect("Controller_profile");

		}else { 
			$this->session->set_flashdata("message-danger", $this->upload->display_errors());
			redirect("Controller_profile");

		}

	}

	public function updateProfile() { 
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('birth', 'Birth', 'required|trim');

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$address = $this->input->post('address');	
		$birth = $this->input->post('birth');	
		$gender = $this->input->post('gender');	
		$no_hp = $this->input->post('no_hp');	

		if ($this->form_validation->run() == false ) {
			redirect('Controller_landing');

		}else { 

			$check = $this->Model_user->checkUpdateEmail($this->session->userdata("user")->email, $email);
			if ($check == null) {
				$data = [
					'name' => $name,
					'email' => $email,
					'address' => $address,
					'birth' =>  $birth, 
					'gender' => $gender,
					'no_hp' => $no_hp
				];

				$this->Model_user->updateProfile((object) $data, $this->session->userdata("user")->id);
				$user = $this->Model_user->getUserById($this->session->userdata("user")->id);
				$this->session->set_userdata("user", $user);
				$this->session->set_flashdata("message", "Successfully updated");
				redirect("Controller_profile");
				 
	
			}
			

		
		}
		
	}


}
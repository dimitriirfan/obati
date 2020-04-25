<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->library('form_validation');
			
		

		$this->load->model('Model_drug');
		$this->load->model('Model_cart');
		$this->load->model('Model_transaction');
	}


	public function index()
	{
		$data['title'] = 'cart';
		// $data['cart'] = $this->Model_cart->get_cart_by_userid($this->session->userdata('user')->id);
		$cart = $this->Model_cart->get_cart_by_userid($this->session->userdata('user')->id);
		$this->session->set_userdata('cart', $cart);
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_cart', $data);
		$this->load->view('template/footer');

	}

	public function add_to_cart	() { 
		$userid = $this->session->userdata('user')->id;
		$id = $this->input->post('id');
		$qty = $this->input->post('qty');

		$medicine = $this->Model_drug->get_drug_by_id($id);

		if ($this->Model_cart->is_exist_medicine($id)) { 
			$qty = $qty + $this->Model_cart->get_medicine_qty($id);
			$this->Model_cart->update_medicine_qty($id, $qty);

		}else { 
			$data = array (
					"idUser" => $this->session->userdata('user')->id,
					"idMedicine" => $id,
					"name" => $medicine->name,
					"category" => $medicine->category,
					"price" => $medicine->price,
					"qty" => $qty,
					"pic" => $medicine->pic
			);

		$this->Model_cart->insert_cart($data);
		}

	}

	public function delete_item() { 
		$id = $this->input->post('id');
		$this->Model_cart->delete_item_by_id($id);
	}

	public function clear_cart() { 
		$idUser = $this->input->post('id');	

		$this->Model_cart->clear_cart($idUser); 
		
	}

	public function add_item() {
		$id = $this->input->post('id'); 
		$this->Model_cart->add_item_by_id($id);
	
	}

	public function sub_item() { 
		$id = $this->input->post('id');
		$this->Model_cart->sub_item_by_id($id);
	}

	public function checkout() { 
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
		$this->form_validation->set_rules('lname', 'Nama Belakang', 'required|trim');

		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('post', 'Kode Pos', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'Password', 'required|trim');
		$this->form_validation->set_rules('total', 'Total', 'required|trim|callback_check_total');
		$this->form_validation->set_message('check_total','Belum ada obat dalam cart');

		

		if ($this->form_validation->run()) { 
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$address = $this->input->post('address');
			$post = $this->input->post('post');
			$no_hp = $this->input->post('no_hp');
			$total = $this->input->post('total');
			$data = array(
				'idUser' => $this->session->userdata('user')->id,
				'first_name' => $fname,
				'last_name' => $lname,
				'address' => $address,
				'post' => $post,
				'no_hp' => $no_hp, 
				'email' => $this->session->userdata('user')->email,
				'date' => date("Y/m/d"),
				'total' => $total
			);

			$this->Model_transaction->add_transaction($data);
			$this->Model_cart->clear_cart($this->session->userdata('user')->id);
			$this->session->set_flashdata('success', 'success');
			redirect('cart');
		}else { 
			$this->session->set_flashdata('error', 'Anda belum memiliki obat dalam cart');
			redirect('Cart', 'refresh');
		}

	}

	function check_total($str) {
		if ($str == '0' || $str == 0) { 
			return false;
		}else { 
			return true;
		}

	}
}

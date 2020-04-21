<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->model('Model_drug');
		$this->load->library('pagination');

		
		
	}
	public function index()
	{

		
	}

	public function vitamin_suplemen() { 
		$config['base_url'] = 'http://localhost/obati/catalog/vitamin_suplemen/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Vitamin dan suplemen');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Vitamin & Suplemen';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Vitamin dan suplemen', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function anti_nyeri() { 
		$config['base_url'] = 'http://localhost/obati/catalog/anti_nyeri/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Anti Nyeri');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Anti Nyeri';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Anti Nyeri', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function Mata() { 
		$config['base_url'] = 'http://localhost/obati/catalog/mata/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Vitamin dan suplemen');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Anti Nyeri';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Mata', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function alergi() { 
		$config['base_url'] = 'http://localhost/obati/catalog/alergi/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('alergi');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['start'] = $this->uri->segment(3);
		$data['category'] = 'Alergi';
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('alergi', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function kontrasepsi_hormon() { 
		$config['base_url'] = 'http://localhost/obati/catalog/kontrasepsi_hormon/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('kontrasepsi dan hormon');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['start'] = $this->uri->segment(3);
		$data['category'] = 'Kontrasepsi & Hormon';
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('kontrasepsi dan hormon', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function batuk_flu() { 
		$config['base_url'] = 'http://localhost/obati/catalog/batuk_flu/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Batuk dan flu');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Batuk & Flu';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Batuk dan flu', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function antibiotik() { 
		$config['base_url'] = 'http://localhost/obati/catalog/antibiotik/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Antibiotik');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Antibiotik';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Antibiotik', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function otot_tulang_sendi() { 
		$config['base_url'] = 'http://localhost/obati/catalog/otot_tulang_sendi/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Otot, Tulang dan Sendi');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Otot, Tulang & Sendi';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Otot, Tulang dan Sendi', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function p3k() { 
		$config['base_url'] = 'http://localhost/obati/catalog/p3k/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('p3k');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['catalog'] = 'P3K';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('p3k', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function kulit() { 
		$config['base_url'] = 'http://localhost/obati/catalog/kulit/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Kulit');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Kulit';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Kulit', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function demam() { 
		$config['base_url'] = 'http://localhost/obati/catalog/demam/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Demam');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Demam';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Demam', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}

	public function mulut_tenggorokan() { 
		$config['base_url'] = 'http://localhost/obati/catalog/mulut_tenggorokan/';
		$config['total_rows'] = $this->Model_drug->count_row_by_category('Mulut dan Tenggorokan');

		$config['per_page'] = 12;
		
		$config['full_tag_open'] = '<div class="page_indicator"><ul class="pagination pg-darkgrey pagination-lg">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a href=""class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num _tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');
		$data['title'] = 'catalog';
		$data['category'] = 'Mulut dan Kategori';
		$data['start'] = $this->uri->segment(3);
		$data['catalog'] = $this->Model_drug->get_drug_limit_by_category('Mulut dan Tenggorokan', $config['per_page'],$data['start']);
		$this->pagination->initialize($config);
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar');
		$this->load->view('view_catalog', $data);
		$this->load->view('template/footer');

	}
}

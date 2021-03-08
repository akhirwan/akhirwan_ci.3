<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'admin/login?alert=belum_login');
		}
		$this->load->model('M_data');
	}
	
	public function index() {
		$data['pages'] = $this->M_data->get_data('pages')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/pages/index',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function add() {
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/pages/viewadd');
		$this->load->view('admin/dashboard/footer');
	}
	
	public function insert() {
		$this->form_validation->set_rules('judul','Judul','required|is_unique[pages.page_title]');
		$this->form_validation->set_rules('konten','Konten','required');
		
		if($this->form_validation->run() !=false){
			$judul 	= $this->input->post('judul');
			$slug 	= strtolower(url_title($judul));
			$konten = $this->input->post('konten');
			$data 	= array(
				'page_title'	=> $judul,
				'page_slug'		=> $slug,
				'page_content' 	=> $konten
			);
			$this->M_data->insert_data($data,'pages');
			redirect(base_url().'admin/pages');
		} else {
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/pages/viewadd');
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function edit($id) {
		$where = array('page_id' => $id);
		$data['pages'] = $this->M_data->edit_data($where,'pages')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/pages/viewedit',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function update() {
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('konten','Konten','required');
		
		if($this->form_validation->run() !=false){
			$id 	= $this->input->post('id');
			$judul 	= $this->input->post('judul');
			$slug 	= strtolower(url_title($judul));
			$konten = $this->input->post('konten');
			$where	= array('page_id' => $id);
			$data 	= array(
				'page_title'	=> $judul,
				'page_slug'		=> $slug,
				'page_content' 	=> $konten
			);
			$this->M_data->update_data($where,$data,'pages');
			redirect(base_url().'admin/pages');
		} else {
			$id 	= $this->input->post('id');
			$where	= array('page_id' => $id);
			$data['pages'] = $this->M_data->edit_data($where,'pages')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/pages/viewedit',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function del($id) {
		$where = array('page_id' => $id);
		$this->M_data->delete_data($where,'pages');
		redirect(base_url().'admin/pages');
	}
}
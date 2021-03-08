<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'admin/login?alert=belum_login');
		}
		$this->load->model('M_data');
	}
	
	public function index() {
		$data['category'] = $this->M_data->get_data('category')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/categories/index',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function add() {
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/categories/viewadd');
		$this->load->view('admin/dashboard/footer');
	}
	
	public function insert() {
		$this->form_validation->set_rules('kategori','Kategori','required');
		
		if($this->form_validation->run() !=false){
			$kategori = $this->input->post('kategori');
			$data = array(
				'cat_name'	=> $kategori,
				'cat_slug'	=> strtolower(url_title($kategori))
			);
			$this->M_data->insert_data($data,'category');
			redirect(base_url().'admin/categories');
		} else {
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/categories/viewadd');
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function edit($id) {
		$where = array('cat_id' => $id);
		$data['category'] = $this->M_data->edit_data($where,'category')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/categories/viewedit',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function update() {
		$this->form_validation->set_rules('kategori','Kategori','required');
		if($this->form_validation->run() !=false){
			$id 		= $this->input->post('id');
			$kategori	= $this->input->post('kategori');
			
			$where 	= array('cat_id' => $id);
			$data 	= array(
				'cat_name'	=> $kategori,
				'cat_slug'	=> strtolower(url_title($kategori))
			);
			$this->M_data->update_data($where,$data,'category');
			redirect(base_url().'admin/categories');
		} else {
			$id = $this->input->post('id');
			$where = array('cat_id' => $id );
			$data['category'] = $this->M_data->edit_data($where,'category')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/categories/viewedit',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function del($id) {
		$where = array('cat_id' => $id);
		$this->M_data->delete_data($where,'category');
		redirect(base_url().'admin/categories');
	}
}
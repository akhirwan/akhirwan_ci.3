<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'admin/login?alert=belum_login');
		}
		$this->load->model('M_data');
	}
	
	public function index() {
		//$data['article'] = $this->db->query("SELECT * from tbl_penjualan_header a left join tbl_pelanggan b on a.kd_pelanggan=b.kd_pelanggan left join tbl_pegawai c on a.kd_pegawai=c.kd_pegawai where a.kd_penjualan = '$id'")->result();
		//$data['article'] = $this->db->query("select * from article a left join category c on a.category = c.id left join user u on a.author = u.id order by a.id desc")->result();
		$data['article'] = $this->db->query("SELECT * FROM article,category,user WHERE category = cat_id and author = uid order by id desc")->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/articles/index',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function add() {
		$data['category'] = $this->M_data->get_data('category')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/articles/viewadd',$data);
		$this->load->view('admin/dashboard/footer');
	}
		
	public function insert() {
		$this->form_validation->set_rules('judul','Judul','required|is_unique[article.title]');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		
		if(empty($_FILES['sampul']['name'])){
			$this->form_validation->set_rules('sampul','Gambar Sampul','required');
		}
		
		if($this->form_validation->run()!=false){
			
			$config['upload_path'] 		= './images/articles/';
			$config['allowed_types']	= 'gif|jpg|png';
			
			$this->load->library('upload',$config);
			
			if($this->upload->do_upload('sampul')){
				
				$gambar = $this->upload->data();
				
				$tanggal	= date('Y-m-d H:i:s');
				$judul		= $this->input->post('judul');
				$slug		= strtolower(url_title($judul));
				$konten		= $this->input->post('konten');
				$sampul		= $gambar['file_name'];
				$author		= $this->session->userdata('uid');
				$kategori	= $this->input->post('kategori');
				$status		= $this->input->post('status');
				
				$data = array(
					'update'	=> $tanggal,
					'title'		=> $judul,
					'slug'		=> $slug,
					'content'	=> $konten,
					'cover'		=> $sampul,
					'author'	=> $author,
					'category'	=> $kategori,
					'status'	=> $status,
				);
				
				$this->M_data->insert_data($data,'article');
				
				redirect(base_url().'admin/articles');
			} else {
				$this->form_validation->set_message('sampul',$data['gambar_error'] = $this->upload->display_errors());
				$data['category'] = $this->M_data->get_data('category')->result();
				$this->load->view('admin/dashboard/header');
				$this->load->view('admin/articles/viewadd',$data);
				$this->load->view('admin/dashboard/footer');
			}
		} else {
			$data['category'] = $this->M_data->get_data('category')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/articles/viewadd',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function edit($id) {
		$where = array('id' => $id);
		$data['article'] = $this->M_data->edit_data($where,'article')->result();
		$data['category'] = $this->M_data->get_data('category')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/articles/viewedit',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function update() {
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('konten','Konten','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		
		if($this->form_validation->run()!=false){
			$id 		= $this->input->post('id');
			$judul		= $this->input->post('judul');
			$slug		= strtolower(url_title($judul));
			$konten		= $this->input->post('konten');
			$kategori	= $this->input->post('kategori');
			$status		= $this->input->post('status');
			
			$where = array('id' => $id);
			
			$data = array(
				'title'		=> $judul,
				'slug'		=> $slug,
				'content'	=> $konten,
				'category'	=> $kategori,
				'status'	=> $status,
			);
			
			$this->M_data->update_data($where,$data,'article');
			
			if(!empty($_FILES['sampul']['name'])){
				$config['upload_path']	 = './images/articles/';
				$config['allowed_types'] = 'gif|jpg|png';
				
				$this->load->library('upload',$config);
				
				if($this->upload->do_upload('sampul')){
					$gambar = $this->upload->data();
					$data	= array('cover' => $gambar['file_name'],);
					$this->M_data->update_data($where,$data,'article');
					redirect(base_url().'admin/articles');
				} else {
					$this->form_validation->set_message('sampul',$data['gambar_error'] = $this->upload->display_errors());
					$where = array('id' => $id);
					$data['article'] = $this->M_data->edit_data($where,'article')->result();
					$data['category'] = $this->M_data->get_data('category')->result();
					$this->load->view('admin/dashboard/header');
					$this->load->view('admin/articles/viewedit',$data);
					$this->load->view('admin/dashboard/footer');
				} 
			} else {
				redirect(base_url().'admin/articles');
			}
		} else {
			$id = $this->input->post('id');
			$where = array('id' => $id);
			$data['article'] = $this->M_data->edit_data($where,'article')->result();
			$data['category'] = $this->M_data->get_data('category')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/articles/viewedit',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function del($id) {
		$where = array('id' => $id);
		$this->M_data->delete_data($where,'article');
		redirect(base_url().'admin/articles/');
	}
}
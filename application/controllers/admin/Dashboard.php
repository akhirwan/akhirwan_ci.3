<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'admin/login?alert=belum_login');
		}
		$this->load->model('M_data');
	}
	
	public function index() {
		$data['sum_articles'] 	= $this->M_data->get_data('article')->num_rows();
		$data['sum_categories'] = $this->M_data->get_data('category')->num_rows();
		$data['sum_users'] 		= $this->M_data->get_data('user')->num_rows();
		$data['sum_pages'] 		= $this->M_data->get_data('pages')->num_rows();
		$data['config']			= $this->M_data->get_data('config')->row();
		$this->load->view('admin/dashboard/header',$data);
		$this->load->view('admin/dashboard/index',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function config() {
		$data['configure'] = $this->M_data->get_data('config')->result();
		$data['config']	= $this->M_data->get_data('config')->row();
		$this->load->view('admin/dashboard/header',$data);
		$this->load->view('admin/dashboard/viewconfig',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function config_update() {
		$this->form_validation->set_rules('nama','Nama Website','required');
		$this->form_validation->set_rules('desk','Deskripsi Website','required');
		
		if($this->form_validation->run()!=false){
			$url	 = $this->input->post('url');
			$nama 	 = $this->input->post('nama');
			$desk	 = $this->input->post('desk');
			$fb		 = $this->input->post('fb');
			$li		 = $this->input->post('li');
			$ig		 = $this->input->post('ig');
			$github	 = $this->input->post('github');
			$phone	 = $this->input->post('phone');
			$email	 = $this->input->post('email');
			$address = $this->input->post('address');
			$where	= array();
			$data 	= array(
				'url'			=> $url,
				'name'			=> $nama,
				'description'	=> $desk,
				'link_fb'		=> $fb,
				'link_li'		=> $li,
				'link_ig'		=> $ig,
				'link_github'	=> $github,
				'phone'			=> $phone,
				'email'			=> $email,
				'address'		=> $address
			);
			$this->M_data->update_data($where,$data,'config');
			
			if(!empty($_FILES['logo']['name'])){
				$config['upload_path']	 = './images/website/';
				$config['allowed_types'] = 'jpg|png';
				
				$this->load->library('upload',$config);
				if($this->upload->do_upload('logo')){
					$gambar = $this->upload->data();
					$logo 	= $gambar['file_name'];
					$this->db->query("update config set logo = '$logo'");
				}
			}
			redirect(base_url().'admin/dashboard/config?alert=sukses');
		} else {
			$data['configure'] = $this->M_data->get_data('config')->result();
			$data['config']	= $this->M_data->get_data('config')->row();
			$this->load->view('admin/dashboard/header',$data);
			$this->load->view('admin/dashboard/viewconfig',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
}
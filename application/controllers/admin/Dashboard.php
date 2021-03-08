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
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/dashboard/index');
		$this->load->view('admin/dashboard/footer');
	}
	
	public function gantipwd() {
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/dashboard/viewgantipwd');
		$this->load->view('admin/dashboard/footer');
	}
	
	public function updatepwd() {
		$this->form_validation->set_rules('password_lama','Password Lama','required');
		$this->form_validation->set_rules('password_baru','Password Baru','required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password Baru','required|matches[password_baru]');
		
		if($this->form_validation->run() !=false){
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password_baru');
			$konfirmasi_password = $this->input->post('konfirmasi_password');
			
			$where = array(
				'uid'		=> $this->session->userdata('id'),
				'password'	=> md5($password_lama)
			);
			$cek = $this->M_data->cek_login('user', $where)->num_rows();
			
			if($cek > 0){
				$w 		= array('uid' => $this->session->userdata('id'));
				$data 	= array('password' => md5($password_baru));
				$this->M_data->update_data($where, $data, 'user');
				redirect('admin/dashboard/gantipwd?alert=sukses');
			} else {
				redirect('admin/dashboard/gantipwd?alert=gagal');
			}
		} else {
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/dashboard/viewgantipwd');
			$this->load->view('admin/dashboard/footer');
		}
	}
}
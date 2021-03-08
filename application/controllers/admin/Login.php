<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index(){
		$this->load->view('admin/loginview');
	}
		
	public function action() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() !=false) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array (
				'username' 	=> $username,
				'password' 	=> md5($password),
				'user_status' 	=> 1
			);
			$this->load->model('M_data');
			$cek = $this->M_data->cek_login('user',$where)->num_rows();
			if($cek > 0) {
				$data = $this->M_data->cek_login('user',$where)->row();
				$data_session = array(
					'uid'		=> $data->uid,
					'username'	=> $data->username,
					'name'		=> $data->name,
					'level'		=> $data->level,
					'address'	=> $data->address,
					'email'		=> $data->email,
					'phone'		=> $data->phone,
					'status' 	=> 'telah_login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url().'admin/dashboard');
			} else {
				redirect(base_url().'admin/login?alert=gagal');
			}
		} else {
			$this->load->view('admin/loginview');
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'admin/login?alert=logout');
	}
}

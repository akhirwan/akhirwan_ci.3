<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct() {
		parent::__construct();
		
		if($this->session->userdata('status') !="telah_login"){
			redirect(base_url().'admin/login?alert=belum_login');
		}
		$this->load->model('M_data');
	}
	
	public function index() {
		$data['user'] 	= $this->M_data->get_data('user')->result();
		$data['config']	= $this->M_data->get_data('config')->row();
		$this->load->view('admin/dashboard/header',$data);
		$this->load->view('admin/users/index',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function gantipwd() {
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/users/viewgantipwd');
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
				'uid'		=> $this->session->userdata('uid'),
				'password'	=> md5($password_lama)
			);
			$cek = $this->M_data->cek_login('user', $where)->num_rows();
			
			if($cek > 0){
				$w 		= array('uid' => $this->session->userdata('id'));
				$data 	= array('password' => md5($password_baru));
				$this->M_data->update_data($where, $data, 'user');
				redirect('admin/users/gantipwd?alert=sukses');
			} else {
				redirect('admin/users/gantipwd?alert=gagal');
			}
		} else {
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/users/viewgantipwd');
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function profile() {
		$uid = $this->session->userdata('uid');
		$where = array('uid' => $uid );
		$data['profile'] = $this->M_data->edit_data($where,'user')->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/users/viewprofile',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function profile_update() {
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		
		if($this->form_validation->run()!=false){
			$uid 		= $this->session->userdata('uid');
			$nama 		= $this->input->post('nama');
			$email 		= $this->input->post('email');
			$telepon 	= $this->input->post('telepon');
			$alamat 	= $this->input->post('alamat');
			$where 		= array( 'uid'	=> $uid );
			$data		= array(
				'name'		=> $nama,
				'email'		=> $email,
				'phone'		=> $telepon,
				'address'	=> $alamat
			);
			$this->M_data->update_data($where,$data,'user');
			redirect(base_url().'admin/users/profile?alert=sukses');
		} else {
			$uid = $this->session->userdata('uid');
			$where = array('uid' => $uid );
			$data['profile'] = $this->M_data->edit_data($where,'user')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/users/viewprofile',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function add() {
		$data['config']	 = $this->M_data->get_data('config')->row();
		$this->load->view('admin/dashboard/header',$data);
		$this->load->view('admin/users/viewadd');
		$this->load->view('admin/dashboard/footer');
	}
	
	public function insert() {
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telp','Telepon / Kontak','required');
		$this->form_validation->set_rules('email','Emai;','required');
		$this->form_validation->set_rules('username','User Name','required');
		$this->form_validation->set_rules('pwd','Password','required');
		
		if($this->form_validation->run() !=false){
			$nama 		= $this->input->post('nama');
			$alamat 	= $this->input->post('alamat');
			$telp		= $this->input->post('telp');
			$email		= $this->input->post('email');
			$username	= $this->input->post('username');
			$pwd		= $this->input->post('pwd');
			$level		= $this->input->post('level');
			$status		= $this->input->post('status');
			$data 		= array(
				'name'			=> $nama,
				'address'		=> $alamat,
				'email'			=> $email,
				'phone'			=> $telp,
				'username'		=> $username,
				'password'		=> $pwd,
				'level'			=> $level,
				'user_status'	=> $status
			);
			$this->M_data->insert_data($data,'user');
			redirect(base_url().'admin/users');
		} else {
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/users/viewadd');
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function edit($id) {
		$where = array('uid' => $id);
		$data['user'] = $this->M_data->edit_data($where,'user')->result();
		$data['config']	 = $this->M_data->get_data('config')->row();
		$this->load->view('admin/dashboard/header',$data);
		$this->load->view('admin/users/viewedit',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function update() {
		$this->form_validation->set_rules('nama','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telp','Telepon / Kontak','required');
		$this->form_validation->set_rules('email','Emai;','required');
		$this->form_validation->set_rules('username','User Name','required');
		$this->form_validation->set_rules('pwd','Password','required');
		
		if($this->form_validation->run() !=false){
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama');
			$alamat 	= $this->input->post('alamat');
			$telp		= $this->input->post('telp');
			$email		= $this->input->post('email');
			$username	= $this->input->post('username');
			$pwd		= md5($this->input->post('pwd'));
			$level		= $this->input->post('level');
			$status		= $this->input->post('status');
			
			if($this->input->post('pwd')==""){
				$data = array(
					'name'			=> $nama,
					'address'		=> $alamat,
					'phone'			=> $telp,
					'email'			=> $email,
					'username'		=> $username,
					'level'			=> $level,
					'user_status' 	=> $status
				);
			} else {
				$data = array(
					'name'			=> $nama,
					'address'		=> $alamat,
					'phone'			=> $telp,
					'email'			=> $email,
					'username'		=> $username,
					'password'		=> $pwd,
					'level'			=> $level,
					'user_status' 	=> $status
				);
			}
			$where = array( 'uid' => $id );
			$this->M_data->update_data($where,$data,'user');
			redirect(base_url().'admin/users');
		} else {
			$id = $this->input->post('id');
			$where = array('uid' => $id);
			$data['user'] = $this->M_data->edit_data($where,'user')->result();
			$this->load->view('admin/dashboard/header');
			$this->load->view('admin/users/viewedit',$data);
			$this->load->view('admin/dashboard/footer');
		}
	}
	
	public function del($id) {
		$where = array('uid' => $id);
		$data['user_del'] 	= $this->M_data->edit_data($where,'user')->row();
		$data['user_other']	= $this->db->query("select * from user where uid != $id")->result();
		$this->load->view('admin/dashboard/header');
		$this->load->view('admin/users/viewdel',$data);
		$this->load->view('admin/dashboard/footer');
	}
	
	public function del_process() {
		$deleted = $this->input->post('deleted_user');
		$direct  = $this->input->post('direct_user');
		
		$where = array( 'uid' => $deleted );
		$this->M_data->delete_data($where,'user');
		
		$del = array( 'author' => $deleted );
		$dir = array( 'author' => $direct );
		$this->M_data->update_data($del,$dir,'article');
		
		redirect(base_url().'admin/users');
	}
}
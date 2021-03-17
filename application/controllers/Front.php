<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('M_data');
	}
	
	public function index() {
		$data['about'] = $this->db->query("select * from pages where page_slug='about-akhirwan' order by page_id desc")->result();
		$data['expert'] = $this->db->query("select * from article,user,category where cat_slug='akhirwan-experiences' and author=uid and category=cat_id order by id desc limit 3")->result();
		$data['port'] = $this->db->query("select * from article,user,category where cat_slug='akhirwan-portfolio' and author=uid and category=cat_id order by id desc limit 3")->result();
		$data['blog'] = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id order by id desc limit 3")->result();
		
		$data['config']	= $this->M_data->get_data('config')->row();
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewhome',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function single($slug) {
		$data['article'] = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id and slug = '$slug'")->result();
		$data['blog'] = $this->db->query("select * from article where slug = '$slug'")->result();
		
		$data['config'] = $this->M_data->get_data('config')->row();
		
		if(count($data['article']) > 0){
			$data['meta_keyword'] = $data['article'][0]->title;
			$data['meta_description'] = substr($data['article'][0]->content,0,100);
		} else {
			$data['meta_keyword'] = $data['config']->name;
			$data['meta_description'] = $data['config']->description;
		}
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewsingle',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function blog() {
		$data['config']	= $this->M_data->get_data('config')->row();
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		
		$jumlah_data = $this->M_data->get_data('article')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
				
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		
		$from = $this->uri->segment(2);
		if($from==""){
			$from = 0;
		}
		$this->pagination->initialize($config);
		
		$data['article'] = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id order by id desc limit $config[per_page] offset $from")->result();
		
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewblog',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function page($slug) {
		$where = array('page_slug' => $slug);
		$data['hal'] = $this->M_data->edit_data($where,'pages')->result();
		$data['config'] = $this->M_data->get_data('config')->row();
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewpage',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function category($slug) {
		$data['config'] = $this->M_data->get_data('config')->row();
		
		$sum_article = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id and cat_slug='$slug'")->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'category/'.$slug;
		$config['total_rows'] = $sum_article;
		$config['per_page'] = 2;
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		
		$from = $this->uri->segment(3);
		if($from==""){
			$from = 0;
		}
		$this->pagination->initialize($config);
		
		$data['cat'] = $this->db->query("select * from category where cat_slug='$slug' order by cat_id")->result();
		$data['article'] = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id and cat_slug='$slug' order by id desc limit $config[per_page] offset $from")->result();
		
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewcategory',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function search() {
		$cari = htmlentities((trim($this->input->post('cari',true)))? trim($this->input->post('cari',true)):'');
		$cari = ($this->uri->segment(2))?$this->uri->segment(2):$cari;
		$data['config'] = $this->M_data->get_data('config')->row();
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		
		$sum_article = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id and (title like '%$cari%' or content like '%$cari%' or cat_name like '%$cari%')")->num_rows();
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'search/'.$cari;
		$config['total_rows'] = $sum_article;
		$config['per_page'] = 2;
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';
		
		$from = $this->uri->segment(3);
		if($from==""){
			$from = 0;
		}
		$this->pagination->initialize($config);
		
		$data['article'] = $this->db->query("select * from article,user,category where status='publish' and author=uid and category=cat_id and (title like '%$cari%' or content like '%$cari%' or cat_name like '%$cari%') order by id desc limit $config[per_page] offset $from")->result();
		$data['cari'] = $cari;
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewsearch',$data);
		$this->load->view('front/templates/footer',$data);
	}
	
	public function notfound() {
		$data['config'] = $this->M_data->get_data('config')->row();
		$data['meta_keyword'] = $data['config']->name;
		$data['meta_description'] = $data['config']->description;
		$this->load->view('front/templates/header',$data);
		$this->load->view('front/pages/viewnotfound',$data);
		$this->load->view('front/templates/footer',$data);
	}
}

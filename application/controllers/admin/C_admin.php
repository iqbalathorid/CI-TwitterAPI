<?php

class C_admin extends CI_Controller {
function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');
 
        //load the department_model
        $this->load->model('pagination_model');
    }
 
	public function home_admin() {
		$this->load->view('admin_view/navigasi.php');		
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/C_admin/home_admin'); //site url
        $config['total_rows'] = $this->db->count_all('users'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 5;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
 
        //panggil function get_users_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->pagination_model->get_user_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

        $username['usr']=$this->pagination_model->get_username();
 
        //load view user view
        $this->load->view('admin_view/sosial_account/acount_view',$data,$username);

    
}
			

	public function sosial(){
		$this->load->view('admin_view/navigasi.php');
		$this->load->view('admin_view/sosial_account/acount_view');
		
	}
	public function curd(){
		$this->load->view('admin_view/navigasi.php');
		$this->load->view('admin_view/curd/curd_view');
	}
	public function dasboard(){
		$this->load->view('admin_view/navigasi.php');
		$this->load->view('admin_view/dasboard_view/dasboardAdmin_view');
	}
	public function setting(){
	$this->load->view('admin_view/sosial_account/setting_user');	
	}
	public function chart(){
		$this->load->view('chart_view/chart_view');
	}
}

	
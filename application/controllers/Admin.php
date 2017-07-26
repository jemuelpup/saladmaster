<?php
class Admin extends CI_Controller{

	public function index(){
		$this->load->view('templates/admin_header');
		$this->load->view('pages/admin');
		$this->load->view('templates/admin_footer');
	}

	public function view($page = "home"){// home is the default page
		// if(!file_exists(APPPATH."views/pages/".$page.".php")){// check if file exist.
		// 	show_404();
		// }
		
	}
}
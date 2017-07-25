<?php
class Admin extends CI_Controller{

	public function index(){

	}

	public function view($page = "home"){// home is the default page
		if(!file_exists(APPPATH."views/pages/".$page.".php")){// check if file exist.
			show_404();
		}
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
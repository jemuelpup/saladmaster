<?php
class Admin extends CI_Controller{

	public function index(){
		$this->load->view('templates/admin_header');
		$this->load->view('pages/admin');
		$this->load->view('templates/admin_footer');
	}

	public function view($folder="admin",$page = "home"){// home is the default page
		// echo "$folder/$page";
		// $data["folder"] = $folder;
		$this->load->model('general_operations_model'); // for login etc
		$data['folder'] = $folder;
		$data['page'] = $page;
		$this->load->view('pages/'.$folder.'/'.$page,$data);
	}

}
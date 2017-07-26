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
		$data['css_include'] = $this->general_operations_model->getCommonCSS(base_url());
		$data['js_include'] = $this->general_operations_model->getCommonJS(base_url());
		// getCommonJS
		$this->load->view('pages/'.$folder.'/'.$page,$data);
	}
}
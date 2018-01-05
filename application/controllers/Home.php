<?php

class Home extends CI_Controller{

	public function index(){
		$this->load->model('general_operations_model'); // for login etc
		// $this->general_operations_model->verified("moises","123");
		$data["title"] = "Home";
		
		$this->load->view('templates/header',$data);
		$this->load->view("home/home.php");
		$this->load->view('templates/footer');
	}



	
}
 
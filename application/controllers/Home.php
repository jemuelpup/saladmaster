<?php

class Home extends CI_Controller{

	public function index(){
		$this->load->model('general_operations_model');
		// $this->general_operations_model->verified("moises","123");


		$this->load->view('templates/header');
		$this->load->view("home/home.php");
		$this->load->view('templates/footer');
	}

}
 
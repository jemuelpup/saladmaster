<?php
class Admin extends CI_Controller{

	public function index($folder="examples",$page = "login"){// home is the default page
		// echo "dumaan dito";
		// echo "$folder/$page";
		// $data["folder"] = $folder;
		$this->load->model('general_operations_model'); // for login etc
		$data['folder'] = $folder;
		$data['page'] = $page;
		$this->load->view('pages/'.$folder.'/'.$page,$data);
	}

	public function login($folder="",$page = ""){
		$this->load->database();
		$this->load->model('general_operations_model');


		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);

		  echo $_POST['email'];
		  echo $_POST['password'];
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		$this->load->view('pages/examples/login'.$page);
	}

}
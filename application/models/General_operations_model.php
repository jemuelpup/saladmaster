<?php

class General_operations_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function verified($userName,$password){
		$sql = "SELECT `id` FROM `accounts` WHERE  `username`='$userName' and `password` = '$password' and `active` = 1";

		$query = $this->db->query($sql);

		if($query->num_rows()){

			$queryObj = $query->result(); // to get the values
			foreach ($query->result() as $row) {
				return $row->id;
			}
			
		}
		return false;
	}
}
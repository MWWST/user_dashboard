<?php
	class User extends CI_Model {

		public function adduser($user) {
			$query = "INSERT INTO users (first_name,last_name,email,password,level,created_at) VALUES (?,?,?,?,?,?)";
			$values = array($user['first_name'],$user['last_name'],$user['email'],$user['password'],$user['user_level'], date("Y-m-d,H:i:s"));
			return $this->db->query($query,$values);

		}


		public function get_all_users() {
			return $this->db->query("SELECT * FROM users")->result_array();
		}

}
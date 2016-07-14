<?php
class Loginmodel extends CI_Model
{
	function login($username, $password){

		$query = $this->db->query('SELECT * from users WHERE username = "'.$username.'" AND password = "'.$password.'" ');

		if ($query -> num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}

	}
}

?>
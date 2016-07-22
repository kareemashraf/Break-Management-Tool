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

	function times($username){
		$query = $this->db->query('SELECT `time` FROM breaks  WHERE  username = "'.$username.'" and `date`= "'.date('Y-m-d').'" ');
		
			        $result =  $query->result();
			        return $result;
			        
	}

	function times_rows(){
		$query = $this->db->query('SELECT `time` FROM breaks WHERE `date`= "'.date('Y-m-d').'" ');
	return $query->num_rows();

	}

	function times_rows_user($username){
		$query = $this->db->query('SELECT `time` FROM breaks WHERE username = "'.$username.'" and `date`= "'.date('Y-m-d').'" ');
	return $query->num_rows(); 

	}

	function check($username, $time, $ftid, $pims){

	$query = $this->db->query('SELECT * FROM breaks WHERE username = "'.$username.'" and time = "'.$time.'" and date= "'.date('Y-m-d').'" ');
	return $query->num_rows();

	}

	function add($username, $time, $ftid, $pims){
	
		$query = $this->db->query('INSERT INTO breaks (username,`time`,ftid,pims,`date`) VALUES ("'.$username.'","'.$time.'","'.$ftid.'","'.$pims.'","'.date('Y-m-d').'")  ');
			
	}

	function remove($username, $time, $ftid, $pims){
		$query = $this->db->query('DELETE FROM breaks WHERE username = "'.$username.'" and time = "'.$time.'" and date= "'.date('Y-m-d').'" ');
			
	}

	function exceed($username, $time, $ftid, $pims){
		$query = $this->db->query('SELECT `time` FROM breaks  WHERE  username = "'.$username.'" and `date`= "'.date('Y-m-d').'" ');

		return $query->num_rows();
	}
}

?>
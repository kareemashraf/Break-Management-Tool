<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');

			$result = $this->loginmodel->login($username, $password);


			if (empty($result)) {

				$errors =  array('error' => "Wrong Username or Password" );
				$this->load->view('login',$errors);
			
			} else {


				$this->session->set_userdata('logged_in', $result); 

				redirect('welcome/home','refresh');
			}
		

	}

	public function home()
	{

		$session  = $this->session->userdata('logged_in');
		if (!empty($session)) {
			$sessions  = array('username' => $session[0] );
			
			$username  = $session[0]->username;
		   			 	   $this->load->model('loginmodel');
			$times 		 = $this->loginmodel->times($username);
			$times_rows  = $this->loginmodel->times_rows();

			$data['sessions']  = $sessions;
			$data['times']	   = $times;	
			$data['times_rows']= $times_rows;
			$this->load->view('home',$data);
		} else {
			$this->load->view('login');
		}
		
	}

	public function save(){
		$username = $this->input->post('username');
		$time	  = $this->input->post('time');
		$ftid	  = $this->input->post('ftid');
		$pims	  = $this->input->post('pims');


			$this->load->model('loginmodel');

			$result  = $this->loginmodel->check($username, $time, $ftid, $pims);	
			if ($result == 0) {

			$result_number  = $this->loginmodel->exceed($username, $time, $ftid, $pims);

				if ($result_number > 3) {
					die("Exceeded Maximum");
				} 
				else 
				{
					$add = $this->loginmodel->add($username, $time, $ftid, $pims);
					die('Inserted');
				}
			}
			elseif ($result == 1) {

				$remove = $this->loginmodel->remove($username, $time, $ftid, $pims);
				die('Deleted');
			}			
	}




	public function alert(){

			$session   		= $this->session->userdata('logged_in');
			if (!empty($session)) {
				$sessions  = array('username' => $session[0] );
		    }
			
			$username  = $session[0]->username;

		    $this->load->model('loginmodel');
			$timesarray 	   = $this->loginmodel->times($username);

			$json			   = json_encode($timesarray);
			$json2 			   = str_replace("[{", "", $json);
			$json3 			   = str_replace("}]", "", $json2);
			$json4 			   = str_replace("{", "", $json3);
			$json5 			   = str_replace("}", "", $json4);
			$json6 			   = str_replace('"time":', "", $json5);
			$json6 			   = str_replace('"', '', $json6);
			
			$dbtime		   	   = explode(",", $json6);
			
			$time =  date("g:i"); //i is for minutes leading by zero
			
			if (in_array($time, $dbtime)) {
				die('break');
			} else {
				die(var_dump($dbtime));
			}
			
	}

	public function admin(){
		$this->load->view('admin');
	}

}

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
			//echo "<pre>"; var_dump($sessions);
			$this->load->view('home',$sessions);
		} else {
			$this->load->view('login');
		}
		
	}

	public function save(){
		$username = $this->input->post('username');
		$time	  = $this->input->post('time');
		$ftid	  = $this->input->post('ftid');
		$pims	  = $this->input->post('pims');

		die($username." ".$time." ".$ftid." ".$pims);	
	}

}

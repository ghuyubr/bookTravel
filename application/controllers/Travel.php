<?php

/**
* 
*/
class Travel extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
			if ($this->session->userdata('level')=="admin") {
			redirect('admin');
		}
		elseif ($this->session->userdata('level')=='user') {
			redirect('login/welcomelogin');
		}
	}

	public function index()
	{
		$this->load->view('index');
	}
}
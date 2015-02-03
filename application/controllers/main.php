<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login_page(){
		$this->load->view('login');
	}

	public function register_page(){
		$this->load->view('register');
	}
	// public function dashboard(){
	// 	$this->load->view('dashboard');
	// }
}


//end of main controller
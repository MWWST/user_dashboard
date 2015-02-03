<?php 

class Users extends CI_Controller {

	public function shownew(){						// show the add new user form
		$this->load->view('adduser');
	}

	public function show(){ 						//show users wall / profile page
		$this->load->view ('userinformation');
	}

}
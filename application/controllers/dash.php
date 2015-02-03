<?php 
class Dash extends CI_Controller {

	public function show_dashboard(){

        // if admin user 
        $this->load->view('admindashboard');

		//if normal user 

		$this->load->view('dashboard');
	}

	public function show_admin_dashboard(){		//this can be removed once up and running, do all via one function.

		 $this->load->view('admindashboard');

	}

	// public function show_admin_dashboard(){
	// 	$this->load->view('admindashboard');
	// }


}

?>
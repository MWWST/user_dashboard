<?php 
class Dash extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function show_dashboard(){
		var_dump($this->session->all_userdata());
		if($this->session->userdata('is_logged_in') == TRUE) {
		$logged_in_user=$this->session->userdata('user_email');
		 $this->load->model('User');
        $check_user = $this->User->login($logged_in_user);
        var_dump($check_user);
		if ($logged_in_user){
        // if admin user 

        if ($check_user['level'] == 1){

        $this->load->view('admindashboard');
    }

	elseif ($check_user['level'] == 2){

		$this->load->view('dashboard');
	}

	else {
		echo "you are bad, no access for you";
	}

	}

	else {
		redirect('/');
	}
	}
}

	// public function show_admin_dashboard(){
	// 	$this->load->view('admindashboard');
	// }


}

?>
<?php 
class Users extends CI_Controller {

	public function register(){ 
	
		// var_dump($this->input->post());
		$pw=($this->input->post('reg_pw'));

		$validation_config =array( 
								array(  'field' => 'reg_email',
										'label'=>'Email',
										'rules' =>'required|valid_email|is_unique[users.email]'
									),
								array( 
										'field' => 'reg_pw',
										'label' => 'Password',
										'rules' => 'min_length[8]'
									),
								array(
										'field' => 'pw_confirm',
										'label' => 'Password Confirmation',
										'rules' => 'matches[reg_pw]'
									)

								);
		$this->load->library('form_validation');
		$this->form_validation->set_rules($validation_config);
			if($this->form_validation->run()=== FALSE) {
				ECHO validation_errors();
			}

			else {

			$this->load->model('User');
			$existing_user= $this->User->get_all_users();
				if (!$existing_user){
			$user = array( 'first_name' => $this->input->post('reg_f_name'),
							'last_name' => $this->input->post('reg_l_name'),
							'email' => $this->input->post('reg_email'),
							'password' => md5($pw),'user_level' => '1'
						);
		}	

		else { $user = array( 'first_name' => $this->input->post('reg_f_name'),
							'last_name' => $this->input->post('reg_l_name'),
							'email' => $this->input->post('reg_email'),
							'password' => md5($pw),'user_level' => '2'
						);
		}

		$add_user = $this->User->adduser($user);
			if ($add_user === TRUE) {
				ECHO "user added";
			}
		}
	}
	public function shownew(){						// show the add new user form
		$this->load->view('adduser');
	}

	public function show(){ 						//show users wall / profile page
		$this->load->view ('userinformation');
	}

	public function adminedit(){
		//If admin user
		$this->load->view('admin_edituser');

		// else if normal user 
		// $this->load->view('edit_user');
	}

	public function edit(){							//remove this later you can do it all in one function. just for html css clickable protoype purposes
		//If admin user
		$this->load->view('edituser');

		// else if normal user 
		// $this->load->view('edit_user');
	}

}?>
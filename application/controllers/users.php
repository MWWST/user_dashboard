<?php 
class Users extends CI_Controller {

	public function register(){ 
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
				echo validation_errors();
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
				// var_dump($add_user);
				$loginemail = $this->input->post('reg_email');
				// var_dump($this->input->post('reg_email'));
				$this->load->model('User');
				$logged_in = $this->User->login($loginemail);
				$logged_in_user = array(
								'user_id' => $logged_in['id'],
								'user_email' => $logged_in['email'],
								'user_first_name' => $logged_in['first_name'],
								'user_last_name' => $logged_in ['last_name'],
								'is_logged_in'=> true
								);
							$this->session->set_userdata($logged_in_user);
							redirect('/dashboard/');
				
					}
				}
			}
	
	public function login(){
		// var_dump($this->input->post());
			$loginemail = $this->input->post('login_email');
				$password = md5($this->input->post('login_password'));
				$this->load->model('User');
				$logged_in = $this->User->login($loginemail);
				if ($logged_in){
					// var_dump($logged_in);
					if ($loginemail == $logged_in['email'] && $password == $logged_in['password']){
						$logged_in_user = array(
								'user_id' => $logged_in['id'],
								'user_email' => $logged_in['email'],
								'user_first_name' => $logged_in['first_name'],
								'user_last_name' => $logged_in ['last_name'],
								'is_logged_in'=> true
								);
							$this->session->set_userdata($logged_in_user);
							redirect('/dashboard/');
							// var_dump($this->session->all_userdata());
					// 	}
					}
					}
				else echo "not authenticated"; //flash data errors
				}
	public function shownew(){						// show the add new user form
		$this->load->view('adduser');
	}

	public function show($id){ 	
		$this->load->Model('User');		
		$userdata=$this->User->get_everything($id);		
		// var_dump($userdata);
		// var_dump($userdata);	

		foreach ($userdata as $key => $value) {
			// var_dump($key);}
			$display_user[$id]= array('user_id'=>$value['user_id'],
						 	 'first_name'=>$value['first_name'],
						 	 'last_name'=>$value['last_name'],
						 	 'email'=>$value['email'],
						 	 'message_id' =>$value['message_id'],
						 	 'message'=>$value['message'],
						 	 'message_time'=>$value['message_created_time'],
						 	 'for_user_id' =>$value['for_user_id'],
						 	 'from_user_id'=>$value['from_user_id']
							);
		}
		// var_dump($display_user);
		$this->load->view('userinformation',array('userinfo' =>$userdata));
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

	public function logoff(){
		$this->session->sess_destroy();
		redirect('/');
	}

}?>
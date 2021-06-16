<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->template->view_userlogin('login_page');
	}

	
	public function register()
	{
		$this->template->view_user_registration('register_page');
	}


	function login_validation()
	{
		$this->form_validation->set_rules('enroll','Enroll','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('enroll');
			$password = $this->input->post('password');

			$this->load->model('User_login_model');
			$check = $this->User_login_model->can_login($username,$password);
			if ($check->num_rows() == TRUE) {

				$data = $check->row_array();
				$fname = $data['user_firstname'];
				$lname = $data['user_lastname'];
				$email = $data['user_email'];
				$faculty = $data['faculty_Id'];
				$status = $data['user_status'];
				$enroll = $data['enrollment_Id'];

				$session_data = array(
					'user_firstname'  => $fname,
					'user_lastname'  => $lname,
					'user_email'  => $email,
					'faculty_Id'     => $faculty,
					'user_status' => $status,
					'enrollment_Id' => $this->input->post('enroll'),
					'logged_in' => TRUE
				);

					$this->session->set_userdata('session_data',$session_data);
				$session_data= $this->session->userdata('session_data');

							if($faculty === '3' && $status === 'active'){
								redirect('user/applied');
							}else{
								redirect('user/agri');
							}
					
				}else{
					$this->session->set_flashdata('error','Invalid Username and password');
					redirect('login/index');
				}


		}else{
			$this->index();
		}


		
	}
}

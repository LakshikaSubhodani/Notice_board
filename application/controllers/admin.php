<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
		
	}

	 function index()
	{
		$this->template->view_adminlogin('administrators/admin_login');
	}

	function login_validation()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('Admin_login_model');
			$check = $this->Admin_login_model->can_login($username,$password);
			if ($check->num_rows() == TRUE) {

				$data = $check->row_array();
				$fname = $data['admin_firstname'];
				$lname = $data['admin_lastname'];
				$email = $data['admin_email'];
				$faculty = $data['faculty_Id'];
				$status = $data['admin_status'];

				$session_data = array(
					'admin_firstname'  => $fname,
					'admin_lastname'  => $lname,
					'admin_email'  => $this->input->post('email'),
					'faculty_Id'     => $faculty,
					'admin_status' => $status,
					'logged_in' => TRUE
				);

					$this->session->set_userdata('session_data',$session_data);
				$session_data= $this->session->userdata('session_data');

							if($faculty === '1' && $status === 'active'){
								redirect('super');
							}else{
								redirect('union');
							}
					
				}else{
					$this->session->set_flashdata('error','Invalid Username and password');
					redirect('admin/index');
				}


		}else{
			$this->index();
		}


		
	}

	
	
}

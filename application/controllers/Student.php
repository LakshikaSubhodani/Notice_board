<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('StudentModel');
	}



	public function index()
	{
		$this->template->layout_simple('login_page');
	}

	
	public function register()
	{
		$this->template->layout_simple('register_page');
	}

	// login validation
	public function login_validation()
	{
		$this->form_validation->set_rules('enroll','Enroll','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('enroll'); // email, enroll
			$password = $this->input->post('password');

			$db_user = $this->StudentModel->can_login($username,$password);

			$this->session->set_userdata('log_user',$db_user);
			$log_user = $this->session->userdata('log_user');

			if ( $log_user != NULL) {
				redirect('student/dashboard');
			}else{
				$this->session->unset_userdata('log_user');
				$this->session->set_flashdata('error','Invalid Username and password');
				redirect('student/index');
			}


		}else{
			$this->index();
		}	
		
	}

	//user Regisration
	public function register_validation(){

		// cheack enroll id exsist
		$enrollid  = $this->StudentModel->check_enroll_exsit($this->input->post("enroll"));

		if($enrollid == false){
			$student_data = array(
				"enrollment_Id" => $this->input->post("enroll"),
			);

			$data = array(
				"user_firstname" => $this->input->post("fname"),
				"user_lastname" => $this->input->post("lname"),
				"user_contact" => $this->input->post("contact"),
				"user_email" => $this->input->post("email"),
				"user_dob" => $this->input->post("dob"),
				"user_password" => $this->input->post("password"),
				"user_status" => 'active',
				"faculty_Id" => $this->input->post("faculty_id")
			);

			$insert_id = $this->StudentModel->insert_data($data,$student_data);
			echo '{"insert_id":'.$insert_id.'}';

		}else{
			header("HTTP/1.1 400 Not Found");
			echo '{"enroll_id":"false"}';
		}
	}

	// dashborad functions
	public function dashboard(){
		
		$log_user = $this->session->userdata('log_user');

		if($log_user != NULL){

			$data['log_user'] = $log_user;

			//generate notification
			$faculty_id = $log_user->faculty_Id;
			$notices = $this->StudentModel->get_all_notices($faculty_id);
			$posts = array();

			foreach ($notices as $notice) {

				$authors = $this->StudentModel->get_author($notice->notice_Id);
				$last_author = end($authors);

				$coverimage = $this->StudentModel->get_coverimage($notice->notice_Id);
				$attachment = $this->StudentModel->get_attachment($notice->notice_Id);
				$link = $this->StudentModel->get_link($notice->notice_Id);

				$post_item = array(
					'post_notice' => $notice,
					'post_author' => $last_author,
					'post_coverimage'  => $coverimage,
					'post_attachments'  => $attachment,
					'post_links'  => $link
			    );
				$posts[] = $post_item;
			}

			$data['posts'] = $posts;
			
			//generate attachment

			$this->template->layout_student('dashboard',$data);

		}else{
			redirect('student/index');
		}
		
	}

	// logout
	public function logout(){
		$this->session->unset_userdata('log_user');
		redirect('student/index');
	}



}

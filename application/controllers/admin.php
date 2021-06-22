<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $log_user;

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			$this->load->model('AdminModel');
	}


	 function index()
	{
		$this->template->layout_simple('admin/admin_login');
	}

	// admin login
	function login_validation()
	{
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$username = $this->input->post('email');
			$password = $this->input->post('password');
	
			$db_user = $this->AdminModel->can_login($username,$password);

			$this->session->set_userdata('log_user',$db_user);
			$log_user = $this->session->userdata('log_user');

			if ( $log_user != NULL) {
				redirect('admin/dashboard');
			}else{
				$this->session->unset_userdata('log_user');
				$this->session->set_flashdata('error','Invalid Username and password');
				redirect('admin/index');
			}
			
		}else{
			$this->index();
		}
	}

	// dashborad functions
	public function dashboard(){
		
		$log_user = $this->session->userdata('log_user');

		if($log_user != NULL){

			$data['log_user'] = $log_user;

			$this->template->layout_admin('admin/dashboard',$data);

		}else{
			redirect('admin/index');
		}
		
	}

	// logout
	public function logout(){
		$this->session->unset_userdata('log_user');
		redirect('admin/index');
	}

	// New Notice
	public function newnotice(){
		
		$log_user = $this->session->userdata('log_user');

		if($log_user != NULL){

			//there is no any permission this load evey admin

				$data['log_user'] = $log_user;
				$this->template->layout_admin('admin/new_notice',$data);

		}else{
			redirect('admin/index');
		}
		
	}

	// Notice List
	public function noticelist(){
		
		$log_user = $this->session->userdata('log_user');
		if($log_user != NULL){
	//there is no any permission this load evey admin
			$data['log_user'] = $log_user;

			$this->template->layout_admin('admin/notice_list',$data);
			
		}else{
			redirect('admin/index');
		}
		
	}


	//manage students
	public function managestudent(){
		
		$log_user = $this->session->userdata('log_user');
		if($log_user != NULL){

			//permssion for admin user
			$role_id = $log_user->faculty_Id;
			if($role_id == 1 OR $role_id == 3 OR $role_id == 4 OR $role_id == 5 OR $role_id == 6){

				$data['log_user'] = $log_user;
				$this->template->layout_admin('admin/student_manage',$data);

			}else{
				redirect('admin/dashboard');
			}
			
		}else{
			redirect('admin/index');
		}
		
	}

	//student feedback
	public function studentfeedback(){
		
		$log_user = $this->session->userdata('log_user');
		if($log_user != NULL){

			//permssion for student feedback
			$role_id = $log_user->faculty_Id;
			if($role_id == 1 OR $role_id == 3 OR $role_id == 4 OR $role_id == 5 OR $role_id == 6){

				$data['log_user'] = $log_user;
				$this->template->layout_admin('admin/student_feedback',$data);

			}else{
				redirect('admin/dashboard');
			}
			
		}else{
			redirect('admin/index');
		}
		
	}

	//manage admins
	public function manageadmin(){
		
		$log_user = $this->session->userdata('log_user');
		if($log_user != NULL){

			$role_id = $log_user->faculty_Id;
			if($role_id == 1){

				$data['log_user'] = $log_user;
				$this->template->layout_admin('admin/manage_admin',$data);

			}else{
				redirect('admin/dashboard');
			}
			
		}else{
			redirect('admin/index');
		}
		
	}

	// get json respond
	public function get_noticelist(){
		// POST data
		$postData = $this->input->post();
		// Get data
		$data = $this->AdminModel->getDataNotices($postData);
		echo json_encode($data);
	}
	
	//newnotice setdata to database;
	public function set_newnotice(){
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('expiredate','Expiredate','required');

		if($this->form_validation->run()){

			//if imagefile upload
			$ori_filename = $_FILES['files']['name'];
			$newname = time()."".str_replace($ori_filename);
			$config = [
				'upload_path' => './assests/uploads/',
				'allowed_types' => 'gif|jpg|png',
				'file_name' => $newname,
			];

				$this->load->library('upload', $config);

						if ( ! $this->upload->do_upload('files'))
						{
								$imageError = array('error' => $this->upload->display_errors());

								$this->load->view('upload_form');
								$this->template->layout_admin('admin/new_notice',$data, $imageError);

						}
						else
						{
								$image_filename = $this->upload->data('file_name');

								$data = [
									'title' => $this->input->post('title'),
									'notice_type' => $this->input->post('type'),
									'discription' => $this->input->post('description'),
									'create_date' => date("Y-m-d",time()),
									'update_date' => date("Y-m-d",time()),
									'expire_date' => $this->input->post('expiredate'),
									'notice_status' => 'Active'
								];

								$att =[
									'attachment' =>$image_filename,
								];

								//sending log user data to author table
								// $log_user = $this->session->userdata('log_user');
								// $role_id = $log_user->faculty_Id;

								// //get notice Id
								// $notice_Id = $this->AdminModel->getnoticeId($data);
								// $author =[
								// 	'faculty_Id' => $role_id,
								// ];

								$notice = new AdminModel;
								$res = $notice->insertnotice($data);
								$result = $notice->insertattachment($att);
								$this->session->set_flashdata('status','notice insert successfully');
								redirect('admin/newnotice');
						}
		}else{
			$this->newnotice();
		}
		
	

	}
}

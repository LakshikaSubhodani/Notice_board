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

	//load registration form
	function registration()
	{
		$log_user = $this->session->userdata('log_user');

		if($log_user != NULL){

			$this->form_validation->set_rules('firstname','First Name','required');
			$this->form_validation->set_rules('lastname','Last Name','required');
			$this->form_validation->set_rules('email', 'Email', 'callback_email_check');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');


				if($this->form_validation->run()){

					$user_data = array(
						"user_firstname" => $this->input->post("firstname"),
						"user_lastname" => $this->input->post("lastname"),
						"user_contact" => $this->input->post("contact"),
						"user_email" => $this->input->post("email"),
						"user_dob" => $this->input->post("birth_date"),
						"user_password" => $this->input->post("password"),
						"user_status" => 'active',
						"faculty_Id" => $this->input->post("faculty")
					);

					$admin_data = array(
						"admin_type" =>  $this->input->post("admin_type"),
					);
		
					$this->AdminModel->insert_admin($user_data,$admin_data);

					redirect('admin/registration');

				}



			$data['log_user'] = $log_user;
			$this->template->layout_admin('admin/admin_register_page',$data);

		}else{
			redirect('admin/index');
		}
		
	}

	// callback function for register form
	public function email_check($email){
		// check email empty
		if(!empty($email)){
			// check email valide
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$this->form_validation->set_message('email_check', 'The {field} is not valid !');
				return FALSE;
			  }else{
					//cheack email exist
					$status  = $this->AdminModel->check_email_exsit($email);
					if($status){
						$this->form_validation->set_message('email_check', 'The {field} is exists !');
						return FALSE;
					}else{
						return true;
					}
			  }

		}else{
			$this->form_validation->set_message('email_check', 'The {field} field is required. ');
		   return FALSE;
		}
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

	//profile
	public function profile(){
		$log_user = $this->session->userdata('log_user');

		if($log_user != NULL){

			$data['log_user'] = $log_user;

			$this->template->layout_admin('admin/admin_profile',$data);

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

			$msg_success= "";
			$msg_error= "";

				if($this->input->post()){

					if(!empty($this->input->post('title'))){

						/* file upload */
						// cover image
						$attachments = array();
						$coverimage = array();
						$links_url = array();
						$links_text = array();

						if(!empty($_FILES['coverimage']['name'])){

								$cover_image = $_FILES['coverimage']['name'];

								$config['upload_path'] = 'assests/uploads/'; 
								$config['allowed_types'] = 'gif|jpg|png';
								$config['max_size'] = '2048';
								$config['file_name'] = $cover_image;

								$this->load->library('upload', $config);
								$this->upload->initialize($config);

								if ( ! $this->upload->do_upload('coverimage'))
								{
										$error = array('error' => $this->upload->display_errors());
										$msg_error = "Cover image upload fail. Please check your file size and type.";
								}
								else
								{
									$uploadData = $this->upload->data();
									$cover_image_name = $uploadData['file_name'];

									$coverimage[$cover_image_name] = base_url().'assests/uploads/'.$cover_image_name;

								}

						}


						// attachments
						 $file_count = count($_FILES['attachments']['name']);
						 
						 for($i=0;$i<$file_count;$i++){

							if(!empty($_FILES['attachments']['name'][$i])){

								$att_name = $_FILES['attachments']['name'][$i];
								$_FILES['file']['name'] = $att_name;
								$_FILES['file']['type'] = $_FILES['attachments']['type'][$i];
								$_FILES['file']['tmp_name'] = $_FILES['attachments']['tmp_name'][$i];
								$_FILES['file']['error'] = $_FILES['attachments']['error'][$i];
								$_FILES['file']['size'] = $_FILES['attachments']['size'][$i];

								$config2['upload_path'] = 'assests/uploads/'; 
								$config2['allowed_types'] = 'gif|jpg|png|docx|pdf';
								$config2['max_size'] = '2216';
								$config2['file_name'] = $att_name;

								$this->load->library('upload',$config2);
								$this->upload->initialize($config2); 

								if ( ! $this->upload->do_upload('file'))
								{
										$error = array('error' => $this->upload->display_errors());
										$msg_error = "Files upload fail Please check your file size and type.";
								}
								else
								{
									$uploadData = $this->upload->data();
									$file_name = $uploadData['file_name'];

									$attachments[$file_name] = base_url().'assests/uploads/'.$file_name;

								}

							}
						 }

						 // links
						 if($this->input->post('links_url')){
							$links_url = $this->input->post('links_url');
							$links_text = $this->input->post('links_text');

						 }
						 
						// insert data
						$notice_data['title'] = $this->input->post('title');
						$notice_data['discription'] = $this->input->post('content');
						$notice_data['notice_type'] = $this->input->post('type');
						$notice_data['expire_date'] = $this->input->post('expire_date');
						$notice_data['notice_status'] = "active";
						$notice_data['faculty_Id'] = $log_user->faculty_Id;


						if(empty($msg_error)){
							$status = $this->AdminModel->insertNotice($notice_data,$log_user,$coverimage,$attachments,$links_url,$links_text);
						}
						
						if(isset($status)){
							if($status){
								$msg_success = "Notice insert successfully.";
							}else{
								$msg_error = "Notice not insert, Please try again.";
							}
						}
						

					}else{
						$msg_error = "Title is required";
					}

				}

				$data['log_user'] = $log_user;
				$data['notice_error_msg'] = $msg_error;
				$data['notice_success_msg'] = $msg_success;

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

	// get json respond
	public function get_noticelist(){
		// POST data
		$log_user = $this->session->userdata('log_user');
		$postData = $this->input->post();
		// Get data
		$data = $this->AdminModel->get_notices_list($postData,$log_user);
		echo json_encode($data);
	}

	//delete notice
	public function deletenotice(){
		if($this->input->post()){

			$notice_id = $this->input->post('noticeid');
			// delete notice
			$this->AdminModel->delete_notice($notice_id);
	
       		 //clean server
			$this->load->model('StudentModel');
			$coverimage = $this->StudentModel->get_coverimage($notice_id);
			$attachments = $this->StudentModel->get_attachment($notice_id);


			$path = $_SERVER['DOCUMENT_ROOT'].'/assests/uploads/'.$coverimage->cover_name;
			unlink($path);

			foreach ($attachments as  $attachment) {
				$filepath = $_SERVER['DOCUMENT_ROOT'].'/assests/uploads/'.$attachment->attachment_name;
				unlink($filepath);
			}


			redirect('admin/noticelist');

		}
		
	}

	//update notice
	public function updatenotice(){
		if($this->input->post()){

			$notice_id = $this->input->post('noticeid');

			

			if($this->input->post('notice_update_title') && $this->input->post('notice_update_content')){

				$title = $this->input->post('notice_update_title');
				$discription = $this->input->post('notice_update_content');

				$this->AdminModel->update_notice($notice_id,$title,$discription);

				redirect('admin/noticelist');
				
			}else{
				$notice = $this->AdminModel->get_notice($notice_id);
				echo json_encode( $notice );
			}
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

	//get Json Respond 
	public function get_studentlist(){
		// POST data
		$log_user = $this->session->userdata('log_user');
		$postData = $this->input->post();
		// Get data
		$data = $this->AdminModel->get_student_list($postData,$log_user);
		echo json_encode($data);
	}

	//delete student
	public function deletestudent(){
		if($this->input->post()){

			$student_id = $this->input->post('studentid');
			$this->AdminModel->delete_student($student_id);
			redirect('admin/managestudent');
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

	//get JSON RESPOND
	public function get_adminlist(){
		// POST data
		$log_user = $this->session->userdata('log_user');
		$postData = $this->input->post();
		// Get data
		$data = $this->AdminModel->get_admin_list($postData,$log_user);
		echo json_encode($data);
	}

	//delete admin list
	public function deleteadmin(){
		if($this->input->post()){
			$admin_id = $this->input->post('adminid');

			$this->AdminModel->delete_admin($admin_id);

			redirect('admin/manageadmin');
		}
	}

}

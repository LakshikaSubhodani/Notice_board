<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Super extends CI_Controller{

    public function _construct(){

        parent::_construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('admin/index');
        }
    }

    function index()
    {
       
        $sess_Id = $this->session->userdata('session_data');
        
        

       //calling relevent admins
       
            if($sess_Id['faculty_Id'] == '1' && $sess_Id['admin_status']=='active'){
            $this->template->view_super_admindashboard('administrators/super_admin_view',$sess_Id);

        }else{
            echo "Access Denied!";
        }
    }


    function create_notice()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_create_notice('administrators/super_admin/create_notice',$sess_Id);
    }

    function delete_notice()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_delete_notice('administrators/super_admin/delete_notice',$sess_Id);
    }

    function modify_notice()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_modify_notice('administrators/super_admin/modify_notice',$sess_Id);
    }

    function manage_student()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_manage_student('administrators/super_admin/manage_student',$sess_Id);
    }

    function feedback()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_feedback('administrators/super_admin/feedback',$sess_Id);  
    }

    function manage_admins()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_manage_admins('administrators/super_admin/manage_admins',$sess_Id);  
    }

    function system_maintenance()
    {
        $sess_Id = $this->session->userdata('session_data');
        $this->template->view_system_maintenance('administrators/super_admin/system_maintenance',$sess_Id); 
    }

    function logout(){
		
		$this->session->unset_userdata('session_data');
		redirect('admin/index');
	}
	
}

?>
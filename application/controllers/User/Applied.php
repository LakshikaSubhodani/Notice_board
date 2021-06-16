<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Applied extends CI_Controller{

    public function _construct(){

        parent::_construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login/index');
        }
    }

    function index()
    {
       
        $sess_Id = $this->session->userdata('session_data');
        
        

       //calling relevent user
       
            if($sess_Id['faculty_Id'] == '3' && $sess_Id['user_status']=='active'){
            $this->template->view_applied_user_dashboard('applied_user_view',$sess_Id);

        }else{
            echo "Access Denied!";
        }
    }


    
}

?>
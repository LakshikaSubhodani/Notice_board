<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
    class Template 
    {
        var $ci;
         
        function __construct() 
        {
            $this->ci =& get_instance();
        }

        function view_userlogin($view_name, $data = null) {
            $this->ci->load->view('templates/partials/header_login');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/partials/footer');
        }

        function view_adminlogin($view_name, $data = null) {
            $this->ci->load->view('templates/includes/header_adlogin');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/includes/footer');
        }

        function view_user_registration($view_name, $data=null) {
            $this->ci->load->view('templates/partials/header_register');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/partials/footer');
        }

        //calling applied user dashboard
        function view_applied_user_dashboard($view_name,$data)
        {
            $this->ci->load->view($view_name);
        }

        //calling super admin dashboard
        function view_super_admindashboard($view_name,$data){
            $this->ci->load->view('templates/includes/superadmin_header_sidebar');
            $this->ci->load->view($view_name);
            $this->ci->load->view('templates/includes/dashboard_footer');

        }

        //super admin crud view
                    function view_create_notice($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
            
                    }

                    function view_delete_notice($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

                    function view_modify_notice($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

                    function view_manage_student($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

                    function view_feedback($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

                    function view_manage_admins($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

                    function view_system_maintenance($view_name,$data)
                    {
                        $this->ci->load->view('templates/includes/superadmin_header_sidebar');
                        $this->ci->load->view($view_name);
                        $this->ci->load->view('templates/includes/dashboard_footer');
                    }

    }
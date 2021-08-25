<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentModel extends CI_Model{

    public function can_login($username,$password){

        $query = $this->db->query("SELECT * FROM no_user u LEFT JOIN no_user_student s ON u.user_Id = s.user_Id WHERE u.user_status = 'active' and u.user_password = '$password' AND ( u.user_email ='$username' OR s.enrollment_Id = '$username') ");

        $result = $query->result();
        return $result[0];
    }

    public function insert_student($user_data,$student_data)
    {
        $this->db->trans_start();

        //insert userdata
        $this->db->insert('no_user', $user_data);
        $user_id = $this->db->insert_id();

        //insert student data
        $student_data['user_Id'] = $user_id;
        $this->db->insert('no_user_student', $student_data);
        $student_id = $this->db->insert_id();

        // set log
        //$this->set_log("Register new Student. Id - ". $user_id);

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }

        return $student_id;
    }

    public function update_student($user_data, $user_id)
    {
        
        $this->db->where('user_Id', $user_id);
        $this->db->update('no_user', $user_data);

         // set log
         $this->set_log("Update Student. Id - ". $user_id);
    }

    public function get_student($user_id){

        $query = $this->db->query("SELECT * FROM no_user u LEFT JOIN no_user_student s ON u.user_Id = s.user_Id WHERE u.user_status = 'active' and u.user_Id = '$user_id'");
        $result = $query->result();
        return $result[0];
    }


    public function check_enroll_exsit($enrollId)
    {
        $query = $this->db->query("SELECT * FROM no_user_student WHERE enrollment_Id = '".$enrollId."'");
        $row = $query->row();
        
        if(isset($row)){
            return true;
        }
        return false;
    }

    public function check_password_exsit($old_password)
    {
        $query = $this->db->query("SELECT * FROM no_user WHERE user_password = '".$old_password."'");
        $row = $query->row();
        
        if(isset($row)){
            return true;
        }
        return false;
    }

    /** get notices infor  */
    public function get_all_notices($facultyId, $searchkey = null){

        $query = $this->db->query("SELECT * FROM no_notice WHERE notice_status = 'active' AND faculty_Id IN (1, 2, $facultyId) ORDER BY notice_Id DESC");
       

        if($searchkey != null){
            $this->db->select('*');
            $this->db->from('no_notice');
            $this->db->like('title', $searchkey);
            $query = $this->db->get(); 
        }
        $result = $query->result();
        return $result;
   
    }



    public function get_author($NoticeId){

        $query = $this->db->query("SELECT u.user_firstname, u.user_lastname FROM no_notice_author a INNER JOIN no_user_admin ad ON ad.admin_Id = a.admin_Id INNER JOIN no_user u ON u.user_Id = ad.user_Id WHERE a.notice_Id = $NoticeId;");
        $result = $query->result();
        return $result;
   
    }


    public function get_coverimage($NoticeId){
        $query = $this->db->query("SELECT * FROM no_coverimage WHERE notice_Id = $NoticeId;");
        $row = $query->row();

        if(isset($row)){
            return $row;
        }
        return "";
    }

    public function get_attachment($NoticeId){

        $query = $this->db->query("SELECT * FROM no_attachment WHERE notice_Id = $NoticeId;");
        $result = $query->result();
        return $result;
   
    }

    public function get_link($NoticeId){
        $query = $this->db->query("SELECT * FROM no_links WHERE notice_Id = $NoticeId;");
        $result = $query->result();
        return $result;
    }

    // insert sys logs
    public function set_log($activity){
        
        $log_user = $this->session->userdata('log_user');

        $this->db->set('activity', $activity);
        $this->db->set('user_id', $log_user->user_Id);
        $this->db->insert('no_system_log');
    }


}
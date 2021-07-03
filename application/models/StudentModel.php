<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentModel extends CI_Model{

    public function can_login($username,$password){

        $query = $this->db->query("SELECT * FROM no_user u LEFT JOIN no_user_student s ON u.user_Id = s.user_Id WHERE u.user_status = 'active' and u.user_password = '$password' AND u.user_email ='$username' OR s.enrollment_Id = '$username'");
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

        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            return false;
        }

        return $student_id;
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

    /** get notices infor  */
    public function get_all_notices($facultyId){

        $query = $this->db->query("SELECT * FROM no_notice WHERE notice_status = 'active' AND faculty_Id IN (1, 2, $facultyId) ORDER BY notice_Id DESC");
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


}
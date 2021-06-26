<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class StudentModel extends CI_Model{

    public function can_login($username,$password){
        $this->db->select('*');
        $this->db->from('no_user');
        $this->db->where('enrollment_Id',$username);
        $this->db->where('user_password',$password);

        $query = $this->db->get();
        $result = $query->result();

        return $result[0];
   
    }

    public function insert_data($data)
    {
        return ($this->db->insert('no_user', $data))  ?   $this->db->insert_id()  :   false;

    }

    public function check_enroll_exsit($enrollId)
    {
        $query = $this->db->query("SELECT * FROM no_user WHERE enrollment_Id = '".$enrollId."'");
        $row = $query->row();
        
        if(isset($row)){
            return true;
        }
        return false;
    }

    public function get_all_notices($facultyId){

        $query = $this->db->query("SELECT * FROM no_notice_all_view WHERE faculty_id = 1 OR faculty_id = 2 OR faculty_id = $facultyId AND notice_status='Active'");
        $result = $query->result();
        return $result;
   
    }

    


}
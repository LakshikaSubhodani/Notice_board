<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_login_model extends CI_Model{

    public function can_login($username,$password){
        $this->db->select('*');
        $this->db->from('no_user');
        $this->db->where('enrollment_Id',$username);
        $this->db->where('user_password',$password);

        $query = $this->db->get();

        return $query;   
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

}
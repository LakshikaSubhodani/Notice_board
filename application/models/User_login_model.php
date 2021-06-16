<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class User_login_model extends CI_Model{

    function can_login($username,$password){
       $this->db->select('*');
       $this->db->from('no_user');
        $this->db->where('enrollment_Id',$username);
        $this->db->where('user_password',$password);

        $query = $this->db->get();

        return $query;

        

    }
}
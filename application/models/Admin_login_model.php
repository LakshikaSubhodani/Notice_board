<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login_model extends CI_Model{

    function can_login($username,$password){
       $this->db->select('*');
       $this->db->from('no_admin');
        $this->db->where('admin_email',$username);
        $this->db->where('admin_password',$password);

        $query = $this->db->get();

        return $query;

        

    }
}

?>
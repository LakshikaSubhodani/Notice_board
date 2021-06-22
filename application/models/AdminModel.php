<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminModel extends CI_Model{

    function can_login($username,$password){
        $this->db->select('*');
        $this->db->from('no_admin');
        $this->db->where('admin_email',$username);
        $this->db->where('admin_password',$password);

        $query = $this->db->get();
        $result = $query->result();

        return $result[0];

    }

    // get notices for data table
    function getDataNotices($postData=null){

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search 
        $searchQuery = "";
        if($searchValue != ''){
            $searchQuery = " (notice_Id like '%".$searchValue."%' or title like '%".$searchValue."%' or notice_type like'%".$searchValue."%' ) ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $records = $this->db->get('no_notice_all_view')->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        if($searchQuery != '')
            $this->db->where($searchQuery);
        $records = $this->db->get('no_notice_all_view')->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select('*');
        $log_user = $this->session->userdata('log_user');
        $role_id = $log_user->faculty_Id;

        //select query for database;
        if($role_id == 1){
            $this->db->where('faculty_Id = 1 AND notice_Status = "Active"');
        }else if($role_id == 2 ){
            $this->db->where('faculty_Id = 2 AND notice_Status = "Active"');
        }else if($role_id == 3){
            $this->db->where('faculty_Id = 3 AND notice_Status = "Active"');
        }else if($role_id == 4){
            $this->db->where('faculty_Id = 4 AND notice_Status = "Active"');
        }else if($role_id == 5){
            $this->db->where('faculty_Id = 5 AND notice_Status = "Active"');
        }else{
            $this->db->where('faculty_Id = 6 AND notice_Status = "Active"');
        }
        
        
        if($searchQuery != '')
            $this->db->where($searchQuery);
        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get('no_notice_all_view')->result();
        $data = array();

        foreach($records as $record ){

            $data[] = array( 
               "notice_Id"=>$record->notice_Id,
               "title"=>$record->title,
               "update_date"=>$record->update_date,
               "notice_type"=>$record->notice_type,
               "action"=>'
                 <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;">
                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-danger btn-xs dt-delete">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>'
            ); 
         }

         ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        );

     return $response; 

    }


    //newnotice for database
    public function insertnotice($data)
    {
    return $this->db->insert('no_notice',$data);
    }
    
    //inserting attachment
    public function insertattachment($att)
    {
        return $this->db->insert('no_attachment',$att);
    }

    //inserting author
}

?>
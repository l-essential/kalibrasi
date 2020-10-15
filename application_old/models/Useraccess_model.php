<?php

class Useraccess_model extends MY_Model {

    public $am_db;
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->am_db = $this->db->database;
        $this->prefix_id='id_user';
    }
    
    public function getemailusersbyid($users_id) {
        $sql = "SELECT * FROM $this->table where statusdata='active' and id_user in($users_id) ";
        $result = $this->db->query($sql);
        $data=$this->returndata($result, 'array');
        if($data){  
            $emails = array();
            foreach ($data as $row) {
                $emails[]=$row['email'];
                
            }
            $dataemail = implode(",", $emails);
            return $dataemail;
        }else{
            return null;
        }
    }

}

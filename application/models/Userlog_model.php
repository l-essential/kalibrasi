<?php

class Userlog_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = "userlog";
        $this->prefix_id = "id_userlog";
        $this->user = "useraccess";
        $this->prefix_user = "id_user";
    }

     public function getGridData() {
        $checkfiield = $this->session->userdata('ses_id_user');
        $query = "SELECT  
                        a.id_userlog,
                        a.systemdevice, 
                        a.browser,
                        a.url,  
                        a.accesstime, 
                        a.id_useraccess, 
                        DATEDIFF(NOW(), a.accesstime ) as hari,
                        b.username
                  FROM $this->table a
                  LEFT JOIN $this->user b on a.id_useraccess = b.id_user
                  WHERE a.id_useraccess = '$checkfiield' ";
                  
        //cek improvement_code by user session
        // $checkfiield = $this->session->userdata('ses_id_user');
        //  if ($this->session->userdata('ses_id_user')){
        //       $query .= " WHERE a.id_useraccess = '$checkfiield' AND a.statusdata='active' ORDER BY a.id_userlog DESC";
        // }


        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

}

<?php

class Total_model extends MY_Model {

     public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = 'useraccess';
        $this->prefix_id = "id_user";
    }
    
     public function total_user() {
        $sql = " SELECT count(a.namaKaryawan) as total 
                  FROM useraccess a
                  WHERE
                  a.statusdata='active'
            ";
        $result = $this->db->query($sql);
        $return = $this->returndata($result, 'row');
        if ($return) {
            return $return->total;
        } else {
            return 0;
        }
    }
   
}

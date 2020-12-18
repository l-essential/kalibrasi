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
                  a.statusdata='active' AND
                  a.status_login = 1
            ";
        $result = $this->db->query($sql);
        $return = $this->returndata($result, 'row');
        if ($return) {
            return $return->total;
        } else {
            return 0;
        }
    }

    public function user_online() {
        $sql = " SELECT count(a.status_online) as total 
                  FROM useraccess a
                  WHERE
                  a.statusdata='active' AND
                  a.status_online = 1
            ";
        $result = $this->db->query($sql);
        $return = $this->returndata($result, 'row');
        if ($return) {
            return $return->total;
        } else {
            return 0;
        }
    }

    function user_aja() {
        $this->db->select('a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.status_online', 1);
        return $this->db->get()->result_array();
    }
   
}

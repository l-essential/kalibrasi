<?php

class Periode_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('pu', true);
         $this->table = 'e04_ts_calibration_periode';
        $this->prefix_id = 'periode_id';
    }

    public function GridData($periode_id) {
        $query = "
                 SELECT a.*                        
                 FROM $this->table a   
                 WHERE
                    a.statusdata='active'
                   AND a.calibration_id ='$periode_id' 
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }
    
    public function getby_id_data($periode_id) {
        $this->db->where("periode_id",$periode_id);
        $result = $this->db->get($this->table);
        return $this->returndata($result,'array');
    }

}

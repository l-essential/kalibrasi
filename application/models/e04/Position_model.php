<?php
class Position_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e00_position';
        $this->prefix_id = 'id_position';
    }

     public function getsearch($search){       
        $sql = "SELECT position_name,
                       position_code,
                       id_position
                FROM $this->table 
                WHERE position_name LIKE '%$search%' ";         
        $result = $this->db->query($sql);
        return $this->returndata($result,'array');
    }
    

}

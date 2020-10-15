<?php 
class Mresiko_model extends MY_Model {

       function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
             $this->table="e01_ms_resiko";
             $this->prefix_id = "id_resiko";
    }
    public function getAll() {
        $query = "
                 SELECT 
                        a.*
                 FROM $this->table a  
                 ";
        return $this->db->query($query);
    }



}

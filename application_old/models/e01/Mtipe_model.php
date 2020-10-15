<?php
class Mtipe_model extends MY_Model { 
      public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);;
            $this->table='e01_ms_tipe';
            $this->prefix_id = "id_tipe";
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

<?php

class Capa_preventive_model extends MY_Model {
  
      function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e01_ts_capa_preventive';
            $this->prefix_id = "id_preventive";
    }
    
}
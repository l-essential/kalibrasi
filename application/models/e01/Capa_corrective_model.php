<?php

class Capa_corrective_model extends MY_Model {
  
      function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e01_ts_capa_corrective';
            $this->prefix_id = "corrective_id";
    }
    
}
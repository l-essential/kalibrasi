<?php

class Uom_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'e02_ms_uom';
         $this->prefix_id = "id_uom";
    }

}

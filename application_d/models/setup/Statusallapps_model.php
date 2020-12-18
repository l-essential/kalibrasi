<?php

class Statusallapps_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = '_statusall_apps';
         $this->prefix_id = "id_status";
    }

}

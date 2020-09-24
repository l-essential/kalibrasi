<?php

class Logno_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = '_logno';
         $this->prefix_id = "id";
    }

}

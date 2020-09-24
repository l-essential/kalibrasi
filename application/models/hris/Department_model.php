<?php

class Department_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hr', true);
         $this->table = 'mst_department';
         $this->prefix_id = "id_department";
    }


}

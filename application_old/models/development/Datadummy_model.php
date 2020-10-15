<?php

class Datadummy_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('dummy', true);
         $this->table = 'data_dummy';
         $this->prefix_id = "id_dummy";
    }

    // function insertdata($record) {
    //     $this->db->insert($this->table, $record);
        
    // }


}

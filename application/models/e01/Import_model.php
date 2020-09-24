<?php
class Import_model extends MY_Model { 
      public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);;
            $this->table='e01_tmp_penyimpangan';
            $this->prefix_id = "id_formulir";
    }

    public function insert_tmp($arraydata) {
        $this->db->insert_batch($this->table, $arraydata);
    }

}
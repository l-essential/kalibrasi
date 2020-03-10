<?php
class Mruanglingkup_model extends MY_Model {
      public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e01_ms_ruanglingkup';
            $this->prefix_id = "id_ruanglingkup";
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('kode_ruanglingkup','asc');
        return $this->db->get($this->table)->result_array();
    }
}

<?php
class Scope_model extends MY_Model {
      public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e00_scope';
            $this->prefix_id = "scope_id";
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('scope_code','asc');
        return $this->db->get($this->table)->result_array();
    }
}

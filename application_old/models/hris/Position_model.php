<?php

class Position_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = '_position';
         $this->prefix_id = "id_position";
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('position_name','asc');
        return $this->db->get($this->table)->result_array();
    }

}

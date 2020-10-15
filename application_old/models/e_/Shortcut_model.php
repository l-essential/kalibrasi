<?php

class Shortcut_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('st', true);
         $this->table = 'shortcut';
         $this->prefix_id = "shortcut_id";
    }

    function shortcut() {
        $this->db->select('a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        return $this->db->get()->result_array();
    }

}

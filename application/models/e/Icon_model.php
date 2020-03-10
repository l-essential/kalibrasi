<?php

class Icon_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = '_icon';
         $this->prefix_id = "id_icon";
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('id_department','asc');
        return $this->db->get($this->table)->result_array();
    }

}

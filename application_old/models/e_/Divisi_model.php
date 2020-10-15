<?php

class Divisi_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hris', true);
         $this->table = 'dbo.MS_Divisi';
         $this->prefix_id = "kodeDivisi";
    }

    public function getAll() {
        $this->db->order_by('namaDivisi','asc');
        return $this->db->get($this->table)->result_array();
    }

}

<?php

class Support_subject_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table            = 'e00_support_subject';
        $this->prefix_id        = 'subject_id';
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*
                 FROM $this->table_detail a            
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('subject_code','asc');
        return $this->db->get($this->table)->result_array();
    }

}

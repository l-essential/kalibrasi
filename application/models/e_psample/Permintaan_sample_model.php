<?php

class Permintaan_sample_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table            = 'e07_psample';
        $this->prefix_id        = 'psample_id';
        $this->table_detail     = 'e07_psample_detail';
        $this->prefix_id_detail = 'psample_detail_id';
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
}

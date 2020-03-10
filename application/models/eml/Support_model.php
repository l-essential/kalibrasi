<?php

class Support_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table            = '_message';
        $this->prefix_id        = 'id_message';
        $this->table_detail     = 'e00_position';
        $this->prefix_id_detail = 'id_position';
    }

     function insertdata_message($record) {
        $param = $this->input->post();
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
            $record['department_name'] =  json_encode(implode(",", $param['department_name']));
        }
        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id($this->table);
        return $insert_id;
    }

     function insert_messageto($record2) {
      
        $this->db->insert_batch($this->tbl_depart_terkait, $record2);
        
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.location_code
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

}

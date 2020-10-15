<?php
class Schedule_byuser_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e06_schedule';
        $this->prefix_id = "schedule_id";
        $this->table_detail     = 'e06_schedule_detail';
        $this->prefix_id_detail = 'schedule_detail_id';
        
    }

    function getGridData() {
        $query = "  SELECT 
                    a.*,
                    b.*
                    FROM $this->table a 
                    LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id ";
                    $checkfiield = $this->session->userdata('ses_namaKaryawan');
                    if ($checkfiield != 'ADMIN' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE a.nama_karyawan = '$checkfiield' AND a.statusdata = 'active'  ";
                    }       
            return $this->db->query($query);
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 AND a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }


}
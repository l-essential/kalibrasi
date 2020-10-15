<?php

class File_analisis_model extends MY_Model {
  
      function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e01_vl_file_analisis';
            $this->prefix_id = "id_file_analisis";
             $this->table_evls = "bank_model";
    }

       function getGridDatabyId($id_bank) {
        $query = "
                 SELECT a.*,b.improvement_code                        
                 FROM $this->table a   
                 LEFT JOIN $this->table_evls b on a.id_bank = b.id_bank 
                 WHERE 
                 a.status='aktif' and
                 b.status='aktif' and
                 a.id_bank=$id_bank
                
                 ";
        return $this->db->query($query);
    }

    public function getAlllimit($limit) {
        $this->db->order_by($this->prefix_id, 'desc');
        return parent::getAlllimit($limit);
    }
    
}
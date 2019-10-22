<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Bataspenghasilan_model extends MY_Model {

   
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = 'm_bataspengasilan';
        $this->prefix_id = 'id_m_bataspengasilan';
      
    }

    public function getbatasan() {
        $query = "
                 SELECT 
                        a.id_m_bataspengasilan,                    
                        a.tanggal_tmt,                    
                        a.batasnilai_rumahtapak,                    
                        a.batasnilai_rumahsusun,                    
                        a.batasnilai_rumahtapak_suamiistri,                    
                        a.batasnilai_rumahrusun_suamiistri                    
                 FROM $this->table a   
                 WHERE
                    a.statusdata='active'
                 ORDER BY a.tanggal_tmt desc
                 LIMIT 1
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $this->returndata($result,'row');
        } else {
            return null;
        }
    }
    public function getGridData() {
        $query = "
                 SELECT a.*                    
                 FROM $this->table a   
                 WHERE
                    a.statusdata='active'
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

}

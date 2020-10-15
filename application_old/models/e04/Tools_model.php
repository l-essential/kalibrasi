<?php
class Tools_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e04_ms_tools';
        $this->prefix_id = 'tools_id';
            $this->table_detail     = 'e04_ms_tools_detail';
            $this->prefix_id_detail = 'toolsdetail_id';
    }
    
    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.tools_code
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

     public function getsearch($search){       
        $sql = "SELECT tools_name,
                       tools_code,
                       tools_id,
                       tools_noseri_model 
                FROM $this->table 
                WHERE tools_name LIKE '%$search%' ";         
        $result = $this->db->query($sql);
        return $this->returndata($result,'array');
    }
    

}

<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Badanhukum_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
    }
    public function getdatabadanhukum($badanhukum) {
        $this->db->where("statusdata", "active");
        $this->db->where("badanhukum", $badanhukum);       
        $this->db->select("
                        id_badanhukum,
                        badanhukum,
                        keterangan,
                        statusbadanhukum
                ");
        $this->db->from($this->table . ' use index (INDEX_GETBADANHUKUM) ');
        $result = $this->db->get();
        return $this->returndata($result, 'row');
    }
    
    

}

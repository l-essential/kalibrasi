<?php
//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Kota_model extends MY_Model {
  
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = "m_kecamatan";
        $this->prefix_id = "id_kecamatan";
    }
    
    
}

<?php 
class Mkatagori_model extends MY_Model {

       function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
             $this->table="e01_ms_katagori";
             $this->prefix_id = "id_katagori";
    }
     public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('kode_katagori','asc');
        return $this->db->get($this->table)->result_array();
    }


}

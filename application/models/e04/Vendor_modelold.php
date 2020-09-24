<?php
class Vendor_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e04_ms_vendor';
        $this->prefix_id = 'vendor_id';
    }

     public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('vendor_id','asc');
        return $this->db->get($this->table)->result_array();
    }
    

}

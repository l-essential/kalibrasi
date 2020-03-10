<?php
class Progress_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e03_apps_progress';
        $this->prefix_id = 'id_progress';
    }
    
     public function getAll() {
        $this->db->order_by('persen_progress','desc');
        $this->db->where('statusdata','active');
        return $this->db->get($this->table)->result_array();
    }

}

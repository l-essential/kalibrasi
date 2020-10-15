<?php
class Public_Up_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e03_apps_public_up';
        $this->prefix_id = 'id_public_up';
    }

     public function getAll() {
        $this->db->where('statusdata','active');
        return $this->db->get($this->table)->result_array();
    }

}

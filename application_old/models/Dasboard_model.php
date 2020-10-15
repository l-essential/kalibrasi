<?php

class Dashboard_model extends MY_Model {

     public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = 'useraccess';
        $this->prefix_id = "id_user";
    }
    
    public function getGridData() {
        return null;
    }
   
}

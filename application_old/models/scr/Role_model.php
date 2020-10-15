<?php

class Role_model extends MY_Model {
    
     public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = 'roleapps';
        $this->prefix_id = "id_role";
    }
}

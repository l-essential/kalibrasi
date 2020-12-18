<?php

class Application_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = 'maplikasi';
        $this->prefix_id = "id_".$this->table;
    }

}

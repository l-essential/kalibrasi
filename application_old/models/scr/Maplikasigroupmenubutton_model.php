<?php

class Maplikasigroupmenubutton_model extends MY_Model {

    
    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
    }

}

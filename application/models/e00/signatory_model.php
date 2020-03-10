<?php

class signatory_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'e00_signatory';
         $this->prefix_id = "id_penandatangan";
    }

}

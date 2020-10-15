<?php

class Assets_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'e02_ts_assets';
         $this->prefix_id = "assets_id";
    }

}

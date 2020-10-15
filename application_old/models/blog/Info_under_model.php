<?php

class Info_under_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_under';
         $this->prefix_id = "info_under_id";
    }

}

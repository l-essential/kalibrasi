<?php

class Info_top_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_top';
         $this->prefix_id = "info_top_id";
    }

}

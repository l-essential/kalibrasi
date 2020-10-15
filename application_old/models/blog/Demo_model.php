<?php

class Demo_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_demo';
         $this->prefix_id = "info_demo_id";
    }

}

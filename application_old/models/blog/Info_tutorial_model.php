<?php

class Info_tutorial_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_tutorial';
         $this->prefix_id = "info_tutorial_id";
    }

}

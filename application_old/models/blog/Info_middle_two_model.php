<?php

class Info_middle_two_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_middle_two';
         $this->prefix_id = "middle_two_id";
    }

}

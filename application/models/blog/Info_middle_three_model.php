<?php

class Info_middle_three_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
          $this->table = 'info_middle_three';
         $this->prefix_id = "middle_three_id";
    }

}

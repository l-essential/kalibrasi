<?php

class Info_page_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_page';
         $this->prefix_id = "info_page_id";
    }

}

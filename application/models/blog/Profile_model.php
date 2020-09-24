<?php

class Profile_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'info_profile';
         $this->prefix_id = "info_profile_id";
    }

}

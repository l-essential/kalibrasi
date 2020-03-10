<?php

class Userlog_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
    }

}

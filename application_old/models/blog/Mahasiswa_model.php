<?php

class Mahasiswa_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'mahasiswa';
         $this->prefix_id = "nim";
    }

    function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('mahasiswa', $limit, $start);
        return $query;
    }

}

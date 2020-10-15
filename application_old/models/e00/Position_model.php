<?php

class Position_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'e00_position';
         $this->prefix_id = "id_position";
    }

    
    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('location_code');
        $this->db->where('year(tanggal)', $tahun);
        $this->db->like('location_code', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->location_code)) {
                $tmp = explode("/", $row->location_code);
                return intval($tmp[2]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

}

<?php

class Kpi_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('kpi', true);
         $this->table = 'kpi';
         $this->prefix_id = "kpi_id";
         $this->table_detail = 'periode_detail';
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

    function total_bobot() {
        $query = " SELECT COUNT(bobot) AS totalbobot FROM $this->table a";
        return $this->db->query($query)->row();
    }

    function totol_kpi() {
        $query = " SELECT COUNT(kpi_value) AS totalkpi FROM $this->table a ";
        return $this->db->query($query)->row();
    }


    function get_byidpreview($id) {
        $this->db->select('a.*');
        $this->db->from($this->table_detail . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.detail_id', $id);
        return $this->db->get()->row();
    }

    function updatedata($id, $record) {
        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
        }
        $this->db->where("kpi_id", $id);
        return $this->db->update($this->table, $record);
    }

    function deletedata($id, $record = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->table, $record);
        } else {
            $this->delete($id);
        }
    }


}

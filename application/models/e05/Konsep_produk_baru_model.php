<?php

class Konsep_produk_baru_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'e05_concept_product_step_1';
         $this->table_1 = 'e05_concept_product_step_2';
         $this->table_2 = 'e05_concept_product_step_3';
         $this->table_3 = 'e05_concept_product_step_4';
         $this->prefix_id = "konsep_produk_baru_id";
    }

    function insertdata($record) {
        $param = $this->input->post();
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id($this->table);
        return $insert_id;
    }

    function insertdata_1($record_1) {
        $this->db->insert($this->table_1, $record_1);
    }
    function insertdata_2($record_2) {
        $this->db->insert($this->table_2, $record_2);
    }
    // function insertdata_3($record_3) {
    //     $this->db->insert_batch($this->table_3, $record_3);
    // }

    function updatedata_1($konsep_id, $record_1) {
        $this->db->where($this->prefix_id, $konsep_id);
        return $this->db->update($this->table_1, $record_1);
    }

    function updatedata_2($konsep_id, $record_2) {
        $this->db->where($this->prefix_id, $konsep_id);
        return $this->db->update($this->table_2, $record_2);
    }

    function deletedata_1($id, $record_1 = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record_1['deleteby'] = $this->session->userdata('ses_id_user');
            $record_1['deletetime'] = $this->datetimeserver;
            $record_1['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->table_1, $record_1);
        } else {
            $this->delete($id);
        }
    }
    function deletedata_2($id, $record_2 = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record_2['deleteby'] = $this->session->userdata('ses_id_user');
            $record_2['deletetime'] = $this->datetimeserver;
            $record_2['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->table_2, $record_2);
        } else {
            $this->delete($id);
        }
    }
    // function deletedata_3($id, $record_3 = array()) {
    //     $checkfiield = $this->checkfield("deleteby");
    //     if ($checkfiield > 0) {
    //         $record2['deleteby'] = $this->session->userdata('ses_id_user');
    //         $record2['deletetime'] = $this->datetimeserver;
    //         $record2['statusdata'] = 'nonactive';

    //         $this->db->where($this->prefix_id, $id);
    //         return $this->db->update($this->table_3, $record_3);
    //     } else {
    //         $this->delete($id);
    //     }
    // }

    
    function getby_id_array_1($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_1. ' a ');
        $this->db->where("a.statusdata", "active");
        $this->db->where("a.$this->prefix_id", $id);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function getby_id_two($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_2. ' a ');
        $this->db->where("a.statusdata", "active");
        $this->db->where("a.$this->prefix_id", $id);
        $result = $this->db->get();
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    public function get_no_konsep($prefix_id, $no_konsep) {
        $this->db->where("$this->prefix_id", $prefix_id);
        $this->db->where("no_konsep_produk", $no_konsep);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('no_konsep_produk');
        $this->db->where('year(tanggal_pembuatan)', $tahun);
        $this->db->like('no_konsep_produk', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->no_konsep_produk)) {
                $tmp = explode("/", $row->no_konsep_produk);
                return intval($tmp[2]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

}

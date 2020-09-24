<?php

class Support_model extends MY_Model {

    protected $table_role;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('pu', true);
        $this->table = "_support";
        $this->prefix_id = "support_id";
             $this->table_user = "lessential_accessapps.useraccess";
    }

    public function total_user() {
      $this->db->where('statusdata','active');
		$data = $this->db->get( $this->table);
		return $data->num_rows();
    }

    
    function getGridData() {
        if ($this->session->userdata('ses_department_name') == 'IT') {
            $query  = " SELECT 
                        a.*                     
                        FROM $this->table a
                        WHERE a.statusdata = 'active' ";
                        $result = $this->db->query($query);
                            if ($result->num_rows() > 0) {
                                return $result;
                            } else {
                                return null;
                        }

                     } else {

            $checksession = $this->session->userdata('ses_department_name');
            $query  = " SELECT 
                        a.*                    
                        FROM $this->table a
                        WHERE a.department_name LIKE '%$checksession%' AND a.statusdata = 'active' ";
                        $result = $this->db->query($query);
                            if ($result->num_rows() > 0) {
                                return $result;
                            } else {
                                return null;
                        }
                }
    }

    // function getby_id($id) {
    //     $this->db->where($this->prefix_id, $id);
    //     $result = $this->db->get($this->table);
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return null;
    //     }
    // }

    //  function getby_id_array($id) {
    //     $checkfiield = $this->checkfield("statusdata");
    //     if ($checkfiield > 0) {
    //         $this->db->where("statusdata", "active");
    //     }
    //     $this->db->where($this->prefix_id, $id);
    //     $result = $this->db->get($this->table);
    //     if ($result->num_rows() > 0) {
    //         $data = $result->result_array();
    //         return $data[0];
    //     } else {
    //         return null;
    //     }
    // }

    function getby_id_array($id) {
        $this->db->select(' a.*, b.lokasi_gambar,');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_user . ' b ', 'a.namaKaryawan = b.namaKaryawan', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.support_id', $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('support_code');
        $this->db->where('year(support_date)', $tahun);
        $this->db->like('support_code', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->support_code)) {
                $tmp = explode("-", $row->support_code);
                return intval($tmp[1]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    function onreads() {
       $this->db->select("*");
              $this->db->where('support_status = 0 ');
              $this->db->where('statusdata','active ');
      $data = $this->db->get($this->table);
      return $data->num_rows();
    }

}

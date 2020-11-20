<?php

class Report_master_model extends MY_Model {

    // protected $tbl_pengajuanbank_header;
    // protected $prefix_pengajuanbank_header;
    // protected $tbl_bank;
    // protected $prefix_bank;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
            $this->prefix_id = "calibration_id";
            $this->table = "e04_ts_calibration";
            $this->prefix_periode = "periode_id";
            $this->tbl_periode = "e04_ts_calibration_periode";
            $this->tbl_tools = 'e04_ms_tools';
            $this->prefix_tools = 'tools_id';
            $this->tbl_scope = 'e00_scope';
            $this->prefix_scope = 'scope_id';
            $this->tbl_vendor = 'e04_ms_vendor';
            $this->prefix_vendor = 'vendor_id';
            $this->tbl_podetail = 'e04_ts_calibration_podetail';
            $this->prefix_podetail = 'id_position';
    }

    public function generatereport($param) {
        $department_name = $param['department_name'];
        $where = " WHERE a.statusdata='active' AND
                    a.statusdata = 'active' ";

        if (!empty($department_name)) {
            $where .= " AND a.calibration_code like '%$department_name%' ";
        }
        
        
        $query = " SELECT a.*, b.*
                FROM $this->table a  
                LEFT JOIN $this->tbl_tools  b on a.tools_id = b.tools_id
                $where ";

                $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result->result_array();
                } else {
                    return null;
                }
            }

    }

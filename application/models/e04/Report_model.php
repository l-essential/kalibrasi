<?php

class Report_model extends MY_Model {

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
            $this->table_detail     = 'e04_ts_calibration_podetail';
            $this->prefix_detail = 'id_position';
                
    }

    public function generatereport($param) {
        $scope = $param['scope_code'];
        $location = $param['location_name'];
        $type = $param['calibration_type'];
        $daritahun = date('Y', strtotime($param['daritanggal']));
        $sampaitahun = date('Y', strtotime($param['sampaitanggal']));

        $where = " WHERE a.statusdata='active' AND
                    d.date_po >='$daritahun' and
                    d.date_po <='$sampaitahun' and 
                    b.statusdata = 'active' ";

        if (!empty($type)) {
            $where .= " AND b.calibration_type like '%$type' ";
        }
         if (!empty($location)) {
            $where .= " AND b.location_name like '%$location%' ";
        }
        if (!empty($scope)) {
            $where .= " AND b.scope_code like '%$scope%' ";
        }
        
        
        $query = " SELECT a.*, b.*, c.*, d.*
                FROM $this->tbl_periode a   
                LEFT JOIN $this->table  b on a.calibration_id = b.calibration_id
                LEFT JOIN $this->tbl_tools  c on b.tools_id = c.tools_id
                LEFT JOIN $this->table_detail d on a.periode_id = d.id_position
                $where ";

                $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result->result_array();
                } else {
                    return null;
                }
            }

    }

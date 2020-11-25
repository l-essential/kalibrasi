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
        $this->table            = 'e04_ts_calibration_poheader';
        $this->prefix_id        = 'c_pohedaer_id';
        $this->table_detail     = 'e04_ts_calibration_podetail';
        $this->prefix_id_detail = 'id_position';
        $this->table_periode     = 'e04_ts_calibration_periode';
        $this->prefix_id_periode = 'periode_id';
        $this->table_calibration = 'e04_ts_calibration';
        $this->prefix_id_calibration = 'calibration_id';
        $this->tbl_tools = 'e04_ms_tools';
        $this->tools = 'tools_id';
        $this->table_vendor = 'e04_ms_vendor';
        $this->prefix_id_vendor = 'vendor_id';
        $this->table_podetail_detail = 'e04_ts_calibration_podetail_detail';
        $this->prfix_id_podetail_detail = 'id_podetail_detail';
        // $this->db_pu = $this->load->database('pu', true); // load db from controller
    }

    public function generatereport($param) {
        $scope = $param['scope_code'];
        $department_name = $param['department_name'];
        $daritanggal = date('y-m-d', strtotime($param['daritanggal']));
        $sampaitanggal = date('y-m-d', strtotime($param['sampaitanggal']));
        // var_dump($sampaitanggal);
        // exit;

        $where = " WHERE a.statusdata='active' AND
                    b.date_po >='$daritanggal' and
                    b.date_po <='$sampaitanggal' and 
                    a.statusdata = 'active'";
                    
                    if (!empty($scope)) {
                        $where .= " AND c.scope_code = '$scope' ";
                    }
                    
                    if (!empty($department_name)) {
                        $where .= " AND a.calibration_code like '$department_name%' ";
                    }

                    $where .= " GROUP BY a.calibration_code";
                
        $query = "SELECT 
                a.*,
                b.*,
                c.*,
                d.*,
                a.calibration_qty as qty_cal,
                f.vendor_name,
                a.periode_date_awal,
                a.periode_date_akhir,
                b.date_po,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total
                FROM $this->table_detail a
                LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                LEFT JOIN $this->table_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN $this->tbl_tools d on c.tools_id = d.tools_id
                LEFT JOIN $this->table_vendor f on a.vendor_id = f.vendor_id

                $where ";

                $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result->result_array();
                } else {
                    return null;
                }
    }
}

<?php
class Calibration_po_model extends MY_Model {

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
    }

    function getGridDatadetail($idheader) {
        
         $query = " SELECT 
                    a.*,
                    b.*,
                    c.*,
                    d.*,
                    e.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                 LEFT JOIN $this->table_calibration c on a.calibration_code = c.calibration_code 
                 LEFT JOIN $this->tbl_tools d on c.tools_id = d.tools_id 
                 LEFT JOIN $this->table_vendor e on e.$this->prefix_id_vendor = e.$this->prefix_id_vendor           
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getAll_code() {
        $checkfiield = $this->session->userdata('ses_department_name');
        $query = "SELECT 
                        a.*,
                        b.*
                 FROM $this->table_calibration a   
                 LEFT JOIN $this->tbl_tools b on a.tools_id = b.tools_id ";
         if ($checkfiield != 'QA' or $checkfiield != 'CEO' or $checkfiield != 'CFO' or $checkfiield != 'IT'){
            $query .= " WHERE a.calibration_code LIKE '$checkfiield%' AND a.statusdata = 'active' ";
      }
        return $this->db->query($query);
    }

    public function getAll_periode() {
        $this->db->where('statusdata', 'active');
        return $this->db->get($this->table_calibration)->result_array();
    }

    public function getby_id_payment($id) {
        $this->db->where("$this->prefix_id_detail", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table_detail);
        return $this->returndata($result, 'row');
    }

     function po_getbyid($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.c_pohedaer_id', $id);
        return $this->db->get()->row();
    }

    function getby_calibration_po($id) {
        $query = " SELECT 
                        a.*
                 FROM $this->table_detail a
                 WHERE 
                 a.statusdata='active'
                 AND a.periode_id=$id
                
                 ";
        return $this->db->query($query)->row();
    }

    function GridData_PO($id) {
     $query = " SELECT 
                a.*,
                b.*,
                c.*,
                f.vendor_name,
                CONCAT(d.tools_code, ' - ',d.tools_name) AS tools_code,
                CONCAT(c.location_name, ' - ',c.position_name) AS location_name,
                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
               

                FROM $this->table_detail a   
                LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                LEFT JOIN $this->table_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN $this->tbl_tools d on c.tools_id = d.tools_id
                LEFT JOIN $this->table_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN $this->table_vendor f on f.vendor_id = f.vendor_id
                WHERE 
                a.$this->prefix_id='$id' AND e.status_calibration = 0 AND  a.statusdata='active' ";
        return $this->db->query($query);
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('calibrationpo_code');
        $this->db->where('year(date_po)', $tahun);
        $this->db->like('calibrationpo_code', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->calibrationpo_code)) {
                $tmp = explode("/", $row->calibrationpo_code);
                return intval($tmp[3]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }



}
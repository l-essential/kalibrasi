<?php
class Home_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e04_ts_calibration';
        $this->prefix_id = 'calibration_id';
            $this->table_detail = 'e04_ts_calibration_periode';
            $this->prefix_id_detail = 'periode_id';
                $this->table_location = 'e00_location';
                $this->prefix_id_location = 'id_location';
                    $this->table_position = 'e00_position';
                    $this->prefix_id_position = 'id_position';
                        $this->table_vendor = 'e04_ms_vendor';
                        $this->prefix_id_vendor = 'vendor_id';
                    $this->tbl_cdetail = 'e04_ts_calibration_detail';
                    $this->prefix_id_cdetail = 'calibrationdetail_id';
                $this->tbl_tools = 'e04_ms_tools';
                $this->tools = 'tools_id';
                $this->tbl_dtools = 'e04_ms_tools_detail';
            $this->prefix_id_dtools = 'toolsdetail_id';
    }
    
     public function getAll() {
        $this->db->where('statusdata','active');
        return $this->db->get($this->table)->result_array();
    }

    function GridData_eksternal() {
        $query = " SELECT 
                    a.*,
                    b.*,
                    c.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                 LEFT JOIN $this->tbl_tools c on b.$this->tools = c.$this->tools                 
                 WHERE 
                 a.status_calibration = 0 AND a.statusdata='active' ORDER BY a.periode_year DESC ";
        return $this->db->query($query);
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function GridDataCalibration($idheader) {
        $query = "
                SELECT
                    a.calibration_code,
                    a.calibrationdetail_name,
                    a.calibrationdetail_code
                FROM $this->tbl_cdetail a
                LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                        a.$this->prefix_id='$idheader'
                    AND a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
    
    function preview_getbyid($id) {
        $this->db->select(' a.*, b.*,c.*');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_detail . ' b ', 'a.calibration_id = b.calibration_id');
        $this->db->join($this->tbl_tools . ' c ', 'a.tools_id = c.tools_id');
        $this->db->join($this->table_location . ' d ', 'a.location_name = d.location_name');
        $this->db->join($this->table_position . ' e ', 'a.position_name = e.position_name');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('b.statusdata', 'active');
        $this->db->where('a.calibration_id', $id);
        return $this->db->get()->row();
    }

    function getby_id($id) {
        $this->db->where($this->prefix_id, $id);
        return $this->db->get($this->table);
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

    public function getby_id_view($periode_id)
    {
        $this->db->where("$this->prefix_id_detail", $periode_id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table_detail);
        return $this->returndata($result, 'row');
    }


 
}

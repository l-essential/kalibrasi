<?php
class New_schedule_user_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e06_new_schedule';
        $this->prefix_id = 'schedule_id';
        $this->table_detail = 'e06_new_schedule_detail_user';
        $this->prefix_id_detail = 'schedule_byuser';
    }
    // --  insert data


     function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getGridData() {
        $query = " SELECT a.*                        
                   FROM $this->table a ";
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $query .= " WHERE a.statusdata='active' AND approve_schedule = '1' ";
        }

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    function Getdate_schedule($schedule_id) {
        $checkfiield = $this->session->userdata('ses_namaKaryawan');
        $this->db->select(' a.*');
        $this->db->from($this->table_dsuser. ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.schedule_id', $schedule_id);
        $this->db->where('a.namaKaryawan', $checkfiield);
        $this->db->order_by('schedule_date');
        return $this->db->get()->result_array();
    }

    public function GridData_schedule($schedule_id) {
        $checkfiield = $this->session->userdata('ses_namaKaryawan');
        $query = "  SELECT a.*
                    FROM $this->table_dsuser a 
                    WHERE schedule_id = '$schedule_id'
                    AND namaKaryawan = '$checkfiield'
                    ORDER BY schedule_date";
        return $this->db->query($query);
    }

    // function insertdata_user($record) {
    //     $record['createby'] = $this->session->userdata('ses_id_user');
    //     $record['createtime'] = date('Y-m-d H:i:s');
    //     return $this->db->insert($this->table_dsuser, $record);
    // }
    function checkData($id) {
        $this->db->where("schedule_byuser", $id);
        $result = $this->db->get($this->table_dsuser)->num_rows();
        return $result;
    }

    function insertdata_user($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where('schedule_byuser', $id);
        return $this->db->update($this->table_dsuser, $record);
    }
    
    public function getby_id_user($dsuse) {
        $this->db->where("$this->prefix_id_dsuser", $dsuse);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table_dsuser);
        return $this->returndata($result, 'row');
    }

    // function Getdate_schedule($schedule_id) {
    //     $this->db->select(' a.*,b.namaKaryawan,');
    //     $this->db->from($this->table_detail. ' a ');
    //     $this->db->join($this->table_duser. ' b ', 'a.schedule_id = b.schedule_id');
    //     $this->db->where('a.statusdata', 'active');
    //     $this->db->where('a.schedule_id', $schedule_id);
    //     $this->db->group_by ('a.schedule_date');
    //     return $this->db->get()->result_array();
    // }

    function Getdate_user($schedule_id) {
        $this->db->select(' a.*,b.namaKaryawan');
        $this->db->from($this->table_detail. ' a ');
        $this->db->join($this->table_duser. ' b ', 'a.schedule_id = b.schedule_id');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.schedule_id', $schedule_id);
        $this->db->group_by ('b.namaKaryawan');
        return $this->db->get()->result_array();
    }

    // SELECT b.namaKaryawan,a.schedule_date
    //                 FROM e06_new_schedule_detail a 
    //                 LEFT JOIN e06_new_schedule_user b on a.schedule_id = b.schedule_id


    public function total_schedule_id($schedule_id) {
              $this->db->select("*");
              $this->db->where('schedule_id', $schedule_id);
      $data = $this->db->get($this->table_detail);
      return $data->num_rows();
    }

}
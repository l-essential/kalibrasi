<?php
class New_schedule_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e06_new_schedule';
        $this->prefix_id = 'schedule_id';
        $this->table_detail = 'e06_new_schedule_detail';
        $this->table_duser = 'e06_new_schedule_user';
        $this->table_dsuser ='e06_new_schedule_detail_user';
        
    }
    // --  insert data
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

     function insertdata_record2($record2) {
         $this->db->insert_batch($this->table_detail, $record2);
         
     }

     function insertdata_record3($record3) {
         $this->db->insert_batch($this->table_duser, $record3);
         
     }
    // -- end insert data
     function create_field ($field) {
         $sql ="ALTER TABLE e06_new_schedule_detail_user
                 ADD $field DATE() ";
        return $sql;
     }
    // -- update data
    function updatedata_recored2($schedule_id, $record2) {
        $this->db->delete($this->table_detail, array('schedule_id' => $schedule_id));
        
        $this->db->where('schedule_id', $schedule_id);
        return $this->db->insert_batch($this->table_detail, $record2);
    }

    // -- update data
     function updatedata_recored3($schedule_id, $record3) {
        $this->db->delete($this->table_duser, array('schedule_id' => $schedule_id));
        
        $this->db->where('schedule_id', $schedule_id);
        return $this->db->insert_batch($this->table_duser, $record3);
    }
    // -- end update data

    // --- DELETE DATA APPROEVE FORMULIR (PERSETUJUAN MANAGER PELAPOR)---
    function deletedata_recored2($schedule_id, $record2 = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record2['deleteby'] = $this->session->userdata('ses_id_user');
            $record2['deletetime'] = $this->datetimeserver;
            $record2['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->table_detail, $record);
        } else {
            $this->delete($id);
        }
    }

     public function check_data($prefix_id, $code) {
        $this->db->where("$this->prefix_id", $prefix_id);
        $this->db->where("code_schedule", $code);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }

    function GridData_schedule($schedule_id) {
        $query = "  SELECT a.*
                    FROM $this->table_duser a WHERE schedule_id = '$schedule_id' ";
        return $this->db->query($query);
    }
    function Getdate_schedule($schedule_id) {
        $this->db->select(' a.*,b.namaKaryawan,');
        $this->db->from($this->table_detail. ' a ');
        $this->db->join($this->table_duser. ' b ', 'a.schedule_id = b.schedule_id');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.schedule_id', $schedule_id);
        $this->db->group_by ('a.schedule_date');
        return $this->db->get()->result_array();
    }

    function get_enddate() {
        $checkfiield = $this->session->userdata('ses_department_name');
        $this->db->select(' a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->like('a.code_schedule', $checkfiield);
        $this->db->order_by('a.end_date','DESC');
        $this->db->Limit(1);
        return $this->db->get()->row();
    }


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
<?php

class Meet_progress_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->table = 'apps_05_progress';
         $this->prefix_id = "progress_id";
         $this->table_user = 'lessential_accessapps.useraccess';
         $this->prefix_id = "progress_id";
        $this->tbl_progress = 'apps_05_progress_detail';
         $this->prefix_idprogress = "progressdetail_id";

    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('id_department','asc');
        return $this->db->get($this->table)->result_array();
    }

    function getby_id_array($id) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("a.statusdata", "active");
        }
        $this->db->select(' a.*,b.lokasi_gambar ');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_user . ' b ', 'a.progress_createby = b.username');
        $this->db->where('a.progress_id', $id);
        
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    //  function getby_id_progress($id) {
    //     $checkfiield = $this->checkfield("statusdata");
    //     if ($checkfiield > 0) {
    //         $this->db->where("a.statusdata", "active");
    //     }
    //     $this->db->select(' a.*,b.*,c.lokasi_gambar ');
    //     $this->db->from($this->tbl_progress . ' a ');
    //     $this->db->join($this->table . ' b ', 'a.progress_id = b.progress_id');
    //     $this->db->join($this->table_user . ' c ', 'b.progress_createby = c.username');
    //     $this->db->where('a.progress_id', $id);
        
    //     $result = $this->db->get($this->table);
    //     if ($result->num_rows() > 0) {
    //         $data = $result->result_array();
    //         return $data[0];
    //     } else {
    //         return null;
    //     }
    // }

    // public function getby_id_progress($id) {
    //     $this->db->select(' a.*,b.*,c.lokasi_gambar ');
    //     $this->db->from($this->table . ' a ');
    //     $this->db->join($this->tbl_progress . ' b ', 'a.progress_id = b.progress_id','inner');
    //     $this->db->join($this->table_user . ' c ', 'a.progress_createby = c.username','inner');
    //     $this->db->order_by('b.progressdetail_id','DESC');
    //     $this->db->where('a.statusdata','active');
    //     $this->db->where('a.progress_id',$id);
    //     // return $this->db->get($this->table)->result_array();
    //     return $this->db->get($this->table)->result_array();
    // }

    public function getby_id_progress ($id) {
        
      $query = " SELECT a.*,b.*,c.lokasi_gambar                        
                 FROM $this->table a   
                 LEFT JOIN $this->tbl_progress b on a.progress_id = b.progress_id 
                 LEFT JOIN $this->table_user c on b.progressdetail_createby = c.username 
                 WHERE 
                 a.statusdata='active' AND
                 a.progress_id=$id  ORDER BY b.progressdetail_id DESC ";
        return $this->db->query($query)->result_array();
    }

     function insertprogressdetail($record) {

        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_progress, $record);
    }

}

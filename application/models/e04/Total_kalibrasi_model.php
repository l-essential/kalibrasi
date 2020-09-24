<?php

class Total_kalibrasi_model extends MY_Model {

     public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('pu', true);

        $this->table = 'e04_ts_calibration';
        $this->prefix_id = "calibration_id";
            $this->table_dept = 'e01_ts_depart_terkait';
            $this->prefix_iddeppt = "id_approve";
                $this->tbl_frmapp = "e01_ts_formulirapprove";
                $this->prefix_frmapp = 'id_formulirapprove';
    }
    
    public function total_internal() {
        $this->db->select("*");
                $div = $this->session->userdata('ses_KodeSeksi');
                $this->db->where('statusdata','active ');
                $this->db->where('calibration_type','Internal ');
                $this->db->where('calibration_code like \'%' . $div . '%\'');
      $data = $this->db->get($this->table);
      return $data->num_rows();
    }

    public function total_external() {
        $this->db->select("*");
                $div = $this->session->userdata('ses_KodeSeksi');
                $this->db->where('statusdata','active ');
                $this->db->where('calibration_type','Eksternal');
                $this->db->where('calibration_code like \'%' . $div . '%\'');
      $data = $this->db->get($this->table);
      return $data->num_rows();
    }

    //   public function totallapor() {
    //     $sql = " SELECT count(a.KodeSeksi) as total 
    //               FROM e01_ts_depart_terkait a ";

    //          $checkfiield = $this->session->userdata('ses_KodeSeksi');
    //             if ($checkfiield != 'CFO' && $checkfiield != 'CEO' ){
    //                     $query .= " WHERE a.KodeSeksi = '$checkfiield' AND a.statusdata='active'";
    //             }

    //     $result = $this->db->query($sql);
    //     $return = $this->returndata($result, 'row');
    //     if ($return) {
    //         return $return->total;
    //     } else {
    //         return 0;
    //     }
    // }

    // public function notifapprove() {
    //     $sql = " SELECT count(a.status_approve) as total 
    //               FROM e01_ts_depart_terkait a
    //               ";
    //      $checkfiield = $this->session->userdata('ses_KodeSeksi');
    //      if ($checkfiield){
    //           $query .= " WHERE a.status_approve = 0 AND a.KodeSeksi LIKE '%$checkfiield%' AND a.statusdata='active'";
    //     }

    //     $result = $this->db->query($sql);
    //     $return = $this->returndata($result, 'row');
    //     if ($return) {
    //         return $return->total;
    //     } else {
    //         return 0;
    //     }
    // }

     function notifapprove() {
      $div = $this->session->userdata('ses_KodeSeksi');
       $this->db->select("*");
              $div = $this->session->userdata('ses_KodeSeksi');
              $this->db->where('KodeSeksi like \'%' . $div . '%\'');
               $this->db->where('status_approve = 0 ');
      $data = $this->db->get('e01_ts_depart_terkait');
      return $data->num_rows();
    }

    public function totalevaluasi() {
        $sql = " SELECT count(a.improvement_code) as total 
                  FROM e01_ts_formulir a
                  INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                  WHERE
                  a.statusdata='active' AND
                  b.status_formulir ='1'
            ";
        $result = $this->db->query($sql);
        $return = $this->returndata($result, 'row');
        if ($return) {
            return $return->total;
        } else {
            return 0;
        }
    }
   
    public function totalanalisis() {
        $sql = " SELECT count(a.improvement_code) as total 
                  FROM e01_ts_formulir a
                  INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                  WHERE
                  a.statusdata='active' AND
                  b.status_formulir ='1'
            ";
        $result = $this->db->query($sql);
        $return = $this->returndata($result, 'row');
        if ($return) {
            return $return->total;
        } else {
            return 0;
        }
    }
}

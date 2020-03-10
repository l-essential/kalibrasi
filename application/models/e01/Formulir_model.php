<?php

class Formulir_model extends MY_Model
{

    public $tbl_bunga;
    public $prefix_bunga;
    public $tbl_evaluasiTindakan;
    public $prefix_evaluasi_tindakan;

    function __construct()
    {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
        // --- formulir ---
        $this->prefix_id = "id_formulir";
        $this->table = "e01_ts_formulir";
        // --- cabang ---
            $this->table_detail = 'e01_ts_capa';
            $this->prefix_id_detail = 'id_bankcabang';
                // --- bunga ---
                $this->tbl_bunga = 'bankbunga';
                $this->prefix_bunga = 'id_bankbunga';
                    // --- evaluasi tindakan ---
                    $this->tbl_evaluasiTindakan = 'e01_ts_evaluasi_tindakan';
                    $this->prefix_evaluasi_tindakan = 'id_evaluasi_tindakan';
                        // --- katagori ---
                        $this->tbl_k = 'e01_ms_katagori';
                        $this->prefix_katagori = 'id_katagori';
                            // --- jenis ---
                            $this->tbl_j = 'e01_ms_jenis_penyimpangan';
                            $this->prefix_jenis = 'id_jenis';
                                // --- ruang ---
                                $this->tbl_r = 'e01_ms_ruanglingkup';
                                $this->prefix_ruang = 'id_ruanglingkup';
                            // --- tipe ---
                            $this->tbl_t = 'e01_ms_tipe';
                            $this->prefix_tipe = 'id_tipe';
                        // --- resiko ---
                        $this->tbl_rs = 'e01_ms_resiko'; 
                        $this->prefix_resiko = 'id_resiko';
                    // --- logno ---
                    $this->tbl_depart_terkait = "e01_ts_depart_terkait";
                    $this->prefix_approve = 'id_approve';
                // --- logno ---
                $this->tbl_depart = "_department";
                $this->prefix_dept = 'id_department';
            // --- logno ---
            $this->tbl_frmapp = "e01_ts_formulirapprove";
            $this->prefix_frmapp = 'id_formulirapprove';
            // --- rootcauseanalisis ---
            $this->tbl_rca = 'e01_ts_rootcauseanalysis';
            $this->prefix_rca = 'id_rootcause';
             // --- logno ---
        $this->user = "lessential_accessapps.useraccess";
        $this->prefix_iduser = 'id_user';
         // --- logno ---
        $this->logno = "_logno";
        $this->prefix_logno = 'id';
    }

    public function getGridData() {
        $query = "SELECT  a.*, 
                          b.status_formulir
                  FROM $this->table a
                  INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id";
        //cek improvement_code by user session
        $checkfiield = $this->session->userdata('ses_department_name');
         if ($checkfiield != 'QA' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
              $query .= " WHERE a.improvement_code LIKE '%$checkfiield%' AND a.statusdata='active' ORDER BY tanggal DESC";
        }

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public function GridData_detailDepartmentApprove($id_formulir){
        $query = "
                 SELECT 
                    a.*, b.title_improvement
                 FROM $this->tbl_depart_terkait a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                                    
                 WHERE 
                 a.$this->prefix_id='$id_formulir'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function GridData_detailRCA($id_formulir){
        $query = "
                 SELECT 
                    a.*
                 FROM $this->tbl_rca a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                                    
                 WHERE 
                 a.$this->prefix_id='$id_formulir'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getAll() {
        $this->db->order_by('improvement_code','asc');
        return parent::getAll();
    }

    function getbyid_preview($id) {
        $this->db->select(' a.*,k.nama_katagori, j.nama_jenis, r.nama_ruanglingkup, t.nama_tipe, rs.nama_resiko,
                           ne.evaluasi_tindakan, ne.L, ne.S, ne.D, ne.RPN');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_k . ' k ', 'a.id_katagori = k.id_katagori', 'left');
        $this->db->join($this->tbl_j . ' j ', 'a.id_jenis = j.id_jenis', 'left');
        $this->db->join($this->tbl_r . ' r ', 'a.id_ruanglingkup = r.id_ruanglingkup', 'left');
        $this->db->join($this->tbl_t . ' t ', 'a.id_tipe = t.id_tipe', 'left');
        $this->db->join($this->tbl_rs . ' rs ', 'a.id_resiko = rs.id_resiko', 'left');
        $this->db->join($this->tbl_evaluasiTindakan . ' ne ', 'a.id_formulir = ne.id_formulir', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('j.statusdata', 'active');
        $this->db->where('r.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function getby_evaluasi($id) {
        $this->db->select(' a.*,k.nama_katagori, j.nama_jenis, r.nama_ruanglingkup, t.nama_tipe');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_k . ' k ', 'a.id_katagori = k.id_katagori', 'left');
        $this->db->join($this->tbl_j . ' j ', 'a.id_jenis = j.id_jenis', 'left');
        $this->db->join($this->tbl_r . ' r ', 'a.id_ruanglingkup = r.id_ruanglingkup', 'left');
        $this->db->join($this->tbl_t . ' t ', 'a.id_tipe = t.id_tipe', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('j.statusdata', 'active');
        $this->db->where('r.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function insertdata($record) {
        $param = $this->input->post();
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
            $record['department_name'] =  json_encode(implode(",", $param['department_name']));
        }
        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id($this->table);
        return $insert_id;
    }

     function getby_urut($getruang,$h_th,$h_bln)
    {
        $query = " SELECT lastno from _logno where program='$getruang' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query);
    }
    function checkdataurut($getruang,$h_th,$h_bln){
        $query = "SELECT lastno from _logno where program='$getruang' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query)->num_rows(); 
    }

    function insertlogno($record1) {
        $this->db->insert($this->logno, $record1);
    }

    function updatelogno($h_kt,$h_th,$h_bln,$no){
        $query = " UPDATE _logno set lastno='$no' where program='$h_kt' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query);
    }
    
     function get_department() {
      	$this->db->select('a.*, b.department_name, c.department_name');
        $this->db->from('e01_ts_formulir a');
        $this->db->join($this->tbl_depart_terkait. ' b ', 'a.improvement_code = b.improvement_code', 'left');
		$this->db->join($this->tbl_depart. ' c', 'b.department_name = c.department_name', 'left');
        $this->db->where('a.statusdata', 'active');
        return $this->db->get()->row();
    }

    function insert_approve($record2) {
      
        $this->db->insert_batch($this->tbl_depart_terkait, $record2);
        
    }
    
    function insert_formulirapprove($record3) {
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record3['createby'] = $this->session->userdata('ses_id_user');
            $record3['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->tbl_frmapp, $record3);
    }
    function update_formulirapprove($id, $record2) {
        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
        }
        $this->db->where($this->prefix_id, $id);
        return $this->db->update($this->tbl_frmapp, $record2);
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('improvement_code');
        $this->db->where('year(tanggal)', $tahun);
        $this->db->like('improvement_code', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->improvement_code)) {
                $tmp = explode("/", $row->improvement_code);
                return intval($tmp[1]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    public function getby_idforsendmail($code, $emial){
        $this->db->select(' a.*, b*, c.email, c.department_name');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_depart_terkait . ' b ', 'a.id_formulir = b.id_formulir');
        $this->db->join($this->user . ' c ', 'b.department_name = c.department_name');
        $this->db->where('a.improvement_code',$code);
        $this->db->where('c.email',$emial);
    return $this->db->get()->row();
    }

     public function getIdInDept($id_formulir)
    {
        $this->db->where("$this->prefix_id", $id_formulir);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_depart_terkait);
        return $this->returndata($result, 'row');
    }

   

    
}

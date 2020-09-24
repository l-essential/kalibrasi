<?php

class Department_saya_model extends MY_Model
{

   
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
         // --- rootcauseanalisis ---
        $this->tbl_final = 'e01_ts_finalconclusion';
        $this->prefix_final = 'finalconclusion_id';
        // --- rootcauseanalisis ---
        $this->user = "lessential_accessapps.useraccess";
        $this->prefix_iduser = 'id_user';
         // --- logno ---
        $this->logno = "_logno";
        $this->prefix_logno = 'id';
    }

    public function getGridData() {
        $checkfiield = $this->session->userdata('ses_department_name');
        if ($checkfiield != 'QA' && $checkfiield != 'CFO' && $checkfiield != 'CEO' && $checkfiield != 'IT' ){
              $query = "SELECT  a.*, 
                                b.status_formulir
                        FROM $this->table a
                        INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                        WHERE a.improvement_code LIKE '%$checkfiield%' AND  a.statusdata='active'
                        ";

                        $result = $this->db->query($query);
                        if ($result->num_rows() > 0) {
                            return $result;
                        } else {
                            return null;
                        }
        } else {
              $query = "SELECT  a.*, 
                                b.status_formulir
                        FROM $this->table a
                        INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                        WHERE a.statusdata='active'
                        ";
                        $result = $this->db->query($query);
                        if ($result->num_rows() > 0) {
                            return $result;
                        } else {
                            return null;
                        }
        }
    }
    // public function getGridData() {
    //      if ($this->session->userdata('ses_department_name') == 'admin') {
    //         $query = "
    //              SELECT a.*,
    //              a.improvement_code,
    //              a.title_improvement,
    //              k.nama_katagori,
    //              j.nama_jenis,
    //              r.nama_ruanglingkup,
    //              t.nama_tipe,
    //              b.status_formulir,                   
    //              dp.status_approve                  
    //              FROM $this->table a   
    //              INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
    //              INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
    //              INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
    //              INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
    //              INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
    //              INNER JOIN $this->tbl_depart_terkait dp on a.$this->prefix_id = dp.$this->prefix_id
    //              WHERE
    //                 a.statusdata='active' AND
    //                 b.status_formulir = '1'
    //              ";
    //                 $result = $this->db->query($query);
    //                 if ($result->num_rows() > 0) {
    //                     return $result;
    //                 } else {
    //                     return null;
    //                 }
    //     } else {
    //          $query = "
    //              SELECT a.*,
    //              a.improvement_code,
    //              a.title_improvement,
    //              k.nama_katagori,
    //              j.nama_jenis,
    //              r.nama_ruanglingkup,
    //              t.nama_tipe,
    //              b.status_formulir,                   
    //              dp.status_approve                     
    //              FROM $this->table a   
    //              INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
    //              INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
    //              INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
    //              INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
    //              INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
    //              INNER JOIN $this->tbl_depart_terkait dp on a.$this->prefix_id = dp.$this->prefix_id
                 
    //              ";

    //               $checkfiield = $this->session->userdata('ses_department_name');
    //                 if ($checkfiield != 'admin' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
    //                     $query .= " WHERE dp.department_name = '$checkfiield' AND a.statusdata='active' AND b.status_formulir = '1'";
    //                 }
    //                     $result = $this->db->query($query);
    //                     if ($result->num_rows() > 0) {
    //                         return $result;
    //                     } else {
    //                         return null;
    //                     }

    //     }
    // }

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
        $this->db->select(' a.*,
                            user.namaKaryawan, 
                            a.createtime as time, 
                            k.nama_katagori, 
                            j.nama_jenis, 
                            r.nama_ruanglingkup, 
                            t.nama_tipe, 
                            rs.nama_resiko,
                           ne.evaluasi_tindakan, 
                           ne.L, 
                           ne.S, 
                           ne.D, 
                           ne.RPN,
                           fr.createtime as time_a,
                           fr.nama_gambar,
                           uc.namaKaryawan as approveby');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_k . ' k ', 'a.id_katagori = k.id_katagori', 'left');
        $this->db->join($this->tbl_j . ' j ', 'a.id_jenis = j.id_jenis', 'left');
        $this->db->join($this->tbl_r . ' r ', 'a.id_ruanglingkup = r.id_ruanglingkup', 'left');
        $this->db->join($this->tbl_t . ' t ', 'a.id_tipe = t.id_tipe', 'left');
        $this->db->join($this->tbl_rs . ' rs ', 'a.id_resiko = rs.id_resiko', 'left');
        $this->db->join($this->tbl_evaluasiTindakan . ' ne ', 'a.id_formulir = ne.id_formulir', 'left');
        $this->db->join($this->tbl_frmapp . ' fr ', 'a.id_formulir = fr.id_formulir', 'left');
        $this->db->join('lessential_accessapps.useraccess' . ' user ', 'a.createby = user.id_user', 'left');
        $this->db->join('lessential_accessapps.useraccess' . ' uc ', 'fr.createby = uc.id_user', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('j.statusdata', 'active');
        $this->db->where('r.statusdata', 'active');
        $this->db->where('k.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function getby_dept($id) {
        $this->db->select('a.*');
        $this->db->from($this->tbl_depart_terkait . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->result_array();
    }

    // function getby_evaluasi($id) {
    //     $this->db->select(' a.*,k.nama_katagori, j.nama_jenis, r.nama_ruanglingkup, t.nama_tipe');
    //     $this->db->from($this->table . ' a ');
    //     $this->db->join($this->tbl_k . ' k ', 'a.id_katagori = k.id_katagori', 'left');
    //     $this->db->join($this->tbl_j . ' j ', 'a.id_jenis = j.id_jenis', 'left');
    //     $this->db->join($this->tbl_r . ' r ', 'a.id_ruanglingkup = r.id_ruanglingkup', 'left');
    //     $this->db->join($this->tbl_t . ' t ', 'a.id_tipe = t.id_tipe', 'left');
    //     $this->db->where('a.statusdata', 'active');
    //     $this->db->where('k.statusdata', 'active');
    //     $this->db->where('j.statusdata', 'active');
    //     $this->db->where('r.statusdata', 'active');
    //     $this->db->where('k.statusdata', 'active');
    //     $this->db->where('a.id_formulir', $id);
    //     return $this->db->get()->row();
    // }
    
    // function getby_dept($id) {
    //     $this->db->select('a.*');
    //     $this->db->from($this->tbl_depart_terkait . ' a ');
    //     $this->db->where('a.statusdata', 'active');
    //     $this->db->where('a.id_formulir', $id);
    //     return $this->db->get()->result_array();
    // }

   

    function get_byidpreview($id) {
        $this->db->select('a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    public function getby_id_evaluasi($id) {
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_evaluasiTindakan);
        return $this->returndata($result, 'row');
    }

    function getbyid_rca($id) {
        $this->db->select('a.*');
        $this->db->from($this->tbl_rca . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->result_array();
    }

    function getbyid($id) {
        $this->db->select('a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }


    function checkData_evaluasi($id) {
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get($this->tbl_evaluasiTindakan)->num_rows();
        return $result;
    }

    function checkData_approve($id, $code) {
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("improvement_code", $code);
        $result = $this->db->get($this->tbl_frmapp)->num_rows();
        return $result;
    }

    function checkData_analisis($id) {
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get($this->tbl_rca)->num_rows();
        return $result;
    }

    function create_analisis($record) {
        return $this->db->insert($this->tbl_rca, $record);
    }

    function update_analisis($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("department_name", $dept);
        return $this->db->update($this->tbl_rca, $record);
    }

    function update_approve_qa($id,$dept, $record_1) {
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("department_name", $dept);
        return $this->db->update($this->tbl_depart_terkait, $record_1);
    }


    function create_evaluasi($record) {
        return $this->db->insert($this->tbl_evaluasiTindakan, $record);
    }

    function create_department($record) {
        return $this->db->insert($this->tbl_depart_terkait, $record);
    }

    function update_evaluasi($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->tbl_evaluasiTindakan, $record);
    }

    function update_approve($id,$code, $record) {
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("improvement_code", $code);
        return $this->db->update($this->tbl_frmapp, $record);
    }

    function update_status($id, $record_status) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->table, $record_status);
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
//--------------------------------------- ROW INSERT DATA -------------------------------------------------------------
    // --- INSERT DATA FORMULIR (FORMULIR)---
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

    // --- INSERT DATA APPROEVE FORMULIR (PERSETUJUAN MANAGER PELAPOR)---
    function insert_formulirapprove($record3) {
        $this->db->insert($this->tbl_frmapp, $record3);
    }

    // --- INSERT DATA APPROEVE BY DEPARTMENT (PERSETUJUAN DEPARTMENT TERKAIT)---
    function insert_approve($record2) {
        $this->db->insert_batch($this->tbl_depart_terkait, $record2);
        
    }

    // --- INSERT DATA FINAL CONCLUSION (KESIMPULAN AKHIR) ---
    function insert_finalconclusion($record4) {
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record4['createby'] = $this->session->userdata('ses_id_user');
            $record4['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->tbl_final, $record4);
    }

    // --- INSERT DATA ROOT CAOUSE ANALYSIS ---
    function insert_RootCauseAnalysis($record5) {
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record5['createby'] = $this->session->userdata('ses_id_user');
            $record5['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->tbl_rca, $record5);
    }

// ---------------------------- ROW UPDATE DATA --------------------------------------------------------------
    function getby_id_array($id) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("a.statusdata", "active");
        }
        $this->db->select(' a.*, b.*');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_depart_terkait . ' b ', 'a.id_formulir = b.id_formulir');
        $this->db->where('a.id_formulir', $id);
        
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function get_product_by_package($package_id){
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('detail', 'detail_product_id=product_id');
		$this->db->join('package', 'package_id=detail_package_id');
		$this->db->where('package_id',$package_id);
		$query = $this->db->get();
		return $query;
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

    function update_approvebydeparment($id, $record3) {
        $this->db->delete($this->tbl_depart_terkait, array('id_formulir' => $id));

        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record3['updateby'] = $this->session->userdata('ses_id_user');
            $record3['updatetime'] = $this->datetimeserver;
        }
       
        // $this->db->where($this->prefix_id, $id);
        return $this->db->insert_batch($this->tbl_depart_terkait, $record3);
    }

    function updatedata_finalconclusion($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_final, $id);
        return $this->db->update($this->tbl_final, $record);
    }

// ---------------------------- ROW DELETE DATA --------------------------------------------------------------
    
    // --- DELETE DATA BY DEPARTMENT (PERSETUJUAN DEPARTMENT TERKAIT) ---
    function deletedata_bydepartment($id, $record = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->tbl_depart_terkait, $record);
        } else {
            $this->delete($id);
        }
    }

    // --- DELETE DATA APPROEVE FORMULIR (PERSETUJUAN MANAGER PELAPOR)---
    function deletedata_approvebydepartment($id, $record = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->tbl_frmapp, $record);
        } else {
            $this->delete($id);
        }
    }

    // --- DELETE DATA FINAL CONCLUSION (KESIMPULAN AKHIR) ---
    function deletedata_finalconclusion($id, $record = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->tbl_final, $record);
        } else {
            $this->delete($id);
        }
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

    // SELECT  a.*,d.email
	// FROM e01_ts_formulir AS a
	// LEFT JOIN e01_ts_depart_terkait AS c ON a.id_formulir = c.id_formulir
	// LEFT JOIN lessential_accessapps.useraccess AS d ON c.department_name = d.department_name
	// WHERE a.improvement_code = 'DevNB/K/IT/2020/03/06'
    public function getby_idforsendmail($code) {
        $this->db->select(' a.*, c.email');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_depart_terkait . ' b ', 'a.id_formulir = b.id_formulir');
        $this->db->join($this->user . ' c ', 'b.department_name = c.department_name');
        $this->db->where('a.improvement_code',$code);
        $result = $this->db->get();
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return null;
        }
    }

    public function getIdInDept($id_formulir) {
        $this->db->where("$this->prefix_id", $id_formulir);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_depart_terkait);
        return $this->returndata($result, 'row');
    }

    function getby_id_arrayforview($id) {
      
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
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

     public function getby_id_final($id)
    {
        $this->db->where("$this->prefix_final", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_final);
        return $this->returndata($result, 'row');
    }


    function getall_dept($id) {
        $this->db->select('*');
        $this->db->from($this->tbl_depart_terkait );
        $this->db->where('statusdata', 'active');
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get();
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return null;
        }
    }

    // SELECT  a.*, b.status_formulir,d.email
	// FROM e01_ts_formulir AS a
	// LEFT JOIN e01_ts_formulirapprove AS b ON a.id_formulir = b.id_formulir
	// LEFT JOIN e01_ts_depart_terkait AS c ON a.id_formulir = c.id_formulir
	// LEFT JOIN lessential_accessapps.useraccess AS d ON c.department_name = d.department_name
    // WHERE a.improvement_code = 'DevNB/K/IT/2020/03/06'
    
   
}

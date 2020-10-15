<?php

class Approve_model extends MY_Model
{

    public $tbl_rca;
    public $prefix_rca;
    public $tbl_evaluasiTindakan;
    public $prefix_evaluasi_tindakan;
    private $wh = "improvement_code";

    function __construct()
    {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
        $this->user = 'dbaccessapps.useraccess';

        // --- formulir ---
        $this->table = 'e01_ts_formulir';
        $this->prefix_id = 'id_formulir';
        $this->prefix_idcode = 'improvement_code';
            // --- rootcauseanalisis ---
            $this->tbl_rca = 'e01_ts_rootcauseanalysis';
            $this->prefix_rca = 'id_rootcause';
                // --- analisis ---
                $this->tbl_evaluasiTindakan = 'e01_ts_evaluasi_tindakan';
                $this->prefix_evaluasi_tindakan = 'id_evaluasi_tindakan';
                    // --- bankcabang ---
                    $this->table_detail = 'e01_ts_capa';
                    $this->prefix_id_detail = 'id_bankcabang';
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
            //-- depart terkait
            $this->depterkait = 'e01_ts_depart_terkait';
            $this->prefix_depterkait = 'id_approve';
             // --- logno ---
            $this->tbl_frmapp = "e01_ts_formulirapprove";
            $this->prefix_frmapp = 'id_formulirapprove';
        // --- logno ---
        $this->logno = "_logno";
        $this->prefix_logno = 'id';

        $this->tbl_depart_terkait = "e01_ts_depart_terkait";
        $this->prefix_approve = 'id_approve';
        
    }

        public function getGridData() {
         if ($this->session->userdata('ses_department_name') == 'user') {
            $query = "
                 SELECT a.*,
                 a.improvement_code,
                 a.title_improvement,
                 k.nama_katagori,
                 j.nama_jenis,
                 r.nama_ruanglingkup,
                 t.nama_tipe,
                 b.status_formulir,                   
                 dp.status_approve                  
                 FROM $this->table a   
                 INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                 INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
                 INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
                 INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
                 INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
                 INNER JOIN $this->depterkait dp on a.$this->prefix_id = dp.$this->prefix_id
                 WHERE
                    a.statusdata='active' AND
                    b.status_formulir = '1'
                 ";
                    $result = $this->db->query($query);
                    if ($result->num_rows() > 0) {
                        return $result;
                    } else {
                        return null;
                    }
        } else {
             $query = "
                 SELECT a.*,
                 a.improvement_code,
                 a.title_improvement,
                 k.nama_katagori,
                 j.nama_jenis,
                 r.nama_ruanglingkup,
                 t.nama_tipe,
                 b.status_formulir,                   
                 dp.status_approve                     
                 FROM $this->table a   
                 INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                 INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
                 INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
                 INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
                 INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
                 INNER JOIN $this->depterkait dp on a.$this->prefix_id = dp.$this->prefix_id
                 
                 ";

                  $checkfiield = $this->session->userdata('ses_department_name');
                    if ($checkfiield != 'user' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE dp.department_name = '$checkfiield' AND a.statusdata='active' AND b.status_formulir = '1'";
                    }
                        $result = $this->db->query($query);
                        if ($result->num_rows() > 0) {
                            return $result;
                        } else {
                            return null;
                        }

        }
    }


     function GridDataRCA($idheader){
        $query = "
                 SELECT 
                    a.*,
                    b.title_improvement
                    
                 FROM $this->tbl_rca a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                                    
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

     function GridDataApprove($idheader) {
          $checkfiield = $this->session->userdata('ses_department_name');
         if ($checkfiield != 'admin' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
        $query = "  SELECT a.*
                FROM $this->depterkait a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                        a.$this->prefix_id='$idheader'
                    AND a.statusdata='active'
                    AND a.department_name = '$checkfiield'
                 ";
        return $this->db->query($query);
         }
    }

    //  public function GridDataApprove($idheader) {
    //     $query = "  SELECT a.*
    //             FROM $this->depterkait a
    //             INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
    //             WHERE ";
    //     //cek improvement_code by user session
    //     $checkfiield = $this->session->userdata('ses_department_name');
    //      if ($checkfiield != 'QA' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
    //           $query .= " WHERE a.department_name = '$checkfiield' AND a.statusdata='active' AND a.$this->prefix_id='$idheader' ";
    //     }

    //     $result = $this->db->query($query);
    //     if ($result->num_rows() > 0) {
    //         return $result;
    //     } else {
    //         return null;
    //     }
    // }


    function addedit_view($id_formulir) {
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
        $this->db->where('a.id_formulir', $id_formulir);
        return $this->db->get()->row();
    }

    function getbyid_halamandua($id) {
        $this->db->select(' a.*, b.personel, b.material, b.alat_mesin, b.metode, b.sarana');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_rca . ' b ', 'a.id_formulir = b.id_formulir', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('b.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    public function getAll() {
        $this->db->order_by('improvement_code','asc');
        return parent::getAll();
    }
     public function getAll_rca() {
        $this->db->where('statusdata','active');
        return $this->db->get($this->tbl_rca)->result_array();
    }

    public function getbynopn($nopn){
        $this->db->where('improvement_code',$nopn);
        $result = $this->db->get($this->table);
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return null;
        }
    }

     function getby_id_array($id) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
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
                            rca.*,
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
        $this->db->join($this->tbl_rca . ' rca ', 'a.id_formulir = rca.id_formulir', 'left');
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

    function getby_dept($id) {
        $this->db->select('a.*');
        $this->db->from($this->tbl_depart_terkait . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->result_array();
    }

    
    public function getby_id_rca($id_rootcause) {
        $this->db->where("$this->prefix_rca", $id_rootcause);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_rca);
        return $this->returndata($result, 'row');
    }

    public function getby_id_approve($id)
    {
        $this->db->where("$this->prefix_depterkait", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->depterkait);
        return $this->returndata($result, 'row');
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
        return $this->db->update($this->tbl_rca, $record);
    }

    function update_approve($id,$dept, $record_1) {
        $record_1['createtime'] = $this->datetimeserver;
        
        $this->db->where("$this->prefix_id", $id);
        $this->db->where("department_name", $dept);
        return $this->db->update($this->depterkait, $record_1);
    }

    //  public function getdatabankquota($id_formulir) {
    //     $this->db->where("$this->prefix_id", $id_formulir);
    //     $this->db->where("statusdata", 'active');
    //     $result = $this->db->get($this->depterkait);
    //     return $this->returndata($result, 'row');
    // }

    //   function getbyid_approve($id) {
    //      $checkfiield = $this->session->userdata('ses_department_name');
    //      if ($checkfiield != 'QA' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
    //         $this->db->select(' a.*');
    //         $this->db->from($this->table . ' a ');
    //         $this->db->join($this->depterkait . ' dept ', 'a.id_formulir = dept.id_formulir', 'left');
    //         $this->db->where('a.statusdata', 'active');
    //         $this->db->where('dept.department_name', $checkfiield);
    //         $this->db->where('a.id_formulir', $id);
    //         return $this->db->get()->row();
    //      }
    // }

//     function getbyid_approve($id)
//   {
//     if ($this->session->userdata('ses_department_name') == 'QA') {
//       $this->db->select('a.*');
//       $this->db->from($this->table . ' a ');
//       $this->db->where("$this->prefix_id", $id);
//       $query = $this->db->get()->result();
//       return $query;
//     } else {
//       $this->db->select('a.*');
//       $this->db->from($this->table . ' a ');
//       $this->db->join($this->depterkait . ' d ', 'a.id_formulir = d.id_formulir');
//       $this->db->where('a.id_formulir', $id);
//       $this->db->where('d.department_name', $this->session->userdata('ses_department_name'));
//       $query = $this->db->get()->result();
//       return $query;
//     }

//   }

    //  function getby_id_approve($id_approve) {
    //     $checkfiield = $this->checkfielddetail("statusdata");
    //     if ($checkfiield > 0) {
    //         $this->db->where("statusdata", "active");
    //     }
    //     $this->db->where($this->prefix_depterkait, $id_approve);
    //     $this->db->where('department_name', $this->session->userdata('ses_department_name'));
    //     $result = $this->db->get($this->depterkait);
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return null;
    //     }
    // }

    


    
    function insertrca($record) {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_rca, $record);
    }

    // function insertapprove($record2) {
    //     $record['createby'] = $this->session->userdata('ses_id_user');
    //     $record['createtime'] = date('Y-m-d H:i:s');
    //     return $this->db->insert($this->depterkait, $record2);
    // }

    // function insertapprove($id, $record) {
    //     $record['updateby'] = $this->session->userdata('ses_id_user');
    //     $record['updatetime'] = date('Y-m-d H:i:s');
    //     $this->db->where($this->prefix_depterkait, $id);
    //     return $this->db->update($this->depterkait, $record);
    // }

     function updaterca($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_rca, $id);
        return $this->db->update($this->tbl_rca, $record);
    }

    function updateapprove($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_depterkait, $id);
        return $this->db->update($this->depterkait, $record);
    }

     function deleterca($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_rca, $id);
        return $this->db->update($this->tbl_rca, $record);
    }
   

    // public function getbankquotafromperiode($daritanggal, $sampaitanggal)
    // {
    //     $sql = "
    //             SELECT
    //                 a.id_analisis,
    //                 a.id_formulir,
    //                 b.title_improvement,
    //                 b.improvement_code,
    //                 IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))) as tipesubsidi,
    //                 concat(IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))),' - ',b.title_improvement) as labelbank,
    //                 a.tipe,
    //                 a.tanggal_pko,
    //                 a.tahun,
    //                 a.quota,
    //                 a.keterangan
    //             FROM $this->tbl_evaluasiTindakan a
    //             INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
    //             WHERE
    //                 a.statusdata='active'
    //                 AND a.tanggal_pko >='$daritanggal' and a.tanggal_pko <='$sampaitanggal'
    //             ORDER BY   
    //                 b.title_improvement ASC,
    //                 a.tipe,a.tanggal_pko,a.tahun DESC
    //            ";
    //     $result = $this->db->query($sql);
    //     return $this->returndata($result, 'array');
    // }

    // public function getbankquota()
    // {
    //     $sql = "
    //             SELECT
    //                 a.id_analisis,
    //                 a.id_formulir,
    //                 b.title_improvement,
    //                 b.improvement_code,
    //                 IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))) as tipesubsidi,
    //                 concat(IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))),' - ',b.title_improvement) as labelbank,
    //                 a.tipe,
    //                 a.tanggal_pko,
    //                 a.tahun,
    //                 a.quota,
    //                 a.keterangan
    //             FROM $this->tbl_evaluasiTindakan a
    //             INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
    //             WHERE
    //                 a.statusdata='active'
    //             ORDER BY   
    //                 b.title_improvement ASC,
    //                 a.tipe,a.tanggal_pko,a.tahun DESC
    //            ";
    //     $result = $this->db->query($sql);
    //     return $this->returndata($result, 'array');
    // }

    // public function getbankkantorcabang()
    // {
    //     $sql = "
    //             SELECT
    //                 b.id_formulir,
    //                 b.title_improvement,
    //                 a.id_bankcabang,
    //                 a.kantor_cabank,
    //                 a.alamat,
    //                 concat(b.title_improvement,' - Cabang ',a.kantor_cabank) as bankcabang
    //             FROM $this->table_detail a
    //             INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
    //             WHERE
    //                 a.statusdata='active'
    //             ORDER BY   
    //                 b.title_improvement, a.kantor_cabank ASC
    //            ";
    //     $result = $this->db->query($sql);
    //     return $this->returndata($result, 'array');
    // }

    // function getGridDatadetail($idheader)
    // {
    //     $query = "
    //              SELECT 
    //                 a.*,
    //                 b.title_improvement
    //              FROM $this->table_detail a   
    //              LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
    //              WHERE 
    //              a.$this->prefix_id='$idheader'
    //              and a.statusdata='active'    
    //              ";
    //     return $this->db->query($query);
    // }

    // function GridDataQuota($idheader)
    // {
    //     $query = "
    //             SELECT
    //                 a.id_analisis,
    //                 a.id_formulir,
    //                 a.L,
    //                 a.S,
    //                 a.D,
    //                 a.RPN,
    //                 a.tipe,
    //                 a.tanggal_pko,
    //                 a.tahun,
    //                 a.quota,
    //                 a.keterangan
    //             FROM $this->tbl_evaluasiTindakan a
    //             INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
    //             WHERE
    //                     a.$this->prefix_id='$idheader'
    //                 AND a.statusdata='active'    
    //              ";
    //     return $this->db->query($query);
    // }

   

    // public function getby_id_bankquota($id)
    // {
    //     $this->db->where("$this->prefix_evaluasi_tindakan", $id);
    //     $this->db->where("statusdata", 'active');
    //     $result = $this->db->get($this->tbl_evaluasiTindakan);
    //     return $this->returndata($result, 'row');
    // }

    // public function getbungainbank($id_formulir, $periode)
    // {
    //     $this->db->where("$this->prefix_id", $id_formulir);
    //     $this->db->where("periode", $periode);
    //     $this->db->where("statusdata", 'active');
    //     $result = $this->db->get($this->tbl_rca);
    //     return $this->returndata($result, 'row');
    // }
    // public function getdatabankquota($id_formulir, $tipe, $tahun)
    // {
    //     $this->db->where("$this->prefix_id", $id_formulir);
    //     $this->db->where("tipe", $tipe);
    //     $this->db->where("tahun", $tahun);
    //     $this->db->where("statusdata", 'active');
    //     $result = $this->db->get($this->tbl_evaluasiTindakan);
    //     return $this->returndata($result, 'row');
    // }

    
    //  function deletebunga($id, $record = array())
    // {
    //     $record['deleteby'] = $this->session->userdata('ses_id_user');
    //     $record['deletetime'] = date('Y-m-d H:i:s');
    //     $record['statusdata'] = 'nonactive';

    //     $this->db->where($this->prefix_rca, $id);
    //     return $this->db->update($this->tbl_rca, $record);
    // }

    //  function insertbankquota($record)
    // {
    //     $record['createby'] = $this->session->userdata('ses_id_user');
    //     $record['createtime'] = date('Y-m-d H:i:s');
    //     return $this->db->insert($this->tbl_evaluasiTindakan, $record);
    // }

    // function updatebankquota($id, $record)
    // {
    //     $record['updateby'] = $this->session->userdata('ses_id_user');
    //     $record['updatetime'] = date('Y-m-d H:i:s');
    //     $this->db->where($this->prefix_evaluasi_tindakan, $id);
    //     return $this->db->update($this->tbl_evaluasiTindakan, $record);
    // }

    // function deletebankquota($id, $record = array())
    // {
    //     $record['deleteby'] = $this->session->userdata('ses_id_user');
    //     $record['deletetime'] = date('Y-m-d H:i:s');
    //     $record['statusdata'] = 'nonactive';

    //     $this->db->where($this->prefix_evaluasi_tindakan, $id);
    //     return $this->db->update($this->tbl_evaluasiTindakan, $record);
    // }
}

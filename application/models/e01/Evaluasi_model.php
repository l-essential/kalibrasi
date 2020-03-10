<?php

class Evaluasi_model extends MY_Model
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
        $this->table = 'e01_ts_formulir';
        $this->prefix_id = 'id_formulir';
        $this->table_detail = 'e01_ts_capa';
        $this->prefix_id_detail = 'id_bankcabang';
        // $this->tbl_bunga = 'bankbunga';
        // $this->prefix_bunga = 'id_bankbunga';

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
                            //-- depart terkait
                                $this->depterkait = 'e01_ts_depart_terkait';
                                $this->prefix_depterkait = 'improvement_code';
                                // --- logno ---
            $this->tbl_frmapp = "e01_ts_formulirapprove";
            $this->prefix_frmapp = 'id_formulirapprove';
                                // --- logno ---
                                    $this->logno = "_logno";
                                    $this->prefix_logno = 'id';
    }
    
    public function getAll() {
        $this->db->order_by('improvement_code','asc');
        return parent::getAll();
    }

     public function getGridData() {
        if ($this->session->userdata('ses_department_name') == 'QA') {
        $query = "
                 SELECT a.*,
                 a.improvement_code,
                 a.title_improvement,
                 b.status_formulir,
                 k.nama_katagori,
                 j.nama_jenis,
                 r.nama_ruanglingkup,
                 t.nama_tipe                        
                 FROM $this->table a
                 INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                 INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
                 INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
                 INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
                 INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
                 INNER JOIN $this->depterkait dp on a.$this->prefix_depterkait = dp.$this->prefix_depterkait
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
                 b.status_formulir,
                 k.nama_katagori,
                 j.nama_jenis,
                 r.nama_ruanglingkup,
                 t.nama_tipe                        
                 FROM $this->table a   
                 INNER JOIN $this->tbl_frmapp b on a.$this->prefix_id = b.$this->prefix_id
                 INNER JOIN $this->tbl_k k on a.$this->prefix_katagori = k.$this->prefix_katagori
                 INNER JOIN $this->tbl_j j on a.$this->prefix_jenis = j.$this->prefix_jenis
                 INNER JOIN $this->tbl_r r on a.$this->prefix_ruang = r.$this->prefix_ruang
                 INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe
                 INNER JOIN $this->depterkait dp on a.$this->prefix_depterkait = dp.$this->prefix_depterkait
                 ";
                  $checkfiield = $this->session->userdata('ses_department_name');
                    if ($checkfiield != 'QA' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE dp.department_name = '$checkfiield' AND a.statusdata='active'AND b.status_formulir = '1'  ORDER BY tanggal DESC";
                    }
                        $result = $this->db->query($query);
                        if ($result->num_rows() > 0) {
                            return $result;
                        } else {
                            return null;
                        }

        }
    }

    function GridDataEvaluasiTindakan($idheader) {
        $query = "
                SELECT
                    a.id_evaluasi_tindakan,
                    a.L,
                    a.S,
                    a.D,
                    a.RPN,
                    a.evaluasi_tindakan
                FROM $this->tbl_evaluasiTindakan a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                        a.$this->prefix_id='$idheader'
                    AND a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

     function getbyid_halamansatu($id) {
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

    function getGridDatadetail($idheader)
    {
        $query = "
                 SELECT 
                    a.*,
                    b.title_improvement
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function GridDatabunga($idheader)
    {
        $query = "
                 SELECT 
                    a.*,
                    b.title_improvement
                 FROM $this->tbl_bunga a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getby_id_bunga($id_bankbunga)
    {
        $this->db->where("$this->prefix_bunga", $id_bankbunga);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bunga);
        return $this->returndata($result, 'row');
    }

    public function getby_id_evaluasi($id)
    {
        $this->db->where("$this->prefix_evaluasi_tindakan", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_evaluasiTindakan);
        return $this->returndata($result, 'row');
    }

    public function getbungainbank($id_formulir, $periode)
    {
        $this->db->where("$this->prefix_id", $id_formulir);
        $this->db->where("periode", $periode);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bunga);
        return $this->returndata($result, 'row');
    }
    public function getdatabankquota($id_formulir)
    {
        $this->db->where("$this->prefix_id", $id_formulir);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_evaluasiTindakan);
        return $this->returndata($result, 'row');
    }

    function insertbunga($record)
    {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_bunga, $record);
    }

    function updatebunga($id, $record)
    {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_bunga, $id);
        return $this->db->update($this->tbl_bunga, $record);
    }

    function insertnilaievaluasi($record)
    {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_evaluasiTindakan, $record);
    }

    function updatenilaievaluasi($id, $record)
    {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_evaluasi_tindakan, $id);
        return $this->db->update($this->tbl_evaluasiTindakan, $record);
    }

    function deletenilaievaluasi($id, $record = array())
    {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_evaluasi_tindakan, $id);
        return $this->db->update($this->tbl_evaluasiTindakan, $record);
    }

    function deletebankquota($id, $record = array())
    {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_evaluasi_tindakan, $id);
        return $this->db->update($this->tbl_evaluasiTindakan, $record);
    }
}

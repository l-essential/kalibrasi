<?php

class Analisis_model extends MY_Model
{

    public $tbl_rca;
    public $prefix_rca;
    public $tbl_evaluasiTindakan;
    public $prefix_evaluasi_tindakan;

    function __construct()
    {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
         $this->user = 'dbaccessapps.useraccess';

    // --- formulir ---
        $this->table = 'e01_ts_formulir';
        $this->prefix_id = 'id_formulir';
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
     public function getAll_rca() {
        $this->db->where('statusdata','active');
        return $this->db->get($this->tbl_rca)->result_array();
    }


     public function getGridData() {
        $query = "SELECT  a.*, 
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
                  INNER JOIN $this->tbl_t t on a.$this->prefix_tipe = t.$this->prefix_tipe ";
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

   

     function GridData_rca($idheader){
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

     function getbyid_halamandua($id) {
        $this->db->select(' a.*, b.personel, b.material, b.alat_mesin, b.metode, b.sarana');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->tbl_rca . ' b ', 'a.id_formulir = b.id_formulir', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('b.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
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

  
    public function getby_id_rca($id_rootcause)
    {
        $this->db->where("$this->prefix_rca", $id_rootcause);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_rca);
        return $this->returndata($result, 'row');
    }



     function getby_id_detail_array($id) {
        $checkfiield = $this->checkfielddetail("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id_detail, $id);
        $result = $this->db->get($this->table_detail);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

     function insertdata_detail($record) {
          $param = $this->input->post();
       $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
            $record['correct_pic'] = json_encode(implode(',', $param['correct_pic']));
            $record['preventive_pic'] = json_encode(implode(',', $param['preventive_pic']));
        }
        $this->db->insert($this->table_detail, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function updatedata_detail($id, $record) {
         $param = $this->input->post();
        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
            $record['correct_pic'] = json_encode(implode(',', $param['correct_pic']));
            $record['preventive_pic'] = json_encode(implode(',', $param['preventive_pic']));
        }
        $this->db->where($this->prefix_id_detail, $id);
        return $this->db->update($this->table_detail, $record);
    }

    function insertrca($record)
    {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_rca, $record);
    }

     function updaterca($id, $record)
    {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_rca, $id);
        return $this->db->update($this->tbl_rca, $record);
    }

     function deleterca($id, $record = array())
    {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_rca, $id);
        return $this->db->update($this->tbl_rca, $record);
    }
     function deletebunga($id, $record = array())
    {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_rca, $id);
        return $this->db->update($this->tbl_rca, $record);
    }

     function insertbankquota($record)
    {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_evaluasiTindakan, $record);
    }

    function updatebankquota($id, $record)
    {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
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

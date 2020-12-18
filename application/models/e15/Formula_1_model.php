<?php

class Formula_1_model extends MY_Model {

   

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table            = 'e15_formula_1_h';
        $this->prefix_id        = 'formula_id_H';
        $this->table_detail     = 'e15_formula_1_d';
        $this->prefix_id_detail = 'formula_id_D';
        $this->table_prosedur   = 'e15_formula_2_prosedur';
        $this->prefix_id_prosedur = 'formula_prosedur_2';

            $this->table_formula_2     = 'e15_formula_2';
            $this->prefix_id_formula_2 = 'formula_id_2';
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
                $where ";


        return $this->db->query($query);
    }


    // Prosedur
    function GridDataprosedur($idheader)
    {
        $query = "
                 SELECT 
                    a.*,
                    b.*
                 FROM $this->table_prosedur a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function insertdata($record) {
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
            $record['tgl_dibuat'] = $this->datetimeserver;
        }

        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function insert_prosedur($record) {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->table_prosedur, $record);
    }

    public function getby_id_prosedur($prosedur)
    {
        $this->db->where("$this->prefix_id_prosedur", $prosedur);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table_prosedur);
        return $this->returndata($result, 'row');
    }


    // Formula 2
    function GridDataformula_2($idheader)
    {
        $query = "
                 SELECT 
                    a.*,
                    b.*
                 FROM $this->table_formula_2 a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function insert_formula2($record)
    {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->table_formula_2, $record);
    }

    public function getby_id_formula2($formula_2)
    {
        $this->db->where("$this->prefix_id_formula_2", $formula_2);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table_formula_2);
        return $this->returndata($result, 'row');
    }


    function getbyid_preview($id) {
        $this->db->select(' a.*,a.no_formula,a.formula_id_H, b.*');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_detail . ' b ', 'a.formula_id_H = b.formula_id_H', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.formula_id_H', $id);
        return $this->db->get()->row();

    }

    function Get_detail($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_detail. ' a ');
        $this->db->join($this->table. ' b ', 'a.formula_id_H = b.formula_id_H');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.formula_id_H', $id);
        return $this->db->get()->result_array();
    }

    function Get_prosedur($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_prosedur. ' a ');
        $this->db->join($this->table. ' b ', 'a.formula_id_H = b.formula_id_H');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.formula_id_H', $id);
        return $this->db->get()->result_array();
    }

    function get_formula2($id) {
        $this->db->select(' a.*, b.*');
        $this->db->from($this->table_formula_2 . ' a ');
        $this->db->join($this->table_detail . ' b ', 'a.formula_id_H = b.formula_id_H', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.formula_id_H', $id);
        return $this->db->get()->row();
    }

    function checkData_Table($id) {
        $this->db->where("formula_id_H", $id);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function insert_disetujui($id, $record) {
        $this->db->where("formula_id_H", $id);
        return $this->db->update($this->table, $record);
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('no_document');
        $this->db->where('year(tgl_berlaku)', $tahun);
        $this->db->like('no_document', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->no_document)) {
                $tmp = explode("/", $row->no_document);
                return intval($tmp[2]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

    public function insertdata_batch_komposisi($record) {
        $this->db->insert_batch($this->table_detail, $record);
    }

    public function insert_tmp($arraydata) {
        $this->db->insert_batch($this->table_detail, $arraydata);
    }

    public function insert_importprosedur($arraydata) {
        $this->db->insert_batch($this->table_prosedur, $arraydata);
    }

    function update_prosedur($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_id_prosedur, $id);
        return $this->db->update($this->table_prosedur, $record);
    }

    function delete_prosedur($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_id_prosedur, $id);
        return $this->db->update($this->table_prosedur, $record);
    }

    function update_formula2($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_id_formula_2, $id);
        return $this->db->update($this->table_formula_2, $record);
    }

    function delete_formula2($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_id_formula_2, $id);
        return $this->db->update($this->table_formula_2, $record);
    }

    public function gettmp_komposisi() {      
        $this->db->select('*');
        $this->db->group_by('nama_dagang,inci_name,fungsi,no_cas,konsentrasi');
        $this->db->order_by('nama_dagang,inci_name,fungsi,no_cas,konsentrasi');
        $result = $this->db->get($this->tmp_upload);            
        return $this->returndata($result,'array');       
    }

    public function getdata_by_nama_dagang($nama_dagang) {
        $this->db->where("statusdata", "active");
        $this->db->where("nama_dagang", $nama_dagang);       
        $this->db->select("
                        formula_id_D,
                        nama_dagang,
                        inci_name,
                        fungsi,
                        no_cas,
                        konsentrasi
                ");
        $this->db->from($this->table_detail . ' use index (GETformula_id_H) ');
        $result = $this->db->get();
        return $this->returndata($result, 'row');
    }

    public function truncate_tmp() {
        $this->db->truncate($this->tmp_upload);
    }
}

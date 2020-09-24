<?php

class Periode_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('kpi', true);
        $this->table            = 'periode';
        $this->prefix_id        = 'periode_id';
        $this->table_detail     = 'periode_detail';
        $this->prefix_id_detail = 'detail_id';
        $this->table_kpi     = 'kpi';
        $this->prefix_id_kpi = 'kpi_id';
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
                 ";
        return $this->db->query($query);
    }

    function getGridKpi($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.*,
                    (((a.jan + a.feb + a.mar + a.apr + a.mei + a.jun + a.jul + a.ags + a.sep + a.okt + a.nov + a.des)/a.pembagi)* a.bobot)/100 as value_kpi,
                    (a.jan + a.feb + a.mar + a.apr + a.mei + a.jun + a.jul + a.ags + a.sep + a.okt + a.nov + a.des)/a.pembagi as value_actual,
                    (((a.jan + a.feb + a.mar + a.apr + a.mei + a.jun + a.jul + a.ags + a.sep + a.okt + a.nov + a.des)/a.pembagi / a.target_kpi)* 100) as actualvstarget
                 FROM $this->table_kpi a   
                 LEFT JOIN $this->table_detail b on a.$this->prefix_id_detail = b.$this->prefix_id_detail                  
                 WHERE 
                 a.$this->prefix_id_detail='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function sum_kpivalue($idheader) {
        $this->db->select_sum('kpi_value');
        $this->db->where('statusdata', 'active');
        $this->db->where('detail_id', $idheader);
        $query = $this->db->get($this->table_kpi);
        if($query->num_rows()>0) {
            return $query->row()->kpi_value;
         } else {
            return 0;
         }
    }

    public function sum_bobot($idheader) {
        $this->db->select_sum('bobot');
        $this->db->where('statusdata', 'active');
        $this->db->where('detail_id', $idheader);
        $query = $this->db->get($this->table_kpi);
        if($query->num_rows()>0) {
            return $query->row()->bobot;
            } else {
            return 0;
            }
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

    function insertdata_record_1($record_1) {
         $this->db->insert_batch($this->table_detail, $record_1);
         
    }

    public function insert_tmp($arraydata) {
        $this->db->insert_batch($this->table_kpi, $arraydata);
    }
     // -- end insert data

     // -- update data
    function updatedata_recored_1($periode_id, $record_1) {
        $this->db->delete($this->table_detail, array('periode_id' => $periode_id));
        $this->db->where('periode_id', $periode_id);
        return $this->db->insert_batch($this->table_detail, $record_1);
    }

    function deletedata_detail($periode_id, $record = array()) {
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';

            $this->db->where($this->prefix_id, $periode_id);
            return $this->db->update($this->table_detail, $record);
        } else {
            $this->delete($prefix_id);
        }
    }

    function insertkpi($record) {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->table_kpi, $record);
    }

    function updatekpi($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_id_kpi, $id);
        return $this->db->update($this->table_kpi, $record);
    }

    public function check_data($periode_awal, $departement) {
        $this->db->where("periode_awal", $periode_awal);
        $this->db->where("departement", $departement);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }

    // public function getby_idkpi($id_header) {
    //     $this->db->where("detail_id", $id_header);
    //     $this->db->where("statusdata", 'active');
    //     $result = $this->db->get($this->table_kpi);
    //     return $this->returndata($result, 'row');
    // }

    function getby_idkpi($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_kpi . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where("a.$this->prefix_id_kpi", $id);
        return $this->db->get()->row();
    }

    function getby_idDetail_array($id) {
        $checkfiield = $this->checkfield("statusdata");
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


}

<?php 
class Formulir_two_model extends MY_Model {

       function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
             $this->table_akar="e01_ts_kesimpulan_akar";
             $this->prefix_id_akar = "kesimpulan_akar_id";
                $this->table_akhir="e01_ts_kesimpulan_akhir";
                $this->prefix_id_akhir = "kesimpulan_akhir_id";
                    $this->table_ditindak="e01_ts_ditindak_lanjuti";
                    $this->prefix_id_akar = "dilanjuti_id";
                        $this->table_corrective="e01_ts_capa_corrective";
                        $this->prefix_id_corrective = "corrective_id";
                    $this->table_preventive="e01_ts_capa_preventive";
                    $this->prefix_id_preventive = "id_preventive";
                $this->tbl_frmapp = "e01_ts_formulirapprove";
                $this->prefix_frmapp = 'id_formulirapprove';
    }
     // --- CHECK DATA VALUE---
    function checkData_akar($id) {
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get($this->table_akar)->num_rows();
        return $result;
    }

    function checkData_akhir($id) {
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get($this->table_akhir)->num_rows();
        return $result;
    }

    function checkData_dilanjuti($id) {
        $this->db->where("$this->prefix_id", $id);
        $result = $this->db->get($this->table_ditindak)->num_rows();
        return $result;
    }

    function checkData_corrective($id) {
        $this->db->where("$this->prefix_id_corrective", $id);
        $result = $this->db->get($this->table_corrective)->num_rows();
        return $result;
    }

    function checkData_preventive($id) {
        $this->db->where("$this->prefix_id_preventive", $id);
        $result = $this->db->get($this->table_preventive)->num_rows();
        return $result;
    }

     // --- INSERT DATA  ---
    function create_akar($record) {
        return $this->db->insert($this->table_akar, $record);
    }

    function create_akhir($record) {
        return $this->db->insert($this->table_akhir, $record);
    }

    function create_ditindak($record) {
        return $this->db->insert($this->table_ditindak, $record);
    }

     // --- UPDATE DATA ---
    function update_akar($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->table_akar, $record);
    }

    function update_akhir($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->table_akhir, $record);
    }

    function update_ditindak($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->table_ditindak, $record);
    }

    function update_corrective($id, $record) {
        $this->db->where("$this->prefix_id_corrective", $id);
        return $this->db->update($this->table_corrective, $record);
    }

    function update_preventive($id, $record) {
        $this->db->where("$this->prefix_id_preventive", $id);
        return $this->db->update($this->table_preventive, $record);
    }


    // ---- PREVIEW ----
    function getakar_byid($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_akar . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function getfrmapp_byid($id) {
        $this->db->select(' a.*');
        $this->db->from($this->tbl_frmapp . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function getakhir_byid($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_akhir . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function gettindakan_byid($id) {
        $this->db->select(' a.*');
        $this->db->from($this->table_ditindak . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->row();
    }

    function getcorrective_byid($id) {
        $this->db->select('a.*');
        $this->db->from($this->table_corrective . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->result_array();
    }

    function getpreventive_byid($id) {
        $this->db->select('a.*');
        $this->db->from($this->table_preventive . ' a ');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.id_formulir', $id);
        return $this->db->get()->result_array();
    }


}

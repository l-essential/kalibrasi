<?php
class Karyawan_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hris', true);
            $this->table='dbo.MS_Karyawan';
            $this->tbl_seksi='dbo.MS_Seksi';
            $this->prefix_id = "NIK";
            $this->prefix_seksi = "KodeSeksi";

    }

    public function getAll() {
        // $checkfiield = $this->session->userdata('ses_department_name');
        $this->db->select(' a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.tglPengunduranDiri IS NULL');
        return $this->db->get()->result_array();
    }

    function get_namakaryawan_bydept() {
        //  $checkfiield = $this->session->userdata('ses_KodeSeksi');
         $this->db->select(' a.namaKaryawan');
         $this->db->from($this->table . ' a ');
         $this->db->where('a.KodeSeksi','303');
         $this->db->where('a.tglPengunduranDiri IS NULL');
         return $this->db->get()->result_array();
    }

    // public function getAll() {
    //     $checkfiield = $this->session->userdata('ses_department_name');
    //     $query = " SELECT a.*, b.* FROM $this->table a 
    //                LEFT JOIN $this->tbl_seksi b on a.$this->prefix_seksi = b.$this->prefix_seksi
    //                WHERE b.singkatan = '$checkfiield' AND a.tglPengunduranDiri IS NULL ";
    //     return $this->db->get('dbo.MS_Karyawan')->result_array();
    // }


}

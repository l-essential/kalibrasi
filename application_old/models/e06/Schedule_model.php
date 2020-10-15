<?php
class Schedule_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hris', true);
        // $this->db2 = $this->load->database('pu', true);
        // $this->prefix_id = "schedule_id";
        $this->table = 'dbo.MS_Karyawan';
        $this->tbl_dept = 'dbo.MS_Seksi';
        $this->tbl_schedule = 'Tbl_Schedule';
        $this->prefix_id = "NIK";
        $this->prefix_dept = "KodeSeksi";
        // $this->db2 = 'lessential.e06_schedule';
    }

    function getGridData() {
        $query = "  SELECT 
                    a.*,
                    b.namaSeksi
                    FROM $this->table a 
                    LEFT JOIN $this->tbl_dept b on a.$this->prefix_dept = b.$this->prefix_dept ";

                    $checkfiield = $this->session->userdata('ses_KodeSeksi');
                    if ($checkfiield != 'ADMIN' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE b.KodeSeksi = '$checkfiield' AND a.tglPengunduranDiri IS NULL ";
                    }       
            return $this->db->query($query);
    }

      function getby_idnik($id) {
        $query = " SELECT 
                        a.*,
                        b.*
                        FROM $this->table a 
                        LEFT JOIN $this->tbl_dept b on a.$this->prefix_dept = b.$this->prefix_dept
                        WHERE a.NIK = '$id' ";
        return $this->db->query($query)->row();
    }

    public function listing(){
		$this->db->select('*');
		$this->db->from('tbl_standard_level');
		$this->db->join('tbl_level', 'tbl_standard_level.kode_level = tbl_level.kode_level', 'LEFT');
		$this->db->order_by('tbl_standard_level.kode_level');
		$query = $this->db->get();
		return $query->result();
	}

     public function getAll() {
        $query = " SELECT a.* FROM dbo.MS_Karyawan a 
                   ORDER BY a.NIK DESC ";
        return $this->db->get('dbo.MS_Karyawan')->result_array();
    }

     function create_schedule($record) {
        $this->db->insert($this->tbl_schedule, $record);
    }


}
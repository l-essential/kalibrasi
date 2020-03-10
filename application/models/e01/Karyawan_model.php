<?php
class Karyawan_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hris', true);
            $this->table='dbo.MS_Karyawan';
            $this->prefix_id = "NIK";
    }

    // public function getAll() {
    //     $this->db->order_by('NIK','desc');
    //     return $this->db->get($this->table)->result_array();
    // }

     public function getAll() {
        $query = " SELECT a.* FROM dbo.MS_Karyawan a 
                   ORDER BY a.NIK DESC ";
        return $this->db->get('dbo.MS_Karyawan')->result_array();
    }


}

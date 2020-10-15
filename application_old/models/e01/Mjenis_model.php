<?php
class Mjenis_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
            $this->table='e01_ms_jenis_penyimpangan';
            $this->prefix_id = "id_jenis";
    }

    public function getAll() {
        $query = "
                 SELECT 
                        a.*
                 FROM $this->table a  
                 ";
        return $this->db->query($query);
    }


     function getJenis(){
        $this->db->select("*");
        $this->db->from($this->table);
        $query = $this->db->get()->result();
        return $query;
    }

}

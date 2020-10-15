<?php

class 	Konsep_produk_baru_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table            = 'e05_konsep_produk_baru';
        $this->prefix_id        = 'konsep_produk_baru_id';
        $this->table_detail     = 'e05_konsep_produk_baru_detail';
        $this->prefix_id_detail = 'konsep_produk_detail';
    }

    function getGridDatadetail($idheader) {
        $query = "
                    SELECT 
                    a.*, a.updatetime as time,
                    b.*
                FROM $this->table_detail a   
                LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                WHERE 
                a.$this->prefix_id='$idheader'
                and a.statusdata='active'    
                ";
        return $this->db->query($query);
    }

    function getby_idkonsep($id) {
        $query = " SELECT 
                        a.*
                 FROM $this->table_detail a
                 WHERE 
                 a.statusdata='active'
                 AND a.konsep_produk_detail=$id
                
                 ";
        return $this->db->query($query)->row();
    }

    function create_revisi($record) {
        $this->db->insert($this->table_detail, $record);
    }

    function update_revisi($id, $record) {
        $this->db->where("$this->prefix_id", $id);
        return $this->db->update($this->table, $record);
    }

    function getbyid_preview($id) {
        $this->db->select(' a.*, b.*');
        $this->db->from($this->table_detail . ' a ');
        $this->db->join($this->table . ' b ', "a.$this->prefix_id = b.$this->prefix_id", 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where("a.$this->prefix_id_detail", $id);
        return $this->db->get()->row();
    }

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('no_konsep_produk');
        $this->db->where('year(tanggal_pembuatan)', $tahun);
        $this->db->like('no_konsep_produk', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->no_konsep_produk)) {
                $tmp = explode("/", $row->no_konsep_produk);
                return intval($tmp[3]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }


}

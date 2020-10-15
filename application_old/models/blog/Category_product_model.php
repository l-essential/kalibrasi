<?php

class Category_product_model extends CI_Model {

    private $table;
    private $prefix_id;

    public function __construct() {
        parent::__construct();
        $this->table = "category_product";
        $this->prefix_id = "category_id";
    }

    /* mendapatkan semua data dan hasilnya sebuah array */

    public function getAll() {
        $this->db->where('status', 'aktif');
        return $this->db->get($this->table)->result_array();
    }

    function checkData($param) {
        $this->db->where('status', 'aktif');
        $this->db->where("nama_katagori", $param);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function getGridData() {
        $query = "
                 SELECT a.*                        
                 FROM $this->table a   
                 WHERE 
                 status='aktif'
                
                 ";
        return $this->db->query($query);
    }

    function insert($record) {
        $this->db->insert($this->table, $record);
    }

    function getby_id($id) {
        $this->db->where('status', 'aktif');
        $this->db->where($this->prefix_id, $id);
        return $this->db->get($this->table);
    }

    function getby_name($name) {
        $this->db->where('status', 'aktif');
        $this->db->where("nama_katagori", $nama);
        return $this->db->get($this->table);
    }

    function update($id, $record) {
        $this->db->where('status', 'aktif');
        $this->db->where($this->prefix_id, $id);
        $this->db->update($this->table, $record);
    }

    function delete($id) {
        $this->db->delete($this->table, array($this->prefix_id => $id)
        );
    }

}

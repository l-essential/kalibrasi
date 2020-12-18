<?php

class Parent_menu_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table = 'mmenu';
        $this->prefix_id = "id_".$this->table;
        $this->table_ma = 'maplikasi';
        $this->prefix_ma = "id_".$this->table_ma;
    }

    function getGridData() {
        $query = " SELECT a.*, b.nama_aplikasi                     
                   FROM $this->table a   
                   LEFT JOIN $this->table_ma b on a.id_maplikasi = b.id_maplikasi ";
            return $this->db->query($query);
        }

}

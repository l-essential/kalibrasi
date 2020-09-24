<?php

class Hargaproduk_model extends MY_Model {
  
    private  $table_produk;
            function __construct() {
        parent::__construct();
        $this->table = "t_hargaproduk";
        $this->table_produk = "m_produk";
        $this->prefix_id = "id_hargaproduk";
    }
    
     function getGridDatabyidproduct($id_produk) {
        $query = "
                 SELECT a.*,b.nama_produk                        
                 FROM $this->table a   
                 LEFT JOIN $this->table_produk b on a.id_produk = b.id_produk 
                 WHERE 
                 a.status='aktif' and
                 b.status='aktif' and
                 a.id_produk=$id_produk
                
                 ";
        return $this->db->query($query);
    }
     function getGridData() {
        $query = "
                 SELECT a.*,b.nama_produk                        
                 FROM $this->table a   
                 LEFT JOIN $this->table_produk b on a.id_produk = b.id_produk 
                 WHERE 
                 a.status='aktif' and
                 b.status='aktif'
                
                 ";
        return $this->db->query($query);
    }
    public function getallbyprodukid($id_produk) {
        $query = "
                 SELECT a.*,b.nama_produk                        
                 FROM $this->table a   
                 LEFT JOIN $this->table_produk b on a.id_produk = b.id_produk 
                 WHERE 
                 a.status='aktif' and
                 b.status='aktif' and
                 a.id_produk=$id_produk
                
                 ";
        return $this->db->query($query)->result_array();
    }
    
}

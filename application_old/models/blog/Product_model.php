<?php

class Produk_model extends MY_Model {

    private $table_harga;
    private $table_keranjang;
    private $table_order;

    function __construct() {
        parent::__construct();
        $this->table = "m_produk";
        $this->table_harga = "t_hargaproduk";
        $this->table_keranjang = "t_keranjang";
        $this->table_order = "t_orderproduk";
        $this->prefix_id = "id_produk";
    }

    public function checkorder($id_keranjang) {
        $this->db->where('status', 'aktif');
        $this->db->where('id_keranjang', $id_keranjang);
        $result = $this->db->get($this->table_order)->num_rows();
        return $result;
    }

    public function insert_order($record) {
        $result = $this->db->insert($this->table_order, $record);
        return $result;
    }

    public function getAllinfront() {
        $this->db->select(' a.*,b.nilai as harga,b.diskon ');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_harga . ' b ', 'a.id_produk = b.id_produk', 'left');
        $this->db->where('a.status', 'aktif');
        $this->db->where('b.status', 'aktif');
        return $this->db->get()->result_array();
    }

    public function getAllinfrontbykategori($id_kategori) {
        $this->db->select(' a.*,b.nilai as harga,b.diskon ');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_harga . ' b ', 'a.id_produk = b.id_produk', 'left');
        $this->db->where('a.status', 'aktif');
        $this->db->where('b.status', 'aktif');
        $this->db->where('a.id_katagori', $id_kategori);
        return $this->db->get()->result_array();
    }

    public function getdetailbyid($id_produk) {
        $this->db->select(' a.*,b.nilai as harga,b.diskon ');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_harga . ' b ', 'a.id_produk = b.id_produk', 'left');
        $this->db->where('a.status', 'aktif');
        $this->db->where('b.status', 'aktif');
        $this->db->where('a.id_produk', $id_produk);
        return $this->db->get()->row();
    }

    function getdatahischart() {
        $userid = $this->session->userdata('id_userpembeli');
        $query = "
                SELECT 
                    a.id_keranjang,
                    a.id_alamatuserpembeli,
                    a.totalharga,
                    a.statuspembayaran,
                    f.nama_produk,
                    FORMAT(b.harga,2) as harga,
                    b.jumlah,
                    b.diskon,
                    b.tanggal_transaksi,
                    c.kode_kurir,
                    c.nama_kurir,
                    d.jenis_pembayaran,
                    e.alamat                    
                FROM $this->table_order a
                INNER JOIN $this->table_keranjang b on a.id_keranjang  = b.id_keranjang    
                INNER JOIN m_kurir c on a.id_kurir  = c.id_kurir    
                INNER JOIN m_jenispembayaran d on a.id_jenispembayaran  = d.id_jenispembayaran    
                INNER JOIN t_alamatuserpembeli e on a.id_alamatuserpembeli  = e.id_alamatuserpembeli  
                INNER JOIN $this->table f on b.id_produk = f.id_produk
                WHERE
                     a.status='aktif'
                 AND b.id_userpembeli='$userid' 
                 ";
        return $this->db->query($query);
    }
    function getcountchart($id_userpembeli) {       
        $query = "
                 SELECT 
                       a.id_keranjang
                 FROM $this->table_keranjang a   
                 LEFT JOIN $this->table b ON a.id_produk = b.id_produk   
                 WHERE 
                    a.status='aktif'
                    AND a.statusitemorder='menunggu'
                    AND b.status='aktif'
                    AND a.id_userpembeli='$id_userpembeli)'
                 ";
        $result= $this->db->query($query);
        if($result->num_rows()>0){
             return   $result->num_rows();
        }else{
            return 0;
        }
       
    }

    function getdatachart() {
        $userid = $this->session->userdata('id_userpembeli');
        $query = "
                 SELECT 
                        a.*,
                        b.nama_produk,
                        FORMAT(a.harga,2) as harga,
                        FORMAT( (a.jumlah*a.harga) - (a.harga*a.diskon)/100,2) as total_harga,
                        (a.jumlah*a.harga) - (a.harga*a.diskon)/100 as totalharga
                 FROM $this->table_keranjang a   
                 LEFT JOIN $this->table b ON a.id_produk = b.id_produk   
                 WHERE 
                    a.status='aktif'
                    AND a.statusitemorder='menunggu'
                    AND b.status='aktif'
                    AND a.id_userpembeli='$userid'
                 ";
        return $this->db->query($query);
    }

    function totalbelanja() {
        $userid = $this->session->userdata('id_userpembeli');
        $query = "
                 SELECT                       
                        FORMAT(SUM((a.jumlah*a.harga)) - SUM(a.harga*a.diskon)/100,2) as totalbelanja
                 FROM $this->table_keranjang a   
                 LEFT JOIN $this->table b ON a.id_produk = b.id_produk   
                 WHERE 
                 a.status='aktif'
                 AND a.statusitemorder='menunggu'
                 AND b.status='aktif'
                 AND a.id_userpembeli='$userid'
                
                 ";
        return $this->db->query($query)->row();
    }

    function insert_chart($record) {
        $this->db->insert($this->table_keranjang, $record);
    }

    function update_chart($id, $record) {
        $this->db->where('id_keranjang', $id);
        $this->db->update($this->table_keranjang, $record);
    }

    function getby_id_chart($id) {
        $this->db->where('status', 'aktif');
        $this->db->where('id_keranjang', $id);
        return $this->db->get($this->table_keranjang);
    }

    function delete_chart($id) {
        $this->db->delete($this->table_keranjang, array("id_keranjang" => $id)
        );
    }

}

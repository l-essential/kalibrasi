<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Batashargajualrumah_model extends MY_Model {

    protected $tbl_provinsi;
    protected $prefix_provinsi;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = 'm_batashargarumah';
        $this->prefix_id = 'id_m_batashargarumah';
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->tbl_provinsi = $this->provinsi->table;
        $this->prefix_provinsi = $this->provinsi->prefix_id;
    }
    
     public function getdata_byidprovinsi($id_provinsi) {
        $this->db->where("statusdata", "active");
        $this->db->where("id_provinsi", $id_provinsi);       
        $this->db->select("
                        id_m_batashargarumah,
                        id_provinsi,
                        tanggal_tmt,
                        batasnilai_rumahtapak,
                        batasnilai_rumahsusun,
                        harga_perm2,
                        batasnilai_penghasilantapak,
                        batasnilai_penghasilansusun,
                        batasnilai_penghasilantapak_suamiistri,
                        batasnilai_penghasilansusun_suamiistri
                ");
        $this->db->from($this->table . ' use index (GEYBYIDPROVINSI) ');
        $this->db->order_by("tanggal_tmt","desc");
        $this->db->limit(1);
        $result = $this->db->get();
        return $this->returndata($result, 'row');
    }

    public function getGridData() {
        $query = "
                 SELECT a.*,b.provinsi                        
                 FROM $this->table a   
                 INNER JOIN $this->tbl_provinsi b on a.$this->prefix_provinsi = b.$this->prefix_provinsi
                 WHERE
                    a.statusdata='active'
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

}

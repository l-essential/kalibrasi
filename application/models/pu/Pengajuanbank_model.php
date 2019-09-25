<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pengajuanbank_model extends MY_Model {

    protected $tbl_bankquotatahunan;
    protected $prefix_bankquotatahunan;
    protected $tbl_bank;
    protected $prefix_bank;
    protected $tbl_jeniskpr;
    protected $prefix_jeniskpr;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = 't_pengajuanbankheader';
        $this->prefix_id = 'id_t_pengajuanbankheader';
        $this->table_detail = 't_pengajuanbankdetail';
        $this->prefix_id_detail = 'id_t_pengajuanbankdetail';
        $this->setmodel($this->pathclass . "/Bank_model#bank");
        $this->setmodel($this->pathclass . "/Jeniskpr_model#jeniskpr");
        $this->tbl_bank = $this->bank->table;
        $this->prefix_bank = $this->bank->prefix_id;
        $this->tbl_bankquotatahunan = $this->bank->tbl_bankquota;
        $this->prefix_bankquotatahunan = $this->bank->prefix_bankquota;
        $this->tbl_jeniskpr = $this->jeniskpr->table;
        $this->prefix_jeniskpr = $this->jeniskpr->prefix_id;
    }

    public function getGridData() {
        $query = "
                 SELECT 
                        a.*,
                        c.kode_bank,
                        c.nama_bank,
                        b.quota,
                        b.tanggal_pko,                        
                        IF(b.tipe=1,'SBUM',IF(b.tipe=2,'SSB',IF(b.tipe=3,'FLPP','-'))) as tipesubsidi,
                        concat(IF(b.tipe=1,'SBUM',IF(b.tipe=2,'SSB',IF(b.tipe=3,'FLPP','-'))),' - ',c.nama_bank) as labelbank

                 FROM $this->table a   
                 INNER JOIN $this->tbl_bankquotatahunan b on a.$this->prefix_bankquotatahunan = b.$this->prefix_bankquotatahunan
                 INNER JOIN $this->tbl_bank c on c.$this->prefix_bank = b.$this->prefix_bank
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

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    C.jeniskpr
                 FROM $this->table_detail a   
                 INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 LEFT JOIN $this->tbl_jeniskpr c on c.$this->prefix_jeniskpr= a.$this->prefix_jeniskpr                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
    function getdatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    C.jeniskpr
                 FROM $this->table_detail a   
                 INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 LEFT JOIN $this->tbl_jeniskpr c on c.$this->prefix_jeniskpr= a.$this->prefix_jeniskpr                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        $result = $this->db->query($query);
        return $this->returndata($result,'array');
    }

}

<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Peserta_model extends MY_Model {

    protected $tbl_pengajuanbank_header;
    protected $prefix_pengajuanbank_header;
    protected $tbl_bank;
    protected $prefix_bank;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = "peserta";
        $this->prefix_id = "id_" . $this->table;
        $this->tbl_pengajuanbank_header = 't_pengajuanbankheader';
        $this->prefix_pengajuanbank_header = 'id_t_pengajuanbankheader';
        $this->tbl_bank = 'bank';
        $this->prefix_bank = 'id_bank';
    }

    public function getdatabelumgenerate($id_pengajuanbank_header) {
        $query = "
                 SELECT 
                        a.*,
                        b.no_sk,
                        b.tanggal_surat,
                        c.kode_bank,
                        c.nama_bank
                 FROM $this->table a   
                 INNER JOIN $this->tbl_pengajuanbank_header b on a.$this->prefix_pengajuanbank_header = b.$this->prefix_pengajuanbank_header
                 INNER JOIN $this->tbl_bank c on a.$this->prefix_bank = c.$this->prefix_bank
                 WHERE
                    a.statusdata='active'
                  AND a.$this->prefix_pengajuanbank_header='$id_pengajuanbank_header' 
                  AND a.statusschedule='waiting'    
                 ";
        $result = $this->db->query($query);
        return $this->returndata($result, 'array');
    }
    public function getGrid($id_pengajuanbank_header) {
        $query = "
                 SELECT 
                        a.*,
                        b.no_sk,
                        b.tanggal_surat,
                        c.kode_bank,
                        c.nama_bank
                 FROM $this->table a   
                 INNER JOIN $this->tbl_pengajuanbank_header b on a.$this->prefix_pengajuanbank_header = b.$this->prefix_pengajuanbank_header
                 INNER JOIN $this->tbl_bank c on a.$this->prefix_bank = c.$this->prefix_bank
                 WHERE
                    a.statusdata='active'
                  AND a.$this->prefix_pengajuanbank_header='$id_pengajuanbank_header'  
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public function insertdata_batch_peserta($record) {
        $this->db->insert_batch($this->table, $record);
    }

    public function getdataprosespeserta($id_t_pengajuanbankheader, $id_perumahan, $id_bank, $no_ktp) {
        $this->db->where("statusdata", "active");
        $this->db->where("id_t_pengajuanbankheader", $id_t_pengajuanbankheader);
        $this->db->where("id_perumahan", $id_perumahan);
        $this->db->where("id_bank", $id_bank);
        $this->db->where("no_ktp", $no_ktp);
        $this->db->select("
                        id_peserta,
                        id_t_pengajuanbankheader,
                        id_perumahan,
                        id_bank,
                        statusschedule,
                        statuslunas,
                        jeniskelamin,
                        no_ktp,
                        nama,
                        no_ktp_pasangan,
                        nama_pasangan,
                        no_npwp,
                        no_rekening,
                        tanggal_akad,
                        harga_rumah,
                        tenor,
                        uang_muka,
                        nilai_kpr,
                        sukubunga,
                        angsuran
                ");
        $this->db->from($this->table . ' use index (INDEX_GETPERSERTA) ');
        $result = $this->db->get();
        return $this->returndata($result, 'row');
    }

}

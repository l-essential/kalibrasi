<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pesertaangsuran_model extends MY_Model {

    protected $tbl_pengajuanbank_header;
    protected $prefix_pengajuanbank_header;
    protected $tbl_bank;
    protected $prefix_bank;
    protected $tbl_peserta;
    protected $prefix_peserta;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = "pesertaangsuran";
        $this->prefix_id = "id_" . $this->table;
        $this->tbl_pengajuanbank_header = 't_pengajuanbankheader';
        $this->prefix_pengajuanbank_header = 'id_t_pengajuanbankheader';
        $this->tbl_bank = 'bank';
        $this->prefix_bank = 'id_bank';
        $this->tbl_peserta = 'peserta';
        $this->prefix_peserta = 'id_peserta';
    }

    public function getGrid($id_pengajuanbank_header) {
        $sql = "           
            SELECT
                a.id_pesertaangsuran,
                a.id_peserta,
                a.duedate,
                a.tahun,
                a.bulan,
                a.tenorke,
                a.sourcebunga,
                a.bunga_persentase,
                a.angsuran,
                a.bunga_cicilan,
                a.pokok,
                a.outstanding,
                a.selisih,
                b.nama,
                b.no_ktp
            FROM $this->table a
            INNER JOIN $this->tbl_peserta b on a.$this->prefix_peserta=b.$this->prefix_peserta
            INNER JOIN $this->tbl_pengajuanbank_header c on c.$this->prefix_pengajuanbank_header = b.$this->prefix_pengajuanbank_header
            WHERE
                    a.statusdata='active'
                AND b.statusdata='active'    
                AND b.$this->prefix_pengajuanbank_header='$id_pengajuanbank_header'            
          ";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

}

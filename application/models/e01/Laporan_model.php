<?php

class Laporan_model extends MY_Model {

    protected $tbl_pengajuanbank_header;
    protected $prefix_pengajuanbank_header;
    protected $tbl_bank;
    protected $prefix_bank;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
       $this->db = $this->load->database('pu', true);
        // --- formulir ---
            $this->prefix_id = "id_formulir";
            $this->table = "e01_ts_formulir";       
            // --- katagori ---
                $this->tbl_k = 'e01_ms_katagori';
                $this->prefix_katagori = 'id_katagori';
                // --- jenis ---
                    $this->tbl_j = 'e01_ms_jenis_penyimpangan';
                    $this->prefix_jenis = 'id_jenis';
                    // --- ruang ---
                        $this->tbl_r = 'e01_ms_ruanglingkup';
                        $this->prefix_ruang = 'id_ruanglingkup';
                        // --- tipe ---
                            $this->tbl_t = 'e01_ms_tipe';
                            $this->prefix_tipe = 'id_tipe';
                            // --- resiko ---
                                $this->tbl_rs = 'e01_ms_resiko';
                                $this->prefix_resiko = 'id_resiko';
                                // --- evaluasi ---
                                    $this->tbl_ev = 'e01_ts_evaluasi_tindakan';
                                    $this->prefix_evaluasi = 'id_evaluasi_tindakan';
                                     $this->prefix_ev = 'improvement_code';
                                    // --- logno ---
                                        $this->logno = "_logno";
                                        $this->prefix_logno = 'id';
    $this->table_detail = 'bankcabang';
    $this->prefix_id_detail = 'id_bankcabang';
    $this->tbl_bunga = 'bankbunga';
    $this->prefix_bunga = 'id_bankbunga';
    }

    public function generatereport($param) {
        $nomor = $param['kode_ruanglingkup'];
        $daritanggal = date('Y-m-d', strtotime($param['daritanggal']));
        $sampaitanggal = date('Y-m-d', strtotime($param['sampaitanggal']));

        $where = "   WHERE
                    a.tanggal >='$daritanggal' and a.tanggal <='$sampaitanggal' ";

        if (!empty($nomor)) {
            $where .= " AND r.kode_ruanglingkup like '%$nomor%' ";
        }
        $query = "
                 SELECT a.*,
                 k.nama_katagori,
                 j.nama_jenis,
                 r.nama_ruanglingkup,
                 r.kode_ruanglingkup,
                 t.nama_tipe,
                 rs.nama_resiko,
                 rs.kode_resiko,
                 ev.evaluasi_tindakan,
                 ev.L,
                 ev.S,
                 ev.D,
                 ev.RPN
                 FROM $this->table a   
                 LEFT JOIN $this->tbl_k   k on a.$this->prefix_katagori = k.$this->prefix_katagori
                 LEFT JOIN $this->tbl_j   j on a.$this->prefix_jenis    = j.$this->prefix_jenis
                 LEFT JOIN $this->tbl_r   r on a.$this->prefix_ruang    = r.$this->prefix_ruang
                 LEFT JOIN $this->tbl_t   t on a.$this->prefix_tipe     = t.$this->prefix_tipe
                 LEFT JOIN $this->tbl_rs rs on a.$this->prefix_resiko   = rs.$this->prefix_resiko
                 LEFT JOIN $this->tbl_ev ev on a.$this->prefix_ev       = ev.$this->prefix_ev
                $where
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return null;
        }
    }

}

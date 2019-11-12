<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pengajuanbank_model extends MY_Model {

    protected $tbl_bankquotatahunan;
    protected $prefix_bankquotatahunan;
    protected $tbl_bank;
    protected $prefix_bank;
    protected $tbl_jeniskpr;
    protected $prefix_jeniskpr;
    protected $tmp_upload_form1;
    protected $error_validasi;
    protected $t_form1;

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
        $this->tmp_upload_form1 = 'tmp_upload_form1_';
        $this->error_validasi = 'error_validasi_';
        $this->t_form1 = 't_form1_';
    }

    public function getlabelpengajuanbank() {
        $query = "
                 SELECT 
                        a.id_t_pengajuanbankheader,
                        concat('No Surat : ',a.no_sk,' ,Tanggal Surat : ',a.tanggal_surat,' ,Bank : ',b.nama_bank) as labeldata
                      FROM $this->table a   
                 INNER JOIN $this->tbl_bank b on b.$this->prefix_bank = a.$this->prefix_bank
                 WHERE
                    a.statusdata='active'
                 ";
        $result = $this->db->query($query);
        return $this->returndata($result, 'array');
    }

    public function insert_tmpupload($id_t_pengajuanbank_header, $record) {
        $tablename = $this->tmp_upload_form1 . $id_t_pengajuanbank_header;
        $result = $this->generate_tmp_upload_form1($id_t_pengajuanbank_header);
        if ($result) {
            $this->db->insert_batch($tablename, $record);
        }
    }
    
    public function geterrorlog($id_t_pengajuanbank_header) {
        $tablename = $this->error_validasi . $id_t_pengajuanbank_header;
        $result = $this->db->get($tablename);
        return $this->returndata($result,'array');
    }
    public function clearlogerror($id_t_pengajuanbank_header) {
        $tablename = $this->error_validasi . $id_t_pengajuanbank_header;
        $this->db->truncate($tablename);
    }
    
    public function createlogerror($id_t_pengajuanbank_header, $record) {
        $tablename = $this->error_validasi . $id_t_pengajuanbank_header;
        $this->db->insert_batch($tablename, $record);
    }

    public function gettmpdata($id_t_pengajuanbank_header) {
        $tablename = $this->tmp_upload_form1 . $id_t_pengajuanbank_header;
        $checktable = $this->checktable($tablename);
        if ($checktable) {
            $sql = "
                    SELECT 
                       *
                     FROM $tablename                    
                     ORDER BY 
                        nama,tanggal_akad

                   ";
            $result = $this->db->query($sql);
            return $this->returndata($result, 'array');
        } else {
            echo 'Temporary table belum tergenerate...!';
            exit;
        }
    }
    public function getperumahan_tmp_upload_form1($id_t_pengajuanbank_header) {
        $tablename = $this->tmp_upload_form1 . $id_t_pengajuanbank_header;
        $checktable = $this->checktable($tablename);
        if ($checktable) {
            $sql = "
                    SELECT 
                        nama_perumahan,
                        kotakab,
                        kodepos,
                        luastanah,
                        luasbangunan
                     FROM $tablename
                     GROUP BY
                        nama_perumahan,
                        kotakab,
                        kodepos,
                        luastanah,
                        luasbangunan
                      ORDER BY 
                        nama_perumahan

                   ";
            $result = $this->db->query($sql);
            return $this->returndata($result, 'array');
        } else {
            echo 'Temporary table belum tergenerate...!';
            exit;
        }
    }

    public function getbadanhukum_tmp_upload_form1($id_t_pengajuanbank_header) {
        $tablename = $this->tmp_upload_form1 . $id_t_pengajuanbank_header;
        $checktable = $this->checktable($tablename);
        if($checktable){
            $this->db->select('nama_badanhukum');
            $this->db->group_by('nama_badanhukum');
            $this->db->order_by('nama_badanhukum');
            $result = $this->db->get($tablename);            
            return $this->returndata($result,'array');
        }else{
            echo 'Temporary table belum tergenerate...!';
            exit;
        }
       
    }

    public function generate_tmp_upload_form1($id_t_pengajuanbank_header) {
        $dbname = $this->db->database;
        $tablename = $this->tmp_upload_form1 . $id_t_pengajuanbank_header;
        $this->db->query("DROP TABLE IF EXISTS `$tablename`;");
        $query = "                              
                    CREATE TABLE `$tablename` (
                    `id` bigint(25) NOT NULL,
                    `id_t_pengajuanbankheader` int(11) NOT NULL,
                    `format_form1` int(1) DEFAULT NULL COMMENT 'jenis format form 1',
                    `nama` varchar(60) DEFAULT NULL,
                    `pekerjaan` varchar(25) NOT NULL,
                    `jeniskelamin` varchar(1) NOT NULL,
                    `no_ktp` varchar(16) NOT NULL,
                    `no_npwp` varchar(15) NOT NULL,
                    `gaji_pokok` decimal(11,2) NOT NULL DEFAULT '0.00',
                    `nama_pasangan` varchar(60) NOT NULL,
                    `no_ktp_pasangan` varchar(16) NOT NULL,
                    `no_rekening` varchar(20) NOT NULL,
                    `bankcabang` varchar(50) DEFAULT NULL,
                    `nama_badanhukum` varchar(50) DEFAULT NULL,
                    `nama_perumahan` varchar(60) DEFAULT NULL,
                    `alamat_perumahan` varchar(1600) DEFAULT NULL,
                    `provinsi` varchar(50) DEFAULT NULL,
                    `kotakab` varchar(50) DEFAULT NULL,
                    `kodepos` varchar(10) DEFAULT NULL,
                    `luastanah` int(5) NOT NULL DEFAULT '0',
                    `luasbangunan` int(5) NOT NULL DEFAULT '0',
                    `harga_rumah` double NOT NULL DEFAULT '0',
                    `uang_muka` double NOT NULL DEFAULT '0',
                    `angsuran` double NOT NULL DEFAULT '0',
                    `tenor` int(3) NOT NULL DEFAULT '0',
                    `tanggal_akad` date NOT NULL,
                    `outstanding_pokok` double NOT NULL DEFAULT '0',
                    `sbum` double NOT NULL DEFAULT '0',
                    `bunga` double NOT NULL DEFAULT '0',
                    `margin_kpr_ssm` decimal(6,4) NOT NULL COMMENT 'isi dalam persen',
                    `margin_acuan_kpr` decimal(6,4) NOT NULL,
                    `angsuran_kpr_margin` double NOT NULL DEFAULT '0',
                    `nilai_kpr` double NOT NULL DEFAULT '0',
                    `nilai_subsidi` double NOT NULL DEFAULT '0',
                    `nilai_ssb` double NOT NULL DEFAULT '0',
                    `nilia_flpp` double NOT NULL DEFAULT '0',
                    `nilia_selisihangsuran_ditagihkan` double NOT NULL DEFAULT '0',
                    `statusdata` enum('active','nonactive') DEFAULT 'active',
                    `createby` int(11) DEFAULT NULL,
                    `createtime` datetime DEFAULT NULL
                  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
             ";
        $result = $this->db->query($query);
        if ($result) {
            $this->db->query("ALTER TABLE $tablename ADD PRIMARY KEY (id);");
            $this->db->query("ALTER TABLE `$tablename` MODIFY `id` bigint(25) NOT NULL AUTO_INCREMENT;");

            $tablename_error = $this->error_validasi . $id_t_pengajuanbank_header;
            $this->db->query("DROP TABLE IF EXISTS `$tablename_error`;");
            $sql_table_error = "
                                CREATE TABLE `$tablename_error` (
                                `id` int(11) NOT NULL,
                                `id_t_pengajuanbank_header` int(11) NOT NULL,
                                `nama` varchar(60) DEFAULT NULL,
                                `ktp` varchar(20) DEFAULT NULL,
                                `pesan_error` text,
                                `statusdata` enum('active','nonactive') DEFAULT 'active',
                                `createby` int(11) DEFAULT NULL,
                                `createtime` datetime DEFAULT NULL
                              ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
                              

                               ";
            $this->db->query($sql_table_error);
            $this->db->query(" ALTER TABLE `$tablename_error`
                                ADD PRIMARY KEY (`id`),
                                ADD KEY `id_t_pengajuanbank_header` (`id_t_pengajuanbank_header`);");
            $this->db->query("ALTER TABLE `$tablename_error`
                                MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;");
            return $result;
        } else {
            return null;
        }
    }

    public function getGridData() {
        $query = "
                 SELECT 
                        a.*,                                               
                        b.nama_bank,
                        concat('Permohonan pembayaran ',a.prihal) as labelprihal
                 FROM $this->table a   
                 INNER JOIN $this->tbl_bank b on a.$this->prefix_bank = b.$this->prefix_bank
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
        return $this->returndata($result, 'array');
    }

}

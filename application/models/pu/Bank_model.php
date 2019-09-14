<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Bank_model extends MY_Model {

    public $tbl_bunga;
    public $prefix_bunga;
    public $tbl_bankquota;
    public $prefix_bankquota;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table_detail = 'bankcabang';
        $this->prefix_id_detail = 'id_bankcabang';
        $this->tbl_bunga = 'bankbunga';
        $this->prefix_bunga = 'id_bankbunga';
        $this->tbl_bankquota = 'bankquotatahunan';
        $this->prefix_bankquota = 'id_bankquotatahunan';
    }

    public function getbankquotafromperiode($daritanggal,$sampaitanggal) {
        $sql = "
                SELECT
                    a.id_bankquotatahunan,
                    a.id_bank,
                    b.nama_bank,
                    b.kode_bank,
                    IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))) as tipesubsidi,
                    concat(IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))),' - ',b.nama_bank) as labelbank,
                    a.tipe,
                    a.tanggal_pko,
                    a.tahun,
                    a.quota,
                    a.keterangan
                FROM $this->tbl_bankquota a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                    a.statusdata='active'
                    AND a.tanggal_pko >='$daritanggal' and a.tanggal_pko <='$sampaitanggal'
                ORDER BY   
                    a.tipe,a.tanggal_pko,a.tahun ASC
               ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }
    
    public function getbankquota() {
        $sql = "
                SELECT
                    a.id_bankquotatahunan,
                    a.id_bank,
                    b.nama_bank,
                    b.kode_bank,
                    IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))) as tipesubsidi,
                    concat(IF(a.tipe=1,'SBUM',IF(a.tipe=2,'SSB',IF(a.tipe=3,'FLPP','-'))),' - ',b.nama_bank) as labelbank,
                    a.tipe,
                    a.tanggal_pko,
                    a.tahun,
                    a.quota,
                    a.keterangan
                FROM $this->tbl_bankquota a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                    a.statusdata='active'
                ORDER BY   
                    a.tipe,a.tanggal_pko,a.tahun ASC
               ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }

    public function getbankkantorcabang() {
        $sql = "
                SELECT
                    b.id_bank,
                    b.nama_bank,
                    a.id_bankcabang,
                    a.kantor_cabank,
                    a.alamat,
                    concat(b.nama_bank,' - Cabang ',a.kantor_cabank) as bankcabang
                FROM $this->table_detail a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                    a.statusdata='active'
                ORDER BY   
                    b.nama_bank, a.kantor_cabank ASC
               ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'array');
    }

    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.nama_bank
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function GridDatabunga($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.nama_bank
                 FROM $this->tbl_bunga a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    function GridDataQuota($idheader) {
        $query = "
                SELECT
                    a.id_bankquotatahunan,
                    a.id_bank,
                    a.tipe,
                    a.tanggal_pko,
                    a.tahun,
                    a.quota,
                    a.keterangan
                FROM $this->tbl_bankquota a
                INNER JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                        a.$this->prefix_id='$idheader'
                    AND a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

    public function getby_id_bunga($id_bankbunga) {
        $this->db->where("$this->prefix_bunga", $id_bankbunga);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bunga);
        return $this->returndata($result, 'row');
    }

    public function getby_id_bankquota($id) {
        $this->db->where("$this->prefix_bankquota", $id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bankquota);
        return $this->returndata($result, 'row');
    }

    public function getbungainbank($id_bank, $periode) {
        $this->db->where("$this->prefix_id", $id_bank);
        $this->db->where("periode", $periode);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bunga);
        return $this->returndata($result, 'row');
    }
    public function getdatabankquota($id_bank, $tipe,$tahun) {
        $this->db->where("$this->prefix_id", $id_bank);
        $this->db->where("tipe", $tipe);
        $this->db->where("tahun", $tahun);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->tbl_bankquota);
        return $this->returndata($result, 'row');
    }

    function insertbunga($record) {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_bunga, $record);
    }

    function insertbankquota($record) {
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        return $this->db->insert($this->tbl_bankquota, $record);
    }

    function updatebunga($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_bunga, $id);
        return $this->db->update($this->tbl_bunga, $record);
    }

    function updatebankquota($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_bankquota, $id);
        return $this->db->update($this->tbl_bankquota, $record);
    }

    function deletebunga($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_bunga, $id);
        return $this->db->update($this->tbl_bunga, $record);
    }

    function deletebankquota($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_bankquota, $id);
        return $this->db->update($this->tbl_bankquota, $record);
    }

}

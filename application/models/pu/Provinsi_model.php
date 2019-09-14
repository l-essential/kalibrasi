<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar
class Provinsi_model extends MY_Model {
    public $tbl_kecamatan;
    public $prefix_kecamatan;
    public $tbl_desa;
    public $prefix_desa;
    
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table_detail = 'kotakabupaten';
        $this->prefix_id_detail = 'id_kota';
        $this->tbl_kecamatan ='kecamatan';
        $this->prefix_kecamatan ='id_kecamatan';
        $this->tbl_desa ='desa';
        $this->prefix_desa ='id_desa';
    }
    
    public function getkotakabupaten($id_provinsi) {
        $this->db->where("id_provinsi",$id_provinsi);
        $this->db->where("statusdata",'active');
        $this->db->order_by('kota','asc');
        $result = $this->db->get($this->table_detail);
        return $this->returndata($result, 'array');
    }
    public function getkecamatan($id_kota) {
        $this->db->where("id_kota",$id_kota);
        $this->db->where("statusdata",'active');
        $this->db->order_by('nama_kecamatan','asc');
        $result = $this->db->get($this->tbl_kecamatan);
        return $this->returndata($result, 'array');
    }
    public function getdesa($id_kecamatan) {
        $this->db->where("id_kecamatan",$id_kecamatan);
        $this->db->where("statusdata",'active');
        $this->db->order_by('nama_desa','asc');
        $result = $this->db->get($this->tbl_desa);
        return $this->returndata($result, 'array');
    }
    
    public function getAll() {
        $this->db->order_by('provinsi','asc');
        return parent::getAll();
    }
    public function getkotabyprovinsi($id_provinsi,$kota) {
        $this->db->where('id_provinsi',$id_provinsi);        
        $this->db->where('kota',trim(rtrim(ltrim($kota))));        
        $this->db->where('statusdata','active');
        $result = $this->db->get($this->table_detail);
        return $this->returndata($result,'row');
    }
    public function getkecamataninkota($id_header,$kode) {
        $this->db->where('id_kota',$id_header);        
        $this->db->where('kode_kecamatan',trim(rtrim(ltrim($kode))));        
        $this->db->where('statusdata','active');
        $result = $this->db->get($this->tbl_kecamatan);
        return $this->returndata($result,'row');
    }
    
    public function getby_id_kecamatan($id) {
        $this->db->where("$this->prefix_kecamatan",$id);
        $this->db->where("statusdata",'active');
        $result = $this->db->get($this->tbl_kecamatan);
        return $this->returndata($result,'row');
    }
    public function getby_id_desa($id_kodepos) {
        $this->db->where("$this->prefix_desa",$id_kodepos);
        $this->db->where("statusdata",'active');
        $result = $this->db->get($this->tbl_desa);
        return $this->returndata($result,'row');
    }
    public function getdesainkecamatan($id_kecamatan,$kode_desa) {
        $this->db->where("$this->prefix_kecamatan",$id_kecamatan);
        $this->db->where("kode_desa",$kode_desa);
        $this->db->where("statusdata",'active');
        $result = $this->db->get($this->tbl_desa);
        return $this->returndata($result,'row');
    }
    public function checkkodepos($kodepos) {
        $this->db->where("kodepos",$kodepos);
        $this->db->where("statusdata",'active');
        $result = $this->db->get($this->tbl_desa);
        return $this->returndata($result,'row');
    }
    
    function insertdesa($record) {       
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        $this->db->insert($this->tbl_desa, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function insertkecamatan($record) {       
        $record['createby'] = $this->session->userdata('ses_id_user');
        $record['createtime'] = date('Y-m-d H:i:s');
        $this->db->insert($this->tbl_kecamatan, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    function updatedesa($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_desa, $id);
        return $this->db->update($this->tbl_desa, $record);
    }
    function updatekecamatan($id, $record) {
        $record['updateby'] = $this->session->userdata('ses_id_user');
        $record['updatetime'] = date('Y-m-d H:i:s');
        $this->db->where($this->prefix_kecamatan, $id);
        return $this->db->update($this->tbl_kecamatan, $record);
    }

    function deletedesa($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';

        $this->db->where($this->prefix_desa, $id);
        return $this->db->update($this->tbl_desa, $record);
    }
    function deletekecamatan($id, $record = array()) {
        $record['deleteby'] = $this->session->userdata('ses_id_user');
        $record['deletetime'] = date('Y-m-d H:i:s');
        $record['statusdata'] = 'nonactive';
        $this->db->where($this->prefix_kecamatan, $id);
        return $this->db->update($this->tbl_kecamatan, $record);
    }

    function getcarikota($idheader,$kota) {
        $query = "
                 SELECT 
                    a.*,
                    b.provinsi
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'  
                 and a.kota like '%$kota%'
                 ";
        $result= $this->db->query($query);
        return $this->returndata($result,'array');
    }
    
    function GridDatakecamatan($id_kota) {
        $query = "
                 SELECT 
                    a.*,
                    b.kota,
                    c.provinsi
                 FROM $this->tbl_kecamatan a   
                 LEFT JOIN $this->table_detail b on a.$this->prefix_id_detail = b.$this->prefix_id_detail                  
                 LEFT JOIN $this->table c on b.$this->prefix_id = c.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id_detail='$id_kota'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
    
    function GridDatadesa($id_kecamatan) {
        $query = "
                 SELECT 
                    a.*,
                    b.nama_kecamatan,
                    c.kota,
                    d.provinsi
                 FROM $this->tbl_desa a   
                 LEFT JOIN $this->tbl_kecamatan b on a.$this->prefix_kecamatan = b.$this->prefix_kecamatan                  
                 LEFT JOIN $this->table_detail c on c.$this->prefix_id_detail = b.$this->prefix_id_detail                  
                 LEFT JOIN $this->table d on d.$this->prefix_id = c.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_kecamatan='$id_kecamatan'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
    function getdatadesa() {
        $query = "
                 SELECT 
                    a.*,
                    b.nama_kecamatan,
                    c.kota,
                    d.provinsi
                 FROM $this->tbl_desa a   
                 LEFT JOIN $this->tbl_kecamatan b on a.$this->prefix_kecamatan = b.$this->prefix_kecamatan                  
                 LEFT JOIN $this->table_detail c on c.$this->prefix_id_detail = b.$this->prefix_id_detail                  
                 LEFT JOIN $this->table d on d.$this->prefix_id = c.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_kecamatan='$id_kecamatan'
                 and a.statusdata='active'     
                 ";
        $result= $this->db->query($query);
        return $this->returndata($result,'array');
    }
    function getGridDatadetail($idheader) {
        $query = "
                 SELECT 
                    a.*,
                    b.provinsi
                 FROM $this->table_detail a   
                 LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id                  
                 WHERE 
                 a.$this->prefix_id='$idheader'
                 and a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }

}

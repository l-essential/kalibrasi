<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Batashargajualrumahpengecualian_model extends MY_Model {

    protected $tbl_provinsi;
    protected $prefix_provinsi;
    protected $tbl_kotakabupaten;
    protected $prefix_kotakabupaten;
    protected $tbl_kecamatan;
    protected $prefix_kecamatan;
    protected $tbl_desa;
    protected $prefix_desa;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = 'm_batashargarumahpengecualian';
        $this->prefix_id = 'id_m_batashargarumahpengecualian';
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->tbl_provinsi = $this->provinsi->table;
        $this->prefix_provinsi = $this->provinsi->prefix_id;
        $this->tbl_kotakabupaten = $this->provinsi->table_detail;
        $this->prefix_kotakabupaten = $this->provinsi->prefix_id_detail;
        $this->tbl_kecamatan = $this->provinsi->tbl_kecamatan;
        $this->prefix_kecamatan = $this->provinsi->prefix_kecamatan;
        $this->tbl_desa = $this->provinsi->tbl_desa;
        $this->prefix_desa = $this->provinsi->prefix_desa;
    }

    public function getdatapengecualian($id_provinsi, $id_kota, $id_kecamatan, $id_desa) {
        $this->db->where("statusdata", "active");
        $this->db->where("id_desa", $id_desa);
        $this->db->where("id_kecamatan", $id_kecamatan);
        $this->db->where("id_kota", $id_kota);
        $this->db->where("id_provinsi", $id_provinsi);
        $this->db->order_by("tanggal_tmt","desc");
        $this->db->limit(1);
        $result1 = $this->db->get($this->table . ' use index (GETBYFILTER) ');    
        
        $return1 = $this->returndata($result1, 'row');
        if ($return1) {
            return $return1;
        } else {          
            $this->db->where("statusdata", "active");
            $this->db->where("id_desa", '0');
            $this->db->where("id_kecamatan", $id_kecamatan);
            $this->db->where("id_kota", $id_kota);
            $this->db->where("id_provinsi", $id_provinsi);
            $this->db->order_by("tanggal_tmt","desc");
            $this->db->limit(1);
            $result2 = $this->db->get($this->table . ' use index (GETBYFILTER) ');
            $return2 = $this->returndata($result2, 'row');
            if ($return2) {
                return $return2;
            } else {
                $this->db->where("statusdata", "active");
                $this->db->where("id_desa", '0');
                $this->db->where("id_kecamatan", '0');
                $this->db->where("id_kota", $id_kota);
                $this->db->where("id_provinsi", $id_provinsi);
                $this->db->order_by("tanggal_tmt","desc");
                $this->db->limit(1);
                $result3 = $this->db->get($this->table . ' use index (GETBYFILTER) ');
                $return3 = $this->returndata($result3, 'row');
                if ($return3) {
                    return $return3;
                } else {
                    $this->db->where("statusdata", "active");
                    $this->db->where("id_desa", '0');
                    $this->db->where("id_kecamatan", '0');
                    $this->db->where("id_kota", '0');
                    $this->db->order_by("tanggal_tmt","desc");
                    $this->db->limit(1);
                    $this->db->where("id_provinsi", $id_provinsi);
                    $result4 = $this->db->get($this->table . ' use index (GETBYFILTER) ');
                    $return4 = $this->returndata($result4, 'row');
                    if ($return4) {
                        return $return4;
                    } else {
                        return null;
                    }
                }
            }
        }
    }

    public function getGridData() {
        $query = "
                 SELECT a.*,
                        b.provinsi,                        
                        c.kota,                        
                        d.nama_kecamatan as kecamatan,                        
                        e.nama_desa as desa,                        
                        e.kodepos                        
                 FROM $this->table a   
                 INNER JOIN $this->tbl_provinsi b on a.$this->prefix_provinsi = b.$this->prefix_provinsi
                 LEFT JOIN $this->tbl_kotakabupaten c on a.$this->prefix_kotakabupaten = c.$this->prefix_kotakabupaten
                 LEFT JOIN $this->tbl_kecamatan d on a.$this->prefix_kecamatan = d.$this->prefix_kecamatan
                 LEFT JOIN $this->tbl_desa e on a.$this->prefix_desa = e.$this->prefix_desa
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

<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Perumahan_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = "perumahan";
        $this->prefix_id = "id_" . $this->table;
    }

    public function getdataperumanahan($nama_perumahan, $kotakab, $kodepos, $luastanah, $luasbangunan) {
        $this->db->where("statusdata", "active");
        $this->db->where("nama_perumahan", $nama_perumahan);
        $this->db->where("kabkota", $kotakab);
        $this->db->where("kodepos", $kodepos);
        $this->db->where("luastanah", $luastanah);
        $this->db->where("luasbangunan", $luasbangunan);
        $this->db->select("
                        id_perumahan,
                        nama_perumahan,
                        alamat,
                        kabkota,
                        kodepos,
                        luastanah,
                        luasbangunan,
                        keterangan
                ");
        $this->db->from($this->table . ' use index (INDEX_GETPERUMAHAN) ');
        $result = $this->db->get();
        return $this->returndata($result, 'row');
    }

}

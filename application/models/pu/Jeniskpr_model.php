<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Jeniskpr_model extends MY_Model {

    protected $tbl_jenisrumah;
    protected $prefix_jenisrumah;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->setmodel($this->pathclass . "/Jenisrumah_model#jenisrumah");
        $this->tbl_jenisrumah = $this->jenisrumah->table;
        $this->prefix_jenisrumah = $this->jenisrumah->prefix_id;
    }

    public function getGridData() {
        $query = "
                 SELECT a.*,b.nama_jenisrumah                        
                 FROM $this->table a   
                 INNER JOIN $this->tbl_jenisrumah b on a.$this->prefix_jenisrumah = b.$this->prefix_jenisrumah
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

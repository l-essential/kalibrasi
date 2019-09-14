<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Bataspenghasilan_model extends MY_Model {

    protected $tbl_provinsi;
    protected $prefix_provinsi;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table = 'm_bataspengasilan';
        $this->prefix_id = 'id_m_bataspengasilan';
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->tbl_provinsi = $this->provinsi->table;
        $this->prefix_provinsi = $this->provinsi->prefix_id;
    }

    public function getGridData() {
        $query = "
                 SELECT a.*,b.provinsi                        
                 FROM $this->table a   
                 INNER JOIN $this->tbl_provinsi b on a.$this->prefix_provinsi = b.$this->prefix_provinsi
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

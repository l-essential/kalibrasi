<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Msukubungabi_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->table ='m_sukubungabirate';
        $this->prefix_id='id_'.$this->table;
    }

    public function getGriddata(){
        $query = "
                 SELECT a.*,
                 concat(truncate(a.sukubunga_kpr*100,2),' %') as persen_kpr,
                 concat(truncate(a.sukubunga_kprbi*100,2),' %') as persen_bi,
                 concat(truncate(a.bi_rate*100,2),' %') as persen_bi_rate                        
                 FROM $this->table a                 
                 ";
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $query .= " WHERE a.statusdata='active' ";
        }

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public function last_birate($tanggal_terbit) {
        $this->db->where('statusdata','active');
        $this->db->where('tanggal_terbit >=',$tanggal_terbit);
        $this->db->order_by('tahun','desc');
        $this->db->order_by('bulan','desc');
        $this->db->order_by('tanggal_terbit','desc');
        $this->db->limit(1);
        $result = $this->db->get($this->table);
        return $this->returndata($result,'row');
    }
    
}

<?php

class Recyclebin_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->penyimpangan       = 'e01_ts_formulir';
        $this->calibration        = 'e04_ts_calibration';
        $this->konsep_produk_baru = 'e05_konsep_produk_baru';
        $this->formula_notifikasi = 'e15_formula_1_h';
    }

    public function getData_penyimpangan() {
        $checkfiield = $this->session->userdata('ses_id_user');
        $query = "SELECT  a.*, b.username
                  FROM $this->penyimpangan a
                  LEFT JOIN  lessential_accessapps.useraccess b on a.deleteby = b.id_user 
                  WHERE a.deleteby = '$checkfiield' AND  a.statusdata='nonactive' ";
        $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result;
                } else {
                    return null;
                }
     
    }

    public function getData_calibration() {
        $checkfiield = $this->session->userdata('ses_id_user');
        $query = "SELECT  a.*, b.username
                  FROM $this->calibration a
                  LEFT JOIN  lessential_accessapps.useraccess b on a.deleteby = b.id_user 
                  WHERE a.deleteby = '$checkfiield' AND  a.statusdata='nonactive' ";
        $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result;
                } else {
                    return null;
                }
     
    }

    public function getData_konsepproduk() {
        $checkfiield = $this->session->userdata('ses_id_user');
        $query = "SELECT  a.*, b.username
                  FROM $this->konsep_produk_baru a
                  LEFT JOIN  lessential_accessapps.useraccess b on a.deleteby = b.id_user 
                  WHERE a.deleteby = '$checkfiield' AND  a.statusdata='nonactive' ";
        $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result;
                } else {
                    return null;
                }
     
    }

    public function getData_formula() {
        $checkfiield = $this->session->userdata('ses_id_user');
        $query = "SELECT  a.*, b.username
                  FROM $this->formula_notifikasi a
                  LEFT JOIN  lessential_accessapps.useraccess b on a.deleteby = b.id_user 
                  WHERE a.deleteby = '$checkfiield' AND  a.statusdata='nonactive' ";
        $result = $this->db->query($query);
                if ($result->num_rows() > 0) {
                    return $result;
                } else {
                    return null;
                }
     
    }

}

<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Temporarydataform1_model extends MY_Model {

    protected $tmp_upload_form1;
    protected $error_validasi;

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
        $this->tmp_upload_form1 = 'tmp_upload_form1_';
        $this->error_validasi = 'error_validasi_';
    }

    public function getGrid($id_pengajuanbank_header) {
        $table = $this->tmp_upload_form1 . $id_pengajuanbank_header;
        $checktable = $this->checktable($table);
        if ($checktable) {
            $query = "
                 SELECT 
                        a.*                                           
                 FROM $table a   
                 WHERE
                    a.statusdata='active'
                 ";
            $result = $this->db->query($query);
            if ($result->num_rows() > 0) {
                return $result;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

}

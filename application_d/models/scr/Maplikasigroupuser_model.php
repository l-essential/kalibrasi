<?php

class Maplikasigroupuser_model extends MY_Model {

    public $tbl_user;

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('am', true);
        $this->setmodel($this->pathclass."/Useraccess_model#ua");
        $this->tbl_user = $this->ua->table;
        
    }

    public function GridData($id_maplikasigroup) {
        $query = "
                 SELECT a.*,b.username,b.namaKaryawan, b.department_name                     
                 FROM $this->table a 
                 LEFT JOIN  $this->tbl_user b on a.id_user = b.id_user    
                 WHERE
                    a.statusdata='active'
                   AND a.id_maplikasigroup='$id_maplikasigroup' 
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public function getby_id_data($id) {
        $this->db->where("id_maplikasigroupuser", $id);
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'array');
    }

}

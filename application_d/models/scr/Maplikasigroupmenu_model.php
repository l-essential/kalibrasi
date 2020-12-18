<?php

class Maplikasigroupmenu_model extends MY_Model {

    public $tbl_user;
    public $tbl_menu;

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->setmodel($this->pathclass."/Mmenu_model#mnu");
        $this->tbl_menu = $this->mnu->table;
        $this->db = $this->load->database('am', true);
    }

    public function GridData($id_maplikasigroup) {
        $query = "
                 SELECT a.*,b.nama_menu                        
                 FROM $this->table a 
                 LEFT JOIN  $this->tbl_menu b on a.id_mmenu = b.id_mmenu    
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

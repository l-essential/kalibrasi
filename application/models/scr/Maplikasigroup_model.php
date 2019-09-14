<?php

class Maplikasigroup_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
    }

    public function GridData($id_maplikasi) {
        $query = "
                 SELECT a.*                        
                 FROM $this->table a   
                 WHERE
                    a.statusdata='active'
                   AND a.id_maplikasi='$id_maplikasi' 
                 ";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }
    
    public function getby_id_data($id) {
        $this->db->where("id_maplikasigroup",$id);
        $result = $this->db->get($this->table);
        return $this->returndata($result,'array');
    }

}

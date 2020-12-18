<?php

class Mmenu_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
    }

    public function GridData($id_maplikasi) {
        $query = "
                 SELECT a.*,b.nama_menu as parent_menu                        
                 FROM $this->table a   
                 LEFT JOIN $this->table b on a.id_parent = b.id_mmenu    
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

    public function getDatasusunanmenubyidmenu($id_maplikasi = 0, $id_menu = 0) {
        $this->db->where("statusdata", "active");
        if ($id_maplikasi > 0) {
            $this->db->where("id_maplikasi", $id_maplikasi);
        }
        if ($id_menu > 0) {
            $this->db->where("id_parent", $id_menu);
        }
        $this->db->order_by("id_parent", 'asc');
        $result = $this->db->get($this->table);
        return $this->returndata($result, "array");
    }
    

    public function getDatasusunanmenu($id_maplikasi=0){
        $this->db->where("statusdata", "active");
        if($id_maplikasi > 0 ){
            $this->db->where("id_maplikasi", $id_maplikasi);
        }        
        $this->db->order_by("id_parent",'asc');
        $this->db->order_by("urutan",'asc');
        $result = $this->db->get($this->table);
        return $this->returndata($result, "array");
    }
    
    
    public function getAllmenu($id_maplikasi) {
        $this->db->where("statusdata", "active");
        $this->db->where("id_maplikasi", $id_maplikasi);
        $result = $this->db->get($this->table);
        return $this->returndata($result, "array");
    }

}

<?php
class Maplikasi_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('am', true);
            $this->table='maplikasi';
            $this->prefix_id = "id_maplikasi";
    }

    public function getAll() {
        $this->db->where('statusdata','active');
        $this->db->order_by('maplikasi','asc');
        return $this->db->get($this->table)->result_array();
    }

    public function getGridData () {
        $query = "SELECT a.*                        
                 FROM $this->table a   
                 ORDER BY a.statusdata ASC";
                 
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

     function getby_id($id) {
        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

     function getby_id_array($id) {
      
        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

}

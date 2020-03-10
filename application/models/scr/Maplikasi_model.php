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

}

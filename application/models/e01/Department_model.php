<?php
class Department_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('hris', true);
            $this->table = 'MS_Department';
            $this->prefix_id = "kodeDepartment";
    }

    public function getAll() {
        $this->db->order_by('kodeDepartment','asc');
        return $this->db->get($this->table)->result_array();
    }
     function getAllData() {
    $this->db->select("*");
    $this->db->from($this->table);
    $query = $this->db->get()->result();
    return $query;
  }

   public function get_departement(){
    $this->db->select("namaDepartment as nd, kodeDepartment as kdp");
    $this->db->from( $this->table);
    $this->db->order_by('nd', 'ASC');
    $query = $this->db->get()->result();
    return $query;
  }

}

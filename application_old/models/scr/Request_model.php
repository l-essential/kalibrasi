<?php

class Request_model extends MY_Model {

    protected $table_role;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table_role = 'roleapps';
        $this->table = "useraccess";
        $this->prefix_id = "id_user";
    }

    public function total_user() {
      $this->db->where('statusdata','active');
		$data = $this->db->get( $this->table);
		return $data->num_rows();
    }

    function getGridData() {
        $query = "
                 SELECT 
                    a.*,
                    b.roleapps                     
                 FROM $this->table a   
                 LEFT JOIN $this->table_role b on a.id_role = b.id_role
                 ";
        $checkfiield = $this->session->userdata('ses_department_name');
         if ($checkfiield != 'IT' ){
              $query .= " WHERE a.department_name LIKE '%$checkfiield%'";
        }
        return $this->db->query($query);
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

}

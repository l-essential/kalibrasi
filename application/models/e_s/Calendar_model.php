<?php

class Calendar_model extends MY_Model {

    protected $table_role;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('pu', true);
        $this->table = "_calendar";
        $this->prefix_id = "id";
    }

  

    public function get_list($where = FALSE )
	{
		if ($where) {
			$this->db->where($where);
		}
		return $this->db->get($this->table)->result();
    }	
    
      function GridData_Calendar(){
        $query = "  SELECT  a.*
                    FROM $this->table a  
                                    
                    WHERE a.statusdata='active'    
                    ";
        return $this->db->query($query);
    }

  
    // function getby_id($id) {
    //     $this->db->where($this->prefix_id, $id);
    //     $result = $this->db->get($this->table);
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return null;
    //     }
    // }

    //  function getby_id_array($id) {
    //     $checkfiield = $this->checkfield("statusdata");
    //     if ($checkfiield > 0) {
    //         $this->db->where("statusdata", "active");
    //     }
    //     $this->db->where($this->prefix_id, $id);
    //     $result = $this->db->get($this->table);
    //     if ($result->num_rows() > 0) {
    //         $data = $result->result_array();
    //         return $data[0];
    //     } else {
    //         return null;
    //     }
    // }

   

    

   
}

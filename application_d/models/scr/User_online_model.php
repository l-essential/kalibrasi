<?php

class User_online_model extends MY_Model {

    protected $table_role;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table_role = 'roleapps';
        $this->table = "useraccess";
        $this->prefix_id = "id_user";
    }

    function getGridData() {
            $query  = " SELECT a.*                    
                        FROM $this->table a
                        WHERE a.statusdata = 'active' 
                        AND a.status_online = 1 ";
                        $result = $this->db->query($query);
                            if ($result->num_rows() > 0) {
                                return $result;
                            } else {
                                return null;
                        }
    }


}

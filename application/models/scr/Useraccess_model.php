<?php

class Useraccess_model extends MY_Model {

    protected $table_role;

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('am', true);
        $this->table_role = 'roleapps';
        $this->table = "useraccess";
        $this->prefix_id = "id_user";
    }

    function getGridData() {
        $query = "
                 SELECT 
                    a.*,
                    b.roleapps                     
                 FROM $this->table a   
                 LEFT JOIN $this->table_role b on a.id_role = b.id_role
                 WHERE
                 a.statusdata='active'
                 ";
        return $this->db->query($query);
    }

}

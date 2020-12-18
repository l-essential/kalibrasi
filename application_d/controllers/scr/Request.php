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
                 ORDER BY status_login ASC ";
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

    public function getmax($tanggal) {
        $tahun = date('Y', strtotime($tanggal));
        $this->db->select_max('register_code');
        $this->db->where('year(register_date)', $tahun);
        $this->db->like('register_code', $tahun);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $row = $result->row();
            if (!empty($row->register_code)) {
                $tmp = explode("-", $row->register_code);
                return intval($tmp[1]) + 1;
            } else {
                return 1;
            }
        } else {
            return 1;
        }
    }

}

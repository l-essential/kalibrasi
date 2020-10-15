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
        if ($this->session->userdata('ses_department_name') == 'IT') {
            $query  = " SELECT 
                        a.*,
                        b.roleapps                     
                        FROM $this->table a   
                        LEFT JOIN $this->table_role b on a.id_role = b.id_role
                        WHERE a.statusdata = 'active' ";
                        $result = $this->db->query($query);
                            if ($result->num_rows() > 0) {
                                return $result;
                            } else {
                                return null;
                        }

                     } else {

            $checksession = $this->session->userdata('ses_department_name');
            $query  = " SELECT 
                        a.*,
                        b.roleapps                     
                        FROM $this->table a   
                        LEFT JOIN $this->table_role b on a.id_role = b.id_role
                        WHERE a.department_name LIKE '%$checksession%' AND a.statusdata = 'active' ";
                        $result = $this->db->query($query);
                            if ($result->num_rows() > 0) {
                                return $result;
                            } else {
                                return null;
                        }
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

    // function get_user() {
    //     $this->db->select("*");
    //     $this->db->from('useraccess');
    //     $query = $this->db->get()->result();
    //     return $query;
    // }

    function get_user() {
        $user = $this->session->userdata('ses_KodeSeksi');
        $this->db->where('KodeSeksi', $user);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function check_ID($id) {
        $this->db->where("id_user", $id);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function update_address($id, $record) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
        $this->db->where('id_user', $id);
        return $this->db->update($this->table, $record);
    }



}

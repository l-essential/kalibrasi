<?php

class Background_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('st', true);
         $this->table = 'themes';
         $this->prefix_id = "themes_id";
    }

    function update_data($user_id, $record) {
        $this->db->where("user_id", $user_id);
        return $this->db->update($this->table, $record);
    }

    public function getbackground($user_id) {
        $this->db->where("user_id", $user_id);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }

    function get_background() {
        $id_user = $this->session->userdata('ses_id_user');
        $this->db->select('a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where('a.user_id', $id_user);
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }


}

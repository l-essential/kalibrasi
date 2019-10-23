<?php

class Default_model extends MY_Model {
    public function gettimeserver() {
        $sql = "SELECT NOW() as syntime,CURDATE() as syndate ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'row');
    }

}

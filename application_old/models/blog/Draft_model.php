<?php

class Draft_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'article';
         $this->prefix_id = "id_article";
         $this->category = 'category_article';
         $this->prefix_category = "slug_category";
    }

    function getGridData() {
        if ($this->session->userdata('ses_username') == 'moehamad') {
        $query = "  SELECT 
                    a.*,
                    b.name_category
                    
                    FROM $this->table a   
                    LEFT JOIN $this->category b on a.$this->prefix_category = b.$this->prefix_category
                                        
                    WHERE a.status_article = 1 AND a.statusdata='active'    
                    ";
            return $this->db->query($query);
        } else {
        $query = "  SELECT 
                    a.*,
                    b.name_category
                    
                    FROM $this->table a   
                    LEFT JOIN $this->category b on a.$this->prefix_category = b.$this->prefix_category
                    ";
                   $checkfiield = $this->session->userdata('ses_username');
                    if ($checkfiield != 'admin' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE a.done_by = '$checkfiield' AND a.status_article = 1 AND a.statusdata='active'    
                    ";
                        
                    }                 
                   
            return $this->db->query($query);
        }
    }


}

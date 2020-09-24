<?php

class 	List_article_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'article';
         $this->prefix_id = "id_article";
         $this->category = 'category_article';
         $this->prefix_category = "slug_category";
    }

    function getGridData(){
        $query = "  SELECT 
                    a.*,
                    b.name_category
                    
                    FROM $this->table a   
                    LEFT JOIN $this->category b on a.$this->prefix_category = b.$this->prefix_category
                                        
                    WHERE a.statusdata='active' AND a.status_article = 0 
                    ";
            return $this->db->query($query);
    }

    function updatedatalist($id, $record) {
       
            $record['done_by'] = $this->session->userdata('ses_username');
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
      
        $this->db->where($this->prefix_id, $id);
        return $this->db->update($this->table, $record);
    }

}

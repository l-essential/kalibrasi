<?php

class Category_model extends MY_Model {
    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('blog', true);
         $this->table = 'category_article';
         $this->prefix_id = "id_category";
    }

}

<?php

class Revisi extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Revisi Article';
        $this->load->model('blog/Category_model', 'category');
        $this->load->model('blog/Revisi_model', 'revisi');
    }

     public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $rowpreview = $this->modeldata->getbyid_article($id);
        $this->data['preview'] = $rowpreview;
        $this->data['title_update'] =  $row['slug_article'];
        $this->buildcombobox('id_category', 'name_category', $this->category->getAll(), 'edit', $row['id_category']);
       
        parent::edit($id);
    }
    
    // public function Preview($id) {
    //     $rowpreview = $this->modeldata->getbyid_article($id);
    //     $this->data['preview'] = $rowpreview;
    //     $this->load->view($this->view . '/home_preview', $this->data);
         
    // }
    

    public function postdata() {
        $post = $this->input->post();
        if ($post['actiondata'] !== 'delete') {
            if (!isset($post['status_article'])) {
                $post['status_article'] = "9";
            }

            $this->postdatabyparam($post);
        } else {
            parent::postdata();
        }
    }

}

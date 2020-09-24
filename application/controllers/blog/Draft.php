<?php

class Draft extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'List Article';
        $this->load->model('blog/Category_model', 'category');
        $this->load->model('blog/Draft_model', 'draft');
    }

    public function add() {
        $this->buildcombobox('id_category', 'name_category', $this->category->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['title_update'] =  $row['slug_article'];
        $this->buildcombobox('id_category', 'name_category', $this->category->getAll(), 'edit', $row['id_category']);
        $this->data['default']['status_article'] = 1;
        parent::edit($id);
    }

    public function postdata() {
        $post = $this->input->post();
        if ($post['actiondata'] !== 'delete') {
            if (!isset($post['status_article'])) {
                $post['status_article'] = "1";
            }

            $this->postdatabyparam($post);
        } else {
            parent::postdata();
        }
    }

     function setstatuslist() {
        $post = $this->input->post();
        $id = $post['id'];
        if ($post['status'] == '0') {
            $status = '0';
        } else {
            $status = '1';
        }
        
        $record = array(
            'status_article' => $status,
        );
        $this->draft->updatedraft($id, $record);
       
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

}

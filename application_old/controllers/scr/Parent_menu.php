<?php

class Parent_menu extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
    }

    public function index() {
        $this->data['url_status'] = site_url($this->controller . '/setstatus');
        parent::index();
        
    }

    function setstatus() {
        $post = $this->input->post();
        $id = $post['id'];
        $status = $post['status'];
        $record = array(
            "statusdata" => $status
        );
        // var_dump($record);
        // die();
        $this->modeldata->updatedata($id, $record);
        $valid = true;
        $msg = "Insert data,success";
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }


  
    

}

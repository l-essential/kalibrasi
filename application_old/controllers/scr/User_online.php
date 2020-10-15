<?php

class User_online extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->helper(array('string','text'));
        $this->setmodel($this->pathclass."/Useraccess_model#modeldata");
    }

    public function index() {
        $this->data['url_logout'] = site_url($this->controller . '/logout');
        parent::index();
    }

    function logout() {
        $post = $this->input->post();
        $id = $post['id'];
        $user = $post['user'];
        $data = 0;
        $record = array(
            "status_online" => $data
        );
        // var_dump($record);
        // die();
        $this->modeldata->updatedata($id, $record);
        $valid = true;
        $message = "LogOut success";
        $jsonmsg = array("valid" => true, "msg" => "$message");
        echo json_encode($jsonmsg);
    }

}

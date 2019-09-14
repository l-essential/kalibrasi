<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Badanhukum extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Badan Hukum';
    }

    public function add() {
        $this->data['default']["statusbadanhukum"] = '1';
        parent::add();
    }

    public function postdata() {
        $post = $this->input->post();
        if ($post['actiondata'] !== 'delete') {
            if (!isset($post['statusbadanhukum'])) {
                $post['statusbadanhukum'] = "1";
            }

            $this->postdatabyparam($post);
        } else {
            parent::postdata();
        }
    }

}

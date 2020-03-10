<?php

class Department extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Department';
    }

   

    // public function postdata() {
    //     $param = $this->input->post();
    //     if ($param['actiondata'] !== 'delete') {
    //         $this->postdatabyparam($param);
    //     } else {
    //         parent::postdata();
    //     }
    // }

}

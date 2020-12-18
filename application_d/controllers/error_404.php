<?php

class error_404 extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
    }

      public function index() {
       
        $this->load->view('error_404', $this->data);
    }

}

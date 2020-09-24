<?php

class Shortcut extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Shortcut';
    }

    function index(){
        $shortcut  = $this->modeldata->shortcut();
        $this->data['shortcut'] = $shortcut;

        parent:: index();
    }

}

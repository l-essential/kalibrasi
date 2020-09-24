<?php

class Info_tutorial extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Info Tutorial';
    }

}

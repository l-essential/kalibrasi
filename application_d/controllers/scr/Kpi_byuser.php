<?php

class Kpi_byuser extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->helper(array('string','text'));
        $this->setmodel($this->pathclass."/Useraccess_model#modeldata");
    }

}

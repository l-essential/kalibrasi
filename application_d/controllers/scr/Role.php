<?php
class Role extends MY_Controller {

      function __construct() {
         $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Role";
        $this->controller = $this->pathclass .'/Role';
        $this->view = $this->pathclass .'/v_role';
    }

}

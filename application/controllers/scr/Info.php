<?php
class Info extends MY_Controller {

      function __construct() {
         $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
         $this->load->model('Dasboard_model','dsh');
    }

    public function index() {
    $data['total_user'] = $this->dsh->total_user();

    // $data['totaldetail'] = $this->total->total_detail();
    $this->load->view('pages/content',$data);
  }


}

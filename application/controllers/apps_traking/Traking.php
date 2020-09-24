<?php

class Traking extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Icon';
    }

    // public function edit($id) {
    //     $row = $this->modeldata->getby_id_array($id);
    //     $this->data['default']['tanggal_tmt'] = $this->totimeindo($row['tanggal_tmt']);
    //     parent::edit($id);
    // }

    // public function postdata() {
    //     $param = $this->input->post();
    //     if ($param['actiondata'] !== 'delete') {
    //         $param['tanggal_tmt'] = $this->totime($param['tanggal_tmt']);
    //         $this->postdatabyparam($param);
    //     } else {
    //         parent::postdata();
    //     }
    // }

}

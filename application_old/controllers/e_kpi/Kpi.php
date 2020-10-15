<?php


class Kpi extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Position';
    }

     public function add() {
        $this->data['default']['tanggal'] = date("d-m-Y");
        parent::add();
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
        parent::edit($id);
    }

     public function postdata() {
        $post = $this->input->post();
        if ($post['actiondata'] !== 'delete') {
            $post['tanggal'] = date("Y-m-d", strtotime($post['tanggal']));

            if ($post['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($post['tanggal']);
                $temp = "000000" . $counter;
                $nomor = substr($temp, -6);
                $location = 'LC/' . date('Y', strtotime($post['tanggal'])) . "/" . $nomor;
                $post['location_code'] = $location;
            }

            $this->postdatabyparam($post);
        } else {
            parent:: postdata();
        }
    }


}

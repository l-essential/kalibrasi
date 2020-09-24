<?php

class Info_under extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Info Demo';
    }

     public function add() {
        $this->data['file_images'] = '';
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        $this->data['default']['keterangan'] = $row->keterangan;
        parent::edit($id);
    }

}

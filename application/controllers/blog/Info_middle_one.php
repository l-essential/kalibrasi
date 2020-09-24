<?php

class Info_middle_one extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Middle One';
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

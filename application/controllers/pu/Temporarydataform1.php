<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Temporarydataform1 extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->setmodel($this->pathclass . "/Pengajuanbank_model#pengajuanbank");
        $this->title = "Temporary data form 1";
    }

    public function index() {
        $this->buildcombobox('id_t_pengajuanbankheader', 'labeldata', $this->pengajuanbank->getlabelpengajuanbank());
        $this->data['url_griddata'] = site_url($this->controller . '/griddata');
        parent::index();
    }

    public function griddata($id_pengajuanbank_header) {
        $check = $this->modeldata->getGrid($id_pengajuanbank_header);
        if (!is_null($check)) {
            $result = $this->modeldata->getGrid($id_pengajuanbank_header)->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }

}

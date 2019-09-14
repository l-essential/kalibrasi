<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Jeniskpr extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Jenis KPR";
        $this->setmodel("Jenisrumah_model#jenisrumah");
        $this->fieldnotgenerate= array("id_jenisrumah");
    }

    public function add() {
        $this->buildcombobox('id_jenisrumah', 'kode_jenisrumah~nama_jenisrumah', $this->jenisrumah->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_jenisrumah', 'kode_jenisrumah~nama_jenisrumah', $this->jenisrumah->getAll(), 'edit', $row['id_jenisrumah']);
        parent::edit($id);
    }

}

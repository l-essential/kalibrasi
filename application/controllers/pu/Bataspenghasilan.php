<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Bataspenghasilan extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Batasan penghasilan";
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->fieldnotgenerate = array("id_provinsi", "tanggal_tmt");
    }

    public function add() {
        $this->buildcombobox('id_provinsi', 'provinsi', $this->provinsi->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_provinsi', 'provinsi', $this->provinsi->getAll(), 'edit', $row['id_provinsi']);
        $this->data['default']['tanggal_tmt'] = $this->totimeindo($row['tanggal_tmt']);
        $this->data['default']['readonly_tanggal_tmt'] = 'readonly';
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tanggal_tmt'] = $this->totime($param['tanggal_tmt']);
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

}

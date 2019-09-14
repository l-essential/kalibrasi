<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pengajuanbank extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Pengajuan Bank";
        $this->setmodel($this->pathclass . "/Bank_model#bank");
        $this->fieldnotgenerate = array("tanggal_surat", "daritanggal","sampaitanggal","id_bankquotatahunan");
    }

    public function add() {
        $this->buildcomboboxstatic(array("1#Anuitas", "2#Efektivitas"), 'jenisperhitungan');
        $this->buildcomboboxstatic(array("1#Ya", "0#Tidak"), 'cek_dukcapil');
        $this->data['id_bankquotatahunan'] =0;
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['id_bankquotatahunan'] =$row['id_bankquotatahunan'];
        $this->buildcomboboxstatic(array("1#Anuitas", "2#Efektivitas"), 'jenisperhitungan','edit',$row['jenisperhitungan']);
        $this->buildcomboboxstatic(array("1#Ya", "0#Tidak"), 'cek_dukcapil','edit',$row['cek_dukcapil']);
        $this->data['default']['tanggal_surat'] = $this->totimeindo($row['tanggal_surat']);
        $this->data['default']['daritanggal'] = $this->totimeindo($row['daritanggal']);
        $this->data['default']['sampaitanggal'] = $this->totimeindo($row['sampaitanggal']);
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tanggal_surat'] = $this->totime($param['tanggal_surat']);
            $param['daritanggal'] = $this->totime($param['daritanggal']);
            $param['sampaitanggal'] = $this->totime($param['sampaitanggal']);
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

}

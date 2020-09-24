<?php

class Capa_preventive extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Preventive';
        $this->load->model('scr/Useraccess_model', 'scr');
    }

    public function index() {
        $this->data['url_index'] = site_url("e01/approve");
        parent::index();
        
    }

    public function add($id) {
        $this->iddata = $id;
        $this->data['id_formulir'] =$this->iddata;
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->scr->getAll());
        $this->data['file_images'] = '';
        $this->data['url_back'] = site_url("e01/Formulir/edit/$id");
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        parent::add();
    }

    public function postdata() {
        $param = $this->input->post();
        $param['preventive_duedate'] = $this->totime($param['preventive_duedate']);
        $param['preventive_pic'] =  json_encode(implode(", ", $param['preventive_pic']));
      
        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'preventive_act');
    }
   
}
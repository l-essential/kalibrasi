<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->infoheader = 'provinsi'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
    }

    public function add() {
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $this->iddata = $id;
        $this->extenddata();
        parent::edit($id);
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function home_detail($id_header) {
        $this->data['url_datakodepos'] = site_url($this->controller . '/datakodepos');
        parent::home_detail($id_header);
    }

    public function extenddetail() {
        $this->data['url_getdatakecamatan'] = site_url($this->controller . '/getdatakecamatan');
        $this->data['url_home_kecamatan'] = site_url($this->controller . '/home_kecamatan');
    }

    public function extendkecamatan() {
        $this->data['url_getdatadesa'] = site_url($this->controller . '/getdatadesa');
        $this->data['url_home_desa'] = site_url($this->controller . '/home_desa');
    }

    public function getdatakecamatan() {
        $param = $this->input->post();
        $id_kota = $param["$this->prefix_id_detail"];
        $result = $this->modeldata->getby_id_detail_array($id_kota);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }
    public function getdatadesa() {
        $param = $this->input->post();
        $id_kecamatan = $param["id_kecamatan"];
        $result = $this->modeldata->getby_id_kecamatan($id_kecamatan);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function home_kecamatan($id_kota) {
        $rowkota = $this->modeldata->getby_id_detail_array($id_kota);
        $this->data['title'] = "Data Kecamatan untuk  " . $rowkota['kota'];
        $this->data['prefix_id'] = $this->modeldata->prefix_kecamatan;
        ;
        $this->data['url_grid'] = site_url($this->controller . "/grid_kecamatan/$id_kota");
        $this->data['url_add'] = site_url($this->controller . "/add_kecamatan/$id_kota");
        $this->data['url_edit'] = site_url($this->controller . "/edit_kecamatan");
        $this->data['url_delete'] = site_url($this->controller . "/postdatakecamatan");
        $this->data['url_back'] = site_url($this->controller . '/edit_detail/' . $rowkota['id_provinsi']);
        $this->load->view($this->view . '/home_kecamatan', $this->data);
    }

    public function add_kecamatan($id_kota) {
        $rowkota = $this->modeldata->getby_id_detail_array($id_kota);
        $this->data['title'] = "Create - Kecamatan untuk " . $rowkota['kota'];
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_kecamatan;
        $this->data['id_kota'] = $id_kota;
        $this->data['url_post'] = site_url($this->controller . '/postdatakecamatan');
        $this->data['url_index'] = site_url($this->controller . "/edit_detail/$id_kota");
        $this->extendkecamatan();
        $this->load->view($this->view . '/form_kecamatan', $this->data);
    }

    public function edit_kecamatan($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_kecamatan($this->iddata);
        $id_kota = $row->id_kota;
        $rowkota = $this->modeldata->getby_id_detail_array($id_kota);
        $this->data['title'] = "Update - Kecamatan untuk " . $rowkota['kota'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_kecamatan;
        $this->data['id_kota'] = $id_kota;
        $this->data['default']['kode_kecamatan'] = $row->kode_kecamatan;
        $this->data['default']['nama_kecamatan'] = $row->nama_kecamatan;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatakecamatan');
        $this->data['url_index'] = site_url($this->controller . "/edit_detail/$id_kota");
        $this->extendkecamatan();
        $this->load->view($this->view . '/form_kecamatan', $this->data);
    }

    public function postdatakecamatan() {
        $param = $this->input->post();
        $actiondata = $param['actiondatadetail'];

        if (isset($param['dataintable_length'])) {
            unset($param['dataintable_length']);
        }

        switch ($actiondata) {
            case "create":
                $checkdata = $this->modeldata->getkecamataninkota($param['id_kota'], $param['kode_kecamatan']);
                if (empty($checkdata)) {
                    $record = array(
                        "id_kota" => $param['id_kota'],
                        "kode_kecamatan" => $param['kode_kecamatan'],
                        "nama_kecamatan" => $param['nama_kecamatan']
                    );
                   $id_kecamatan= $this->modeldata->insertkecamatan($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $id_kecamatan =0;
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id_kecamatan = $param['id_kecamatan'];
                $record = array(
                    "kode_kecamatan" => $param['kode_kecamatan'],
                    "nama_kecamatan" => $param['nama_kecamatan']
                );
                $this->modeldata->updatekecamatan($id_kecamatan, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_kecamatan = $param['id_kecamatan'];
                $this->modeldata->deletekecamatan($id_kecamatan);
                $valid = true;
                $message = "Data success deleted";
                break;
            default:
                $id_kecamatan =0;
                $valid = false;
                $message = "No action";
                break;
        }
        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
            "ref_id" => $id_kecamatan,
        ));
    }

    public function grid_kecamatan($id_kota) {
        $check = $this->modeldata->GridDatakecamatan($id_kota);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDatakecamatan($id_kota)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_detail($id_header) {
        $this->extenddetail();
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $this->extenddetail();
        parent::edit_detail($id);
    }

    public function home_desa($id_kecamatan) {
        $rowheader = $this->modeldata->getby_id_kecamatan($id_kecamatan);
        $this->data['title'] = "Data Desa untuk  " . $rowheader->nama_kecamatan;
        $this->data['prefix_id'] = $this->modeldata->prefix_desa;
        $this->data['url_grid'] = site_url($this->controller . "/grid_desa/$id_kecamatan");
        $this->data['url_add'] = site_url($this->controller . "/add_desa/$id_kecamatan");
        $this->data['url_edit'] = site_url($this->controller . "/edit_desa");
        $this->data['url_delete'] = site_url($this->controller . "/postdatadesa");
        $this->data['url_back'] = site_url($this->controller . '/edit_kecamatan/' . $rowheader->id_kecamatan);
        $this->load->view($this->view . '/home_desa', $this->data);
    }

    public function grid_desa($id_kota) {
        $check = $this->modeldata->GridDatadesa($id_kota);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDatadesa($id_kota)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_desa($id_kecamatan) {
        $rowheader = $this->modeldata->getby_id_kecamatan($id_kecamatan);
        $this->data['title'] = "Create - Desa untuk " . $rowheader->nama_kecamatan;
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_desa;
        $this->data['id_kecamatan'] = $id_kecamatan;
        $this->data['url_post'] = site_url($this->controller . '/postdatadesa');
        $this->data['url_index'] = site_url($this->controller . "/edit_kecamatan/$id_kecamatan");
        $this->load->view($this->view . '/form_desa', $this->data);
    }

    public function edit_desa($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_desa($this->iddata);
        $id_kecamatan = $row->id_kecamatan;
        $rowheader = $this->modeldata->getby_id_kecamatan($id_kecamatan);
        $this->data['title'] = "Update - Desa untuk " . $rowheader->nama_kecamatan;
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_desa;
        $this->data['id_kecamatan'] = $id_kecamatan;
        $this->data['default']['kode_desa'] = $row->kode_desa;
        $this->data['default']['nama_desa'] = $row->nama_desa;
        $this->data['default']['kodepos'] = $row->kodepos;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatadesa');
        $this->data['url_index'] = site_url($this->controller . "/edit_kecamatan/$id_kecamatan");
        $this->load->view($this->view . '/form_desa', $this->data);
    }

    public function postdata() {
        $param = $this->input->post();

        if ($param['actiondata'] !== 'delete') {
            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
                $this->postdatabyparam($param);
            }
        } else {
            parent::postdata();
        }
    }

    public function postdatadesa() {
        $param = $this->input->post();
        $actiondata = $param['actiondatadetail'];

        if ($actiondata !== 'delete') {
            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
            }
        }

        switch ($actiondata) {
            case "create":
                $checkkodepos = $this->modeldata->checkkodepos($param['kodepos']);
                if (empty($checkkodepos)) {
                    $checkdata = $this->modeldata->getdesainkecamatan($param['id_kecamatan'], $param['kode_desa']);
                    if (empty($checkdata)) {
                        $record = array(
                            "id_kecamatan" => $param['id_kecamatan'],
                            "kode_desa" => $param['kode_desa'],
                            "nama_desa" => $param['nama_desa'],
                            "kodepos" => $param['kodepos']
                        );
                        $this->modeldata->insertdesa($record);
                        $v = true;
                        $m = "Data success created";
                    } else {
                        $v = false;
                        $m = "Data sudah ada";
                    }                    
                    $valid = $v;
                    $message = $m;
                }else{
                    $valid=false;
                    $message="Kodepos sudah ada";
                }
                break;
            case "update":
                $id_desa = $param['id_desa'];
                $record = array(
                    "kode_desa" => $param['kode_desa'],
                    "nama_desa" => $param['nama_desa'],
                    "kodepos" => $param['kodepos']
                );
                $this->modeldata->updatedesa($id_desa, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_desa = $param['id_desa'];
                $this->modeldata->deletedesa($id_desa);
                $valid = true;
                $message = "Data success deleted";
                break;

            default:
                $valid = false;
                $message = "No action";
                break;
        }
        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
        ));
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['provinsi'];
        $result = $this->modeldata->getby_name('provinsi', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['dataintable_length'])) {
            unset($param['dataintable_length']);
        }

        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'kota');
    }

}

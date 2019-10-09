<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Batashargajualrumahpengecualian extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Batasan harga jual rumah pengecualian";
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->fieldnotgenerate = array("id_provinsi", "tanggal_tmt", "id_kota", "id_kecamatan", "id_desa");
    }

    public function add() {
        $this->buildcombobox('id_provinsi', 'provinsi', $this->provinsi->getAll());
        $this->data['id_kota'] = 0;
        $this->data['id_kecamatan'] = 0;
        $this->data['id_desa'] = 0;
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_provinsi', 'provinsi', $this->provinsi->getAll(), 'edit', $row['id_provinsi']);
        $this->data['default']['tanggal_tmt'] = $this->totimeindo($row['tanggal_tmt']);
        $this->data['default']['readonly_tanggal_tmt'] = 'readonly';
        $this->data['id_kota'] = $row['id_kota'];
        $this->data['id_kecamatan'] = $row['id_kecamatan'];
        $this->data['id_desa'] = $row['id_desa'];
        parent::edit($id);
    }

    public function getlevelsub($param) {
        $is_kota = 0;
        $is_kecamatan = 0;
        $is_desa = 0;

        if (isset($param['id_kota'])) {
            if (!empty($param['id_kota'] && $param['id_kota'] > 0)) {
                $is_kota = $param['id_kota'];
            }
        }

        if (isset($param['id_kecamatan'])) {
            if (!empty($param['id_kecamatan'] && $param['id_kecamatan'] > 0)) {
                $is_kecamatan = $param['id_kecamatan'];
            }
        }

        if (isset($param['id_desa'])) {
            if (!empty($param['id_desa'] && $param['id_desa'] > 0)) {
                $is_desa = $param['id_desa'];
            }
        }

        if ($is_kota > 0 && $is_kecamatan > 0 && $is_desa > 0) {
            $levelsub = 4;
        } else if ($is_kota > 0 && $is_kecamatan > 0 && $is_desa == 0) {
            $levelsub = 3;
        } else if ($is_kota > 0 && $is_kecamatan == 0 && $is_desa == 0) {
            $levelsub = 2;
        } else if ($is_kota == 0 && $is_kecamatan == 0 && $is_desa == 0) {
            $levelsub = 1;
        }

        return array(
            "levelsub" => $levelsub,
            "id_kota" => $is_kota,
            "id_kecamatan" => $is_kecamatan,
            "id_desa" => $is_desa,
        );
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tanggal_tmt'] = $this->totime($param['tanggal_tmt']);
            $validate = $this->getlevelsub($param);
            $param['levelsub'] = $validate['levelsub'];

            if ($param['actiondata'] == 'create') {
                $checkdata = $this->modeldata->getbyarray(array(
                    "id_provinsi" => $param['id_provinsi'],
                    "id_kota" => $validate['id_kota'],
                    "id_kecamatan" => $validate['id_kecamatan'],
                    "id_desa" => $validate['id_desa'],
                    "tanggal_tmt" => $param['tanggal_tmt'],
                ));
                if (empty($checkdata)) {
                    $record = array(
                        "id_provinsi" => $param['id_provinsi'],
                        "id_kota" => $validate['id_kota'],
                        "id_kecamatan" => $validate['id_kecamatan'],
                        "id_desa" => $validate['id_desa'],
                        "tanggal_tmt" => $param['tanggal_tmt'],
                        "harga_perm2" => $param['harga_perm2'],
                        "batasnilai_rumahtapak" => $param['batasnilai_rumahtapak'],
                        "batasnilai_rumahsusun" => $param['batasnilai_rumahsusun'],
                        "batasnilai_penghasilantapak" => $param['batasnilai_penghasilantapak'],
                        "batasnilai_penghasilansusun" => $param['batasnilai_penghasilansusun'],
                        "batasnilai_penghasilantapak_suamiistri" => $param['batasnilai_penghasilantapak_suamiistri'],
                        "batasnilai_penghasilansusun_suamiistri" => $param['batasnilai_penghasilansusun_suamiistri'],
                    );
                    $this->modeldata->insertdata($record);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    $valid = false;
                    $msg = "Data already exist";
                }
                $this->dj(array(
                    "valid" => $valid,
                    "msg" => $msg,
                ));
                exit;
            } else {
                $this->postdatabyparam($param);
            }
        } else {
            parent::postdata();
        }
    }

}

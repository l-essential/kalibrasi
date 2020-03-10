<?php

class Combobox extends MY_Controller
{

    public function getdynamic_bankquota()
    {
        $param = $_REQUEST;
        $this->setmodel("pu/Bank_model#modeldata");
        $valid = false;
        $msg = "No data found";
        $data = "";
        $result = $this->modeldata->getbankquota();
        if ($result) {
            $valid = true;
            $msg = "Result data founds";
            $data = $result;
        }
        $this->dj(array(
            'valid' => $valid,
            'message' => $valid,
            'data' => $data,
        ));
    }
    public function getdynamic_desa()
    {
        $param = $_REQUEST;
        $this->setmodel("pu/Provinsi_model#modeldata");
        $valid = false;
        $msg = "No data found";
        $data = "";
        $result = $this->modeldata->getdesa($param['id_kecamatan']);
        if ($result) {
            $valid = true;
            $msg = "Result data founds";
            $data = $result;
        }
        $this->dj(array(
            'valid' => $valid,
            'message' => $valid,
            'data' => $data,
        ));
    }

    public function getdynamic_kecamatan()
    {
        $param = $_REQUEST;
        $this->setmodel("pu/Provinsi_model#modeldata");
        $valid = false;
        $msg = "No data found";
        $data = "";
        $result = $this->modeldata->getkecamatan($param['id_kota']);
        if ($result) {
            $valid = true;
            $msg = "Result data founds";
            $data = $result;
        }
        $this->dj(array(
            'valid' => $valid,
            'message' => $valid,
            'data' => $data,
        ));
    }

    public function getdynamic_kotakabupaten()
    {
        $param = $_REQUEST;
        $this->setmodel("pu/Provinsi_model#modeldata");
        $valid = false;
        $msg = "No data found";
        $data = "";
        $result = $this->modeldata->getkotakabupaten($param['id_provinsi']);
        if ($result) {
            $valid = true;
            $msg = "Result data founds";
            $data = $result;
        }
        $this->dj(array(
            'valid' => $valid,
            'message' => $valid,
            'data' => $data,
        ));
    }

     public function getdynamic_karyawan()
    {
        $param = $_REQUEST;
        $this->setmodel("pu/Karyawan_model#modeldata");
        $valid = false;
        $msg = "No data found";
        $data = "";
        $result = $this->modeldata->getkaryawan();
        if ($result) {
            $valid = true;
            $msg = "Result data founds";
            $data = $result;
        }
        $this->dj(array(
            'valid' => $valid,
            'message' => $valid,
            'data' => $data,
        ));
    }
}

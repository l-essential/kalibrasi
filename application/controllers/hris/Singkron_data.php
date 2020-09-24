<?php

class Department extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Department';
    }

    public function generatedatafromtmp() {
        $resultprovinsi = $this->modeldata->gettmp_provinsi();
        if ($resultprovinsi) {
            $array_provinsi = array();
            foreach ($resultprovinsi as $rowprovinsi) {
                $kode_provinsi = $rowprovinsi['kode_provinsi'];
                $nama_provinsi = $rowprovinsi['nama_provinsi'];
                $rowdata_provinsi = $this->modeldata->getdata_bykode_provinsi($kode_provinsi);
                if (empty($rowdata_provinsi)) {
                    $array_provinsi[] = array(
                        "kode_provinsi" => $kode_provinsi,
                        "provinsi" => $nama_provinsi,
                        "createby" => $this->userid,
                        "createtime" => $this->curdatetime,
                    );
                }
            }

            if (!empty($array_provinsi)) {
                $this->modeldata->insertdata_batch_provinsi($array_provinsi);
            }
        }
    }

}

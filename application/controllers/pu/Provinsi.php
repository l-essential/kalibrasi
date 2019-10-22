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

            $resultkabkota = $this->modeldata->gettmp_kabkota();
            if ($resultkabkota) {
                $array_kabkota = array();
                foreach ($resultkabkota as $rowkabkota) {
                    $kode_provinsi = $rowkabkota['kode_provinsi'];
                    $kode_kabkota = $rowkabkota['kode_kabkota'];
                    $nama_kabkota = $rowkabkota['nama_kabkota'];
                    $rowdata_kabkota = $this->modeldata->getdata_bykode_kabkota($kode_kabkota);
                    if (empty($rowdata_kabkota)) {
                        $dataprovinsi = $this->modeldata->getdata_bykode_provinsi($kode_provinsi);
                        if ($dataprovinsi) {
                            $id_provinsi = $dataprovinsi->id_provinsi;
                            $array_kabkota[] = array(
                                "id_provinsi" => $id_provinsi,
                                "kode_kota" => $kode_kabkota,
                                "kota" => $nama_kabkota,
                                "createby" => $this->userid,
                                "createtime" => $this->curdatetime,
                            );
                        }
                    }
                }
                if (!empty($array_kabkota)) {
                    $this->modeldata->insertdata_batch_kabkota($array_kabkota);
                }

                $resultkecamatan = $this->modeldata->gettmp_kacamatan();
                if ($resultkecamatan) {
                    $array_kecamatan = array();
                    foreach ($resultkecamatan as $rowkecamatan) {
                        $kode_provinsi = $rowkecamatan['kode_provinsi'];
                        $kode_kabkota = $rowkecamatan['kode_kabkota'];
                        $kode_kecamatan = $rowkecamatan['kode_kecamatan'];
                        $nama_kecamatan = $rowkecamatan['nama_kecamatan'];

                        $dataprovinsi = $this->modeldata->getdata_bykode_provinsi($kode_provinsi);
                        $id_provinsi = $dataprovinsi->id_provinsi;
                        $datakabkota = $this->modeldata->getdata_byprovinsikode_kabkota($id_provinsi, $kode_kabkota);
                        if ($datakabkota) {
                            $rowdata_kecamatan = $this->modeldata->getdata_bykode_kecamatan($kode_kecamatan);
                            if (empty($rowdata_kecamatan)) {
                                $id_kota = $datakabkota->id_kota;
                                $array_kecamatan[] = array(
                                    "id_kota" => $id_kota,
                                    "kode_kecamatan" => $kode_kecamatan,
                                    "nama_kecamatan" => $nama_kecamatan,
                                    "createby" => $this->userid,
                                    "createtime" => $this->curdatetime,
                                );
                            }
                        }
                    }

                    if (!empty($array_kecamatan)) {
                        $this->modeldata->insertdata_batch_kecamatan($array_kecamatan);
                    }
                }

                $resultdesa = $this->modeldata->gettmp_desa();
                if ($resultdesa) {
                    $array_desa = array();
                    foreach ($resultdesa as $rowdesa) {
                        $kode_provinsi = $rowdesa['kode_provinsi'];
                        $kode_kabkota = $rowdesa['kode_kabkota'];
                        $kode_kecamatan = $rowdesa['kode_kecamatan'];
                        $kode_desa = $rowdesa['kode_desa'];
                        $nama_desa = $rowdesa['nama_desa'];
                        $kodepos = $rowdesa['kodepos'];

                        $dataprovinsi = $this->modeldata->getdata_bykode_provinsi($kode_provinsi);
                        $id_provinsi = $dataprovinsi->id_provinsi;
                        $datakabkota = $this->modeldata->getdata_byprovinsikode_kabkota($id_provinsi, $kode_kabkota);
                        $id_kota = $datakabkota->id_kota;
                        $datakecamatan = $this->modeldata->getdata_bykabkotakode_kecamatan($id_kota, $kode_kecamatan);
                        if ($datakecamatan) {
                            $id_kecamatan = $datakecamatan->id_kecamatan;
                            $rowdata_desa1 = $this->modeldata->getdata_bykode_desa($kode_desa);
                            $rowdata_desa2 = $this->modeldata->getdata_bykode_kodepos($kodepos);
                            if(empty($rowdata_desa1) && empty($rowdata_desa2)){
                                $array_desa[] = array(
                                    "id_kecamatan"=>$id_kecamatan,
                                    "kode_desa"=>$kode_desa,
                                    "nama_desa"=>$nama_desa,
                                    "kodepos"=>$kodepos,
                                    "createby" => $this->userid,
                                    "createtime" => $this->curdatetime,
                                );
                                
                            }
                        }
                    }
                    if (!empty($array_desa)) {
                        $this->modeldata->insertdata_batch_desa($array_desa);
                    }
                }
            }
        }
        return true;
    }

    public function importdata() {
        $param = $this->input->post();
        if (isset($param['formdata'])) {
            $path = "public/uploads/" . strtolower($this->controller);
            $config['upload_path'] = "./" . $path;
            $config['allowed_types'] = 'xlsx|xls';
            $config['encrypt_name'] = FALSE;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $starttime = date('d-m-Y H:i:s');
            if ($this->upload->do_upload("uploadfile")) {

                $data = array('upload_data' => $this->upload->data());
                $file_ext = $data['upload_data']['file_ext'];
                $full_path = $data['upload_data']['full_path'];
                ini_set("memory_limit", "-1");
                ini_set('max_execution_time', 0);

                $pathcsv = getcwd() . '/public/csv/' . strtolower($this->controller);

                include APPPATH . 'third_party/PHPExcel.php';
                include APPPATH . 'third_party/PHPExcel/IOFactory.php';
                if ($file_ext == '.xls') {
                    $objReader = new PHPExcel_Reader_Excel5();
                    $msg = "file excel 2003 berhasil di import";
                } else {
                    $objReader = new PHPExcel_Reader_Excel2007();
                    $msg = "file excel 2007 berhasil di import";
                }

                $objReader->setReadDataOnly(true);
                $objPHPExcel = $objReader->load($full_path);
                $loadedSheetNames = $objPHPExcel->getSheetNames();
                $sheetCount = $objPHPExcel->getSheetCount();
                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
                $objWriter->setDelimiter('~');
                ini_set("memory_limit", "-1");
                ini_set('max_execution_time', 0);
                foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) {
                    if ($sheetIndex == 0) {
                        $objWriter->setSheetIndex($sheetIndex);
                        $filecsv = $pathcsv . '/' . $loadedSheetName . '.csv';
                        $objWriter->save($filecsv);
                    }
                }

                $startfrom = 1;
                $counter = 0;
                $this->modeldata->truncate_tmp();
                $file_linescsv = file($filecsv);
                $arraydata = array();
                foreach ($file_linescsv as $line_csv) {
                    if ($counter >= $startfrom) {
                        $listkolom = explode("~", $line_csv);
                        $kode_provinsi = ltrim(rtrim(trim(str_replace('"', "", $listkolom[0]))));
                        $nama_provinsi = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                        $kode_kabkota = ltrim(rtrim(trim(str_replace('"', "", $listkolom[2]))));
                        $nama_kabkota = ltrim(rtrim(trim(str_replace('"', "", $listkolom[3]))));
                        $kode_kecamatan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[4]))));
                        $nama_kecamatan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[5]))));
                        $kode_desa = ltrim(rtrim(trim(str_replace('"', "", $listkolom[6]))));
                        $nama_desa = ltrim(rtrim(trim(str_replace('"', "", $listkolom[7]))));
                        $kodepos = ltrim(rtrim(trim(str_replace('"', "", $listkolom[8]))));
                        $arraydata[] = array(
                            "kode_provinsi" => $kode_provinsi,
                            "nama_provinsi" => $nama_provinsi,
                            "kode_kabkota" => $kode_kabkota,
                            "nama_kabkota" => $nama_kabkota,
                            "kode_kecamatan" => $kode_kecamatan,
                            "nama_kecamatan" => $nama_kecamatan,
                            "kode_desa" => $kode_desa,
                            "nama_desa" => $nama_desa,
                            "kodepos" => $kodepos,
                            "createby" => $this->userid,
                            "createtime" => $this->curdatetime,
                        );
                    }
                    $counter++;
                }

                if (!empty($arraydata)) {
                    $this->modeldata->insert_tmp($arraydata);
                    $this->generatedatafromtmp();
                }


                $endtime = date('d-m-Y H:i:s');
                $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
                $jam = $diff->h;
                $menit = $diff->i;
                $detik = $diff->s;
                $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
                $valid = true;
                $message = "Generate data kodepos selesai, " . $lamaproses;
            } else {
                $error = $this->upload->display_errors();
                $endtime = date('d-m-Y H:i:s');
                $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
                $jam = $diff->h;
                $menit = $diff->i;
                $detik = $diff->s;
                $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
                $valid = false;
                $message = "Generate data kodepos gagal,pesan error " . $error . ' , ' . $lamaproses;
            }
            $this->dj(array(
                "valid" => $valid,
                "message" => $message
            ));
        }
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
                    $id_kecamatan = $this->modeldata->insertkecamatan($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $id_kecamatan = 0;
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
                $id_kecamatan = 0;
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
                } else {
                    $valid = false;
                    $message = "Kodepos sudah ada";
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

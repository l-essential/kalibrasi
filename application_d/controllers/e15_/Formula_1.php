<?php


class Formula_1 extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->infoheader = 'no_formula'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
        $this->title = 'Formuala Notifikasi Produk';
    }

    public function index() {
        $this->data['url_disetujui'] = site_url($this->controller . "/getdisetujui");
        $this->data['url_diterima'] = site_url($this->controller . "/getditerima");
        $this->data['url_diketahui'] = site_url($this->controller . "/getdiketahui");
        $this->data['url_preview'] = site_url($this->controller . "/preview");
        parent::index();
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

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tgl_berlaku'] = date("Y-m-d", strtotime($param['tgl_berlaku']));

            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['tgl_berlaku']);
                $temp = "000" . $counter;
                $nomor = substr($temp, -2);
                $no_document = 'RNDK-F/'. date('Y', strtotime($param['tgl_berlaku'])). "/".$nomor;
                $param['no_document'] = $no_document;
            }
            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
            }
            if (isset($param['dataintable_formula2_length'])) {
                unset($param['dataintable_formula2_length']);
            }
            
            if (isset($param['id'])) {
                unset($param['id']);
            }
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
        $this->data['url_homeprosedur'] = site_url($this->controller . '/home_prosedur');
        $this->data['url_homeformula_2'] = site_url($this->controller . '/home_formulir_2');
    }

     //             Prosedur Pemakaian
    public function home_prosedur($formula_id) {
        $rowformula = $this->modeldata->getby_id_array($formula_id);
        $this->data['prefix_id_prosedur'] = 'formula_prosedur_2';
        $this->data['url_gridprosedur'] = site_url($this->controller . "/grid_prosedur/$formula_id");
        $this->data['url_addprosedur'] = site_url($this->controller . "/add_prosedur/$formula_id");
        $this->data['url_importprosedur'] = site_url($this->controller . "/importdata_prosedur/$formula_id");
        $this->data['url_editprosedur'] = site_url($this->controller . "/edit_prosedur");
        $this->data['url_deleteprosedur'] = site_url($this->controller . "/postdataprosedur");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowformula['formula_id_H']);
        $this->load->view($this->view . '/home_prosedur', $this->data);
    }

    public function grid_prosedur($formula_id) {
        $check = $this->modeldata->GridDataprosedur($formula_id);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataprosedur($formula_id)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_prosedur($formula_id) {
        $row = $this->modeldata->getby_id_array($formula_id);
        $this->data['title'] = 'Add Data Prosedur ';
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_prosedur;
        $this->data['formula_id'] = $formula_id;
        $this->data['url_post'] = site_url($this->controller . '/postdataprosedur');
        $this->data['url_index'] = site_url($this->controller . "/edit/$formula_id");
        $this->load->view($this->view . '/form_prosedur', $this->data);
    }

    public function edit_prosedur($id) {
        $this->data['title'] = 'Add Data Prosedur ';
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_prosedur($this->iddata);
        $formula_id = $row->formula_id_H;
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_prosedur;
        $this->data['formula_id'] = $formula_id;
        $this->data['default']['no'] = $row->no;
        $this->data['default']['prosedur_pembuatan'] = $row->prosedur_pembuatan;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataprosedur');
        $this->data['url_index'] = site_url($this->controller . "/edit/$formula_id");
        $this->load->view($this->view . '/form_prosedur', $this->data);
    }

    public function postdataprosedur() {
        $param = $this->input->post();
        $actiondata = $param['actiondataprosedur'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "formula_id_H" => $param['formula_id_H'],
                        "no"         => $param['no'],
                        "prosedur_pembuatan" => $param['prosedur_pembuatan'],
                    );
                    $this->modeldata->insert_prosedur($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $prosedur_id = $param['formula_prosedur_2'];
                $record = array(
                        "no"         => $param['no'],
                        "prosedur_pembuatan" => $param['prosedur_pembuatan'],
                );
                $this->modeldata->update_prosedur($prosedur_id, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $prosedur_id = $param['formula_prosedur_2'];
                $this->modeldata->delete_prosedur($prosedur_id);
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
        $checkfield = $param['no_formula'];
        $result = $this->modeldata->getby_name('no_formula', $checkfield);
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
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'no_formula');
    }

    public function home_detail($id_header) { 
        $rowkomposisi = $this->modeldata->getby_id_array($id_header);
        $this->data['url_import_komposisi'] = site_url($this->controller . "/importdata_komposisi/$id_header");
        parent::home_detail($id_header);
    }

    

    //             Formula 2
    public function home_formulir_2($id_header) {
        $rowformula = $this->modeldata->getby_id_array($id_header);
        $this->data['title'] = "Data Suku Bunga untuk  " . $rowformula['no_formula'];
        $this->data['prefix_id_formula_2'] = 'formula_id_2';
        $this->data['url_grid_formula_2'] = site_url($this->controller . "/grid_formula_2/$id_header");
        $this->data['url_add_formulir_2'] = site_url($this->controller . "/add_formulir_2/$id_header");
        $this->data['url_edit_formula_2'] = site_url($this->controller . "/edit_formula_2");
        $this->data['url_delete_formula_2'] = site_url($this->controller . "/postdataformula_2");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowformula['formula_id_H']);
        $this->load->view($this->view . '/home_formulir_2', $this->data);
    }

    public function grid_formula_2($id_header) {
        $check = $this->modeldata->GridDataformula_2($id_header);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataformula_2($id_header)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_formulir_2($formula_id) {
        $rowbank = $this->modeldata->getby_id_array($formula_id);
        $row = $this->modeldata->getby_id_array($formula_id);
        $this->data['no_formula'] = $row['no_formula'];
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_bunga;
        $this->data['formula_id_h'] = $formula_id;
        $this->data['url_post'] = site_url($this->controller . '/postdataformula_2');
        $this->data['url_index'] = site_url($this->controller . "/edit/$formula_id");
        $this->load->view($this->view . '/form_formula2', $this->data);
    }

    public function edit_formula_2($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_formula2($this->iddata);
        $formula_id = $row->formula_id_h;
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_formula_2;
        $this->data['formula_id_h'] = $formula_id;
        $this->data['default']['prosedur_pembuatan'] = $row->prosedur_pembuatan;
        $this->data['default']['klaim_produk'] = $row->klaim_produk;
        $this->data['default']['cara_pakai'] = $row->cara_pakai;
        $this->data['default']['perhatian'] = $row->perhatian;
        $this->data['default']['catataan'] = $row->catataan;
        $this->data['default']['keterangan'] = $row->catataan;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataformula_2');
        $this->data['url_index'] = site_url($this->controller . "/edit/$formula_id");
        $this->load->view($this->view . '/form_formula2', $this->data);
    }

    public function postdataformula_2() {
        $param = $this->input->post();
        $actiondata = $param['actiondatarca'];

        switch ($actiondata) {
            case "create":
                // $checkdata = $this->modeldata->getbungainbank($param['formula_id_h'], $param['periode']);
                // $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
                // $tmp = explode("-", $periodedate);

                if (empty($checkdata)) {
                    $record = array(
                        "formula_id_H"       => $param['formula_id_h'],
                        "no_formula"         => $param['no_formula'],
                        "prosedur_pembuatan" => $param['prosedur_pembuatan'],
                        "klaim_produk"       => $param['klaim_produk'],
                        "cara_pakai"         => $param['cara_pakai'],
                        "perhatian"          => $param['perhatian'],
                        "catataan"           => $param['catataan'],
                    );
                    $this->modeldata->insert_formula2($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
                $tmp = explode("-", $periodedate);

                $id_bankbunga = $param['id_bankbunga'];
                $record = array(
                    "nilaibunga" => $param['nilaibunga'],
                    "periode" => $periodedate,
                    "tahun" => $tmp[0],
                    "bulan" => $tmp[1]
                );
                $this->modeldata->updatebunga($id_bankbunga, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_bankbunga = $param['id_bankbunga'];
                $this->modeldata->deletebunga($id_bankbunga);
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

    // function getdisetujui() {
    //     $post = $this->input->post();
    //     $id = $post['id'];
    //     // var_dump($checkdata);
    //     // die();
    //     if (empty($checkdata)) {
    //                 $record = array(
    //                     'disetujui_oleh'  => $this->session->userdata('ses_namaKaryawan')
    //                 );
    //         $this->modeldata->updatedata($id,$record);
    //         $valid = true;
    //         $message = "Data success created";
    //     } else {
    //         $valid = false;
    //         $message = "Data already exist";
    //     }

    //     $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
    //         echo json_encode($jsonmsg);
    // }

    // function getditerima() {
    //     $post = $this->input->post();
    //     $id = $post['id'];
    //     // var_dump($checkdata);
    //     // die();
    //     if (empty($checkdata)) {
    //                 $record = array(
    //                     'diterima_oleh'  => $this->session->userdata('ses_namaKaryawan')
    //                 );
    //         $this->modeldata->updatedata($id,$record);
    //         $valid = true;
    //         $message = "Data success created";
    //     } else {
    //         $valid = false;
    //         $message = "Data already exist";
    //     }

    //     $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
    //         echo json_encode($jsonmsg);
    // }

    // function getdiketahui() {
    //     $post = $this->input->post();
    //     $id = $post['id'];
    //     // var_dump($checkdata);
    //     // die();
    //     if (empty($checkdata)) {
    //                 $record = array(
    //                     'diketahui_oleh'  => $this->session->userdata('ses_namaKaryawan')
    //                 );
    //         $this->modeldata->updatedata($id,$record);
    //         $valid = true;
    //         $message = "Data success created";
    //     } else {
    //         $valid = false;
    //         $message = "Data already exist";
    //     }

    //     $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
    //         echo json_encode($jsonmsg);
    // }

    public function Preview($id) {
        $rowpreview = $this->modeldata->getbyid_preview($id);
        $rowdetail = $this->modeldata->Get_detail($id);
        $rowprosedur = $this->modeldata->Get_prosedur($id);
        $rowformula2 = $this->modeldata->get_formula2($id);
        // var_dump($rowpreview);
        // die();
        $this->data['preview'] = $rowpreview;
        $this->data['getdetail'] = $rowdetail;
        $this->data['getprosedur'] = $rowprosedur;
        $this->data['getformula2'] = $rowformula2;
        $this->data['no_formula'] = $rowpreview->no_formula;
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

    // public function generatedatafromtmp() {
    //     $resultkomposisi = $this->modeldata->gettmp_komposisi();
    //     if ($resultkomposisi) {
    //         $array_komposisi = array();
    //         foreach ($resultkomposisi as $rowkomposisi) {
    //             $nama_dagang = $rowkomposisi['nama_dagang'];
    //             $inci_name = $rowkomposisi['inci_name'];
    //             $rowdata_komposisi = $this->modeldata->getdata_by_nama_dagang($nama_dagang);
    //             if (empty($rowdata_komposisi)) {
    //                 $array_komposisi[] = array(
    //                     "nama_dagang" => $nama_dagang,
    //                     "inci_name" => $inci_name,
    //                     "createby" => $this->userid,
    //                     "createtime" => $this->curdatetime,
    //                 );
    //             }
    //         }

    //         if (!empty($array_komposisi)) {
    //             $this->modeldata->insertdata_batch_komposisi($array_komposisi);
    //         }

    //     }
       
    // }


    public function importdata_komposisi($id_header) {
        $param = $this->input->post();

        if (isset($param['formdata_komposisi'])) {
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
                // $this->modeldata->truncate_tmp();
                $rowformula = $this->modeldata->getby_id_array($id_header);
                $file_linescsv = file($filecsv);
                $arraydata = array();
                foreach ($file_linescsv as $line_csv) {
                    if ($counter >= $startfrom) {
                        $listkolom = explode("~", $line_csv);
                        $no = ltrim(rtrim(trim(str_replace('"', "", $listkolom[0]))));
                        $nama_dagang = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                        $inci_name = ltrim(rtrim(trim(str_replace('"', "", $listkolom[2]))));
                        $fungsi = ltrim(rtrim(trim(str_replace('"', "", $listkolom[3]))));
                        $no_cas = ltrim(rtrim(trim(str_replace('"', "", $listkolom[4]))));
                        $konsentrasi = ltrim(rtrim(trim(str_replace('"', "", $listkolom[5]))));
                        $arraydata[] = array(
                            "no" => $no,
                            "nama_dagang" => $nama_dagang,
                            "inci_name" => $inci_name,
                            "fungsi" => $fungsi,
                            "no_cas" => $no_cas,
                            "konsentrasi" => $konsentrasi,
                            "formula_id_H"  => $rowformula['formula_id_H'],
                            "createby" => $this->userid,
                            "createtime" => $this->curdatetime,
                        );
                    }
                    $counter++;
                }

                if (!empty($arraydata)) {
                    $this->modeldata->insert_tmp($arraydata);
                    // $this->generatedatafromtmp();
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

            $jsonmsg = array("valid" => true, "msg" => "Generate data kodepos selesai, " . $lamaproses);
            echo json_encode($jsonmsg);

            // $this->dj(array(
            //     "valid" => $valid,
            //     "message" => $message
            // ));
        }
    }


    public function importdata_prosedur($formula_id) {
        $param = $this->input->post();

        if (isset($param['formdata_prosedur'])) {
            $path = "public/uploads/" . strtolower($this->controller);
            $config['upload_path'] = "./" . $path;
            $config['allowed_types'] = 'xlsx|xls';
            $config['encrypt_name'] = FALSE;
            $config['overwrite'] = TRUE;
            $this->load->library('upload', $config);
            $starttime = date('d-m-Y H:i:s');
            if ($this->upload->do_upload("uploaddata_prosedur")) {

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
                // $this->modeldata->truncate_tmp();
                $rowprosedur = $this->modeldata->getby_id_array($formula_id);
                $file_linescsv = file($filecsv);
                $arraydata = array();
                foreach ($file_linescsv as $line_csv) {
                    if ($counter >= $startfrom) {
                        $listkolom = explode("~", $line_csv);
                        $no = ltrim(rtrim(trim(str_replace('"', "", $listkolom[0]))));
                        $prosedur_pembuatan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                        $arraydata[] = array(
                            "no" => $no,
                            "prosedur_pembuatan" => $prosedur_pembuatan,
                            "formula_id_H"  => $rowprosedur['formula_id_H'],
                            "createby" => $this->userid,
                            "createtime" => $this->curdatetime,
                        );
                    }
                    $counter++;
                }

                if (!empty($arraydata)) {
                    $this->modeldata->insert_importprosedur($arraydata);
                    // $this->generatedatafromtmp();
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

            $jsonmsg = array("valid" => true, "msg" => "Generate data kodepos selesai, " . $lamaproses);
            echo json_encode($jsonmsg);

            // $this->dj(array(
            //     "valid" => $valid,
            //     "message" => $message
            // ));
        }
    }


}

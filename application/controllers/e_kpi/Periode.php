<?php


class Periode extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id;
        $this->load->model('e_/Karyawan_model', 'kyw');
        $this->load->model('e_kpi/kpi_model', 'kpi');
        $this->title = 'Periode';
    }

    public function add() {
        $this->extenddata();
        parent::add();
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['default']['readonly_periode_awal'] = 'readonly';
        $this->data['default']['readonly_periode_akhir'] = 'readonly';
        $this->extenddata();
        parent::edit($id);
    }

    public function home_detail($id_header) {
        $this->data['url_home_kpi'] = site_url($this->controller . '/home_kpi');

        parent::home_detail($id_header);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        $this->data['periode_awal'] = $row;
        parent::add_detail($id_header);
    }

    public function home_kpi($id_header) {
        $this->data['title'] = "Key Performance Indicator";
        $this->iddata = $id_header;
        $row = $this->modeldata->getby_idkpi($this->iddata);
        $detail_id = $row->detail_id;
        $this->data['url_import_kpi'] = site_url($this->controller . "/importdata_Kpi/$id_header");
        $this->data['url_grid'] = site_url($this->controller . '/getGridKpi/' . $id_header);
        $rowdetail = $this->kpi->get_byidpreview($id_header);
        $this->data['rowdetail'] = $rowdetail;
        $this->data['sumvalue'] = $this->modeldata->sum_kpivalue($id_header);
        $this->data['sumbobot'] = $this->modeldata->sum_bobot($id_header);
        $this->data['url_add'] = site_url($this->controller . "/add_kpi/$id_header");
        $this->data['url_edit'] = site_url($this->controller . '/edit_kpi');
        $this->data['url_pembagi'] = site_url($this->controller . '/pembagi');
        $this->data['url_insert_info'] = site_url($this->controller . '/insert_info');
        $this->data['url_delete'] = site_url($this->controller . '/delete_kpi');
        $this->load->view($this->view . '/home_kpi', $this->data);
    }

    public function getGridKpi($idheader) {
        $check = $this->modeldata->getGridKpi($idheader);
        if (!is_null($check)) {
            $result = $this->modeldata->getGridKpi($idheader)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_kpi($id_header) {
        $row = $this->modeldata->getby_id_detail_array($id_header);
        $this->data['title'] = $row['namaKaryawan'];
        $this->data['detail_id'] = $id_header;
        $this->data['id'] = 0;
        $this->data['default']['bobot'] = 0;
        $this->data['default']['jan'] = 0;
        $this->data['default']['feb'] = 0;
        $this->data['default']['mar'] = 0;
        $this->data['default']['apr'] = 0;
        $this->data['default']['mei'] = 0;
        $this->data['default']['jun'] = 0;
        $this->data['default']['jul'] = 0;
        $this->data['default']['ags'] = 0;
        $this->data['default']['sep'] = 0;
        $this->data['default']['okt'] = 0;
        $this->data['default']['nov'] = 0;
        $this->data['default']['des'] = 0;
        $this->data['default']['pembagi'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_kpi;
        $this->data['url_post'] = site_url($this->controller . '/postdatakpi');
        $this->data['url_index'] = site_url($this->controller . "/home_kpi/$id_header");
        $this->load->view($this->view . '/form_kpi', $this->data);
    }

    public function edit_kpi($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_idkpi($this->iddata);
        $detail = $row->detail_id;
        $rowdetail = $this->modeldata->getby_id_detail_array($detail);
        $this->data['title'] = $rowdetail['namaKaryawan'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_kpi;
        $this->data['detail_id'] = $detail;
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        $this->data['default']['kpi_objective'] = $row->kpi_objective;
        $this->data['default']['supporting_information'] = $row->supporting_information;
        $this->data['row'] = $row;
        $this->data['default']['bobot'] = $row->bobot;
        $this->data['default']['jan'] = $row->jan;
        $this->data['default']['feb'] = $row->feb;
        $this->data['default']['mar'] = $row->mar;
        $this->data['default']['apr'] = $row->apr;
        $this->data['default']['mei'] = $row->mei;
        $this->data['default']['jun'] = $row->jun;
        $this->data['default']['jul'] = $row->jul;
        $this->data['default']['ags'] = $row->ags;
        $this->data['default']['sep'] = $row->sep;
        $this->data['default']['okt'] = $row->okt;
        $this->data['default']['nov'] = $row->nov;
        $this->data['default']['des'] = $row->des;
        $this->data['default']['pembagi'] = $row->pembagi;
        $this->data['default']['kpi_value'] = $row->kpi_value;
        $this->data['default']['actual'] = $row->actual;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatakpi');
        $this->data['url_index'] = site_url($this->controller . "/home_kpi/$detail");
        $this->load->view($this->view . '/form_kpi', $this->data);
    }

    public function postdatakpi() {
        $param = $this->input->post();
        $actiondata = $param['actiondatakpi'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "detail_id" => $param['detail_id'],
                        "kpi_objective" => $param['kpi_objective'],
                        "supporting_information" => $param['supporting_information'],
                        "target_objective" => $param['target_objective'],
                        "target_kpi" => $param['target_kpi'],
                        "bobot" => $param['bobot'],
                        "pembagi" => $param['pembagi'],
                        "jan" => $param['jan'],
                        "feb" => $param['feb'],
                        "mar" => $param['mar'],
                        "apr" => $param['apr'],
                        "mei" => $param['mei'],
                        "jun" => $param['jun'],
                        "jul" => $param['jul'],
                        "ags" => $param['ags'],
                        "sep" => $param['sep'],
                        "okt" => $param['okt'],
                        "nov" => $param['nov'],
                        "des" => $param['des'],
                        "actual" => $param['act'],
                        "kpi_value" => $param['kpivalue'],
                        "target_vs_actual" => $param['tgtvsact'],
                    );
                    $this->modeldata->insertkpi($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id = $param['kpi_id'];
                $record = array(
                        "kpi_objective"    => $param['kpi_objective'],
                        "supporting_information" => $param['supporting_information'],
                        "bobot"            => $param['bobot'],
                        "pembagi"          => $param['pembagi'],
                        "pembagi"          => $param['pembagi'],
                        "jan"              => $param['jan'],
                        "feb"              => $param['feb'],
                        "mar"              => $param['mar'],
                        "apr"              => $param['apr'],
                        "mei"              => $param['mei'],
                        "jun"              => $param['jun'],
                        "jul"              => $param['jul'],
                        "ags"              => $param['ags'],
                        "sep"              => $param['sep'],
                        "okt"              => $param['okt'],
                        "nov"              => $param['nov'],
                        "des"              => $param['des'],
                        "actual"           => $param['act'],
                        "kpi_value"        => $param['kpivalue'],
                        "target_vs_actual" => $param['tgtvsact'],
                );
                $this->modeldata->updatekpi($id, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $kpi_id = $param['kpi_id'];
                $this->modeldata->deletekpi($kpi_id);
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

    function pembagi() {
        $param = $this->input->post();
        $id = $param['id'];
        $pembagi = $param['pembagi'];
            $record = array(
                "pembagi" => $pembagi,
                "jan" => $param['jan'],
                "feb" => $param['feb'],
                "mar" => $param['mar'],
                "apr" => $param['apr'],
                "mei" => $param['mei'],
                "jun" => $param['jun'],
                "jul" => $param['jul'],
                "ags" => $param['ags'],
                "sep" => $param['sep'],
                "okt" => $param['okt'],
                "nov" => $param['nov'],
                "des" => $param['des'],
                "actual" => $param['act'],
                "kpi_value" => $param['kpivalue'],
            );
            $this->kpi->updatedata($id, $record);
        
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function insert_info() {
        $param = $this->input->post();
            $record = array(
                "detail_id"              => $param['id'],
                "kpi_objective"          => $param['kpi_objective'],
                "supporting_information" => $param['supporting_information'],
                "target_objective"       => $param['target_objective'],
                "target_kpi"             => $param['target_kpi'],
                "bobot"                  => $param['bobot']
            );
            $this->kpi->insertdata($record);
        
        $jsonmsg = array("valid" => true, "msg" => "Insert data, success");
        echo json_encode($jsonmsg);
    }

    function delete_kpi() {
        $param = $this->input->post();
        $id = $param['id'];
        $this->kpi->deletedata($id);
        
        $jsonmsg = array("valid" => true, "msg" => "Delete data, success");
        echo json_encode($jsonmsg);
    }

    // public function getGridKpi($idheader) {
    //     echo json_encode(array(
    //         "data" => $this->modeldata->getGridDatadetail($idheader)->result(),
    //         // "total_bobot" => $this->modeldata->total_bobot(),
    //         // "totol_kpi" => $this->modeldata->totol_kpi()
    //     ));
    // }



     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['periode_awal'];
        $result = $this->modeldata->getby_name('periode_awal', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param ['actiondata'];
        $periode_awal = $param ['periode_awal'];
        $departement = $this->session->userdata('ses_department_name');
        switch ($actiondata) {
            case "create":
                $checkdata = $this->modeldata->check_data($periode_awal, $departement);
                if (empty($checkdata)) {
                    
                    $record = array('periode_awal'  => $periode_awal,
                                    'periode_akhir' => $param ['periode_akhir'],
                                    'departement'   => $departement
                                    );
                    // var_dump($record);
                    // die();
                    $periode = $this->modeldata->insertdata($record);
                    
                    $depart = $param ['namaKaryawan'];
                    $record_1 = array();
                        foreach($depart AS $key => $val){
                            $record_1[] = array('periode_id'   => $periode,
                                                'namaKaryawan' => $param ['namaKaryawan'][$key],
                                                "createby"     => $this->session->userdata('ses_id_user'),
                                                "createtime"   => $this->curdatetime,
                                               );
			        }      
                    // var_dump($record3);
                    // die();
                    $this->modeldata->insertdata_record_1($record_1);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    $schedule_id = 0;
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;

                // --- update data formulir
            case "update":
                $periode_id = $param['periode_id'];
                // update formulir
                $record = array('periode_awal'  => $periode,
                                'periode_akhir' => $param ['periode_akhir']
                                );
                $this->modeldata->updatedata($schedule_id, $record);

                $depart = $param ['namaKaryawan'];
                    $record_1 = array();
                        foreach($depart AS $key => $val){
                            $record3[] = array('periode_id'     => $periode_id,
                                               'namaKaryawan'    => $param ['namaKaryawan'][$key]
                                               );
                    }
                $this->modeldata->updatedata_recored_id($periode_id,$record_1);
                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
            case "delete":
                $periode_id = $param['periode_id'];
                $this->modeldata->deletedata($periode_id);
                $this->modeldata->deletedata_detail($periode_id);
                $valid = true;
                $msg = "Data success deleted";
                break;

            default:
                $valid = false;
                $msg = "No action";
                break;
        }
        $this->dj(array(
            "valid" => $valid,
            "msg" => $msg,
            "ref_id" => $schedule_id,
        ));
    }

       public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'namaKaryawan');
    }


    public function importdata_Kpi($id_header) {
        $param = $this->input->post();

        if (isset($param['formdata_kpi'])) {
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
                // // $this->modeldata->truncate_tmp();getby_array
                // $rowperiode = $this->modeldata->getby_id_array($id_header);
                $rowdetail  = $this->modeldata->getby_idDetail_array($id_header);
                $file_linescsv = file($filecsv);
                $arraydata = array();
                foreach ($file_linescsv as $line_csv) {
                    if ($counter >= $startfrom) {
                        $listkolom = explode("~", $line_csv);
                        $kpi_objective = ltrim(rtrim(trim(str_replace('"', "", $listkolom[0]))));
                        $bobot = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                        $kpi_value = ltrim(rtrim(trim(str_replace('"', "", $listkolom[2]))));
                        $supporting_information = ltrim(rtrim(trim(str_replace('"', "", $listkolom[3]))));
                        $target_objective = ltrim(rtrim(trim(str_replace('"', "", $listkolom[4]))));
                        $target_kpi = ltrim(rtrim(trim(str_replace('"', "", $listkolom[5]))));
                        $jan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[6]))));
                        $feb = ltrim(rtrim(trim(str_replace('"', "", $listkolom[7]))));
                        $mar = ltrim(rtrim(trim(str_replace('"', "", $listkolom[8]))));
                        $apr = ltrim(rtrim(trim(str_replace('"', "", $listkolom[9]))));
                        $mei = ltrim(rtrim(trim(str_replace('"', "", $listkolom[10]))));
                        $jun = ltrim(rtrim(trim(str_replace('"', "", $listkolom[11]))));
                        $jul = ltrim(rtrim(trim(str_replace('"', "", $listkolom[12]))));
                        $ags = ltrim(rtrim(trim(str_replace('"', "", $listkolom[13]))));
                        $sep = ltrim(rtrim(trim(str_replace('"', "", $listkolom[14]))));
                        $okt = ltrim(rtrim(trim(str_replace('"', "", $listkolom[15]))));
                        $nov = ltrim(rtrim(trim(str_replace('"', "", $listkolom[16]))));
                        $des = ltrim(rtrim(trim(str_replace('"', "", $listkolom[17]))));
                        $target = ltrim(rtrim(trim(str_replace('"', "", $listkolom[17]))));
                        $arraydata[] = array(
                            "kpi_objective" => $kpi_objective,
                            "bobot" => $bobot,
                            "kpi_value" => $kpi_value,
                            "supporting_information" => $supporting_information,
                            "target_objective" => $target_objective,
                            "target_kpi" => $target_kpi,
                            "jan" => $jan,
                            "feb" => $feb,
                            "mar" => $mar,
                            "apr" => $apr,
                            "mei" => $mei,
                            "ags" => $ags,
                            "sep" => $sep,
                            "okt" => $okt,
                            "nov" => $inci_name,
                            "des" => $des,
                            "target_vs_actual" => $target,
                            "periode_id"  => $rowdetail['periode_id'],
                            "detail_id"  => $rowdetail['detail_id'],
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


}

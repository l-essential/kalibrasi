<?php


class Import extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Import';
    }

    public function index() {
        $this->data['url_importdata'] = site_url($this->controller . "/importdata_penyimpangan");
        parent::index();
    }

    public function importdata_penyimpangan() {
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
                        $filecsv = $pathcsv . '/' . $loadedSheetName . '.xlsx';
                        $objWriter->save($filecsv);
                    }
                }

                $startfrom = 1;
                $counter = 0;
                // $this->modeldata->truncate_tmp();
                $rowformula = $this->modeldata->getby_id_array($id_header);
                $param['tanggal'] = date("Y-m-d", strtotime($param['tanggal']));
                $file_linescsv = file($filecsv);
                $arraydata = array();
                foreach ($file_linescsv as $line_csv) {
                    if ($counter >= $startfrom) {
                        $listkolom = explode("~", $line_csv);
                        $improvement_code = ltrim(rtrim(trim(str_replace('"', "", $listkolom[0]))));
                        $title_improvement = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                        $number = ltrim(rtrim(trim(str_replace('"', "", $listkolom[2]))));
                        $id_katagori = ltrim(rtrim(trim(str_replace('"', "", $listkolom[3]))));
                        $id_tipe = ltrim(rtrim(trim(str_replace('"', "", $listkolom[4]))));
                        $id_ruanglingkup = ltrim(rtrim(trim(str_replace('"', "", $listkolom[5]))));
                        $id_jenis = ltrim(rtrim(trim(str_replace('"', "", $listkolom[6]))));
                        $etc = ltrim(rtrim(trim(str_replace('"', "", $listkolom[7]))));
                        $tanggal = ltrim(rtrim(trim(str_replace('"', "", $listkolom[8]))));
                        $arraydata[] = array(
                            "improvement_code"  => $improvement_code,
                            "title_improvement" => $title_improvement,
                            "number"            => $number,
                            "id_katagori"       => $id_katagori,
                            "id_tipe"           => $id_tipe,
                            "id_ruanglingkup"   => $id_ruanglingkup,
                            "id_jenis"          => $id_jenis,
                            "etc"               => $etc,
                            "tanggal"           => date('Y-m-d', strtotime($tanggal)),
                            "createby"          => $this->userid,
                            "createtime"        => $this->curdatetime,
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

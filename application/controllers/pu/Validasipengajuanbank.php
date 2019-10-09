<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Validasipengajuanbank extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Proses Validasi Pengajuan Bank';
        $this->setmodel($this->pathclass . "/Pengajuanbank_model#modeldata");
    }

    public function index() {
        $this->buildcombobox('id_t_pengajuanbankheader', 'labeldata', $this->modeldata->getlabelpengajuanbank());
        $this->data['url_generate_tmpdata'] = site_url($this->controller . '/generate_tmpdata');
        $this->data['url_generate_badanhukum'] = site_url($this->controller . '/generate_badanhukum');
        $this->data['url_generate_perumahan'] = site_url($this->controller . '/generate_perumahan');
        parent::index();
    }

    public function generate_tmpdata() {
        $param = $this->input->post();
        $filecsv = $param['filecsv'];
        $id_t_pengajuanbankheader = $param['id_t_pengajuanbankheader'];
        $file_linescsv = file($filecsv);
        $startfrom = 1;
        $counter = 0;
        ini_set("memory_limit", "-1");
        ini_set('max_execution_time', 0);
        $arraydata = array();
        $starttime = date('d-m-Y H:i:s');
        $no = 0;
        foreach ($file_linescsv as $line_csv) {
            if ($counter >= $startfrom) {
                $listkolom = explode("~", $line_csv);
                $nama = ltrim(rtrim(trim(str_replace('"', "", $listkolom[1]))));
                $pekerjaan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[2]))));
                $jeniskelamin = ltrim(rtrim(trim(str_replace('"', "", $listkolom[3]))));
                $ktp = ltrim(rtrim(trim(str_replace('"', "", $listkolom[4]))));
                $npwp = ltrim(rtrim(trim(str_replace('"', "", $listkolom[5]))));
                $gajipokok = ltrim(rtrim(trim(str_replace('"', "", $listkolom[6]))));
                $namapasangan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[7]))));
                $ktppasangan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[8]))));
                $rekening = ltrim(rtrim(trim(str_replace('"', "", $listkolom[9]))));
                $tanggal_akad = ltrim(rtrim(trim(str_replace('"', "", $listkolom[10]))));
                $harga_rumah = ltrim(rtrim(trim(str_replace('"', "", $listkolom[11]))));
                $uang_muka = ltrim(rtrim(trim(str_replace('"', "", $listkolom[12]))));
                $sbum = ltrim(rtrim(trim(str_replace('"', "", $listkolom[13]))));
                $nilaikpr = ltrim(rtrim(trim(str_replace('"', "", $listkolom[14]))));
                $bunga = ltrim(rtrim(trim(str_replace('"', "", $listkolom[15]))));
                $tenor = ltrim(rtrim(trim(str_replace('"', "", $listkolom[16]))));
                $angsuran = ltrim(rtrim(trim(str_replace('"', "", $listkolom[17]))));
                $nilaissb = ltrim(rtrim(trim(str_replace('"', "", $listkolom[18]))));
                $badanhukum = ltrim(rtrim(trim(str_replace('"', "", $listkolom[19]))));
                $nama_perumahan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[20]))));
                $alamat_perumahan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[21]))));
                $kotakab = ltrim(rtrim(trim(str_replace('"', "", $listkolom[22]))));
                $kodepos = ltrim(rtrim(trim(str_replace('"', "", $listkolom[23]))));
                $luastanah = ltrim(rtrim(trim(str_replace('"', "", $listkolom[24]))));
                $luasbangunan = ltrim(rtrim(trim(str_replace('"', "", $listkolom[25]))));

                $arraydata[] = array(
                    "format_form1" => 1,
                    "id_t_pengajuanbankheader" => $id_t_pengajuanbankheader,
                    "nama" => $nama,
                    "pekerjaan" => $pekerjaan,
                    "jeniskelamin" => $jeniskelamin,
                    "no_ktp" => $ktp,
                    "no_npwp" => $npwp,
                    "gaji_pokok" => $gajipokok,
                    "nama_pasangan" => $namapasangan,
                    "no_ktp_pasangan" => $ktppasangan,
                    "no_rekening" => $rekening,
                    "nama_badanhukum" => $badanhukum,
                    "nama_perumahan" => $nama_perumahan,
                    "alamat_perumahan" => $alamat_perumahan,
                    "kotakab" => $kotakab,
                    "kodepos" => $kodepos,
                    "luastanah" => $luastanah,
                    "luasbangunan" => $luasbangunan,
                    "harga_rumah" => $harga_rumah,
                    "uang_muka" => $uang_muka,
                    "angsuran" => $angsuran,
                    "tenor" => $tenor,
                    "tanggal_akad" => $tanggal_akad,
                    "sbum" => $sbum,
                    "bunga" => $bunga,
                    "nilai_kpr" => $nilaikpr,
                    "nilai_ssb" => $nilaissb,
                    "createby" => $this->userid,
                    "createtime" => $this->curdatetime,
                );
                $no++;
            }
            $counter++;
        }
        try {
            $this->modeldata->insert_tmpupload($id_t_pengajuanbankheader, $arraydata);
            $valid = true;
            $endtime = date('d-m-Y H:i:s');
            $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
            $jam = $diff->h;
            $menit = $diff->i;
            $detik = $diff->s;
            $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
            $message = "Generate temporary data, finish " . $lamaproses;
            $message .= '<br/>' . " jumlah data yang tergenetate sebanyak $no";
        } catch (Exception $exc) {
            $valid = false;
            $message = $exc->getMessage();
        }


        $this->dj(array(
            "valid" => $valid,
            "message" => $message
        ));
    }

    public function postdata() {
        $param = $this->input->post();
        $id_t_pengajuanbankheader = $param['id_t_pengajuanbankheader'];
        $row = $this->modeldata->getby_id_array($id_t_pengajuanbankheader);
        $starttime = date('d-m-Y H:i:s');
        if ($row) {
            $lampiran_form1 = $row['lampiran_form1'];
            $pathcsv = getcwd() . '/public/csv/' . strtolower($this->controller);
            include APPPATH . 'third_party/PHPExcel.php';
            include APPPATH . 'third_party/PHPExcel/IOFactory.php';

            $objReader = new PHPExcel_Reader_Excel2007();
            $objReader->setReadDataOnly(true);
            $objPHPExcel = $objReader->load($lampiran_form1);
            $loadedSheetNames = $objPHPExcel->getSheetNames();
            $sheetCount = $objPHPExcel->getSheetCount();
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
            $objWriter->setDelimiter('~');
            ini_set("memory_limit", "-1");
            ini_set('max_execution_time', 0);
            foreach ($loadedSheetNames as $sheetIndex => $loadedSheetName) {
                $objWriter->setSheetIndex($sheetIndex);
                $filecsv = $pathcsv . "_" . $id_t_pengajuanbankheader . '.csv';
                $objWriter->save($filecsv);
            }
            $endtime = date('d-m-Y H:i:s');
            $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
            $jam = $diff->h;
            $menit = $diff->i;
            $detik = $diff->s;
            $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
            $valid = true;
            $message = "Generate CSV, Finish " . $lamaproses;
        } else {
            $valid = false;
            $filecsv = "";
            $message = "Pengajuan tidak dapat diproses, tidak ada data di database";
        }

        $this->dj(array(
            "valid" => $valid,
            "filecsv" => $filecsv,
            "message" => $message
        ));
    }

    public function generate_badanhukum($id_t_pengajuanbankheader) {
        $result = $this->modeldata->getbadanhukum_tmp_upload_form1($id_t_pengajuanbankheader);
        $valid = false;
        $message = "";
        if ($result) {
            $this->setmodel($this->pathclass . '/Badanhukum_model#badanhukum');
            $arraydata = array();
            $starttime = date('d-m-Y H:i:s');
            $counter = 0;
            ini_set("memory_limit", "-1");
            ini_set('max_execution_time', 0);
            foreach ($result as $row) {
                $nama_badanhukum = $row['nama_badanhukum'];
                $checkdata = $this->badanhukum->getdatabadanhukum($nama_badanhukum);
                if (empty($checkdata) && !empty($nama_badanhukum)) {
                    $arraydata[] = array(
                        "badanhukum" => $nama_badanhukum,
                        "keterangan" => "hasil generate upload form 1",
                        "createby" => $this->userid,
                        "createtime" => $this->curdatetime,
                    );
                    $counter++;
                }
            }

            try {
                if (!empty($arraydata)) {
                    $this->badanhukum->insertdata_batch($arraydata);
                }
                $valid = true;
                $endtime = date('d-m-Y H:i:s');
                $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
                $jam = $diff->h;
                $menit = $diff->i;
                $detik = $diff->s;
                $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
                $message = "Generate master badan hukum, finish" . $lamaproses;
                $message .= '<br/>' . " jumlah data yang tergenetate sebanyak $counter";
            } catch (Exception $exc) {
                $valid = false;
                $message = $exc->getMessage();
            }
        }
        $this->dj(array(
            "valid" => $valid,
            "message" => $message
        ));
    }

    public function generate_perumahan($id_t_pengajuanbankheader) {
        $result = $this->modeldata->getperumahan_tmp_upload_form1($id_t_pengajuanbankheader);
        $valid = false;
        $message = "";
        if ($result) {
            $this->setmodel($this->pathclass . '/Perumahan_model#perumahan');
            $arraydata = array();
            $starttime = date('d-m-Y H:i:s');
            $counter = 0;
            ini_set("memory_limit", "-1");
            ini_set('max_execution_time', 0);
            foreach ($result as $row) {
                $nama_perumahan = $row['nama_perumahan'];
                $kotakab = $row['kotakab'];
                $kodepos = $row['kodepos'];
                $luastanah = $row['luastanah'];
                $luasbangunan = $row['luasbangunan'];

                $checkdata = $this->perumahan->getdataperumanahan($nama_perumahan,$kotakab,$kodepos,$luastanah,$luasbangunan);
              
                if (empty($checkdata)) {
                    $arraydata[] = array(
                        "nama_perumahan" => $nama_perumahan,
                        "kabkota" => $kotakab,
                        "kodepos" => $kodepos,
                        "luastanah" => $luastanah,
                        "luasbangunan" => $luasbangunan,
                        "keterangan" => "hasil generate upload form 1",
                        "createby" => $this->userid,
                        "createtime" => $this->curdatetime,
                    );
                    $counter++;
                }
            }

            try {
                if (!empty($arraydata)) {
                    $this->perumahan->insertdata_batch($arraydata);
                }
                $valid = true;
                $endtime = date('d-m-Y H:i:s');
                $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
                $jam = $diff->h;
                $menit = $diff->i;
                $detik = $diff->s;
                $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
                $message = "Generate master perumahan, finish" . $lamaproses;
                $message .= '<br/>' . " jumlah data yang tergenetate sebanyak $counter";
            } catch (Exception $exc) {
                $valid = false;
                $message = $exc->getMessage();
            }
        }

        $this->dj(array(
            "valid" => $valid,
            "message" => $message
        ));
    }

}

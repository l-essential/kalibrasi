<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Validasipengajuanbank extends MY_Controller {

    function __construct() {
        $this->noaut = 1;
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Proses Validasi / Pengujuan Data Pengajuan Bank';
        $this->setmodel($this->pathclass . "/Pengajuanbank_model#modeldata");
        $this->setmodel($this->pathclass . "/Provinsi_model#provinsi");
        $this->setmodel($this->pathclass . "/Batashargajualrumah_model#batashargarumah");
        $this->setmodel($this->pathclass . "/Batashargajualrumahpengecualian_model#batashargarumahpengecualian");
        $this->setmodel($this->pathclass . "/Bataspenghasilan_model#bataspenghasilan");
        $this->setmodel($this->pathclass . "/Bank_model#bank");
    }

    public function index() {
        $this->buildcombobox('id_t_pengajuanbankheader', 'labeldata', $this->modeldata->getlabelpengajuanbank());
        $this->data['url_generate_tmpdata'] = site_url($this->controller . '/generate_tmpdata');
        $this->data['url_generate_badanhukum'] = site_url($this->controller . '/generate_badanhukum');
        $this->data['url_generate_perumahan'] = site_url($this->controller . '/generate_perumahan');
        $this->data['url_generate_validasi'] = site_url($this->controller . '/checkvalidasi');
        $this->data['url_reportnotvalid'] = site_url($this->controller . '/reportnotvalid');
        parent::index();
    }
    
    public function reportnotvalid($id_pengajuanheader) {      
        $result = $this->modeldata->geterrorlog($id_pengajuanheader);
        $data['result']=$result;
        $message = $this->load->view($this->view . '/reportnotvalid', $data, true);
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=datapengajuanditolak_$id_pengajuanheader.xls");
        echo $message;
        exit;
    }

    public function checkjeniskelamin($arraydata) {
        if (!empty($arraydata['jeniskelamin'])) {
            if (is_string($arraydata['jeniskelamin'])) {
                if ($arraydata['jeniskelamin'] == 'L' || $arraydata['jeniskelamin'] == 'P') {
                    return array("valid" => 'valid', "message" => "");
                } else {
                    return array("valid" => 'notvalid', "message" => "Jenis bukan berisi L atau P namun berisi " . $arraydata['jeniskelamin'] . ', ');
                }
            } else {
                return array("valid" => 'notvalid', "message" => "Jenis berisi angka bukan huruf" . ', ');
            }
        } else {
            return array("valid" => 'notvalid', "message" => "Tidak terdapat info jenis kelamin / Jenis kelamin kosong" . ', ');
        }
    }

    public function checkktp($no_ktp, $statuskepunyaan = '') {
        $no_ktp = trim(ltrim(rtrim($no_ktp)));
        if (!empty($no_ktp)) {
            if (is_numeric($no_ktp)) {
                if (strlen($no_ktp) == 16) {
                    if (intval(substr($no_ktp, -4, 16)) > 0) {
                        return array("valid" => 'valid', "message" => "");
                    } else {
                        return array("valid" => 'notvalid', "message" => "Nomor KTP $no_ktp   $statuskepunyaan 4 digit terakhir 0" . ', ');
                    }
                } else {
                    return array("valid" => 'notvalid', "message" => "Nomor KTP $no_ktp   $statuskepunyaan kurang dari 16 Digit" . ', ');
                }
            } else {
                return array("valid" => 'notvalid', "message" => "Nomor KTP $no_ktp   $statuskepunyaan bukan angka" . ', ');
            }
        } else {
            if($statuskepunyaan=='istri'){
                return array("valid" => 'valid', "message" => "");
            }else{
                return array("valid" => 'notvalid', "message" => "KTP $statuskepunyaan kosong" . ', ');
            }
            
        }
    }

    public function checknpwp($npwp) {
        $npwp = trim(ltrim(rtrim($npwp)));
        if (!empty($npwp)) {
            if (is_numeric($npwp)) {
                if (strlen($npwp) == 15) {
                    return array("valid" => 'valid', "message" => "");
                } else {
                    return array("valid" => 'notvalid', "message" => "Nomor NPWP $npwp kurang dari 15 Digit" . ', ');
                }
            } else {
                return array("valid" => 'notvalid', "message" => "Nomor NWPW $npwp bukan angka" . ', ');
            }
        } else {
            return array("valid" => 'notvalid', "message" => "NWPW kosong" . ', ');
        }
    }

    public function checkpekerjaan($array_kodepekerjaan, $arraydata) {
        if (!empty($arraydata['pekerjaan'])) {
            if (in_array($arraydata['pekerjaan'], $array_kodepekerjaan, true)) {
                return array("valid" => 'valid', "message" => "");
            } else {
                return array("valid" => 'notvalid', "message" => "Tidak terdapat kode pekerjaan di master pekerjaan,info pekerjaan berisi " . $arraydata['pekerjaan'] . ', ');
            }
        } else {
            return array("valid" => 'notvalid', "message" => "Tidak terdapat info pekerjaan / pekerjaan kosong" . ', ');
        }
    }

    public function checkharga($arraydata) {
        if (!empty($arraydata['harga_rumah'])) {
            if (!empty($arraydata['kodepos'])) {
                $kodepos = $arraydata['kodepos'];
                $resultcheckmasterkodepos = $this->provinsi->getdata_bykode_kodepos($kodepos);
                if ($resultcheckmasterkodepos) {
                    $id_desa = $resultcheckmasterkodepos->id_desa;
                    $id_kecamatan = $resultcheckmasterkodepos->id_kecamatan;
                    $datakecamatan = $this->provinsi->getdata_byidkecamatan($id_kecamatan);
                    if ($datakecamatan) {
                        $id_kota = $datakecamatan->id_kota;
                        $kode_kecamatan = $datakecamatan->kode_kecamatan;
                        $nama_kecamatan = $datakecamatan->nama_kecamatan;
                        $datakabkota = $this->provinsi->getdata_byidkota($id_kota);

                        if ($datakabkota) {
                            $id_provinsi = $datakabkota->id_provinsi;
                            $kode_kota = $datakabkota->kode_kota;
                            $kota = $datakabkota->kota;

                            $dataprovinsi = $this->provinsi->getdata_byidprovinsi($id_provinsi);
                            if ($dataprovinsi) {
                                $provinsi = $dataprovinsi->provinsi;
                                $databatashargarumah = $this->batashargarumah->getdata_byidprovinsi($id_provinsi);
                                $databatashargarumahpengecualian = $this->batashargarumahpengecualian->getdatapengecualian($id_provinsi, $id_kota, $id_kecamatan, $id_desa);

                                if (!empty($databatashargarumah) && !empty($databatashargarumahpengecualian)) {
                                    $rowdata = $databatashargarumahpengecualian;
                                } else if (empty($databatashargarumah) && !empty($databatashargarumahpengecualian)) {
                                    $rowdata = $databatashargarumahpengecualian;
                                } else if (!empty($databatashargarumah) && empty($databatashargarumahpengecualian)) {
                                    $rowdata = $databatashargarumah;
                                } else {
                                    $rowdata = null;
                                }

                                if ($rowdata) {
                                    $batasnilai_rumahtapak = $rowdata->batasnilai_rumahtapak;
                                    $batasnilai_rumahsusun = $rowdata->batasnilai_rumahsusun;
                                    $harga_perm2 = $rowdata->harga_perm2;
                                    $batasnilai_penghasilantapak = $rowdata->batasnilai_penghasilantapak;
                                    $batasnilai_penghasilansusun = $rowdata->batasnilai_penghasilansusun;
                                    $batasnilai_penghasilantapak_suamiistri = $rowdata->batasnilai_penghasilantapak_suamiistri;
                                    $batasnilai_penghasilansusun_suamiistri = $rowdata->batasnilai_penghasilansusun_suamiistri;

                                    $luastanah = $arraydata['luastanah'];
                                    $harga_rumah = $arraydata['harga_rumah'];

                                    if ($luastanah == '0' || $luastanah == '1') {
                                        $batasanhargarumah = $batasnilai_rumahsusun;
                                        $batasanpenghasilan = $batasnilai_penghasilansusun;
                                        $batasanpenghasilansuamisitri = $batasnilai_penghasilansusun_suamiistri;
                                        $statusbatasan = "susun";
                                    } else {
                                        $batasanhargarumah = $batasnilai_rumahtapak;
                                        $batasanpenghasilan = $batasnilai_penghasilantapak;
                                        $batasanpenghasilansuamisitri = $batasnilai_penghasilantapak_suamiistri;
                                        $statusbatasan = "tapak";
                                    }

                                    if ($harga_rumah > $batasanhargarumah) {
                                        return array("valid" => 'notvalid', "message" => "harga rumah melebihi dari batas harga wilayah, harga wilayah $batasanhargarumah , harga rumah $harga_rumah" . ', ');
                                    } else {
                                        return array("valid" => 'valid', "message" => "");
                                    }
                                } else {
                                    return array("valid" => 'notvalid', "message" => "tidak terdapat batasan harga rumah untuk $provinsi - $kota - $nama_kecamatan - $kodepos " . ', ');
                                }
                            } else {
                                return array("valid" => 'notvalid', "message" => "data id provinsi  $id_provinsi tidak terdapat di master provinsi" . ', ');
                            }
                        } else {
                            return array("valid" => 'notvalid', "message" => "data id kabkota  $id_kota tidak terdapat di master kabupaten / kota" . ', ');
                        }
                    } else {
                        return array("valid" => 'notvalid', "message" => "data id kecamatan $id_kecamatan tidak terdapat di master kecamatan" . ', ');
                    }
                } else {
                    return array("valid" => 'notvalid', "message" => "Kodepos $kodepos tidak terdapat di master desa" . ', ');
                }
            } else {
                return array("valid" => 'notvalid', "message" => "Tidak terdapat info kodepos" . ', ');
            }
        } else {
            return array("valid" => 'notvalid', "message" => "Tidak terdapat info harga rumah kosong" . ', ');
        }
    }
    
    public function checknilaikpr($arraydata) {
        if (!empty($arraydata['nilai_kpr'])) {
            $nilai_kpr = $arraydata['nilai_kpr'];
            $harga_rumah = $arraydata['harga_rumah'];
            if ($nilai_kpr > $harga_rumah) {
                return array("valid" => 'notvalid', "message" => "Nilai KPR $nilai_kpr , melebihi harga rumah $harga_rumah" . ', ');
            } else {
                return array("valid" => 'valid', "message" => "");
            }
        } else {
            return array("valid" => 'notvalid', "message" => "Tidak nilai kpr kosong" . ', ');
        }
    }
    
    public function checklamatenor($arraydata) {
        if (!empty($arraydata['tenor'])) {
            $tenor = $arraydata['tenor'];
            $batasmaxtenor = 240;
            if ($tenor > $batasmaxtenor) {
                return array("valid" => 'notvalid', "message" => "Tenor $tenor bulan , melebihi batasan tenor $batasmaxtenor bulan" . ', ');
            } else {
                return array("valid" => 'valid', "message" => "");
            }
        } else {
            return array("valid" => 'notvalid', "message" => "Tidak ada nilai tenor" . ', ');
        }
    }
    
    public function checkpenghasilan($arraydata) {
        if (!empty($arraydata['gaji_pokok'])) {
            $gaji_pokok = $arraydata['gaji_pokok'];
            $rowpenghasilan = $this->bataspenghasilan->getbatasan();
            $luastanah = $arraydata['luastanah'];
            if ($luastanah == '0' || $luastanah == '1') {            
                $batasanpenghasilan = $rowpenghasilan->batasnilai_rumahsusun;
                $batasanpenghasilansuamisitri = $rowpenghasilan->batasnilai_rumahrusun_suamiistri;
                $statusbatasan = "susun";
            } else {
                $batasanpenghasilan = $rowpenghasilan->batasnilai_rumahtapak;
                $batasanpenghasilansuamisitri = $rowpenghasilan->batasnilai_rumahtapak_suamiistri;
                $statusbatasan = "tapak";
            }
                        
            if ($gaji_pokok > $batasanpenghasilan) {
                return array("valid" => 'notvalid', "message" => "gaji pokok melebihi dari batas penghasilan, batas penghasilan $batasanpenghasilan , gaji pokok $gaji_pokok" . ', ');
            } else {
                return array("valid" => 'valid', "message" => "");
            }
            
        } else {
            return array("valid" => 'notvalid', "message" => "Gaji pokok tidak ada nilainya" . ', ');
        }
    }

    public function checkvalidasi($id_t_pengajuanbankheader) {
        //$param = $this->input->post();
        // $id_t_pengajuanbankheader = $param['id_t_pengajuanbankheader'];
        $result = $this->modeldata->gettmpdata($id_t_pengajuanbankheader);
        $starttime = date('d-m-Y H:i:s');
        if ($result) {
            $this->load->model($this->pathclass . '/Pekerjaan_model', 'pekerjaan');
            $resultpekerjaan = $this->pekerjaan->getAll();
            if ($resultpekerjaan) {
                ini_set("memory_limit", "-1");
                ini_set('max_execution_time', 0);               
                $array_kodepekerjaan = array();
                foreach ($resultpekerjaan as $masterpekerjaan) {
                    $array_kodepekerjaan[] = $masterpekerjaan['kode'];
                }
            } else {
                echo 'Belum terdapat master pekerjaan, silakan buat master pekerjaan terlebih dahulu';
                exit;
            }
            $datapengajuanbank = $this->modeldata->getby_id_array($id_t_pengajuanbankheader);
            $databank = $this->bank->getby_id_array($datapengajuanbank['id_bank']);
          
            
            $arrayvalid = array();
            $arraynotvalid = array();
            $arrayalldata = array();

            foreach ($result as $row) {
                $valid = 'valid';
                $message = "";

                $checkjeniskelamin = $this->checkjeniskelamin($row);
                $valid = $checkjeniskelamin['valid'];
                $message .= $checkjeniskelamin['message'];

                $checkpekerjaan = $this->checkpekerjaan($array_kodepekerjaan, $row);
                $valid = $checkpekerjaan['valid'];
                $message .= $checkpekerjaan['message'];

                $checktpsuami = $this->checkktp($row['no_ktp'], 'suami');
                $valid = $checktpsuami['valid'];
                $message .= $checktpsuami['message'];

                $checknpwp = $this->checknpwp($row['no_npwp']);
                $valid = $checknpwp['valid'];
                $message .= $checknpwp['message'];

                $checkhargarumah = $this->checkharga($row);
                $valid = $checkhargarumah['valid'];
                $message .= $checkhargarumah['message'];
                
                $checknilaikpr = $this->checknilaikpr($row);
                $valid = $checknilaikpr['valid'];
                $message .= $checknilaikpr['message'];
                
                $checklamatenor = $this->checklamatenor($row);
                $valid = $checklamatenor['valid'];
                $message .= $checklamatenor['message'];
                
                $checktpistri = $this->checkktp($row['no_ktp'], 'istri');
                $valid = $checktpistri['valid'];
                $message .= $checktpistri['message'];
                
                
                $checkpenghasilan = $this->checkpenghasilan($row);
                $valid = $checkpenghasilan['valid'];
                $message .= $checkpenghasilan['message'];
                
                $msgreplace = str_replace(",", "", $message);
                
                if (!empty($msgreplace)) {
                    $arraynotvalid[] = array(
                        "id_t_pengajuanbank_header" => $id_t_pengajuanbankheader,
                        /*
                        "bank" => $databank['nama_bank'],
                        "nomorsurat" => $datapengajuanbank['no_sk'],
                        "tanggal_surat" => $datapengajuanbank['tanggal_surat'],
                         * 
                         */
                        "nama" => $row['nama'],
                        /*
                        "pekerjaan" => $row['pekerjaan'],
                        "jeniskelamin" => $row['jeniskelamin'],
                         * 
                         */
                        "ktp" => $row['no_ktp'],
                     //   "no_npwp" => $row['no_npwp'],
                        "pesan_error" => $message,
                    );
                }
            }
            
            if(!empty($arraynotvalid)){
                $this->modeldata->clearlogerror($id_t_pengajuanbankheader);
                $this->modeldata->createlogerror($id_t_pengajuanbankheader,$arraynotvalid);
            }
        }
        $endtime = date('d-m-Y H:i:s');
        $diff = date_diff(date_create(date('Y-m-d H:i:s', strtotime($starttime))), date_create(date('Y-m-d H:i:s', strtotime($endtime))));
        $jam = $diff->h;
        $menit = $diff->i;
        $detik = $diff->s;
        $lamaproses = " Mulai :" . $starttime . ', Selesai : ' . $endtime . ' ,Lama Proses : ' . $jam . ' Jam ' . $menit . ' Menit ' . $detik . ' Detik';
        $messageselesai = "Validasi temporary data, finish " . $lamaproses;
        
        $this->dj(array(
            "valid"=>true,
            "message"=>$messageselesai,
        ));
    }

    public function generate_tmpdata() {
        $param = $this->input->post();
        $filecsv = $param['filecsv'];
        $id_t_pengajuanbankheader = $param['id_t_pengajuanbankheader'];
        $file_linescsv = file($filecsv);
        $startfrom = 5;
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
                if (!empty($nama)) {
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
                if ($sheetIndex == 0) {
                    $objWriter->setSheetIndex($sheetIndex);
                    $filecsv = $pathcsv . '/' . $id_t_pengajuanbankheader . '.csv';
                    $objWriter->save($filecsv);
                }
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

                $checkdata = $this->perumahan->getdataperumanahan($nama_perumahan, $kotakab, $kodepos, $luastanah, $luasbangunan);

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

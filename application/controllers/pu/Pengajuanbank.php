<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pengajuanbank extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Pengajuan Bank";
        $this->setmodel($this->pathclass . "/Bank_model#bank");
        $this->setmodel($this->pathclass . "/Jeniskpr_model#jeniskpr");
        $this->fieldnotgenerate = array("id_bank","prihal","jenisperhitungan", "cek_dukcapil", "tanggal_surat", "daritanggal", "sampaitanggal");
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->infoheader = 'no_sk'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
    }

    public function add_detail($id_header) {
        $this->buildcombobox('id_jeniskpr', 'jeniskpr', $this->jeniskpr->getAll());
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        $this->buildcombobox('id_jeniskpr', 'jeniskpr', $this->jeniskpr->getAll(), 'edit', $row['id_jeniskpr']);
        parent::edit_detail($id);
    }

    public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'id_jeniskpr');
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $no_sk = $param['no_sk'];
        $tanggal_surat = $this->totime($param['tanggal_surat']);
        $result = $this->modeldata->getbyarray(array(
            "no_sk" => $no_sk,
            "tanggal_surat" => $tanggal_surat,
        ));
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "message" => $message, "result" => $result));
    }

    public function add() {
        $this->buildcombobox('id_bank', 'kode_bank~nama_bank', $this->bank->getAll());
        $this->buildcomboboxstatic(array(
                                    "SSB#Permohonan Pembayaran Pilihan SSB (Subsidi Selilih Bunga)",
                                    "SSM#Permohonan Pembayaran SSM (Subsidi Selisih Margin)",
                                    "SSA#Permohonan Pembayaran SSA (Subsidi Selisih Angsuran)",
                                    "SBUM#Permohonan Pembayaran SBUM (Subsidi Bantuan Uang Muka)",            
                                ), 'prihal');
        $this->buildcomboboxstatic(array("1#Anuitas", "2#Efektivitas"), 'jenisperhitungan');
        $this->buildcomboboxstatic(array("1#Ya", "0#Tidak"), 'cek_dukcapil');
        $this->data['statuspengajuan'] = 1;
        $this->data['labelstatus'] = 'Draft';
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_bank', 'kode_bank~nama_bank', $this->bank->getAll(),'edit',$row['id_bank']);
        $this->buildcomboboxstatic(array(
                                    "SSB#Permohonan Pembayaran Pilihan SSB (Subsidi Selilih Bunga)",
                                    "SSM#Permohonan Pembayaran SSM (Subsidi Selisih Margin)",
                                    "SSA#Permohonan Pembayaran SSA (Subsidi Selisih Angsuran)",
                                    "SBUM#Permohonan Pembayaran SBUM (Subsidi Bantuan Uang Muka)",            
                                ), 'prihal','edit',$row['prihal']);
        $this->buildcomboboxstatic(array("1#Anuitas", "2#Efektivitas"), 'jenisperhitungan', 'edit', $row['jenisperhitungan']);
        $this->buildcomboboxstatic(array("1#Ya", "0#Tidak"), 'cek_dukcapil', 'edit', $row['cek_dukcapil']);
        $this->data['default']['tanggal_surat'] = $this->totimeindo($row['tanggal_surat']);
        $this->data['default']['daritanggal'] = $this->totimeindo($row['daritanggal']);
        $this->data['default']['sampaitanggal'] = $this->totimeindo($row['sampaitanggal']);
        $this->data['statuspengajuan'] = $row['statuspengajuan'];
        if ($row['statuspengajuan'] == 1) {
            $labelstatus = "Draft";
        } else if ($row['statuspengajuan'] == 2) {
            $labelstatus = "Sudah diproses";
        } else if ($row['statuspengajuan'] == 3) {
            $labelstatus = "Sudah finish";
        }
        $this->data['labelstatus'] = $labelstatus;
        $this->extenddata();
        parent::edit($id);
    }

    public function postdata() {
        if (isset($_REQUEST['formdata'])) {
            $node = parse_url($_REQUEST['formdata']);
            $urlquery = $node['path'];
            parse_str($urlquery, $param);
        } else {
            $param = $this->input->post();
        }
        $valid = false;
        $message = "tidak ada proses";
        $last_id = '';

        if (isset($param['dataintable_length'])) {
            unset($param['dataintable_length']);
        }

        if ($param['actiondata'] !== 'delete') {
            $this->upload_lampiran_spv(0);
            $this->upload_lampiran_drkas(0);
            $this->upload_lampiran_form1(0);
            $this->upload_lampiran_lainnya(0);
            $param['tanggal_surat'] = $this->totime($param['tanggal_surat']);
            $param['daritanggal'] = $this->totime($param['daritanggal']);
            $param['sampaitanggal'] = $this->totime($param['sampaitanggal']);

            if ($param['actiondata'] == 'create') {
                $checkdata = $this->modeldata->getbyarray(array(
                    "no_sk" => $param['no_sk']
                ));
                if (empty($checkdata)) {
                    $record = array(
                        "no_sk" => $param['no_sk'],
                        "tanggal_surat" => $param['tanggal_surat'],
                        "daritanggal" => $param['daritanggal'],
                        "sampaitanggal" => $param['sampaitanggal'],
                        "prihal" => $param['prihal'],
                        "penagihanke" => $param['penagihanke'],
                        "id_bank" => $param['id_bank'],
                        "jenisperhitungan" => $param['jenisperhitungan'],
                        "cek_dukcapil" => $param['cek_dukcapil'],
                    );
                    $last_id = $this->modeldata->insertdata($record);
                    $this->upload_lampiran_spv($last_id);
                    $this->upload_lampiran_drkas($last_id);
                    $this->upload_lampiran_form1($last_id);
                    $this->upload_lampiran_lainnya($last_id);
                    $valid = true;
                    $message = "Data berhasil dibuat";
                } else {
                    $valid = false;
                    $message = "Data sudah ada";
                }
                $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
                exit;
            } else if ($param['actiondata'] == 'update') {
                $last_id = $param['id_t_pengajuanbankheader'];
                $row = $this->modeldata->getby_id_array($last_id);
                $status = $row['statuspengajuan'];
                if ($status == 1) {
                    $record = array(
                        "no_sk" => $param['no_sk'],
                        "tanggal_surat" => $param['tanggal_surat'],
                        "daritanggal" => $param['daritanggal'],
                        "sampaitanggal" => $param['sampaitanggal'],
                        "prihal" => $param['prihal'],
                        "penagihanke" => $param['penagihanke'],
                        "jenisperhitungan" => $param['jenisperhitungan'],
                         "id_bank" => $param['id_bank'],
                        "cek_dukcapil" => $param['cek_dukcapil'],
                    );
                } else {
                    $record = array(
                        "daritanggal" => $param['daritanggal'],
                        "sampaitanggal" => $param['sampaitanggal'],
                        "cek_dukcapil" => $param['cek_dukcapil'],
                        "penagihanke" => $param['penagihanke'],
                    );
                }
            }
            $this->modeldata->updatedata($last_id, $record);
            if ($status == 1) {
                $this->upload_lampiran_spv($last_id);
                $this->upload_lampiran_drkas($last_id);
                $this->upload_lampiran_form1($last_id);
                $this->upload_lampiran_lainnya($last_id);
            }
            $valid = true;
            $message = "Data berhasil diupdate";
            $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
            exit;
        } else {
            $last_id = $param["$this->prefix_id"];
            $checkdetail = $this->modeldata->getdatadetail($last_id);
            if ($checkdetail) {
                $this->modeldata->deletedata_detail_fromheader($last_id);
            }
            $this->modeldata->deletedata($last_id);
            $valid = true;
            $message = "Data berhasil di delete";
            $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
            exit;
        }
    }

    public function upload_lampiran_lainnya($id_t_pengajuanbankheader = 0) {
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 10024;
        $this->load->library('upload', $config);

        if (!empty($_FILES['lampiran_lainnya']['name'])) {
            if ($this->upload->do_upload("lampiran_lainnya")) {
                $data = array('upload_data' => $this->upload->data());
                $namafile = $data['upload_data']['file_name'];
                $post['lampiran_lainnya'] = $path . "/" . $namafile;
                $post['nama_lampiran_lainnya'] = $namafile;
                if ($id_t_pengajuanbankheader > 0) {
                    $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
                }else{
                     unlink($path . "/" . $data['upload_data']['file_name']);
                }
            } else {
                $error = $this->upload->display_errors();
                $jsonmsg = array(
                    "message" => "Process upload lampiran lainnya info error = " . $error,
                    "valid" => false,
                    "postdata" => 'Process upload lampiran lainnya',
                );
                $this->dj($jsonmsg);
                exit;
            }
        }
    }

    public function upload_lampiran_form1($id_t_pengajuanbankheader = 0) {
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'xls|xlsx';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 20024;
        $this->load->library('upload', $config);

        if (!empty($_FILES['lampiran_form1']['name'])) {
            if ($this->upload->do_upload("lampiran_form1")) {
                $data = array('upload_data' => $this->upload->data());
                $namafile = $data['upload_data']['file_name'];
                $post['lampiran_form1'] = $path . "/" . $namafile;
                $post['nama_lampiran_form1'] = $namafile;
                if ($id_t_pengajuanbankheader > 0) {
                    $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
                }else{
                     unlink($path . "/" . $data['upload_data']['file_name']);
                }
            } else {
                $error = $this->upload->display_errors();
                $jsonmsg = array(
                    "message" => "Process upload form 1 info error = " . $error,
                    "valid" => false,
                    "postdata" => 'Process upload form 1 gagal',
                );
                $this->dj($jsonmsg);
                exit;
            }
        }
    }

    public function upload_lampiran_drkas($id_t_pengajuanbankheader = 0) {
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 10024;
        $this->load->library('upload', $config);

        if (!empty($_FILES['lampiran_drkas']['name'])) {
            if ($this->upload->do_upload("lampiran_drkas")) {
                $data = array('upload_data' => $this->upload->data());
                $namafile = $data['upload_data']['file_name'];
                $post['lampiran_drkas'] = $path . "/" . $namafile;
                $post['nama_lampiran_drkas'] = $namafile;
                if ($id_t_pengajuanbankheader > 0) {
                    $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
                }else{
                     unlink($path . "/" . $data['upload_data']['file_name']);
                }
            } else {
                $error = $this->upload->display_errors();
                $jsonmsg = array(
                    "message" => "Process upload daftar rekapitulasi kelompok sasaran info error = " . $error,
                    "valid" => false,
                    "postdata" => 'Process upload daftar rekapitulasi kelompok sasaran gagal',
                );
                $this->dj($jsonmsg);
                exit;
            }
        }
    }

    public function upload_lampiran_spv($id_t_pengajuanbankheader = 0) {
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 10024;
        $this->load->library('upload', $config);

        if (!empty($_FILES['lampiran_spv']['name'])) {
            if ($this->upload->do_upload("lampiran_spv")) {
                $data = array('upload_data' => $this->upload->data());
                $namafile = $data['upload_data']['file_name'];
                $post['lampiran_spv'] = $path . "/" . $namafile;
                $post['nama_lampiran_spv'] = $namafile;
                if ($id_t_pengajuanbankheader > 0) {
                    $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
                }else{
                     unlink($path . "/" . $data['upload_data']['file_name']);
                }
            } else {
                $error = $this->upload->display_errors();
                $jsonmsg = array(
                    "message" => "Process upload surat pernyataan verifikasi info error = " . $error,
                    "valid" => false,
                    "postdata" => 'Process upload surat pernyataan verifikasi gagal',
                );
                $this->dj($jsonmsg);
                exit;
            }
        }
    }

}

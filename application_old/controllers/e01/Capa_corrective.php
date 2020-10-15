<?php

class Capa_corrective extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Corrective';
        $this->load->model('scr/Useraccess_model', 'scr');
    }

    public function index() {
        $this->data['url_index'] = site_url("e01/approve");
        parent::index();
        
    }

    public function add($id) {
        $this->iddata = $id;
        $this->data['id_formulir'] =$this->iddata;
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->scr->getAll());
        $this->data['file_images'] = '';
        $this->data['url_back'] = site_url("e01/Formulir/edit/$id");
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        $this->data['default']['keterangan'] = $row->keterangan;
        parent::add();
    }

    public function postdata() {
        $param = $this->input->post();
        $param['correct_duedate'] = $this->totime($param['correct_duedate']);
        $param['correct_pic'] =  json_encode(implode(", ", $param['correct_pic']));

        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'correct_act');
    }


    // public function postdata() {
    //     if (isset($_REQUEST['formdata'])) {
    //         $node = parse_url($_REQUEST['formdata']);
    //         $urlquery = $node['path'];
    //         parse_str($urlquery, $param);
    //     } else {
    //         $param = $this->input->post();
    //     }
    //     $valid = false;
    //     $message = "tidak ada proses";
    //     $last_id = '';

    //     if (isset($param['dataintable_length'])) {
    //         unset($param['dataintable_length']);
    //     }

    //     if ($param['actiondata'] !== 'delete') {
    //         $this->upload_lampiran_corrective(0);
    //         $this->upload_lampiran_preventive(0);
    //         $param['tanggal_surat'] = $this->totime($param['tanggal_surat']);
    //         $param['daritanggal'] = $this->totime($param['daritanggal']);

    //         if ($param['actiondata'] == 'create') {
    //             if (empty($checkdata)) {
    //                 $record = array(
    //                     "correct_act"        => $param['correct_act'],
    //                     "correct_duedate"    => $param['correct_duedate'],
    //                     "correct_status"     => $param['correct_status'],
    //                     "correct_pic"        => $param['correct_pic'],
    //                     "preventive_act"     => $param['preventive_act'],
    //                     "preventive_duedate" => $param['preventive_duedate'],
    //                     "preventive_status"  => $param['preventive_status'],
    //                     "preventive_pic"     => $param['preventive_pic'],
    //                 );
    //                 $last_id = $this->modeldata->insertdata($record);
    //                 $this->upload_lampiran_corrective($last_id);
    //                 $this->upload_lampiran_preventive($last_id);
    //                 $valid = true;
    //                 $message = "Data berhasil dibuat";
    //             } else {
    //                 $valid = false;
    //                 $message = "Data sudah ada";
    //             }
    //             $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
    //             exit;
    //         } else if ($param['actiondata'] == 'update') {
    //             $last_id = $param['id_t_pengajuanbankheader'];
    //             $row = $this->modeldata->getby_id_array($last_id);
    //             $status = $row['statuspengajuan'];
    //             if ($status == 1) {
    //                 $record = array(
    //                     "correct_act"        => $param['correct_act'],
    //                     "correct_duedate"    => $param['correct_duedate'],
    //                     "correct_status"     => $param['correct_status'],
    //                     "correct_pic"        => $param['correct_pic'],
    //                     "preventive_act"     => $param['preventive_act'],
    //                     "preventive_duedate" => $param['preventive_duedate'],
    //                     "preventive_status"  => $param['preventive_status'],
    //                     "preventive_pic"     => $param['preventive_pic'],
    //                 );
    //             } 
    //         }
    //         $this->modeldata->updatedata($last_id, $record);
    //         if ($status == 1) {
    //             $this->upload_lampiran_corrective($last_id);
    //             $this->upload_lampiran_preventive($last_id);
    //         }
    //         $valid = true;
    //         $message = "Data berhasil diupdate";
    //         $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
    //         exit;
    //     } else {
    //         $last_id = $param["$this->prefix_id"];
    //         $checkdetail = $this->modeldata->getdatadetail($last_id);
    //         if ($checkdetail) {
    //             $this->modeldata->deletedata_detail_fromheader($last_id);
    //         }
    //         $this->modeldata->deletedata($last_id);
    //         $valid = true;
    //         $message = "Data berhasil di delete";
    //         $this->dj(array("valid" => $valid, "message" => $message, "last_id" => $last_id));
    //         exit;
    //     }
    // }

    // public function upload_lampiran_corrective($id_t_pengajuanbankheader = 0) {
    //     $path = "public/uploads/" . strtolower($this->controller);
    //     $config['upload_path'] = "./" . $path;
    //     $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
    //     $config['encrypt_name'] = TRUE;
    //     $config['max_size'] = 10024;
    //     $this->load->library('upload', $config);

    //     if (!empty($_FILES['lampiran_corrective']['name'])) {
    //         if ($this->upload->do_upload("lampiran_corrective")) {
    //             $data = array('upload_data' => $this->upload->data());
    //             $namafile = $data['upload_data']['file_name'];
    //             $post['lampiran_corrective'] = $path . "/" . $namafile;
    //             $post['nama_lampiran_corrective'] = $namafile;
    //             if ($id_t_pengajuanbankheader > 0) {
    //                 $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
    //             }else{
    //                  unlink($path . "/" . $data['upload_data']['file_name']);
    //             }
    //         } else {
    //             $error = $this->upload->display_errors();
    //             $jsonmsg = array(
    //                 "message" => "Process upload lampiran lainnya info error = " . $error,
    //                 "valid" => false,
    //                 "postdata" => 'Process upload lampiran lainnya',
    //             );
    //             $this->dj($jsonmsg);
    //             exit;
    //         }
    //     }
    // }

    // public function upload_lampiran_preventive($id_t_pengajuanbankheader = 0) {
    //     $path = "public/uploads/" . strtolower($this->controller);
    //     $config['upload_path'] = "./" . $path;
    //     $config['allowed_types'] = 'xls|xlsx';
    //     $config['encrypt_name'] = TRUE;
    //     $config['max_size'] = 20024;
    //     $this->load->library('upload', $config);

    //     if (!empty($_FILES['lampiran_preventive']['name'])) {
    //         if ($this->upload->do_upload("lampiran_preventive")) {
    //             $data = array('upload_data' => $this->upload->data());
    //             $namafile = $data['upload_data']['file_name'];
    //             $post['lampiran_preventive'] = $path . "/" . $namafile;
    //             $post['nama_lampiran_preventive'] = $namafile;
    //             if ($id_t_pengajuanbankheader > 0) {
    //                 $this->modeldata->updatedata($id_t_pengajuanbankheader, $post);
    //             }else{
    //                  unlink($path . "/" . $data['upload_data']['file_name']);
    //             }
    //         } else {
    //             $error = $this->upload->display_errors();
    //             $jsonmsg = array(
    //                 "message" => "Process upload form 1 info error = " . $error,
    //                 "valid" => false,
    //                 "postdata" => 'Process upload form 1 gagal',
    //             );
    //             $this->dj($jsonmsg);
    //             exit;
    //         }
    //     }
    // }

   
}
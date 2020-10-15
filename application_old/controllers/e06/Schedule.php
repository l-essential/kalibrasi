<?php
class Schedule extends MY_Controller {

    // public $noview = 0;

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Schedule Work From Home";
        $this->load->model('e_/Karyawan_model','kyw');
        $this->load->model('e06/Schedule_mysql_model','insertmysql');
        $this->load->model('e06/Schedule_model','modeldata');
    }

     public function index() {
        $this->data['url_getschedule'] = site_url($this->controller . "/getschedule/");
        $this->data['url_grid_detail'] = site_url($this->controller . '/grid_schedule');
        parent::index();
    }

    public function add() {
        $this->data['url_setmasuk'] = site_url($this->controller . '/setmasuk');
        $this->data['url_date01'] = site_url($this->controller . '/date01');
        $this->data['url_date02'] = site_url($this->controller . '/date02');
        $this->data['url_date03'] = site_url($this->controller . '/date03');
        $this->data['url_date04'] = site_url($this->controller . '/date04');
        $this->data['url_date05'] = site_url($this->controller . '/date05');
        $this->data['url_date06'] = site_url($this->controller . '/date06');
        $this->data['url_date07'] = site_url($this->controller . '/date07');
        $this->data['url_date08'] = site_url($this->controller . '/date08');
        $this->data['url_date09'] = site_url($this->controller . '/date09');
        $this->data['url_date10'] = site_url($this->controller . '/date10');
        $this->data['url_date11'] = site_url($this->controller . '/date11');
        $this->data['url_date12'] = site_url($this->controller . '/date12');
        $this->data['url_date13'] = site_url($this->controller . '/date13');
        $this->data['url_date14'] = site_url($this->controller . '/date14');
        $this->data['url_date15'] = site_url($this->controller . '/date15');
        $this->data['url_date16'] = site_url($this->controller . '/date16');
        $this->data['url_date17'] = site_url($this->controller . '/date17');
        $this->data['url_date18'] = site_url($this->controller . '/date18');
        $this->data['url_date19'] = site_url($this->controller . '/date19');
        $this->data['url_date20'] = site_url($this->controller . '/date20');
        $this->data['url_date21'] = site_url($this->controller . '/date21');
        $this->data['url_date22'] = site_url($this->controller . '/date22');
        $this->data['url_date23'] = site_url($this->controller . '/date23');
        $this->data['url_date24'] = site_url($this->controller . '/date24');
        $this->data['url_date25'] = site_url($this->controller . '/date25');
        $this->data['url_date26'] = site_url($this->controller . '/date26');
        $this->data['url_date27'] = site_url($this->controller . '/date27');
        $this->data['url_date28'] = site_url($this->controller . '/date28');
        $this->data['url_date29'] = site_url($this->controller . '/date29');
        $this->data['url_date30'] = site_url($this->controller . '/date30');
        $this->data['url_date31'] = site_url($this->controller . '/date31');

        $this->data['url_setlbr'] = site_url($this->controller . '/setlbr');
        $this->data['url_setlain'] = site_url($this->controller . '/setlain');
        $this->data['url_grid'] = site_url($this->controller . '/grid');
        parent::add();
    }


    public function home_schedule($id_formulir) {
        $rowdetail = $this->modeldata->getby_id_array($id_formulir);
        $this->data['rowdetail'] = $rowdetail;
        $this->data['prefix_id'] = 'id_formulir';
        $this->data['url_grid_schedule'] = site_url($this->controller . "/grid_schedule/");
        $this->load->view($this->view . '/home_schedule', $this->data);
    }

    public function grid_schedule() {
        $check = $this->insertmysql->getGridData();
        if (!is_null($check)) {
            $result = $this->insertmysql->getGridData()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function grid() {
        $check = $this->modeldata->getGridData();
        if (!is_null($check)) {
            $result = $this->modeldata->getGridData()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    function setmasuk() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date2 = $post['date2'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $kodeseksi =  $rowid->KodeSeksi; 
        $checkdata = $this->insertmysql->checkData($post->rowid);
        // var_dump($checkdata);
        // die();
        if (empty($checkdata)) {
                    $record = array(
                        "NIK"           => $id,
                        "department"    => $department,
                        "nama_karyawan" => $karyawan,
                        "schedule"      => 1,
                        "KodeSeksi"     => $kodeseksi,
                        "schedule_date" => $date,
                        "schedule_date2" => $date2,
                    );
            $this->insertmysql->create_schedule($record);
            $valid = true;
            $message = "Data success created";
        } else {
            $valid = false;
            $message = "Data already exist";
        }

        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
        ));
    }


    function date01() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date01 = $post['date01'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $kodeseksi =  $rowid->KodeSeksi; 
        $checkdata = $this->insertmysql->checkData($post->rowid);
        // var_dump($checkdata);
        // die();
        if (empty($checkdata)) {
                    $record = array(
                        "NIK"           => $id,
                        "department"    => $department,
                        "nama_karyawan" => $karyawan,
                        "KodeSeksi"     => $kodeseksi,
                        "schedule_date" => $date,
                        "date01"        => $date01,
                    );
            $this->insertmysql->create_schedule($record);
            $valid = true;
            $message = "Data success created";
        } else {
            $valid = false;
            $message = "Data already exist";
        }

        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date02() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date02 = $post['date02'];
                    $record = array(
                        "date02"        => $date02,
                    );
            $this->insertmysql->update_date02($id, $date, $record);
            $valid = true;
            $message = "Data success update";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date03() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date03 = $post['date03'];
                    $record = array(
                        "date03"        => $date03,
                    );
        $this->insertmysql->update_date03($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date04() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date04 = $post['date04'];
                    $record = array(
                        "date04"        => $date04,
                    );
        $this->insertmysql->update_date04($id, $date, $record);
            $valid = true;
            $message = "Data success created";

        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
        ));
    }


    function date05() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date05 = $post['date05'];
                    $record = array(
                        "date05"        => $date05,
                    );
        $this->insertmysql->update_date05($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date06() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date06 = $post['date06'];
                    $record = array(
                        "date06"        => $date06,
                    );
        $this->insertmysql->update_date06($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date07() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date07 = $post['date07'];
                    $record = array(
                        "date07"        => $date07,
                    );
        $this->insertmysql->update_date07($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date08() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date08 = $post['date08'];
                    $record = array(
                        "date08"        => $date08,
                    );
        $this->insertmysql->update_date08($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date09() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date09 = $post['date09'];
                    $record = array(
                        "date09"        => $date09,
                    );
        $this->insertmysql->update_date09($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    function date10() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date10 = $post['date10'];
                    $record = array(
                        "date10"        => $date10,
                    );
        $this->insertmysql->update_date10($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date11() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date11 = $post['date11'];
                    $record = array(
                        "date11"        => $date11,
                    );
        $this->insertmysql->update_date11($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date12() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date12 = $post['date12'];
                    $record = array(
                        "date12"        => $date12,
                    );
        $this->insertmysql->update_date12($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date13() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date13 = $post['date13'];
                    $record = array(
                        "date13"        => $date13,
                    );
        $this->insertmysql->update_date13($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date14() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date14 = $post['date14'];
                    $record = array(
                        "date14"        => $date14,
                    );
        $this->insertmysql->update_date14($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date15() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date15 = $post['date15'];
                    $record = array(
                        "date15"        => $date15,
                    );
        $this->insertmysql->update_date15($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date16() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date16 = $post['date16'];
                    $record = array(
                        "date16"        => $date16,
                    );
        $this->insertmysql->update_date16($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date17() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date17 = $post['date17'];
                    $record = array(
                        "date17"        => $date17,
                    );
        $this->insertmysql->update_date17($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date18() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date18 = $post['date18'];
                    $record = array(
                        "date18"        => $date18,
                    );
        $this->insertmysql->update_date18($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date19() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date19 = $post['date19'];
                    $record = array(
                        "date19"        => $date19,
                    );
        $this->insertmysql->update_date19($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date20() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date20 = $post['date20'];
                    $record = array(
                        "date20"        => $date20,
                    );
        $this->insertmysql->update_date20($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date21() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date21 = $post['date21'];
                    $record = array(
                        "date21"        => $date21,
                    );
        $this->insertmysql->update_date21($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date22() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date22 = $post['date22'];
                    $record = array(
                        "date22"        => $date22,
                    );
        $this->insertmysql->update_date22($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date23() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date23 = $post['date23'];
                    $record = array(
                        "date23"        => $date23,
                    );
        $this->insertmysql->update_date23($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date24() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date24 = $post['date24'];
                    $record = array(
                        "date24"        => $date24,
                    );
        $this->insertmysql->update_date24($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date25() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date25 = $post['date25'];
                    $record = array(
                        "date25"        => $date25,
                    );
        $this->insertmysql->update_date25($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date26() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date26 = $post['date26'];
                    $record = array(
                        "date26"        => $date26,
                    );
        $this->insertmysql->update_date26($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date27() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date27 = $post['date27'];
                    $record = array(
                        "date27"        => $date27,
                    );
        $this->insertmysql->update_date27($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date28() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date28 = $post['date28'];
                    $record = array(
                        "date28"        => $date28,
                    );
        $this->insertmysql->update_date28($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date29() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date29 = $post['date29'];
                    $record = array(
                        "date29"        => $date29,
                    );
        $this->insertmysql->update_date29($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date30() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date30 = $post['date30'];
                    $record = array(
                        "date30"        => $date30,
                    );
        $this->insertmysql->update_date30($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    function date31() {
        $id = $post['idtr'];
        $date = $post['date'];
        $date31 = $post['date31'];
                    $record = array(
                        "date31"        => $date31,
                    );
        $this->insertmysql->update_date31($id, $date, $record);
            $valid = true;
            $message = "Data success created";

            $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }


    

    function setlain() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $date = $post['date'];
        $date2 = $post['date2'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $kodeseksi =  $rowid->KodeSeksi; 
        $checkdata = $this->insertmysql->checkData($post->rowid);
        // var_dump($checkdata);
        // die();
        if (empty($checkdata)) {
                    $record = array(
                        "NIK"           => $id,
                        "department"    => $department,
                        "nama_karyawan" => $karyawan,
                        "schedule"      => 4,
                        "KodeSeksi"     => $kodeseksi,
                        "schedule_date" => $date,
                        "schedule_date2" => $date2,
                    );
            $this->insertmysql->create_schedule($record);
            $valid = true;
            $message = "Data success created";
        } else {
            $valid = false;
            $message = "Data already exist";
        }

        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function create($id) {
        $rowid = $this->eks->getby_calibration($id);
        $calibration_id = $rowid->calibration_id;
        $periode_year = ($rowid->periode_year) + 1;
        $record = array(
            "calibration_id"       => $calibration_id, 
            "periode_year"         => $periode_year,
            "periode_date"         => date('Y-m-d', strtotime('+1 years')),
            "calibration_executor" => $this->session->userdata('ses_id_user'),
            "status_calibration"   => 0,
        );
        $this->eks->create_kalibrasi($record);
    }


}

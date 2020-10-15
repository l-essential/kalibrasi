<?php
class Compare extends MY_Controller {

    // public $noview = 0;

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="COMPARE SCHEDULE WFH BY HRIS";
        $this->load->model('e_/Karyawan_model','kyw');
        $this->load->model('e06/Schedule_mysql_model','insertmysql');
        $this->load->model('e06/Schedule_model','modeldata');
        $this->load->model('e_/Divisi_model', 'dvs');
        $this->load->model('e_/Department_model', 'dpt');
        $this->load->model('e_/Seksi_model', 'sks');
    }

    public function home_compare() {
        error_reporting(0);
        $this->data['title'] = 'COMPARE SCHEDULE WFH BY HRIS';
        $this->buildcombobox('kodeDivisi', 'namaDivisi', $this->dvs->getAll());
        $this->buildcombobox('kodeDepartment', 'namaDepartment', $this->dpt->getAll());
        $this->buildcombobox('KodeSeksi', 'namaSeksi', $this->sks->getAll());
        $this->data['url_index'] = site_url($this->controller . '/home_laporan');
        $this->data['url_generatereport'] = site_url($this->controller . '/generatereport');
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');
        $this->load->view($this->view . '/home_compare', $this->data);
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
                        "schedule_date" => date('Y-m-d'),
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

    function setwfh() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $record = array(
            "NIK"           => $id,
            "department"    => $department,
            "nama_karyawan" => $karyawan,
            "schedule"      => 2,
            "schedule_date" => date('Y-m-d'),
        );
        $this->insertmysql->create_schedule($record);

        $jsonmsg = array(
                            "message" => 'Data insert success',
                            "valid" => true
                        );

        $this->dj($jsonmsg);
       
        // $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        // echo json_encode($jsonmsg);
    }

    function setlbr() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $record = array(
            "NIK"           => $id,
            "department"    => $department,
            "nama_karyawan" => $karyawan,
            "schedule"      => 3,
            "schedule_date" => date('Y-m-d', strtotime('+1 d')),
        );
        $this->insertmysql->create_schedule($record);

        $jsonmsg = array(
                    "msg" => 'Data insert success',
                    "valid" => true,
                );

        $this->dj($jsonmsg);
       
        // $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        // echo json_encode($jsonmsg);
    }

    function setlain() {
        $post = $this->input->post();
        $id = $post['idtr'];
        $rowid = $this->modeldata->getby_idnik($id);
        $karyawan =  $rowid->namaKaryawan;
        $department =  $rowid->namaSeksi;
        $record = array(
            "NIK"           => $id,
            "department"    => $department,
            "nama_karyawan" => $karyawan,
            "schedule"      => 4,
            "schedule_date" => date('Y-m-d'),
        );
        $this->insertmysql->create_schedule($record);

        $jsonmsg = array(
                    "msg" => 'Data insert success',
                    "valid" => true,
                );

        $this->dj($jsonmsg);
       
        // $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        // echo json_encode($jsonmsg);
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

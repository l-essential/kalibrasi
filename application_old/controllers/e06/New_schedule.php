<?php

class New_schedule extends MY_Controller {

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Schedule Work From Home";
        $this->load->model('scr/Useraccess_model','user');
        $this->load->model('e06/Schedule_mysql_model','insertmysql');
    }

    public function index() {
        $this->data['url_schedule'] = site_url($this->controller . "/getschedule/");
        $this->data['url_lock_schedule'] = site_url($this->controller . "/url_lock_schedule/");
        parent::index();
    }

    public function add() {
        $rowget_enddate =  $this->modeldata->get_enddate();
        $this->data['get_enddate'] = $rowget_enddate->end_date;
        parent:: add();
    }

    function url_lock_schedule() {
        $post = $this->input->post();
        $id = $post['id'];
        $approve = $post['approve'];
        // var_dump($checkdata);
        // die();
        if (empty($checkdata)) {
                    $record = array(
                        'updateby'          => $this->session->userdata('ses_id_user'),
                        'updatetime'        => date('Y-m-d H:i:s'),
                        "approve_schedule"  => $approve,
                    );
            $this->modeldata->updatedata($id,$record);
            $valid = true;
            $message = "Data success created";
        } else {
            $valid = false;
            $message = "Data already exist";
        }

        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
            echo json_encode($jsonmsg);
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param ['actiondata'];
        $code = $this->session->userdata('ses_KodeSeksi')."/".$param ['start_date'];
        $param['end_date'] = date("Y-m-d", strtotime($param['end_date'])); 
        switch ($actiondata) {
            case "create":

                $checkdata = $this->modeldata->check_data($code);

                if (empty($checkdata)) {
                    
                    $record = array('schedule_id'       => $param['schedule_id'],
                                    'code_schedule'     => $code,
                                    'start_date'        => $param ['start_date'],
                                    'end_date'          => $param ['end_date']
                                    );
                    // var_dump($record);
                    // die();
                    $schedule_id = $this->modeldata->insertdata($record);

                    $startdate = strtotime($param['start_date']);
                    $enddate = strtotime( $param['end_date']);
                    
                    for ( $i = $startdate; $i <= $enddate; $i = $i + 86400 ) {
                        $thisDate = date( 'Y-m-d', $i );
                        $record2[] = array ('schedule_id'   => $schedule_id,
                                            'code_schedule' => $code,
                                            'createby'      => $this->session->userdata('ses_id_user'),
                                            'createtime'    => date('Y-m-d H:i:s'),
                                            'schedule_date' => $thisDate,
                                            );
                                           
                    }
                    // var_dump($record2);
                    // die();
                    $this->modeldata->insertdata_record2($record2);
                    
                    $depart = $param ['namaKaryawan'];
                    $record3 = array();
                        foreach($depart AS $key => $val){
                            $record3[] = array('schedule_id'     => $schedule_id,
                                               'code_schedule'   => $code,
                                               'createby'        => $this->session->userdata('ses_id_user'),
                                               'createtime'      => date('Y-m-d H:i:s'),
                                               'namaKaryawan'    => $param ['namaKaryawan'][$key]
                                               );
			        }      
                    // var_dump($record3);
                    // die();
                    $this->modeldata->insertdata_record3($record3);


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
                $schedule_id = $param['schedule_id'];

                // update formulir
                $record = array('code_schedule'     => $code,
                                'start_date'        => $param ['start_date'],
                                'end_date'          => $param ['end_date']
                                );
                $this->modeldata->updatedata($schedule_id, $record);

                $startdate = strtotime($param['start_date']);
                $enddate = strtotime( $param['end_date']);
                for ( $i = $startdate; $i <= $enddate; $i = $i + 86400 ) {
                    $thisDate = date( 'Y-m-d', $i );
                    $record2[] = array ('schedule_id'   => $schedule_id,
                                        'code_schedule' => $code,
                                        'updateby'      => $this->session->userdata('ses_id_user'),
                                        'updatetime'    => date('Y-m-d H:i:s'),
                                        'schedule_date' => $thisDate,
                                        );
                                       
                }
                // var_dump($record3);
                // die();
                // $this->modeldata->deletedata_recored2($schedule_id);
                $this->modeldata->updatedata_recored2($schedule_id,$record2);

                $depart = $param ['namaKaryawan'];
                    $record3 = array();
                        foreach($depart AS $key => $val){
                            $record3[] = array('schedule_id'     => $schedule_id,
                                               'code_schedule'   => $code,
                                               'createby'        => $this->session->userdata('ses_id_user'),
                                               'createtime'      => date('Y-m-d H:i:s'),
                                               'namaKaryawan'    => $param ['namaKaryawan'][$key]
                                               );
                    }
                $this->modeldata->updatedata_recored3($schedule_id,$record3);


                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
            case "delete":
                $schedule_id = $param['schedule_id'];
                $this->modeldata->deletedata($schedule_id);
                $this->modeldata->deletedata_recored2($schedule_id);
                $this->modeldata->deletedata_recored3($schedule_id);
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

    public function getschedule($schedule_id) {
        $rowdetail = $this->modeldata->getby_id_array($schedule_id);
        $rowgetdate = $this->modeldata ->Getdate_schedule($schedule_id);
        $rowuser = $this->modeldata->Getdate_user($schedule_id);
        $cosplan = $this->modeldata->total_schedule_id($schedule_id);
        $this->data['getdate'] = $rowgetdate;
        $this->data['getuser'] = $rowuser;
        $this->data['rowdetail'] = $rowdetail;
        $this->data['cosplan'] = $cosplan;
        $this->data['prefix_id'] = 'schedule_id ';
        $this->data['url_grid_schedule'] = site_url($this->controller . "/grid_schedule/$schedule_id");
        $this->data['url_date01'] = site_url($this->controller . '/date01');
        $this->load->view($this->view . '/home_schedule', $this->data);
    }

    public function grid_schedule($schedule_id) {
        $check = $this->modeldata->GridData_schedule($schedule_id);
        if (!is_null($check)) {
            $result = $this->modeldata->GridData_schedule($schedule_id)->result();
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

    function date01() {
        $post = $this->input->post();
        $id = $post['id'];
        $date = $post['date'];
        $name = $post['name'];
        $status = $post['status'];
        // var_dump($checkdata);
        // die();
        
        // var_dump($checkdata);
        // die();
                    $record = array(
                        "schedule_id"      => $id,
                        "schedule_date"    => $date,
                        "namaKaryawan"     => $name,
                        "status_schedule"  => $status
                    );
        $checkdata = $this->insertmysql->checkData($date, $name);
        if ($checkdata > 0 ){
            $this->insertmysql->update_schedule($date,$name,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->insertmysql->create_schedule($record);
            $valid = false;
            $message = "created Data success";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }



}

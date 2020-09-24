<?php

class New_schedule_user extends MY_Controller {

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Schedule " .$this->session->userdata('ses_username');
        $this->load->model('scr/Useraccess_model','user');
        $this->load->model('e06/New_schedule_user_model','su');
       
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 
        $this->title = 'Location';
    }

    public function index() {
        $this->data['url_list'] = site_url($this->controller . "/list_schedule_user/");
        parent::index();
    }

    public function add() {
        $this->extenddata();
        parent::add();
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->extenddata();
        parent::edit($id);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['code_schedule'] = $row;
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        parent::edit_detail($id);
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['code_schedule'];
        $result = $this->modeldata->getby_name('code_schedule', $checkfield);
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
        if ($param['actiondata'] !== 'delete') {
            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
            }
            if (isset($param['dataintablebunga_length'])) {
                unset($param['dataintablebunga_length']);
            }
            if (isset($param['dataintablequota_length'])) {
                unset($param['dataintablequota_length']);
            }
            if (isset($param['id'])) {
                unset($param['id']);
            }
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
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

    // public function list_schedule_user($schedule_id) {
    //     $this->data['title']  = 'Schedule';
    //     $rowuser = $this->modeldata->Getdate_schedule($schedule_id);
    //     $this->data['getuser'] = $rowuser;
    //     $this->data['url_grid'] = site_url($this->controller . "/grid_schedule/$schedule_id");
    //     $this->data['url_update'] = site_url($this->controller . "/update");
    //     $this->load->view($this->view . '/home_schedule', $this->data);
    // }

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

    public function edit_schedule_byuser($schedule_byuser) {
        $this->iddata = $schedule_byuser;
        $row = $this->modeldata->getby_id_user($this->iddata);
        $schedule_byuser = $row->schedule_byuser;
        $schedule_id = $row->schedule_id;
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_dsuser;
        $this->data['schedule_id'] = $schedule_id;
        $this->data['schedule_byuser'] = $schedule_byuser;
        $this->data['default']['schedule_note_user'] = $row->schedule_note_user;
        $this->data['url_post'] = site_url($this->controller . '/post_byuser');
        $this->data['url_index'] = site_url($this->controller . "/list_schedule_user/$shcedule_id");
        $this->load->view($this->view . '/form_by_user', $this->data);
    }

    public function post_byuser() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {

            if ($param['actiondata'] == 'update') {
               
                if (empty($checkdata)) {
                    $user_id = $param ['schedule_byuser'];
                    $record = array(
                        "schedule_note_user" => $param['schedule_note_user'],
                    );
                    $this->su->insertdata_user($user_id, $record);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    $valid = false;
                    $msg = "Data already exist";
                }
                $this->dj(array(
                    "valid" => $valid,
                    "msg" => $msg,
                ));
                exit;
            } else {
                $this->postdatabyparam($param);
            }
        } else {
            parent::postdata();
        }
    }


    // public function post_byuser() {
    //     $param = $this->input->post();
    //     if ($param['actiondata'] !== 'delete') {
    //         if (isset($param['dataintable_length'])) {
    //             unset($param['dataintable_length']);
    //         }
    //         if (isset($param['dataintablebunga_length'])) {
    //             unset($param['dataintablebunga_length']);
    //         }
    //         if (isset($param['dataintablequota_length'])) {
    //             unset($param['dataintablequota_length']);
    //         }
    //         if (isset($param['id'])) {
    //             unset($param['id']);
    //         }
    //         $this->postdatabyparam($param);
    //     } else {
    //         parent::postdata();
    //     }
    // }

    // public function post_byuser() {
    //     $param = $this->input->post();
    //     $actiondata = $param['actiondatarca'];

    //     switch ($actiondata) {
    //         case "create":
    //             if (empty($checkdata)) {
    //                 $record = array(
    //                     "id_formulir"        => $param['id_formulir'],
    //                     "personel"           => $param['personel'],
    //                     "material"           => $param['material'],
    //                     "alat_mesin"         => $param['alat_mesin'],
    //                     "metode"             => $param['metode'],
    //                     "sarana"             => $param['sarana'],
    //                     "department_name"    => $param ['department_name']
    //                 );
    //                 $this->modeldata->insertrca($record);
    //                 $valid = true;
    //                 $msg = "Data success created";
    //             } else {
    //                 $valid = false;
    //                 $msg = "Data already exist";
    //             }
    //             break;
    //         case "update":
    //             $id_rootcause = $param['id_rootcause'];
    //             $record = array(
    //                 "personel" => $param['personel'],
    //                 "material" => $param['material'],
    //                 "alat_mesin" => $param['alat_mesin'],
    //                 "metode" => $param['metode'],
    //                 "sarana" => $param['sarana']
    //             );
    //             // var_dump($record);
    //             // die();
    //             $this->modeldata->updaterca($id_rootcause, $record);
    //             $valid = true;
    //             $msg = "Data success updated";
    //             break;
    //         case "delete":
    //             $id_rootcause = $param['id_rootcause'];
    //             $this->modeldata->deleterca($id_rootcause);
    //             $valid = true;
    //             $msg = "Data success deleted";
    //             break;

    //         default:
    //             $valid = false;
    //             $msg = "No action";
    //             break;
    //     }
    //     $this->dj(array(
    //         "valid" => $valid,
    //         "msg" => $msg,
    //     ));
    // }

    function update() {
        $post = $this->input->post();
        $id = $post['id'];
        $note = $post['note'];
      
                    $record = array(
                        "schedule_note_user"     => $note,
                    );
        $checkdata = $this->modeldata->checkData($id);
        if ($checkdata > 0 ){
            $this->modeldata->insertdata_user($id,$record);
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

<?php

class Home extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Kalibrasi';
        $this->load->model($this->pathclass . '/Home_model', 'modeldatalog');
         $this->load->model($this->pathclass . '/Total_kalibrasi_model', 'total');
         $this->load->model('e04/external_model', 'eks');
    }

    public function index() {
        $this->data['total_internal'] = $this->total->total_internal();
        $this->data['total_external'] = $this->total->total_external();
        $this->data['url_grid_eksternal'] = site_url($this->controller . "/grid_eksternal/");
        $this->data['url_setstatus'] = site_url($this->controller . '/setstatus');
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
    }

    
    public function grid_eksternal() {
        $check = $this->modeldatalog->GridData_eksternal();
        if (!is_null($check)) {
            $result = $this->modeldatalog->GridData_eksternal()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

     function setstatus() {
        $post = $this->input->post();
        $id = $post['id'];
        if ($post['status'] == '0') {
            $status = '0';
        } else {
            $status = '1';
        }
        $record = array(
            "status_calibration" => $status
        );
        $this->eks->updatedata_kalibrasi($id, $record);
         if ($status == '1') {
            $this->create_kalibrasi($id);
            }
       
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function create_kalibrasi($id) {
        $rowid = $this->eks->getby_calibration($id);
        $calibration_id = $rowid->calibration_id;
        $periode_year = ($rowid->periode_year) + 1;
        $record = array(
            "calibration_id"       => $calibration_id, 
            "periode_year"         => $periode_year,
            "periode_date"         => date('Y-m-d', strtotime('+1 years')),
            "status_calibration"   => 0,
        );
        if($lastno>1){
            $this->modeldatalog->update_kalibrasi($h_kt,$h_th,$h_bln,$no);
       } else {
           $this->modeldatalog->insert_kalibrasi($record1);
       }
        // $this->eks->create_kalibrasi($record);
    }

    public function Preview($id) {
        $rowpreview = $this->eks->preview_getbyid($id);
        $this->data['preview'] = $rowpreview;
        $this->data['modeldata'] = $this->modeldata;
        $this->data['url_index'] = site_url($this->controller);
        $this->data['url_grid'] = site_url($this->controller . "/grid_detail_kalibrasi/$id");
        $this->data['url_setstatus'] = site_url($this->controller . "/setstatuspreview");
        $this->data['url_edit_view'] = site_url($this->controller . "/edit_view");
        $this->data['prefix_id'] = $this->prefix_id;
        $this->load->view($this->view . '/home_preview', $this->data);
         
    }

    public function grid_detail_kalibrasi($id) {
        $check = $this->eks->GridData_kalibrasi($id);
        if (!is_null($check)) {
            $result = $this->eks->GridData_kalibrasi($id)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function edit_view($id) {
        $this->iddata = $id;
        $row = $this->modeldatalog->getby_id_view($this->iddata);
        $calibation_id = $row->calibation_id;
        $rowrca = $this->modeldatalog->getby_id_array($calibation_id);
        $this->data['title'] = "Update - Kalibrasi untuk " . $rowrca['calibration_code'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_rca;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['default']['vendor_id'] = $row->vendor_id;
        $this->data['default']['periode_information'] = $row->periode_information;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/post_view');
        $this->data['url_index'] = site_url($this->controller . "/Preview/$calibation_id");
        $this->load->view($this->view . '/form_view', $this->data);
    }


    public function post_view() {
        $param = $this->input->post();
        $actiondata = $param['actiondata_view'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "periode_id" => $param['periode_id'],
                        "vendor_id" => $param['vendor_id'],
                        "periode_information" => $param['periode_information'],
                    );
                    $this->modeldata->insertrca($record);
                    $valid = true;
                    $msg = "Data success created";
                } else {
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;
            case "update":
                $id_rootcause = $param['id_rootcause'];
                $record = array(
                        "periode_id" => $param['periode_id'],
                        "vendor_id" => $param['vendor_id'],
                        "periode_information" => $param['periode_information'],
                );
                // var_dump($record);
                // die();
                $this->modeldata->updaterca($id_rootcause, $record);
                $valid = true;
                $msg = "Data success updated";
                break;
            case "delete":
                $id_rootcause = $param['id_rootcause'];
                $this->modeldata->deleterca($id_rootcause);
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
        ));
    }


    // public function grid_eksternal() {
    //     $check = $this->modeldatalog->GridData_internal();
    //     if (!is_null($check)) {
    //         $result = $this->modeldatalog->GridData_internal()->result();
    //     } else {
    //         $result = '';
    //     }
    //     echo json_encode(array(
    //         "data" => $result
    //     ));
    // }

}

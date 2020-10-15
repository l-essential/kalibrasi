<?php

class Calibration extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'NEW ID Kalibrasi';
        $this->infoheader = 'calibration_code';
        $this->fieldnotgenerate = array("calibration_executor");
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 

        $this->load->model('e00/Scope_model', 'scope');
            $this->load->model('e04/Tools_model', 'tools');
                 $this->load->model('e04/periode_model', 'periode');
                     $this->setmodel($this->pathclass . '/Vendor_model#vendor');
                            $this->load->model('e00/Location_model', 'location');
                                $this->load->model('e00/Position_model', 'position');
                                    $this->load->model('e01/Formulir_model', 'modeldatalog');
                                $this->load->model('e04/Calibration_model', 'eks');
                                $this->load->model('Calibration_po_model', 'modeldata');
   
    }

    public function index() {
        $this->data['url_adddetail'] = site_url($this->controller . '/adddetail');
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }

     public function home_detail($id_header) {
        $this->data['url_setstatus'] = site_url($this->controller . '/setstatus');
        $this->data['url_complete'] = site_url($this->controller . '/setcomplete');
        parent::home_detail($id_header);
    }

    public function add() {
        $this->buildcombobox('tools_code', 'tools_name', $this->tools->getAll());
        $this->buildcombobox('location_name', 'location_name', $this->location->getAll());
        $this->buildcombobox('position_name', 'position_name', $this->position->getAll());
        $this->buildcombobox('scope_code', 'scope_name', $this->scope->getAll());
        $this->data['default']['tools_code'] = '';
        $this->data['default']['calibration_position'] = 'Internal';
        $this->data['default']['startcalibration_date'] = '';
        // $this->data['default']['tools_no_sertifikat'] = '';
        $this->data['default']['calibration_status'] = '1';
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        // $this->buildcombobox('tools_code', 'tools_name', $this->tools->getAll(), 'edit', $row['calibration_name']);
        // $this->buildcombobox('tools_code', 'tools_name', $this->tools->getAll(), 'edit', $row['calibration_name']);
        $this->buildcombobox('location_name', 'location_name', $this->location->getAll(), 'edit', $row['location_name']);
        $this->buildcombobox('position_name', 'position_name', $this->position->getAll(), 'edit', $row['position_name']);
        $this->buildcombobox('scope_code', 'scope_name', $this->scope->getAll(), 'edit', $row['scope_code']);
        $this->data['default']['startcalibration_date'] = date("d-m-Y", strtotime($row['startcalibration_date']));
        $rowtools = $this->tools->getby_id_array($row['tools_id']);
        $this->data['default']['readonly_tools_name'] = $rowtools['tools_name'];
        $this->extenddata();
        parent::edit($id);
    }
   

      public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];
        $param['startcalibration_date'] = date("Y-m-d", strtotime($param['startcalibration_date']));
         

        switch ($actiondata) {
            case "create":
                  $checkdata = $this->modeldata->getcalibration($param['calibration_id'], $param['calibration_code']);
                          
                if (empty($checkdata)) {
                    $record = array(
                        "calibration_code"      => $param ['calibration_code'],
                        "calibration_type"      => $param ['calibration_type'],
                        "startcalibration_date" => $param ['startcalibration_date'],
                        "scope_code"            => $param ['scope_code'],
                        "location_name"         => $param ['location_name'],
                        "position_name"         => $param ['position_name'],
                        "calibration_status"    => $param ['calibration_status'],
                        "tools_id"              => $param ['tools_id'],
                        "tools_code"            => $param ['tools_code'],
                      
                    );
                    // var_dump($record);
                    // die();
                    $record1 = array(
                        "name_apps"            => $param ['name_apps'],
                        "program"              => $param ['h_kt'],
                        "periode"              => $param ['h_th'],
                        "bln"                  => $param ['h_bln'],
                        "lastno"               => $param ['h_no'],
                    );

                   
                    $h_kt   = $param ['h_kt'];
                    $h_th   = $param ['h_th'];
                    $h_bln  = $param ['h_bln'];
                    $lastno = $param ['h_no']; 
                    $no=$lastno;
                    if($lastno>1){
                        
                        $this->modeldatalog->updatelogno($h_kt,$h_th,$h_bln,$no);
                    }
                    else{

                         $this->modeldatalog->insertlogno($record1);
                    }
                    // var_dump($lastno);
                    // die();
                    $this->modeldata->insertdata($record);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    // $id_formulir = 0;
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;
                // --- update data formulir
            case "update":
                $calibration_id = $param['calibration_id'];
                 $record = array(
                        
                        "startcalibration_date"        => $param ['startcalibration_date'],
                        "scope_code"                   => $param ['scope_code'],
                        "location_name"                => $param ['location_name'],
                        "position_name"                => $param ['position_name'],
                        "calibration_status"           => $param ['calibration_status'],
                       
                    );
                // var_dump($record);
                // die();
                $this->modeldata->updatedata($calibration_id,$record);
                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
            case "delete":
                $calibration_id = $param['calibration_id'];
                $this->modeldata->deletedata($calibration_id);
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
            "ref_id" => $calibration_id,
        ));
    
    }

    public function add_detail($id_header) {
        $rowheader = $this->modeldata->getby_id_array($id_header);
        $this->data['rowheader'] = $rowheader;
        $this->data['tools_id'] =  $rowheader["tools_id"];
        $this->buildcomboboxstatic(array("1#internal", "2#eksternal"), 'calibration_executor');
        $this->buildcombobox('vendor_id', 'vendor_name', $this->vendor->getAll());
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        $this->buildcomboboxstatic(array("1#internal", "2#eksternal"), 'calibration_executor', 'edit', $row['calibration_executor']);
        $this->buildcombobox('vendor_id', 'vendor_name', $this->vendor->getAll(), 'edit', $row['vendor_id']);
        parent::edit_detail($id);
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['calibration_code'];
        $result = $this->modeldata->getby_name('calibration_code', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function postdatadetail() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'periode_id');
        }
    }

    public function Preview($id) {
        $rowpreview = $this->eks->preview_getbyid($id);
        $this->data['preview'] = $rowpreview;
        $this->data['tools_detail'] = $this->eks->getdetail_tools($id);
        $this->data['modeldata'] = $this->modeldata;
        $this->data['url_index'] = site_url($this->controller);
        $this->data['url_grid'] = site_url($this->controller . "/grid_detail_kalibrasi/$id");
        $this->data['url_setstatus'] = site_url($this->controller . "/setstatuspreview");
        $this->data['url_setcomplete'] = site_url($this->controller . "/setcompletepreview");
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

    /// public function adddetail($id) {
    //     $row = $this->modeldata->getby_id_array($id);
    //     $this->data['preview'] = $rowpreview;
    //     $this->data['modeldata'] = $this->modeldata;
    //     $this->data['url_index'] = site_url($this->controller);
    //     $this->load->view($this->view . '/home_preview', $this->data);
    // }

     function setstatuspreview() {
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
        $valid = true;
        $msg = "Insert data,success";
       
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
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
        // var_dump($record);
        // die();
        $this->eks->updatedata_detail($id, $record);
        $valid = true;
        $msg = "Insert data,success";
        if ($status == '1') {
            $this->create_kalibrasi($id);
            }
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function setcompletepreview() {
        // $param = $this->input->post();
        $query = $this->load->model('Calibration_Model');
        $query = $this->Calibration_Model->setconfirm($id);
        
        // var_dump($param);
        // die();
        
    }

    function create_kalibrasi($id) {
        $rowid = $this->modeldata->getby_calibration($id);
        $calibration_id = $rowid->calibration_id;
        $vendor_id = $rowid->vendor_id;
        $tools_id = $rowid->tools_id;
        $calibration_price = $rowid->calibration_price;
        $calibration_disc = $rowid->calibration_disc;
        $periode_year = ($rowid->periode_year) + 1;
        $periode_date = $rowid->periode_date;
        $record = array(
            "calibration_id"       => $calibration_id,
            "vendor_id"            => $vendor_id,
            "tools_id"             => $tools_id,
            "calibration_price"    => $calibration_price,
            "calibration_disc"    => $calibration_disc,
            "periode_year"         => $periode_year,
            "periode_date"         => $periode_date,
            "status_calibration"   => 0,
        );
        $this->eks->create_kalibrasi($record);
        $valid = true;
        $msg = "Insert data,success";
    }

}

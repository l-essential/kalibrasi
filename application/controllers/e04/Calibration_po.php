<?php


class Calibration_po extends MY_Controller {
    public $db_pu;
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 
        $this->title = 'Permintaan Kalibrasi';
        $this->load->model('Calibration_po_model', 'modeldata');
        $this->setmodel($this->pathclass . '/Vendor_model#vendor');
        $this->db_pu = $this->load->database('pu', true); // load db from controller
    }
    public function index() {

        // $arr = [
        //     9,
        //     8,
        //     7,
        //     6,
        //     5
        // ];

        // echo $arr[2];

        // $a = 51; // NILAI
        // $a = '1AAaaaaaaaaaa';
        // ECHO $a;  
        // if( $a > 90 ){
        //     echo "A";
        // }else if($a > 70 ){
        //     echo "B";
        // }else if($a > 50 ){
        //     echo "D";
        // }

        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
    }

    // public function grid() {
    //     $check = $this->modeldata->getGridData();

    //     if (!is_null($check)) 
    //     {
    //         if( $this->session->userdata('ses_id_role') == 2){
    //             $result = $this->modeldata->getGridData()->result();
    //         }else{
    //             $result = $this->modeldata->getGridData()
    //                             ->where('department_pk', $this->session->userdata('ses_department_name'))
    //                             ->result();
    //         }
    //     } else {
    //         $result = '';
    //     }

    //     $this->dj(array(
    //         "data" => $result
    //     ));
    // }

     public function add() {
        $this->extenddata();
        parent::add();
        
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->extenddata();
        parent::edit($id);
    }

    public function home_detail($id_header) {
        $this->data['url_payment'] = site_url($this->controller . '/payment');
        parent::home_detail($id_header);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        $resultcode = $this->modeldata->getAll_code()->result_array();
        $i = 0;
        foreach ($resultcode as $rowcode) {
            $this->data['default']['calibration_code'][-1]['value'] = NULL;
            $this->data['default']['calibration_code'][-1]['display'] = '- Please Select -';
            $this->data['default']['calibration_code'][$i]['value'] = $rowcode['calibration_code'];
            $this->data['default']['calibration_code'][$i]['display'] = $rowcode['calibration_code']. ' - ' . $rowcode['tools_code'] . ' - ' .$rowcode['tools_name'];
            $i++;
        }

        $resultcode = $this->modeldata->getAll_code()->result_array();
        $i = 0;
        foreach ($resultcode as $rowcode) {
            $this->data['default']['nama_componen'][-1]['value'] = NULL;
            $this->data['default']['nama_componen'][$i]['value'] = $rowcode['nama_componen'];
            $this->data['default']['nama_componen'][$i]['display'] = $rowcode['nama_componen'];
            $i++;
        }
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {

        $row = $this->modeldata->getby_id_detail_array($id);
        $this->data['code'] =  $row['calibration_code'];
        $this->buildcombobox('calibration_code', 'calibration_code', $this->modeldata->getAll_periode(), 'edit', $row['calibration_code']);
        $resultcode = $this->modeldata->getAll_code()->result_array();
        $i = 0;
        foreach ($resultcode as $rowcode) {
            $this->data['default']['calibration_code'][-1]['value'] = NULL;
            $this->data['default']['calibration_code'][-1]['display'] = '- Please Select -';
            $this->data['default']['calibration_code'][$i]['value'] = $rowcode['calibration_code'];
            $this->data['default']['calibration_code'][$i]['display'] = $rowcode['calibration_code']. ' - ' . $rowcode['tools_code'] . ' - ' .$rowcode['tools_name'];
            $i++;
        }
         parent::edit_detail($id);

    }
    // function untuk add vendor & harga
    public function payment($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_payment($this->iddata);
        $id_header = $row->c_pohedaer_id;
        $rowdetail = $this->modeldata->getby_id_array($id_header);
        $this->data['title'] = "Update - Harga & Vendor " . $rowdetail['c_pohedaer_id'];
        $this->data['idheader'] = $id;
        $this->data['id'] = $id;
        $this->data['default']['harga'] = $row->harga;
        $this->data['prefix_id'] = $this->modeldata->prefix_id_detail;

        // var_dump($row);exit;

        $this->buildcombobox('vendor_id', 'vendor_name', $this->vendor->getAll(), 'edit', $row->vendor_id);
        $this->data['url_post']  = site_url($this->controller . '/postdatadetails');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_header");

        $this->load->view($this->view . '/form_payment', $this->data);
    }

     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['calibrationpo_code'];
        $result = $this->modeldata->getby_name('calibrationpo_code', $checkfield);
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
        
        $param['date_po'] = date("Y-m-d", strtotime($param['date_po']));
        if ($param['actiondata'] !== 'delete') {

            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['date_po']);
                $temp = "000" . $counter;
                $nomor = substr($temp, -3);
                $calibrationpo_code = 'PK/'. date('Y', strtotime($param['date_po'])). "/". date('m'). "/" .$nomor;
                $param['calibrationpo_code'] = $calibrationpo_code;
                
            }

            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
            }
            if (isset($param['id'])) {
                unset($param['id']);
            }
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
        
    }
        
    public function postdatadetails() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'calibration_code');

        $this->db_pu->set('status_po', 'Proses kalibrasi');
        $this->db_pu->where('id_position', $param['id_position']);
        $this->db_pu->update('e04_ts_calibration_podetail');
        
    }
        // function untuk add data
    public function postdatadetail() {
        $param = $this->input->post();
        $param['periode_date_awal'] = date("Y-m-d", strtotime($param['periode_date_awal']));
        $param['periode_date_akhir'] = date("Y-m-d", strtotime($param['periode_date_akhir']));
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'calibration_code');

        // $this->db_pu->set('periode_date_awal', '2022-10-10');
        // $this->db_pu->where('id_position', $param['id_position']);
        // $this->db_pu->update('e04_ts_calibration_podetail');
        
        $this->db_pu->set('status_po', 'Sertifikat di terima');
        $this->db_pu->where('id_position', $param['id_position']);
        $this->db_pu->update('e04_ts_calibration_podetail');
        
    }

     public function Preview($id) {
        $rowpreview = $this->modeldata->po_getbyid($id);
        $this->data['preview'] = $rowpreview;
        $this->data['modeldata'] = $this->modeldata;
        $this->data['url_index'] = site_url($this->controller);
        $this->data['url_grid'] = site_url($this->controller . "/grid_datapo/$id");
        $this->data['prefix_id'] = $this->prefix_id;
        $this->load->view($this->view . '/home_preview', $this->data);
    }

    public function grid_datapo($id) {
        $check = $this->modeldata->GridData_PO($id);
        if (!is_null($check)) {
            $result = $this->modeldata->GridData_PO($id)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }
}

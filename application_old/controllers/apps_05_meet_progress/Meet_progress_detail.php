<?php

class Meet_progress extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
         $this->load->model($this->pathclass . '/apps_05_meet_progress', 'modeldata');
         $this->load->model('e01/Karyawan_model', 'kyw');
         $this->title = 'Managemnt';
    }

    public function index() {
        $this->data['url_load_detail'] = site_url($this->controller . '/load_detail');
        parent::index();
    }

     public function add() {
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row->progress_leader);
        parent::edit($id);
    }

    public function load_detail($id) {
        $this->iddata = $id;
        $rowheader = $this->modeldata->getby_id_array($id);
        $this->data['prefix_id'] =$this->modeldata->prefix_id;
        $this->data['id'] = $id;
        $this->data['progress_id'] = $id;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->data["flagcondition"] = 'edit';
        $this->data['progress_title'] = $rowheader['progress_title'];
        $this->data['progress_content'] = $rowheader['progress_content'];
        $this->data['progress_createby'] = $rowheader['progress_createby'];
        $this->data['createtime'] = $rowheader['createtime'];
        $this->data['lokasi_gambar'] = $rowheader['lokasi_gambar'];
        $this->data['progress_leader'] = $rowheader['progress_leader'];
        $this->data['controller'] = site_url($this->controller);
        $this->data['url_post'] = site_url($this->controller . '/postdatadetail');
        $this->data['url_index'] = site_url($this->controller . "/load_detail");
        $this->load->view($this->view . '/form_detail', $this->data);
    }

    //  public function add_rca($id_formulir) {
    //     $rowrca = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['title'] = "Create - Analisis untuk " . $rowrca['improvement_code'];
    //     $this->data['id'] = 0;
    //     $this->data['prefix_id'] = $this->modeldata->prefix_rca;
    //     $this->data['id_formulir'] = $id_formulir;
    //     $this->data['url_post'] = site_url($this->controller . '/postrca');
    //     $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
    //     $this->load->view($this->view . '/form_rca', $this->data);
    // }

     public function postdatadetail() {
        $param = $this->input->post();
        $actiondata = $param['actiondatarca'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "progress_id" => $param['progress_id'],
                        "progressdetail_text" => $param['progressdetail_text']
                    );
                    $this->modeldata->insertprogressdetail($record);
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
                    "personel" => $param['personel'],
                    "material" => $param['material'],
                    "alat_mesin" => $param['alat_mesin'],
                    "metode" => $param['metode'],
                    "sarana" => $param['sarana']
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

    //   public function load_detail($id) {
    //      $rowheader = $this->modeldata->getby_id_array($id);
    //     $this->data['preview'] = $rowheader;
    //     $this->data['modeldata'] = $this->modeldata;
    //     $this->data['url_index'] = site_url($this->controller);
    //     $this->load->view($this->view . '/home_preview', $this->data);
        
    // }

    //    public function load_detail($id) {
    //     $row = $this->modeldata->getby_id_detail_array($id);
    //     $id_header = $row["$this->idheader"];
    //     $rowheader = $this->modeldata->getby_id_array($id_header);
    //     $this->data['rowheader'] = $rowheader;
    //     $this->iddata = $id;
    //     $this->data["$this->prefix_id"] = $id_header;
    //     $this->data['title'] = "Update - Detail Data " . $rowheader["$this->infoheader"];
    //     $this->data['id'] = $id;
    //     $this->data['prefix_id'] = $this->prefix_id_detail;
    //     $this->dynamicdetailvalue();
    //     $this->data["flagcondition"] = 'edit';
    //     $this->data['controller'] = site_url($this->controller);
    //     $this->data['url_post'] = site_url($this->controller . '/postdatadetail');
    //     $this->load->view($this->view . '/form_bunga', $this->data);
    // }

}

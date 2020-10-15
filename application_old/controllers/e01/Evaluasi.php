<?php

class Evaluasi extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->title = 'Evaluasi';
        $this->infoheader = 'title_improvement'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya


         $this->load->model($this->pathclass . '/Formulir_model', 'modeldata');
         $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
         $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
         $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
         $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
         $this->load->model('e01/Department_model', 'dpt');
    }

   public function add() {
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll());
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll());
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll());
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll());
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll());
        $this->data['d'] = array('department' => $this->dpt->get_departement());
        $this->data['default']['tanggal'] = date("d-m-Y");
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['rowbyid'] = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
        $this->extenddata();
        parent::edit($id);
    }

     public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }

    public function Preview($id) {
        $rowpreview = $this->modeldata->getbyid_halamansatu($id);
        $this->data['preview'] = $rowpreview;
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

     public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
             $param['tanggal'] = date("Y-m-d", strtotime($param['tanggal']));

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
   
    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
        $this->data['url_homebunga'] = site_url($this->controller . '/home_bunga');
        $this->data['url_home_nilai_evaluasi'] = site_url($this->controller . '/home_nilai_evaluasi');
    }

    // public function home_bunga($id_formulir) {
    //     $rowbank = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['title'] = "Data Suku Bunga untuk  " . $rowbank['title_improvement'];
    //     $this->data['prefix_id_bunga'] = 'id_bankbunga';
    //     $this->data['url_grid_bunga'] = site_url($this->controller . "/grid_bunga/$id_formulir");
    //     $this->data['url_add_bunga'] = site_url($this->controller . "/add_bunga/$id_formulir");
    //     $this->data['url_edit_bunga'] = site_url($this->controller . "/edit_bunga");
    //     $this->data['url_delete_bunga'] = site_url($this->controller . "/postdatabunga");
    //     $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowbank['id_formulir']);
    //     $this->load->view($this->view . '/home_bunga', $this->data);
    // }

    // public function grid_bunga($id_formulir) {
    //     $check = $this->modeldata->GridDatabunga($id_formulir);
    //     if (!is_null($check)) {
    //         $result = $this->modeldata->GridDatabunga($id_formulir)->result();
    //     } else {
    //         $result = '';
    //     }
    //     echo json_encode(array(
    //         "data" => $result
    //     ));
    // }

    // public function add_bunga($id_formulir) {
    //     $rowbank = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['title'] = "Create - Analisis untuk " . $rowbank['title_improvement'];
    //     $this->data['id'] = 0;
    //     $this->data['prefix_id'] = $this->modeldata->prefix_bunga;
    //     $this->data['id_formulir'] = $id_formulir;
    //     $this->data['url_post'] = site_url($this->controller . '/postdatabunga');
    //     $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
    //     $this->load->view($this->view . '/form_bunga', $this->data);
    // }

    // public function edit_bunga($id) {
    //     $this->iddata = $id;
    //     $row = $this->modeldata->getby_id_bunga($this->iddata);
    //     $id_formulir = $row->id_formulir;
    //     $rowbank = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['title'] = "Update - Analisis untuk " . $rowbank['title_improvement'];
    //     $this->data['id'] = $id;
    //     $this->data['prefix_id'] = $this->modeldata->prefix_bunga;
    //     $this->data['id_formulir'] = $id_formulir;
    //     $this->data['default']['bunga'] = $row->tahun;
    //     $this->data['default']['bulan'] = $row->bulan;
    //     $this->data['default']['periode'] = $row->periode;
    //     $this->data['default']['nilaibunga'] = $row->nilaibunga;
    //     $this->data['controller'] = $this->controller;
    //     $this->data['url_post'] = site_url($this->controller . '/postdatabunga');
    //     $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
    //     $this->load->view($this->view . '/form_bunga', $this->data);
    // }

    // public function postdatabunga() {
    //     $param = $this->input->post();
    //     $actiondata = $param['actiondatabunga'];

    //     switch ($actiondata) {
    //         case "create":
    //             $checkdata = $this->modeldata->getbungainbank($param['id_formulir'], $param['periode']);
    //             $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
    //             $tmp = explode("-", $periodedate);

    //             if (empty($checkdata)) {
    //                 $record = array(
    //                     "id_formulir" => $param['id_formulir'],
    //                     "nilaibunga" => $param['nilaibunga'],
    //                     "periode" => $periodedate,
    //                     "tahun" => $tmp[0],
    //                     "bulan" => $tmp[1]
    //                 );
    //                 $this->modeldata->insertbunga($record);
    //                 $valid = true;
    //                 $message = "Data success created";
    //             } else {
    //                 $valid = false;
    //                 $message = "Data already exist";
    //             }
    //             break;
    //         case "update":
    //             $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
    //             $tmp = explode("-", $periodedate);

    //             $id_bankbunga = $param['id_bankbunga'];
    //             $record = array(
    //                 "nilaibunga" => $param['nilaibunga'],
    //                 "periode" => $periodedate,
    //                 "tahun" => $tmp[0],
    //                 "bulan" => $tmp[1]
    //             );
    //             $this->modeldata->updatebunga($id_bankbunga, $record);
    //             $valid = true;
    //             $message = "Data success updated";
    //             break;
    //         case "delete":
    //             $id_bankbunga = $param['id_bankbunga'];
    //             $this->modeldata->deletebunga($id_bankbunga);
    //             $valid = true;
    //             $message = "Data success deleted";
    //             break;

    //         default:
    //             $valid = false;
    //             $message = "No action";
    //             break;
    //     }
    //     $this->dj(array(
    //         "valid" => $valid,
    //         "message" => $message,
    //     ));
    // }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['title_improvement'];
        $result = $this->modeldata->getby_name('title_improvement', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    // public function postdatadetail() {
    //     $param = $this->input->post();
    //     if (isset($param['id_header'])) {
    //         $param["$this->prefix_id"] = $param['id_header'];
    //         unset($param['id_header']);
    //         $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
    //     }
    //     $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'kantor_cabank');
    // }

    public function home_nilai_evaluasi($id_formulir) {
        $rownilai = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Data untuk  " . $rownilai['title_improvement'];
        $this->data['prefix_prefix_evaluasi_tindakan'] = 'id_evaluasi_tindakan';
        $this->data['url_grid_nilaievaluasi'] = site_url($this->controller . "/grid_nilaievaluasi/$id_formulir");
        $this->data['url_add_nilai'] = site_url($this->controller . "/add_nilai_evaluasi/$id_formulir");
        $this->data['url_edit_nilai'] = site_url($this->controller . "/edit_nilai_evaluasi");
        $this->data['url_delete_nilai'] = site_url($this->controller . "/postdata_nilai_evaluasi");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rownilai['id_formulir']);
        $this->load->view($this->view . '/home_nilai_evaluasi', $this->data);
    }

    public function grid_nilaievaluasi($id_formulir) {
        $check = $this->modeldata->GridDataEvaluasiTindakan($id_formulir);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataEvaluasiTindakan($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_nilai_evaluasi($id_formulir) {
        $rownilai = $this->modeldata->addedit_view($id_formulir);
        $this->data['title'] = "Add Data - evaluasi untuk ";
        $this->data['view'] =$rownilai;
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_evaluasi_tindakan;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['url_post'] = site_url($this->controller . '/postdata_nilai_evaluasi');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
        $this->load->view($this->view . '/form_nilai_evaluasi', $this->data);
    }

    public function edit_nilai_evaluasi($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_evaluasi($this->iddata);
        $id_formulir = $row->id_formulir;
        $rowpreview = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Update - evaluasi untuk " . $rowpreview['improvement_code'];
        $this->data['preview'] = $rowpreview;
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_evaluasi_tindakan;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['default']['evaluasi_tindakan'] = $row->evaluasi_tindakan;
        $this->data['default']['L'] = $row->L;
        $this->data['default']['S'] = $row->S;
        $this->data['default']['D'] = $row->D;
        $this->data['default']['RPN'] = $row->RPN;
       
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata_nilai_evaluasi');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
        $this->load->view($this->view . '/form_nilai_evaluasi', $this->data);
    }

    public function postdata_nilai_evaluasi() {
        $param = $this->input->post();
        $actiondata = $param['actiondatanilai'];

        switch ($actiondata) {
            case "create":
                
                if (empty($checkdata)) {
                    $record = array(
                        "improvement_code" => $param ['improvement_code'],
                        "id_formulir" => $param['id_formulir'],
                         "L" => $param['L'],
                          "S" => $param['S'],
                           "D" => $param['D'],
                            "RPN" => $param['RPN'],
                            "evaluasi_tindakan" => $param['evaluasi_tindakan'],
                    );
                    // var_dump($record);
                    // die();
                    $this->modeldata->insertnilaievaluasi($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id_evaluasi_tindakan = $param['id_evaluasi_tindakan'];
                $record = array(
                    "L" => $param['L'],
                    "S" => $param['S'],
                    "D" => $param['D'],
                    "RPN" => $param['RPN'],
                    "evaluasi_tindakan" => $param['evaluasi_tindakan'],
                );
                // var_dump($record);
                // die();
                $this->modeldata->updatenilaievaluasi($id_evaluasi_tindakan, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_evaluasi_tindakan = $param['id_evaluasi_tindakan'];
                $this->modeldata->deletenilaievaluasi($id_evaluasi_tindakan);
                $valid = true;
                $message = "Data success deleted";
                break;

            default:
                $valid = false;
                $message = "No action";
                break;
        }
        $this->dj(array(
            "valid" => $valid,
            "msg" => $message,
        ));
    }


    

}

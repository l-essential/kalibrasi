<?php

class Approve extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->title = "Approve";
        $this->infoheader = 'title_improvement'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya

        //  $this->load->model($this->pathclass . '/Analisis_model', 'modeldata');
         $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
         $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
         $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
         $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
         $this->load->model($this->pathclass . '/Formulir_model', 'modeldatalog');
         $this->load->model('e/Department_model', 'dpt');
    }

     public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homerca'] = site_url($this->controller . '/home_rca');
        $this->data['url_homeapprove'] = site_url($this->controller . '/home_approve');
        
    }

   
    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $rowview = $this->modeldata->getbyid_halamandua($id);
        $this->data['view'] = $rowview;
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
       
        $this->extenddata();
        parent::edit($id);
    }

    public function Preview($id) {
        $rowpreview = $this->modeldata->getbyid_halamandua($id);
        $this->data['rca'] = $this->analisis->getAll_rca();
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

     public function home_rca($id_formulir) {
        $rowrca = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Data Suku Bunga untuk  " . $rowrca['title_improvement'];
        $this->data['prefix_id_rootcause'] = 'id_rootcause';
        $this->data['url_grid_rca'] = site_url($this->controller . "/grid_rca/$id_formulir");
        $this->data['url_add_rca'] = site_url($this->controller . "/add_rca/$id_formulir");
        $this->data['url_edit_rca'] = site_url($this->controller . "/edit_rca");
        $this->data['url_delete_rca'] = site_url($this->controller . "/postrca");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowrca['id_formulir']);
        $this->load->view($this->view . '/home_rca', $this->data);
    }

    public function grid_rca($id_formulir) {
        $check = $this->modeldata->GridDataRCA($id_formulir);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataRCA($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_rca($id_formulir) {
        $rowrca = $this->modeldata->addedit_view($id_formulir);
        $this->data['view'] =$rowrca;
        $this->data['title'] = "Create - ROOT CAUSE ANALYSIS ";
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_rca;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['url_post'] = site_url($this->controller . '/postrca');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
        $this->load->view($this->view . '/form_rca', $this->data);
    }

    public function edit_rca($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_rca($this->iddata);
        $id_formulir = $row->id_formulir;
        $rowrca = $this->modeldata->addedit_view($id_formulir);
        $this->data['view'] =$rowrca;
        $this->data['title'] = "Update - ROOT CAUSE ANALYSIS ";
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_rca;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['default']['personel'] = $row->personel;
        $this->data['default']['material'] = $row->material;
        $this->data['default']['alat_mesin'] = $row->alat_mesin;
        $this->data['default']['metode'] = $row->metode;
        $this->data['default']['sarana'] = $row->sarana;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postrca');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
        $this->load->view($this->view . '/form_rca', $this->data);
    }

    public function postrca() {
        $param = $this->input->post();
        $actiondata = $param['actiondatarca'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "id_formulir"        => $param['id_formulir'],
                        "personel"           => $param['personel'],
                        "material"           => $param['material'],
                        "alat_mesin"         => $param['alat_mesin'],
                        "metode"             => $param['metode'],
                        "sarana"             => $param['sarana'],
                        "department_name"    => $param ['department_name']
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

    // public function detail() {
    //         $this->data['title'] = $this->title;
    //         $this->data['url_index'] = site_url($this->controller);
    //         $this->data['url_grid'] = site_url($this->controller . '/datadetail');
    //         $this->data['url_add'] = site_url($this->controller . '/add');
    //         $this->data['url_edit'] = site_url($this->controller . '/edit');
    //         $this->data['url_delete'] = site_url($this->controller . '/postdata');
    //         $this->data['url_post'] = site_url($this->controller . '/postdata');
    //         $this->data['prefix_id'] = $this->prefix_id;
    //         $this->load->view($this->view . '/homedetail', $this->data);
    // }

    // public function datadetail() {
    //     $check = $this->modeldata->detail();
    //     if (!is_null($check)) {
    //         $result = $this->modeldata->detail()->result();
    //     } else {
    //         $result = '';
    //     }
    //     echo json_encode(array(
    //         "data" => $result
    //     ));
    // }

    //  public function evaluasi_detail($id) {
    //     $row = $this->modeldata->getdatabyId($id);
    //     $data['evaluasi'] = $row;
    //     $this->load->view($this->view .'/evaluasi_detail', $data);
    // }

    // public function evaluasi_detail($id) {
    //     $rowrca = $this->modeldata->getdatabyId($id);
    //     $data['evaluasi'] = $rowrca;
    //     $this->load->view($this->view . '/evaluasi_detail', $data);
    // }

    public function home_approve($id_formulir) {
        $rowapprove = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Data Quota untuk  " . $rowapprove['improvement_code'];
        $this->data['prefix_id_approve'] = 'id_approve';
        $this->data['url_grid_approve'] = site_url($this->controller . "/grid_approve/$id_formulir");
        $this->data['url_edit_approve'] = site_url($this->controller . "/edit_approve");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowbank['id_bank']);
        $this->load->view($this->view . '/home_approve', $this->data);
    }

     public function grid_approve($id_formulir) {
        $check = $this->modeldata->GridDataApprove($id_formulir);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataApprove($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

     public function edit_approve($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_approve($this->iddata);
        $id_formulir = $row->id_formulir;
        $rowapprove = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Persetujuan ". $rowapprove['improvement_code'];
        $this->data['code'] = $rowapprove['improvement_code'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_depterkait;
        $this->data['id_formulir'] = $id_formulir;
        $this->data['default']['improvement_code'] = $row->improvement_code;
        $this->data['default']['status_approve'] = $row->status_approve;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataapprove');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
        $this->load->view($this->view . '/form_approve', $this->data);
    }


    // public function approve_bydeprt($id) {
    //     $this->iddata = $id;
    //     $row = $this->modeldata->getby_id_approve($this->iddata);
    //     $id_formulir = $row->id_formulir;
    //     $rowrca = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['title'] = $rowrca['improvement_code'];
    //     $this->data['id'] = $id;
    //     $this->data['prefix_id'] = $this->modeldata->prefix_depterkait;
        
    //     $this->data['default']['status_approve'] = $row->status_approve;
    //     $this->data['controller'] = $this->controller;
    //     $this->data['url_post'] = site_url($this->controller . '/postdataapprove');
    //     $this->data['url_index'] = site_url($this->controller . "/edit/$id_formulir");
    //     $this->load->view($this->view . '/home_approve', $this->data);
    // }


     public function postdataapprove() {
        $param = $this->input->post();
        $actiondata = $param['actiondataapprove'];

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "status_approve" => $param['status_approve'],
                        "reason"         => $param['reason'],
                    );
                    $this->modeldata->insertbankquota($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id_approve = $param['id_approve'];
                 $record = array(
                        "status_approve" => $param['status_approve'],
                        "reason"         => $param['reason'],
                    );
                    // var_dump($record);
                    // die();
                $this->modeldata->updateapprove($id_approve, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_approve = $param['id_approve'];
                $this->modeldata->deletebankquota($id_approve);
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


    // public function postdataapprove() {
    //     $param = $this->input->post();
    //     $actiondataapprove = $param['actiondataapprove'];

    //     switch ($actiondataapprove) {
    //         case "create":
    //             $checkdata = $this->modeldata->getdataapprove($param['improvement_code']);
    //             if (empty($checkdata)) {
    //                 $id_approve = $param['id_approve'];
    //                 $record = array(
    //                     "status_approve"   => $param['status_approve'],
    //                     "reason"           => $param['reason'],
    //                 );
    //                 var_dump($record);
    //                 die();
    //                 $this->modeldata->insertapprove($record,$id_approve);
    //                 $valid = true;
    //                 $message = "Data success created";
    //             } else {
    //                 $valid = false;
    //                 $message = "Data already exist";
    //             }
    //             break;
    //         case "update":
    //             $id_approve = $param['id_approve'];
    //             $id_formulir = $param['id_formulir'];
    //             $record = array(
    //                 "status_approve"   => $param['status_approve'],
    //                 "reason"           => $param['reason'],
    //             );
    //             $this->modeldata->insertapprove($id_approve, $record);
    //             $valid = true;
    //             $message = "Data success updated";
    //             break;
    //         case "delete":
    //             $id_approve = $param['id_approve'];
    //             $this->modeldata->deleteapprove($id_approve);
    //             $valid = true;
    //             $message = "Data success deleted";
    //             break;

    //         default:
    //             $valid = false;
    //             $message = "No action Approve";
    //             break;
    //     }
    //     $this->dj(array(
    //         "valid" => $valid,
    //         "msg" => $message,
    //     ));
    // }


    public function kirimemail(){
    $post = $this->input->post();
    $nopn = $post['improvement_code'];
    $nik = $post['nik'];
    if(!empty($nopn)){
      $this->load->model('pu/approve_model','pn');
      $result = $this->pn->getbynopn($nopn);
      if($result){
          $email = $result->email;

          $pesan .= "<h3><b>Hai,</b></h3><br/>";
          $pesan .= "Terdapat penyimpangan yang berkaitan dengan Departemen Anda dengan nomor  $nopn<br/>";
          $pesan .= "Mohon review, tambahkan data (bila perlu), dan Setujui (apabila telah sesuai) <br/>";
          $pesan .= "Silihkan login keaplikasi dengan link = http://localhost:8080/L-essential/penyimpangan/login<br/><br/>";
          $pesan .= "Penyimpangan tersebut bisa Anda akses dengan NO PENYIMPANGAN <b>$nopn</b> melalui link<br/>";
          $pesan .= "http://localhost:8080/L-essential/penyimpangan/appr/approve_evaluasi/edit?no_pn=$nopn&e=1";

          $returnmail = $this->sendmail->postmail($email, 'EVALUASI PENYIMPANGAN',$pesan);
          $validemail = $returnmail['valid'];
          $messageemail = $returnmail['message'];
          $this->dj(array(
              "valid" => $validemail,
              "message" => $messageemail
          ));
      }else{
         $this->dj(array(
            "valid" => false,
            "message" => "Data tidak tersedia untuk nomor $nopn "
        ));
      }

    }else{
      $this->dj(array(
            "valid" => false,
            "message" => 'Tidak ada nomor pn'
        ));
    }
  }





}

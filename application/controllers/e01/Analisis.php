<?php

class Analisis extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->title = "Analisis";
        $this->infoheader = 'title_improvement'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
        $this->fieldnotgenerate = array("correct_status","preventive_status","status_penyimpangan");

        //  $this->load->model($this->pathclass . '/Analisis_model', 'modeldata');
        $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
        $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
        $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
        $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
        $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
        $this->load->model($this->pathclass . '/Formulir_model', 'modeldatalog');
        $this->load->model($this->pathclass . '/Approve_model', 'appr');
        $this->load->model('e_/Department_model','dpt');
        $this->load->model('e_/Karyawan_model','kyw');
        $this->setmodel("e_/Statusallapps_model#sts");
    }

     public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
        $this->data['url_homerca'] = site_url($this->controller . '/home_rca');
        // $this->data['url_homebankquota'] = site_url($this->controller . '/home_bankquota');
        // $this->data['url_evaluasidetai'] = site_url($this->controller . '/evaluasi_detail');
        
    }

   
    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        $this->buildcomboboxstatic(array("OPEN#OPEN", "CLOSED#CLOSED"), 'status_penyimpangan', 'edit', $row['status_penyimpangan']);

        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll(), 'edit', $row['tindaklajuti_oleh']);
        $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
       
        $this->extenddata();
        parent::edit($id);
    }
     public function add_detail($id_header) {
        $this->buildcomboboxstatic(array("0#open", "1#closed"), 'correct_status');
        $this->buildcombobox('status', 'status', $this->sts->getAll());
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        $this->buildcombobox('status', 'status', $this->sts->getAll(), 'edit', $row['correct_status']);
        $this->buildcombobox('status', 'status', $this->sts->getAll(), 'edit', $row['preventive_status']);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row['correct_pic']);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row['preventive_pic']);
       
        $this->data['default']['correct_duedate'] = date("d-m-Y", strtotime($row['correct_duedate']));
        $this->data['default']['preventive_duedate'] = date("d-m-Y", strtotime($row['preventive_duedate']));
        parent::edit_detail($id);
    }

    public function Preview($id) {
        $rowpreview = $this->modeldata->getbyid_halamansatu($id);
        $this->data['preview'] = $rowpreview;
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

      public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];
        $param['tanggal'] = date("Y-m-d", strtotime($param['tanggal'])); 

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "improvement_code"     => $param ['improvement_code'],
                        "title_improvement"    => $param ['title_improvement'],
                        "tanggal"              => $param ['tanggal'],
                        "number"               => $param ['number'],
                        "id_katagori"          => $param ['id_katagori'],
                        "id_tipe"              => $param ['id_tipe'],
                        "id_ruanglingkup"      => $param ['id_ruanglingkup'],
                        "id_jenis"             => $param ['id_jenis'],
                        "id_resiko"            => $param ['id_resiko'],
                        "rincian_penyimpangan" => $param ['rincian_penyimpangan'],
                        "rincian_tindakan"     => $param ['rincian_tindakan'],
                        "dampak"               => $param ['dampak'],
                        "uraian"               => $param ['uraian'],
                        "tindaklajuti_oleh"    => $param ['tindaklajuti_oleh'],
                        "status_penyimpangan"  => $param ['status_penyimpangan'],
                    );
                    // var_dump($record);
                    // die();
                    $recordtwin = array(
                        "department_name"      => $param ['department_name'],
                    );
                    // var_dump($recordtwin);
                    // die();
                    $record1 = array(
                        "program"              => $param ['h_kt'],
                        "periode"              => $param ['h_th'],
                        "bln"                  => $param ['h_bln'],
                        "lastno"               => $param ['h_no'],
                    );
                    $record2 = array(
                        "improvement_code"     => $param ['improvement_code'],
                        "department_name"      => $param ['department_name'],
                    );

                    $depart = $param ['department_name'];
                    $record2 = array();
                        foreach($depart AS $key => $val){
                            $record2[] = array(
                            'improvement_code'     => $param ['improvement_code'],
                            'department_name'  	   => $param ['department_name'][$key]
                            );
			        }      
                    // var_dump($record2);
                    // die();
                    $this->modeldata->insert_approve($record2);
                    
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
                    $id_formuli = $this->modeldata->insertdata($record);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    $id_formuli = 0;
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;
            case "update":
                $id_formulir = $param['id_formulir'];
                 $record = array(
                        "improvement_code"     => $param ['improvement_code'],
                        "title_improvement"    => $param ['title_improvement'],
                        "tanggal"              => $param ['tanggal'],
                        "number"               => $param ['number'],
                        "id_katagori"          => $param ['id_katagori'],
                        "id_tipe"              => $param ['id_tipe'],
                        "id_ruanglingkup"      => $param ['id_ruanglingkup'],
                        "id_jenis"             => $param ['id_jenis'],
                        "id_resiko"            => $param ['id_resiko'],
                        "rincian_penyimpangan" => $param ['rincian_penyimpangan'],
                        "rincian_tindakan"     => $param ['rincian_tindakan'],
                        "dampak"               => $param ['dampak'],
                        "uraian"               => $param ['uraian'],
                        "kesimpulan_akar"      => $param ['kesimpulan_akar'],
                        "kesimpulan_akhir"     => $param ['kesimpulan_akhir'],
                        "tindaklajuti_oleh"    => $param ['tindaklajuti_oleh'],
                        "status_penyimpangan"  => $param ['status_penyimpangan'],
                    );
                $this->modeldata->updatedata($id_formulir, $record);
                $valid = true;
                $msg = "Data success updated";
                break;
            case "delete":
                $id_formulir = $param['id_formulir'];
                $this->modeldata->deletedata($id_formulir);
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
            "ref_id" => $id_formulir,
        ));
    }

    public function postdatadetail() {
        $param = $this->input->post();
         if ($param['actiondata'] !== 'delete') {
             $param['correct_duedate'] = date("Y-m-d", strtotime($param['correct_duedate']));
             $param['preventive_duedate'] = date("Y-m-d", strtotime($param['preventive_duedate']));
            if (isset($param['id_header'])) {
                
                $param["$this->prefix_id"] = $param['id_header'];
                unset($param['id_header']);
                $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
            }
            $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'id_bankcabang');
        }
    }

     public function home_rca($id_formulir) {
        $rowrca = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] =  $rowrca['title_improvement'];
        $this->data['prefix_id_rootcause'] = 'id_rootcause';
        $this->data['url_grid_rca'] = site_url($this->controller . "/grid_rca/$id_formulir");
        $this->data['url_add_rca'] = site_url($this->controller . "/add_rca/$id_formulir");
        $this->data['url_edit_rca'] = site_url($this->controller . "/edit_rca");
        $this->data['url_delete_rca'] = site_url($this->controller . "/postrca");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowrca['id_formulir']);
        $this->load->view($this->view . '/home_rca', $this->data);
    }

    public function grid_rca($id_formulir) {
        $check = $this->appr->GridDataRCA($id_formulir);
        if (!is_null($check)) {
            $result = $this->appr->GridDataRCA($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_rca($id_formulir) {
        $rowrca = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Create - Analisis untuk " . $rowrca['improvement_code'];
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
        $rowrca = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Update - Analisis untuk " . $rowrca['title_improvement'];
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
                        "id_formulir" => $param['id_formulir'],
                        "personel" => $param['personel'],
                        "material" => $param['material'],
                        "alat_mesin" => $param['alat_mesin'],
                        "metode" => $param['metode'],
                        "sarana" => $param['sarana']
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

   

}

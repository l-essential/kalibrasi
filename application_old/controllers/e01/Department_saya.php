<?php

class Department_saya extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
        $this->title = "Penyimpangan";
        $this->infoheader = 'title_improvement'; //field header yang akan menjadi info di form atau panel detail
        
        

         $this->load->model($this->pathclass . '/Formulir_model', 'modeldata');
         $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
         $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
         $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
         $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
         $this->load->model($this->pathclass . '/Formulir_model', 'modeldatalog');
         $this->load->model($this->pathclass . '/Approve_model', 'approve');
         $this->load->model($this->pathclass . '/Formulir_two_model', 'two');
         $this->load->model('e_/Seksi_model', 'sks');
        
         $this->load->model("e01/Totalpenyimpanagn_model", "total");
         $this->load->model($this->pathclass . '/Formulir_two_model', 'two');
        //  $this->load->model("e00/Scope_model", "scope");
    }

    public function index() {
        $this->data['total_add'] = $this->total->totalAddPenyimpangan();
        $this->data['total_Approve'] = $this->total->totalApprove();
        $this->data['total_eva'] = $this->total->totalevaluasi();
        $this->data['total_ana'] = $this->total->totalanalisis();
        $this->data['notifapprove'] = $this->total->notifapprove();
        
        $this->data['url_approve'] = site_url($this->controller . '/approve');
        $this->data['url_evaluasi'] = site_url($this->controller . '/evaluasi');
        $this->data['url_analisis'] = site_url($this->controller . '/analisis');
        $this->data['url_home_detailapprove'] = site_url($this->controller . '/home_detailapprove');
        $this->data['url_home_detailrca'] = site_url($this->controller . '/home_detailrca');
        $this->data['url_homepreview'] = site_url($this->controller . '/home_preview');
        $this->data['url_form_kesimpulan'] = site_url($this->controller. '/adddata_finalconclusion');
        parent::index();
    }

   public function add() {
        $this->buildcombobox('singkatan', 'singkatan', $this->sks->getAll());
        
        $resultkatagori = $this->katagori->getAll();
        $resultruang = $this->ruang->getAll();
        $resultjenis = $this->jenis->getAll();
        $resultresiko = $this->resiko->getAll();
        $resulttype = $this->tipe->getAll();
        $k = 0;
        $r = 0;
        $j = 0;
        $re = 0;
        $t = 0;

        foreach ($resultkatagori as $rowkategori) {
            $this->data['default']['id_katagori'][-1]['value'] = NULL;
            $this->data['default']['id_katagori'][-1]['display'] = '- kategori Penyimpangan -';
            $this->data['default']['id_katagori'][$k]['value'] = $rowkategori['id_katagori'];
            $this->data['default']['id_katagori'][$k]['display'] = $rowkategori['nama_katagori'];
            $k++;
        }

        foreach ($resultruang as $rowruang) {
            $this->data['default']['id_ruanglingkup'][-1]['value'] = NULL;
            $this->data['default']['id_ruanglingkup'][-1]['display'] = '- ruang lingkup Penyimpangan -';
            $this->data['default']['id_ruanglingkup'][$r]['value'] = $rowruang['id_ruanglingkup'];
            $this->data['default']['id_ruanglingkup'][$r]['display'] = $rowruang['nama_ruanglingkup'];
            $r++;
        }

        foreach ($resultjenis as $rowjenis) {
            $this->data['default']['id_jenis'][-1]['value'] = NULL;
            $this->data['default']['id_jenis'][-1]['display'] = '- jenis Penyimpangan -';
            $this->data['default']['id_jenis'][$j]['value'] = $rowjenis['id_jenis'];
            $this->data['default']['id_jenis'][$j]['display'] = $rowjenis['nama_jenis'];
            $j++;
        }

        foreach ($resulttype as $rowtype) {
            $this->data['default']['id_tipe'][-1]['value'] = NULL;
            $this->data['default']['id_tipe'][-1]['display'] = '- tipe Penyimpangan -';
            $this->data['default']['id_tipe'][$t]['value'] = $rowtype['id_tipe'];
            $this->data['default']['id_tipe'][$t]['display'] = $rowtype['nama_tipe'];
            $t++;
        }

        foreach ($resultresiko as $rowresiko) {
            $this->data['default']['id_resiko'][-1]['value'] = NULL;
            $this->data['default']['id_resiko'][-1]['display'] = '- tingkat resiko Penyimpangan -';
            $this->data['default']['id_resiko'][$re]['value'] = $rowresiko['id_resiko'];
            $this->data['default']['id_resiko'][$re]['display'] = $rowresiko['nama_resiko'];
            $re++;
        }
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $this->preview_byid($id);
        $corrective  = $this->two->getcorrective_byid($id);
        $preventive  = $this->two->getpreventive_byid($id);
        $get_idformula = $this->modeldata->getbyid($id);
        $getid = $this->modeldata->getbyid_rca($id);
        $this->data['corrective'] = $corrective;
        $this->data['preventive'] = $preventive;
        $this->data['idformula'] = $get_idformula;
        $this->data['getid'] = $getid;
       
        $this->data['url_correntive'] = site_url("e01/Capa_corrective/add");
        $this->data['url_preventive'] = site_url("e01/Capa_preventive/add");
        // $row = $this->modeldata->getby_id_array($id);
        // if ($this->session->userdata('ses_id_user') == $row['createby'] ){
        // $row = $this->modeldata->getby_id_array($id);
        // $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        // $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        // $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        // $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        // $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        // $this->buildcombobox('department_name', 'department_name', $this->modeldata->getall_dept($id), 'edit', $row['department_name']);
        // $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
        // $this->data['default']['etc'] = $row['etc'];
        // } else{
        //     $row = $this->modeldata->getby_id_array($id);
        //     $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        //     $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        //     $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        //     $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        //     $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        //     $this->buildcombobox('department_name', 'department_name', $this->modeldata->getall_dept($id), 'edit', $row['department_name']);
        //     $this->data['default']['readonly_tanggal'] = 'readonly';
        //     $this->data['default']['readonly_etc'] = 'readonly';
        // }
        $this->data['url_index'] = site_url($this->controller . "/index");
        $this->load->view($this->view . '/form_edit', $this->data);
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];
        // if ($param['actiondata'] !== 'delete') {
        //     if (isset($param['dataintable_length'])) {
        //         unset($param['dataintable_length']);
        //     }
        //     if (isset($param['dataintablebunga_length'])) {
        //         unset($param['dataintablebunga_length']);
        //     }
        //     if (isset($param['dataintablequota_length'])) {
        //         unset($param['dataintablequota_length']);
        //     }
        //     if (isset($param['id'])) {
        //         unset($param['id']);
        //     }
        // } 
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
                        "etc"                  => $param ['etc'],
                    );
                    // var_dump($record);
                    // die();;
                    $record1 = array(
                        "name_apps"            => $param ['name_apps'],
                        "program"              => $param ['h_kt'],
                        "periode"              => $param ['h_th'],
                        "bln"                  => $param ['h_bln'],
                        "lastno"               => $param ['h_no'],
                    );

                    // $insert_id = $this->db->insert_id($record);
                    $id_formulir = $this->modeldata->insertdata($record);

                    $depart = $param ['singkatan'];
                    $record2 = array();
                        foreach($depart AS $key => $val){
                            $record2[] = array(
                            'id_formulir'          => $id_formulir,
                            'improvement_code'     => $param ['improvement_code'],
                            'department_name'  	   => $param ['singkatan'][$key]
                            );
			        }      
                    // var_dump($record2);
                    // die();
                    $this->modeldata->insert_approve($record2);

                    $record3 = array(
                        "id_formulir"          => $id_formulir,
                        "improvement_code"     => $param ['improvement_code'],
                        "status_formulir"      => 0,
                    );

                    $this->modeldata->insert_formulirapprove($record3);

                     $record4 = array(
                        "id_formulir"          => $id_formulir,
                        "improvement_code"     => $param ['improvement_code'],
                    );

                    $this->modeldata->insert_finalconclusion($record4);

                    $record5 = array(
                        "id_formulir"      => $id_formulir,
                        "personel"         => $param ['personel'],
                        "material"         => $param ['material'],
                        "alat_mesin"       => $param ['alat_mesin'],
                        "metode"           => $param ['metode'],
                        "sarana"           => $param ['sarana'],
                        "kesimpulan_akar"  => $param ['kesimpulan_akar'],
                        "department_name"  => $this->session->userdata('ses_department_name'),
                    );

                    $this->modeldata->insert_RootCauseAnalysis($record5);
                    
                    
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

                    $this->upload_file($id_formulir);
                    // var_dump($lastno);
                    // die();
                    // $id_formulir = $this->modeldata->insertdata($record);
                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    $id_formulir = 0;
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;
                // --- update data formulir
            case "update":
                $id_formulir = $param['id_formulir'];

                // update formulir
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
                        "etc"                  => $param ['etc'],
                    );
                $this->modeldata->updatedata($id_formulir, $record);

                // update by persetujuan manager pelapor
                $record2 = array(
                        "status_formulir"       => $param ['statusevaluasi'],
                        "reason"                => $param ['reason'],
                    );
                // var_dump($record2);
                // die();
                $this->modeldata->update_formulirapprove($id_formulir, $record2);

                // update by department
                $depart = $param ['department_name'];
                $record3 = array();
                    foreach($depart AS $key => $val){
                        $record3[] = array(
                        'id_formulir'          => $id_formulir,
                        'improvement_code'     => $param ['improvement_code'],
                        'department_name'  	   => $param ['department_name'][$key]
                        );
                }      
                // var_dump($record3);
                // die();
                $this->modeldata->update_approvebydeparment($id_formulir,$record3);

                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
            case "delete":
                $id_formulir = $param['id_formulir'];
                $this->modeldata->deletedata($id_formulir);
                $this->modeldata->deletedata_bydepartment($id_formulir);
                $this->modeldata->deletedata_approvebydepartment($id_formulir);
                $this->modeldata->deletedata_finalconclusion($id_formulir);
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

    public function home_detailapprove($id_formulir) {
        $rowdetail = $this->modeldata->getby_id_array($id_formulir);
        $this->data['rowdetail'] = $rowdetail;
        $this->data['prefix_id'] = 'id_formulir';
        $this->data['url_grid_detailapprove'] = site_url($this->controller . "/grid_detailapprove/$id_formulir");
        $this->load->view($this->view . '/home_detailapprove', $this->data);
    }

    public function grid_detailapprove($id_formulir) {
        $check = $this->modeldatalog->GridData_detailDepartmentApprove($id_formulir);
        if (!is_null($check)) {
            $result = $this->modeldatalog->GridData_detailDepartmentApprove($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function approve($id) {
        $this->preview_byid($id);
        $this->data['controller'] = $this->controller;
        $this->data['url_index'] = site_url($this->controller . "/index");
        $this->data['url_add_approve'] = site_url($this->controller . "/insert_approve");
        $this->load->view($this->view . '/form_approve', $this->data);
    }

    // public function home_preview($id) {
    //     $this->preview_byid($id);
    //     $this->data['controller'] = $this->controller;
    //     $this->data['url_index'] = site_url($this->controller . "/index");
    //     $this->load->view($this->view . '/home_preview', $this->data);
    // }

    function insert_approve() {
        $post = $this->input->post();
        $id        = $post['id'];
        $code      = $post['code'];
        $dept      = $this->session->userdata('ses_department_name');
        $approve   = $post['approve'];
        $reason    = $post['reason'];
            $record = array(
                "id_formulir"         => $id,
                "improvement_code"    => $code,
                "status_formulir"     => $approve,
                "reason"              => $reason,
                "createby"            => $this->session->userdata('ses_id_user'),
                "createtime"          => $this->curdatetime,
            );
            $record_status = array(
                "id_formulir"         => $id,
                "status_penyimpangan" => 1
                
            );

            $checkdata = $this->modeldata->checkData_approve($id,$code);
        if ($checkdata > 0 ){
            $this->modeldata->update_approve($id,$code,$record);
            $this->modeldata->update_status($id, $record_status);
            $valid = true;
            $message = "Update Data success";
        } else {
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    public function evaluasi($id) {
        $this->preview_byid($id);
        $this->buildcombobox('singkatan', 'singkatan', $this->sks->getAll());
        $this->data['controller'] = $this->controller;
        $this->data['url_index'] = site_url($this->controller . "/index");
        $this->data['url_evaluasi'] = site_url($this->controller . "/insert_evaluasi");
        $this->data['url_adddepartment'] = site_url($this->controller . "/adddepartment");
        $this->load->view($this->view . '/form_evaluasi', $this->data);
    }

    function insert_evaluasi() {
        $post = $this->input->post();
        $id   = $post['id'];
        $code = $post['code'];
        $ev   = $post['evaluasi'];
        $l    = $post['l'];
        $s    = $post['s'];
        $d    = $post['d'];
        $rpn  = $post['rpn'];
            $record = array(
                "id_formulir"         => $id,
                "improvement_code"    => $code,
                "evaluasi_tindakan"   => $ev,
                "L"                   => $l,
                "S"                   => $s,
                "D"                   => $d,
                "RPN"                 => $rpn,
            );
            $record_status = array(
                "id_formulir"          => $id,
                "status_penyimpangan"  => 3,
            );
            $checkdata = $this->modeldata->checkData_evaluasi($id);
        if ($checkdata > 0 ){
            $this->modeldata->update_evaluasi($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->modeldata->create_evaluasi($record);
            $this->modeldata->update_status($id,$record_status);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    function adddepartment() {
        $post = $this->input->post();
        $id   = $post['id'];
        $code = $post['code'];
        $dept   = $post['dept'];
            $record = array(
                "id_formulir"         => $id,
                "improvement_code"    => $code,
                "department_name"   => $dept,
            );
        if ($checkdata > 0 ){
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->modeldata->create_department($record);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }


    // ANALISIS
    public function analisis($id) {
        $this->preview_byid($id);
        $getid = $this->approve->getbyid_rca($id);
        $this->data['getid'] = $getid;
        $this->data['controller'] = $this->controller;
        $this->data['url_index'] = site_url($this->controller . "/index");
        $this->data['url_akar'] = site_url($this->controller . "/insert_akar");
        $this->data['url_akhir'] = site_url($this->controller . "/insert_akhir");
        $this->data['url_analisis'] = site_url($this->controller . "/insert_analisis");
        $this->data['url_update_corrective'] = site_url($this->controller . "/update_corrective");
        $this->data['url_update_preventive'] = site_url($this->controller . "/update_preventive");
        $this->load->view($this->view . '/form_analisis', $this->data);
    }

    function insert_analisis() {
        $post = $this->input->post();
        $id   = $post['id'];
        $code   = $post['code'];
        $status   = $post['setuju'];
        $reason   = $post['reason'];
        $dept     = $this->session->userdata('ses_KodeSeksi');
        $personel   = $post['personel'];
        $material   = $post['material'];
        $alat_mesin = $post['alat_mesin'];
        $metode     = $post['metode'];
        $sarana     = $post['sarana'];
        $akar       = $post['akar'];
            $record = array(
                "id_formulir"       => $id,
                "personel"          => $personel,
                "material"          => $material,
                "alat_mesin"        => $alat_mesin,
                "metode"            => $metode,
                "sarana"            => $sarana,
                "kesimpulan_akar"   => $akar,
                "department_name"   => $this->session->userdata('ses_department_name'),
                "createby"            => $this->session->userdata('ses_id_user'),
                "createtime"          => $this->curdatetime,
            );
            
            $record_1 = array(
                "id_formulir"       => $id,
                "improvement_code"  => $code,
                "status_approve"    => $status,
                "reason"            => $reason,
                "nama_user"         => $this->session->userdata('ses_namaKaryawan'),
                "createby"            => $this->session->userdata('ses_id_user'),
                "createtime"          => $this->curdatetime,
            );

            $record_status = array(
                "id_formulir"          => $id,
                "status_penyimpangan"  => 5,
            );

            $checkdata = $this->modeldata->checkData_analisis($dept);
        if ($checkdata > 0 ){
            $this->modeldata->update_analisis($id,$dept,$record);
            $this->modeldata->update_approve_qa($id,$dept,$record_1);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->modeldata->create_analisis($record);
            $this->modeldata->update_approve_qa($id,$dept,$record_1);
            $this->modeldata->update_status($id,$record_status);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    function insert_akar() {
        $post = $this->input->post();
        $id     = $post['id'];
        $akar   = $post['akar'];
            $record = array(
                "id_formulir"       => $id,
                "kesimpulan_akar"   => $akar,
            );
            // var_dump($record);
            // die();
            $checkdata = $this->two->checkData_akar($id);
        if ($checkdata > 0 ){
            $this->two->update_akar($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->two->create_akar($record);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    function insert_akhir() {
        $post = $this->input->post();
        $id   = $post['id'];
        $akhir   = $post['akhir'];
        $status = $post['status'];
        $dilanjuti   = $post['dilanjuti'];
            $record = array(
                "id_formulir"         => $id,
                "kesimpulan_akhir"    => $akhir,
                "ditindak_lanjuti"    => $dilanjuti,
                
            );
            $record_1 = array(
                "id_formulir"         => $id,
                "status_penyimpangan" => $status,
                
            );
            // var_dump($record);
            // die();
            $checkdata = $this->two->checkData_akhir($id);
        if ($checkdata > 0 ){
            $this->two->update_akhir($id,$record);
            $this->modeldata->update_status($id,$record_1);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->two->create_akhir($record);
            $this->modeldata->update_status($id,$record_1);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    function update_corrective() {
        $post = $this->input->post();
        $id   = $post['id'];
        $status = $post['status'];
        $post['date'] = date("Y-m-d", strtotime($post['date'])); 
            $record = array(
                "correct_status"    => $status,
                "corrective_finis"  => $post ['date'],
                
            );
            // var_dump($record);
            // die();
            $checkdata = $this->two->checkData_corrective($id);
        if ($checkdata > 0 ){
            $this->two->update_corrective($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    function update_preventive() {
        $post = $this->input->post();
        $id   = $post['id'];
        $status = $post['status'];
        $post['date'] = date("Y-m-d", strtotime($post['date'])); 
            $record = array(
                "preventive_status"   => $status,
                "preventive_finis"    => $post ['date'],
                
            );
            // var_dump($record);
            // die();
            $checkdata = $this->two->checkData_preventive($id);
        if ($checkdata > 0 ){
            $this->two->update_preventive($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    public function preview_byid($id) {
        $preview = $this->modeldata->getbyid_preview($id);
        $deptterkait  = $this->modeldata->getby_dept($id);
        $getakar  = $this->two->getakar_byid($id);
        $getakhir  = $this->two->getakhir_byid($id);
        $gettindakan  = $this->two->gettindakan_byid($id);
        $corrective  = $this->two->getcorrective_byid($id);
        $preventive  = $this->two->getpreventive_byid($id);
        $btnapprove  = $this->two->getfrmapp_byid($id);
        $this->data['preview'] = $preview;
        $this->data['dept'] = $deptterkait;
        $this->data['getakar'] = $getakar;
        $this->data['getakhir'] = $getakhir;
        $this->data['gettindakan'] = $gettindakan;
        $this->data['corrective'] = $corrective;
        $this->data['preventive'] = $preventive;
        $this->data['btnapprove'] = $btnapprove;
    }

    public function postdataimages() {
        $param = $this->input->post();
       
        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'improvement_code');
    }

    //  public function home_detailrca($id_formulir) {
    //     $rowdetail = $this->modeldata->getby_id_array($id_formulir);
    //     $this->data['rowdetail'] = $rowdetail;
    //     $this->data['prefix_id'] = 'id_formulir';
    //     $this->data['url_grid_detailrca'] = site_url($this->controller . "/grid_detailrca/$id_formulir");
    //     $this->load->view($this->view . '/home_detailrca', $this->data);
    // }

    // public function grid_detailrca($id_formulir) {
    //     $check = $this->modeldatalog->GridData_detailRCA($id_formulir);
    //     if (!is_null($check)) {
    //         $result = $this->modeldatalog->GridData_detailRCA($id_formulir)->result();
    //     } else {
    //         $result = '';
    //     }
    //     echo json_encode(array(
    //         "data" => $result
    //     ));
    // }

     public function upload_file($id_formulir = 0) {
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = 10024;
        $this->load->library('upload', $config);

        if (!empty($_FILES['file']['name'])) {
            if ($this->upload->do_upload("file")) {
                $data = array('upload_data' => $this->upload->data());
                $namafile = $data['upload_data']['file_name'];
                $post['lokasi_gambar'] = $path . "/" . $namafile;
                $post['nama_gambar'] = $namafile;
                if ($id_formulir > 0) {
                    $this->modeldata->updatedata($id_formulir, $post);
                } else {
                     unlink($path . "/" . $data['upload_data']['file_name']);
                }
            } else {
                $error = $this->upload->display_errors();
                $jsonmsg = array(
                    "message" => "Process upload surat pernyataan verifikasi info error = " . $error,
                    "valid" => false,
                    "postdata" => 'Process upload surat pernyataan verifikasi gagal',
                );
                $this->dj($jsonmsg);
                exit;
            }
        }
    }
    
    public function sendmail(){
    $param = $this->input->post();
    $improvement_code = $param['improvement_code'];
    if(!empty($improvement_code)){;
      $result = $this->modeldata->getby_idforsendmail($improvement_code);
      if($result){
          $email = $result->email;

          $pesan .= "<h3><b>Hai,</b></h3><br/>";
          $pesan .= "Terdapat penyimpangan yang berkaitan dengan Departemen Anda dengan nomor  $code<br/>";
          $pesan .= "Mohon review, tambahkan data (bila perlu), dan Setujui (apabila telah sesuai) <br/>";
          $pesan .= "Silihkan login keaplikasi dengan link = http://localhost:8080/L-essential/penyimpangan/login<br/><br/>";
          $pesan .= "Penyimpangan tersebut bisa Anda akses dengan NO PENYIMPANGAN <b>$code</b> melalui link<br/>";
          $pesan .= "http://localhost:8080/L-essential/penyimpangan/appr/approve_evaluasi/edit?no_pn=$code&e=1";

          $returnmail = $this->sendmail->postmail($email, 'EVALUASI PENYIMPANGAN',$pesan);
          $validemail = $returnmail['valid'];
          $messageemail = $returnmail['message'];
          $this->dj(array(
              "valid" => $validemail,
              "message" => $messageemail
            ));
        } else {
                $this->dj(array(
                    "valid" => false,
                    "message" => "Data tidak tersedia untuk nomor $code "
                ));
            }

        } else {
            $this->dj(array(
                    "valid" => false,
                    "message" => 'Tidak ada nomor pn'
                ));
        }
    
    }

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homecorrective'] = site_url($this->controller . '/home_corrective');
        $this->data['url_homepreventive'] = site_url($this->controller . '/home_preventive');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['improvement_code'];
        $result = $this->modeldata->getby_name('improvement_code', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function home_corrective($id_formulir) {
        $rowbank = $this->modeldata->getby_id_array($id_formulir);
        $this->data['title'] = "Data Corrective  " . $rowbank['improvement_code'];
        // $this->data['prefix_id_bunga'] = 'id_bankbunga';
        // $this->data['url_grid_bunga'] = site_url($this->controller . "/grid_bunga/$id_formulir");
        // $this->data['url_add_bunga'] = site_url($this->controller . "/add_bunga/$id_formulir");
        // $this->data['url_edit_bunga'] = site_url($this->controller . "/edit_bunga");
        // $this->data['url_delete_bunga'] = site_url($this->controller . "/postdatabunga");
        // $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowbank['id_formulir']);
        $this->load->view($this->view . '/home_corrective', $this->data);
    }

    public function home_preview($id) {
        $this->preview_byid($id);
        $getid = $this->approve->getbyid_rca($id);
        $this->data['getid'] = $getid;
        $this->data['controller'] = $this->controller;
        $this->data['url_index'] = site_url($this->controller . "/index");
        $this->data['url_akar'] = site_url($this->controller . "/insert_akar");
        $this->data['url_akhir'] = site_url($this->controller . "/insert_akhir");
        $this->data['url_analisis'] = site_url($this->controller . "/insert_analisis");
        $this->data['url_update_corrective'] = site_url($this->controller . "/update_corrective");
        $this->data['url_update_preventive'] = site_url($this->controller . "/update_preventive");
        $this->load->view($this->view . '/home_preview', $this->data);
    }


    public function home_tab() {
        $this->data['title'] = "Home Detail Aplikasi";
        $this->data['url_index'] = site_url($this->controller);
        $this->data['url_saya'] = site_url($this->controller . '/home_saya');
        $this->data['url_department'] = site_url($this->controller . '/home_department');
        $this->data['url_berkaitan'] = site_url($this->controller . '/home_berkaitan');
        $this->data['url_all'] = site_url($this->controller . '/home_all');
        $this->load->view($this->view . '/home_tab', $this->data);
    }


    public function home_saya($id_maplikasi) {
        $rowaplikasi = $this->modeldata->getby_id_array($id_maplikasi);
        $this->data['title'] = "Home Group Aplikasi ";
        $this->data['prefix_id'] = $this->id_maplikasigroup;
        $this->data['url_grid'] = site_url($this->controller . "/grid_group/$id_maplikasi");
        $this->data['url_add'] = site_url($this->controller . "/add_group/$id_maplikasi");
        $this->data['url_edit'] = site_url($this->controller . "/edit_group");
        $this->data['url_delete'] = site_url($this->controller . "/postdatagroup");
        $this->load->view($this->view . '/home_saya', $this->data);
    }

    public function home_department($id_maplikasigroup) {
        $rowgrouptmp = $this->mag->getby_id_data($id_maplikasigroup);
        $rowgroup = $rowgrouptmp[0];
        $this->data['title'] = "Home Group " . $rowgroup['nama_group'];
        $this->data['rowgroup'] = $rowgroup;
        $this->data['url_group'] = site_url($this->controller . '/home_group');
        $this->load->view($this->view . '/home_department', $this->data);
    }

    public function home_berkaitan($id_maplikasigroup) {
        $rowgroup = $this->mag->getby_id_array($id_maplikasigroup);
        $this->data['title'] = "Home Group User";
        $this->data['prefix_id_groupuser'] = $this->id_maplikasigroupuser;
        $this->load->view($this->view . '/home_berkaitan', $this->data);
    }


}

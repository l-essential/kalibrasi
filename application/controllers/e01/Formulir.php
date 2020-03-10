<?php

class formulir extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Penyimpangan";
        $this->infoheader = 'title_improvement'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
        

         $this->load->model($this->pathclass . '/Formulir_model', 'modeldata');
         $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
         $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
         $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
         $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
         $this->load->model($this->pathclass . '/Formulir_model', 'modeldatalog');
         $this->load->model('e/Department_model', 'dpt');
         $this->load->model("e01/Totalpenyimpanagn_model", "total");
    }

     public function index() {
        $this->data['total_add'] = $this->total->totalAddPenyimpangan();
        $this->data['total_Approve'] = $this->total->totalApprove();
        $this->data['total_eva'] = $this->total->totalevaluasi();
        $this->data['total_ana'] = $this->total->totalanalisis();
        $this->data['notifapprove'] = $this->total->notifapprove();
        $this->data['url_home_detailapprove'] = site_url($this->controller . '/home_detailapprove');
        $this->data['url_home_detailrca'] = site_url($this->controller . '/home_detailrca');
        parent::index();
    }

   public function add() {
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll());
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll());
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll());
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll());
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll());
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll());
        $this->data['default']['number'] = 'NA';
        $this->data['default']['tanggal'] = '';
        // $this->data['default']['improvement_code'] = $this->session->userdata('ses_namaDepartment');
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_katagori', 'nama_katagori', $this->katagori->getAll(), 'edit', $row['id_katagori']);
        $this->buildcombobox('id_ruanglingkup', 'nama_ruanglingkup', $this->ruang->getAll(), 'edit', $row['id_ruanglingkup']);
        $this->buildcombobox('id_tipe', 'nama_tipe', $this->tipe->getAll(), 'edit', $row['id_tipe']);
        $this->buildcombobox('id_jenis', 'nama_jenis', $this->jenis->getAll(), 'edit', $row['id_jenis']);
        $this->buildcombobox('id_resiko', 'nama_resiko', $this->resiko->getAll(), 'edit', $row['id_resiko']);
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll(), 'edit', $row['department_name']);
        $this->data['default']['tanggal'] = date("d-m-Y", strtotime($row['tanggal']));
        $this->data['default']['etc'] = $row['etc'];
        parent::edit($id);
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
                        "etc"                  => $param ['etc'],
                    );
                    // var_dump($record);
                    // die();;
                    $record1 = array(
                        "program"              => $param ['h_kt'],
                        "periode"              => $param ['h_th'],
                        "bln"                  => $param ['h_bln'],
                        "lastno"               => $param ['h_no'],
                    );

                    // $insert_id = $this->db->insert_id($record);
                    $id_formulir = $this->modeldata->insertdata($record);
                    $depart = $param ['department_name'];
                    $record2 = array();
                        foreach($depart AS $key => $val){
                            $record2[] = array(
                            'id_formulir'          => $id_formulir,
                            'createby'             => $this->session->userdata('ses_id_user'),
                            'createtime'           => date('Y-m-d H:i:s'),
                            'improvement_code'     => $param ['improvement_code'],
                            'department_name'  	   => $param ['department_name'][$key]
                            );
			        }      
                    // var_dump($record2);
                    // die();
                    $this->modeldata->insert_approve($record2);

                    $record3 = array(
                        "id_formulir"          => $id_formulir,
                        "improvement_code"     => $param ['improvement_code'],
                        "status_formulir"       => $param ['statusevaluasi'],
                    );

                    $this->modeldata->insert_formulirapprove($record3);
                    
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
                        "department_name"      => $param ['department_name'],
                        "etc"                  => $param ['etc'],
                    );
                $this->modeldata->updatedata($id_formulir, $record);

                $record2 = array(
                        "status_formulir"       => $param ['statusevaluasi'],
                        "reason"               => $param ['reason'],
                    );
                $this->modeldata->update_formulirapprove($id_formulir, $record2);

                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
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


     public function home_detailrca($id_formulir) {
        $rowdetail = $this->modeldata->getby_id_array($id_formulir);
        $this->data['rowdetail'] = $rowdetail;
        $this->data['prefix_id'] = 'id_formulir';
        $this->data['url_grid_detailrca'] = site_url($this->controller . "/grid_detailrca/$id_formulir");
        $this->load->view($this->view . '/home_detailrca', $this->data);
    }

    public function grid_detailrca($id_formulir) {
        $check = $this->modeldatalog->GridData_detailRCA($id_formulir);
        if (!is_null($check)) {
            $result = $this->modeldatalog->GridData_detailRCA($id_formulir)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }
    
    public function sendmail(){
    $param = $this->input->post();
    $code = $param['improvement_code'];
    if(!empty($code)){;
      $result = $this->modeldata->getbynopn($code);
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
        }else{
            $this->dj(array(
                "valid" => false,
                "message" => "Data tidak tersedia untuk nomor $code "
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

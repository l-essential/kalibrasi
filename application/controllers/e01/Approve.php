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
        //  $this->load->model($this->pathclass . '/Mjenis_model', 'jenis');
        //  $this->load->model($this->pathclass . '/Mkatagori_model', 'katagori');
        //  $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
        //  $this->load->model($this->pathclass . '/Mtipe_model', 'tipe');
        //  $this->load->model($this->pathclass . '/Mresiko_model', 'resiko');
        //  $this->load->model($this->pathclass . '/Formulir_model', 'modeldatalog');
        //  $this->load->model('e_/Department_model', 'dpt');
         $this->load->model($this->pathclass . '/Formulir_two_model', 'two');
         $this->load->model('e01/Formulir_model', 'formulir');
    }
   
    public function edit($id) {
        $preview = $this->modeldata->getbyid_preview($id);
        $deptterkait  = $this->modeldata->getby_dept($id);
        $getid = $this->modeldata->getbyid_rca($id);
        $get_idformula = $this->modeldata->getbyid($id);
        $corrective  = $this->two->getcorrective_byid($id);
        $preventive  = $this->two->getpreventive_byid($id);
        $btnapprove  = $this->two->getfrmapp_byid($id);
        $this->data['corrective'] = $corrective;
        $this->data['preventive'] = $preventive;
        $this->data['btnapprove'] = $btnapprove;
        $this->data['preview'] = $preview;
        $this->data['getid'] = $getid;
        $this->data['idformula'] = $get_idformula;
        $this->data['dept'] = $deptterkait;
        $this->data['view'] = $rowview;
        $this->data['url_analisis'] = site_url($this->controller . '/analisis');
        $this->data['url_correntive'] = site_url("e01/Capa_corrective/add");
        $this->data['url_preventive'] = site_url("e01/Capa_preventive/add");
        $this->data['url_add'] = site_url($this->controller . '/e01/add');
        parent::edit($id);
    }

    function analisis() {
        $post = $this->input->post();
        $id   = $post['id'];
        $code   = $post['code'];
        $dept = $this->session->userdata('ses_department_name');
        $idUser = $this->session->userdata('ses_id_user');
        $namaUser = $this->session->userdata('ses_namaKaryawan');
        $status   = $post['setuju'];
        $reason   = $post['reason'];
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
                "department_name"   => $dept,
                "createby"          => $idUser,
                "createtime"        => $this->curdatetime
            );
            
            $record_1 = array(
                "id_formulir"       => $id,
                "improvement_code"  => $code,
                "status_approve"    => $status,
                "reason"            => $reason,
                "createby"          => $idUser,
                "nama_user"         => $namaUser,
                "createtime"        => $this->curdatetime,
            );

            $record_status = array(
                "id_formulir"          => $id,
                "status_penyimpangan"  => 5,
            );
            
            $checkdata = $this->modeldata->checkData_analisis($dept);
        if ($checkdata > 0 ){
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->modeldata->create_analisis($record);
            $this->modeldata->update_approve($id,$dept,$record_1);
            $this->formulir->update_status($id,$record_status);
            $valid = false;
            $message = "Data Tidak ditemukan";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }


    public function postdataimages() {
        $param = $this->input->post();
        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'email');
    }

    // public function postdata() {
    //     $param = $this->input->post();
    //     if ($param['actiondata'] !== 'delete') {
    //          $param['tanggal'] = date("Y-m-d", strtotime($param['tanggal']));
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

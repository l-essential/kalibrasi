<?php

class Article extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Article';
        $this->load->model($this->pathclass . '/Category_model', 'category');
        $this->load->model($this->pathclass . '/Article_model', 'modeldata');
        $this->load->model('blog/Notifblog_model', 'notif');
    }

     public function index() {
        $this->data['notiflist'] = $this->notif->notiflist();
        $this->data['notifdraft'] = $this->notif->notifdraft();
        $this->data['notifrevisi'] = $this->notif->notifrevisi();
        $this->data['notifreject'] = $this->notif->notifreject();
        $this->data['notifpublic'] = $this->notif->notifpublic();
        parent::index();
    }
    // public function index() {
    //     $this->buildcombobox('id_category', 'name_category', $this->category->getAll());
    //     $this->data['file_images'] = '';
    //     parent::index();
    // }

    public function home_public() {
        $this->data['url_grid'] = site_url($this->controller . "/grid_public");
        $this->load->view($this->view . '/home_public', $this->data);
    }

    public function grid_public() {
        $check = $this->modeldata->GridData_Public();
        if (!is_null($check)) {
            $result = $this->modeldata->GridData_Public()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    

    public function home_tolak() {
        $this->data['url_setstatuspublic'] = site_url($this->controller . "/setstatuspublic");
        $this->data['url_grid'] = site_url($this->controller . "/grid_tolak");
        $this->load->view($this->view . '/home_tolak', $this->data);
    }

    public function grid_tolak() {
        $check = $this->modeldata->GridData_Tolak();
        if (!is_null($check)) {
            $result = $this->modeldata->GridData_Tolak()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    function setstatuspublic() {
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

    public function countbyarticle() {
        error_reporting(0);
        $param = $this->input->post();
        $id_article = $param['id_article'];
        $notiflist = $this->notif->notiflist($id_article);
        $notifdraft = $this->notif->notifdraft($id_article);
        $notifrevisi = $this->notif->notifrevisi($id_article);
        $notifpublic = $this->notif->notifpublic($id_article);
        $this->dj(array(
            "valid" => true,
            "message" => 'Return Data',
            "notiflist" => $notiflist,
            "notifdraft" => $notifdraft,
            "notifrevisi" => $notifrevisi,
            "notifpublic" => $notifpublic,
        ));
        
    }

    // public function postdata() {
    //     $param = $this->input->post();
    //     $actiondata = $param['actiondata'];

    //     switch ($actiondata) {
    //         case "create":
    //             if (empty($checkdata)) {
    //                 $record = array(
    //                     "article" => $param['article'],
    //                 );
    //                 $this->modeldata->insertdata($record);
    //                 $valid = true;
    //                 $message = "Data success created";
    //             } else {
    //                 $valid = false;
    //                 $message = "Data already exist";
    //             }
    //             break;
    //         case "update":
    //             $id_article = $param['id_article'];
    //              $record = array(
    //                     "article" => $param['article'],
    //                 );
    //             $this->modeldata->updatedata($id_article, $record);
    //             $valid = true;
    //             $message = "Data success updated";
    //             break;
    //         case "delete":
    //             $id_article = $param['id_article'];
    //             $this->modeldata->deletebankquota($id_article);
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
    //         "msg" => $message,
    //     ));
    // }



}

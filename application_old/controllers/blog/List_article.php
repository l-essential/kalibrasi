<?php

class List_article extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'List Article';
        $this->load->model('blog/Category_model', 'category');
    }

    public function index() {
        $this->data['url_setstatuslist'] = site_url($this->controller . "/setstatuslist");
        parent::index();
    }

    public function add() {
        $this->buildcombobox('id_category', 'name_category', $this->category->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_category', 'name_category', $this->category->getAll(), 'edit', $row['id_category']);
        $this->data['default']['status_article'] = 1;
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];

        $title = $this->input->post('title_article');
        $string=preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $title); //filter karakter unik dan replace dengan kosong ('')
        $trim=trim($string); // hilangkan spasi berlebihan dengan fungsi trim
        $pre_slug=strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $pre_underscore=strtolower(str_replace(" ", "_", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
        $slug=$pre_slug.'.html'; // tambahkan ektensi .html pada slug
        $slug_underscore=$pre_underscore.'.html';

        switch ($actiondata) {
            case "create":
                if (empty($checkdata)) {
                    $record = array(
                        "title_article" => $param['title_article'],
                        "slug_article" => $slug,
                        "slug_underscore" => $slug_underscore,
                    );
                    $this->modeldata->insertdata($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id_article = $param['id_article'];
                 $record = array(
                       "title_article" => $param['title_article'],
                        "slug_article" => $slug,
                    );
                $this->modeldata->updatedata($id_article, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_article = $param['id_article'];
                $this->modeldata->deletedata($id_article);
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

     function setstatuslist() {
        $post = $this->input->post();
        $id = $post['id'];
        if ($post['status'] == '0') {
            $status = '0';
        } else {
            $status = '1';
        }
        $record = array(
            "status_article" => $status
        );
        $this->modeldata->updatedatalist($id, $record);
       
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

}

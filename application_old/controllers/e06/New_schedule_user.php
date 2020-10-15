<?php


class New_schedule_user extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 
        $this->title = 'Schedule';
    }

     public function add() {
        $this->extenddata();
        parent::add();
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
         $this->data['default']['readonly_code_schedule'] = 'readonly';
        $this->extenddata();
        parent::edit($id);
    }

     public function index_detail($idheader) {
        $this->data['url_update'] = site_url($this->controller . '/update');
         parent::index_detail($idheader);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['schedule_id'] = $row;
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
         $this->data['default']['readonly_schedule_date'] = 'readonly';
        parent::edit_detail($id);
    }

     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['code_schedule'];
        $result = $this->modeldata->getby_name('code_schedule', $checkfield);
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
        if ($param['actiondata'] !== 'delete') {
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

       public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'position_name');
    }

    function update() {
        $post = $this->input->post();
        $id = $post['id'];
        $note = $post['note'];
      
                    $record = array(
                        "schedule_note_user"     => $note,
                    );
        $checkdata = $this->modeldata->checkData($id);
        if ($checkdata > 0 ){
            $this->modeldata->insertdata_user($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->insertmysql->create_schedule($record);
            $valid = false;
            $message = "created Data success";
        }

        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }


}

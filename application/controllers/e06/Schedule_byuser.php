<?php


class Schedule_byuser extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 
        $this->title = 'Schedule by User';
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->extenddata();
        parent::edit($id);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['location_code'] = $row;
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        parent::edit_detail($id);
    }

     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['schedule_date'];
        $result = $this->modeldata->getby_name('schedule_date', $checkfield);
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
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'schedule_notewfh');
    }


}

<?php

class Support extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->helper(array('string','text'));
        $this->setmodel($this->pathclass."/Support_model#spr");
        $this->load->model("e00/Support_subject_model","ssj");
        $this->load->model('e_/Position_model', 'pst');
        $this->load->model('e_/Karyawan_model', 'kyw');
    }

    public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        $this->data['url_status'] = site_url($this->controller . '/Status');
        $this->data['url_disagree'] = site_url($this->controller . '/Disagree');
        parent::index();
        
    }
    
    public function add() {
        $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll());
        $this->data['default']['support_date'] = date("d-m-Y");
        $this->data['default']['support_status'] = "0";
        $this->data['file_images'] = '';
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
         $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll(), 'edit', $row['support_subject']);
         $this->data['default']['support_status'] = "1";
        parent::edit($id);
    }

     public function Preview($id) {
        $rowpreview =  $this->modeldata->getby_id($id);
        $this->data['preview'] = $rowpreview;
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

    // public function Status() {
    //     $row = $this->modeldata->getby_id_array($id);
    //      $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll(), 'edit', $row['support_subject']);
    //      $this->data['default']['support_status'] = "1";
    //     $this->dynamicvalue();
    //     $this->data['controller'] = $this->controller;
    //     $this->data['url_post'] = site_url($this->controller . '/postdata');
    //     $this->data['url_index'] = site_url($this->controller . '/index');
    //     $this->load->view($this->view . '/form_status', $this->data);
    // }

    public function Status($id) {
        $this->iddata = $id;
        $row = $this->spr->getby_id_array($this->iddata);
        $this->data['title'] =  $row['support_code'];
        $this->data['msg'] =  $row['support_message'];
        $this->data['name'] =  $row['namaKaryawan'];
        $this->data['time'] =  $row['createtime'];
        $this->data['img'] =  $row['lokasi_gambar'];
        $this->data['id'] = $id;
        $this->data['condition'] = __FUNCTION__;
        $this->data['prefix_id'] = $this->modeldata->prefix_id;
        $this->data['default']['improvement_code'] = $row['improvement_code'];
        $this->data['default']['kesimpulan_akhir'] = $row['kesimpulan_akhir'];
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll(), 'edit', $row['support_subject']);
        $this->data['default']['support_status'] = "1";
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataimages');
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/form_status', $this->data);
    }

    public function Disagree($id) {
        $this->iddata = $id;
        $row = $this->spr->getby_id_array($this->iddata);
        $this->data['title'] = 'Support ID - ' . $row['support_code'];
        $this->data['msg'] =  $row['support_message'];
        $this->data['name'] =  $row['namaKaryawan'];
        $this->data['time'] =  $row['createtime'];
        $this->data['img'] =  $row['lokasi_gambar'];
        $this->data['update'] =  $row['updatetime'];
        $this->data['reason'] =  $row['support_reason'];
        $this->data['support'] =  $row['support_name'];
        $this->data['id'] = $id;
        $this->data['condition'] = __FUNCTION__;
        $this->data['prefix_id'] = $this->modeldata->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataimages');
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_disagree', $this->data);
    }

   
  

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
             $param['support_date'] = date("Y-m-d", strtotime($param['support_date']));
            
            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['support_date']);
                $temp = "0000" . $counter;
                $nomor = substr($temp, -4);
                $register_code = 'IT-'. date('Ym', strtotime($param['support_date'])). $nomor;
                $param['support_code'] = $register_code;
            } 

             $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

     public function postdataimages() {
        $param = $this->input->post();
      
        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'nama_gambar');
    }


}

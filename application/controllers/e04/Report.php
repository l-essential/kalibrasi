<?php

class Report extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->model($this->pathclass . '/Report_model','lpr');
        $this->load->model($this->pathclass . '/internal_model','type');
        $this->load->model('e00/Scope_model', 'scope');
         $this->load->model('e_/Department_model', 'dpt');
    }

     public function home_laporan() {
        error_reporting(0);
        $this->data['title'] = 'Report Kalibrasi';
        $this->buildcombobox('scope_code', 'scope_name', $this->scope->getAll());
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll());
        $this->buildcombobox('calibration_type', 'calibration_type', $this->type->getAll());
        $this->data['url_index'] = site_url($this->controller . '/home_laporan');
        $this->data['url_generatereport'] = site_url($this->controller . '/generatereport');
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');
        $this->load->view($this->view . '/home_laporan', $this->data);
    }

     public function generatereport() {
        $param = $this->input->post();
        $this->data['result'] = $this->modeldata->generatereport($param);
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');
        $html = $this->load->view($this->view . '/report', $this->data, true);
        $jsonmsg = array(
            "msg" => 'Proses laporan finish',
            "htmldata" => $html,
            "valid" => true,
        );
        echo json_encode($jsonmsg);
    }

   public function exceldata() {
        $post = $_REQUEST;
        $this->data['result'] = $this->modeldata->generatereport($post['daritanggal'], $post['sampaitanggal']);
        $this->data['periode'] = $post['daritanggal'] . ' s/d ' . $post['sampaitanggal'];
        $this->data['daritangal'] = $post['daritanggal'];
        $this->data['sampaitanggal'] = $post['sampaitanggal'];
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');

        $html = $this->load->view($this->view . '/report', $this->data, true);
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Laporan Kalibrasi.xls");
        echo $html;
        exit;
    }

}

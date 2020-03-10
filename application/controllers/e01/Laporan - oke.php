<?php

class Laporan extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->model($this->pathclass . '/Laporan_model','lpr');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
    }

     public function home_laporan() {
        error_reporting(0);
        $this->data['title'] = 'Report Penyimpangan';
        $this->data['url_index'] = site_url($this->controller . '/home_laporan');
        $this->data['url_generatereport'] = site_url($this->controller . '/generatereport');
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');
        $this->load->view($this->view . '/home_laporan', $this->data);
    }

    //  public function generatereport() {
    //     $param = $this->input->post();
    //     $daritanggal = $param['daritanggal'];
    //     $sampaitanggal = $param['sampaitanggal'];
    //     $result = $this->modeldata->generatereport($daritanggal, $sampaitanggal);
    //     $valid = false;
    //     $message = "Tidak ada data yang ditemukan";
    //     $html = "";
    //     $contentdata = "";
    //     if ($result) {
    //         $valid = true;
    //         $this->load->model('lapoaran_model', 'lpr');
    //         $message = "Data berhasil disiapkan";
    //         $this->data['modeldata'] = $this->lpr;
    //         $this->data['result'] = $result;
    //         $this->data['daritanggal'] = $daritanggal;
    //         $this->data['sampaitanggal'] = $sampaitanggal;
    //         $this->data['url_excel'] = site_url($this->controller . '/exceldata');

    //         $html = $this->load->view($this->view . '/report', $this->data, true);
    //     }
    //     // var_dump($contentdata);
    //     // die();
    //     $this->dj(array("valid" => $valid, "message" => $message, "htmldata" => $html));
    // }

     public function generatereport() {
        $post = $this->input->post();
        $this->data['result'] = $this->modeldata->generatereport($post['daritanggal'], $post['sampaitanggal']);
        $this->data['periode'] = $post['daritanggal'] . ' s/d ' . $post['sampaitanggal'];
        $this->data['daritangal'] = $post['daritanggal'];
        $this->data['sampaitanggal'] = $post['sampaitanggal'];
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
        header("Content-Disposition: attachment; filename=Laporan Penyimpangan.xls");
        echo $html;
        exit;
    }

}

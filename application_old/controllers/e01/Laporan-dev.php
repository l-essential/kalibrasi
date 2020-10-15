<?php

class Laporan extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->model($this->pathclass . '/Laporan_model','lpr');
         $this->load->model($this->pathclass . '/Mruanglingkup_model', 'ruang');
    }

    // public function index() {

    //     /* setting array key untuk di home.php agar urlnya dinamis, maka 
    //      * ketika copy home.php hanya mengubah parameternya di controller saja
    //      */
    //     $data = array(
    //         "title" => 'Type',
    //         "base" => base_url(),
    //         "url_post" => site_url($this->controller . '/postdata'),
    //         "url_index" => site_url($this->controller),
    //     );
    //     $this->load->view($this->view . '/home_laporan', $data); /* mengakses folder c_type, lalu ke file home.php, dengan mengirim variabel data yang isinya array */
    // }

    public function home_laporan() {
        error_reporting(0);
        $this->data['title'] = 'Report Penyimpangan';
        $this->data['url_index'] = site_url($this->controller . '/home_laporan');
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_excel'] = site_url($this->controller . '/exceldata');
        $this->load->view($this->view . '/home_laporan', $this->data);
    }

    public function postdata() {
        $param = $this->input->post();
        $result = $this->modeldata->getdatareport($param);
        $valid=false;
        $message="No data found..";
        $htmldata="";
        if($result){
            $valid = true;
            $message = "Data exist";   
            $daritanggal = date('d-m-Y', strtotime($param['daritanggal']));
            $sampaitanggal = date('d-m-Y', strtotime($param['sampaitanggal']));
            $this->data['daritanggal'] = $daritanggal;            
            $this->data['sampaitanggal'] = $sampaitanggal;            
            $this->data['result'] = $result;            
            $this->data['modeldata'] = $this->modeldata;            
            $htmldata = $this->load->view($this->view . '/report', $this->data, true);  
        }
        echo json_encode(array(
            "valid"=>$valid,
            "message"=>$message,
            "htmldata"=>$htmldata,
        ));
        
    }

}

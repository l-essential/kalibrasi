<?php
Class Datadummy extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Data Dummy';
        $this->db = $this->load->database('dummy', true);
        $this->table = 'data_dummy';
        $this->prefix_id = "id_dummy";
    }

    public function index() {
        $this->data['url_add_dummy'] = site_url($this->controller . '/insert_dummy');
        parent::index();
    }
    
    function insert_dummy(){
        $param = $this->input->post();
        
        $jumlah_data = $param['jumlah'];
        $record = array();
        for ($i=1;$i<=$jumlah_data;$i++){
            $record   =   array(
                "nama_lengkap"  =>  "Karyawan Ke-".$i,
                "no_hp"         =>  '089699935552',
                "alamat"        =>  "alamat karyawan ke-$i",
                "pekerjaan"     =>  "karyawan",
                "email"         =>  "karyawan-$i@gmil.com"
            );
                $this->modeldata->insertdata($record);
                $jsonmsg = array("valid" => true, "msg" => "status berhasil diinput");
                echo json_encode($jsonmsg);
        }

     
    }

}
    

<?php
class Schedule extends MY_Controller {

    // public $noview = 0;

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Schedule Work From Home";
        $this->load->model('e_/Karyawan_model','kyw');
    }
    
     public function add() {
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row['nama_karyawan']);
        parent::edit($id);
    }

     public function grid() {
        $check = $this->modeldata->getGridData();
        if (!is_null($check)) {
            $result = $this->modeldata->getGridData()->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }

     public function postdata() {
        $post = $this->input->post();
        if ($post['actiondata'] !== 'delete') {
            $post['department'] = $this->session->userdata('ses_department_name');

            $this->postdatabyparam($post);
        } else {
            parent:: postdata();
        }
    }


    function setstatus() {
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
        $this->eks->updatedata($id, $record);
         if ($status == '1') {
            $this->create_kalibrasi($id);
            }
       
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }
}
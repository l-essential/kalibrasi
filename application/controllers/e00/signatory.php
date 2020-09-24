<?php


class signatory extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Signatory / Approval';
        $this->load->model('e_/Department_model', 'dpt');
        $this->load->model('e_/Karyawan_model', 'kyw');
    }
    
    public function add() {
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll());
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll(), 'edit', $row['department_name']);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row['namaKaryawan']);
        $this->data['default']['tanggal_tmt'] = $this->totimeindo($row['tanggal_tmt']);
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tanggal_tmt'] = $this->totime($param['tanggal_tmt']);
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

}

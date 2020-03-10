<?php


class Bank extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->infoheader = 'Asset Management'; //field header yang akan menjadi info di form atau panel detail
        $this->idheader = $this->modeldata->prefix_id; //field id headernya
        $this->title = 'Asset';
         $this->load->model('e02/location_model', 'lct');
    }

    public function add() {
         $this->buildcombobox('id_location', 'location_name', $this->lct->getAll());
        $this->extenddata();
        parent::add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('id_location', 'location_name', $this->lct->getAll(), 'edit', $row['id_location']);
        $this->extenddata();
        parent::edit($id);
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

    public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
        $this->data['url_homebunga'] = site_url($this->controller . '/home_bunga');
        $this->data['url_homebankquota'] = site_url($this->controller . '/home_bankquota');
    }

    public function home_bunga($id_bank) {
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Data Suku Bunga untuk  " . $rowbank['nama_bank'];
        $this->data['prefix_id_bunga'] = 'id_bankbunga';
        $this->data['url_grid_bunga'] = site_url($this->controller . "/grid_bunga/$id_bank");
        $this->data['url_add_bunga'] = site_url($this->controller . "/add_bunga/$id_bank");
        $this->data['url_edit_bunga'] = site_url($this->controller . "/edit_bunga");
        $this->data['url_delete_bunga'] = site_url($this->controller . "/postdatabunga");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowbank['id_bank']);
        $this->load->view($this->view . '/home_bunga', $this->data);
    }

    public function grid_bunga($id_bank) {
        $check = $this->modeldata->GridDatabunga($id_bank);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDatabunga($id_bank)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_bunga($id_bank) {
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Create - Bunga untuk " . $rowbank['nama_bank'];
        $this->data['id'] = 0;
        $this->data['prefix_id'] = $this->modeldata->prefix_bunga;
        $this->data['id_bank'] = $id_bank;
        $this->data['url_post'] = site_url($this->controller . '/postdatabunga');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_bank");
        $this->load->view($this->view . '/form_bunga', $this->data);
    }

    public function edit_bunga($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_bunga($this->iddata);
        $id_bank = $row->id_bank;
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Update - Bunga untuk " . $rowbank['nama_bank'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_bunga;
        $this->data['id_bank'] = $id_bank;
        $this->data['default']['bunga'] = $row->tahun;
        $this->data['default']['bulan'] = $row->bulan;
        $this->data['default']['periode'] = $row->periode;
        $this->data['default']['nilaibunga'] = $row->nilaibunga;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatabunga');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_bank");
        $this->load->view($this->view . '/form_bunga', $this->data);
    }

    public function postdatabunga() {
        $param = $this->input->post();
        $actiondata = $param['actiondatabunga'];

        switch ($actiondata) {
            case "create":
                $checkdata = $this->modeldata->getbungainbank($param['id_bank'], $param['periode']);
                $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
                $tmp = explode("-", $periodedate);

                if (empty($checkdata)) {
                    $record = array(
                        "id_bank" => $param['id_bank'],
                        "nilaibunga" => $param['nilaibunga'],
                        "periode" => $periodedate,
                        "tahun" => $tmp[0],
                        "bulan" => $tmp[1]
                    );
                    $this->modeldata->insertbunga($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $periodedate = date('Y-m-d', strtotime("01 " . $param['periode']));
                $tmp = explode("-", $periodedate);

                $id_bankbunga = $param['id_bankbunga'];
                $record = array(
                    "nilaibunga" => $param['nilaibunga'],
                    "periode" => $periodedate,
                    "tahun" => $tmp[0],
                    "bulan" => $tmp[1]
                );
                $this->modeldata->updatebunga($id_bankbunga, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_bankbunga = $param['id_bankbunga'];
                $this->modeldata->deletebunga($id_bankbunga);
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
            "message" => $message,
        ));
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['nama_bank'];
        $result = $this->modeldata->getby_name('nama_bank', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

    public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'kantor_cabank');
    }

    public function home_bankquota($id_bank) {
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Data Quota untuk  " . $rowbank['nama_bank'];
        $this->data['prefix_id_bankquota'] = 'id_bankquotatahunan';
        $this->data['url_grid_bankquota'] = site_url($this->controller . "/grid_bankquota/$id_bank");
        $this->data['url_add_bankquota'] = site_url($this->controller . "/add_bankquota/$id_bank");
        $this->data['url_edit_bankquota'] = site_url($this->controller . "/edit_bankquota");
        $this->data['url_delete_bankquota'] = site_url($this->controller . "/postdatabankquota");
        $this->data['url_index'] = site_url($this->controller . '/edit/' . $rowbank['id_bank']);
        $this->load->view($this->view . '/home_bankquota', $this->data);
    }

    public function grid_bankquota($id_bank) {
        $check = $this->modeldata->GridDataQuota($id_bank);
        if (!is_null($check)) {
            $result = $this->modeldata->GridDataQuota($id_bank)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_bankquota($id_bank) {
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Create - Quota untuk " . $rowbank['nama_bank'];
        $this->data['id'] = 0;
        $this->buildcomboboxstatic(array("1#SBUM", "2#SSB"), 'tipe');
        $this->data['prefix_id'] = $this->modeldata->prefix_bankquota;
        $this->data['id_bank'] = $id_bank;
        $this->data['url_post'] = site_url($this->controller . '/postdatabankquota');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_bank");
        $this->load->view($this->view . '/form_bankquota', $this->data);
    }

    public function edit_bankquota($id) {
        $this->iddata = $id;
        $row = $this->modeldata->getby_id_bankquota($this->iddata);
        $id_bank = $row->id_bank;
        $rowbank = $this->modeldata->getby_id_array($id_bank);
        $this->data['title'] = "Update - Quota untuk " . $rowbank['nama_bank'];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->modeldata->prefix_bankquota;
        $this->buildcomboboxstatic(array("1#SBUM", "2#SSB"), 'tipe', 'edit', $row->tipe);
        $this->data['id_bank'] = $id_bank;
        $this->data['default']['tanggal_pko'] = $this->totimeindo($row->tanggal_pko);
        $this->data['default']['tahun'] = $row->tahun;
        $this->data['default']['quota'] = $row->quota;
        $this->data['default']['keterangan'] = $row->keterangan;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatabankquota');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_bank");
        $this->load->view($this->view . '/form_bankquota', $this->data);
    }

    public function postdatabankquota() {
        $param = $this->input->post();
        $actiondata = $param['actiondatabankquota'];

        switch ($actiondata) {
            case "create":
                $checkdata = $this->modeldata->getdatabankquota($param['id_bank'], $param['tipe'], $param['tahun']);
                if (empty($checkdata)) {
                    $record = array(
                        "id_bank" => $param['id_bank'],
                        "tipe" => $param['tipe'],
                        "tanggal_pko" => $this->totime($param['tanggal_pko']),
                        "tahun" => $param['tahun'],
                        "quota" => $param['quota'],
                        "keterangan" => $param['keterangan'],
                    );
                    $this->modeldata->insertbankquota($record);
                    $valid = true;
                    $message = "Data success created";
                } else {
                    $valid = false;
                    $message = "Data already exist";
                }
                break;
            case "update":
                $id_bankquotatahunan = $param['id_bankquotatahunan'];
                $record = array(
                    "tanggal_pko" => $this->totime($param['tanggal_pko']),
                    "quota" => $param['quota'],
                    "tahun" => $param['tahun'],
                    "keterangan" => $param['keterangan']
                );
                $this->modeldata->updatebankquota($id_bankquotatahunan, $record);
                $valid = true;
                $message = "Data success updated";
                break;
            case "delete":
                $id_bankquotatahunan = $param['id_bankquotatahunan'];
                $this->modeldata->deletebankquota($id_bankquotatahunan);
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

}

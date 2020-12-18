<?php

class Recyclebin extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
       
    }

    public function index() {
        $this->data['url_grid_penyimpangan'] = site_url($this->controller . "/grid_penyimpangan/");
        $this->data['url_grid_calibration']  = site_url($this->controller . "/grid_calibration/");
        $this->data['url_grid_konsepproduk'] = site_url($this->controller . "/grid_konsepproduk/");
        $this->data['url_grid_formula']      = site_url($this->controller . "/grid_formula/");

		$this->load->view('setup/v_setup/recyclebin', $this->data);
    }
    
    public function grid_penyimpangan() {
        $check = $this->modeldata->getData_penyimpangan();
        if (!is_null($check)) {
            $result = $this->modeldata->getData_penyimpangan()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function grid_calibration() {
        $check = $this->modeldata->getData_calibration();
        if (!is_null($check)) {
            $result = $this->modeldata->getData_calibration()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function grid_konsepproduk() {
        $check = $this->modeldata->getData_konsepproduk();
        if (!is_null($check)) {
            $result = $this->modeldata->getData_konsepproduk()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function grid_formula() {
        $check = $this->modeldata->getData_formula();
        if (!is_null($check)) {
            $result = $this->modeldata->getData_formula()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }


      

}

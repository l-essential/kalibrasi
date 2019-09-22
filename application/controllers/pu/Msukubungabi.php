<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Msukubungabi extends MY_Controller {

    protected $first_sukubunga;
    protected $first_birate;

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Suku bunga BI Rate";
        $this->first_sukubunga = 0.075; //7.5%
        $this->first_birate = 0.05; //5%
        $this->fieldnotgenerate = array('tanggal_terbit');
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['default']['tanggal_terbit'] = $this->totimeindo($row['tanggal_terbit']);
        parent::edit($id);
    }
    
    public function postdata() {
        $param = $this->input->post();
        if($param['actiondata'] !=='delete'){
            
            print_r($param);
            
            exit;
        }else{
            parent::postdata();
        }
    }

}

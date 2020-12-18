<?php
class Maplikasi extends MY_Controller {
    
      public $noview = 0;

     function __construct() {
         $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Modul Name";
        $this->controller = $this->pathclass .'/Maplikasi';
        $this->view = $this->pathclass .'/v_maplikasi';
        $this->setmodel($this->pathclass . '/Maplikasi_model#ma'); //$this->load->model('lessential_pyp/mkatagori_model', 'mk');
    }

     public function index() {
        if ($this->noview == 0) {
            $this->data['title'] = $this->title;
            $this->data['url_index'] = site_url($this->controller);
            $this->data['url_grid'] = site_url($this->controller . '/grid');
            $this->data['url_add'] = site_url($this->controller . '/add');
            $this->data['url_edit'] = site_url($this->controller . '/edit');
            $this->data['url_setstatus'] = site_url($this->controller . "/setstatus");
            $this->data['url_delete'] = site_url($this->controller . '/postdata');
            $this->data['url_post'] = site_url($this->controller . '/postdata');
            $this->data['prefix_id'] = $this->prefix_id;
            $this->load->view($this->view . '/home', $this->data);
        } else {
        }
    }

    public function grid() {
        $check = $this->ma->getGridData();
        if (!is_null($check)) {
            $result = $this->ma->getGridData()->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }

      public function add() {
        $this->data['title'] = 'Create - ' . $this->title;
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->load->view($this->view . '/form', $this->data);
    }
     
     public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcomboboxstatic(array("active#active", "nonactive#nonactive"), 'statusdata', 'edit', $row['statusdata']);
        $this->data['default']['kode_aplikasi'] = $row['kode_aplikasi'];
        $this->data['default']['nama_aplikasi'] = $row['nama_aplikasi'];
        $this->data['default']['icon'] = $row['icon'];
        parent::edit($id);
    }
     

}

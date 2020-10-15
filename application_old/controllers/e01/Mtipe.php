<?php
class Mtipe extends MY_Controller {

     public $noview = 0;

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Tipe Penyimpangan";
        $this->controller = $this->pathclass . '/mtipe';
        $this->view = $this->pathclass . '/v_mtipe';
        $this->setmodel($this->pathclass . '/Mtipe_model#mt');// $this->load->model('lessential_pyp/mtipe_model', 'mt');

    }

     public function index() {
        if ($this->noview == 0) {
            $this->data['title'] = $this->title;
            $this->data['url_index'] = site_url($this->controller);
            $this->data['url_grid'] = site_url($this->controller . '/grid');
            $this->data['url_add'] = site_url($this->controller . '/add');
            $this->data['url_edit'] = site_url($this->controller . '/edit');
            $this->data['url_delete'] = site_url($this->controller . '/postdata');
            $this->data['url_post'] = site_url($this->controller . '/postdata');
            $this->data['prefix_id'] = $this->prefix_id;
            $this->load->view($this->view . '/home', $this->data);
        } else {
        }
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
        $this->data['default']['readonly_kode_tipe'] = 'readonly';
        parent::edit($id);
    }

}

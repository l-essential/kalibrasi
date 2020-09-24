<?php


class Assets extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Assets';
        $this->load->model("e00/location_model","lct");
        $this->load->model('e00/Position_model', 'pst');
        $this->load->model('e_/Department_model', 'dpt');
        $this->load->model('e02/Type_assets_model', 'tpe');
    }

     public function add() {
        $this->buildcombobox('location_id', 'location_name', $this->lct->getAll());
        $this->buildcombobox('position_id', 'position_name', $this->pst->getAll());
        $this->buildcombobox('type_assets_id', 'type_assets_name', $this->tpe->getAll());
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll());
       
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->buildcombobox('location_id', 'location_name', $this->ssj->getAll(), 'edit', $row['assets_location']);
        $this->buildcombobox('position_id', 'position_name', $this->ssj->getAll(), 'edit', $row['assets_position']);
        $this->buildcombobox('type_assets_id', 'type_assets_name', $this->tpe->getAll(), 'edit', $row['assets_type']);
        $this->buildcombobox('department_name', 'department_name', $this->ssj->getAll(), 'edit', $row['support_subject']);
        parent::edit($id);
    }

}

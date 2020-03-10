<?php

class Request extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->setmodel($this->pathclass."/Useraccess_model#modeldata");
        $this->setmodel($this->pathclass."/Role_model#role");
        $this->load->model('e/Department_model', 'dpt');
        $this->load->model('e01/Karyawan_model', 'kyw');
         $this->load->model('e01/Formulir_model', 'modeldatalog');
    }
    
    public function add() {
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll());
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll());
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        $this->data['default']['status_login'] = "0";
        $this->data['default']['notif_email']  = "0";
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll(), 'edit', $row->department_name);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row->namaKaryawan);
        parent::edit($id);
    }

    public function Userinfo() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $row = $this->modeldata->getby_id($id);
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->data['title'] = 'User information';
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->load->view($this->view . '/userinfo', $this->data);
    }

    public function Changepassword() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $row = $this->modeldata->getby_id($id);
        $this->data['title'] = 'Change Password';
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatachangepassword');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->load->view($this->view . '/changepassword', $this->data);
    }

    public function postdatachangepassword() {
        $param = $this->input->post();
        $id_user = $param['id_user'];
        $username = $param['username'];
        $oldpassword = $param['oldpassword'];
        $newpassword = $param['newpassword'];
        $confirmnewpassword = $param['confirmnewpassword'];

        $checkdata = $this->login->checkuserdata($username, $oldpassword);
        if ($checkdata > 0) {
            if ($confirmnewpassword == $newpassword) {
                $record = array("password" => md5($newpassword));
                $this->modeldata->updatedata($id_user, $record);
                $valid = true;
                $message = "Change password, succes";
            } else {
                $valid = false;
                $message = "New password not match with confirm password";
            }
        } else {
            $valid = false;
            $message = "Old password not match";
        }
        $this->dj(array("valid" => $valid, "msg" => $message));
    }

     public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            if (!empty($param['password']) && $param['password'] !== '-') {
                $param['password'] = md5($param['password']);
                $this->postdatabyparam($param);
            } else {
                unset($param['password']);
                $this->postdatabyparam($param);
            }
        } else {
            parent::postdata();
        }
    }
    
    

}

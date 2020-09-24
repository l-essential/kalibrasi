<?php

class Support extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->helper(array('string','text'));
        $this->setmodel($this->pathclass."/Support_model#modeldata");
        $this->load->model("e00/Support_subject_model","ssj");
        $this->load->model('e/Position_model', 'pst');
        $this->load->model('e01/Karyawan_model', 'kyw');
    }

    public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }
    
    public function add() {
        $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll());
        $this->data['default']['support_date'] = date("d-m-Y");
        $this->data['default']['support_status'] = "0";
        $this->data['file_images'] = '';
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
         $this->buildcombobox('subject_name', 'subject_name', $this->ssj->getAll(), 'edit', $row['support_subject']);
         $this->data['default']['support_status'] = "1";
        parent::edit($id);
    }

     public function Preview($id) {
        $rowpreview =  $this->modeldata->getby_id($id);
        $this->data['preview'] = $rowpreview;
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

    public function Userinfo() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $row = $this->modeldata->getby_id($id);
        $this->data['infobyuser'] = $this->modeldata->getby_id($id);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row->namaKaryawan);
        $this->buildcombobox('department_name', 'department_name', $this->dpt->getAll(), 'edit', $row->department_name);
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
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
             $param['support_date'] = date("Y-m-d", strtotime($param['support_date']));
            
            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['support_date']);
                $temp = "0000" . $counter;
                $nomor = substr($temp, -4);
                $register_code = 'IT-'. date('Ym', strtotime($param['support_date'])). $nomor;
                $param['support_code'] = $register_code;
            } 

            //  if (!empty($param['password']) && $param['password'] !== '-') {
            //      $param['password'] = md5($param['password']);
            //      $this->postdatabyparam($param);
            //  } else {
            //      unset($param['password']);
               
            // }

             $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

     public function postdataimages() {
        $param = $this->input->post();
      
        unset($param['dynamicpost']);
        unset($param['checkdata1']);
        unset($param['checkdata2']);
        unset($param['checkdata3']);
        unset($param['checkdata4']);
        unset($param['dengangambar']);
        $this->postdata_byparam_with_images($param, 'nama_gambar');
    }

    public function sendemailregister() {
        $param = $this->input->post();
        $email = $param['email'];
        $register_code = $param['register_code'];
        $password = $param['password'];
        $username = $param['username'];
        $divisi = $param['department_name'];
        $namaKaryawan = $param['namaKaryawan'];
        $position_name = $param['position_name'];
        $row = $this->modeldata->getbyarray(array( "email" => $email));

        $pesan  = "Dear $namaKaryawan, <br/><br/>";
        $pesan .= "ini username dan password kamu <br/>";
        $pesan .= "ID by department : $register_code<br/>";
        $pesan .= "Nama Lengkap : $namaKaryawan<br/>";
        $pesan .= "Divisi : $divisi";
        $pesan .= "Jabatan : $position_name<br/>";
        $pesan .= "Username : <b>$username</b><br/>";
        $pesan .= "Password : <b>$password<br/><br/>";
        $pesan .= "Jangan berikan username dan password kamu kepada orang lain...<br/>";
        $pesan .= "Silahkan coba login dengan url<br/>";
        $pesan .= "http://localhost:8080/L-essential-dev/Data_Center/index.php/Login<br/>";
        
        $returnmail = $this->sendmail->postmail($email, 'Username dan password', $pesan);
        $validemail = $returnmail['valid'];
        $messageemail = $returnmail['message'];
        $this->dj(array(
            "valid" => $validemail,
            "message" => $messageemail
        ));
    }
    

}

<?php

class Useraccess extends MY_Controller {
    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->helper(array('string','text'));
        $this->setmodel($this->pathclass."/Useraccess_model#modeldata");
        $this->setmodel($this->pathclass."/Role_model#role");
        $this->load->model($this->pathclass.'/Userlog_model','userlog');
        $this->load->model('e_/Divisi_model', 'dvs');
        $this->load->model('e_/Department_model', 'dpt');
        $this->load->model('e_/Seksi_model', 'sks');
        $this->load->model('e_/Position_model', 'pst');
        $this->load->model('e_/Karyawan_model', 'kyw');
    }

    public function index() {
        $this->data['url_preview'] = site_url($this->controller . '/Preview');
        parent::index();
        
    }
    
    public function add() {
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll());
        $this->buildcombobox('kodeDivisi', 'namaDivisi', $this->dvs->getAll());
        $this->buildcombobox('kodeDepartment', 'namaDepartment', $this->dpt->getAll());
        $this->buildcombobox('KodeSeksi', 'namaSeksi', $this->sks->getAll());
        $this->buildcombobox('id_position', 'position_name', $this->pst->getAll());
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll());
        $this->data['default']['register_date'] = date("d-m-Y");
        $this->data['default']['password'] = random_string('alnum', 6) ;
        $this->data['default']['status_login'] = "0";
        $this->data['default']['notif_email'] = "0";
        $this->data['default']['readonly_register_code'] = 'readonly'; 
        parent:: add();
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id($id);
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->buildcombobox('kodeDivisi', 'namaDivisi', $this->dvs->getAll(), 'edit', $row->kodeDivisi);
        $this->buildcombobox('kodeDepartment', 'namaDepartment', $this->dpt->getAll(), 'edit', $row->kodeDepartment);
        $this->buildcombobox('KodeSeksi', 'namaSeksi', $this->sks->getAll(), 'edit', $row->KodeSeksi);
        $this->buildcombobox('id_position', 'position_name', $this->pst->getAll(), 'edit', $row->id_position);
        $this->buildcombobox('namaKaryawan', 'namaKaryawan', $this->kyw->getAll(), 'edit', $row->namaKaryawan);
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
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->data['default']['register_code'] = $row->register_code;
        $this->data['default']['register_date'] = $row->register_date;
        $this->data['default']['namaKaryawan'] = $row->namaKaryawan;
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        $this->data['title'] = 'User information';
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/home_info');
        $this->load->view($this->view . '/userinfo', $this->data);
    }

    public function Userimage() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $row = $this->modeldata->getby_id($id);
        $this->buildcombobox('id_role', 'roleapps', $this->role->getAll(), 'edit', $row->id_role);
        $this->data['default']['register_code'] = $row->register_code;
        $this->data['default']['register_date'] = $row->register_date;
        $this->data['default']['namaKaryawan'] = $row->namaKaryawan;
        $this->data['file_images'] = base_url() . $row->lokasi_gambar;
        $this->data['preview'] = $row;
        $this->data['title'] = 'User information';
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdataimages');
        $this->data['url_index'] = site_url($this->controller . '/home_info');
        $this->load->view($this->view . '/form_image', $this->data);
    }

    public function home_info() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['infobyuser'] = $this->modeldata->getby_id($id);
        $this->data['url_gridlog'] = site_url($this->controller . '/grid_datalog');
        $this->data['url_home_userinfo'] = site_url($this->controller . '/home_userinfo');
        $this->data['url_formimage'] = site_url($this->controller . '/Userimage');
        $this->data['url_update'] = site_url($this->controller . '/address_byuser');
        $this->data['url_Changepassword'] = site_url($this->controller . '/Changepassword');
        $this->load->view($this->view . '/home_info', $this->data);
    }

    function address_byuser() {
        $post = $this->input->post();
        $id = $post['id'];
        $address = $post['address'];
        // var_dump($checkdata);
        // die();
                    $record = array(
                        "user_address"    => $address
                    );
        $checkdata = $this->modeldata->check_ID($id);
        if ($checkdata > 0 ){
            $this->modeldata->update_address($id,$record);
            $valid = true;
            $message = "Update Data success";
        } else {
            $this->modeldata->update_address($record);
            $valid = false;
            $message = "created Data success";
        }
        $jsonmsg = array("valid" => true, "msg" => "$message");
            echo json_encode($jsonmsg);
    }

    public function home_userinfo() {
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['infobyuser'] = $this->modeldata->getby_id($id);
        $this->data['condition'] = __FUNCTION__;
        $row = $this->modeldata->getby_id($id);
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/home_info');
        $this->load->view($this->view . '/home_userinfo', $this->data);
    }

    public function home_userlog() {
        $this->data['title'] = 'Info log';
        $this->data['url_gridlog'] = site_url($this->controller . '/grid_datalog');
        $this->load->view($this->view . '/home_userlog', $this->data);
    }

    public function grid_datalog() {
        $check = $this->userlog->getGridData();
        if (!is_null($check)) {
            $result = $this->userlog->getGridData()->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }



    public function gridserverside() {
        $param = $_REQUEST;
        $orderby = $this->createorder($param);
        $positionpage = intval($param['draw']);
        $startdata = $param['start'];
        $dataperpage = $param['length'];
        $search = $param['search'];
        $searchvalue = $search['value'];
        $searchstatusregex = $search['regex'];
        $check = $this->angsuran->gridserverside('griddata', $startdata, $dataperpage, $orderby, $param);
        if (!is_null($check)) {
            $result = $this->angsuran->gridserverside('griddata', $startdata, $dataperpage, $orderby, $param);
            $countfilter = $result['countfilter'];
            $countall = $result['countall'];
            $data = $result['data']->result();
        } else {
            $countfilter = 0;
            $countall = 0;
            $data = '';
        }
        echo json_encode(array(
            "draw" => $positionpage,
            "recordsTotal" => $countfilter,
            "recordsFiltered" => $countall,
            "data" => $data,
        ));
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
        $this->data['url_index'] = site_url($this->controller . '/home_info');
        $this->load->view($this->view . '/changepassword', $this->data);
    }

    // public function postdatachangepassword() {
    //     $param = $this->input->post();
    //     $id_user = $param['id_user'];
    //     $username = $param['username'];
    //     $oldpassword = $param['oldpassword'];
    //     $newpassword = $param['newpassword'];
    //     $confirmnewpassword = $param['confirmnewpassword'];

    //     $checkdata = $this->login->checkuserdata($username, $oldpassword);
    //     if ($checkdata > 0) {
    //         if ($confirmnewpassword == $newpassword) {
    //             $record = array("password" => md5($newpassword));
    //             $this->modeldata->updatedata($id_user, $record);
    //             $valid = true;
    //             $message = "Change password, succes";
    //         } else {
    //             $valid = false;
    //             $message = "New password not match with confirm password";
    //         }
    //     } else {
    //         $valid = false;
    //         $message = "Old password not match";
    //     }
    //     $this->dj(array("valid" => $valid, "msg" => $message));
    // }

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
             $param['register_date'] = date("Y-m-d", strtotime($param['register_date']));
            
            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['register_date']);
                $temp = "0000" . $counter;
                $nomor = substr($temp, -4);
                $register_code = 'ID-'. date('Ym', strtotime($param['register_date'])). $nomor;
                $param['register_code'] = $register_code;
            }

            if (!isset($param['status_login'])) {
                $param['status_login'] = "0";
            }

            if (!isset($param['notif_email'])) {
                $param['notif_email'] = "0";
            }

            if (!empty($param['password']) && $param['password'] !== '-') {
                $param['password'] = md5($param['password']);
                 $this->postdata_byparam_with_check($param, 'username');
            } else {
                unset($param['password']);
               $this->postdata_byparam_with_check($param, 'username');
            }

            
        } else {
            $this->postdata_byparam_with_check($param, 'username');
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
        $this->postdata_byparam_with_images($param, 'email');
    }

    // public function sendemailregister() {
    //     $param = $this->input->post();
    //     $email = $param['email'];
    //     $register_code = $param['register_code'];
    //     $password = $param['password'];
    //     $username = $param['username'];
    //     $divisi = $param['department_name'];
    //     $namaKaryawan = $param['namaKaryawan'];
    //     $position_name = $param['position_name'];
    //     $row = $this->modeldata->getbyarray(array( "email" => $email));

    //     $pesan  = "Dear $namaKaryawan, <br/><br/>";
    //     $pesan .= "ini username dan password kamu <br/>";
    //     $pesan .= "ID by department : $register_code<br/>";
    //     $pesan .= "Nama Lengkap : $namaKaryawan<br/>";
    //     $pesan .= "Divisi : $divisi";
    //     $pesan .= "Jabatan : $position_name<br/>";
    //     $pesan .= "Username : <b>$username</b><br/>";
    //     $pesan .= "Password : <b>$password<br/><br/>";
    //     $pesan .= "Jangan berikan username dan password kamu kepada orang lain...<br/>";
    //     $pesan .= "Silahkan coba login dengan url<br/>";
    //     $pesan .= "http://localhost:8080/L-essential-dev/Data_Center/index.php/Login<br/>";
        
    //     $returnmail = $this->sendmail->postmail($email, 'Username dan password', $pesan);
    //     $validemail = $returnmail['valid'];
    //     $messageemail = $returnmail['message'];
    //     $this->dj(array(
    //         "valid" => $validemail,
    //         "message" => $messageemail
    //     ));
    // }
    

}

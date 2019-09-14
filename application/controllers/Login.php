<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->controller = get_class($this);
        $this->view = 'v_' . strtolower($this->controller);
        $this->title = 'Login ' . $this->controller;
        $this->load->model('Login_model', 'login');
        $this->load->model('Useraccess_model','useraccess');
    }
    
    public function changepassword() {
        $this->modeldata = $this->useraccess;
        $id = $this->session->userdata('ses_id_user');
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $row = $this->useraccess->getby_id($id);
        $this->data['title'] = 'Change Password';
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = 'id_user';
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
        
        $checkdata = $this->login->checkuserdata($username, $oldpassword);
        if ($checkdata > 0) {
            $record = array("password"=> md5($newpassword));
            $this->useraccess->updatedata($id_user,$record);
            $valid = true;
            $message = "Change password, succes";
        }else{
            $valid = false;
            $message = "Old password not match";
        }        
        $this->dj(array("valid"=>$valid,"msg"=>$message));
        
    }

    public function postdata() {
        $this->form_validation->set_rules('username', 'Username', 'required'); //pengecekan, jika properties input username kosong, data tidak akan tersimpan,dan field tersebut harus diisi
        $this->form_validation->set_rules('password', 'password', 'required'); //pengecekan, jika properties input password kosong, data tidak akan tersimpan,dan field tersebut harus diisi
        if ($this->form_validation->run() == TRUE) { // jika field yang dibutuhkan telah terisi maka nilai true
            $username = $this->input->post('username'); // menangkap post dari login.php ketika post data, dengan properties namenya adalah username
            $password = $this->input->post('password'); // menangkap post dari login.php ketika post data, dengan properties namenya adalah password
            $rowlogin = $this->login->getuserdata($username, $password);  //masuk ke login model, lalu ke fungsi getuserdata dengan mengirim parameternya
            $checkdata = $this->login->checkuserdata($username, $password); //masuk ke login model, lalu ke fungsi checkuserdata dengan mengirim parameternya      

            if ($checkdata > 0) { // ketika nilainya lebih dari 0, maka user tersebut ada di database

                /* membuuat array untuk kebutuhan session */
                $session = array(
                    'ses_statusadminlogin' => TRUE,
                    'ses_username' => $username,
                    'ses_id_user' => $rowlogin->id_user,
                    'ses_fullname' => $rowlogin->fullname,
                    'ses_email' => $rowlogin->email,
                    'ses_id_role' => $rowlogin->id_role,
                    'ses_base_url' => site_url()
                );

                /* fungsi membuat session */
                $this->session->set_userdata($session);
                $valid = true;
                $redir = site_url();
                $message = 'Login success';
            } else {

                /* membuuat array untuk kebutuhan session */
                $session = array(
                    'ses_statusadminlogin' => FALSE,
                );
                /* fungsi membuat session */
                $this->session->set_userdata($session);
                $valid = false;
                $redir = site_url("Login");
                $message = "Login Failed, check your username or password";
            }
            $valid = $valid;
            $message = $message;


            /* membuat array, yang akan dikonversi menjadi json untuk kebutuhan ajax */
            $jsonmsg = array(
                "msg" => $message,
                "hasil" => $valid,
                "err_username" => null,
                "err_password" => null,
                "redirecto" => $redir
            );
        } else {
            /* membuat array, yang akan dikonversi menjadi json untuk kebutuhan ajax */
            $jsonmsg = array(
                "msg" => 'Login Data Failed',
                "hasil" => 'false',
                "err_username" => form_error('username'),
                "err_password" => form_error('password'),
                "redirecto" => site_url("Login")
            );
        }
        /* konversi array json, yang akan terkirim ke login.php di folder view */
        echo json_encode($jsonmsg);
    }

    function logout() {
        $this->session->sess_destroy(); //fungsi menghapus session
        redirect('login', 'refresh'); //fungsi redirect ke login controller
    }

    function logoutjs() {
        $this->session->sess_destroy(); //fungsi menghapus session
        $this->dj(array(
            "valid" => true,
            "message" => "logout success",
        ));
    }

}

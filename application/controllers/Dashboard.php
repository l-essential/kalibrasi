<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->curdatetime = date('Y-m-d H:i:s');
        $this->load->model("Moduleaccess_model", "ma");
        $this->load->model("mst/Notification_model", "notification");
    }

    public function index() {
        $this->data['url_notification'] = site_url($this->controller . '/getnotification');
        $this->data['buildaccess'] = $this->buildaccess($this->session->userdata('ses_id_user'));
        parent::index();
    }

    public function getnotification() {
        $valid = false;
        $message = "Data belum tersedia";
        $data = "";
        $count = "0";

        $id_user = $this->session->userdata('ses_id_user');
        $result = $this->notification->getnotificationuser($id_user);
        
       

        if ($result['data']) {
            $valid = true;
            $message = "Data tersedia";
            $data = $result['data'];
            $count = $result['count'];
        }

        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
            "data" => $data,
            "count" => $count,
        ));
    }

    public function buildaccess($id_user) {
        $resultmoduleaccess = $this->ma->getmoduleaccess($id_user);
        $return = "";
        if ($resultmoduleaccess) {
           $roleapps = $this->session->userdata('ses_id_role');
            
         
           
            if ($resultmoduleaccess) {
                if (count($resultmoduleaccess) == 1) {
                    $return .= "<li>";
                    $return .= "<a class='has-arrow' href='javascript:void(0)' aria-expanded='false'><span class='hide-menu'>"
                            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                            . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
                            . "</span></a>";
                    $return .= "</li>";
                }
            }
            
           if ($roleapps == '1') {
                $return .= "<li>";
                $return .= "<a class='has-arrow' href='javascript:void(0)' aria-expanded='false'><i class='mdi mdi-book-open-variant'></i><span class='hide-menu'>Access Management</span></a>";
                $return .= "<ul aria-expanded='false' class='collapse'>";
                $return .= "<li><a href='javascript:void(0)' data-appsid='0' data-name='Useraccess' data-id='0' data-url='scr/Useraccess' onClick='ToUrl(this)' aria-expanded='false'>&nbsp;User</a></li>";
                $return .= "<li><a href='javascript:void(0)' data-appsid='0' data-name='Application' data-id='0' data-url='scr/Application' onClick='ToUrl(this)' aria-expanded='false'>&nbsp;Application</a></li>";
                $return .= "</ul>";
                $return .= "</li>";
            }



            foreach ($resultmoduleaccess as $rowmodule) {
                $nama_aplikasi = $rowmodule['nama_aplikasi'];
                $id_maplikasi = $rowmodule['id_maplikasi'];
                $return .= "<li>";
                $return .= "<a class='has-arrow' href='javascript:void(0)' aria-expanded='false'><i class='mdi mdi-book-open-variant'></i><span class='hide-menu'>$nama_aplikasi</span></a>";
                $return .= "<ul aria-expanded='false' class='collapse'>";
                $return .= $this->createmenuaccess($id_maplikasi, $id_user);
                $return .= "</ul>";
                $return .= "</li>";
            }
        }
        return $return;
    }

    public function createmenuaccess($id_maplikasi = '', $id_user) {
        $rowgroupstatus = $this->ma->getuserstatus($id_maplikasi, $id_user);
        $spesialgroup = $rowgroupstatus->spesialgroup;
        $id_maplikasigroup = $rowgroupstatus->id_maplikasigroup;

        if ($spesialgroup == 'Y') {
            $resultmenu = $this->ma->gethirarcymenu($id_maplikasi);
        } else {
            $resultmenu = $this->ma->gethirarcymenubygroup($id_maplikasigroup);
        }
        $menu = $this->build_menu($resultmenu);

        $arrayaccess = array(
            "id_user" => $id_user,
            "id_maplikasi" => $id_maplikasi,
            "id_maplikasigroup" => $id_maplikasigroup,
            "spesialgroup" => $spesialgroup,
        );
        $_SESSION['accessdata'] = $arrayaccess;
        return $menu;
    }

    public function build_menu($rows, $parent = 0) {
        error_reporting(0);
        $result = "";
        $sub = 0;
        foreach ($rows as $row) {
            $id_maplikasi = $row['id_maplikasi'];
            $id_parent = $row['id_parent'];
            $icon = $row['icon'];
            $id_mmenu = $row['id_mmenu'];
            $nama_menu = rtrim(trim(trim($row['nama_menu'])));
            $url_menu = rtrim(trim(trim($row['url_menu'])));

            if ($id_parent == $parent) {
                $sub++;
                if ($this->has_children($rows, $id_mmenu)) {
                    $result .= "<li class=''>";
                    $result .= "<a class='has-arrow' data-appsid='$id_maplikasi' data-name='$nama_menu' data-id='$id_mmenu' data-url='$url_menu' onClick='ToUrl(this)'  href='javascript:void(0)' aria-expanded='false'><i class='mdi mdi-archive'></i>&nbsp;$nama_menu</a>";
                    $result .= "<ul aria-expanded='false' class='collapse' style='height: 0px;'>";
                    $result .= $this->build_menu($rows, $id_mmenu);
                    $result .= "</ul>";
                    $result .= "</li>";
                } else {
                    $result .= "<li><a href='javascript:void(0)' data-appsid='$id_maplikasi' data-name='$nama_menu' data-id='$id_mmenu' data-url='$url_menu' onClick='ToUrl(this)' aria-expanded='false'><i class='$icon'></i>&nbsp;$nama_menu</a></li>";
                }
            }
        }
        return $result;
    }

    public function has_children($rows, $id) {
        foreach ($rows as $row) {
            if ($row['id_parent'] == $id)
                return true;
        }
        return false;
    }

}

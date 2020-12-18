<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->curdatetime = date('Y-m-d H:i:s');
        $this->load->model("Total_model", "dsh");
        $this->load->model("Moduleaccess_model", "ma");
        $this->load->model("mst/Notification_model", "notification");
        $this->load->model("eml/Support_model","read");
        $this->load->model("setup/Background_model","bg");
    }

    public function index() {
        $this->load->library('user_agent');
        $this->data['os'] = $this->agent->platform();
        $this->data['ip'] = $this->input->ip_address();
        
        $this->data['total_user'] = $this->dsh->total_user();
        $this->data['user_online'] = $this->dsh->user_online();

        $useronline  = $this->dsh->user_aja();
        $this->data['useronline'] = $useronline;

        $background  = $this->bg->get_background();
        $this->data['background'] = $background;

        $this->data['read'] = $this->read->onreads();
        
        $this->data['url_notification'] = site_url($this->controller . '/getnotification');
        $this->data['buildaccess'] = $this->buildaccess($this->session->userdata('ses_id_user'));
        parent::index();
    }

    public function shortcut()
	{
		$this->load->view('pages/shortcuts');
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
            
         
           
            // if ($resultmoduleaccess) {
            //     if (count($resultmoduleaccess) == 1) {
            //         $return .= "<li>";
            //         $return .= "<a class='has-arrow' href='javascript:void(0)' aria-expanded='false'><span class='hide-menu'>"
            //                 . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            //                 . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            //                 . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
            //                 . "</span></a>";
            //         $return .= "</li>";
            //     }
            // }
            
            // if ($roleapps == '1') {
            //     $return .= "<li class='nav-item has-treeview'>";
            //     $return .= "<a href='#' class='nav-link'>";
            //     $return .= "<i class='nav-icon fas fa-user-secret'></i>";
            //     $return .= "<p>";
            //     $return .= "Access Management";
            //     $return .= "<i class='right fas fa-angle-left'></i>";
            //     $return .= "</p>";
            //     $return .= "</a>";
            //     $return .= "<ul class='nav nav-treeview'>";
            //     $return .= "<li class='nav-item'>";
            //     $return .= "<a href='javascript:;' class='nav-link' data-url='scr/Useraccess' onClick='ToUrl(this)'>";
            //     $return .= "<i class='far fa-circle nav-icon'></i>";
            //     $return .= "<p>user's</p>";
            //     $return .= "</a>";
            //     $return .= "</li>";
            //     $return .= "<li class='nav-item'>";
            //     $return .= "<a href='javascript:;' class='nav-link' data-url='scr/Application' onClick='ToUrl(this)'>";
            //     $return .= "<i class='far fa-circle nav-icon'></i>";
            //     $return .= "<p>Role</p>";
            //     $return .= "</a>";
            //     $return .= "</li>";
            //     $return .= "</ul>";
            //     $return .= "</li>";
                
            // }


            foreach ($resultmoduleaccess as $rowmodule) {
                $nama_aplikasi = $rowmodule['nama_aplikasi'];
                $id_maplikasi = $rowmodule['id_maplikasi'];
                $icon = $rowmodule['icon'];

                $return .= "<li class='nav-item has-treeview'>";
                $return .= "<a href='#' class='nav-link'><i class='nav-icon  $icon'></i><p>$nama_aplikasi";
                $return .= "<i class='right fas fa-angle-left'></i>";
                $return .= "</p></a>";
                $return .= "<ul class='nav nav-treeview'>";
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
                  
                $result .= "<li class='nav-item has-treeview'>";
                $result .= "<a href='#' class='nav-link'><i class='nav-icon  $icon'></i><p>$nama_menu";
                $result .= "<i class='right fas fa-angle-left'></i>";
                $result .= "</p></a>";
                $result .= "<ul class='nav nav-treeview'>";
                $result .=  $this->build_menu($rows, $id_mmenu);
                $result .= "</ul>";
                $result .= "</li>";

                } else {
                    $result .= "<li  class='nav-item'>";
                    $result .= "<a href='javascript:void(0)' class='nav-link' data-appsid='$id_maplikasi' data-name='$nama_menu' data-id='$id_mmenu' data-url='$url_menu' onClick='ToUrl(this)' aria-expanded='false'>";
                    $result .= "<i class='far fa-circle nav-icon'></i>";
                    $result .= "<p>$nama_menu</p>";
                    $result .= "</a>";
                    $result .= "</li>";
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

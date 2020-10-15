<?php

class Application extends MY_Controller {

    public $id_maplikasigroup;
    public $id_maplikasigroupuser;
    public $id_maplikasigroupmenu;
    public $id_mmenu;
    public $id_mbutton;

    public function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->setmodel($this->pathclass . "/Maplikasigroup_model#mag");
        $this->setmodel($this->pathclass . "/Mmenu_model#mnu");
        $this->setmodel($this->pathclass . "/Useraccess_model#user");
        $this->setmodel($this->pathclass . "/Mbutton_model#btn");
        $this->setmodel($this->pathclass . "/Maplikasigroupuser_model#gu");
        $this->setmodel($this->pathclass . "/Maplikasigroupmenu_model#gm");
        $this->setmodel($this->pathclass . "/Maplikasigroupmenubutton_model#gmb");
        $this->id_maplikasigroup = "id_maplikasigroup";
        $this->id_mmenu = "id_mmenu";
        $this->id_mbutton = "id_mbutton";
        $this->id_maplikasigroupuser = "id_maplikasigroupuser";
        $this->id_maplikasigroupmenu = "id_maplikasigroupmenu";
    }

    public function comboparentmenu($id_maplikasi = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = "<option value='0'> </option>";
        $menu .= $this->buildcomboboxrecursive($resultmenu);
        $combobox = '<select id="id_parent" name="id_parent" class="form-control">' . $menu . "</select>";
        return $combobox;
    }

    public function comboparentmenuv2($id_maplikasi = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = "<option value='0'> </option>";
        $menu .= $this->buildcomboboxrecursivev2($resultmenu);
        $combobox = '<select id="id_parent" name="id_parent" class="form-control">' . $menu . "</select>";
        return $combobox;
    }

    public function checkboxmenu($id_maplikasi = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = $this->buildcheckboxrecursive($resultmenu);
        return $menu;
    }

    public function checkboxmenuv2($id_maplikasi = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = $this->buildcheckboxrecursivev2($resultmenu);
        return $menu;
    }

    public function checkboxmenubutton($id_maplikasi = '', $id_maplikasigroup = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = $this->buildcheckboxbuttonrecursive($resultmenu, 0, $id_maplikasigroup);
        return $menu;
    }

    public function checkboxmenubuttonv2($id_maplikasi = '', $id_maplikasigroup = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = $this->buildcheckboxbuttonrecursivev2($resultmenu, 0, $id_maplikasigroup);
        return $menu;
    }

    public function menupreview($id_maplikasi = '') {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $menu = $this->build_menu($resultmenu);
        return $menu;
    }

    public function has_children($rows, $id) {
        foreach ($rows as $row) {
            if ($row['id_parent'] == $id) {
                return true;
            }
        }
        return false;
    }

    public function buildcheckboxbuttonrecursivev2($rows, $parent = 0, $id_maplikasigroup) {
        $sub = 0;
        $result = "<ul>";
        foreach ($rows as $row) {
            $sub++;
            if ($row['id_parent'] == $parent) {
                $id_menu = $row['id_mmenu'];
                $repeat = str_repeat("&nbsp;", $sub);
                $text = $row['nama_menu'] . '<br/>';
                $result .= "<li>";

                $rowgroupmenu = $this->gm->getbyarray_nostatus(array(
                    "id_maplikasigroup" => $id_maplikasigroup,
                    "id_mmenu" => $id_menu,
                        ), 'row');

                if ($rowgroupmenu) {
                    if ($rowgroupmenu->statusdata == 'active') {
                        $result .= "<div class='demo-checkbox'>
                            <label for='checkbox_idmmenu_$id_menu'>$text</label>
                                   <input disabled='' type='checkbox' onclick='handlechekboxClick(this)' name='checkbox_idmmenu_$id_menu' id='checkbox_idmmenu_$id_menu' value='$id_menu'><div id='div_idmmenu_$id_menu'></div>
                                
                            </div>
                        ";
                    } else {
                        $result .= "<div class='checkbox'>
                             <label>$text</label>
                            </div>
                        ";
                    }
                } else {
                    $result .= "<div class='checkbox'>
                             <label>$text</label>
                            </div>
                        ";
                }

                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->buildcheckboxbuttonrecursivev2($rows, $row['id_mmenu'], $id_maplikasigroup);
                $result .= "</li>";
            }
        }
        $result .= "</ul>";
        return $result;
    }

    public function buildcheckboxbuttonrecursive($rows, $parent = 0, $id_maplikasigroup) {
        $sub = 0;

        foreach ($rows as $row) {
            $sub++;
            if ($row['id_parent'] == $parent) {
                $id_menu = $row['id_mmenu'];
                $repeat = str_repeat("&nbsp;", $sub);
                $text = $row['nama_menu'] . '<br/>';


                $rowgroupmenu = $this->gm->getbyarray_nostatus(array(
                    "id_maplikasigroup" => $id_maplikasigroup,
                    "id_mmenu" => $id_menu,
                        ), 'row');

                if ($rowgroupmenu) {
                    if ($rowgroupmenu->statusdata == 'active') {
                        $result .= "<div class='checkbox'>
                                <label><input disabled='' type='checkbox' onclick='handlechekboxClick(this)' name='checkbox_idmmenu_$id_menu' id='checkbox_idmmenu_$id_menu' value='$id_menu'>$text<div id='div_idmmenu_$id_menu'></div></label>
                            
                            </div>
                        ";
                    } else {
                        $result .= "<div class='checkbox'>
                             <label>$text</label>
                            </div>
                        ";
                    }
                } else {
                    $result .= "<div class='checkbox'>
                             <label>$text</label>
                            </div>
                        ";
                }

                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->buildcheckboxbuttonrecursive($rows, $row['id_mmenu'], $id_maplikasigroup);
            }
        }
        return $result;
    }

    public function build_menu($rows, $parent = 0) {
        error_reporting(0);
        $result = "<ul style='padding-left: 25px;'>";
        $sub = 0;
        foreach ($rows as $row) {
            if ($row['id_parent'] == $parent) {
                $sub++;
                $result .= "<li>" . $row['nama_menu'];
                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->build_menu($rows, $row['id_mmenu']);
                $result .= "</li>";
            }
        }
        $result .= "</ul>";
        return $result;
    }

    public function buildcheckboxrecursivev2($rows, $parent = 0) {
        $sub = 0;
        $result = "<ul>";
        foreach ($rows as $row) {
            if ($row['id_parent'] == $parent) {
                $result .= "<li>";
                $id_menu = $row['id_mmenu'];
                $text = $row['nama_menu'] . '<br/>';

                $result .= "<div class='demo-checkbox'>
                                                         <input type='checkbox' onclick='handlechekboxClick(this)' name='checkbox_idmmenu_$id_menu' id='checkbox_idmmenu_$id_menu' value='$id_menu'>

                             <label for='checkbox_idmmenu_$id_menu'>$text</label>
                          </div>
                        ";

                if ($this->has_children($rows, $row['id_mmenu'])) {
                    $result .= $this->buildcheckboxrecursivev2($rows, $row['id_mmenu']);
                }
                $result .= "</li>";
            }
        }
        $result .= "</ul>";
        return $result;
    }

    public function buildcheckboxrecursive($rows, $parent = 0) {
        $sub = 0;
        $result = null;
        foreach ($rows as $row) {
            $sub++;
            if ($row['id_parent'] == $parent) {
                $id_menu = $row['id_mmenu'];
                $repeat = str_repeat("&nbsp;", $sub);
                $text = $repeat . $row['nama_menu'] . '<br/>';

                $result .= "<div class='checkbox'>
                             <label><input type='checkbox' onclick='handlechekboxClick(this)' name='checkbox_idmmenu_$id_menu' id='checkbox_idmmenu_$id_menu' value='$id_menu'>$text</label>
                          </div>
                        ";

                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->buildcheckboxrecursive($rows, $row['id_mmenu']);
            }
        }
        return $result;
    }

    public function buildcomboboxrecursivev2($rows, $parent = 0, $counter = 0) {
        error_reporting(0);
        $sub = 0;
        foreach ($rows as $row) {
            if ($row['id_parent'] == $parent) {
                $id_menu = $row['id_mmenu'];
                $repeat = str_repeat("_", $counter + 1);
                $text = $repeat . $row['nama_menu'] . '<br/>';
                $result .= "<option value='$id_menu'>$text</option>";
                if ($this->has_children($rows, $row['id_mmenu']))
                    $sub++;
                $result .= $this->buildcomboboxrecursivev2($rows, $row['id_mmenu'], $sub);
            }
        }
        return $result;
    }

    public function buildcomboboxrecursive($rows, $parent = 0) {
        error_reporting(0);
        $sub = 0;
        $result = null;
        foreach ($rows as $row) {
            $sub++;
            if ($row['id_parent'] == $parent) {
                $id_menu = $row['id_mmenu'];
                $repeat = str_repeat("&nbsp;", $sub);
                $text = $repeat . $row['nama_menu'] . '<br/>';
                $result .= "<option value='$id_menu'>$text</option>";
                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->buildcomboboxrecursive($rows, $row['id_mmenu']);
            }
        }
        return $result;
    }

    public function add() {
        $this->extendform();
        parent::add();
    }

    public function edit($id) {
        $this->extendform();
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        if (isset($param['dataintablemenu_length'])) {
            unset($param['dataintablemenu_length']);
        }
        if (isset($param['dataintable_length'])) {
            unset($param['dataintable_length']);
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

    public function extendform() {
        $this->data['url_group'] = site_url($this->controller . '/home_group');
        $this->data['url_menu'] = site_url($this->controller . '/home_menu');
        $this->data['url_button'] = site_url($this->controller . '/home_button');
    }

    public function index() {
        $this->data['url_detail'] = site_url($this->controller . '/home_detail');
        parent::index();
    }

    public function home_detail($id_maplikasi) {
        $rowaplikasi = $this->modeldata->getby_id_array($id_maplikasi);
        $this->data['title'] = "Home Detail Aplikasi " . $rowaplikasi['nama_aplikasi'];
        $this->data['url_index'] = site_url($this->controller);
        $this->data['url_group'] = site_url($this->controller . '/home_group');
        $this->data['url_menu'] = site_url($this->controller . '/home_menu');
        $this->data['url_button'] = site_url($this->controller . '/home_button');
        $this->data['rowaplikasi'] = $rowaplikasi;
        $this->load->view($this->view . '/home_detail', $this->data);
    }

    public function home_group($id_maplikasi) {
        $rowaplikasi = $this->modeldata->getby_id_array($id_maplikasi);
        $this->data['title'] = "Home Group Aplikasi ";
        $this->data['prefix_id'] = $this->id_maplikasigroup;
        $this->data['url_grid'] = site_url($this->controller . "/grid_group/$id_maplikasi");
        $this->data['url_add'] = site_url($this->controller . "/add_group/$id_maplikasi");
        $this->data['url_edit'] = site_url($this->controller . "/edit_group");
        $this->data['url_delete'] = site_url($this->controller . "/postdatagroup");
        $this->data['url_detailgroup'] = site_url($this->controller . '/home_groupdetail');
        $this->data['url_usergroup'] = site_url($this->controller . '/home_groupuser');
        $this->data['url_usermenu'] = site_url($this->controller . '/home_groupmenu');
        $this->data['url_usermenubutton'] = site_url($this->controller . '/home_groupmenubutton');
        $this->load->view($this->view . '/home_group', $this->data);
    }

    public function home_groupdetail($id_maplikasigroup) {
        $rowgrouptmp = $this->mag->getby_id_data($id_maplikasigroup);
        $rowgroup = $rowgrouptmp[0];
        $this->data['title'] = "Home Group " . $rowgroup['nama_group'];
        $this->data['url_usergroup'] = site_url($this->controller . '/home_groupuser');
        $this->data['url_usermenu'] = site_url($this->controller . '/home_groupmenu');
        $this->data['url_usermenubutton'] = site_url($this->controller . '/home_groupmenubutton');
        $this->data['rowgroup'] = $rowgroup;
        $this->data['url_group'] = site_url($this->controller . '/home_group');
        $this->load->view($this->view . '/home_groupdetail', $this->data);
    }

    public function home_groupuser($id_maplikasigroup) {
        $rowgroup = $this->mag->getby_id_array($id_maplikasigroup);
        $this->data['title'] = "Home Group User";
        $this->data['prefix_id_groupuser'] = $this->id_maplikasigroupuser;
        $this->data['url_grid_groupuser'] = site_url($this->controller . "/grid_groupuser/$id_maplikasigroup");
        $this->data['url_add_groupuser'] = site_url($this->controller . "/add_groupuser/$id_maplikasigroup");
        $this->data['url_edit_groupuser'] = site_url($this->controller . "/edit_groupuser");
        $this->data['url_delete_groupuser'] = site_url($this->controller . "/postdatagroupuser");
        $this->load->view($this->view . '/home_groupuser', $this->data);
    }

    public function grid_groupuser($id_maplikasigroup) {
        $check = $this->gu->GridData($id_maplikasigroup);
        if (!is_null($check)) {
            $result = $this->gu->GridData($id_maplikasigroup)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_groupuser($id_maplikasigroup) {
        $this->data['title'] = "Create - Form Group User";
        $this->data['id'] = 0;
        $this->modeldata = $this->gu;
        $this->buildcombobox('id_user', "namaKaryawan", $this->user->getAll());
        $this->data['prefix_id'] = $this->id_maplikasigroupuser;
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroupuser');
        $this->data['url_index'] = site_url($this->controller . "/home_groupuser/$id_maplikasigroup");
        $this->load->view($this->view . '/form_groupuser', $this->data);
    }

    public function edit_groupuser($id) {
        $this->iddata = $id;
        $this->modeldata = $this->gu;
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $this->buildcombobox('id_user', "namaKaryawan", $this->user->getAll(), 'edit', $rowarray['id_user']);
        $id_maplikasigroup = $rowarray['id_maplikasigroup'];
        $this->data['title'] = "Update - Form Group User";
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->id_maplikasigroupuser;
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroupuser');
        $this->data['url_index'] = site_url($this->controller . "/home_groupuser/$id_maplikasigroup");
        $this->load->view($this->view . '/form_groupuser', $this->data);
    }

    public function postdatagroupuser() {
        $this->prefix_id = $this->id_maplikasigroupuser;
        $this->modeldata = $this->gu;
        $post = $this->input->post();
        $this->postdatabyparam($post);
    }

    public function home_groupmenu($id_maplikasigroup) {
        $rowgroup = $this->mag->getby_id_array($id_maplikasigroup);
        $this->data['title'] = "Home Group Menu";
        $this->data['checkboxmenu'] = $this->checkboxmenuv2($rowgroup['id_maplikasi']);
        $this->data['prefix_id'] = $this->id_maplikasigroupmenu;
        $this->data['id_maplikasi'] = $rowgroup['id_maplikasi'];
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->data['url_grid'] = site_url($this->controller . "/grid_groupmenu/$id_maplikasigroup");
        $this->data['url_add'] = site_url($this->controller . "/add_groupmenu/$id_maplikasigroup");
        $this->data['url_edit'] = site_url($this->controller . "/edit_groupmenu");
        $this->data['url_delete'] = site_url($this->controller . "/postdatagroupmenu");
        $this->data['url_getgroupmenulist'] = site_url($this->controller . "/getgroupmenulist");
        $this->data['url_postgroupmenu'] = site_url($this->controller . "/postgroupmenu");
        $this->load->view($this->view . '/home_groupmenu', $this->data);
    }

    public function getbuttoncheckbox() {
        $param = $this->input->post();
        $id_mmenu = $param['id_mmenu'];
        $rowmenu = $this->mnu->getby_id_array($id_mmenu);
        $resultbutton = $this->btn->getAllData($rowmenu['id_maplikasi']);
        $checkbox = "";
        if ($resultbutton) {
            $checkbox .= "<div class='demo-checkbox'><input type='checkbox' onclick='handlechekboxbuttonallClick(this)' id='checkbox_id_mbutton_$id_mmenu' name='checkbox_id_mbutton_$id_mmenu' value='$id_mmenu'/><label for='checkbox_id_mbutton_$id_mmenu'>All Button</label></div> ";
            foreach ($resultbutton as $row) {
                $id_mbutton = $row['id_mbutton'];
                $btnname = $row['btncode'];
                $checkbox .= "<div class='demo-checkbox'><input type='checkbox' onclick='handlechekboxbuttonClick(this)' id='checkbox_id_mbutton_$id_mmenu" . "_" . $id_mbutton . "' name='checkbox_id_mbutton_$id_mmenu" . "_" . $id_mbutton . "' value='$id_mmenu" . "_" . $id_mbutton . "' /><label for='checkbox_id_mbutton_$id_mmenu" . "_" . $id_mbutton . "'>$btnname</label></dov> ";
            }
        }
        $this->dj(array(
            "valid" => true,
            "message" => "Finish",
            "allbutton" => $checkbox,
        ));
    }

    public function getbuttonlist() {
        $param = $this->input->post();
        $id_mmenu = $param['id_mmenu'];
        $actiondata = $param['actiondata'];
        $rowgroupmenu = $this->gm->getbyarray_nostatus(array(
            "id_mmenu" => $id_mmenu
        ));


        if ($actiondata == 'delete') {
            $id_maplikasigroupmenu = $rowgroupmenu->id_maplikasigroupmenu;
            $rowgroupmenubutton = $this->gmb->getbyarray_nostatus(array(
                "id_maplikasigroupmenu" => $id_maplikasigroupmenu
                    ), 'array');
        } else {
            $rowmenu = $this->mnu->getby_id($id_mmenu);
            $rowgroupmenubutton = $this->btn->getAllData($rowmenu->id_maplikasi);
        }



        $this->dj(array(
            "valid" => true,
            "message" => "Finish",
            "databutton" => $rowgroupmenubutton,
        ));
    }

    public function getstatusbuttunaccess() {
        $id_maplikasigroup = $this->input->post('id_maplikasigroup');
        $rowgroupmenu = $this->gm->getbyarray(array(
            "id_maplikasigroup" => $id_maplikasigroup,
                ), 'array');
        $allbuttonmenu = "";
        if ($rowgroupmenu) {
            $allbuttonmenu = array();
            foreach ($rowgroupmenu as $row) {
                $id_maplikasigroupmenu = $row['id_maplikasigroupmenu'];
                $id_mmenu = $row['id_mmenu'];

                $arraybuttonaccess = $this->gmb->getbyarray_nostatus(array(
                    "id_maplikasigroupmenu" => $id_maplikasigroupmenu,
                        ), 'array');

                $data['id_mmenu'] = $id_mmenu;
                $data['data'] = $arraybuttonaccess;

                $allbuttonmenu[] = $data;
            }
        }

        $this->dj(array(
            "valid" => true,
            "message" => 'Finish',
            "allbuttonaccess" => $allbuttonmenu,
        ));
    }

    public function home_groupmenubutton($id_maplikasigroup) {
        $rowgroup = $this->mag->getby_id_array($id_maplikasigroup);
        $this->data['title'] = "Home Group Menu Button";
        $this->data['checkboxmenu'] = $this->checkboxmenubuttonv2($rowgroup['id_maplikasi'], $id_maplikasigroup);
        $this->data['prefix_id'] = $this->id_maplikasigroupmenu;
        $this->data['id_maplikasi'] = $rowgroup['id_maplikasi'];
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->data['url_grid'] = site_url($this->controller . "/grid_groupmenubutton/$id_maplikasigroup");
        $this->data['url_add'] = site_url($this->controller . "/add_groupmenubutton/$id_maplikasigroup");
        $this->data['url_edit'] = site_url($this->controller . "/edit_groupmenubutton");
        $this->data['url_delete'] = site_url($this->controller . "/postdatagroupmenubutton");
        $this->data['url_getgroupmenulist'] = site_url($this->controller . "/getgroupmenulist");
        $this->data['url_getbutton'] = site_url($this->controller . "/getbuttoncheckbox");
        $this->data['url_getbuttonlist'] = site_url($this->controller . "/getbuttonlist");
        $this->data['url_getstatusbuttunaccess'] = site_url($this->controller . "/getstatusbuttunaccess");
        $this->data['url_postgroupmenubutton'] = site_url($this->controller . "/postgroupmenubutton");
        $this->load->view($this->view . '/home_groupmenubutton', $this->data);
    }

    public function setdatacheckboxgroupmenu($id_maplikasi, $id_menu, $id_maplikasigroup, $condition) {
        $resultmenu = $this->mnu->getDatasusunanmenu($id_maplikasi);
        $hasil = $this->buildgroupmenurecursive($resultmenu, $id_menu, $id_maplikasigroup, $condition);
        $resultgroupmenu = $this->gm->getbyarray_nostatus(array(
            "id_maplikasigroup" => $id_maplikasigroup,
                ), 'array');
        return $resultgroupmenu;
    }

    public function getgroupmenulist() {
        $id_maplikasigroup = $this->input->post('id_maplikasigroup');
        $resultgroupmenu = $this->gm->getbyarray_nostatus(array(
            "id_maplikasigroup" => $id_maplikasigroup,
                ), 'array');

        $this->dj(array(
            "valid" => true,
            "message" => "Data success ",
            "allgroupmenu" => $resultgroupmenu,
        ));
    }

    public function buildgroupmenurecursive($rows, $parent = 0, $id_maplikasigroup = 0, $condition = '') {
        $sub = 0;
        $result = "";
        foreach ($rows as $row) {
            $sub++;
            if ($row['id_parent'] == $parent) {
                $id_mmenu = $row['id_mmenu'];
                if ($condition == 'delete') {
                    $finddata = $this->gm->getbyarray(array(
                        "id_maplikasigroup" => $id_maplikasigroup,
                        "id_mmenu" => $id_mmenu,
                    ));
                    if ($finddata) {
                        $Id = $finddata->id_maplikasigroupmenu;
                        $this->gm->deletedata($Id);
                    }
                } else {
                    $finddata = $this->gm->getbyarray_nostatus(array(
                        "id_maplikasigroup" => $id_maplikasigroup,
                        "id_mmenu" => $id_mmenu,
                    ));
                    if ($finddata) {
                        $id = $finddata->id_maplikasigroupmenu;
                        $recordupdate = array(
                            "statusdata" => "active",
                            "deleteby" => " ",
                            "deletetime" => " ",
                        );
                        $this->gm->updatedata($id, $recordupdate);
                    } else {
                        $record = array(
                            "id_maplikasigroup" => $id_maplikasigroup,
                            "id_mmenu" => $id_mmenu,
                        );
                        $this->gm->insertdata($record);
                    }
                }

                $repeat = str_repeat("&nbsp;", $sub);
                $text = $repeat . $row['nama_menu'] . '<br/>';
                $result .= "<label id='$id_mmenu'>$text</label>";

                if ($this->has_children($rows, $row['id_mmenu']))
                    $result .= $this->buildgroupmenurecursive($rows, $row['id_mmenu'], $id_maplikasigroup, $condition);
            }
        }
        return $result;
    }

    public function postgroupmenubutton() {
        $post = $this->input->post();
        $id_maplikasi = $post['id_maplikasi'];
        $id_mmenu = $post['id_mmenu'];
        $id_maplikasigroup = $post['id_maplikasigroup'];
        $rowgroupmenu = $this->gm->getbyarray(array(
            "id_mmenu" => $id_mmenu,
            "id_maplikasigroup" => $id_maplikasigroup,
        ));



        if ($rowgroupmenu) {
            $id_maplikasigroupmenu = $rowgroupmenu->id_maplikasigroupmenu;
            $id_mbutton = $post['id_mbutton'];
            $actiondata = $post['actiondata'];

            if ($actiondata == 'delete') {
                $finddata = $this->gmb->getbyarray(array(
                    "id_maplikasigroupmenu" => $id_maplikasigroupmenu,
                    "id_mbutton" => $id_mbutton,
                ));
                if ($finddata) {
                    $Id = $finddata->id_maplikasigroupmenubutton;
                    $this->gmb->deletedata($Id);
                }
            } else {
                $finddata = $this->gmb->getbyarray_nostatus(array(
                    "id_maplikasigroupmenu" => $id_maplikasigroupmenu,
                    "id_mbutton" => $id_mbutton,
                ));
                if ($finddata) {
                    $id = $finddata->id_maplikasigroupmenubutton;
                    $recordupdate = array(
                        "statusdata" => "active",
                        "deleteby" => " ",
                        "deletetime" => " ",
                    );
                    $this->gmb->updatedata($id, $recordupdate);
                } else {
                    $record = array(
                        "id_maplikasigroupmenu" => $id_maplikasigroupmenu,
                        "id_mbutton" => $id_mbutton,
                    );
                    $this->gmb->insertdata($record);
                }
            }
        }



        $this->dj(array(
            "valid" => true,
            "message" => "Data success " . $actiondata,
        ));
    }

    public function postgroupmenu() {
        $post = $this->input->post();
        $id_maplikasi = $post['id_maplikasi'];
        $id_maplikasigroup = $post['id_maplikasigroup'];
        $id_mmenu = $post['id_mmenu'];
        $actiondata = $post['actiondata'];

        if ($actiondata == 'delete') {
            $finddata = $this->gm->getbyarray(array(
                "id_maplikasigroup" => $id_maplikasigroup,
                "id_mmenu" => $id_mmenu,
            ));
            if ($finddata) {
                $Id = $finddata->id_maplikasigroupmenu;
                $this->gm->deletedata($Id);
            }
        } else {
            $finddata = $this->gm->getbyarray_nostatus(array(
                "id_maplikasigroup" => $id_maplikasigroup,
                "id_mmenu" => $id_mmenu,
            ));
            if ($finddata) {
                $id = $finddata->id_maplikasigroupmenu;
                $recordupdate = array(
                    "statusdata" => "active",
                    "deleteby" => " ",
                    "deletetime" => " ",
                );
                $this->gm->updatedata($id, $recordupdate);
            } else {
                $record = array(
                    "id_maplikasigroup" => $id_maplikasigroup,
                    "id_mmenu" => $id_mmenu,
                );
                $this->gm->insertdata($record);
            }
        }

        $resultgroupmenu = $this->setdatacheckboxgroupmenu($id_maplikasi, $id_mmenu, $id_maplikasigroup, $actiondata);


        $this->dj(array(
            "valid" => true,
            "message" => "Data success " . $actiondata,
            "allgroupmenu" => $resultgroupmenu,
        ));
    }

    public function grid_groupmenu($id_maplikasigroup) {
        $check = $this->gm->GridData($id_maplikasigroup);
        if (!is_null($check)) {
            $result = $this->gm->GridData($id_maplikasigroup)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_groupmenu($id_maplikasigroup) {
        $rowgroup = $this->mag->getby_id_array($id_maplikasigroup);
        $this->data['title'] = "Create - Form Group Menu";
        $this->data['id'] = 0;
        $this->modeldata = $this->gm;
        $this->buildcombobox('id_mmenu', "nama_menu", $this->mnu->getAllmenu($rowgroup['id_maplikasi']));
        $this->data['prefix_id'] = $this->id_maplikasigroupmenu;
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroupmenu');
        $this->data['url_index'] = site_url($this->controller . "/home_groupmenu/$id_maplikasigroup");
        $this->load->view($this->view . '/form_groupmenu', $this->data);
    }

    public function edit_groupmenu($id) {
        $this->iddata = $id;
        $this->modeldata = $this->gm;
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $rowgroup = $this->mag->getby_id_array($rowarray['id_maplikasigroup']);
        $id_maplikasigroup = $rowgroup['id_maplikasigroup'];
        $this->data['title'] = "Update - Form Group Menu";
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->id_maplikasigroupmenu;
        $this->data['id_maplikasigroup'] = $id_maplikasigroup;
        $this->buildcombobox('id_mmenu', "nama_menu", $this->mnu->getAllmenu($rowgroup['id_maplikasi']), 'edit', $rowarray['id_mmenu']);
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroupmenu');
        $this->data['url_index'] = site_url($this->controller . "/home_groupmenu/$id_maplikasigroup");
        $this->load->view($this->view . '/form_groupmenu', $this->data);
    }

    public function postdatagroupmenu() {
        $this->prefix_id = $this->id_maplikasigroupmenu;
        $this->modeldata = $this->gm;
        $post = $this->input->post();
        $this->postdatabyparam($post);
    }

    public function grid_group($id_maplikasi) {
        $check = $this->mag->GridData($id_maplikasi);
        if (!is_null($check)) {
            $result = $this->mag->GridData($id_maplikasi)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_group($id_maplikasi) {
        $this->data['title'] = "Create - Form Group Aplikasi";
        $this->data['id'] = 0;
        $this->data['default']['spesialgroup'] = '';
        $this->data['prefix_id'] = $this->id_maplikasigroup;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroup');
        $this->data['url_index'] = site_url($this->controller . "/home_group/$id_maplikasi");
        $this->load->view($this->view . '/form_group', $this->data);
    }

    public function edit_group($id) {
        $this->iddata = $id;
        $this->modeldata = $this->mag;
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $id_maplikasi = $rowarray['id_maplikasi'];
        $this->data['title'] = "Update - Form Group Aplikasi";
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->id_maplikasigroup;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatagroup');
        $this->data['url_index'] = site_url($this->controller . "/home_group/$id_maplikasi");
        $this->load->view($this->view . '/form_group', $this->data);
    }

    public function postdatagroup() {
        $this->prefix_id = $this->id_maplikasigroup;
        $this->modeldata = $this->mag;
        $post = $this->input->post();
        if (!isset($post['spesialgroup'])) {
            $post['spesialgroup'] = "N";
        }
        $this->postdatabyparam($post);
    }

    public function home_menu($id_maplikasi) {
        $rowaplikasi = $this->modeldata->getby_id_array($id_maplikasi);
        $this->data['menupreview'] = $this->menupreview($id_maplikasi);
        $this->data['title'] = "Home Menu Aplikasi ";
        $this->data['prefix_id'] = $this->id_mmenu;
        $this->data['url_index'] = site_url($this->controller . "/home_menu/$id_maplikasi");
        $this->data['url_grid'] = site_url($this->controller . "/grid_menu/$id_maplikasi");
        $this->data['url_add'] = site_url($this->controller . "/add_menu/$id_maplikasi");
        $this->data['url_edit'] = site_url($this->controller . "/edit_menu");
        $this->data['url_delete'] = site_url($this->controller . "/postdatamenu");
        $this->load->view($this->view . '/home_menu', $this->data);
    }

    public function grid_menu($id_maplikasi) {
        $check = $this->mnu->GridData($id_maplikasi);
        if (!is_null($check)) {
            $result = $this->mnu->GridData($id_maplikasi)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_menu($id_maplikasi) {
        $this->data['title'] = "Create - Form Menu Aplikasi";
        $this->data['id'] = 0;
        $this->modeldata = $this->mnu;
        //$this->buildcombobox('id_mmenu~id_parent', "nama_menu", $this->modeldata->getAllmenu($id_maplikasi));
        $this->data['parentmenu'] = $this->comboparentmenuv2($id_maplikasi);
        $this->data['id_parentmenu'] = 0;
        $this->data['prefix_id'] = $this->id_mmenu;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->data['url_post'] = site_url($this->controller . '/postdatamenu');
        $this->data['url_index'] = site_url($this->controller . "/home_menu/$id_maplikasi");
        $this->load->view($this->view . '/form_menu', $this->data);
    }

    public function edit_menu($id) {
        $this->iddata = $id;
        $this->modeldata = $this->mnu;
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $id_maplikasi = $rowarray['id_maplikasi'];
        $this->data['title'] = "Update - Form Menu Aplikasi";
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->id_mmenu;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->data['parentmenu'] = $this->comboparentmenu($id_maplikasi);
        $this->data['id_parentmenu'] = $rowarray['id_parent'];
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatamenu');
        $this->data['url_index'] = site_url($this->controller . "/home_menu/$id_maplikasi");
        $this->load->view($this->view . '/form_menu', $this->data);
    }

    public function postdatamenu() {
        $this->prefix_id = $this->id_mmenu;
        $this->modeldata = $this->mnu;
        $post = $this->input->post();
        $this->postdatabyparam($post);
    }

    public function home_button($id_maplikasi) {
        $rowaplikasi = $this->modeldata->getby_id_array($id_maplikasi);
        $this->data['title'] = "Home Button Aplikasi ";
        $this->data['prefix_id'] = $this->id_mbutton;
        $this->data['url_grid'] = site_url($this->controller . "/grid_button/$id_maplikasi");
        $this->data['url_add'] = site_url($this->controller . "/add_button/$id_maplikasi");
        $this->data['url_edit'] = site_url($this->controller . "/edit_button");
        $this->data['url_delete'] = site_url($this->controller . "/postdatabutton");
        $this->load->view($this->view . '/home_button', $this->data);
    }

    public function grid_button($id_maplikasi) {
        $check = $this->btn->GridData($id_maplikasi);
        if (!is_null($check)) {
            $result = $this->btn->GridData($id_maplikasi)->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

    public function add_button($id_maplikasi) {
        $this->data['title'] = "Create - Form Button Aplikasi";
        $this->data['id'] = 0;
        $this->modeldata = $this->btn;
        $this->data['prefix_id'] = $this->id_mbutton;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->data['url_post'] = site_url($this->controller . '/postdatabutton');
        $this->data['url_index'] = site_url($this->controller . "/home_button/$id_maplikasi");
        $this->load->view($this->view . '/form_button', $this->data);
    }

    public function edit_button($id) {
        $this->iddata = $id;
        $this->modeldata = $this->btn;
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $id_maplikasi = $rowarray['id_maplikasi'];
        $this->data['title'] = "Update - Form Button Aplikasi";
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->id_mbutton;
        $this->data['id_maplikasi'] = $id_maplikasi;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdatabutton');
        $this->data['url_index'] = site_url($this->controller . "/home_button/$id_maplikasi");
        $this->load->view($this->view . '/form_button', $this->data);
    }

    public function postdatabutton() {
        $this->prefix_id = $this->id_mbutton;
        $this->modeldata = $this->btn;
        $post = $this->input->post();
        $this->postdatabyparam($post);
    }

}

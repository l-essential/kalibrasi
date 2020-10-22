<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $controller = null;
    public $modeldata = null;
    public $othermodel = null;
    public $view = null;
    public $page = 1;
    public $start = 0;
    public $limit = 10;
    public $title = null;
    public $data = array();
    public $prefix_id = null;
    public $prefix_id_detail = null;
    public $iddata = 0;
    public $curdate = null;
    public $curdatetime = null;
    public $pathimages = null;
    public $ref_detail = null;
    public $userid;
    public $infoheader = null;
    public $idheader = null;
    //members 
    public $m_pxdoc = NULL;
    public $m_fp = NULL;
    public $m_rs = NULL;
    public $m_default_field_value = "";
    public $m_use_field_slashes = false;
    public $m_use_field_trim = false;
    public $_select = array();
    public $_where = array();
    public $_limit = 0;
    public $_offset = 0;
    public $noaut = 0;
    public $noview = 0;
    public $pathclass = '';
    public $fieldnotgenerate = '';
    public $fielddetailnotgenerate = '';

    function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->setdefault();
        $this->setclassobj($this->whoAmI());
    }
    
    public function setdefault() {
        $this->load->model("Default_model", "dfm");
        $result = $this->dfm->gettimeserver();
        $this->curdate = $result->syndate;
        $this->curdatetime = $result->syntime;
    }
    

    public function http_request_api_dukcapil($nik) {
        $rows = array(
            'username' => dukcapil_username,
            'password' => dukcapil_password,
            'ip' => dukcapil_ip_register,
            'nik' => $nik,
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => dukcapil_url_cek_nik,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($rows)),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            $valid = false;
            $message = "cURL Error #:" . $err;
            $data = "";
        } else {
            $valid = true;
            $message = 'curl terproses';
            $data = $response;
        }

        return array(
            "valid" => $valid,
            "message" => $message,
            "data" => $data,
        );
    }

    public function check_ktp_didukcapil($no_ktp = '') {
        if ($no_ktp) {
            $result = $this->http_request_api_dukcapil($no_ktp);
            if ($result['valid'] == true) {
                //data berhasil di request
                $jsondata = json_decode($result['data'], true);
                if (is_array($jsondata) && count($jsondata) > 0) {
                    //terjadi kesalahan
                    $message = $jsondata['message'];
                    return array("valid" => false, "message" => $message, "data" => "");
                } else {
                    $datajson = json_decode($jsondata, true);
                    if (is_array($datajson) && count($datajson) > 0) {
                        if (isset($datajson['content'])) {
                            $rowdata = $datajson['content'][0];
                            if (!isset($rowdata['RESPON'])) {
                                //data ktp ditemukan
                                return array("valid" => true, "message" => "Data tersedia", "data" => $rowdata);
                            } else {
                                //data tidak ktp ditemukan                            
                                return array("valid" => false, "message" => "Data tidak ditemukan", "data" => "");
                            }
                        }
                    }
                }
            } else {
                //terjadi error
                return array("valid" => false, "message" => $result['message'], "data" => "");
            }
        } else {
            return array("valid" => false, "message" => 'nomor ktp belum di kirim sebagai parameter', "data" => "");
        }
    }

    public function checkdukcapil($no_ktp = '') {
        return $this->check_ktp_didukcapil($no_ktp);
    }

    public function createorder($param) {
        $columns = $param['columns'];
        $order = $param['order'];
        $orderby = " ORDER BY ";
        foreach ($order as $roworder) {
            $field = $columns[$roworder['column']]['data'];
            $dir = $roworder['dir'];
            $orderby .= " $field $dir,";
        }
        $orderby = rtrim($orderby, ",");
        return $orderby;
    }

    function kirimemail($to, $subject, $message, $cc = '', $bcc = '') {
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1'); // for unlimited size     
        if (!filter_var($to, FILTER_VALIDATE_EMAIL) === false) {
            $resultsend = $this->sendmail->externalmail($to, $subject, $message, $cc, $bcc);
            $valid = $resultsend['valid'];
            $alert = $resultsend['message'];
        } else {
            $valid = false;
            $alert = "Format email not valid";
        }
        return array("valid" => $valid, "message" => $alert);
    }

    public function terbilang($nilai) {
        $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
        if ($nilai < 12) {
            $terbilang = " " . $angka[$nilai];
        } else if ($nilai < 20) {
            $terbilang = $this->terbilang($nilai - 10) . " belas ";
        } else if ($nilai < 100) {
            $terbilang = $this->terbilang($nilai / 10) . " puluh " . $this->terbilang($nilai % 10);
        } else if ($nilai < 200) {
            $terbilang = "seratus" . $this->terbilang($nilai - 100);
        } else if ($nilai < 1000) {
            $terbilang = $this->terbilang($nilai / 100) . " ratus " . $this->terbilang($nilai % 100);
        } else if ($nilai < 2000) {
            $terbilang = "seribu" . $this->terbilang($nilai - 1000);
        } else if ($nilai < 1000000) {
            $terbilang = $this->terbilang($nilai / 1000) . " ribu " . $this->terbilang($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $terbilang = $this->terbilang($nilai / 1000000) . " juta " . $this->terbilang($nilai % 1000000);
        }
        return $terbilang;
    }

    public function sumdays($from, $until) {
        if (empty($from)) {
            $from = date('Y-m-d');
        } else {
            $from = date('Y-m-d', strtotime($from));
        }
        if (empty($until)) {
            $until = date('Y-m-d');
        } else {
            $until = date('Y-m-d', strtotime($until));
        }

        $sumdays = (strtotime($until) - strtotime($from)) / (24 * 3600) + 1;
        return $sumdays;
    }

    function periode_bunga() {
        $selisih = date('d') - 24;
        $from = date('d-m-Y', strtotime("-" . $selisih . " days", strtotime(date('d-m-Y'))));
        $until = date('d-m-Y', strtotime("+1 month -1 day", strtotime($from)));
        return array("fromdate" => $from, "untildate" => $until);
    }

    public function run_url($param) {
        ini_set("memory_limit", "-1");
        ini_set('max_execution_time', 0);
        $valid = true;
        $msg = "Running curl finish";
        $url = $param;
        $data = curl_init();
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($data, CURLOPT_URL, $url);
        $hasil = curl_exec($data);
        if (curl_errno($hasil)) {
            $valid = false;
            $msg = "Running curl failed," . 'Error:' . curl_error($hasil);
        }
        curl_close($data);
        return array("valid" => $valid, "message" => $msg);
    }

    public function test() {
        echo 'test';
    }

    public function importdata() {
        $this->data['url_postimport'] = site_url($this->controller . '/postimport');
        $this->data['url_index'] = site_url($this->controller);
        $this->load->view($this->view . '/formimport', $this->data);
    }

    public function postimport() {
        $post = $this->input->post();
        $path = "public/uploads/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = FALSE;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload("uploadfile")) {
            $data = array('upload_data' => $this->upload->data());
            $file_ext = $data['upload_data']['file_ext'];
            $full_path = $data['upload_data']['full_path'];
            $namafile = $data['upload_data']['file_name'];
            $post['lokasi_file'] = $path . "/" . $namafile;
            $post['nama_file'] = $namafile;
            $this->import_excel($file_ext, $full_path, $post);
            exit;
        } else {
            $error = $this->upload->display_errors();
            $jsonmsg = array(
                "msg" => $error,
                "valid" => false,
                "postdata" => '',
            );
        }
        $this->dj($jsonmsg);
    }

    public function setexcelreader($path_file) {
        ini_set("memory_limit", "-1");
        ini_set('max_execution_time', 0);
        include APPPATH . 'third_party/PHPExcel.php';
        include APPPATH . 'third_party/PHPExcel/IOFactory.php';
        if ($ext == '.xls') {
            $objReader = new PHPExcel_Reader_Excel5();
            $msg = "file excel 2003 berhasil di import";
        } else {
            $objReader = new PHPExcel_Reader_Excel2007();
            $msg = "file excel 2007 berhasil di import";
        }

        $objReader->setReadDataOnly(true);
        $objPHPExcel = $objReader->load($path_file);
        $objPHPExcel->setActiveSheetIndex(0); //hanya sheet pertama yang akan di proses
        $sheetCount = $objPHPExcel->getSheetCount();
        return array("sheetcount" => $sheetCount, "objreader" => $objReader, "objphpexcel" => $objPHPExcel);
    }

    public function totime($date) {
        $return = null;
        if (!empty($date)) {
            $return = date("Y-m-d", strtotime($date));
        }
        return $return;
    }

    public function totimeindo($date) {
        $return = null;
        if (!empty($date)) {
            $return = date("d-m-Y", strtotime($date));
        }
        return $return;
    }

    function dja($data) {
        header("Content-type: application/json");
        echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    public function setmodel($modelname) {
        $tmpdata = explode("#", $modelname);
        $modelfile = $tmpdata[0];
        $alias = $tmpdata[1];
        $this->load->model($modelfile, $alias);
    }

    public static function whoAmI() {
        return get_called_class();
    }

    public function is_logged() {
        if ($this->session->userdata('ses_statusadminlogin') != TRUE) {
            redirect('Login', 'refresh');
        } else {
            $this->userid = $this->session->userdata('ses_id_user');
            $this->createbuttonaccess();
            $this->createlog();
        }
    }

    public function createbuttonaccess() {
        //echo 'test';
        //echo $_GET['id_mmenu'];
        //exit;
        if (isset($_GET['id_mmenu'])) {
            if (!empty($_GET['id_mmenu'])) {
                $this->load->model("Moduleaccess_model", "ma");
                $id_mmenu = $_GET['id_mmenu'];
                $resultbutton = "";

                if ($_SESSION['accessdata']['spesialgroup'] == 'Y') {
                    $arraybutton = $this->ma->getallbutton();
                } else {
                    $arraybutton = $this->ma->gethirarcymenubygroupbuttonbyidmenu($_SESSION['accessdata']['id_maplikasigroup'], $id_mmenu);
                }

                $buttons = array();
                foreach ($arraybutton as $rowbutton) {
                    $buttons[] = $rowbutton['btncode'];
                }

                $listbuttons = implode(",", $buttons);

                $this->session->set_userdata(array(
                    "arraybutton" => $arraybutton,
                    "listbutton" => $listbuttons
                ));
            }
        }
    }

    public function createlog() {
        $this->load->helper('url');
        $currentURL = site_url() . '/' . $this->uri->uri_string();
        $this->load->model('Userlog_model', 'userlog');
        $this->load->library('Detect');
        $sysinfo = $this->detect->systemInfo();
        $requestdata = "";
        if (strpos($currentURL, 'post') !== false) {
            if (isset($_REQUEST['actiondata'])) {
                $currentURL .= $currentURL . '/' . $_REQUEST['actiondata'];
                $requestdata = json_encode($_REQUEST);
            }
        }

        $logs = array(
            "id_useraccess" => $this->userid,
            "url" => $currentURL,
            "requestdata" => $requestdata,
            "ipaddress" => $this->getRealIpAddr(),
            "browser" => $this->detect->browser(),
            "systemdevice" => $sysinfo['os'] . ' - ' . $sysinfo['device']
        );
        $checkdata = $this->userlog->getbyarray($logs);
        if (empty($checkdata)) {
            $this->userlog->insertdata($logs);
        }
    }

    public function getRealIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function cutmonthyear($monthyear, $format = '') {
        $month = substr($monthyear, 0, -4);
        if (!empty($format) && $format == 'indo') {
            $month = $this->monthtoindo($month);
        }
        $year = substr($monthyear, -4);
        return array('monthdata' => $month, 'yeardata' => $year);
    }

    public function monthtoromawi($month = '') {
        if (!empty($month)) {
            $arraymonthromawi = array(
                "January" => "I",
                "February" => "II",
                "March" => "III",
                "April" => "IV",
                "May" => "V",
                "June" => "VI",
                "July" => "VII",
                "August" => "VIII",
                "September" => "IX",
                "October" => "X",
                "November" => "XI",
                "December" => "XII",
            );

            return $arraymonthromawi["$month"];
        } else {
            return $month;
        }
    }

    public function romawitomonth($romawi = '', $format = '') {
        if (!empty($romawi)) {
            if (empty($format)) {
                $arraydata = array(
                    "I" => "JanuarY",
                    "II" => "FebruarY",
                    "III" => "March",
                    "IV" => "April",
                    "V" => "May",
                    "VI" => "June",
                    "VII" => "July",
                    "VIII" => "August",
                    "IX" => "September",
                    "X" => "October",
                    "XI" => "November",
                    "XII" => "December",
                );
            } else {
                $arraydata = array(
                    "I" => "Januari",
                    "II" => "Februari",
                    "III" => "Maret",
                    "IV" => "April",
                    "V" => "Mei",
                    "VI" => "Juni",
                    "VII" => "Juli",
                    "VIII" => "Agustus",
                    "IX" => "September",
                    "X" => "Oktober",
                    "XI" => "November",
                    "XII" => "Desember",
                );
            }

            return $arraydata["$romawi"];
        } else {
            return $romawi;
        }
    }

    public function remove_format($text) {
        $text = str_replace(",", "", $text);
        return $text;
    }

    public function monthtoindo($month = '') {
        if (!empty($month)) {
            $arraymonthindo = array(
                "January" => "Januari",
                "February" => "Februari",
                "March" => "Maret",
                "April" => "April",
                "May" => "Mei",
                "June" => "Juni",
                "July" => "Juli",
                "August" => "Agustus",
                "September" => "September",
                "October" => "Oktober",
                "November" => "November",
                "December" => "Desember",
            );

            return $arraymonthindo["$month"];
        } else {
            return $month;
        }
    }

    public function dj($array) {
        //header("Content-type: application/json");
        header('Content-Type: application/json', true);
        echo json_encode($array);
    }

    public function checkmodeldata() {
        $rootapps = getcwd() . '/';
        $rootmodel = $rootapps . 'application/models/';
        $filemodel = $rootmodel . $this->controller . '_model.php';
        if (file_exists($filemodel)) {
            $this->load->model($this->controller . '_model', 'modeldata');
            $this->prefix_id = $this->modeldata->getprefix();
            $this->prefix_id_detail = $this->modeldata->getprefixdetail();
        }
    }

    public function setclassobj($classname = '') {
        $controller = $classname;
        if (!empty($this->pathclass)) {
            $this->controller = "$this->pathclass/" . $classname;
            $this->view = "$this->pathclass/" . 'v_' . strtolower($controller);
        } else {
            $this->controller = $classname;
            $this->view = 'v_' . strtolower($this->controller);
        }


        if ($controller !== 'Login') {
            if ($this->noaut == 0) {
                $this->is_logged();
            }
        }
        $this->title = $controller;
        $this->checkmodeldata();
    }

    public function setclassobj_noaut($controller) {
        $this->controller = $controller;
        $this->view = 'v_' . strtolower($this->controller);
        $this->title = $this->controller;
        $this->checkmodeldata();
    }

    public function cektanggal($date) {
        if ($date == '1970-01-01') {
            return null;
        } else if ($date == '01-01-1970') {
            return null;
        } else if ($date == '00-00-0000') {
            return null;
        } else if ($date == '0000-00-00') {
            return null;
        } else if ($date == '1970-01-01 00:00:00') {
            return null;
        } else if ($date == '01-01-1970 00:00:00') {
            return null;
        } else if ($date == '01-01-1970 07:00:00') {
            return null;
        } else if ($date == '0000-00-00 00:00:00') {
            return null;
        } else if ($date == '00-00-0000 00:00:00') {
            return null;
        } else {
            return $date;
        }
    }

    function pages($fn_name, $curent_page, $totalcontent, $perpage) {
        $totalpages = ceil($totalcontent / $perpage);

        $output = '<nav aria-label="Page navigation pagingdata">';
        $output .= "<ul class='pagination justify-content-start'>";
        $output .= " <li class='page-item disabled'>";


        if ($curent_page > 1) {
            $output .= '<a class="prev" href="javascript:' . $fn_name . '(\'1\')">First</a> ';
            $preid = $curent_page - 1;
            $output .= '<a class="prev" href="javascript:' . $fn_name . '(\'' . $preid . '\')">Previous</a> ';
        } else {
            $output .= '<span class="currentprev">First</span> ';
            $output .= '<span class="currentprev">Previous</span> ';
        }

        if ($totalpages <= 5) {
            $counter = 1;
            while ($counter <= $totalpages) {
                if ($counter == $curent_page) {
                    $output .= '<span class="current"><a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a></span> ';
                } else {
                    $output .= '<a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a> ';
                }
                $counter++;
            }
        }


        if ($totalpages > 5) {
            if ($curent_page <= 3) {
                $counter = 1;
                while ($counter <= 5) {
                    if ($counter == $curent_page) {
                        $output .= '<span class="current"><a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a></span> ';
                    } else {
                        $output .= '<a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a> ';
                    }
                    $counter++;
                }

                $output .= ' <span style="margin-right: 2px;">...</span> ';
            }

            if ($curent_page > 3 && ($curent_page < $totalpages - 2)) {
                $output .= ' <span style="margin-right: 2px;">...</span> ';
                $counter = $curent_page - 2;
                while ($counter <= ($curent_page + 2)) {
                    if ($counter == $curent_page) {
                        $output .= '<span class="current"><a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a></span> ';
                    } else {
                        $output .= '<a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a> ';
                    }
                    $counter++;
                }
                $output .= ' <span style="margin-right: 2px;">...</span> ';
            }

            if ($curent_page > 3 && ($curent_page >= $totalpages - 2)) {
                $output .= ' <span style="margin-right: 2px;">...</span> ';
                $counter = $totalpages - 4;
                while ($counter <= $totalpages) {
                    if ($counter == $curent_page) {
                        $output .= '<span class="current"><a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a></span> ';
                    } else {
                        $output .= '<a href="javascript:' . $fn_name . '(\'' . $counter . '\')">' . $counter . '</a> ';
                    }
                    $counter++;
                }
            }
        }


        if ($curent_page < $totalpages) {
            $neid = $curent_page + 1;
            $output .= '<a class="next" href="javascript:' . $fn_name . '(\'' . $neid . '\')">Next</a> ';
            $output .= '<a class="next" href="javascript:' . $fn_name . '(\'' . $totalpages . '\')">Last</a> ';
        } else {
            $output .= '<span class="currentprev">Next</span> ';
            $output .= '<span class="currentprev">Last</span> ';
        }

        $output .= '</li>';
        $output .= '</ul>';
        $output .= '</nav><br style="clear:both;" />';

        return $output;
    }

    function json_autocomplete($data) {
        header("Content-type: application/json");
        echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_AMP);
    }

    function datajson($valid = false, $message = '', $parameter = '', $data = '', $counter = 0) {
        if (empty($parameter)) {
            $parameter = 'no_parameter';
        }
        $result = array('valid' => $valid, 'message' => $message, "parameter" => $parameter, "data" => $data, "counter" => $counter);
        header("Content-type: application/json");
        echo json_encode($result);
    }

    public function index() {
        if ($this->noview == 0) {
            $this->data['title'] = $this->title;
            $this->data['condition'] = __FUNCTION__;
            $this->data['url_index'] = site_url($this->controller);
            $this->data['url_index_detail'] = site_url($this->controller . '/index_detail');
            $this->data['url_grid'] = site_url($this->controller . '/grid');
            $this->data['url_add'] = site_url($this->controller . '/add');
            $this->data['url_edit'] = site_url($this->controller . '/edit');
            $this->data['url_delete'] = site_url($this->controller . '/postdata');
            $this->data['url_import'] = site_url($this->controller . '/importdata');
            $this->data['url_post'] = site_url($this->controller . '/postdata');
            $this->data['prefix_id'] = $this->prefix_id;
            $this->load->view($this->view . '/home', $this->data);
        } else {
            //echo 'no view for this controller';
        }
    }

    public function index_detail($idheader) {
        $this->data['titledetail'] = 'Detail Data ';
        $this->data['id_header'] = $idheader;
        $this->data['url_index'] = site_url($this->controller);
        $this->data['prefix_id_detail'] = $this->prefix_id_detail;
        $this->data['url_grid_detail'] = site_url($this->controller . '/grid_detail/' . $idheader);
        $this->data['url_add_detail'] = site_url($this->controller . '/add_detail/' . $idheader);
        $this->data['url_edit_detail'] = site_url($this->controller . '/edit_detail');
        $this->data['url_delete_detail'] = site_url($this->controller . '/postdata_detail');
        $this->load->view($this->view . '/home_detail', $this->data);
    }

    public function home_detail($id_header) {
        $rowheader = $this->modeldata->getby_id_array($id_header);
        $this->data['rowheader'] = $rowheader;
        $this->data['title'] = 'Detail Data ' . $rowheader["$this->infoheader"];
        $this->data['id_header'] = $id_header;
        $this->data['url_index'] = site_url($this->controller);
        $this->data['prefix_id'] = $this->prefix_id_detail;
        $this->data['url_grid'] = site_url($this->controller . '/grid_detail/' . $id_header);
        $this->data['url_add'] = site_url($this->controller . '/add_detail/' . $id_header);
        $this->data['url_edit'] = site_url($this->controller . '/edit_detail');
        $this->data['url_delete'] = site_url($this->controller . '/postdatadetail');
        $this->load->view($this->view . '/home_detail', $this->data);
    }

    public function add_detail($id_header) {
        $rowheader = $this->modeldata->getby_id_array($id_header);
        $this->data['rowheader'] = $rowheader;
        $this->data['title'] = "Create - Detail Data " . $rowheader["$this->infoheader"];
        $this->data['id'] = 0;
        $this->data["flagcondition"] = 'add';
        $this->data["prefix_id"] = $this->prefix_id_detail;
        $this->data["$this->prefix_id"] = $id_header;
        $this->data['url_post'] = site_url($this->controller . '/postdatadetail');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_header");
        $this->data['controller'] = site_url($this->controller);
        $this->load->view($this->view . '/form_detail', $this->data);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        $id_header = $row["$this->idheader"];
        $rowheader = $this->modeldata->getby_id_array($id_header);
        $this->data['rowheader'] = $rowheader;
        $this->iddata = $id;
        $this->data["$this->prefix_id"] = $id_header;
        $this->data['title'] = "Update - Detail Data " . $rowheader["$this->infoheader"];
        $this->data['id'] = $id;
        $this->data['prefix_id'] = $this->prefix_id_detail;
        $this->dynamicdetailvalue();
        $this->data["flagcondition"] = 'edit';
        $this->data['controller'] = site_url($this->controller);
        $this->data['url_post'] = site_url($this->controller . '/postdatadetail');
        $this->data['url_index'] = site_url($this->controller . "/edit/$id_header");
        $this->load->view($this->view . '/form_detail', $this->data);
    }

    public function access_index() {
        $this->load->view($this->view . '/home', $this->data);
    }

    public function grid() {
        $check = $this->modeldata->getGridData();
        if (!is_null($check)) {
            $result = $this->modeldata->getGridData()->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }

    // function test()
    // {
    //     var a = 7;

    //     if( a > 1 ){
    //         echo "H";
    //     }else if(a > 5 ){
    //         echo "Z";
    //     }else if(a > 5 ){
    //         echo "Z";
    //     }
    // }

    // public function grid() {
    //     $check = $this->modeldata->getGridData();
    //     var_dump($this->session->userdata('ses_id_role'));exit;
    //     // var_dump();
    //     // exit;
        
    //     if (!is_null($check)) {
            
    //         if( $this->session->userdata('ses_username') == '' || $this->session->userdata('ses_id_role') == 'QA' ){
    //             $result = $this->modeldata->getGridData()->result();
    //         }

	//         if( $this->session->userdata('ses_id_role') == 'IT' || $this->session->userdata('ses_id_role') == 'PROC' ){
    //             $result = $this->modeldata->getGridData()->result();
	    
    //     }else {
    //             $result = $this->modeldata->getGridData()->where('id_role', 'id')->result();
    //         }
            
    //     }else {
    //         $result = '';
    //     }

    //     $this->dj(array(
    //         "data" => $result
    //     ));
    // }

    public function grid_detail($idheader) {
        $check = $this->modeldata->getGridDatadetail($idheader);
        if (!is_null($check)) {
            $result = $this->modeldata->getGridDatadetail($idheader)->result();
        } else {
            $result = '';
        }
        $this->dj(array(
            "data" => $result
        ));
    }

    public function access_grid() {
        $this->dj(array(
            "data" => $this->modeldata->getGridData()->result()
        ));
    }

    public function buildcomboboxstatic($array, $key_id, $flag = '', $fieldedit = '') {
        $i = 0;
        foreach ($array as $rowdropdown) {

            $tmpdata = explode("#", $rowdropdown);

            $this->data['default']["$key_id"][-1]['value'] = NULL;
            $this->data['default']["$key_id"][-1]['display'] = '- Please Select -';
            $this->data['default']["$key_id"][$i]['value'] = $tmpdata[0];
            $this->data['default']["$key_id"][$i]['display'] = $tmpdata[1];


            if ($flag == 'edit') {
                if ($fieldedit == $tmpdata[0]) {
                    $this->data['default']["$key_id"][$i]['selected'] = "SELECTED";
                }
            }
            $i++;
        }
    }

    public function buildcombobox($key_id = '', $display = '', $result = '', $flag = '', $fieldedit = '') {
        if ($result) {
            $i = 0;

            $valuekey = $key_id;
            if (strpos($key_id, "~") !== false) {
                $tmpdata = explode("~", $key_id);
                $key_id1 = $tmpdata[0];
                $key_id2 = $tmpdata[1];
                $valuekey = $key_id1;
                $key_id = $key_id2;
            }

            foreach ($result as $rowdropdown) {



                $this->data['default']["$key_id"][-1]['value'] = NULL;
                $this->data['default']["$key_id"][-1]['display'] = '- Please Select -';
                $this->data['default']["$key_id"][$i]['value'] = $rowdropdown["$valuekey"];

                if (strpos($display, "~") !== false) {
                    $tmpdata = explode("~", $display);
                    $display1 = $tmpdata[0];
                    $display2 = $tmpdata[1];
                    $this->data['default']["$key_id"][$i]['display'] = $rowdropdown["$display1"] . " - " . $rowdropdown["$display2"];
                } else {
                    $this->data['default']["$key_id"][$i]['display'] = $rowdropdown["$display"];
                }


                if ($flag == 'edit') {
                    if ($fieldedit == $rowdropdown["$valuekey"]) {
                        $this->data['default']["$key_id"][$i]['selected'] = "SELECTED";
                    }
                }
                $i++;
            }
        } else {
            $this->data['default']["$key_id"][0]['value'] = NULL;
            $this->data['default']["$key_id"][0]['display'] = '- Please Select -';
        }
    }

    public function add() {
        //$this->dynamicvalue();
        $this->data['title'] = 'Create - ' . $this->title;
        $this->data['id'] = $this->iddata;
        $this->data['condition'] = __FUNCTION__;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->data['url_cekdatalog'] = site_url($this->controller . '/cekdatalog');
        $this->load->view($this->view . '/form', $this->data);
    }

    public function access_add() {
        //$this->dynamicvalue();
        $this->data['title'] = 'Create - ' . $this->title;
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->data['url_cekdatalog'] = site_url($this->controller . '/cekdatalog');
        $this->load->view($this->view . '/form', $this->data);
    }

    public function dynamicvalue() {
        $rowarray = $this->modeldata->getby_id_array($this->iddata);
        $resultschema = $this->modeldata->schema_column();
        foreach ($resultschema as $rowschema) {
            $column_key = $rowschema['COLUMN_KEY'];
            $note = $rowschema['COLUMN_COMMENT'];
            $field = $rowschema['COLUMN_NAME'];


            $statusgenerate = 1;
            if (strpos($note, 'combobox') !== false) {
                $statusgenerate = 0;
            }
            if (strpos($note, 'dont') !== false) {
                $statusgenerate = 0;
            }

            if (!empty($this->fieldnotgenerate)) {
                if (in_array($field, $this->fieldnotgenerate, true)) {
                    $statusgenerate = 0;
                }
            }




            if ($column_key !== 'PRI' && $statusgenerate == 1) {
                if (array_key_exists($field, $rowarray)) {
                    if ($field == 'file_images' || $field == 'lokasi_gambar') {
                        $this->data["$field"] = base_url() . trim(ltrim(rtrim($rowarray[$field])));
                    } else {
                        $this->data['default']["$field"] = trim(ltrim(rtrim($rowarray[$field])));
                    }
                }
            }
        }
    }

    public function dynamicdetailvalue() {
        $rowarray = $this->modeldata->getby_id_detail_array($this->iddata);
        $resultschema = $this->modeldata->schema_column_detail();
        foreach ($resultschema as $rowschema) {
            $column_key = $rowschema['COLUMN_KEY'];
            $note = $rowschema['COLUMN_COMMENT'];
            $field = $rowschema['COLUMN_NAME'];

            $statusgenerate = 1;
            if (strpos($note, 'combobox') !== false) {
                $statusgenerate = 0;
            }
            if (strpos($note, 'dont') !== false) {
                $statusgenerate = 0;
            }

            if (!empty($this->fielddetailnotgenerate)) {
                if (in_array($field, $this->fielddetailnotgenerate, true)) {
                    $statusgenerate = 0;
                }
            }


            if ($column_key !== 'PRI' && $statusgenerate == 1) {
                if (array_key_exists($field, $rowarray)) {
                    if ($field == 'file_images' || $field == 'lokasi_gambar') {
                        $this->data["$field"] = base_url() . trim(ltrim(rtrim($rowarray[$field])));
                    } else {
                        $this->data['default']["$field"] = trim(ltrim(rtrim($rowarray[$field])));
                    }
                }
            }
        }
    }

    public function edit($id) {
        $this->iddata = $id;
        $this->data['condition'] = __FUNCTION__;
        $this->editdata();
    }

    public function editdata() {
        $this->data['title'] = 'Update - ' . $this->title;
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->load->view($this->view . '/form', $this->data);
    }

    public function access_edit() {
        $this->data['title'] = 'Update - ' . $this->title;
        $this->data['id'] = $this->iddata;
        $this->data['prefix_id'] = $this->prefix_id;
        $this->dynamicvalue();
        $this->data['controller'] = $this->controller;
        $this->data['url_post'] = site_url($this->controller . '/postdata');
        $this->data['url_index'] = site_url($this->controller . '/index');
        $this->load->view($this->view . '/form', $this->data);
    }

    public function postdatabyparam($post) {
        if ($post['actiondata'] !== 'delete') {
            $dynamicpost = $post['dynamicpost'];
            $dengangambar = $post['dengangambar'];
            $checkdata1 = $post['checkdata1'];
            $checkdata2 = $post['checkdata2'];
            $checkdata3 = $post['checkdata3'];
            $checkdata4 = $post['checkdata4'];

            unset($post['dynamicpost']);
            unset($post['dengangambar']);
            unset($post['checkdata1']);
            unset($post['checkdata2']);
            unset($post['checkdata3']);
            unset($post['checkdata4']);


            if ($dynamicpost == 'Y') {
                if ($dengangambar == 'N') {
                    if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && !empty($checkdata4)) {
                        $this->postdata_byparam_with_fourcheck($post, $checkdata1, $checkdata2, $checkdata3, $checkdata4);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_threecheck($post, $checkdata1, $checkdata2, $checkdata3);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_twocheck($post, $checkdata1, $checkdata2);
                    } else {
                        $this->postdata_byparam_with_check($post, $checkdata1);
                    }
                } else {

                    if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && !empty($checkdata4)) {
                        $this->postdata_byparam_with_images_fourchek($post, $checkdata1, $checkdata2, $checkdata3, $checkdata4);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_images_threechek($post, $checkdata1, $checkdata2, $checkdata3);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_images_twochek($post, $checkdata1, $checkdata2);
                    } else {
                        $this->postdata_byparam_with_images($post, $checkdata1);
                    }
                }
            }
        } else {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata() {
        $post = $this->input->post();

        if ($post['actiondata'] !== 'delete') {
            $dynamicpost = $post['dynamicpost'];
            $dengangambar = $post['dengangambar'];
            $checkdata1 = $post['checkdata1'];
            $checkdata2 = $post['checkdata2'];
            $checkdata3 = $post['checkdata3'];
            $checkdata4 = $post['checkdata4'];

            unset($post['dynamicpost']);
            unset($post['dengangambar']);
            unset($post['checkdata1']);
            unset($post['checkdata2']);
            unset($post['checkdata3']);
            unset($post['checkdata4']);


            if ($dynamicpost == 'Y') {
                if ($dengangambar == 'N') {
                    if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && !empty($checkdata4)) {
                        $this->postdata_byparam_with_fourcheck($post, $checkdata1, $checkdata2, $checkdata3, $checkdata4);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_threecheck($post, $checkdata1, $checkdata2, $checkdata3);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_twocheck($post, $checkdata1, $checkdata2);
                    } else {
                        $this->postdata_byparam_with_check($post, $checkdata1);
                    }
                } else {

                    if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && !empty($checkdata4)) {
                        $this->postdata_byparam_with_images_fourchek($post, $checkdata1, $checkdata2, $checkdata3, $checkdata4);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && !empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_images_threechek($post, $checkdata1, $checkdata2, $checkdata3);
                    } else if (!empty($checkdata1) && !empty($checkdata2) && empty($checkdata3) && empty($checkdata4)) {
                        $this->postdata_byparam_with_images_twochek($post, $checkdata1, $checkdata2);
                    } else {
                        $this->postdata_byparam_with_images($post, $checkdata1);
                    }
                }
            }
        } else {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_fourcheck($param, $checkfield1, $checkfield2, $checkfield3, $checkfield4) {
        $post = $param;
        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatafourparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"], $checkfield3, $post["$checkfield3"], $checkfield4, $post["$checkfield4"]);
            if ($checkata == 0) {
                $this->access_postdatabyparam($post);
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            $this->access_postdatabyparam($post);
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_threecheck($param, $checkfield1, $checkfield2, $checkfield3) {
        $post = $param;
        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatathreeparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"], $checkfield3, $post["$checkfield3"]);
            if ($checkata == 0) {
                $this->access_postdatabyparam($post);
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            $this->access_postdatabyparam($post);
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_twocheck($param, $checkfield1, $checkfield2) {
        $post = $param;
        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatatwoparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"]);
            if ($checkata == 0) {
                $this->access_postdatabyparam($post);
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            $this->access_postdatabyparam($post);
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function access_postdata() {
        $post = $this->input->post();
        $id = $post[$this->prefix_id];
        $actiondata = $post['actiondata'];
        unset($post['actiondata']);
        unset($post[$this->prefix_id]);

        switch ($actiondata) {
            case 'create':
                $this->modeldata->insertdata($post);
                $valid = true;
                $message = "Insert data, success";
                break;
            case 'update':
                $this->modeldata->updatedata($id, $post);
                $valid = true;
                $message = "Update data, success";
                break;
            case 'delete':
                $record = array(
                    'status' => "nonaktif",
                );
                $this->modeldata->deletedata($id);
                $valid = true;
                $message = "Delete data, success";
                break;
            default:
                $valid = false;
                $message = "Something error";
                break;
        }

        $jsonmsg = array(
            "msg" => $message,
            "valid" => true,
            "postdata" => $post,
        );

        $this->dj($jsonmsg);
    }

    public function access_postdatabyparam($post) {

        $id = $post[$this->prefix_id];
        $actiondata = $post['actiondata'];
        unset($post['actiondata']);
        unset($post[$this->prefix_id]);


        switch ($actiondata) {
            case 'create':
                $this->modeldata->insertdata($post);
                $valid = true;
                $message = "Insert data, success";
                break;
            case 'update':
                $this->modeldata->updatedata($id, $post);
                $valid = true;
                $message = "Update data, success";
                break;
            case 'delete':
                $record = array(
                    'status' => "nonaktif",
                );
                $this->modeldata->deletedata($id);
                $valid = true;
                $message = "Delete data, success";
                break;
            default:
                $valid = false;
                $message = "Something error";
                break;
        }

        $jsonmsg = array(
            "msg" => $message,
            "valid" => $valid,
            "postdata" => $post,
        );
        $this->dj($jsonmsg);
        return $valid;
    }

    public function access_postdetaildatabyparam($post) {
        $id = $post[$this->prefix_id_detail];
        $actiondata = $post['actiondatadetail'];
        unset($post['actiondatadetail']);
        unset($post['dynamicpost']);
        unset($post['checkdata1']);
        unset($post['checkdata2']);
        unset($post['dengangambar']);
        unset($post[$this->prefix_id_detail]);

        switch ($actiondata) {
            case 'create':
                $this->modeldata->insertdata_detail($post);
                $valid = true;
                $message = "Insert data, success";
                break;
            case 'update':
                $this->modeldata->updatedata_detail($id, $post);
                $valid = true;
                $message = "Update data, success";
                break;
            case 'delete':
                $record = array(
                    'status' => "nonaktif",
                );
                $this->modeldata->deletedata_detail($id);
                $valid = true;
                $message = "Delete data, success";
                break;
            default:
                $valid = false;
                $message = "Something error";
                break;
        }

        $jsonmsg = array(
            "msg" => $message,
            "valid" => true,
            "postdata" => $post,
        );
        $this->dj($jsonmsg);
    }

    public function postdata_byparam_with_check($param, $checkfield) {
        $post = $param;
        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkData($checkfield, $post["$checkfield"]);
            if ($checkata == 0) {
                $return = $this->access_postdatabyparam($post);
                return $return;
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );
                $this->dj($jsonmsg);
                return 0;
            }
        } else if ($post['actiondata'] == 'update') {
            $return = $this->access_postdatabyparam($post);
            return $return;
        } else if ($post['actiondata'] == 'delete') {
            $return = $this->access_postdatabyparam($post);
            return $return;
        }
    }

    public function postdatadetail_byparam_with_check($param, $checkfield1, $checkfield2) {
        $post = $param;
        if ($post['actiondatadetail'] == 'create') {
            $checkata = $this->modeldata->checkDatadetail($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"]);
            if ($checkata == 0) {
                $this->access_postdetaildatabyparam($post);
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondatadetail'] == 'update') {
            $this->access_postdetaildatabyparam($post);
        } else if ($post['actiondatadetail'] == 'delete') {
            $this->access_postdetaildatabyparam($post);
        }
    }

    public function postdata_byparam_with_images($param, $checkfield) {
        $post = $param;
        $path = "public/images/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = False;
        $this->load->library('upload', $config);


        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkData($checkfield, $post["$checkfield"]);
            if ($checkata == 0) {

                if (!empty($_FILES['file']['name'])) {
                    if ($this->upload->do_upload("file")) {
                        $data = array('upload_data' => $this->upload->data());
                        $namagambar = $data['upload_data']['file_name'];
                        $post['lokasi_gambar'] = $path . "/" . $namagambar;
                        $post['nama_gambar'] = $namagambar;

                        $this->access_postdatabyparam($post);
                    } else {
                        $error = $this->upload->display_errors();
                        $jsonmsg = array(
                            "msg" => $error,
                            "valid" => false,
                            "postdata" => '',
                        );

                        $this->dj($jsonmsg);
                    }
                } else {
                    $this->access_postdatabyparam($post);
                }
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $namagambar = $data['upload_data']['file_name'];
                    $post['lokasi_gambar'] = $path . "/" . $namagambar;
                    $post['nama_gambar'] = $namagambar;

                    $this->access_postdatabyparam($post);
                } else {
                    $error = $this->upload->display_errors();
                    $jsonmsg = array(
                        "msg" => $error,
                        "valid" => false,
                        "postdata" => '',
                    );

                    $this->dj($jsonmsg);
                }
            } else {
                $this->access_postdatabyparam($post);
            }
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdatadetail_byparam_with_images($param, $checkfield) {
        $post = $param;
        $path = "public/images/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = False;
        $this->load->library('upload', $config);


        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkData($checkfield, $post["$checkfield"]);
            if ($checkata == 0) {

                if (!empty($_FILES['file']['name'])) {
                    if ($this->upload->do_upload("file")) {
                        $data = array('upload_data' => $this->upload->data());
                        $namagambar = $data['upload_data']['file_name'];
                        $post['lokasi_gambar'] = $path . "/" . $namagambar;
                        $post['nama_gambar'] = $namagambar;

                        $this->access_postdatabyparam($post);
                    } else {
                        $error = $this->upload->display_errors();
                        $jsonmsg = array(
                            "msg" => $error,
                            "valid" => false,
                            "postdata" => '',
                        );

                        $this->dj($jsonmsg);
                    }
                } else {
                    $this->access_postdatabyparam($post);
                }
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $namagambar = $data['upload_data']['file_name'];
                    $post['lokasi_gambar'] = $path . "/" . $namagambar;
                    $post['nama_gambar'] = $namagambar;

                    $this->access_postdatabyparam($post);
                } else {
                    $error = $this->upload->display_errors();
                    $jsonmsg = array(
                        "msg" => $error,
                        "valid" => false,
                        "postdata" => '',
                    );

                    $this->dj($jsonmsg);
                }
            } else {
                $this->access_postdatabyparam($post);
            }
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_images_fourchek($param, $checkfield1, $checkfield2, $checkfield3, $checkfield4) {
        $post = $param;
        $path = "public/images/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatafourparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"], $checkfield3, $post["$checkfield3"], $checkfield4, $post["$checkfield4"]);
            if ($checkata == 0) {

                if (!empty($_FILES['file']['name'])) {
                    if ($this->upload->do_upload("file")) {
                        $data = array('upload_data' => $this->upload->data());
                        $namagambar = $data['upload_data']['file_name'];
                        $post['lokasi_gambar'] = $path . "/" . $namagambar;
                        $post['nama_gambar'] = $namagambar;

                        $this->access_postdatabyparam($post);
                    } else {
                        $error = $this->upload->display_errors();
                        $jsonmsg = array(
                            "msg" => $error,
                            "valid" => false,
                            "postdata" => '',
                        );

                        $this->dj($jsonmsg);
                    }
                } else {
                    $this->access_postdatabyparam($post);
                }
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $namagambar = $data['upload_data']['file_name'];
                    $post['lokasi_gambar'] = $path . "/" . $namagambar;
                    $post['nama_gambar'] = $namagambar;

                    $this->access_postdatabyparam($post);
                } else {
                    $error = $this->upload->display_errors();
                    $jsonmsg = array(
                        "msg" => $error,
                        "valid" => false,
                        "postdata" => '',
                    );

                    $this->dj($jsonmsg);
                }
            } else {
                $this->access_postdatabyparam($post);
            }
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_images_threechek($param, $checkfield1, $checkfield2, $checkfield3) {
        $post = $param;
        $path = "public/images/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatathreeparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"], $checkfield3, $post["$checkfield3"]);
            if ($checkata == 0) {

                if (!empty($_FILES['file']['name'])) {
                    if ($this->upload->do_upload("file")) {
                        $data = array('upload_data' => $this->upload->data());
                        $namagambar = $data['upload_data']['file_name'];
                        $post['lokasi_gambar'] = $path . "/" . $namagambar;
                        $post['nama_gambar'] = $namagambar;

                        $this->access_postdatabyparam($post);
                    } else {
                        $error = $this->upload->display_errors();
                        $jsonmsg = array(
                            "msg" => $error,
                            "valid" => false,
                            "postdata" => '',
                        );

                        $this->dj($jsonmsg);
                    }
                } else {
                    $this->access_postdatabyparam($post);
                }
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $namagambar = $data['upload_data']['file_name'];
                    $post['lokasi_gambar'] = $path . "/" . $namagambar;
                    $post['nama_gambar'] = $namagambar;

                    $this->access_postdatabyparam($post);
                } else {
                    $error = $this->upload->display_errors();
                    $jsonmsg = array(
                        "msg" => $error,
                        "valid" => false,
                        "postdata" => '',
                    );

                    $this->dj($jsonmsg);
                }
            } else {
                $this->access_postdatabyparam($post);
            }
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function postdata_byparam_with_images_twochek($param, $checkfield1, $checkfield2) {
        $post = $param;
        $path = "public/images/" . strtolower($this->controller);
        $config['upload_path'] = "./" . $path;
        $config['allowed_types'] = 'jpg|png|pdf|xls|xlsx|doc|docx|csv';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);


        if ($post['actiondata'] == 'create') {
            $checkata = $this->modeldata->checkDatatwoparam($checkfield1, $post["$checkfield1"], $checkfield2, $post["$checkfield2"]);
            if ($checkata == 0) {

                if (!empty($_FILES['file']['name'])) {
                    if ($this->upload->do_upload("file")) {
                        $data = array('upload_data' => $this->upload->data());
                        $namagambar = $data['upload_data']['file_name'];
                        $post['lokasi_gambar'] = $path . "/" . $namagambar;
                        $post['nama_gambar'] = $namagambar;

                        $this->access_postdatabyparam($post);
                    } else {
                        $error = $this->upload->display_errors();
                        $jsonmsg = array(
                            "msg" => $error,
                            "valid" => false,
                            "postdata" => '',
                        );

                        $this->dj($jsonmsg);
                    }
                } else {
                    $this->access_postdatabyparam($post);
                }
            } else {
                $jsonmsg = array(
                    "msg" => 'Data already exist',
                    "valid" => false,
                    "postdata" => '',
                );

                $this->dj($jsonmsg);
            }
        } else if ($post['actiondata'] == 'update') {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload("file")) {
                    $data = array('upload_data' => $this->upload->data());
                    $namagambar = $data['upload_data']['file_name'];
                    $post['lokasi_gambar'] = $path . "/" . $namagambar;
                    $post['nama_gambar'] = $namagambar;

                    $this->access_postdatabyparam($post);
                } else {
                    $error = $this->upload->display_errors();
                    $jsonmsg = array(
                        "msg" => $error,
                        "valid" => false,
                        "postdata" => '',
                    );

                    $this->dj($jsonmsg);
                }
            } else {
                $this->access_postdatabyparam($post);
            }
        } else if ($post['actiondata'] == 'delete') {
            $this->access_postdatabyparam($post);
        }
    }

    public function Open($filename) {
        $this->m_pxdoc = px_new();
        if (!$this->m_pxdoc) {
            die("cParadox Error: px_new() failed.");
        }

        $this->m_fp = fopen($filename, "r");

        if (!$this->m_fp) {
            px_delete($this->m_pxdoc);
            die("cParadox Error: fopen failed.Filename:$filename");
        }

        if (!px_open_fp($this->m_pxdoc, $this->m_fp)) {
            px_delete($this->m_pxdoc);
            fclose($this->m_fp);
            die("cParadox Erro: px_open_fp failed.");
        }

        return true;
    }

    public function Close() {
        if ($this->m_pxdoc) {
            px_close($this->m_pxdoc);
            px_delete($this->m_pxdoc);
        }

        if ($this->m_fp) {
            fclose($this->m_fp);
        }
    }

    public function GetNumRecords() {
        return px_numrecords($this->m_pxdoc);
    }

    public function GetRecord($rec) {
        $this->m_rs = px_get_record($this->m_pxdoc, $rec, PX_KEYTOUPPER);
        return $this->m_rs;
    }

    public function get_schema() {
        $schema = px_get_schema($this->m_pxdoc);
        $arraykey = array();
        foreach ($schema as $key => $item) {
            $arraykey[] = $key;
        }
        $implode = implode(", ", $arraykey);
        return "'" . $implode . "'";
    }

    public function GetField($field, $type = 0, $format = 0) {
        if (!$this->m_rs) {
            return false;
        }

        $value = isset($this->m_rs[$field]) ? $this->m_rs[$field] : "";

        if ($this->m_use_field_slashes) {
            $value = addslashes($value);
        }

        if ($this->m_use_field_trim) {
            $value = trim($value);
        }


        return $value;
    }

    public function get() {
        // Start with an empty array
        $ret = array();

        // Loop through all records in the database
        for ($x = 0; ($x < $this->num_records() && count($ret) < $this->_limit); $x++) {
            $row = px_get_record($this->m_pxdoc, $x);
            if ($this->validate_where($row)) {
                foreach ($row as $key => $val) {
                    // Find all fields not in the select array
                    if (!in_array($key, $this->_select) && !empty($this->_select))
                        unset($row[$key]);
                }

                $ret[] = $row;
            }
        }

        return $ret;
    }

    public function validate_where($row) {
        $pass = TRUE;
        // If there are no tests, all rows will pass
        if (!empty($this->_where)) {
            foreach ($this->_where as $test) {
                $field = escapeshellarg($row[$test['field']]);
                $operator = $test['operator'];
                $value = $test['value'];
                $txt = "return ( $field  $operator $value );";
                // Check for failure
                if (!eval($txt)) {
                    $pass = FALSE;
                    // No need to try other tests
                    break;
                }
            }
        }
        return $pass;
    }

    public function select() {
        $args = func_get_args();

        // Was an array of fields supplied?
        if (is_array($args[0])) {
            foreach ($args[0] as $field) {
                // Make sure it is a string and not already in the list
                if (is_string($field) && !in_array($field, $this->_select))
                    $this->_select[] = $field;
            }
        }
        // Or a comma seperated list?
        elseif (is_string($args[0])) {
            $fields = explode(', ', $args[0]);

            foreach ($fields as $field) {
                $field = trim($field);

                // Make sure field isn't already in the list
                if (!in_array($field, $this->_select))
                    $this->_select[] = $field;
            }
        }

        // Return $this so we can do some cool method chaining
        return $this;
    }

    public function where() {
        $args = func_get_args();

        if (is_array($args[0])) {
            foreach ($args[0] as $test) {
                $this->_where[] = array(
                    'field' => $test[0],
                    'operator' => $test[1],
                    'value' => escapeshellarg($test[2])
                );
            }
        } elseif (is_string($args[0])) {
            $this->_where[] = array(
                'field' => $args[0],
                'operator' => $args[1],
                'value' => escapeshellarg($args[2])
            );
        }

        // Return $this so we can do some cool method chaining
        return $this;
    }

    public function limit() {
        if (func_num_args() == 1)
            $this->_limit = func_get_arg(0);
        else {
            $this->_offset = func_get_arg(0);
            $this->_limit = func_get_arg(1);
        }

        // Return $this so we can do some cool method chaining
        return $this;
    }

    public function get_file_pointer() {
        return $this->m_fp;
    }

    public function get_paradox_object() {
        return $this->m_pxdoc;
    }

    public function num_records() {
        return px_numrecords($this->m_pxdoc);
    }

    public function num_fields() {
        return px_numfields($this->m_pxdoc);
    }

    public function debug() {
        echo 'SELECT ' . print_r($this->_select, TRUE) . "\n";
        echo 'WHERE ' . print_r($this->_where, TRUE) . "\n";
    }
    
    public function cekdatalog() {
         $this->load->model('Formulir_model', 'frm');
                $getruang = $this->input->post('getruang'); 
                $h_th = $this->input->post('h_th'); 
                $h_bln = $this->input->post('h_bln');  
                    
                 $tahun = date('Y'); 
                 $dd = date('d'); 
                 $bln = date('m');
                 $lastno1=1; 

                     $recordlog = array(
                                            "program" => $getruang,
                                            "periode" => $tahun, 
                                            "bln" => $bln,    
                                            // "lastno" =>$lastno1         
                                        );
                $check = $this->frm->checkdataurut($getruang,$h_th,$h_bln);
                
                if ( $check > 0) {
                    $row = $this->frm->getby_urut($getruang,$h_th,$h_bln)->row();  
                    $nourutlog= $row->lastno;
                    $nodaftar=$nourutlog+1;  
                } else {
                    $nodaftar=$lastno1;
                }
                /* membuat array, yang akan dikonversi menjadi json untuk kebutuhan ajax */
                $jsonmsg = array(  
                    "nourut" => $nodaftar
                );

            /* konversi array json, yang akan terkirim ke form.php */
            echo json_encode($jsonmsg);
        }
}

<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Tools extends MY_Controller {

    function __construct() {
        $this->noaut = 1;
        $this->noview = 1;
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
    }

    public function cekpersen() {
        $percentage = 7.5 / 100;
        echo $percentage;
    }

    public function index() {
        echo 'General tools';
    }

    public function TestAPI() {
        $rows = array(
            'username' => dukcapil_username,
            'password' => dukcapil_password,
            'ip' => dukcapil_ip_register,
            'nik' => "3603181612890002",
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
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

        // print_r($response);
        exit;
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
        echo '<pre>';
        print_r($this->check_ktp_didukcapil($no_ktp));
        echo '<pre/>';
    }

}

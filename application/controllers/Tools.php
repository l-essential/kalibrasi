<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Tools extends MY_Controller {

    function __construct() {
        $this->noaut = 1;
        $this->noview = 1;
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
    }

    public function index() {
        echo 'General tools';
    }

    public function TestAPI() {
        $rows = array(
            'username' => 'devel_ssb',
            'password' => 'lingsirW3ngi@$!',
            'ip' => '172.104.58.138',
            'nik' => '3603181612890002',
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://103.211.51.179/dukcapilapi/ceknik",
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

}

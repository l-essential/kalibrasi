<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Pesertaangsuran extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->setmodel($this->pathclass . "/Pengajuanbank_model#pengajuanbank");
        $this->setmodel($this->pathclass . "/Peserta_model#peserta");
        $this->title = "Peserta angsuran";
    }

    public function index() {
        $this->buildcombobox('id_t_pengajuanbankheader', 'labeldata', $this->pengajuanbank->getlabelpengajuanbank());
        $this->data['url_griddata'] = site_url($this->controller . '/griddata');
        $this->data['url_generatetenorpeserta'] = site_url($this->controller . '/generatetenorpeserta');
        parent::index();
    }

    public function griddata($id_pengajuanbank_header) {
        $check = $this->modeldata->getGrid($id_pengajuanbank_header);
        if (!is_null($check)) {
            $result = $this->modeldata->getGrid($id_pengajuanbank_header)->result();
        } else {
            $result = '';
        }

        $this->dj(array(
            "data" => $result
        ));
    }

    public function generatetenorpeserta() {
        $valid = false;
        $message = "tidak ada data peserta debitur untuk digenerate";
        $id_t_pengajuanbankheader = $_REQUEST['id_t_pengajuanbankheader'];
        $result = $this->peserta->getdatabelumgenerate($id_t_pengajuanbankheader);
        if ($result) {
            ini_set("memory_limit", "-1");
            ini_set('max_execution_time', 0);
            foreach ($result as $row) {
                $this->generatetenor($row);
            }
            $valid = true;
            $message = "Proses generate schedule tenor angsuran debitur selesai";
        } else {
            $valid = false;
            $message = "Tidak ada data peserta pada nomor surat";
        }


        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
        ));
    }
    

    public function generatetenor($rowdata) {
        if ($rowdata) {
            ini_set("memory_limit", "-1");
            ini_set('max_execution_time', 0);
            $startdate = $rowdata['tanggal_akad'];
            $tenor = $rowdata['tenor'];
            $enddate = date('Y-m-d', strtotime("+$tenor months", strtotime($startdate)));

            $processdate = $startdate;
            $tenorke = 0;
            while ($processdate <= $enddate) {
                $tenorke++;
                $processdate = date('Y-m-d', strtotime("+1 months", strtotime($processdate)));
                $duedate = date('Y-m-d', strtotime("-1 months", strtotime($processdate)));
                $tmp = explode("-", $duedate);
                $tahun = $tmp[0];
                $bulan = $tmp[1];
                $tanggal = $tmp[2];

                $record = array(
                    "id_peserta" => $rowdata['id_peserta'],
                    "duedate" => $duedate,
                    "tahun" => $tahun,
                    "bulan" => $bulan,
                    "tenorke" => $tenorke,
                );

                $checkcicilan = $this->modeldata->getbyarray(array(
                    "id_peserta" => $rowdata['id_peserta'],
                    "duedate" => $duedate,
                ));

                if (empty($checkcicilan)) {
                    $this->modeldata->insertdata($record);
                }

                if ($tenorke == $tenor) {
                    $this->peserta->updatedata($rowdata['id_peserta'], array("statusschedule" => "generate"));
                    break;
                }
            }
            $valid = true;
            $message = "Tenor cicilan sudah digenerate untuk $tenor bulan yang akan berakhir di periode $processdate";
        }
        return true;
    }

}

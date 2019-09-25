<?php

//create by : ahmad riadi, ahmadriadi.ti@gmail.com, dilarang mengcopy tanpa ijin,akan dikenakan denda bagi yang melanggar

class Msukubungabi extends MY_Controller {

    protected $first_sukubunga;
    protected $first_birate;

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = "Suku bunga BI Rate";
        $this->first_sukubunga = 0.0775; //7.5%
        $this->first_birate = 0.05; //5%
        $this->fieldnotgenerate = array('tanggal_terbit','bi_rate');
    }

    public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->data['default']['tanggal_terbit'] = $this->totimeindo($row['tanggal_terbit']);
        $this->data['default']['bi_rate'] = $row['bi_rate'] * 100;
        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $bi_rate = $param['bi_rate'] / 100;
            $tanggal_terbit = $this->totime($param['tanggal_terbit']);
            $end_month = date("Y-m-t", strtotime($tanggal_terbit));
            $tmp_endmonth = explode("-", $end_month);
            $tahun = $tmp_endmonth[0];
            $bulan = $tmp_endmonth[1];
            $total_hari = $tmp_endmonth[2];
            $hari_efektif = $param['hari_efektif'];
            $hari_off = $total_hari - $hari_efektif;
            $checkdata = $this->modeldata->getAll();

            $first_birate = 0;
            $sukubunga_birate = 0;
            if ($checkdata) {
                $resultlastbi = $this->modeldata->last_birate($tanggal_terbit);               
                $first_birate = $this->first_birate;
                if($resultlastbi){
                    $sukubunga_birate = $resultlastbi->bi_rate;
                }else{
                    $sukubunga_birate = $this->first_sukubunga;
                }
                
            } else {
                $first_birate = $this->first_birate;
                $sukubunga_birate = $this->first_sukubunga;
            }
            //echo "((".$hari_efektif.'x'.$sukubunga_birate.") + ($hari_off x $bi_rate))/$total_hari<br/>";
            //exit;
            $n1 = $sukubunga_birate * $hari_efektif;
            $n2 = $hari_off * $bi_rate;
             //   echo $hari_off.' x '.$bi_rate.'<br/>';
             //   echo $n1.' + '.$n2;
            //exit;
            $s_kpr = ($n1 + $n2) / $total_hari;
            $sukubunga_kpr = number_format($s_kpr, 4, '.', '');
            $sukubunga_current_birate = $sukubunga_kpr + $first_birate;
           

            $checkexistdata = $this->modeldata->getbyarray(array(
                "tahun" => $tahun,
                "bulan" => $bulan,
            ));

            if (empty($checkexistdata)) {

             
                $record = array(
                    "tanggal_terbit" => $tanggal_terbit,
                    "tahun" => $tahun,
                    "bulan" => $bulan,
                    "bi_rate" => $bi_rate,
                    "hari_efektif" => $hari_efektif,
                    "hari_off" => $hari_off,
                    "total_hari" => $total_hari,
                    "sukubunga_kpr" => $sukubunga_kpr,
                    "sukubunga_kprbi" => $sukubunga_current_birate,
                );
                $this->modeldata->insertdata($record);
                $valid = true;
                $message = "Data berhasil dibuat";
            } else {
                
                $id_m_sukubungabirate = $checkexistdata->id_m_sukubungabirate;
                $record = array(
                    "tanggal_terbit" => $tanggal_terbit,
                    "bi_rate" => $bi_rate,
                    "hari_efektif" => $hari_efektif,
                    "hari_off" => $hari_off,
                    "total_hari" => $total_hari,
                    "sukubunga_kpr" => $sukubunga_kpr,
                    "sukubunga_kprbi" => $sukubunga_current_birate,
                );
                $this->modeldata->updatedata($id_m_sukubungabirate, $record);
                $valid = true;
                $message = "Data berhasil diupdate";
            }
            $this->dj(array(
                "valid" => $valid,
                "msg" => $message,
            ));
            exit;
        } else {
            parent::postdata();
        }
    }

}

<?php
class Konsep_produk_baru extends MY_Controller {

    // public $noview = 0;

     function __construct() {
          $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title ="Konsep Produk Baru";
      
    }

    public function add() {
        $this->data['default']["uji_efikasi"] = 'Ya';
        $this->data['default']['readonly_no_konsep_produk'] = 'readonly';

        $this->data["default"]['primer_jenis_kemasan']     = '-';
        $this->data["default"]['primer_bahan_kemasan']     = '-';
        $this->data["default"]['primer_warna_kemasan']     = '-';
        $this->data["default"]['primer_uji_kebocoran']     = '-';
        $this->data["default"]['primer_tinggi_kemasan']    = '-';
        $this->data["default"]['primer_diameter_dalam']    = '-';
        $this->data["default"]['primer_diameter_luar']     = '-';
        $this->data["default"]['primer_kapasitas_kemas']   = '-';
        $this->data["default"]['primer_valume_kemas']      = '-';
        $this->data["default"]['primer_uji_kebocoran']     = '-';
        $this->data["default"]['primer_uji_transportasi']  = '-';
 
        $this->data["default"]['sekunder_jenis_kemasan']   = '-';
        $this->data["default"]['sekunder_bahan_kemasan']   = '-';
        $this->data["default"]['sekunder_warna_kemasan']   = '-';
        $this->data["default"]['sekunder_panjang_kemasan'] = '-';
        $this->data["default"]['sekunder_lebar_kemasan']   = '-';
        $this->data["default"]['sekunder_tinggi_kemasan']  = '-';
        $this->data["default"]['sekunder_tebal_kemasan']   = '-';
 
        $this->data["default"]['tersier_jenis_kemasan']    = '-';
        $this->data["default"]['tersier_bahan_kemasan']    = '-';
        $this->data["default"]['tersier_warna_kemasan']    = '-';
        $this->data["default"]['tersier_panjang_kemasan']  = '-';
        $this->data["default"]['tersier_lebar_kemasan']    = '-';
        $this->data["default"]['tersier_tinggi_kemasan']   = '-';
        $this->data["default"]['tersier_tebal_kemasan']    = '-';
 
        $this->data["default"]['bb_nama_bahan_baku']       = '-';
        $this->data["default"]['bb_inci_name']             = '-';
        $this->data["default"]['bb_manufacture']           = '-';
        $this->data["default"]['bb_harga_bahan_baku']      = '-';
        $this->data["default"]['bb_moq']                   = '-';
        $this->data["default"]['bb_pengunaan']             = '-';
        $this->data["default"]['bb_lead_time']             = '-';
        $this->data["default"]['bb_shelf_life']            = '-';
        $this->data["default"]['bb_penyimpanan']           = '-';
     
        $this->data["default"]['bk_nama_bahan_kemas']      = '-';
        $this->data["default"]['bk_komponen_bahan']        = '-';
        $this->data["default"]['bk_manufacture']           = '-';
        $this->data["default"]['bk_harga_bahan_kemas']     = '-';
        $this->data["default"]['bk_moq']                   = '-';
        $this->data["default"]['bk_lead_time']             = '-';
        $this->data["default"]['bk_penyimpanan']           = '-';
     
        $this->data["default"]['target_market']            = '-';
        $this->data["default"]['estimasi_penjualan']       = '-';
        $this->data["default"]['pendaftaran_notifikasi']   = '-';
        $this->data["default"]['rencana_launching_produk'] = '-';

        parent::add();
    }

    public function edit($id) {
        $row1 = $this->modeldata->getby_id_array_1($id);
        $rowtwo = $this->modeldata->getby_id_two($id);
        $this->data["default"]['primer_jenis_kemasan']     = $row1 ['primer_jenis_kemasan'];
        $this->data["default"]['primer_bahan_kemasan']     = $row1 ['primer_bahan_kemasan'];
        $this->data["default"]['primer_warna_kemasan']     = $row1 ['primer_warna_kemasan'];
        $this->data["default"]['primer_uji_kebocoran']     = $row1 ['primer_uji_kebocoran'];
        $this->data["default"]['primer_tinggi_kemasan']    = $row1 ['primer_tinggi_kemasan'];
        $this->data["default"]['primer_diameter_dalam']    = $row1 ['primer_diameter_dalam'];
        $this->data["default"]['primer_diameter_luar']     = $row1 ['primer_diameter_luar'];
        $this->data["default"]['primer_kapasitas_kemas']   = $row1 ['primer_kapasitas_kemas'];
        $this->data["default"]['primer_valume_kemas']      = $row1 ['primer_valume_kemas'];
        $this->data["default"]['primer_uji_kebocoran']     = $row1 ['primer_uji_kebocoran'];
        $this->data["default"]['primer_uji_transportasi']  = $row1 ['primer_uji_transportasi'];

        $this->data["default"]['sekunder_jenis_kemasan']   = $row1 ['sekunder_jenis_kemasan'];
        $this->data["default"]['sekunder_bahan_kemasan']   = $row1 ['sekunder_bahan_kemasan'];
        $this->data["default"]['sekunder_warna_kemasan']   = $row1 ['sekunder_warna_kemasan'];
        $this->data["default"]['sekunder_panjang_kemasan'] = $row1 ['sekunder_panjang_kemasan'];
        $this->data["default"]['sekunder_lebar_kemasan']   = $row1 ['sekunder_lebar_kemasan'];
        $this->data["default"]['sekunder_tinggi_kemasan']  = $row1 ['sekunder_tinggi_kemasan'];
        $this->data["default"]['sekunder_tebal_kemasan']   = $row1 ['sekunder_tebal_kemasan'];

        $this->data["default"]['tersier_jenis_kemasan']    = $row1 ['tersier_jenis_kemasan'];
        $this->data["default"]['tersier_bahan_kemasan']    = $row1 ['tersier_bahan_kemasan'];
        $this->data["default"]['tersier_warna_kemasan']    = $row1 ['tersier_warna_kemasan'];
        $this->data["default"]['tersier_panjang_kemasan']  = $row1 ['tersier_panjang_kemasan'];
        $this->data["default"]['tersier_lebar_kemasan']    = $row1 ['tersier_lebar_kemasan'];
        $this->data["default"]['tersier_tinggi_kemasan']   = $row1 ['tersier_tinggi_kemasan'];
        $this->data["default"]['tersier_tebal_kemasan']    = $row1 ['tersier_tebal_kemasan'];

        $this->data["default"]['bb_nama_bahan_baku']       = $rowtwo['bb_nama_bahan_baku'];
        $this->data["default"]['bb_inci_name']             = $rowtwo['bb_inci_name'];
        $this->data["default"]['bb_manufacture']           = $rowtwo['bb_manufacture'];
        $this->data["default"]['bb_harga_bahan_baku']      = $rowtwo['bb_harga_bahan_baku'];
        $this->data["default"]['bb_moq']                   = $rowtwo['bb_moq'];
        $this->data["default"]['bb_pengunaan']             = $rowtwo['bb_pengunaan'];
        $this->data["default"]['bb_ketersedian_rm']        = $rowtwo['bb_ketersedian_rm'];
        $this->data["default"]['bb_lead_time']             = $rowtwo['bb_lead_time'];
        $this->data["default"]['bb_shelf_life']            = $rowtwo['bb_shelf_life'];
        $this->data["default"]['bb_penyimpanan']           = $rowtwo['bb_penyimpanan'];
    
        $this->data["default"]['bk_nama_bahan_kemas']      = $rowtwo['bk_nama_bahan_kemas'];
        $this->data["default"]['bk_komponen_bahan']        = $rowtwo['bk_komponen_bahan'];
        $this->data["default"]['bk_manufacture']           = $rowtwo['bk_manufacture'];
        $this->data["default"]['bk_harga_bahan_kemas']     = $rowtwo['bk_harga_bahan_kemas'];
        $this->data["default"]['bk_moq']                   = $rowtwo['bk_moq'];
        $this->data["default"]['bk_ketersediaan_pm']       = $rowtwo['bk_ketersediaan_pm'];
        $this->data["default"]['bk_lead_time']             = $rowtwo['bk_lead_time'];
        $this->data["default"]['bk_penyimpanan']           = $rowtwo['bk_penyimpanan'];
    
        $this->data["default"]['target_market']            = $rowtwo['target_market'];
        $this->data["default"]['estimasi_penjualan']       = $rowtwo['estimasi_penjualan'];
        $this->data["default"]['pendaftaran_notifikasi']   = $rowtwo['pendaftaran_notifikasi'];
        $this->data["default"]['rencana_launching_produk'] = $rowtwo['rencana_launching_produk'];

        parent::edit($id);
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];
        $param['tanggal_pembuatan'] = date("Y-m-d", strtotime($param['tanggal_pembuatan']));

        if ($param['actiondata'] == 'create') {
            $counter = $this->modeldata->getmax($param['tanggal_pembuatan']);
            $temp = "000" . $counter;
            $nomor = substr($temp, -2);
            $no_konsep_produk = 'RNDK/'. date('Y', strtotime($param['tanggal_pembuatan'])). "/".$nomor;
        }
        if (!isset($param['uji_efikasi'])) {
            $param['uji_efikasi'] = "Ya";
        } else if (!isset($param['uji_efikasi'])) {
            $param['uji_efikasi'] = "Tidak";
        }

        if (!isset($param['primer_jenis_kemasan'])) {
            $param['primer_jenis_kemasan'] = "Botol";
        } else if (!isset($param['primer_jenis_kemasan'])) {
            $param['uji_efikasi'] = "Pot";
        } else if (!isset($param['primer_jenis_kemasan'])) {
            $param['primer_jenis_kemasan'] = "Tube";
        } else if (!isset($param['primer_jenis_kemasan'])) {
            $param['primer_jenis_kemasan'] = "Sachet";
        } else if (!isset($param['primer_jenis_kemasan'])) {
            $param['primer_jenis_kemasan'] = "Lain lain";
        }

        if (!isset($param['primer_warna_kemasan'])) {
            $param['primer_warna_kemasan'] = "Transparant";
        } else if (!isset($param['primer_warna_kemasan'])) {
            $param['uji_efikasi'] = "White Opaque";
        } else if (!isset($param['primer_warna_kemasan'])) {
            $param['primer_warna_kemasan'] = "Doff";
        } else if (!isset($param['primer_warna_kemasan'])) {
            $param['primer_warna_kemasan'] = "Amber";
        } else if (!isset($param['primer_warna_kemasan'])) {
            $param['primer_warna_kemasan'] = "Lain lain";
        }

        switch ($actiondata) {
            case "create":
                  $checkdata = $this->modeldata->get_no_konsep($param['no_konsep_produk']);
                          
                if (empty($checkdata)) {
                    $record = array(
                        "no_konsep_produk"      => $no_konsep_produk,
                        "tanggal_pembuatan"     => $param ['tanggal_pembuatan'],
                        "nama_merk"             => $param ['nama_merk'],
                        "nama_produk"           => $param ['nama_produk'],
                        "deskripsi_produk"      => $param ['deskripsi_produk'],
                        "kbahan_aktif"          => $param ['kbahan_aktif'],
                        "kegunaan"              => $param ['kegunaan'],
                        "cara_pemakaian"        => $param ['cara_pemakaian'],
                        "warna"                 => $param ['warna'],
                        "bentuk"                => $param ['bentuk'],
                        "aroma"                 => $param ['aroma'],
                        "pH"                    => $param ['pH'],
                        "viskositas"            => $param ['viskositas'],
                        "berat_jenis"           => $param ['berat_jenis'],
                        "produk_acuan"          => $param ['produk_acuan'],
                        "uji_efikasi"           => $param ['uji_efikasi'],
                    );

                    $konsep_id = $this->modeldata->insertdata($record);

                    $record_1 = array(
                        "konsep_produk_baru_id"     => $konsep_id,
                        "primer_jenis_kemasan"      => $param ['primer_jenis_kemasan'],
                        "primer_bahan_kemasan"      => $param ['primer_bahan_kemasan'],
                        "primer_warna_kemasan"      => $param ['primer_warna_kemasan'],
                        "primer_tinggi_kemasan"     => $param ['primer_tinggi_kemasan'],
                        "primer_diameter_dalam"     => $param ['primer_diameter_dalam'],
                        "primer_diameter_luar"      => $param ['primer_diameter_luar'],
                        "primer_kapasitas_kemas"    => $param ['primer_kapasitas_kemas'],
                        "primer_valume_kemas"       => $param ['primer_valume_kemas'],
                        "primer_uji_kebocoran"      => $param ['primer_uji_kebocoran'],
                        "primer_uji_transportasi"   => $param ['primer_uji_transportasi'],
                        "sekunder_jenis_kemasan"    => $param ['sekunder_jenis_kemasan'],
                        "sekunder_bahan_kemasan"    => $param ['sekunder_bahan_kemasan'],
                        "sekunder_warna_kemasan"    => $param ['sekunder_warna_kemasan'],
                        "sekunder_panjang_kemasan"  => $param ['sekunder_panjang_kemasan'],
                        "sekunder_lebar_kemasan"    => $param ['sekunder_lebar_kemasan'],
                        "sekunder_tinggi_kemasan"   => $param ['sekunder_tinggi_kemasan'],
                        "sekunder_tebal_kemasan"    => $param ['sekunder_tebal_kemasan'],
                        "tersier_jenis_kemasan"     => $param ['tersier_jenis_kemasan'],
                        "tersier_bahan_kemasan"     => $param ['tersier_bahan_kemasan'],
                        "tersier_warna_kemasan"     => $param ['tersier_warna_kemasan'],
                        "tersier_panjang_kemasan"   => $param ['tersier_panjang_kemasan'],
                        "tersier_lebar_kemasan"     => $param ['tersier_lebar_kemasan'],
                        "tersier_tinggi_kemasan"    => $param ['tersier_tinggi_kemasan'],
                        "tersier_tebal_kemasan"   => $param ['tersier_tebal_kemasan'],
                    );

                    $this->modeldata->insertdata_1($record_1);

                    $record_2 = array(
                        "konsep_produk_baru_id"    => $konsep_id,
                        "bb_nama_bahan_baku"       => $param ['bb_nama_bahan_baku'],
                        "bb_inci_name"             => $param ['bb_inci_name'],
                        "bb_manufacture"           => $param ['bb_manufacture'],
                        "bb_harga_bahan_baku"      => $param ['bb_harga_bahan_baku'],
                        "bb_moq"                   => $param ['bb_moq'],
                        "bb_pengunaan"             => $param ['bb_pengunaan'],
                        "bb_ketersedian_rm"        => $param ['bb_ketersedian_rm'],
                        "bb_lead_time"             => $param ['bb_lead_time'],
                        "bb_shelf_life"            => $param ['bb_shelf_life'],
                        "bb_penyimpanan"           => $param ['bb_penyimpanan'],
                        "bk_nama_bahan_kemas"      => $param ['bk_nama_bahan_kemas'],
                        "bk_komponen_bahan"        => $param ['bk_komponen_bahan'],
                        "bk_manufacture"           => $param ['bk_manufacture'],
                        "bk_harga_bahan_kemas"     => $param ['bk_harga_bahan_kemas'],
                        "bk_moq"                   => $param ['bk_moq'],
                        "bk_ketersediaan_pm"       => $param ['bk_ketersediaan_pm'],
                        "bk_lead_time"             => $param ['bk_lead_time'],
                        "bk_penyimpanan"           => $param ['bk_penyimpanan'],
                        "target_market"            => $param ['target_market'],
                        "estimasi_penjualan"       => $param ['estimasi_penjualan'],
                        "pendaftaran_notifikasi"   => $param ['pendaftaran_notifikasi'],
                        "rencana_launching_produk" => $param ['rencana_launching_produk'],
                    );

                    $this->modeldata->insertdata_2($record_2);

                    $valid = true;
                    $msg = "Insert data,success";
                } else {
                    // $id_formulir = 0;
                    $valid = false;
                    $msg = "Data already exist";
                }
                break;
                // --- update data formulir
            case "update":
                $konsep_id = $param['konsep_produk_baru_id'];

                $record = array(
                    "tanggal_pembuatan"     => $param ['tanggal_pembuatan'],
                    "nama_merk"             => $param ['nama_merk'],
                    "nama_produk"           => $param ['nama_produk'],
                    "deskripsi_produk"      => $param ['deskripsi_produk'],
                    "kbahan_aktif"          => $param ['kbahan_aktif'],
                    "kegunaan"              => $param ['kegunaan'],
                    "cara_pemakaian"        => $param ['cara_pemakaian'],
                    "warna"                 => $param ['warna'],
                    "bentuk"                => $param ['bentuk'],
                    "aroma"                 => $param ['aroma'],
                    "pH"                    => $param ['pH'],
                    "viskositas"            => $param ['viskositas'],
                    "berat_jenis"           => $param ['berat_jenis'],
                    "produk_acuan"          => $param ['produk_acuan'],
                    "uji_efikasi"           => $param ['uji_efikasi'],
                );
                // var_dump($record);
                // die();
                $this->modeldata->updatedata($konsep_id,$record);

                $record_1 = array(
                    "primer_jenis_kemasan"      => $param ['primer_jenis_kemasan'],
                    "primer_bahan_kemasan"      => $param ['primer_bahan_kemasan'],
                    "primer_warna_kemasan"      => $param ['primer_warna_kemasan'],
                    "primer_tinggi_kemasan"     => $param ['primer_tinggi_kemasan'],
                    "primer_diameter_dalam"     => $param ['primer_diameter_dalam'],
                    "primer_diameter_luar"      => $param ['primer_diameter_luar'],
                    "primer_kapasitas_kemas"    => $param ['primer_kapasitas_kemas'],
                    "primer_valume_kemas"       => $param ['primer_valume_kemas'],
                    "primer_uji_kebocoran"      => $param ['primer_uji_kebocoran'],
                    "primer_uji_transportasi"   => $param ['primer_uji_transportasi'],
                    "sekunder_jenis_kemasan"    => $param ['sekunder_jenis_kemasan'],
                    "sekunder_bahan_kemasan"    => $param ['sekunder_bahan_kemasan'],
                    "sekunder_warna_kemasan"    => $param ['sekunder_warna_kemasan'],
                    "sekunder_panjang_kemasan"  => $param ['sekunder_panjang_kemasan'],
                    "sekunder_lebar_kemasan"    => $param ['sekunder_lebar_kemasan'],
                    "sekunder_tinggi_kemasan"   => $param ['sekunder_tinggi_kemasan'],
                    "sekunder_tebal_kemasan"    => $param ['sekunder_tebal_kemasan'],
                    "tersier_jenis_kemasan"     => $param ['tersier_jenis_kemasan'],
                    "tersier_bahan_kemasan"     => $param ['tersier_bahan_kemasan'],
                    "tersier_warna_kemasan"     => $param ['tersier_warna_kemasan'],
                    "tersier_panjang_kemasan"   => $param ['tersier_panjang_kemasan'],
                    "tersier_lebar_kemasan"     => $param ['tersier_lebar_kemasan'],
                    "tersier_tinggi_kemasan"    => $param ['tersier_tinggi_kemasan'],
                    "tersier_tebal_kemasan"     => $param ['tersier_tebal_kemasan'],
                );

                $this->modeldata->updatedata_1($konsep_id,$record_1);

                $record_2 = array(
                    "bb_nama_bahan_baku"       => $param ['bb_nama_bahan_baku'],
                    "bb_inci_name"             => $param ['bb_inci_name'],
                    "bb_manufacture"           => $param ['bb_manufacture'],
                    "bb_harga_bahan_baku"      => $param ['bb_harga_bahan_baku'],
                    "bb_moq"                   => $param ['bb_moq'],
                    "bb_pengunaan"             => $param ['bb_pengunaan'],
                    "bb_ketersedian_rm"        => $param ['bb_ketersedian_rm'],
                    "bb_lead_time"             => $param ['bb_lead_time'],
                    "bb_shelf_life"            => $param ['bb_shelf_life'],
                    "bb_penyimpanan"           => $param ['bb_penyimpanan'],
                    "bk_nama_bahan_kemas"      => $param ['bk_nama_bahan_kemas'],
                    "bk_komponen_bahan"        => $param ['bk_komponen_bahan'],
                    "bk_manufacture"           => $param ['bk_manufacture'],
                    "bk_harga_bahan_kemas"     => $param ['bk_harga_bahan_kemas'],
                    "bk_moq"                   => $param ['bk_moq'],
                    "bk_ketersediaan_pm"       => $param ['bk_ketersediaan_pm'],
                    "bk_lead_time"             => $param ['bk_lead_time'],
                    "bk_penyimpanan"           => $param ['bk_penyimpanan'],
                    "target_market"            => $param ['target_market'],
                    "estimasi_penjualan"       => $param ['estimasi_penjualan'],
                    "pendaftaran_notifikasi"   => $param ['pendaftaran_notifikasi'],
                    "rencana_launching_produk" => $param ['rencana_launching_produk'],
                );

                $this->modeldata->updatedata_2($konsep_id,$record_2);

                $valid = true;
                $msg = "Data success updated";
                break;
                // --- delete data formulir
            case "delete":
                $konsep = $param['konsep_produk_baru_id'];
                $this->modeldata->deletedata($konsep);
                $this->modeldata->deletedata_1($konsep);
                $this->modeldata->deletedata_2($konsep);
                $valid = true;
                $msg = "Data success deleted";
                break;

            default:
                $valid = false;
                $msg = "No action";
                break;
        }
        $this->dj(array(
            "valid" => $valid,
            "msg" => $msg,
            "ref_id" => $calibration_id,
        ));
    
    }
}
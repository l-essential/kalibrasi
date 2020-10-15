<?php


class Konsep_produk_baru extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->prefix_id_detail = $this->modeldata->prefix_id_detail;
        $this->idheader = $this->modeldata->prefix_id; 
        $this->title = 'Konsep Produk Baru';
    }

     public function add() {
        $this->data['default']['tanggal_pembuatan'] = Date('m/d/yy');
        $this->extenddata();
        parent::add();
    }

      public function edit($id) {
        $row = $this->modeldata->getby_id_array($id);
        $this->extenddata();
        parent::edit($id);
    }

    public function home_detail($id_header) {
        $this->data['url_setrevisi'] = site_url($this->controller . '/setrevisi');
        $this->data['url_setfinis'] = site_url($this->controller . '/setfinis');
        $this->data['url_preview'] = site_url($this->controller . "/preview");
        parent::home_detail($id_header);
    }

    public function add_detail($id_header) {
        $row = $this->modeldata->getby_id_array($id);
        parent::add_detail($id_header);
    }

    public function edit_detail($id) {
        $row = $this->modeldata->getby_id_detail_array($id);
        parent::edit_detail($id);
    }

     public function extenddata() {
        $this->data['url_getdata'] = site_url($this->controller . '/getdata');
        $this->data['url_homedetail'] = site_url($this->controller . '/home_detail');
    }

    public function getdata() {
        $param = $this->input->post();
        $checkfield = $param['no_konsep_produk'];
        $result = $this->modeldata->getby_name('no_konsep_produk', $checkfield);
        $valid = false;
        $message = "No data";
        if ($result) {
            $valid = true;
            $message = "Result data";
        }
        $this->dj(array("valid" => $valid, "msg" => $message, "result" => $result));
    }

     public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['tanggal_pembuatan'] = date("Y-m-d", strtotime($param['tanggal_pembuatan'])); 
            if (!isset($param['status_kosep'])) {
                $param['status_kosep'] = "0";
            }

            if ($param['actiondata'] == 'create') {
                $counter = $this->modeldata->getmax($param['tanggal_pembuatan']);
                $temp = "000" . $counter;
                $nomor = substr($temp, -3);
                $konsep_kode = 'RND-K/'. date('Y', strtotime($param['tanggal_pembuatan'])). "/". date('m'). "/" .$nomor;
                $param['no_konsep_produk'] = $konsep_kode;
            }

            if (isset($param['dataintable_length'])) {
                unset($param['dataintable_length']);
            }
            if (isset($param['id'])) {
                unset($param['id']);
            }
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

       public function postdatadetail() {
        $param = $this->input->post();
        if (isset($param['id_header'])) {
            $param["$this->prefix_id"] = $param['id_header'];
            unset($param['id_header']);
            $param["$this->prefix_id_detail"] = $param["$this->prefix_id"];
        }
        $this->postdatadetail_byparam_with_check($param, $this->prefix_id, 'konsep_produk_baru_id');
    }

    public function Preview($id) {
        $rowpreview = $this->modeldata->getbyid_preview($id);
        $row = $this->modeldata->getby_id_array($id);
        $this->data['preview'] = $rowpreview;
        $this->data['url_index'] = site_url($this->controller. '/edit/' . $row['konsep_produk_baru_id']);
        $this->load->view($this->view . '/home_preview', $this->data);
        
    }

    function setfinis() {
        $post = $this->input->post();
        $id = $post['id'];
        $data = 2;
        $record = array(
            "copy_data" => $data
        );
        // var_dump($record);
        // die();
        $this->modeldata->updatedata_detail($id, $record);
        $valid = true;
        $msg = "Insert data,success";
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function setrevisi() {
        $post = $this->input->post();
        $id = $post['id'];
        if ($post['status'] == '0') {
            $status = '0';
        } else {
            $status = '1';
        }
        $record = array(
            "copy_data" => $status
        );
        // var_dump($record);
        // die();
        $this->modeldata->updatedata_detail($id, $record);
        $valid = true;
        $msg = "Insert data,success";
        if ($status == '1') {
            $this->revisi($id);
            }
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

    function revisi($id) {
        $rowid = $this->modeldata->getby_idkonsep($id);
        $konsep_produk_baru_id     = $rowid->konsep_produk_baru_id;
        $revisi                    = ($rowid->revisi) + 1;
        $nama_merk                 = $rowid->nama_merk;                  
        $nama_produk               = $rowid->nama_produk;             
        $deskripsi_produk          = $rowid->deskripsi_produk;             
        $kbahan_aktif              = $rowid->kbahan_aktif;             
        $kegunaan                  = $rowid->kegunaan;                
        $cara_pemakaian            = $rowid->cara_pemakaian;              
        $warna                     = $rowid->warna;                    
        $bentuk                    = $rowid->bentuk;                  
        $aroma                     = $rowid->aroma;                    
        $pH                        = $rowid->pH;                       
        $viskositas                = $rowid->viskositas;               
        $berat_jenis               = $rowid->berat_jenis;              
        $produk_acuan              = $rowid->produk_acuan;              
        $uji_efikasi               = $rowid->uji_efikasi;

        $primer_jenis_kemasan      = $rowid->primer_jenis_kemasan;               
        $primer_jenis_lainlain     = $rowid->primer_jenis_lainlain;              
        $primer_bahan_kemasan      = $rowid->primer_bahan_kemasan;               
        $primer_warna_kemasan      = $rowid->primer_warna_kemasan;               
        $primer_warna_lainlain     = $rowid->primer_warna_lainlain;              
        $primer_tinggi_kemasan     = $rowid->primer_tinggi_kemasan;              
        $primer_diameter_dalam     = $rowid->primer_diameter_dalam;              
        $primer_diameter_luar      = $rowid->primer_diameter_luar;               
        $primer_kapasitas_kemasan  = $rowid->primer_kapasitas_kemasan;             
        $primer_valume_kemasan     = $rowid->primer_valume_kemasan;                
        $primer_uji_kebocoran      = $rowid->primer_uji_kebocoran;               
        $primer_uji_transportasi   = $rowid->primer_uji_transportasi;

        $sekunder_jenis_kemasan    = $rowid->sekunder_jenis_kemasan;             
        $sekunder_bahan_kemasan    = $rowid->sekunder_bahan_kemasan;            
        $sekunder_warna_kemasan    = $rowid->sekunder_warna_kemasan;             
        $sekunder_panjang_kemasan  = $rowid->sekunder_panjang_kemasan;             
        $sekunder_lebar_kemasan    = $rowid->sekunder_lebar_kemasan;             
        $sekunder_tinggi_kemasan   = $rowid->sekunder_tinggi_kemasan;             
        $sekunder_tebal_kemasan    = $rowid->sekunder_tebal_kemasan;

        $tersier_jenis_kemasan     = $rowid->tersier_jenis_kemasan;              
        $tersier_bahan_kemasan     = $rowid->tersier_bahan_kemasan;              
        $tersier_warna_kemasan     = $rowid->tersier_warna_kemasan;              
        $tersier_panjang_kemasan    = $rowid->tersier_panjang_kemasan;              
        $tersier_lebar_kemasan     = $rowid->tersier_lebar_kemasan;              
        $tersier_tinggi_kemasan    = $rowid->tersier_tinggi_kemasan;              
        $tersier_tebal_kemasan     = $rowid->tersier_tebal_kemasan;

        $bb_nama_bahan_baku        = $rowid->bb_nama_bahan_baku;                    
        $bb_inci_name              = $rowid->bb_inci_name;                          
        $bb_manufacture            = $rowid->bb_manufacture;                        
        $bb_harga_bahan_baku       = $rowid->bb_harga_bahan_baku;                   
        $bb_moq                    = $rowid->bb_moq;                                
        $bb_pengunaan              = $rowid->bb_pengunaan;                          
        $bb_ketersedian_rm         = $rowid->bb_ketersedian_rm;                     
        $bb_lead_time              = $rowid->bb_lead_time;                          
        $bb_shelf_life             = $rowid->bb_shelf_life;                         
        $bb_penyimpanan            = $rowid->bb_penyimpanan;

        $bk_nama_bahan_kemas       = $rowid->bk_nama_bahan_kemas;                   
        $bk_komponen_bahan         = $rowid->bk_komponen_bahan;                     
        $bk_manufacture            = $rowid->bk_manufacture;                        
        $bk_harga_bahan_kemas      = $rowid->bk_harga_bahan_kemas;                  
        $bk_moq                    = $rowid->bk_moq;                                
        $bk_ketersediaan_pm        = $rowid->bk_ketersediaan_pm;                    
        $bk_lead_time              = $rowid->bk_lead_time;                          
        $bk_penyimpanan            = $rowid->bk_penyimpanan;
                                
        $target_market             = $rowid->target_market;                         
        $estimasi_penjualan        = $rowid->estimasi_penjualan;                    
        $pendaftaran_notifikasi    = $rowid->pendaftaran_notifikasi;                
        $rencana_launching_produk  = $rowid->rencana_launching_produk;  
        
        $record = array(
            "konsep_produk_baru_id" => $konsep_produk_baru_id, 
            "revisi"                => $revisi,  
            "nama_merk"             => $nama_merk,                     
            "nama_produk"           => $nama_produk,                
            "deskripsi_produk"      => $deskripsi_produk,                
            "kbahan_aktif"          => $kbahan_aktif,                
            "kegunaan"              => $kegunaan,                
            "cara_pemakaian"        => $cara_pemakaian,                
            "warna"                 => $warna,                 
            "bentuk"                => $bentuk,                
            "aroma"                 => $aroma,                 
            "pH"                    => $pH,                      
            "viskositas"            => $viskositas,                  
            "berat_jenis"           => $berat_jenis,                
            "produk_acuan"          => $produk_acuan,                
            "uji_efikasi"           => $uji_efikasi,
            
            "primer_jenis_kemasan"      => $primer_jenis_kemasan,   
            "primer_jenis_lainlain"     => $primer_jenis_lainlain,  
            "primer_bahan_kemasan"      => $primer_bahan_kemasan,   
            "primer_warna_kemasan"      => $primer_warna_kemasan,   
            "primer_warna_lainlain"     => $primer_warna_lainlain,  
            "primer_tinggi_kemasan"     => $primer_tinggi_kemasan,  
            "primer_diameter_dalam"     => $primer_diameter_dalam,  
            "primer_diameter_luar"      => $primer_diameter_luar,   
            "primer_kapasitas_kemasan"  => $primer_kapasitas_kemasan, 
            "primer_valume_kemasan"     => $primer_valume_kemasan,    
            "primer_uji_kebocoran"      => $primer_uji_kebocoran,   
            "primer_uji_transportasi"   => $primer_uji_transportasi, 
            "sekunder_jenis_kemasan"    => $sekunder_jenis_kemasan, 
            "sekunder_bahan_kemasan"    => $sekunder_bahan_kemasan, 
            "sekunder_warna_kemasan"    => $sekunder_warna_kemasan, 
            "sekunder_panjang_kemasan"  => $sekunder_panjang_kemasan, 
            "sekunder_lebar_kemasan"    => $sekunder_lebar_kemasan, 
            "sekunder_tinggi_kemasan"   => $sekunder_tinggi_kemasan,  
            "sekunder_tebal_kemasan"    => $sekunder_tebal_kemasan, 
            "tersier_jenis_kemasan"     => $tersier_jenis_kemasan,   
            "tersier_bahan_kemasan"     => $tersier_bahan_kemasan,  
            "tersier_warna_kemasan"     => $tersier_warna_kemasan,  
            "tersier_panjang_kemasan"   => $tersier_panjang_kemasan, 
            "tersier_lebar_kemasan"     => $tersier_lebar_kemasan,  
            "tersier_tinggi_kemasan"    => $tersier_tinggi_kemasan, 
            "tersier_tebal_kemasan"     => $tersier_tebal_kemasan, 
            
            "bb_nama_bahan_baku"       => $bb_nama_bahan_baku,     
            "bb_inci_name"             => $bb_inci_name,            
            "bb_manufacture"           => $bb_manufacture,          
            "bb_harga_bahan_baku"      => $bb_harga_bahan_baku,     
            "bb_moq"                   => $bb_moq,                  
            "bb_pengunaan"             => $bb_pengunaan,            
            "bb_ketersedian_rm"        => $bb_ketersedian_rm,       
            "bb_lead_time"             => $bb_lead_time,            
            "bb_shelf_life"            => $bb_shelf_life,           
            "bb_penyimpanan"           => $bb_penyimpanan,          
            "bk_nama_bahan_kemas"      => $bk_nama_bahan_kemas,     
            "bk_komponen_bahan"        => $bk_komponen_bahan,       
            "bk_manufacture"           => $bk_manufacture,          
            "bk_harga_bahan_kemas"     => $bk_harga_bahan_kemas,    
            "bk_moq"                   => $bk_moq,                  
            "bk_ketersediaan_pm"       => $bk_ketersediaan_pm,      
            "bk_lead_time"             => $bk_lead_time,            
            "bk_penyimpanan"           => $bk_penyimpanan,         
            "target_market"            => $target_market,           
            "estimasi_penjualan"       => $estimasi_penjualan,      
            "pendaftaran_notifikasi"   => $pendaftaran_notifikasi,  
            "rencana_launching_produk" => $rencana_launching_produk,
        );
        $this->modeldata->create_revisi($record);
        $valid = true;
        $msg = "Insert data,success";
    }



}

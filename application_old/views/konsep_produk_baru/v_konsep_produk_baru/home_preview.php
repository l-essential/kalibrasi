<style>
.td-p {
  padding-left: 10px;
  padding-bottom: 25px;
}

.td-b {
  padding-left: 10px;
  padding-bottom: 20px;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PREVIEW</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PREVIEW</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
                  <table nobr="true" class="col-sm-12">
                        <tbody style="font-family: initial;font-size: 16px;">
                        <tr>
                              <td width="25%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="25" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                              <td width="45%" >&emsp;&emsp;</td>
                              <td width="15%" align="left" style="padding-left: 10px;"> Halaman</td>
                              <td width="14%" align="left"> : 1 dari 2</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="45%" align="center" ></td>
                              <td width="15%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                              <td width="14%"align="left"> : RNDK-F-029</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="45%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                              <td width="15%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                              <td width="14%"align="left"> : 04</td>
                              </tr>
                              <tr>
                              <td width="20%" style="border-bottom: 1px solid #393939;"></td>
                              <td width="45%" align="center" style="border-bottom: 1px solid #393939;"><b></b></td>
                              <td width="15%" align="left" style="padding-left: 10px;border-bottom: 1px solid #393939;"> Tanggal berlaku</td>
                              <td width="14%" style="border-bottom: 1px solid #393939;">: 29 November 2018</td>
                        </tr>
                        </tbody>
                      </table>
                 </br>
                 </br>
                  
              <!-- info row -->
              <table nobr="true" class="col-sm-12" style="font-size:17px">
                <tbody style="font-family: initial;">
                <tr>
                      <td width="10%" align="left" class="td-p">1) No. Konsep Produk</td>
                      <td width="3%" class="td-p" class="td-p"> : <?php echo $preview->no_konsep_produk ?>/<?php echo $preview->revisi ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">2) Tanggal Pembuatan Konsep</td>
                      <td width="5%" class="td-p" > : <?php echo $preview->tanggal_pembuatan ?></td>
                      <td width="13%" ></td>
                  </tr>
                      <tr>
                      <td width="10%" align="left" class="td-p">3) Nama Merek</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->nama_merk ?></td>
                      <td width="13%" ></td>
                      </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">4) Nama Produk</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->nama_produk ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">5) Deskripsi Produk</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->deskripsi_produk ?></td></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">6) Kandungan Bahan Aktif	</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kbahan_aktif ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">3) Kegunaan</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kegunaan ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">8) Cara Pemakaian</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->cara_pemakaian ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">9) Spesifikasi Produk Ruahan</td>
                      <td width="3%" class="td-p" ></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;a. Warna</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->warna ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;b. Bentuk</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->bentuk ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;c. Aroma</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->aroma ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;d. pH</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->pH ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">10) Produk Acuan</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->produk_acuan ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">11) Uji Efikasi</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->berat_jenis ?></td>
                      <td width="13%" ></td>
                  </tr>
                </tbody>
              </table>
              <!-- this row will not appear when printing -->
              <br>
              <!-- this row will not appear when printing -->
            </div>
            <!-- /.invoice -->

          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">
          <div class="invoice p-3 mb-3 ">
          <br>
              <table nobr="true" class="col-sm-12">
                    <tbody style="font-family: initial;">
                      <tr>
                          <td width="25%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="25" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="45%" >&emsp;&emsp;</td>
                          <td width="15%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" style="border-bottom: 1px solid #393939;"></td>
                          <td width="45%" align="center" style="border-bottom: 1px solid #393939;"><b></b></td>
                          <td width="15%" align="left" style="padding-left: 10px;border-bottom: 1px solid #393939;"> Tanggal berlaku</td>
                          <td width="14%" style="border-bottom: 1px solid #393939;">: 29 November 2018</td>
                      </tr>
                    </tbody>
                  </table>
                  </br>
                  </br>
                        
                  <!-- Table row -->
                  <div class="row">
                    <div class="col-12 table-responsive">
                    <table nobr="true" class="col-sm-12" style="font-size:17px">
                        <tbody style="font-family: initial;">
                          <tr>
                              <td width="10%" align="left" class="td-b">12) Spesifikasi Bahan Kemas (Primer)</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Jenis Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_jenis_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_bahan_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_warna_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Tinggi Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_tinggi_kemasan	 ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Diameter Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_diameter_dalam ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Diameter Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_diameter_luar ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Kapasitas Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_kapasitas_kemas ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Volume Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_valume_kemas ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;i. Uji Kebocoran</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_uji_kebocoran ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;j. Uji Transportasi</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->primer_uji_transportasi ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">13) Spesifikasi Bahan Kemas (Sekunder)</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Jenis Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_jenis_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_bahan_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_warna_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Panjang Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_panjang_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Lebar Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_lebar_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Tinggi Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_tinggi_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Tebal Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->sekunder_tebal_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">14) Spesifikasi Bahan Kemas (Tersier)</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">&emsp;&emsp;a. Jenis Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_jenis_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_bahan_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_warna_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Panjang Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_panjang_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Lebar Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_lebar_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Tinggi Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_tinggi_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Tebal Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->tersier_tebal_kemasan ?></td>
                              <td width="13%" ></td>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <br>
            </div>
        </div>
      </div>
    </section>

    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">
          <div class="invoice p-3 mb-3 ">
          <br>
              <table nobr="true" class="col-sm-12">
                    <tbody style="font-family: initial;">
                      <tr>
                          <td width="25%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="25" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="45%" >&emsp;&emsp;</td>
                          <td width="15%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" style="border-bottom: 1px solid #393939;"></td>
                          <td width="45%" align="center" style="border-bottom: 1px solid #393939;"><b></b></td>
                          <td width="15%" align="left" style="padding-left: 10px;border-bottom: 1px solid #393939;"> Tanggal berlaku</td>
                          <td width="14%" style="border-bottom: 1px solid #393939;">: 29 November 2018</td>
                      </tr>
                    </tbody>
                  </table>
                        
                  <!-- Table row -->
                  <div class="row">
                    <div class="col-12 table-responsive">
                    <table nobr="true" class="col-sm-12" style="font-size:17px">
                        <tbody style="font-family: initial;">
                          <tr>
                              <td width="10%" align="left" class="td-b">15) Investasi Bahan Baku Baru</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Nama Bahan Baku</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_nama_bahan_baku ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Inci Name</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_inci_name ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Manufacture / Supplier</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_manufacture ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Harga Bahan Baku</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_harga_bahan_baku ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. MOQ</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_moq ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. % Penggunaan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_pengunaan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Ketersediaan RM</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_ketersedian_rm ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Lead Time</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_lead_time ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;i. Shelf life</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_shelf_life ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;j. Penyimpanan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bb_penyimpanan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <br>
                          <tr>
                              <td width="10%" align="left" class="td-b">16) Investasi Bahan Kemas Baru</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Nama Bahan Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_nama_bahan_kemas ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Komponen Bahan Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_komponen_bahan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Manufacture / Supplier</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_manufacture ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Harga Bahan Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_harga_bahan_kemas ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. MOQ</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_moq ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Ketersediaan PM</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_ketersediaan_pm ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Lead Time</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_lead_time ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Penyimpanan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->bk_penyimpanan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          </br>
                          </br>
                          <tr>
                              <td width="10%" align="left" class="td-p">17) Target Market</td>
                              <td width="3%" class="td-p" class="td-p"> : <?php echo $preview->target_market ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">18) Estimasi Penjualan Perbulan (Pcs)</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->estimasi_penjualan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">19) Pendaftaran Notifikasi</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->pendaftaran_notifikasi ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">20) Rencana Launching Produk</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->rencana_launching_produk ?></td>
                              <td width="13%" ></td>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <br>
            </div>
        </div>
      </div>
    </section>


    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">
          <div class="invoice p-3 mb-3 ">
          <br>
              <table nobr="true" class="col-sm-12">
                    <tbody style="font-family: initial;">
                      <tr>
                          <td width="25%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="25" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="45%" >&emsp;&emsp;</td>
                          <td width="15%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="45%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                          <td width="15%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" style="border-bottom: 1px solid #393939;"></td>
                          <td width="45%" align="center" style="border-bottom: 1px solid #393939;"><b></b></td>
                          <td width="15%" align="left" style="padding-left: 10px;border-bottom: 1px solid #393939;"> Tanggal berlaku</td>
                          <td width="14%" style="border-bottom: 1px solid #393939;">: 29 November 2018</td>
                      </tr>
                    </tbody>
                  </table>
                        
                  <!-- Table row -->
                  <div class="row">
                    <div class="col-12 table-responsive">
                    <table nobr="true" class="col-sm-12" style="font-size:17px">
                        <tbody style="font-family: initial;">
                          <tr>
                              <td width="10%" align="left" class="td-b">21) Gambar Produk Acuan dan Produk Baru</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Produk Acuan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Produk Baru</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                       
                        </tbody>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <br>
                  <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th class="text-center">Dibuat Oleh</th>
                      <th class="text-center" colspan="4">Diperiksa Oleh</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->dibuat_oleh ?></td>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->disetujui_oleh ?></td>
                      <td class="text-center" style="height: 100px;width: 200px;"><?php echo $preview->diterima_oleh ?></td>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->diketahui_oleh ?></td>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->diketahui_oleh ?></td>
                    </tr>
                  
                    <tr>
                      <td class="text-center"><b>GM Marketing</b></td>
                      <td class="text-center"><b>R&DC Manager</b></td>
                      <td class="text-center"><b>Procurement Manager</b></td>
                      <td class="text-center"><b>PPIC Manager</b></td>
                      <td class="text-center"><b>Plant Division Head</b></td>
                    </tr>
                  </tbody>
                </table>
                  <!-- info row -->
                <br><br>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th class="text-center" colspan="2">Diketahui oleh</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->dibuat_oleh ?></td>
                      <td class="text-center" style="height: 100px;"><?php echo $preview->disetujui_oleh ?></td>
                    </tr>
                  
                    <tr>
                      <td class="text-center"><b>CFO PT. L’ESSENTIAL</b></td>
                      <td class="text-center"><b>CEO PT. L’ESSENTIAL</b></td>
                    </tr>
                  </tbody>
                </table>


                    <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-12">
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </section>
  </div>

  <script type="text/javascript">
        $(document).bind('keydown', 'ctrl+p', function () {
                    print();
                });
 </script>

<script type="text/javascript">
   url_index = '<?php echo $url_index; ?>';
  id = '<?php echo $preview->konsep_produk_baru_id ?>';
  $("#btncanceldetail").click(function () {
      ToContent(url_index + '/' + id);
  });

  function editdata() {
        ToContent(url_edit + '/' + id);
    }     
 

</script>
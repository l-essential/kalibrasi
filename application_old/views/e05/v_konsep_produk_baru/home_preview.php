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
                      <td width="3%" class="td-p" class="td-p"> : <?php echo $preview->no_konsep_produk ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">2) Tanggal Pembuatan Konsep</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->nama_produk ?></td>
                      <td width="13%" ></td>
                  </tr>
                      <tr>
                      <td width="10%" align="left" class="td-p">3) Nama Merek</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->bentuk_sediaan ?></td>
                      <td width="13%" ></td>
                      </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">4) Nama Produk</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->warna_sediaan ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">5) Deskripsi Produk</td>
                      <td width="3%" class="td-p" > :</td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">6) Kandungan Bahan Aktif	</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kemasan_primer ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">3) Kegunaan</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kemasan_sekunder ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">8) Cara Pemakaian</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->ukuran_kemasan ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">9) Spesifikasi Produk Ruahan</td>
                      <td width="3%" class="td-p" ></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;a. Warna</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kategori ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;b. Bentuk</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kategori ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;c. Aroma</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kategori ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">&emsp;&emsp;d. pH</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kategori ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">10) Viskositas (cP)</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->kategori ?></td>
                      <td width="13%" ></td>
                  </tr>
                  <tr>
                      <td width="10%" align="left" class="td-p">11) Berat Jenis (g/ml)</td>
                      <td width="3%" class="td-p" > : <?php echo $preview->sub_kategori ?></td>
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
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Tinggi Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Diameter Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Diameter Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Kapasitas Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Volume Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;i. Uji Kebocoran</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;j. Uji Transportasi</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">13) Spesifikasi Bahan Kemas (Sekunder)</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;a. Jenis Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Panjang Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Lebar Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Tinggi Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Tebal Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">14) Spesifikasi Bahan Kemas (Tersier)</td>
                              <td width="3%" class="td-b" ></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">&emsp;&emsp;a. Jenis Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Bahan Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Warna Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Panjang Kemasan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. Lebar Dalam</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Tinggi Luar</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Tebal Kemas</td>
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
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Inci Name</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Manufacture / Supplier</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Harga Bahan Baku</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. MOQ</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. % Penggunaan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Ketersediaan RM</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Lead Time</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;i. Shelf life</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;j. Penyimpanan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
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
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;b. Komponen Bahan Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;c. Manufacture / Supplier</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;d. Harga Bahan Kemas</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;e. MOQ</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;f. Ketersediaan PM</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;g. Lead Time</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-b">&emsp;&emsp;h. Penyimpanan</td>
                              <td width="3%" class="td-b" > : <?php echo $preview->kategori ?></td>
                              <td width="13%" ></td>
                          </tr>
                          </br>
                          </br>
                          <tr>
                              <td width="10%" align="left" class="td-p">17) Target Market</td>
                              <td width="3%" class="td-p" class="td-p"> : <?php echo $preview->no_konsep_produk ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">18) Estimasi Penjualan Perbulan (Pcs)</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->nama_produk ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">19) Pendaftaran Notifikasi</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->bentuk_sediaan ?></td>
                              <td width="13%" ></td>
                          </tr>
                          <tr>
                              <td width="10%" align="left" class="td-p">20) Rencana Launching Produk</td>
                              <td width="3%" class="td-p" > : <?php echo $preview->bentuk_sediaan ?></td>
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
   url_disetujui = '<?php echo $url_disetujui; ?>';
   url_diterima = '<?php echo $url_diterima; ?>';
   url_diketahui = '<?php echo $url_diketahui; ?>';
  
  function diterima() {
    $('#DialogConfirm').modal('show');
    $("#DialogConfirm  input[name=id]").val('<?php echo $id_formula ?>');
  }
              
  function disetujui() {
      $.ajax({
          url: url_disetujui,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: '<?php echo $id_formula ?>'
          },
          success: function (data) {
               window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function insertditerima() {
      $.ajax({
          url: url_diterima,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm input[name=id]").val(),
              kategori: $("#DialogConfirm input[name=kategori]").val(),
              sub_kategori: $("#DialogConfirm input[name=sub_kategori]").val()
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function diketahui() {
      $.ajax({
          url: url_diketahui,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: '<?php echo $id_formula ?>'
          },
          success: function (data) {
              window.location.reload(true);
              _alert(data.msg, data.valid);
              

          }
      });
      return false;
  }

</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white"> Form Persetujuan </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" name="id" class="form-control" value="<?php echo $id_formula ?>"/>
                <p>FORMULA NOTIFIKASI PRODUK dengan No. Formula : <?php echo $no_formula ?> </p>
                <!-- <div class="form-group">
                  <select  name="status" id="status" class="form-control">
                    <option value="1">Terima</option>
                    <option value="2">Tolak</option>
                  </select>
                </div> -->
                <div class="form-group">
                  <input type ="text" required="" class="form-control" id="kategori" name="kategori" placeholder="Katagori"/>
                </div>
                <div class="form-group">
                  <input type ="text" required="" class="form-control" id="sub_kategori" name="sub_kategori" placeholder="sub katagori"/>
                </div>
               
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insertditerima()" class="btn btn-sm btn-like" action="create">Setujui</button>
            </div>
        </div>
    </div>
</div>


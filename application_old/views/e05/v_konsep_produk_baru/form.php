<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
         
            <!-- <div class="card-header">
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div> -->
            <!-- /.card-header -->
            
       <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="no_konsep_produk" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
                <div class="callout callout-success" style="border-left-color: #20c997;">
                  <table nobr="true">
                    <tbody style="font-family: initial;">
                    <tr>
                          <td width="20%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" >&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 4</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-001</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 29 November 2018</td>
                    </tr>
                    </tbody>
                  </table></br>
                
              
                <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                  <div class="form-group row">
                        <label for="no_konsep_produk" class="col-3 col-sm-2 col-form-label text-left">1) No Konsep Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="no_konsep_produk" minlength="2" maxlength="50" id="no_konsep_produk" type="text" parsley-type="text" placeholder="input no_konsep_produk" class="form-control"
                                   value="<?php echo (isset($default['no_konsep_produk'])) ? $default['no_konsep_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_no_konsep_produk'])) ? $default['readonly_no_konsep_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="tanggal_pembuatan" class="col-3 col-sm-2 col-form-label text-left">2) Tanggal Pembuatan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tanggal_pembuatan" minlength="2" maxlength="50" id="tanggal_pembuatan" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['tanggal_pembuatan'])) ? $default['tanggal_pembuatan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tanggal_pembuatan'])) ? $default['readonly_tanggal_pembuatan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="nama_merk" class="col-3 col-sm-2 col-form-label text-left">3) Nama Merk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="nama_merk" minlength="2" maxlength="50" id="nama_merk" type="text" required=""  parsley-type="text" placeholder="input bentuk sediaan" class="form-control"
                                   value="<?php echo (isset($default['nama_merk'])) ? $default['nama_merk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_nama_merk'])) ? $default['readonly_nama_merk'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="nama_produk" class="col-3 col-sm-2 col-form-label text-left">4) Nama Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="nama_produk" minlength="2" maxlength="50" id="nama_produk" type="text" required=""  parsley-type="text" placeholder="input warna sediaan" class="form-control"
                                   value="<?php echo (isset($default['nama_produk'])) ? $default['nama_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_nama_produk'])) ? $default['readonly_nama_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="deskripsi_produk" class="col-3 col-sm-2 col-form-label text-left">5) Deskripsi Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="deskripsi_produk" minlength="2" maxlength="50" id="deskripsi_produk" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['deskripsi_produk'])) ? $default['deskripsi_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_deskripsi_produk'])) ? $default['readonly_deskripsi_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="kbahan_aktif" class="col-3 col-sm-2 col-form-label text-left">6) Kandungan Bahan Aktif <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="kbahan_aktif" minlength="2" maxlength="50" id="kbahan_aktif" type="text" required=""  parsley-type="text" placeholder="input kemasan sekunder" class="form-control"
                                   value="<?php echo (isset($default['kbahan_aktif'])) ? $default['kbahan_aktif'] : ''; ?>"
                                   <?php echo (isset($default['readonly_kbahan_aktif'])) ? $default['readonly_kbahan_aktif'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="kegunaan" class="col-3 col-sm-2 col-form-label text-left">7) Kegunaan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="kegunaan" minlength="2" maxlength="50" id="kegunaan" type="text" required=""  parsley-type="text" placeholder="input ukuran kemasan" class="form-control"
                                   value="<?php echo (isset($default['kegunaan'])) ? $default['kegunaan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_kegunaan'])) ? $default['readonly_kegunaan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="cara_pemakaian" class="col-3 col-sm-2 col-form-label text-left">8) Cara Pemakaian <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="cara_pemakaian" minlength="2" maxlength="50" id="cara_pemakaian" type="text" required=""  parsley-type="text" placeholder="input cara_pemakaian" class="form-control"
                                   value="<?php echo (isset($default['cara_pemakaian'])) ? $default['cara_pemakaian'] : ''; ?>"
                                   <?php echo (isset($default['readonly_cara_pemakaian'])) ? $default['readonly_cara_pemakaian'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                  <label for="warna" class="col-3 col-sm-3 col-form-label text-left">9) Spesifikasi Produk Ruahan </label>
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="warna" class="col-3 col-sm-2 col-form-label text-left">a. Warna <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="warna" minlength="2" maxlength="50" id="warna" type="text" required=""  parsley-type="text" placeholder="input sub cara_pemakaian" class="form-control"
                                   value="<?php echo (isset($default['warna'])) ? $default['warna'] : ''; ?>"
                                   <?php echo (isset($default['readonly_warna'])) ? $default['readonly_warna'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                
                  <div class="form-group row">
                        <label for="bentuk" class="col-3 col-sm-2 col-form-label text-left">b. Bentuk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bentuk" minlength="2" maxlength="50" id="bentuk" type="text" required=""  parsley-type="text" placeholder="input no formulir" class="form-control"
                                   value="<?php echo (isset($default['bentuk'])) ? $default['bentuk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bentuk'])) ? $default['readonly_bentuk'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="aroma" class="col-3 col-sm-2 col-form-label text-left">c. Aroma <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="aroma" minlength="2" maxlength="50" id="aroma" type="text" required=""  parsley-type="text" placeholder="input no revisi" class="form-control"
                                   value="<?php echo (isset($default['aroma'])) ? $default['aroma'] : ''; ?>"
                                   <?php echo (isset($default['readonly_aroma'])) ? $default['readonly_aroma'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="pH" class="col-3 col-sm-2 col-form-label text-left">d. pH <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="pH" minlength="2" maxlength="50" id="pH" type="text" required=""  parsley-type="text" placeholder="input tgl berlaku" class="form-control"
                                   value="<?php echo (isset($default['pH'])) ? $default['pH'] : ''; ?>"
                                   <?php echo (isset($default['readonly_pH'])) ? $default['readonly_pH'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="viskositas" class="col-3 col-sm-2 col-form-label text-left">f. Viskositas <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="viskositas" minlength="2" maxlength="50" id="viskositas" type="text" required=""  parsley-type="text" placeholder="input formula khusus" class="form-control"
                                   value="<?php echo (isset($default['viskositas'])) ? $default['viskositas'] : ''; ?>"
                                   <?php echo (isset($default['readonly_viskositas'])) ? $default['readonly_viskositas'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="berat_jenis" class="col-3 col-sm-2 col-form-label text-left">g. Berat Jenis<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="berat_jenis" minlength="2" maxlength="50" id="berat_jenis" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['berat_jenis'])) ? $default['berat_jenis'] : ''; ?>"
                                   <?php echo (isset($default['readonly_berat_jenis'])) ? $default['readonly_berat_jenis'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  </div>

                  <div class="form-group row">
                        <label for="produk_acuan" class="col-3 col-sm-2 col-form-label text-left">10) Produk Acuan<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="produk_acuan" minlength="2" maxlength="50" id="produk_acuan" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['produk_acuan'])) ? $default['produk_acuan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_produk_acuan'])) ? $default['readonly_produk_acuan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="uji_efikasi" class="col-3 col-sm-2 col-form-label text-left">11) Uji Efikasi<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                                    <input type="radio" name="uji_efikasi" id="uji_efikasi" value="Ya" <?php echo ($default['uji_efikasi']=='Ya' ? 'checked' : '');?>>
                                    <label for="uji_efikasi"> YA</label>&nbsp;&nbsp;
                                    <input type="radio" name="uji_efikasi" id="uji_efikasi" value="Tidak" <?php echo ($default['uji_efikasi']=='Tidak' ? 'checked' : '');?>>
                                    <label for="uji_efikasi"> TIDAK</label><br>
                        </div>                        
                  </div> 
                </div>
               
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
             
              </br>

              <div class="callout callout-success" style="border-left-color: #20c997;">
                  <table nobr="true">
                    <tbody style="font-family: initial;">
                    <tr>
                          <td width="20%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" >&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 2 dari 4</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-001</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b>KONSEP PRODUK BARU</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 29 November 2018</td>
                    </tr>
                    </tbody>
                  </table></br>
                
              
                <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                <div class="form-group row">
                        <label class="col-3 col-sm-5 col-form-label text-left">12) Spesifikasi Bahan Kemas (Primer) </label>                      
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="primer_jenis_kemasan" class="col-3 col-sm-2 col-form-label text-left">a. Jenis Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                              <input type="radio" name="primer_jenis_kemasan" id="primer_jenis_kemasan" value="Botol" <?php echo ($default['primer_jenis_kemasan']=='Botol' ? 'checked' : '');?>>
                              <label for="primer_jenis_kemasan"> Botol</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_jenis_kemasan" id="primer_jenis_kemasan" value="Pot" <?php echo ($default['primer_jenis_kemasan']=='Pot' ? 'checked' : '');?>>
                              <label for="primer_jenis_kemasan"> Pot</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_jenis_kemasan" id="primer_jenis_kemasan" value="Tube" <?php echo ($default['primer_jenis_kemasan']=='Tube' ? 'checked' : '');?>>
                              <label for="primer_jenis_kemasan"> Tube</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_jenis_kemasan" id="primer_jenis_kemasan" value="Sachet" <?php echo ($default['primer_jenis_kemasan']=='Sachet' ? 'checked' : '');?>>
                              <label for="primer_jenis_kemasan"> Sachet</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_jenis_kemasan" id="primer_jenis_kemasan" value="Lain lain" <?php echo ($default['primer_jenis_kemasan']=='Tidak' ? 'checked' : '');?>>
                              <label for="primer_jenis_kemasan"> Lain Lain</label>
                              <input name="primer_jenis_lainlain" minlength="2" maxlength="50" id="useraccess" type="text" parsley-type="text" placeholder="input lain lain" class="form-control"
                                   value="<?php echo (isset($default['primer_jenis_lainlain'])) ? $default['primer_jenis_lainlain'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_jenis_lainlain'])) ? $default['readonly_jenis_warna_lainlain'] : ''; ?>
                                   >
                             
                        </div>                        
                  </div> 
                  
                  <div class="form-group row">
                        <label for="primer_bahan_kemasan" class="col-3 col-sm-2 col-form-label text-left">b. Bahan Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_bahan_kemasan" minlength="2" maxlength="50" id="primer_bahan_kemasan" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['primer_bahan_kemasan'])) ? $default['primer_bahan_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_bahan_kemasan'])) ? $default['readonly_primer_bahan_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label class="col-3 col-sm-2 col-form-label text-left">c. Warna Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                        <input type="radio" name="primer_warna_kemasan" id="primer_warna_kemasan" value="Transparant" <?php echo ($default['primer_warna_kemasan']=='Transparant' ? 'checked' : '');?>>
                              <label for="primer_warna_kemasan"> Transparant</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_warna_kemasan" id="primer_warna_kemasan" value="White Opaque" <?php echo ($default['primer_warna_kemasan']=='White Opaque' ? 'checked' : '');?>>
                              <label for="primer_warna_kemasan"> White Opaque</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_warna_kemasan" id="primer_warna_kemasan" value="Doff" <?php echo ($default['primer_warna_kemasan']=='Doff' ? 'checked' : '');?>>
                              <label for="primer_warna_kemasan"> Doff</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_warna_kemasan" id="primer_warna_kemasan" value="Amber" <?php echo ($default['primer_warna_kemasan']=='Amber' ? 'checked' : '');?>>
                              <label for="primer_warna_kemasan"> Amber</label>&nbsp;&nbsp;
                              <input type="radio" name="primer_warna_kemasan" id="primer_warna_kemasan" value="Lain lain" <?php echo ($default['primer_warna_kemasan']=='Lain lain' ? 'checked' : '');?>>
                              <label for="primer_warna_kemasan"> Lain Lain</label>
                              <input name="primer_warna_lainlain" minlength="2" maxlength="50" id="warna_kemasan" type="text" parsley-type="text" placeholder="input lain lain" class="form-control"
                                   value="<?php echo (isset($default['primer_warna_lainlain'])) ? $default['primer_warna_lainlain'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_warna_lainlain'])) ? $default['readonly_primer_warna_lainlain'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                 
                  
                  <div class="form-group row">
                        <label for="primer_uji_kebocoran" class="col-3 col-sm-2 col-form-label text-left">c. Warna Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_uji_kebocoran" minlength="2" maxlength="50" id="primer_uji_kebocoran" type="text" required=""  parsley-type="text" placeholder="input primer_uji_transportasi sediaan" class="form-control"
                                   value="<?php echo (isset($default['primer_uji_kebocoran'])) ? $default['primer_uji_kebocoran'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_uji_kebocoran'])) ? $default['readonly_primer_uji_kebocoran'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="primer_tinggi_kemasan" class="col-3 col-sm-2 col-form-label text-left">d. Tinggi Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_tinggi_kemasan" minlength="2" maxlength="50" id="primer_tinggi_kemasan" type="text" required=""  parsley-type="text" placeholder="input primer_uji_kebocoran sediaan" class="form-control"
                                   value="<?php echo (isset($default['primer_tinggi_kemasan'])) ? $default['primer_tinggi_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_tinggi_kemasan'])) ? $default['readonly_primer_tinggi_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="primer_diameter_dalam" class="col-3 col-sm-2 col-form-label text-left">e. Diameter Dalam <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_diameter_dalam" minlength="2" maxlength="50" id="primer_diameter_dalam" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['primer_diameter_dalam'])) ? $default['primer_diameter_dalam'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_diameter_dalam'])) ? $default['readonly_primer_diameter_dalam'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="primer_diameter_luar" class="col-3 col-sm-2 col-form-label text-left">f. Diameter Luar <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_diameter_luar" minlength="2" maxlength="50" id="primer_diameter_luar" type="text" required=""  parsley-type="text" placeholder="input kemasan sekunder" class="form-control"
                                   value="<?php echo (isset($default['primer_diameter_luar'])) ? $default['primer_diameter_luar'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_diameter_luar'])) ? $default['readonly_primer_diameter_luar'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="primer_kapasitas_kemas" class="col-3 col-sm-2 col-form-label text-left">g. Kapasitas Kemas <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_kapasitas_kemas" minlength="2" maxlength="50" id="primer_kapasitas_kemas" type="text" required=""  parsley-type="text" placeholder="input ukuran kemasan" class="form-control"
                                   value="<?php echo (isset($default['primer_kapasitas_kemas'])) ? $default['primer_kapasitas_kemas'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_kapasitas_kemas'])) ? $default['readonly_primer_kapasitas_kemas'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="primer_valume_kemas" class="col-3 col-sm-2 col-form-label text-left">h. Volume Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_valume_kemas" minlength="2" maxlength="50" id="primer_valume_kemas" type="text" required=""  parsley-type="text" placeholder="input primer_valume_kemas" class="form-control"
                                   value="<?php echo (isset($default['primer_valume_kemas'])) ? $default['primer_valume_kemas'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_valume_kemas'])) ? $default['readonly_primer_valume_kemas'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="primer_uji_kebocoran" class="col-3 col-sm-2 col-form-label text-left">i. Uji Kebocoran <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_uji_kebocoran" minlength="2" maxlength="50" id="primer_uji_kebocoran" type="text" required=""  parsley-type="text" placeholder="input sub primer_valume_kemas" class="form-control"
                                   value="<?php echo (isset($default['primer_uji_kebocoran'])) ? $default['primer_uji_kebocoran'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_uji_kebocoran'])) ? $default['readonly_primer_uji_kebocoran'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="primer_uji_transportasi" class="col-3 col-sm-2 col-form-label text-left">j. Uji Transportasi <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="primer_uji_transportasi" minlength="2" maxlength="50" id="primer_uji_transportasi" type="text" required=""  parsley-type="text" placeholder="input no formulir" class="form-control"
                                   value="<?php echo (isset($default['primer_uji_transportasi'])) ? $default['primer_uji_transportasi'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_uji_transportasi'])) ? $default['readonly_primer_uji_transportasi'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  </div>

                  <div class="form-group row">
                        <label class="col-3 col-sm-5 col-form-label text-left">13) Spesifikasi Bahan Kemas (Sekunder) </label>                      
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="sekunder_jenis_kemasan" class="col-3 col-sm-2 col-form-label text-left">a. Jenis Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Stiker" <?php echo ($default['sekunder_jenis_kemasan']=='Stiker' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Stiker</label>&nbsp;&nbsp;
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Innerbox" <?php echo ($default['sekunder_jenis_kemasan']=='Innerbox' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Innerbox</label>&nbsp;&nbsp;
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Brosur" <?php echo ($default['sekunder_jenis_kemasan']=='Brosur' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Brosur</label>&nbsp;&nbsp;
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Shrink label" <?php echo ($default['sekunder_jenis_kemasan']=='Shrink label' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Shrink label</label>&nbsp;&nbsp;
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Shrink polos" <?php echo ($default['sekunder_jenis_kemasan']=='Shrink polos' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Shrink polos</label>&nbsp;&nbsp;
                              <input type="radio" name="sekunder_jenis_kemasan" id="sekunder_jenis_kemasan" value="Lain lain" <?php echo ($default['sekunder_jenis_kemasan']=='Tidak' ? 'checked' : '');?>>
                              <label for="sekunder_jenis_kemasan"> Lain lainnya</label>
                              <input name="primer_warna_lainlain" minlength="2" maxlength="50" id="sekunderjeniskemasan" type="text" parsley-type="text" placeholder="input lain lain" class="form-control"
                                   value="<?php echo (isset($default['primer_warna_lainlain'])) ? $default['primer_warna_lainlain'] : ''; ?>"
                                   <?php echo (isset($default['readonly_primer_warna_lainlain'])) ? $default['readonly_primer_warna_lainlain'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="sekunder_bahan_kemasan" class="col-3 col-sm-2 col-form-label text-left">b. Bahan Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_bahan_kemasan" minlength="2" maxlength="50" id="sekunder_bahan_kemasan" type="text" required=""  parsley-type="text" placeholder="input tgl berlaku" class="form-control"
                                   value="<?php echo (isset($default['sekunder_bahan_kemasan'])) ? $default['sekunder_bahan_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_bahan_kemasan'])) ? $default['readonly_sekunder_bahan_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="sekunder_warna_kemasan" class="col-3 col-sm-2 col-form-label text-left">c. Warna Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_warna_kemasan" minlength="2" maxlength="50" id="sekunder_warna_kemasan" type="text" required=""  parsley-type="text" placeholder="input formula khusus" class="form-control"
                                   value="<?php echo (isset($default['sekunder_warna_kemasan'])) ? $default['sekunder_warna_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_warna_kemasan'])) ? $default['readonly_sekunder_warna_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="sekunder_panjang_kemasan" class="col-3 col-sm-2 col-form-label text-left">d. Panjang Kemasan<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_panjang_kemasan" minlength="2" maxlength="50" id="sekunder_panjang_kemasan" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['sekunder_panjang_kemasan'])) ? $default['sekunder_panjang_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_panjang_kemasan'])) ? $default['readonly_sekunder_panjang_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>

                  <div class="form-group row">
                        <label for="sekunder_lebar_kemasan" class="col-3 col-sm-2 col-form-label text-left">e Lebar Kemasan<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_lebar_kemasan" minlength="2" maxlength="50" id="sekunder_lebar_kemasan" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['sekunder_lebar_kemasan'])) ? $default['sekunder_lebar_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_lebar_kemasan'])) ? $default['readonly_sekunder_lebar_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="sekunder_tinggi_kemasan" class="col-3 col-sm-2 col-form-label text-left">f Tinggi Kemasan<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_tinggi_kemasan" minlength="2" maxlength="50" id="sekunder_tinggi_kemasan" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['sekunder_tinggi_kemasan'])) ? $default['sekunder_tinggi_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_tinggi_kemasan'])) ? $default['readonly_sekunder_tinggi_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>

                  <div class="form-group row">
                        <label for="sekunder_tebal_kemasan" class="col-3 col-sm-2 col-form-label text-left">g Tebal Kemasan<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="sekunder_tebal_kemasan" minlength="2" maxlength="50" id="sekunder_tebal_kemasan" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['sekunder_tebal_kemasan'])) ? $default['sekunder_tebal_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_sekunder_tebal_kemasan'])) ? $default['readonly_sekunder_tebal_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  </div>
                  
                  <div class="form-group row">
                        <label class="col-3 col-sm-5 col-form-label text-left">14) Spesifikasi Bahan Kemas (Tersier)</label>                      
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="tersier_jenis_kemasan" class="col-3 col-sm-2 col-form-label text-left">a Jenis Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                              <input type="radio" name="tersier_jenis_kemasan" id="tersier_jenis_kemasan" value="Master Box" <?php echo ($default['tersier_jenis_kemasan']=='Master Box' ? 'checked' : '');?>>
                              <label for="tersier_jenis_kemasan"> Master Box</label>&nbsp;&nbsp;
                              <input type="radio" name="tersier_jenis_kemasan" id="tersier_jenis_kemasan" value="Lain lain" <?php echo ($default['tersier_jenis_kemasan']=='Tidak' ? 'checked' : '');?>>
                              <label for="tersier_jenis_kemasan"> Lain lainnya</label>
                              <input name="tersier_warna_lainlain" minlength="2" maxlength="50" id="tersierjeniskemasan" type="text" parsley-type="text" placeholder="input lain lain" class="form-control"
                                   value="<?php echo (isset($default['tersier_warna_lainlain'])) ? $default['tersier_warna_lainlain'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_warna_lainlain'])) ? $default['readonly_tersier_warna_lainlain'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="tersier_bahan_kemasan" class="col-3 col-sm-2 col-form-label text-left">b Bahan Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_bahan_kemasan" minlength="2" maxlength="50" id="tersier_bahan_kemasan" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['tersier_bahan_kemasan'])) ? $default['tersier_bahan_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_bahan_kemasan'])) ? $default['readonly_tersier_bahan_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="tersier_warna_kemasan" class="col-3 col-sm-2 col-form-label text-left">c Warna Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_warna_kemasan" minlength="2" maxlength="50" id="tersier_warna_kemasan" type="text" required=""  parsley-type="text" placeholder="input bentuk sediaan" class="form-control"
                                   value="<?php echo (isset($default['tersier_warna_kemasan'])) ? $default['tersier_warna_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_warna_kemasan'])) ? $default['readonly_tersier_warna_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="tersier_panjang_kemasan" class="col-3 col-sm-2 col-form-label text-left">d Panjang Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_panjang_kemasan" minlength="2" maxlength="50" id="tersier_panjang_kemasan" type="text" required=""  parsley-type="text" placeholder="input warna sediaan" class="form-control"
                                   value="<?php echo (isset($default['tersier_panjang_kemasan'])) ? $default['tersier_panjang_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_panjang_kemasan'])) ? $default['readonly_tersier_panjang_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="tersier_lebar_kemasan" class="col-3 col-sm-2 col-form-label text-left">e Lebar Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_lebar_kemasan" minlength="2" maxlength="50" id="tersier_lebar_kemasan" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['tersier_lebar_kemasan'])) ? $default['tersier_lebar_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_lebar_kemasan'])) ? $default['readonly_tersier_lebar_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="tersier_tinggi_kemasan" class="col-3 col-sm-2 col-form-label text-left">f Tinggi Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_tinggi_kemasan" minlength="2" maxlength="50" id="tersier_tinggi_kemasan" type="text" required=""  parsley-type="text" placeholder="input kemasan sekunder" class="form-control"
                                   value="<?php echo (isset($default['tersier_tinggi_kemasan'])) ? $default['tersier_tinggi_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_tinggi_kemasan'])) ? $default['readonly_tersier_tinggi_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="tersier_tebal_kemasan" class="col-3 col-sm-2 col-form-label text-left">g. Tebal Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="tersier_tebal_kemasan" minlength="2" maxlength="50" id="tersier_tebal_kemasan" type="text" required=""  parsley-type="text" placeholder="input ukuran kemasan" class="form-control"
                                   value="<?php echo (isset($default['tersier_tebal_kemasan'])) ? $default['tersier_tebal_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tersier_tebal_kemasan'])) ? $default['readonly_tersier_tebal_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div> 
                </div>
               
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
              </div>
              </br>



              <div class="callout callout-success" style="border-left-color: #20c997;">
                  <table nobr="true">
                    <tbody style="font-family: initial;">
                    <tr>
                          <td width="20%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" >&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 3 dari 4</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-001</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b>FORMULA NOTIFIKASI PRODUK</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 04</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 29 November 2018</td>
                    </tr>
                    </tbody>
                  </table></br>
                
               
                <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">

                  <div class="form-group row">
                        <label class="col-3 col-sm-5 col-form-label text-left">15) Investasi Bahan Baku Baru </label>                      
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="bb_nama_bahan_baku" class="col-3 col-sm-2 col-form-label text-left">a. Nama Bahan Baku <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_nama_bahan_baku" minlength="2" maxlength="50" id="bb_nama_bahan_baku" type="text" parsley-type="text" placeholder="input bb_nama_bahan_baku" class="form-control"
                                   value="<?php echo (isset($default['bb_nama_bahan_baku'])) ? $default['bb_nama_bahan_baku'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_nama_bahan_baku'])) ? $default['readonly_bb_nama_bahan_baku'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="bb_inci_name" class="col-3 col-sm-2 col-form-label text-left">b. Inci Name <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_inci_name" minlength="2" maxlength="50" id="bb_inci_name" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['bb_inci_name'])) ? $default['bb_inci_name'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_inci_name'])) ? $default['readonly_bb_inci_name'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bb_manufacture" class="col-3 col-sm-2 col-form-label text-left">c. Manufacture/Supplier <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_manufacture" minlength="2" maxlength="50" id="bb_manufacture" type="text" required=""  parsley-type="text" placeholder="input bb_penyimpanan sediaan" class="form-control"
                                   value="<?php echo (isset($default['bb_manufacture'])) ? $default['bb_manufacture'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_manufacture'])) ? $default['readonly_bb_manufacture'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bb_harga_bahan_baku" class="col-3 col-sm-2 col-form-label text-left">d. Harga Bahan Baku <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_harga_bahan_baku" minlength="2" maxlength="50" id="bb_harga_bahan_baku" type="text" required=""  parsley-type="text" placeholder="input bb_shelf_life sediaan" class="form-control"
                                   value="<?php echo (isset($default['bb_harga_bahan_baku'])) ? $default['bb_harga_bahan_baku'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_harga_bahan_baku'])) ? $default['readonly_bb_harga_bahan_baku'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bb_moq" class="col-3 col-sm-2 col-form-label text-left">e. MOQ <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_moq" minlength="2" maxlength="50" id="bb_moq" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['bb_moq'])) ? $default['bb_moq'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_moq'])) ? $default['readonly_bb_moq'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="bb_pengunaan" class="col-3 col-sm-2 col-form-label text-left">f. % Penggunaan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_pengunaan" minlength="2" maxlength="50" id="bb_pengunaan" type="text" required=""  parsley-type="text" placeholder="input kemasan sekunder" class="form-control"
                                   value="<?php echo (isset($default['bb_pengunaan'])) ? $default['bb_pengunaan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_pengunaan'])) ? $default['readonly_bb_pengunaan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bb_ketersedian_rm" class="col-3 col-sm-2 col-form-label text-left">g. Ketersediaan RM <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                              <input type="radio" name="bb_ketersedian_rm" id="bb_ketersedian_rm" value="Ready Stock" <?php echo ($default['bb_ketersedian_rm']=='Ready Stock' ? 'checked' : '');?>>
                              <label for="bb_ketersedian_rm"> Ready Stock</label>&nbsp;&nbsp;
                              <input type="radio" name="bb_ketersedian_rm" id="bb_ketersedian_rm" value="Indent" <?php echo ($default['bb_ketersedian_rm']=='Indent' ? 'checked' : '');?>>
                              <label for="bb_ketersedian_rm"> Indent </label>
                        </div>                        
                  </div>  

                  <div class="form-group row">
                        <label for="bb_lead_time" class="col-3 col-sm-2 col-form-label text-left">h. Lead Time <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_lead_time" minlength="2" maxlength="50" id="bb_lead_time" type="text" required=""  parsley-type="text" placeholder="input bb_lead_time" class="form-control"
                                   value="<?php echo (isset($default['bb_lead_time'])) ? $default['bb_lead_time'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_lead_time'])) ? $default['readonly_bb_lead_time'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  
                  <div class="form-group row">
                        <label for="bb_shelf_life" class="col-3 col-sm-2 col-form-label text-left">i. Shelf life  <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_shelf_life" minlength="2" maxlength="50" id="bb_shelf_life" type="text" required=""  parsley-type="text" placeholder="input sub bb_lead_time" class="form-control"
                                   value="<?php echo (isset($default['bb_shelf_life'])) ? $default['bb_shelf_life'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_shelf_life'])) ? $default['readonly_bb_shelf_life'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  
                  <div class="form-group row">
                        <label for="bb_penyimpanan" class="col-3 col-sm-2 col-form-label text-left">j. Penyimpanan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bb_penyimpanan" minlength="2" maxlength="50" id="bb_penyimpanan" type="text" required=""  parsley-type="text" placeholder="input no formulir" class="form-control"
                                   value="<?php echo (isset($default['bb_penyimpanan'])) ? $default['bb_penyimpanan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bb_penyimpanan'])) ? $default['readonly_bb_penyimpanan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  </div>

                  <div class="form-group row">
                        <label class="col-3 col-sm-5 col-form-label text-left">16) Investasi Bahan Kemas Baru </label>                      
                  </div>
                  <div class="callout callout-Gray">
                  <div class="form-group row">
                        <label for="bk_nama_bahan_kemas" class="col-3 col-sm-2 col-form-label text-left">a. Nama Bahan Kemas <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_nama_bahan_kemas" minlength="2" maxlength="50" id="bk_nama_bahan_kemas" type="text" required=""  parsley-type="text" placeholder="input no revisi" class="form-control"
                                   value="<?php echo (isset($default['bk_nama_bahan_kemas'])) ? $default['bk_nama_bahan_kemas'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_nama_bahan_kemas'])) ? $default['readonly_bk_nama_bahan_kemas'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="bk_komponen_bahan" class="col-3 col-sm-2 col-form-label text-left">b. Komponen Bahan Kemas <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_komponen_bahan" minlength="2" maxlength="50" id="bk_komponen_bahan" type="text" required=""  parsley-type="text" placeholder="input tgl berlaku" class="form-control"
                                   value="<?php echo (isset($default['bk_komponen_bahan'])) ? $default['bk_komponen_bahan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_komponen_bahan'])) ? $default['readonly_bk_komponen_bahan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="bk_manufacture" class="col-3 col-sm-2 col-form-label text-left">c. Manufacture/Supplier <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_manufacture" minlength="2" maxlength="50" id="bk_manufacture" type="text" required=""  parsley-type="text" placeholder="input formula khusus" class="form-control"
                                   value="<?php echo (isset($default['bk_manufacture'])) ? $default['bk_manufacture'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_manufacture'])) ? $default['readonly_bk_manufacture'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="bk_harga_bahan_kemas" class="col-3 col-sm-2 col-form-label text-left">d. Harga Bahan Kemas<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_harga_bahan_kemas" minlength="2" maxlength="50" id="bk_harga_bahan_kemas" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['bk_harga_bahan_kemas'])) ? $default['bk_harga_bahan_kemas'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_harga_bahan_kemas'])) ? $default['readonly_bk_harga_bahan_kemas'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  

                  <div class="form-group row">
                        <label for="bk_moq" class="col-3 col-sm-2 col-form-label text-left">e. MOQ<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_moq" minlength="2" maxlength="50" id="bk_moq" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['bk_moq'])) ? $default['bk_moq'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_moq'])) ? $default['readonly_bk_moq'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bk_ketersediaan_pm" class="col-3 col-sm-2 col-form-label text-left">f. Ketersediaan PM<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                              <input type="radio" name="bk_ketersediaan_pm" id="bk_ketersediaan_pm" value="Ready Stock" <?php echo ($default['bk_ketersediaan_pm']=='Ready Stock' ? 'checked' : '');?>>
                              <label for="bk_ketersediaan_pm"> Ready Stock</label>&nbsp;&nbsp;
                              <input type="radio" name="bk_ketersediaan_pm" id="bk_ketersediaan_pm" value="Indent" <?php echo ($default['bk_ketersediaan_pm']=='Indent' ? 'checked' : '');?>>
                              <label for="bk_ketersediaan_pm"> Indent </label>
                        </div>                        
                  </div> 

                  <div class="form-group row">
                        <label for="bk_lead_time" class="col-3 col-sm-2 col-form-label text-left">g. Lead Time<span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_lead_time" minlength="2" maxlength="50" id="bk_lead_time" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['bk_lead_time'])) ? $default['bk_lead_time'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_lead_time'])) ? $default['readonly_bk_lead_time'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bk_penyimpanan" class="col-3 col-sm-2 col-form-label text-left">h. Penyimpanan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="bk_penyimpanan" minlength="2" maxlength="50" id="bk_penyimpanan" type="text" parsley-type="text" placeholder="input bk_penyimpanan" class="form-control"
                                   value="<?php echo (isset($default['bk_penyimpanan'])) ? $default['bk_penyimpanan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bk_penyimpanan'])) ? $default['readonly_bk_penyimpanan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  </div>


                  <div class="form-group row">
                        <label for="target_market" class="col-3 col-sm-2 col-form-label text-left">17) Target Market <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="target_market" minlength="2" maxlength="50" id="target_market" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['target_market'])) ? $default['target_market'] : ''; ?>"
                                   <?php echo (isset($default['readonly_target_market'])) ? $default['readonly_target_market'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="estimasi_penjualan" class="col-3 col-sm-2 col-form-label text-left">18) Estimasi Penjualan Perbulan (Pcs) <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="estimasi_penjualan" minlength="2" maxlength="50" id="estimasi_penjualan" type="text" required=""  parsley-type="text" placeholder="input bentuk sediaan" class="form-control"
                                   value="<?php echo (isset($default['estimasi_penjualan'])) ? $default['estimasi_penjualan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_estimasi_penjualan'])) ? $default['readonly_estimasi_penjualan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="pendaftaran_notifikasi" class="col-3 col-sm-2 col-form-label text-left">19) Pendaftaran Notifikasi <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="pendaftaran_notifikasi" minlength="2" maxlength="50" id="pendaftaran_notifikasi" type="text" required=""  parsley-type="text" placeholder="input warna sediaan" class="form-control"
                                   value="<?php echo (isset($default['pendaftaran_notifikasi'])) ? $default['pendaftaran_notifikasi'] : ''; ?>"
                                   <?php echo (isset($default['readonly_pendaftaran_notifikasi'])) ? $default['readonly_pendaftaran_notifikasi'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="rencana_launching_produk" class="col-3 col-sm-2 col-form-label text-left">20) Rencana Launching Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-10">
                            <input name="rencana_launching_produk" minlength="2" maxlength="50" id="rencana_launching_produk" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['rencana_launching_produk'])) ? $default['rencana_launching_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_rencana_launching_produk'])) ? $default['readonly_rencana_launching_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                </div>
               
                
              </div>
              </div>
              

              <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                 <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fa fa-save'></li> &nbsp;Submit</button>
              </p>
            </div>
            </form>        

</div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
  url_post = '<?php echo $url_post; ?>';
  url_index = '<?php echo $url_index; ?>';
  id = $("#id").val();
  $('#tanggal_pembuatan').attr("autocomplete", "off").datepicker({ 
          minDate: moment().add('d', 0).toDate(),
        });

  actiondata = (id == 0) ? 'create' : 'update';
      $("input[name='primer_jenis_kemasan']").change(function() {
            radio = $("input[name='primer_jenis_kemasan']:checked").val();
            if (radio == 'Lain lain') {
            $('#useraccess').val('');
            $('#useraccess').attr('readonly', false);
            } else {
            $('#useraccess').attr('readonly', true);
            }
      });

      $("input[name='primer_warna_kemasan']").change(function() {
            radio = $("input[name='primer_warna_kemasan']:checked").val();
            if (radio == 'Lain lain') {
            $('#warna_kemasan').val('');
            $('#warna_kemasan').attr('readonly', false);
            } else {
            $('#warna_kemasan').attr('readonly', true);
            }
      });

      $("input[name='sekunder_jenis_kemasan']").change(function() {
            radio = $("input[name='sekunder_jenis_kemasan']:checked").val();
            if (radio == 'Lain lain') {
            $('#sekunderjeniskemasan').val('');
            $('#sekunderjeniskemasan').attr('readonly', false);
            } else {
            $('#sekunderjeniskemasan').attr('readonly', true);
            }
      });

      $("input[name='tersier_jenis_kemasan']").change(function() {
            radio = $("input[name='tersier_jenis_kemasan']:checked").val();
            if (radio == 'Lain lain') {
            $('#tersierjeniskemasan').val('');
            $('#tersierjeniskemasan').attr('readonly', false);
            } else {
            $('#tersierjeniskemasan').attr('readonly', true);
            }
      });

      
</script>

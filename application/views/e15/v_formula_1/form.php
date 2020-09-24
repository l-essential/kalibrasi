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
                <input type="hidden" name="checkdata1" id="checkdata1" value="no_formula" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dibuat_oleh" id="dibuat_oleh" value="<?php echo $this->session->userdata('ses_namaKaryawan'); ?>"/> 
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
                <input type="hidden" name="no_document" id="no_document" value="<?php echo (isset($default['no_document'])) ? $default['no_document'] : ''; ?>">
                <div class="callout callout-success" style="border-left-color: #20c997;">
                  <table nobr="true">
                    <tbody style="font-family: initial;">
                    <tr>
                          <td width="20%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" >&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b>FORMULA NOTIFIKASI PRODUK</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 01</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 12 Mei 2020</td>
                    </tr>
                    </tbody>
                  </table></br>
                
                <div class="card">    
                <div class="card-body">
                <div class="row invoice-info">
                <div class="col-sm-6 invoice-col">
                  <div class="form-group row">
                        <label for="merek" class="col-3 col-sm-4 col-form-label text-left">Merek <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="merek" minlength="2" maxlength="50" id="merek" type="text" required=""  parsley-type="text" placeholder="input merek" class="form-control"
                                   value="<?php echo (isset($default['merek'])) ? $default['merek'] : ''; ?>"
                                   <?php echo (isset($default['readonly_merek'])) ? $default['readonly_merek'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="nama_produk" class="col-3 col-sm-4 col-form-label text-left">Nama Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="nama_produk" minlength="2" maxlength="50" id="nama_produk" type="text" required=""  parsley-type="text" placeholder="input nama produk" class="form-control"
                                   value="<?php echo (isset($default['nama_produk'])) ? $default['nama_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_nama_produk'])) ? $default['readonly_nama_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="bentuk_sediaan" class="col-3 col-sm-4 col-form-label text-left">Bentuk Sediaan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="bentuk_sediaan" minlength="2" maxlength="50" id="bentuk_sediaan" type="text" required=""  parsley-type="text" placeholder="input bentuk sediaan" class="form-control"
                                   value="<?php echo (isset($default['bentuk_sediaan'])) ? $default['bentuk_sediaan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_bentuk_sediaan'])) ? $default['readonly_bentuk_sediaan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="warna_sediaan" class="col-3 col-sm-4 col-form-label text-left">Warna Sediaan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="warna_sediaan" minlength="2" maxlength="50" id="warna_sediaan" type="text" required=""  parsley-type="text" placeholder="input warna sediaan" class="form-control"
                                   value="<?php echo (isset($default['warna_sediaan'])) ? $default['warna_sediaan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_warna_sediaan'])) ? $default['readonly_warna_sediaan'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="kemasan_primer" class="col-3 col-sm-4 col-form-label text-left">Kemasan Primer <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="kemasan_primer" minlength="2" maxlength="50" id="kemasan_primer" type="text" required=""  parsley-type="text" placeholder="input kemasan primer" class="form-control"
                                   value="<?php echo (isset($default['kemasan_primer'])) ? $default['kemasan_primer'] : ''; ?>"
                                   <?php echo (isset($default['readonly_kemasan_primer'])) ? $default['readonly_kemasan_primer'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="kemasan_sekunder" class="col-3 col-sm-4 col-form-label text-left">Kemasan Sekunder <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="kemasan_sekunder" minlength="2" maxlength="50" id="kemasan_sekunder" type="text" required=""  parsley-type="text" placeholder="input kemasan sekunder" class="form-control"
                                   value="<?php echo (isset($default['kemasan_sekunder'])) ? $default['kemasan_sekunder'] : ''; ?>"
                                   <?php echo (isset($default['readonly_kemasan_sekunder'])) ? $default['readonly_kemasan_sekunder'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="ukuran_kemasan" class="col-3 col-sm-4 col-form-label text-left">Ukuran Kemasan <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="ukuran_kemasan" minlength="2" maxlength="50" id="ukuran_kemasan" type="text" required=""  parsley-type="text" placeholder="input ukuran kemasan" class="form-control"
                                   value="<?php echo (isset($default['ukuran_kemasan'])) ? $default['ukuran_kemasan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_ukuran_kemasan'])) ? $default['readonly_ukuran_kemasan'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                </div>
                <!-- /.col -->
                <div class="col-sm-6 invoice-col"> 
                  <div class="form-group row">
                        <label for="no_formula" class="col-3 col-sm-4 col-form-label text-left">No Formula <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="no_formula" minlength="2" maxlength="50" id="no_formula" type="text" parsley-type="text" placeholder="input no formulir" class="form-control"
                                   value="<?php echo (isset($default['no_formula'])) ? $default['no_formula'] : ''; ?>"
                                   <?php echo (isset($default['readonly_no_formula'])) ? $default['readonly_no_formula'] : ''; ?>
                                   >
                        </div>                        
                  </div>
                  <div class="form-group row">
                        <label for="no_revisi" class="col-3 col-sm-4 col-form-label text-left">No revisi <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="no_revisi" minlength="2" maxlength="50" id="no_revisi" type="text" required=""  parsley-type="text" placeholder="input no revisi" class="form-control"
                                   value="<?php echo (isset($default['no_revisi'])) ? $default['no_revisi'] : ''; ?>"
                                   <?php echo (isset($default['readonly_no_revisi'])) ? $default['readonly_no_revisi'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="tgl_berlaku" class="col-3 col-sm-4 col-form-label text-left">Tgl Berlaku <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="tgl_berlaku" minlength="2" maxlength="50" id="tgl_berlaku" type="text" required=""  parsley-type="text" placeholder="input tgl berlaku" class="form-control"
                                   value="<?php echo (isset($default['tgl_berlaku'])) ? $default['tgl_berlaku'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tgl_berlaku'])) ? $default['readonly_tgl_berlaku'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="formula_khusus" class="col-3 col-sm-4 col-form-label text-left">Formula Khusus <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="formula_khusus" minlength="2" maxlength="50" id="formula_khusus" type="text" required=""  parsley-type="text" placeholder="input formula khusus" class="form-control"
                                   value="<?php echo (isset($default['formula_khusus'])) ? $default['formula_khusus'] : ''; ?>"
                                   <?php echo (isset($default['readonly_formula_khusus'])) ? $default['readonly_formula_khusus'] : ''; ?>
                                   >
                        </div>                        
                  </div>  
                  <div class="form-group row">
                        <label for="persamaan_produk" class="col-3 col-sm-4 col-form-label text-left">Persamaan Produk <span style="color:red">*</span></label>
                        <div class="col-9 col-sm-7">
                            <input name="persamaan_produk" minlength="2" maxlength="50" id="persamaan_produk" type="text" required=""  parsley-type="text" placeholder="input persamaan produk" class="form-control"
                                   value="<?php echo (isset($default['persamaan_produk'])) ? $default['persamaan_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_persamaan_produk'])) ? $default['readonly_persamaan_produk'] : ''; ?>
                                   >
                        </div>                        
                  </div> 
                </div>
               
                <!-- /.col -->
              </div>
              <!-- /.row -->
              </div>
              </div>
              <div id="divdetail" style="display:none"></div>
              </div></br>


                  <div class="form-group">
                  <div class="callout callout-success" style="border-left-color: #20c997;">
                  <table nobr="true">
                  <tbody style="font-family: initial;">
                    <tr>
                          <td width="20%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" >&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 2 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b>FORMULA NOTIFIKASI PRODUK</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 01</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" ><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 12 Mei 2020</td>
                    </tr>
                    </tbody>
                  </table></br>
                  
                    <div id="divprosedur" style="display:none"></div><br>
                    <div id="divformula2" style="display:none"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="reset" class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                        <button type="submit" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
                      </p>
                </div>
            </form>        

</div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
  $('#tgl_berlaku').attr("autocomplete", "off").datepicker({ 
          minDate: moment().add('d', 0).toDate(),
        });

    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'no_formula': $("#no_formula").val()});
            homedetail(getdata);
        }



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                var resultdata = postaction(url_post, formdata);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'no_formula': resultdata.postdata.no_formula});
                    homedetail(getdata);
                    
                }
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var formula_id_H = param.result.formula_id_H;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + formula_id_H);

          $("#divformula2").html("");
          $("#divformula2").show();
          $("#divformula2").load('<?php echo $url_home_formula_2 ?>' + '/' + formula_id_H);

          $("#divprosedur").html("");
          $("#divprosedur").show();
          $("#divprosedur").load('<?php echo $url_home_prosedur ?>' + '/' + formula_id_H);
    }
    
</script>

<style>
    .parsley-required{

        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

</style>  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?><?php echo $view->improvement_code ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?><?php echo $view->improvement_code ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">    
            <div class="card-header">
               <?php echo $view->improvement_code ?>
              <div class="card-tools">
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdatanilai" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="idevaluasinilai" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatanilai" id="actiondatanilai" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="evaluasi_tindakan" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_formulir" id="id_formulir" value="<?php echo $id_formulir; ?>" />
            <input type="hidden" name="improvement_code" id="improvement_code" value="<?php echo $view->improvement_code ?>" />
            

            <div class="invoice p-3 mb-3">
                <table nobr="true" style="border-bottom: 1px solid;">
                    <tr>
                          <td width="20%"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" style="border-right: 1px solid;">&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b>FORMULIR PENANGANAN PENYIMPANGAN</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : QASS-F-003</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b>BATCH DAN NON BATCH</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 00</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b></b></td>
                          <td width="12%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 1 September 2019</td>
                    </tr>
                  </table>

             <br/>
             <br/>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                   Nomor Penyimpangan &emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $view->improvement_code ?><br>
                   Tanggal Terjadi Penyimpangan &ensp; : <?php echo $view->tanggal ?><br>
                   Judul Penyimpangan&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $view->title_improvement ?><br>
                   Tipe Penyimpangan&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $view->nama_tipe ?><br>
                   Katagori Penyimpangan &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $view->nama_katagori ?><br>
                   Ruang Lingkup Penyimpangan&ensp; : <?php echo $view->nama_ruanglingkup ?><br>
                  </address>
                </div>
                <!-- /.col -->
               
              </div>
              <!-- /.row -->
              <br/>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>RINCIAN PENYIMPANGAN YANG TERJADI</th>
                      <th>RINCIAN TINDAKAN SEMENTARA YANG TELAH DIAMBIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $view->rincian_penyimpangan ?></td>
                      <td><?php echo $view->rincian_tindakan ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
               <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                   Nomor Identitas &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp; : <?php echo $view->nama_resiko ?><br>
                   Dampak pada hal lain &emsp;&emsp;&emsp;&ensp; &ensp; : <?php echo $view->dampak ?><br>
                   Uraian bila ada &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $view->uraian ?><br>
                   
                  </address>
                </div>
              </div>
           
            </div>

            <div class="main-content container-fluid">

                <div class="form-group">
                    <label>Evaluasi Terhadap Laporan Tindakan dan Resiko <span style="color:red">*</span></label>
                    <div class="col-sm-12">
                     <textarea name="evaluasi_tindakan" class="form-control" rows="3" placeholder="Enter ..."
                      <?php echo (isset($default['readonly_evaluasi_tindakan'])) ? $default['readonly_evaluasi_tindakan'] : ''; ?> ><?php echo (isset($default['evaluasi_tindakan'])) ? $default['evaluasi_tindakan'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row"> 

                    <label>L<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="L" id="L" required=""  minlength="1" maxlength="4" type="number" parsley-type="text" placeholder="input L" class="form-control"
                               value="<?php echo (isset($default['L'])) ? $default['L'] : ''; ?>"
                               <?php echo (isset($default['readonly_L'])) ? $default['readonly_L'] : ''; ?>
                               >
                    </div>
                    <label>S<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="S" id="S" required="" minlength="1" maxlength="10" type="number" parsley-type="text" placeholder="input S" class="form-control"
                               value="<?php echo (isset($default['S'])) ? $default['S'] : ''; ?>"
                               <?php echo (isset($default['readonly_S'])) ? $default['readonly_S'] : ''; ?>
                               >
                    </div>
                    <label>D<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="D" id="D" required="" minlength="1" maxlength="10" type="number" parsley-type="text" placeholder="input D" class="form-control"
                               value="<?php echo (isset($default['D'])) ? $default['D'] : ''; ?>"
                               <?php echo (isset($default['readonly_D'])) ? $default['readonly_D'] : ''; ?>
                               >
                    </div>
                    <label>RPN</span>
                    </label>
                    <div class="col-3 col-lg-3">
                        <input name="RPN" id="RPN"  minlength="1" maxlength="10" type="text" parsley-type="text" placeholder="auto input" class="form-control"
                               value="<?php echo (isset($default['RPN'])) ? $default['RPN'] : ''; ?>"
                               <?php echo (isset($default['readonly_RPN'])) ? $default['readonly_RPN'] : ''; ?>
                              Readonly >
                    </div>

                </div>

                <div class="col-lg-12">
                  <p class="text-right">
                    <button type="button" id="btncancelnilai" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsavenilai"  class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
                  </p>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var formbankquota, formdatabankquota, url_index, url_post, idevaluasinilai, actiondatanilai;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        idevaluasinilai = $("#idevaluasinilai").val();
        
        $("#L").on("change paste keyup", function() {
        $("#RPN").val($("#n_l").val() * $("#S").val() * $("#D").val());
        });

        $("#S").on("change paste keyup", function() {
        $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
        });

        $("#D").on("change paste keyup", function() {
        $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
        });

         $("#areaeditor").summernote({
            height: 300
              });

        actiondatanilai = (idevaluasinilai == 0) ? 'create' : 'update';


        $('#tanggal_pko').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });


        $("#btnsavenilai").click(function () {
            formbankquota = $("#formdatanilai");
            formbankquota.parsley().validate();
            if (formbankquota.parsley().isValid()) {
                $("#actiondatanilai").val(actiondatanilai);
                formdatabankquota = formbankquota.serialize();
                postdata(url_post, formdatabankquota, url_index);
            }
        });
        $("#btncancelnilai").click(function () {
            ToContent(url_index);
        });
    });


</script>




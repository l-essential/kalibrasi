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
    .ui-datepicker-calendar {
        display: none;
    }
</style>  
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
          <div class="card">    
            <div class="card-header">
                <?php echo $title; ?>
              <div class="card-tools">
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdatabunga" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="idrca" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondatarca" id="actiondatarca" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="id_formulir" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" name="id_formulir" id="id_formulir" value="<?php echo $id_formulir; ?>" />
        <input type="hidden" name="department_name" id="department_terkait" value="<?php echo $this->session->userdata('ses_department_name'); ?>" />

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
                <div class="form-group row">
                    <label for="personel" class="col-sm-3 col-form-label" >Personel<span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="personel" class="form-control" rows="3" placeholder="input personel"
                    <?php echo (isset($default['readonly_personel'])) ? $default['readonly_personel'] : ''; ?> ><?php echo (isset($default['personel'])) ? $default['personel'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="material" class="col-sm-3 col-form-label" >Material <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="material" class="form-control" rows="3" placeholder="input material"
                       <?php echo (isset($default['readonly_material'])) ? $default['readonly_material'] : ''; ?> ><?php echo (isset($default['material'])) ? $default['material'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="alat_mesin" class="col-sm-3 col-form-label" >Alat / Mesin <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="alat_mesin" class="form-control" rows="3" placeholder="input alat / mesin"
                       <?php echo (isset($default['readonly_alat_mesin'])) ? $default['readonly_alat_mesin'] : ''; ?> ><?php echo (isset($default['alat_mesin'])) ? $default['alat_mesin'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="metode" class="col-sm-3 col-form-label">Metode / Prosedur <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="metode" class="form-control" rows="3" placeholder="input metode / prosedur"
                       <?php echo (isset($default['readonly_metode'])) ? $default['readonly_metode'] : ''; ?> ><?php echo (isset($default['metode'])) ? $default['metode'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="sarana" class="col-sm-3 col-form-label" >Sarana Penunjang Kritis / Lingkungan  <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="sarana" class="form-control" rows="3" placeholder="input sarana penunjang"
                       <?php echo (isset($default['readonly_sarana'])) ? $default['readonly_sarana'] : ''; ?> ><?php echo (isset($default['sarana'])) ? $default['sarana'] : ''; ?></textarea>
                    </div>                        
                </div>
                

                <div class="col-sm-12">
                  <p class="text-right">
                    <button type="button" id="btncancelbunga" class="btn btn-sm btn-secondary"><i class='fas fa-times'></i> Cancel</button>
                    <button type="button" id="btnsavebunga"  class="btn btn-sm btn-like"><i class='fas fa-check'></i> Submit</button>
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
            var formbunga, formdatabunga, url_index, url_post, idrca, actiondatarca;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            idrca = $("#idrca").val();
            actiondatarca = (idrca == 0) ? 'create' : 'update';

            $("#btnsavebunga").click(function () {
                formbunga = $("#formdatabunga");
                formbunga.parsley().validate();
                if (formbunga.parsley().isValid()) {
                    $("#actiondatarca").val(actiondatarca);
                    formdatabunga = formbunga.serialize();
                    postdata(url_post, formdatabunga, url_index);
                }
            });
            $("#btncancelbunga").click(function () {
                ToContent(url_index);
            });
        });


    </script>




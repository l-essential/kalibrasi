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
        <form id="formdatabunga" data-parsley-validate="" novalidate="" autocomplete="off">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="idrca" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondatarca" id="actiondatarca" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="id_formulir" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" name="id_formulir" id="id_formulir" value="<?php echo $id_formulir; ?>" />

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
                    <button type="button" id="btncancel" class="btn btn-sm btn-secondary"><i class='fas fa-times'></i> Cancel</button>
                    <button type="button" id="btnsave"  class="btn btn-sm btn-success"><i class='fas fa-check'></i> Submit</button>
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

            $("#btnsave").click(function () {
                formbunga = $("#formdatabunga");
                formbunga.parsley().validate();
                if (formbunga.parsley().isValid()) {
                    $("#actiondatarca").val(actiondatarca);
                    formdatabunga = formbunga.serialize();
                    postdata(url_post, formdatabunga, url_index);
                }
            });
            $("#btncancel").click(function () {
                ToContent(url_index);
            });
        });


    </script>




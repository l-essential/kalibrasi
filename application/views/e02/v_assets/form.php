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
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="assets_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="assets_code" class="col-sm-2 text-right control-label col-form-label">Assets Code <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="assets_code" id="assets_code" type="text" required="" parsley-type="text" placeholder="Masukan assets_code" class="form-control"
                           value="<?php echo (isset($default['assets_code'])) ? $default['assets_code'] : ''; ?>"
                           <?php echo (isset($default['readonly_assets_code'])) ? $default['readonly_assets_code'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="assets_name" class="col-sm-2 text-right control-label col-form-label">Assets Name <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="assets_name" id="assets_name" type="text" minlength="5" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['assets_name'])) ? $default['assets_name'] : ''; ?>"
                           <?php echo (isset($default['readonly_assets_name'])) ? $default['readonly_assets_name'] : ''; ?>
                           >
                </div>                        
            </div>
            <div class="form-group row">
                <label for="assets_model" class="col-sm-2 text-right control-label col-form-label">Assets Model <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="assets_model" id="assets_model" type="text" required="" parsley-type="text" placeholder="Masukan assets_model" class="form-control"
                           value="<?php echo (isset($default['assets_model'])) ? $default['assets_model'] : ''; ?>"
                           <?php echo (isset($default['readonly_assets_model'])) ? $default['readonly_assets_model'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="assets_type" class="col-sm-2 text-right control-label col-form-label">Assets Type<span style="color:red">*</span></label>
                <div class="col-sm-10"> 
                    <input name="assets_type" id="assets_type" type="text" minlength="5" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['assets_type'])) ? $default['assets_type'] : ''; ?>"
                           <?php echo (isset($default['readonly_assets_type'])) ? $default['readonly_assets_type'] : ''; ?>
                           >
                </div>                        
            </div>
             <div class="form-group row">
                <label for="assets_merk" class="col-sm-2 text-right control-label col-form-label">Assets Merk <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="assets_merk" id="assets_merk" type="text" minlength="5" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['assets_merk'])) ? $default['assets_merk'] : ''; ?>"
                           <?php echo (isset($default['readonly_assets_merk'])) ? $default['readonly_assets_merk'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="col-sm-12">
             <p class="text-right">
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
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
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    $('#tanggal_tmt').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
           
        });
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




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
            <input type="hidden" name="checkdata1" id="checkdata1" value="location_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="location_code" class="col-sm-2 control-label col-form-label">kode Lokasi <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="location_code" id="location_code" type="text" parsley-type="text" placeholder=" -- AUTO --" class="form-control"
                           value="<?php echo (isset($default['location_code'])) ? $default['location_code'] : ''; ?>"
                           <?php echo (isset($default['readonly_location_code'])) ? $default['readonly_location_code'] : ''; ?>
                           Readonly>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="location_name" class="col-sm-2 control-label col-form-label">Nama Lokasi <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="location_name" id="location_name" type="text" minlength="3" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama lokasi" class="form-control"
                           value="<?php echo (isset($default['location_name'])) ? $default['location_name'] : ''; ?>"
                           <?php echo (isset($default['readonly_location_name'])) ? $default['readonly_location_name'] : ''; ?>
                           >
                </div>                        
            </div>
            
            
                    <input name="tanggal" id="tanggal" type="hidden" minlength="3" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['tanggal'])) ? $default['tanggal'] : ''; ?>"
                           <?php echo (isset($default['readonly_tanggal'])) ? $default['readonly_tanggal'] : ''; ?>
                           >

            <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
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




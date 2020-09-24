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
            <input type="hidden" name="checkdata1" id="checkdata1" value="program" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="program" class="col-sm-2 ">Kode <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="program" id="program" type="text" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['program'])) ? $default['program'] : ''; ?>"
                           <?php echo (isset($default['readonly_program'])) ? $default['readonly_program'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="periode" class="col-sm-2 ">Tahun <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="periode" id="periode" type="text"  required="" parsley-type="text" placeholder="Masukan jabatan penandatangan" class="form-control"
                           value="<?php echo (isset($default['periode'])) ? $default['periode'] : ''; ?>"
                           <?php echo (isset($default['readonly_periode'])) ? $default['readonly_periode'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="form-group row">
                <label for="bln" class="col-sm-2 ">Bulan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="bln" id="bln" type="text"  required="" parsley-type="text" placeholder="Masukan jabatan penandatangan" class="form-control"
                           value="<?php echo (isset($default['bln'])) ? $default['bln'] : ''; ?>"
                           <?php echo (isset($default['readonly_bln'])) ? $default['readonly_bln'] : ''; ?>
                           >
                </div>                        
            </div>

             <div class="form-group row">
                <label for="lastno" class="col-sm-2 ">Nomor Terakhir <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="lastno" id="lastno" type="text"  required="" parsley-type="text" placeholder="Masukan jabatan penandatangan" class="form-control"
                           value="<?php echo (isset($default['lastno'])) ? $default['lastno'] : ''; ?>"
                           <?php echo (isset($default['readonly_lastno'])) ? $default['readonly_lastno'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-secondary"><li class='fas fa-times'></li> Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-like"><li class='fas fa-check'></li> Submit</button>
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
    $('#bln').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
           
        });
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




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
            <input type="hidden" name="checkdata1" id="checkdata1" value="info_page_title" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
             <div class="form-group row">
                <label for="info_page_code" class="col-sm-2 text-right control-label col-form-label">Info Page Code <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="info_page_code" id="info_page_code" type="text" required="" parsley-type="text" placeholder="input info page code" class="form-control"
                           value="<?php echo (isset($default['info_page_code'])) ? $default['info_page_code'] : ''; ?>"
                           <?php echo (isset($default['readonly_info_page_code'])) ? $default['readonly_info_page_code'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="form-group row">
                <label for="info_page_title" class="col-sm-2 text-right control-label col-form-label">Info Page Title <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="info_page_title" id="info_page_title" type="text" required="" parsley-type="text" placeholder="input info page title" class="form-control"
                           value="<?php echo (isset($default['info_page_title'])) ? $default['info_page_title'] : ''; ?>"
                           <?php echo (isset($default['readonly_info_page_title'])) ? $default['readonly_info_page_title'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="info_page_note" class="col-sm-2 text-right control-label col-form-label">Info Page Note <span style="color:red">*</span></label>
                <div class="col-sm-10">
                   <textarea name="info_page_note" class="form-control" rows="3"
                        <?php echo (isset($default['readonly_info_page_note'])) ? $default['readonly_info_page_note'] : ''; ?> ><?php echo (isset($default['info_page_note'])) ? $default['info_page_note'] : ''; ?></textarea>
                </div>                        
            </div> 
            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm  btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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




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
            <input type="hidden" name="checkdata1" id="checkdata1" value="apps_name" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="apps_name" class="col-sm-2 control-label col-form-label">apps_name <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="apps_name" id="apps_name" type="text" required="" parsley-type="text" placeholder="input apps name" class="form-control"
                           value="<?php echo (isset($default['apps_name'])) ? $default['apps_name'] : ''; ?>"
                           <?php echo (isset($default['readonly_apps_name'])) ? $default['readonly_apps_name'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="icon" class="col-sm-2 control-label col-form-label">Icon <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="icon" id="icon" type="text" required="" parsley-type="text" placeholder="input icon" class="form-control"
                           value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                           <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="url_apps" class="col-sm-2 control-label col-form-label">Url Apps <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="url_apps" id="url_apps" type="text" required="" parsley-type="text" placeholder="input url_apps" class="form-control"
                           value="<?php echo (isset($default['url_apps'])) ? $default['url_apps'] : ''; ?>"
                           <?php echo (isset($default['readonly_url_apps'])) ? $default['readonly_url_apps'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




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

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="progress_title" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="progress_createby" id="progress_createby" value="<?php echo $this->session->userdata('ses_username'); ?>">

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="progress_title" class="col-sm-2 control-label col-form-label">Progress Title <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="progress_title" id="progress_title" type="text" required="" parsley-type="text" placeholder="Masukan progress_title" class="form-control"
                           value="<?php echo (isset($default['progress_title'])) ? $default['progress_title'] : ''; ?>"
                           <?php echo (isset($default['readonly_progress_title'])) ? $default['readonly_progress_title'] : ''; ?>
                           >
                </div>                        
            </div>

             <div class="form-group row">
                    <label for="progress_content" class="col-sm-2 control-label col-form-label">Content <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="progress_content" class="form-control" rows="3" <?php echo (isset($default['readonly_progress_content'])) ? $default['readonly_progress_content'] : ''; ?> ><?php echo (isset($default['progress_content'])) ? $default['progress_content'] : ''; ?></textarea>
                    </div>  
            </div>

            <div class="form-group row">
                <label for="progress_leader" class="col-sm-2 control-label col-form-label">Nama Karyawan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                     <select id="progress_leader" name="progress_leader" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['namaKaryawan'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="progress_detail_dept" class="col-sm-2 control-label col-form-label">Department <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="progress_detail_dept" id="progress_detail_dept" type="text" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['progress_detail_dept'])) ? $default['progress_detail_dept'] : ''; ?>"
                           <?php echo (isset($default['readonly_progress_detail_dept'])) ? $default['readonly_progress_detail_dept'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="progress_percent" class="col-sm-2 control-label col-form-label">Progress <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="progress_percent" id="progress_percent" type="number" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['progress_percent'])) ? $default['progress_percent'] : ''; ?>"
                           <?php echo (isset($default['readonly_progress_percent'])) ? $default['readonly_progress_percent'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="progress_status" class="col-sm-2 control-label col-form-label">Status <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="progress_status" id="progress_status" type="text" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['progress_status'])) ? $default['progress_status'] : ''; ?>"
                           <?php echo (isset($default['readonly_progress_status'])) ? $default['readonly_progress_status'] : ''; ?>
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

    $("#progress_leader").trigger("chosen:updated");
    $("#progress_leader").chosen();
    
</script>




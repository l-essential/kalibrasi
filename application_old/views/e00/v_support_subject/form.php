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
       <form id="formdata" data-parsley-validate="" novalidate="">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="subject_code" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="subject_by" class="col-3 col-lg-2 col-form-label text-left">Subject By <span style="color:red">*</span></label>
                    <div class="col-9 col-lg-10">
                        <input name="subject_by" minlength="2" maxlength="50" id="subject_by" type="text" required=""  parsley-type="text" placeholder="input location code" class="form-control"
                                value="<?php echo $this->session->userdata('ses_department_name'); ?>" Readonly="Readonly" >
                    </div>                        
                </div>  

                <div class="form-group row">
                    <label for="subject_code" class="col-3 col-lg-2 col-form-label text-left">Subject Code <span style="color:red">*</span></label>
                    <div class="col-9 col-lg-10">
                        <input name="subject_code" minlength="2" maxlength="50" id="subject_code" type="text" required=""  parsley-type="text" placeholder="input subject code" class="form-control"
                                value="<?php echo (isset($default['subject_code'])) ? $default['subject_code'] : ''; ?>"
                                <?php echo (isset($default['readonly_subject_code'])) ? $default['readonly_subject_code'] : ''; ?>
                                >
                    </div>                        
                </div>  

                <div class="form-group row">
                    <label for="subject_name" class="col-3 col-lg-2 col-form-label text-left">Subject <span style="color:red">*</span></label>
                    <div class="col-9 col-lg-10">
                        <input name="subject_name" minlength="2" maxlength="50" id="subject_name" type="text" required=""  parsley-type="text" placeholder="input subject" class="form-control"
                                value="<?php echo (isset($default['subject_name'])) ? $default['subject_name'] : ''; ?>"
                                <?php echo (isset($default['readonly_subject_name'])) ? $default['readonly_subject_name'] : ''; ?>
                                >
                    </div>                        
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
</div>
</div>
</section>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                loading_proces();
                postdata(url_post, formdata, url_index);
              
            }

        });

        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

      function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }
    
</script>

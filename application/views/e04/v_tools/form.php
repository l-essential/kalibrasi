   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="ToController('lessential_pyp/home')">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title ?></h3>
              </div>
              <!-- /.card-header -->
              

            <form id="formdata" data-parsley-validate="" novalidate=""  role="form">
             <div class="card-body">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
             <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="tools_code" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
                <div class="form-group row">
                        <label  for="tools_code" class="col-sm-2 col-form-label">Kode Alat <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input name="tools_code" minlength="1" maxlength="30" id="tools_code" type="text" required=""  parsley-type="text" placeholder="input kode alat" class="form-control"
                                value="<?php echo (isset($default['tools_code'])) ? $default['tools_code'] : ''; ?>"
                                <?php echo (isset($default['readonly_tools_code'])) ? $default['readonly_tools_code'] : ''; ?>
                                >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="tools_name" class="col-sm-2 col-form-label">Nama Alat <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_name" minlength="1" maxlength="30" id="tools_name" type="text" required=""  parsley-type="text" placeholder="input nama alat" class="form-control"
                            value="<?php echo (isset($default['tools_name'])) ? $default['tools_name'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_name'])) ? $default['readonly_tools_name'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="tools_merk" class="col-sm-2 col-form-label">Merk <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_merk" minlength="1" maxlength="30" id="tools_merk" type="text" required=""  parsley-type="text" placeholder="input merk" class="form-control"
                            value="<?php echo (isset($default['tools_merk'])) ? $default['tools_merk'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_merk'])) ? $default['readonly_tools_merk'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="tools_model" class="col-sm-2 col-form-label">Model <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_model" minlength="1" maxlength="30" id="tools_model" type="text" required=""  parsley-type="text" placeholder="input model" class="form-control"
                            value="<?php echo (isset($default['tools_model'])) ? $default['tools_model'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_model'])) ? $default['readonly_tools_model'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="tools_nosertifikat" class="col-sm-2 col-form-label">No Sertifikat <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_nosertifikat" minlength="1" maxlength="30" id="tools_nosertifikat" type="text" required=""  parsley-type="text" placeholder="input no sertifikat" class="form-control"
                            value="<?php echo (isset($default['tools_nosertifikat'])) ? $default['tools_nosertifikat'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_nosertifikat'])) ? $default['readonly_tools_nosertifikat'] : ''; ?>
                            >
                    </div>
                </div>

            <div class="col-sm-12">
                <p class="text-right" id="contentbutton">
                    <button type="submit" id="btnsimpan" class="btn btn-sm btn-space btn-like"><i class='fa fa-save'>&nbsp;Submit</i></button>
                    <button type="reset" id="btnclose" class="btn btn-sm btn-space btn-secondary"><i class='fa fa-reply'>&nbsp;Cancel</i></button>
                </p>
            </div>


        </div>
        </form>
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

        $("#titledata").html('<?php echo $title; ?>');
        
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
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });

    });
    function loading_proces() {
        $("#contentloading").show();
    }
</script>


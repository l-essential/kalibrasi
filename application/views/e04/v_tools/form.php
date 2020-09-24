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
      <form id="formdata" data-parsley-validate="" novalidate=""  role="form" autocomplete="off">
      <div class="card-body">
      <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
      <input type="hidden" name="actiondata" id="actiondata" />
      <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
      <input type="hidden" name="checkdata1" id="checkdata1" value="tools_noseri_model" />
      <input type="hidden" name="checkdata2" id="checkdata2" value="" />
      <input type="hidden" name="checkdata3" id="checkdata3" value="" />
      <input type="hidden" name="checkdata4" id="checkdata4" value="" />
      <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
                <div class="form-group row">
                        <label  for="tools_code" class="col-sm-2 col-form-label">Inisial <span style="color:red">*</span></label>
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
                    <label  for="tools_noseri_model" class="col-sm-2 col-form-label">No Seri / Model <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_noseri_model" minlength="1" maxlength="30" id="tools_noseri_model" type="text" required=""  parsley-type="text" placeholder="input no seri / model" class="form-control"
                            value="<?php echo (isset($default['tools_noseri_model'])) ? $default['tools_noseri_model'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_noseri_model'])) ? $default['readonly_tools_noseri_model'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="tools_no_sertifikat" class="col-sm-2 col-form-label">No Sertifikat <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="tools_no_sertifikat" minlength="1" maxlength="30" id="tools_no_sertifikat" type="text"  parsley-type="text" placeholder="input no sertifikat" class="form-control"
                            value="<?php echo (isset($default['tools_no_sertifikat'])) ? $default['tools_no_sertifikat'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_no_sertifikat'])) ? $default['readonly_tools_no_sertifikat'] : ''; ?>
                            >
                    </div>
                </div>

                 <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
                    </div>

            <div class="col-sm-12">
                <p class="text-right" id="contentbutton">
                    <button type="reset" id="btnclose" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'>&nbsp;Cancel</i></button>
                    <button type="submit" id="btnsimpan" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'>&nbsp;Submit</i></button>
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
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'tools_noseri_model': $("#tools_noseri_model").val()});
            homedetail(getdata);
        }



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                var resultdata = postaction(url_post, formdata);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'tools_noseri_model': resultdata.postdata.tools_noseri_model});
                    homedetail(getdata);
                    
                }
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var tools_id = param.result.tools_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + tools_id);
    }
    
</script>

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
      <input type="hidden" name="checkdata1" id="checkdata1" value="position_code" />
      <input type="hidden" name="checkdata2" id="checkdata2" value="" />
      <input type="hidden" name="checkdata3" id="checkdata3" value="" />
      <input type="hidden" name="checkdata4" id="checkdata4" value="" />
      <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
                <div class="form-group row">
                        <label  for="position_code" class="col-sm-2 col-form-label">Kode Posisi <span style="color:red">*</span></label>
                        <div class="col-sm-4">
                            <input name="position_code" minlength="1" maxlength="30" id="position_code" type="text" required=""  parsley-type="text" placeholder="input kode alat" class="form-control"
                                value="<?php echo (isset($default['position_code'])) ? $default['position_code'] : ''; ?>"
                                <?php echo (isset($default['readonly_position_code'])) ? $default['readonly_position_code'] : ''; ?>
                                >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="position_name" class="col-sm-2 col-form-label">Posisi Alat <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input name="position_name" minlength="1" maxlength="30" id="position_name" type="text" required=""  parsley-type="text" placeholder="input nama alat" class="form-control"
                            value="<?php echo (isset($default['position_name'])) ? $default['position_name'] : ''; ?>"
                            <?php echo (isset($default['readonly_position_name'])) ? $default['readonly_position_name'] : ''; ?>
                            >
                    </div>
                </div>

                 <div class="form-group">
                    <div id="divdetail" style="display:none"></div><br/>
                </div>

            <div class="col-sm-6">
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
            var getdata = postaction('<?php echo $url_getdata; ?>', {'position_code': $("#position_code").val()});
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
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'position_code': resultdata.postdata.position_code});
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
        // $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + tools_id);
    }
    
</script>

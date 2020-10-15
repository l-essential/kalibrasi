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
      <form id="formdata_view" data-parsley-validate="" novalidate=""  role="form" autocomplete="off">
      <div class="card-body">
      <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
      <input type="hidden" name="actiondata_view" id="actiondata_view" />
      <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
      <input type="hidden" name="checkdata1" id="checkdata1" value="vendor_id" />
      <input type="hidden" name="checkdata2" id="checkdata2" value="" />
      <input type="hidden" name="checkdata3" id="checkdata3" value="" />
      <input type="hidden" name="checkdata4" id="checkdata4" value="" />
      <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
                <div class="form-group row">
                        <label  for="vendor_id" class="col-sm-2 col-form-label">Kode Alat <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input name="vendor_id" minlength="1" maxlength="30" id="vendor_id" type="text" required=""  parsley-type="text" placeholder="input kode alat" class="form-control"
                                value="<?php echo (isset($default['vendor_id'])) ? $default['vendor_id'] : ''; ?>"
                                <?php echo (isset($default['readonly_vendor_id'])) ? $default['readonly_vendor_id'] : ''; ?>
                                >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="periode_information" class="col-sm-2 col-form-label">Nama Alat <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="periode_information" minlength="1" maxlength="30" id="periode_information" type="text" required=""  parsley-type="text" placeholder="input nama alat" class="form-control"
                            value="<?php echo (isset($default['periode_information'])) ? $default['periode_information'] : ''; ?>"
                            <?php echo (isset($default['readonly_periode_information'])) ? $default['readonly_periode_information'] : ''; ?>
                            >
                    </div>
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
        var form, formdata_view, url_index, url_post, id, actiondata_view;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata_view = (id == 0) ? 'create' : 'update';
       
        $("#formdata_view").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata_view").val(actiondata_view);
                formdata_view = $("#formdata_view").serialize();
                var resultdata = postaction(url_post, formdata_view);
                _alert(resultdata.msg, resultdata.valid);
            }
        });
        $("#formdata_view").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    
    
</script>

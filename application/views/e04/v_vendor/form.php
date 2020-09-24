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
       <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="vendor_code" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="vendor_name" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">

                  <div class="form-group row">
                        <label  for="vendor_code" class="col-sm-2 col-form-label">Kode Vendor <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input name="vendor_code" minlength="1" maxlength="30" id="vendor_code" type="text" required=""  parsley-type="text" placeholder="input kode vendor" class="form-control"
                                value="<?php echo (isset($default['vendor_code'])) ? $default['vendor_code'] : ''; ?>"
                                <?php echo (isset($default['readonly_vendor_code'])) ? $default['readonly_vendor_code'] : ''; ?>
                                >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_name" class="col-sm-2 col-form-label">Nama Vendor <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_name" minlength="5" id="vendor_name" type="text" required=""  parsley-type="text" placeholder="input nama vendor" class="form-control"
                            value="<?php echo (isset($default['vendor_name'])) ? $default['vendor_name'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_name'])) ? $default['readonly_vendor_name'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_address" class="col-sm-2 col-form-label">Alamat Vendor <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_address" minlength="5" id="vendor_address" type="text" required=""  parsley-type="text" placeholder="input alamat" class="form-control"
                            value="<?php echo (isset($default['vendor_address'])) ? $default['vendor_address'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_address'])) ? $default['readonly_vendor_address'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_office_phone" class="col-sm-2 col-form-label">Handphone <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_office_phone" minlength="1" maxlength="30" id="vendor_office_phone" type="number" required=""  parsley-type="text" placeholder="input Office phone" class="form-control"
                            value="<?php echo (isset($default['vendor_office_phone'])) ? $default['vendor_office_phone'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_office_phone'])) ? $default['readonly_vendor_office_phone'] : ''; ?>
                            >
                    </div>
                </div>

                 <div class="form-group row">
                    <label  for="vendor_office_phone2" class="col-sm-2 col-form-label">Office Phone </label>
                    <div class="col-sm-10">
                        <input name="vendor_office_phone2" minlength="1" maxlength="30" id="vendor_office_phone2" type="number"  parsley-type="text" placeholder="input Office phone" class="form-control"
                            value="<?php echo (isset($default['vendor_office_phone2'])) ? $default['vendor_office_phone2'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_office_phone2'])) ? $default['readonly_vendor_office_phone2'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_email" class="col-sm-2 col-form-label">Email </label>
                    <div class="col-sm-10">
                        <input name="vendor_email" minlength="1" maxlength="30" id="vendor_email" type="email"  parsley-type="text" placeholder="input emain vendor" class="form-control"
                            value="<?php echo (isset($default['vendor_email'])) ? $default['vendor_email'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_email'])) ? $default['readonly_vendor_email'] : ''; ?>
                            >
                    </div>
                </div>


                     <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
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
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'vendor_code': $("#vendor_code").val()});
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
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'vendor_code': resultdata.postdata.vendor_code});
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
        var vendor_id = param.result.vendor_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + vendor_id);
    }
    
</script>

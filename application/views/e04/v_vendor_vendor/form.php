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
                <input type="hidden" name="checkdata1" id="checkdata1" value="vendor_code" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
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
                        <input name="vendor_name" minlength="1" maxlength="30" id="vendor_name" type="text" required=""  parsley-type="text" placeholder="input nama vendor" class="form-control"
                            value="<?php echo (isset($default['vendor_name'])) ? $default['vendor_name'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_name'])) ? $default['readonly_vendor_name'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_address" class="col-sm-2 col-form-label">Alamat Vendor <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_address" minlength="1" maxlength="30" id="vendor_address" type="text" required=""  parsley-type="text" placeholder="input alamat vendor" class="form-control"
                            value="<?php echo (isset($default['vendor_address'])) ? $default['vendor_address'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_address'])) ? $default['readonly_vendor_address'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_phone" class="col-sm-2 col-form-label">Handphone <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_phone" minlength="1" maxlength="30" id="vendor_phone" type="number" required=""  parsley-type="text" placeholder="input handphone vendor" class="form-control"
                            value="<?php echo (isset($default['vendor_phone'])) ? $default['vendor_phone'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_phone'])) ? $default['readonly_vendor_phone'] : ''; ?>
                            >
                    </div>
                </div>

                 <div class="form-group row">
                    <label  for="vendor_office_phone" class="col-sm-2 col-form-label">Office Phone </label>
                    <div class="col-sm-10">
                        <input name="vendor_office_phone" minlength="1" maxlength="30" id="vendor_office_phone" type="number"  parsley-type="text" placeholder="input Office phone" class="form-control"
                            value="<?php echo (isset($default['vendor_office_phone'])) ? $default['vendor_office_phone'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_office_phone'])) ? $default['readonly_vendor_office_phone'] : ''; ?>
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


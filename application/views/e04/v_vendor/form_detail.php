
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
        <form id="formdatadetail" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="vendor_detail_name" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="vendor_id" id="vendor_id" value="<?php echo $vendor_id; ?>" />

            

                <div class="form-group row">
                        <label  for="vendor_detail_name" class="col-sm-2 col-form-label">User Name <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input name="vendor_detail_name" minlength="1" maxlength="30" id="vendor_detail_name" type="text" required=""  parsley-type="text" placeholder="input name" class="form-control"
                                value="<?php echo (isset($default['vendor_detail_name'])) ? $default['vendor_detail_name'] : ''; ?>"
                                <?php echo (isset($default['readonly_vendor_detail_name'])) ? $default['readonly_vendor_detail_name'] : ''; ?>
                                >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_detail_phone" class="col-sm-2 col-form-label">User Phone 1 <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_detail_phone" minlength="0" maxlength="30" id="vendor_detail_phone" type="number" required=""  parsley-type="text" placeholder="input number phone" class="form-control"
                            value="<?php echo (isset($default['vendor_detail_phone'])) ? $default['vendor_detail_phone'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_detail_phone'])) ? $default['readonly_vendor_detail_phone'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_detail_phone2" class="col-sm-2 col-form-label">User Phone 2 <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_detail_phone2" minlength="0" maxlength="30" id="vendor_detail_phone2" type="number"  parsley-type="text" placeholder="input number phone" class="form-control"
                            value="<?php echo (isset($default['vendor_detail_phone2'])) ? $default['vendor_detail_phone2'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_detail_phone2'])) ? $default['readonly_vendor_detail_phone2'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="form-group row">
                    <label  for="vendor_detail_email" class="col-sm-2 col-form-label">User Email <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="vendor_detail_email" minlength="1" maxlength="30" id="vendor_detail_email" type="email" required=""  parsley-type="text" placeholder="input email" class="form-control"
                            value="<?php echo (isset($default['vendor_detail_email'])) ? $default['vendor_detail_email'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_detail_email'])) ? $default['readonly_vendor_detail_email'] : ''; ?>
                            >
                    </div>
                </div>

                 <div class="form-group row">
                    <label  for="vendor_detail_email2" class="col-sm-2 col-form-label">User Email 2 </label>
                    <div class="col-sm-10">
                        <input name="vendor_detail_email2" minlength="1" maxlength="30" id="vendor_detail_email2" type="email"  parsley-type="text" placeholder="input email" class="form-control"
                            value="<?php echo (isset($default['vendor_detail_email2'])) ? $default['vendor_detail_email2'] : ''; ?>"
                            <?php echo (isset($default['readonly_vendor_detail_email2'])) ? $default['readonly_vendor_detail_email2'] : ''; ?>
                            >
                    </div>
                </div>

                <div class="col-sm-12">
                    <p class="text-right">
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
            var form, formdatadetail, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdatadetail");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondatadetail").val(actiondata);
                    formdatadetail = form.serialize();
                    postdata(url_post, formdatadetail, url_index);
                }
            });
            $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });
        });

    </script>


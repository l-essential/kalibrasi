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
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="username" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>

            <div class="form-group row">
                <label for="username" class="col-sm-2 text-right control-label col-form-label">Username</label><span style="color:red">*</span>
                <div class="col-sm-7">
                    <input name="username" id="username" readonly="" type="text" required="" parsley-type="text" placeholder="Fill username" class="form-control"
                           value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                           <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="oldpassword" class="col-sm-2 text-right control-label col-form-label">Old Password</label><span style="color:red">*</span>
                <div class="col-sm-7">
                    <input name="oldpassword" id="oldpassword" type="text" required="" parsley-type="text" placeholder="Fill old password" class="form-control"
                           value="<?php echo (isset($default['oldpassword'])) ? $default['oldpassword'] : ''; ?>"
                           <?php echo (isset($default['readonly_oldpassword'])) ? $default['readonly_oldpassword'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="newpassword" class="col-sm-2 text-right control-label col-form-label">New Password</label><span style="color:red">*</span>
                <div class="col-sm-7">
                    <input name="newpassword" id="newpassword" type="text" minlength="6" maxlength="8" required="" parsley-type="text" placeholder="Fill new password" class="form-control"
                           value="<?php echo (isset($default['newpassword'])) ? $default['newpassword'] : ''; ?>"
                           <?php echo (isset($default['readonly_newpassword'])) ? $default['readonly_newpassword'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div style="padding-left:185px;">
                <button type="submit" id="btnsubmitform" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
            </div>
    </div>
</form>
 </div>
                <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo site_url('Login/postdatachangepassword') ?>';
        url_index = '<?php echo site_url('Dashboard') ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                //postdata(url_post, formdata, url_index);
                var returndata = postaction(url_post, formdata);
                if (returndata.valid == true) {
                    _alert(returndata.msg + ", in 3 seconds the system will automatically log out,please login with new password", returndata.valid);
                    setTimeout(function () {
                       Logoutjs();
                    }, 3000);

                } else {
                    _alert(returndata.msg, returndata.valid);
                }


            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });
</script>





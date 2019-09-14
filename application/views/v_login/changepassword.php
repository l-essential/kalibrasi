
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
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
                    <input name="newpassword" id="newpassword" type="text" required="" parsley-type="text" placeholder="Fill new password" class="form-control"
                           value="<?php echo (isset($default['newpassword'])) ? $default['newpassword'] : ''; ?>"
                           <?php echo (isset($default['readonly_newpassword'])) ? $default['readonly_newpassword'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="text-center">
                <button type="submit" id="btnsubmitform"  class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
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





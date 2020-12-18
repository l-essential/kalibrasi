<style>
    .parsley-required{

        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
</style>    


<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <p class='fa fa-edit'></p> <?php echo $title; ?>
        </div>
        <div class="panel-body">
            <form id="formdata" data-parsley-validate="" novalidate="">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" /> 

                <div class="main-content container-fluid">                     
                    <div class="form-group row">
                        <label for="username" class="col-3 col-lg-2 col-form-label text-right">Username</label>
                        <div class="col-9 col-lg-10">
                            <input name="username" id="username" readonly="" type="text" required="" parsley-type="text" placeholder="Fill username" class="form-control"
                                   value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                                   <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                                   >
                        </div>
                    </div>                  
                    <div class="form-group row">
                        <label for="oldpassword" class="col-3 col-lg-2 col-form-label text-right">Old Password</label>
                        <div class="col-9 col-lg-10">
                            <input name="oldpassword" id="oldpassword" type="text" required="" parsley-type="text" placeholder="Fill old password" class="form-control"
                                   value="<?php echo (isset($default['oldpassword'])) ? $default['oldpassword'] : ''; ?>"
                                   <?php echo (isset($default['readonly_oldpassword'])) ? $default['readonly_oldpassword'] : ''; ?>
                                   >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newpassword" class="col-3 col-lg-2 col-form-label text-right">New Password</label>
                        <div class="col-9 col-lg-10">
                            <input name="newpassword" id="newpassword" type="text" required="" parsley-type="text" placeholder="Fill new password" class="form-control"
                                   value="<?php echo (isset($default['newpassword'])) ? $default['newpassword'] : ''; ?>"
                                   <?php echo (isset($default['readonly_newpassword'])) ? $default['readonly_newpassword'] : ''; ?>
                                   >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="confirmnewpassword" class="col-3 col-lg-2 col-form-label text-right">Confirm new password</label>
                        <div class="col-9 col-lg-10">
                            <input name="confirmnewpassword" id="confirmnewpassword" type="text" required="" parsley-type="text" placeholder="Fill confirm new password" class="form-control"
                                   value="<?php echo (isset($default['confirmnewpassword'])) ? $default['confirmnewpassword'] : ''; ?>"
                                   <?php echo (isset($default['readonly_confirmnewpassword'])) ? $default['readonly_confirmnewpassword'] : ''; ?>
                                   >
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary"><span class='fa fa-save'></span> Save</button>
                    </p>
                </div>
            </form>        
            <div class="panel-footer">
                &nbsp;
            </div>
        </div>
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
                    //postdata(url_post, formdata, url_index);
                    var returndata = postaction(url_post, formdata);
                    if (returndata.valid == true) {
                        _alert(returndata.msg + ", in 3 seconds the system will automatically log out,please login with new password", returndata.valid);
                        setTimeout(function () {
                            window.location = '<?php echo site_url('Login/logout') ?>';
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

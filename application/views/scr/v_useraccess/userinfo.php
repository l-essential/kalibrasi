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
                        <label class="col-3 col-lg-2 col-form-label text-right" for="id_role">Role Application<span class="err_id_role required">*</span>
                        </label>
                        <div class="col-9 col-lg-10">
                            <select id="id_role" name="id_role" class="form-control" disabled="">
                                <?php foreach ($default['id_role'] as $row) { ?>

                                    <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                            <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                        <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                                <?php } ?>
                            </select>   
                        </div>
                    </div>  
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
                        <label for="type" class="col-3 col-lg-2 col-form-label text-right">Fullname</label>
                        <div class="col-9 col-lg-10">
                            <input name="fullname" id="fullname" type="text" required="" parsley-type="text" placeholder="Fill fullname" class="form-control"
                                   value="<?php echo (isset($default['fullname'])) ? $default['fullname'] : ''; ?>"
                                   <?php echo (isset($default['readonly_fullname'])) ? $default['readonly_fullname'] : ''; ?>
                                   >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                        <div class="col-9 col-lg-10">
                            <input name="email" id="email" type="text" required="" parsley-type="text" placeholder="Fill email" class="form-control"
                                   value="<?php echo (isset($default['email'])) ? $default['email'] : ''; ?>"
                                   <?php echo (isset($default['readonly_email'])) ? $default['readonly_email'] : ''; ?>
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


            $('#holidaydate').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true
            });


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
                        _alert(returndata.msg + ", The information will change after logging in again", returndata.valid);
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

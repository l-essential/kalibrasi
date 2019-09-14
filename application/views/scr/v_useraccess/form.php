
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
                <label for="id_role" class="col-sm-2 text-right control-label col-form-label">Role Application</label><span style="color:red">*</span>
                <div class="col-sm-3">
                     <select id="id_role" name="id_role" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['id_role'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="username" class="col-sm-2 text-right control-label col-form-label">Username</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="username" id="username" type="text" required="" parsley-type="text" placeholder="Masukan username" class="form-control"
                           value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                           <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="fullname" class="col-sm-2 text-right control-label col-form-label">Nama Lengkap</label><span style="color:red">*</span>
                <div class="col-sm-8">
                    <input name="fullname" id="fullname" type="text" required="" parsley-type="text" placeholder="Masukan nama lengkap" class="form-control"
                           value="<?php echo (isset($default['fullname'])) ? $default['fullname'] : ''; ?>"
                           <?php echo (isset($default['readonly_fullname'])) ? $default['readonly_fullname'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="password" class="col-sm-2 text-right control-label col-form-label">Password</label>
                <div class="col-sm-3">
                    <input name="password" id="password" type="password"  parsley-type="text" placeholder="Masukan password" class="form-control"
                           value="<?php echo (isset($default['password'])) ? $default['password'] : ''; ?>"
                           <?php echo (isset($default['readonly_password'])) ? $default['readonly_password'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label><span style="color:red">*</span>
                <div class="col-sm-6">
                    <input name="email" id="email" type="text" required="" parsley-type="text" placeholder="Masukan email" class="form-control"
                           value="<?php echo (isset($default['email'])) ? $default['email'] : ''; ?>"
                           <?php echo (isset($default['readonly_email'])) ? $default['readonly_email'] : ''; ?>
                           >
                </div>                        
            </div> 
             <div class="form-group row">
                <label for="no_handphone" class="col-sm-2 text-right control-label col-form-label">No Handphone</label>
                <div class="col-sm-3">
                    <input name="no_handphone" id="no_handphone" type="text" parsley-type="text" placeholder="Masukan no handhone" class="form-control"
                           value="<?php echo (isset($default['no_handphone'])) ? $default['no_handphone'] : ''; ?>"
                           <?php echo (isset($default['readonly_no_handphone'])) ? $default['readonly_no_handphone'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="text-center">
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    infoshorcutform();
</script>




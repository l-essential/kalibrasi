
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
            
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
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
            
            <div class="col-9 col-lg-5">                            
                <input type="text" id="register_code"  name="register_code" class="form-control"  placeholder=" -AUTO NUMBER- " readonly=""
                        value="<?php echo (isset($default['register_code'])) ? $default['register_code'] : ''; ?>"
                        <?php echo (isset($default['readonly_register_code'])) ? $default['readonly_register_code'] : ''; ?>      
                        />  
            </div>

              <div class="form-group row">
                  <div class="col-sm-10">
                      <input name="register_date" minlength="1" maxlength="30" id="register_date" type="hidden" required=""  parsley-type="text" placeholder="input pembelian alat" class="form-control"
                    value="<?php echo (isset($default['register_date'])) ? $default['register_date'] : ''; ?>"
                    <?php echo (isset($default['readonly_register_date'])) ? $default['readonly_register_date'] : ''; ?>
                      >
                      </div>
            </div> 
             
             <div class="form-group row">
                <label for="namaKaryawan" class="col-sm-2 control-label col-form-label">Nama Karyawan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                     <select id="namaKaryawan" name="namaKaryawan" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['namaKaryawan'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="namaKaryawan" class="col-sm-2 control-label col-form-label">Divisi <span style="color:red">*</span></label>
                <div class="col-sm-10">
                     <select id="department_name" name="department_name" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['department_name'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="position_name" class="col-sm-2 control-label col-form-label">Jabatan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                     <select id="position_name" name="position_name" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['position_name'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="id_role" class="col-sm-2 control-label col-form-label">Role Application <span style="color:red">*</span></label>
                <div class="col-sm-10">
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
                <label for="username" class="col-sm-2 control-label col-form-label">Username <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="username" id="username" type="text" required="" parsley-type="text" placeholder="Masukan username" class="form-control"
                           value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                           <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                           >
                </div>                        
            </div> 
            
            <div class="form-group row">
                <label for="password" class="col-sm-2 control-label col-form-label">Password <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="password" id="password" type="password"  parsley-type="text" placeholder="Masukan password" class="form-control"
                           value="<?php echo (isset($default['password'])) ? $default['password'] : ''; ?>"
                           <?php echo (isset($default['readonly_password'])) ? $default['readonly_password'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="email" class="col-sm-2 control-label col-form-label">Email <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="email" id="email" type="email" required="" parsley-type="text" placeholder="Masukan email" class="form-control"
                           value="<?php echo (isset($default['email'])) ? $default['email'] : ''; ?>"
                           <?php echo (isset($default['readonly_email'])) ? $default['readonly_email'] : ''; ?>
                           >
                </div>                        
            </div>

             <div class="form-group row">
                <label for="email" class="col-sm-2 control-label col-form-label"></label>
                 <div class="demo-checkbox">
                 <p>&emsp;Ijinkan menerima notifikasi email...? chehklis bila ya 
                        <input type="checkbox" id="notif_email" name="notif_email" value="1"/>
                        </p>
                    </div>                               
            </div>

             <div class="form-group row">
                <label for="no_handphone" class="col-sm-2 control-label col-form-label">No Handphone</label>
                <div class="col-sm-10">
                    <input name="no_handphone" id="no_handphone" type="number" parsley-type="text" placeholder="Masukan no handhone" class="form-control"
                           value="<?php echo (isset($default['no_handphone'])) ? $default['no_handphone'] : ''; ?>"
                           <?php echo (isset($default['readonly_no_handphone'])) ? $default['readonly_no_handphone'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                    <label for="note" class="col-sm-2 control-label col-form-label">Note <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="note" class="form-control" rows="3" <?php echo (isset($default['readonly_note'])) ? $default['readonly_note'] : ''; ?> ><?php echo (isset($default['note'])) ? $default['note'] : ''; ?></textarea>
                    </div>  
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 control-label col-form-label"></label>
                <div class="col-sm-3">
                    <div class="demo-checkbox">
                        <input type="checkbox" id="status_login" name="status_login" value="1"/>
                        <label for="status_login">Active Login</label>
                    </div>                        
                </div>                        
            </div> 

              


            <div class="col-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
              </p>
            </div>
    </div>
</form>
</div>
</div>
</div>
</section>


<script type="text/javascript">
 $('#register_date').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    if (actiondata == 'update') {
        var status_login = '<?php echo $default['status_login']; ?>';
        if (status_login == '1') {
            $("#status_login").prop("checked", true);
        }
    }

    if (actiondata == 'update') {
        var notif_email = '<?php echo $default['notif_email']; ?>';
        if (notif_email == '1') {
            $("#notif_email").prop("checked", true);
        }
    }

    $("#namaKaryawan").trigger("chosen:updated");
    $("#namaKaryawan").chosen();
    $("#department_name").chosen();
    $("#position_name").chosen();
    $("#id_role").chosen();
</script>




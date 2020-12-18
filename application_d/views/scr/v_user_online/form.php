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
              
        <div id="content_register">
       <div class="card-body">
            <form id="formdata" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />

            <input type="hidden" name="nama_gambar" id="nama_gambar" value="AdminLTELogo.png" />
            <input type="hidden" name="lokasi_gambar" id="lokasi_gambar" value="public/images/scr/useraccess/AdminLTELogo.png" />

            <div class="col-9 col-lg-5">                            
                <input id="register_code" type="hidden" name="register_code" class="form-control"  placeholder=" -AUTO NUMBER- " readonly=""
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
                    <input name="username" id="username" type="text"  parsley-type="text" placeholder="Masukan username" class="form-control"
                           value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                           <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                           >
                </div>                        
            </div> 
            
            <div class="form-group row" id="hidden1">
                <label for="password" class="col-sm-2 control-label col-form-label">Password <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="password" id="password" type="password"  parsley-type="text" placeholder="Masukan password" class="form-control"
                           value="<?php echo (isset($default['password'])) ? $default['password'] : ''; ?>"
                           <?php echo (isset($default['readonly_password'])) ? $default['readonly_password'] : ''; ?>
                           >
                </div>                       
            </div>

            <div class="form-group row" id="hidden2">
                <label for="email" class="col-sm-2 control-label col-form-label"></label>
                <div class="col-sm-3">
                <div class="demo-checkbox">
                    <input type="checkbox" onclick="myFunction()"> Show Password 
                </div>
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

            <div class="form-group row" id="hidden3">
                <label for="" class="col-sm-2 control-label col-form-label"></label>
                <div class="col-sm-3">
                    <div class="demo-checkbox">
                        <input type="checkbox" id="status_login" name="status_login" value="1"/> Active Login
                    </div>                        
                </div>                        
            </div>

            <div class="col-sm-12">
                <p class="text-right" id="contentbutton">
                    <button type="reset" onclick="ToController('scr/Useraccess')" class="btn btn-sm btn-secondary"> <i class="fas fa-times"></i> Cancel</button>
                    <button type="submit" id="btnsimpan" class="btn btn-sm btn-like"> <i class="fas fa-check"></i> Submit</button>
                  </p>  
            </div>
        </div>

    </form>
    </div>
    <div id="contect_selesairegister" style="display: none;">
        <div class="jumbotron" style="background-color: #ffffff;">
            <div class="container">
                <p class="text-center"><h3 style="text-align: center;">Registrasi selesai</h3></p>
                <p class="text-center">Silakan cek email anda untuk mendapatkan informasi password dan tunggu persetujuan</p>
                <p class="text-center">Terima kasih
                 
                    <button type="submit" onclick="ToController('scr/useraccess')" class="btn btn-sm btn-secondary"> <i class="fas fa-home"></i> Back to home</button>
                  </p> 
        </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</div>
</div>

</section>
</div>




<script type="text/javascript">
 password = '<?php echo $this->session->userdata('ses_department_name') == 'IT'; ?>';
    if (password == true) {
        $("#hidden1,#hidden2,#hidden3").show();
    } else {
        $("#hidden1,#hidden2,#hidden3").hide();
    }

    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

$('#register_date').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

    $(document).ready(function () {



        var form, formdata, url_index, url_post, id, actiondata;
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

        $("#titledata").html('<?php echo $title; ?>');

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                // formdata = $("#formdata").serialize();
                // loading_proces();
                // postdata(url_post, formdata, url_index);
                var formdata = $("#formdata").serialize();
                var resultformdata = postaction('<?php echo site_url('scr/Useraccess/postdata'); ?>', formdata);

                 if (resultformdata.valid == true) {
                        loading_proces();
                        _alert("Register data berhasil,silakan cek email untuk mendapatkan informasi account login", true);
                        var resultformdataemail = postaction('<?php echo site_url('scr/Useraccess/sendemailregister'); ?>', formdata);
                        _alert(resultformdataemail.message, resultformdataemail.valid);
                        $("#content_register").hide();
                        $("#contect_selesairegister").show();

                    } else {
                        _alert(resultformdata.msg);
                    }
            }


        });
        //  function submitformregister() {
        //         var formregister = $("#formdataregister");
        //         formregister.parsley().validate();
        //         if (formregister.parsley().isValid()) {
        //             var formdataregister = $("#formdataregister").serialize();
        //             var resultresgister = postaction('<?php echo site_url('Member/postdata'); ?>', formdataregister);

        //             if (resultresgister.valid == true) {
        //                 _alert("Register data berhasil,silakan cek email untuk mendapatkan informasi account login", true);
        //                 var resultresgisteremail = postaction('<?php echo site_url('Member/sendemailregister'); ?>', formdataregister);
        //                 _alert(resultresgisteremail.message, resultresgisteremail.valid);
        //                 $("#content_register").hide();
        //                 $("#contect_selesairegister").show();

        //             } else {
        //                 _alert(resultresgister.msg);
        //             }

        //         }
        //         return false;

        //     }
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });


    });
    function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }

    $("#namaKaryawan").trigger("chosen:updated");
    $("#namaKaryawan").chosen();
    $("#department_name").chosen();
    $("#position_name").chosen();
    $("#id_role").chosen();
</script>

<?php 
      $templates = base_url() . 'allassets/';
      $customes = base_url() . 'public/';
      $basedata = base_url() . 'public/';
 ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo $templates ?>dist/img/AdminLTELogo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $this->session->userdata('ses_namaKaryawan'); ?></h3>
                
                <p class="text-muted text-center"><?php echo $this->session->userdata('ses_email'); ?></p>
                <p class="text-muted text-center"><?php echo $this->session->userdata('ses_namaDepartment'); ?></p>
                <a href="#" class="btn btn-sm btn-like btn-block"><b>Change images</b></a>

                <!-- <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right"><?php echo $this->session->userdata('ses_username'); ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
            
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
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

             <!-- <?php
                    if ($id > 0) {
                        $image = "<div class='form-group row'><label for='images' class='col-3 col-lg-2 col-form-label text-right'>Gambar</label><div class='col-9 col-lg-10'><img src='$file_images' width='300' height='150'></div></div>";
                        echo $image;
                    }
                    ?>  -->
            <div class="form-group row">
            <label for="namaKaryawan" class="col-sm-3 control-label col-form-label">Upload Images <span style="color:red">*</span></label>
                <input type="file" name="file">
            </div>
             
             <div class="form-group row">
                <label for="namaKaryawan" class="col-sm-3 control-label col-form-label">Nama Karyawan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                     <select id="namaKaryawan" name="namaKaryawan" required=""  class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['namaKaryawan'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="namaKaryawan" class="col-sm-3 control-label col-form-label">Divisi <span style="color:red">*</span></label>
                <div class="col-sm-9">
                     <select id="department_name" name="department_name" required="" Readonly class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['department_name'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                </div>                        
            </div>

            <div class="form-group row">
                <label for="id_role" class="col-sm-3 control-label col-form-label">Role Application <span style="color:red">*</span></label>
                <div class="col-sm-9">
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
                <label for="username" class="col-sm-3 control-label col-form-label">Username <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input name="username" id="username" type="text" required="" parsley-type="text" placeholder="Masukan username" class="form-control"
                           value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                           <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                           >
                </div>                        
            </div> 
            
            <div class="form-group row">
                <label for="email" class="col-sm-3 control-label col-form-label">Email <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input name="email" id="email" type="email" required="" parsley-type="text" placeholder="Masukan email" class="form-control"
                           value="<?php echo (isset($default['email'])) ? $default['email'] : ''; ?>"
                           <?php echo (isset($default['readonly_email'])) ? $default['readonly_email'] : ''; ?>
                           >
                </div>                        
            </div>

             <div class="form-group row">
                <label for="email" class="col-sm-3 control-label col-form-label"></label>
                 <div class="demo-checkbox">
                 <p>&emsp;Ijinkan menerima notifikasi email...? chehklis bila ya 
                        <input type="checkbox" id="notif_email" name="notif_email" value="1"/>
                        </p>
                    </div>                               
            </div>

             <div class="form-group row">
                <label for="no_handphone" class="col-sm-3 control-label col-form-label">No Handphone</label>
                <div class="col-sm-9">
                    <input name="no_handphone" id="no_handphone" type="number" parsley-type="text" placeholder="Masukan no handhone" class="form-control"
                           value="<?php echo (isset($default['no_handphone'])) ? $default['no_handphone'] : ''; ?>"
                           <?php echo (isset($default['readonly_no_handphone'])) ? $default['readonly_no_handphone'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                    <label for="note" class="col-sm-3 control-label col-form-label">Note <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="note" class="form-control" rows="3" <?php echo (isset($default['readonly_note'])) ? $default['readonly_note'] : ''; ?> ><?php echo (isset($default['note'])) ? $default['note'] : ''; ?></textarea>
                    </div>  
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 control-label col-form-label"></label>
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
                    <!-- /.post -->
                  </div>
                 

                 
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            $("#actiondata").val(actiondata);

            $.ajax({
                url: url_post,
                type: "post",
                data: new FormData(this),
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:
                        function (data, text)
                        {

                            hideloading();
                            _alert(data.msg, data.valid);
                            if (data.valid == true) {
                                ToContent(url_index);
                            }
                        },
                error: function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
            });
            return false;


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });
</script>


    <!-- <script type="text/javascript">
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
    </script> -->

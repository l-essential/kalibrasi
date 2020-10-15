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
              <li class="breadcrumb-item"><a href="#" onclick="toIndex()">Home</a></li>
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
            <div class="card-body">
              <!-- /.card-header -->
            <form id="formdata" data-parsley-validate="" novalidate="">
                <div class="card-body">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="status_login" id="status_login" value="1" />

                    <div class="form-group row">
                        <div class="col-9 col-sm-9">
                            <select id="id_role" name="id_role" class="form-control" disabled="" style='display:none'>
                                <?php foreach ($default['id_role'] as $row) { ?>

                                    <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                            <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                        <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                                <?php } ?>
                            </select>   
                        </div>
                    </div>  

                    <div class="form-group row">
                        <label for="register_code" class="col-2 col-lg-2 col-form-label">Register ID</label>
                        <div class="col-9 col-sm-9">
                            <input name="register_code" id="register_code" readonly="" type="text" required="" parsley-type="text" placeholder="Fill username" class="form-control"
                                   value="<?php echo (isset($default['register_code'])) ? $default['register_code'] : ''; ?>"
                                   <?php echo (isset($default['readonly_register_code'])) ? $default['readonly_register_code'] : ''; ?>
                                   >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="register_code" class="col-2 col-lg-2 col-form-label">Register Date</label>
                        <div class="col-9 col-sm-9">
                            <input name="register_date" id="register_date" readonly="" type="text" required="" parsley-type="text" placeholder="Fill username" class="form-control"
                                   value="<?php echo (isset($default['register_code'])) ? $default['register_date'] : ''; ?>"
                                   <?php echo (isset($default['readonly_register_date'])) ? $default['readonly_register_date'] : ''; ?>
                                   >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-2 col-lg-2 col-form-label">Username</label>
                        <div class="col-9 col-sm-9">
                            <input name="username" id="username" readonly="" type="text" required="" parsley-type="text" placeholder="Fill username" class="form-control"
                                   value="<?php echo (isset($default['username'])) ? $default['username'] : ''; ?>"
                                   <?php echo (isset($default['readonly_username'])) ? $default['readonly_username'] : ''; ?>
                                   >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-2 col-lg-2 col-form-label">namaKaryawan</label>
                        <div class="col-9 col-sm-9">
                            <input name="namaKaryawan" id="namaKaryawan" type="text" required="" parsley-type="text" placeholder="Fill namaKaryawan" class="form-control"
                                   value="<?php echo (isset($default['namaKaryawan'])) ? $default['namaKaryawan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_namaKaryawan'])) ? $default['readonly_namaKaryawan'] : ''; ?>
                                  Readonly='readonly' >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-2 col-lg-2 col-form-label">Email</label>
                        <div class="col-9 col-sm-9">
                            <input name="email" id="email" type="text" required="" parsley-type="text" placeholder="Fill email" class="form-control" readonly='readonly'
                                   value="<?php echo (isset($default['email'])) ? $default['email'] : ''; ?>"
                                   <?php echo (isset($default['readonly_email'])) ? $default['readonly_email'] : ''; ?>
                                   >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="type" class="col-2 col-lg-2 col-form-label">Email</label>
                        <div class="col-9 col-sm-9">
                        <div id="map_modal" style="height:300px;width:100%"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-2 col-lg-2 col-form-label"></label>  
                    <div class="col-4 col-lg-4">
                    <input type="text" name="latitude" id="latitude" class="form-control" placeholder="auto" readonly=""
                     value="<?php echo (isset($default['latitude'])) ? $default['latitude'] : ''; ?>"
                                   <?php echo (isset($default['readonly_latitude'])) ? $default['readonly_latitude'] : ''; ?>
                                   >
                    </div>
                    <div class="col-4 col-lg-5">
                    <input type="text" name="longitude" id="longitude" class="form-control" placeholder="auto" readonly=""
                     value="<?php echo (isset($default['longitude'])) ? $default['longitude'] : ''; ?>"
                                   <?php echo (isset($default['readonly_longitude'])) ? $default['readonly_longitude'] : ''; ?>
                                   >
                    </div>
                    </div>
                   
                    <div class="form-group row">
                            <label for="user_address" class="col-lg-2 control-label col-form-label">user_address </label>
                            <div class="col-sm-9">
                                <textarea name="user_address" class="form-control" rows="3" <?php echo (isset($default['readonly_user_address'])) ? $default['readonly_user_address'] : ''; ?> ><?php echo (isset($default['user_address'])) ? $default['user_address'] : ''; ?></textarea>
                            </div>  
                    </div>

                   
                </div>

                <div class="col-sm-12">
                    <p class="text-right">
                      <button class="btn btn-sm btn-space btn-secondary" onclick="ToController('scr/Useraccess/home_info', '')"><span class='fas fa-check'></span> Back to profile</button>
                      <button type="submit" class="btn btn-sm btn-space btn-like"><span class='fas fa-check'></span> Submit</button>
                    </p>
                </div>

                </div>
            </form> </div>
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
                    postdata(url_post, formdata, url_index);
                    // var returndata = postaction(url_post, formdata, url_index);
                    // if (returndata.valid == true) {
                    //     _alert(returndata.msg + ", The information will change after logging in again", returndata.valid);
                    // } else {
                    //     _alert(returndata.msg, returndata.valid);
                    // }


                }
            });
            $("#formdata").on('reset', function (e) {
                e.preventDefault();
                ToContent(url_index);
            });

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
           var office =  {lat: -6.3369066, lng: 106.674523};
        var map_modal = new google.maps.Map(document.getElementById('map_modal'), {
            zoom: 15,
            //mapTypeId: google.maps.MapTypeId.HYBRID,
            center: office,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scaleControl: false,
            zoomControl: false,
            // zoomControlOptions: {
            //     position: google.maps.ControlPosition.LEFT_BOTTOM
            // },
            //mapTypeControl: false,
            // mapTypeControlOptions: {
            //     style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            //     position: google.maps.ControlPosition.LEFT_BOTTOM
            // },
            // streetViewControl: false,
            // fullscreenControl: false
        });

        google.maps.event.addListener(map_modal, 'click', function(event) {
        modalMarker.setPosition(event.latLng);
          document.getElementById('latitude').value = event.latLng.lat();
          document.getElementById('longitude').value = event.latLng.lng();
        });

        var contentString = '<h2>Hello Dunia!</h2>';
        var modalMarker = new google.maps.Marker({
            position: office,
            map: map_modal,
            icon: 'allassets/dist/img/location-pin.png'
        });

          
        });
    </script>

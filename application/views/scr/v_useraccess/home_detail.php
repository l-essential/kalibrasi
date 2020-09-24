<?php 
      $templates = base_url() . 'allassets/';
      $customes = base_url() . 'public/';
      $basedata = base_url() . 'public/';
 ?>
 <style>

#myImg {
  border-radius: 50%;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal-custem {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 115px; /* Location of the box */
  left:100px;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-contents {
  margin: auto;
  display: block;
  width: 27%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close-custem {
  position: absolute;
  top: 65px;
  right: 485px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

 .gal {
	-webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
	}	
	.gal img{ width: 100%; padding: 7px 0;}
    @media (max-width: 500px) {
		.gal {
	-webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;
	  }
		
	}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-user"></i> Profile</h1>
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
           <div class="sticky-top mb-3" style="top:58px;">

            <!-- Profile Image -->
            <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
              <div class="card-body box-profile">
                <div class="text-center">
                  <a href="#"  onclick="ToController('scr/Useraccess/Userimage')">
                  <i class="float-left" style="color: #6c757d;">
                  <img style="width:27px"
                       src="<?php echo $templates ?>dist/img/camera.png"
                       alt="User profile picture"></i>
                  </a>
                  <!-- <a href="<?php echo $infobyuser->lokasi_gambar ?>"  data-toggle="lightbox"> -->
                  <img id="myImg" class="profile-user-img img-fluid img-circle img-responsive" style="margin-right: 20px; width:125px;height:125px;"
                       src="<?php echo $infobyuser->lokasi_gambar ?>"
                       alt="<?php echo $infobyuser->namaKaryawan ?>">
                  <!-- </a> -->
                </div>&nbsp;&nbsp;
                <a href="#" class="btn btn-sm btn-like btn-block" onclick="ToController('scr/Useraccess/Userinfo')"><i>Update data</i></a>
                <a href="#" class="btn btn-sm btn-secondary btn-block" onclick="changepassword()"><i>Change password</i> <span class="fas fa-key"></span></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
           <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Gallery</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Change password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                   <div class="post">
                    <div class="main-content container-fluid">
                    </div>
                        <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                          <!-- title row -->
                          <div class="row invoice-info">
                            <div class="col-sm-12 invoice-col">
                              <h5>PT L`ESSENTIAL <small class="float-right"><?php echo $infobyuser->register_code ?></small></h5>
                              
                            <address>
                                Full Name &emsp;: <?php echo $infobyuser->namaKaryawan ?><br>
                                Address &emsp;&ensp;&nbsp;&nbsp;: <?php echo $infobyuser->user_address ?> 
                                <a href="javascript:;"  data-toggle="modal" data-target="#modalMaps"> <i class="fas fa-map-marker-alt"></i></a> <br>
                                Position Job : <?php echo $infobyuser->position_name ?> <?php echo $infobyuser->department_name ?><br>
                                Email &emsp;&emsp;&ensp;&nbsp;&nbsp;: <?php echo $infobyuser->email ?>
                              </address>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                          <!-- Table row -->
                          <div class="row">
                            <div class="col-12 table-responsive">
                              <table id="dataintable" class="table table-striped">
                                <thead>
                                <tr>
                                  <th>Userlog ID</th>
                                  <th>System Device</th>
                                  <th>Open By</th>
                                  <th>Access Time</th>
                                  <th>Difference </th>
                                </tr>
                                </thead>
                                <tbody>
                              
                                </tbody>
                              </table>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->

                          <!-- this row will not appear when printing -->
                          <div class="row no-print">
                            <div class="col-12">
                            <button type="button" class="btn btn-sm btn-secondary" >
                                <i class="fas fa-file-alt"></i> &nbsp; Detail log
                              </button>
                            </div>
                          </div>
                        </div>
            <!-- </form> -->
                                </div>
                                <!-- /.post -->
                              </div>

                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                   <div class="gal">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

                <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

                <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">



                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

                <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

                <img src="https://preview.ibb.co/mysOxk/3.jpg" alt="">

                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt="">
                <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt="">

            </div>

                  </div>
                  <!-- /.tab-pane -->





                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <p class="text-right" id="contentbutton">
                           <button type="submit" class="btn btn-sm btn-like"><i class="fas fa-check"></i> Submit</button>
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div id="myModal" class="modal-custem modal">
    <span class="close close-custem">&times;</span>
    <img class="modal-contents modal-content" id="img01">
    <div id="caption"></div>
  </div>

    <div class="modal fade" id="modalMaps" role="dialog">
            <div class="modal-dialog modal-xl">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="position: absolute;">Maps</h4>
                    </div>
                    <div class="modal-body">
                      <div class="col-md-12 col-sm-12">
                        <div id="map_modal" style="height:450px;width:100%"></div><br>
                        <textarea name="user_address" class="form-control" rows="3" placeholder="input your address"
                        <?php echo (isset($default['readonly_user_address'])) ? $default['readonly_user_address'] : ''; ?> ><?php echo (isset($default['user_address'])) ? $default['user_address'] : ''; ?></textarea>
                      </div>
                    </div>
                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

  <script type="text/javascript">
    url_gridlog = '<?php echo $url_gridlog; ?>';

    $(document).ready(function () {               
        $("#dataintable").dataTable({
            'order': [[0, 'desc']],
             keys: true,
            'lengthChange': false,
            'searching': false,
            lengthMenu: [
                [5,10, 15, 25, 50,100],
                [5,10, 15, 25, 50,100]
            ],
            responsive: true,
            "ajax": {
                "url": url_gridlog,
                "type": 'POST',
            },
            "columns": [
                        {"data": "id_userlog"},
                        {"data": "systemdevice"},
                        {"data": "browser"},
                        {"data": "accesstime"},
                        {"data": "hari", "width": "10%", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                            
                                btn = btn + "<a href='javascript:void(0)' class='text-inverse'>"+ row.hari +" Hari</a>";
                              
                            return btn;
                          }
                        }

                       ]

        });

    });


     function preview(id) {
        ToContent(url_preview + '/' + id);
    }


</script>

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

     $('.search-input-text').on('keyup', function () {                      
        filterdatatable();
    });

    $('.search-input-select').on('change', function () {
        filterdatatable();
    });

    function resetfiltergrid() {
        $('.search-input-text').val("");
        $('.search-input-select').val("");
        filterdatatable();
    }

    function getdatafilter() {
        var sParams = '?scr_id_userlog=' + $("#scr_id_userlog").val();
        sParams = sParams + '&id_userlog=' + $("#id_userlog").val();
        sParams = sParams + '&scr_systemdevice=' + $("#scr_systemdevice").val();
        sParams = sParams + '&scr_browser=' + $("#scr_browser").val();
        sParams = sParams + '&scr_accesstime=' + $("#scr_accesstime").val();
        sParams = sParams + '&scr_hari=' + $("#scr_hari").val();
        return sParams;
    }

    function filterdatatable() {
        if ($("#id_userlog").val() != '') {
            $("#dataintable").dataTable().fnReloadAjax(url_grid + '/' + getdatafilter());
        } else {
            _alert('harus dipilih...');
        }

        return false;
    }

</script>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>

<!-- 
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script> -->


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

        var contentString = '<h2>Hello Dunia!</h2>';
        var modalMarker = new google.maps.Marker({
            position: office,
            map: map_modal,
            icon: 'allassets/dist/img/location-pin.png'
        });

        google.maps.event.addListener(map_modal, 'click', function(event) {
            modalMarker.setPosition(event.latLng);
            $('#m_modal_map .latitude').val(event.latLng.lat());
            $('#m_modal_map .longitude').val(event.latLng.lng());
        });

        $('#m_modal_map').on('shown.bs.modal', function () {

            google.maps.event.trigger(map_modal, 'resize');

            var lat = $('#uptdform input[name="latitude"').val();
            var lng = $('#uptdform input[name="longitude"').val();
            $('#m_modal_map .latitude').val(lat);
            $('#m_modal_map .longitude').val(lng);
            lat = isNaN(parseFloat(lat))?0:parseFloat(lat);
            lng = isNaN(parseFloat(lng))?0:parseFloat(lng);

            if(lat==0 || lng==0) return;
            var location = new google.maps.LatLng(lat, lng);
            modalMarker.setPosition(location);

            map_modal.panTo(location);

        });

        $('#m_modal_map .confirm').on('click', function(){
            var lat = $('#m_modal_map .latitude').val();
            var lng = $('#m_modal_map .longitude').val();
            lat = isNaN(parseFloat(lat))?0:parseFloat(lat);
            lng = isNaN(parseFloat(lng))?0:parseFloat(lng);
            if(lat==0 || lng==0){
                alert('Tolong pilih lokasi pada map.');
                return;
            }
            $('#uptdform input[name="latitude"], input[name="latitude"]').val(lat);
            $('#uptdform input[name="longitude"], input[name="longitude"]').val(lng);
            $('#m_modal_map').modal('hide');
        });

          
        });
    </script>

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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="toIndex()">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
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
                  <!-- <a href="#"  onclick="ToController('scr/Useraccess/Userimage')">
                  <i class="float-left" style="color: #6c757d;">
                  <img style="width:27px"
                       src="<?php echo $templates ?>dist/img/camera.png"
                       alt="User profile picture"></i>
                  </a> -->
                  <!-- <a href="<?php echo $infobyuser->lokasi_gambar ?>"  data-toggle="lightbox"> style="margin-right: 20px; width:125px;height:125px;" -->
                  <img id="myImg" class="profile-user-img img-fluid img-circle img-responsive" 
                       src="<?php echo $infobyuser->lokasi_gambar ?>"
                       alt="<?php echo $infobyuser->namaKaryawan ?>">
                  <!-- </a> -->
                </div>
                <h3 class="profile-username text-center"><?php echo $infobyuser->username ?></h3>
                  <p class="text-muted text-center" style="padding-left:11px;margin-bottom: 0.50rem;">
                  <?php echo $infobyuser->position_name ?> <?php echo $infobyuser->department_name ?></p>
                <hr style="margin-top:0rem; margin-bottom:0.50rem;">
                  <strong> <i class="fas fa-map-marker-alt"></i> Address</strong> 
                  <p style="padding-left:11px;margin-bottom: 0.50rem;"><?php echo $infobyuser->user_address ?> 
                    <a href="#" onClick='address(<?php echo $infobyuser->id_user?>,"<?php echo $infobyuser->user_address?>")'><i class="fas fa-pencil-alt" style="font-size:12px"></i></a></p>
                <hr style="margin-top:0rem; margin-bottom:0.50rem;">
                  <strong><i class="fas fa-at"></i> Email</strong> 
                  <p style="padding-left:11px;margin-bottom: 0.50rem;"><?php echo $infobyuser->email ?></p>
                <hr>
                <!-- <a href="#" class="btn btn-sm btn-like btn-block" onclick="ToController('scr/Useraccess/Userinfo')"><i>Update data</i></a> -->
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
              <div class="card-body">
                <div class="tab-content">

                  <div class="active tab-pane" id="activity">
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

  <script type="text/javascript">
    $('#contenttab a').on('shown.bs.tab', function (e) {
        e.preventDefault()
        var me = $(this);
        var tabdata = me[0];
        var tab_id = tabdata.getAttribute("href");
        var url_tab = '';

        if (tab_id == "#activity") {
            url_tab = '<?php echo $url_home_userinfo ?>';

        } 
        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
        $(tab_id).load(url_tab);


    });

    $("#contenttabs").tabs().tabs('select', 0);
    $("#activity").load('<?php echo $url_home_userinfo ?>');
  </script>

  <script type="text/javascript">
   url_update = '<?php echo $url_update; ?>';
    function address(id, address) {
        $('#update_address').modal('show');
        $("#update_address  input[name=id]").val(id);
        $("#update_address  textarea[name=address]").val(address);
    }

    function action_update() {
        $.ajax({
            url: url_update,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                  id: $("#update_address input[name=id]").val(),
                  address: $("#update_address textarea[name=address]").val()
            },
            success: function (data) {
                $('#update_address').modal('hide');
                if (data.valid == true) {
                  window.location.reload();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
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

    });


</script>

<script>
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

<div id="update_address" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white"> Update Your Address </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" class="form-control"/>
                 <div class="form-group">
                 <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="action_update()" class="btn btn-sm btn-like" action="create">Update</button>
            </div>
        </div>
    </div>
</div>
     

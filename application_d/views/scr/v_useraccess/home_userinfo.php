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

                   <div class="post">
                    <div class="main-content container-fluid">
                    </div>
                        <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <form id="formdata" data-parsley-validate="" novalidate="">
                                  <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                                  <input type="hidden" name="actiondata" id="actiondata" />
                                  <input type="hidden" name="status_login" id="status_login" value="1" />
                                  <input type="hidden" name="latitude" id="latitude" value="<?php echo $infobyuser->latitude ?>" />
                                  <input type="hidden" name="longitude" id="longitude" value="<?php echo $infobyuser->longitude ?>"/>
                                  <div class="row">
                                  <div id="map_modal" style="height:300px;width:100%;margin-bottom: 5px;"></div>
                                  </div>
                                   <!-- <div class="row">
                                  <textarea name="user_address" class="form-control" rows="2" style="margin-bottom:5px;" <?php echo (isset($default['readonly_user_address'])) ? $default['readonly_user_address'] : ''; ?> ><?php echo (isset($default['user_address'])) ? $default['user_address'] : ''; ?></textarea>
                                  </div> -->
                                  <p class="text-right" style="margin-bottom: 0rem;">
                                    <button type="submit" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'></i> Update Location</button>
                                  </p>
                            </form>
                      </div>
          <!-- </form> -->
                              </div>
                              <!-- /.post -->
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
                    // postdata(url_post, formdata, url_index);
                    var returndata = postaction(url_post, formdata, url_index);
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
                   
 <script type="text/javascript">
            
        $(document).ready(function () {

        var view = new google.maps.DirectionsRenderer;
        var office =  {lat: -6.3369066, lng: 106.674523};
        var thismaps = new google.maps.Map(document.getElementById('map_modal'), {
          zoom: 15,
          center: office,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scaleControl: false,
          zoomControl: false,
        });

        var info = '<h5>PT L`ESSENTIAL</h5><p>Jalan Pergudangan Industri<br> Taman Tekno BSD, Jl. Sektor 11 No.3A,<br> Setu, Kec. Setu, Kota Tangerang Selatan,<br> Banten 15314<p>';
        var infocenter = new google.maps.InfoWindow({
            content: info,
            position: office
          });

        var thiscenterinfo = new google.maps.Marker({
            position: office,
            map: thismaps,
            icon: 'allassets/dist/img/location.png',
        });

        // info marker user
        var contentString = '<p><?php echo $infobyuser->user_address ?></p>';
        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            position: latlong
          });

        var latlong = {lat:<?php echo $infobyuser->latitude ?>, lng:<?php echo $infobyuser->longitude ?>};
        var icon = {
                      url: "<?php echo $infobyuser->lokasi_gambar ?>", // url
                      scaledSize: new google.maps.Size(30, 30), // scaled size
                      origin: new google.maps.Point(0,0), // origin
                      anchor: new google.maps.Point(0, 0) // anchor
                  };
        var thismarker = new google.maps.Marker({
            position: latlong,
            map: thismaps,
            icon: icon
        });
            

        google.maps.event.addListener(thismaps, 'click', function(event) {
        thismarker.setPosition(event.latLng);
          document.getElementById('latitude').value = event.latLng.lat();
          document.getElementById('longitude').value = event.latLng.lng();
        });

        thismarker.addListener('click', function() {
          infowindow.open(thismaps, thismarker);
        });

        thiscenterinfo.addListener('click', function() {
          infocenter.open(thismaps, thiscenterinfo);
        });
          
        });
    </script>

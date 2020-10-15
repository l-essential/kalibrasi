  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="sticky-top mb-0" style="top:57px;">
    <div class="content-header" style="background:#fff">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-9">
            <form role="form" style="height: 27px;">
              <div class="row">
                <div class="col-sm-5">
                  <div class="form-group">
                    <select class="form-control form-control-sm">
                      <option> -All- </option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="form-group">
                    <button type="button" class="btn btn-sm btn-like"> Proses</button>
                  </div>
                </div>
              </div>
            </form>
          </div><!-- /.col -->

          <div class="col-sm-3">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Traking</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
                
      <div class="portlet-body" style="min-height:100%!important;padding:0!important;margin:0!important">
        <div class="tab-content" style="min-height:100%!important;padding:0!important;margin:0!important">
            <div class="tab-pane active" id="main_tab">
              <div id="map_id" style="min-height:477px;width:100%"></div>
            </div>
        </div>
      </div>

    </div>
  </div>
  <!-- /.content-wrapper -->

      
   
        <script type="text/javascript">
//              menentukan koordinat titik tengah peta
              var myLatlng = new google.maps.LatLng(-6.197358, 106.546935);
//              pengaturan zoom dan titik tengah peta
              var myOptions = {
                  zoom: 15,
                  center: myLatlng
              };
//              menampilkan output pada element
              var map = new google.maps.Map(document.getElementById("map_id"), myOptions);
//              menambahkan marker
              var marker = new google.maps.Marker({
                   position: myLatlng,
                   map: map,
                   title:"Rumah ku",
                   icon:"allassets/dist/img/location.png"
              });
        </script>
   
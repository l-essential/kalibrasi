<?php 
      $templates = base_url() . 'allassets/';
 ?>
 <style>
 .small-box .icon {
    color: rgba(255, 255, 255, 0.78);
    z-index: 0;
}
.nav-tabs {
    border-bottom: 1px solid #ffffff;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #ffffff #ffffff #20c997;
}
 </style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-tachometer-alt"></i> Kalibrasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/Home')">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-like">
              <div class="inner">
                <h3><?php echo $total_internal ?></h3>

                <p>Internal</p>
              </div>
              <div class="icon">
                <i class="fas fa-tools"></i>
              </div>
              <a href="#" onclick="ToController('e04/Internal')" class="small-box-footer">All Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $total_external ?></h3>

                <p>Eksternal</p>
              </div>
              <div class="icon">
                <i class="fas fa-cogs"></i>
              </div>
              <a href="#" onclick="ToController('e04/External')" class="small-box-footer">All Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- <div class="row">
          <div class="col-12 col-sm-6 col-lg-12">
            <div class="card card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">ALL Data </a>
                  </li>
                </ul>
              </div>


              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                      <div class="col-12">
                            <table id="dataintable" class="table table-sm table-head-fixed table-striped" width="100%">
                              <thead>
                              <tr>
                                <th># </th>
                                <th>Action </th>
                                <th>ID Kalibrasi</th>
                                <th>Nama Alat</th>
                                <th>Lokasi</th>
                                <th>Awal Kalibrasi</th>
                                <th>Tanggal Kalibrasi </th>
                              </tr>
                              </thead>
                              <tbody>
                             
                              </tbody>
                            </table>
                      </div>

                  </div>

                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div> -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    url_grid_eksternal  = '<?php echo $url_grid_eksternal; ?>';
    url_setstatus = '<?php echo $url_setstatus; ?>';
    url_preview = '<?php echo $url_preview; ?>';

    $(document).ready(function () {
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid_eksternal,
                "type": 'POST',
            },
            dom: 'lfrtip',
            'order': [[1, 'desc']],
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            "searching": true,
            "lengthChange": false,
            lengthMenu: [
                [10, 25, 50, 100, 200, 500, 1000],
                [10, 25, 50, 100, 200, 500, 1000]
            ],
            "columns": [
              {"data": "id_satuan", "width": "75px", "sClass": "text-center",
                  "bSortable": false,
                  "mRender": function (data, type, row) {
                      var btn = "";
                      var idtr = row["<?php echo $prefix_id; ?>"];

                          btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='detail'><i class='fas fa-file-contract'></i></a> &nbsp;&nbsp;";
                      
                      return btn;
                  }
              },
              {"data": "status_calibration", "sClass": "text-center",
              "mRender": function (data, type, row) {
                      var status = "";
                      var idtr = row["periode_id"];
                      if (row.status_calibration == '0') {
                          status = status + "<a href='javascript:void(0)' onClick='setstatus(1," + idtr + ")' ><i class='far fa-square' style='font-size: 19px;'></i></a>";
                      }else {
                          status = status + "<i class='far fa-check-square' style='color: #20c997;font-size: 19px;'></i>";
                      }
                      return status;
                  }
              },

              {"data" : "calibration_code"},
              {"data": "satuan", "width": "210px",
               "bSortable": false,
               "mRender": function (data, type, row) {
                      var text = "";
                          text = text + "<p>"+ row.tools_code +" - "+ row.tools_name +"</p>";
                      return text ;
                  }
              },
              {"data" : "position_name"},
              {"data" : "startcalibration_date"},
              {"data": "satuan",
               "bSortable": false,
               "mRender": function (data, type, row) {
                      var date = "";
                          date = date + "<strong>"+ row.periode_date +"</strong>";
                      return date ;
                  }
              },
            
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintable tbody tr').click(function (e) {
                    var clickedtd = $(e.target).closest('td');
                    $(this).closest('table').find('td').not(this).removeClass('selectedtr');
                    clickedtd.addClass('selectedtr');

                    accessdelete = checkaccess("delete");
                    if (accessdelete == true) {
                        //delete data
                        $(document).bind('keydown', 'shift+d', function () {
                            deletedata($(this)[0].id);
                        });
                    }


                });
                $('#dataintable tbody tr').dblclick(function (e) {

                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }


                });
            },

        });
    });

  function setstatus(status, id) {
        $.ajax({
            url: url_setstatus,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                status: status,
                id: id,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }

        });
        return false;
    }

    function preview(id) {
        ToContent(url_preview + '/' + id);
    }

</script>

 <!-- <script type="text/javascript">
    url_grid_eksternal = '<?php echo $url_grid_eksternal; ?>';

    $(document).ready(function () {
        $('#dataintable2').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid_eksternal,
                "type": 'POST',
            },
            dom: 'lfrtip',
            'order': [[1, 'desc']],
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            "searching": false,
            "lengthChange": false,
            lengthMenu: [
                [10, 25, 50, 100, 200, 500, 1000],
                [10, 25, 50, 100, 200, 500, 1000]
            ],
            "columns": [
              {
                "data": "id_satuan", "width": "10px", "sClass": "text-center",
                "bSortable": false,
                "mRender": function (data, type, row) {
                    var btn = "";
                    var idtr = row["<?php echo $prefix_id; ?>"];
              
                        btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='far fa-paper-plane'></i></a> &nbsp;";
                                     
                    return btn;
                }
              },
             {"data" : "calibration_code"},
             {"data" : "tools_code"},
             {"data" : "locpos"},
             {"data" : "startcalibration_date"},
             {"data" : "tgl_sekarang"},
             {"data" : "selisih"},
            
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintable tbody tr').click(function (e) {
                    var clickedtd = $(e.target).closest('td');
                    $(this).closest('table').find('td').not(this).removeClass('selectedtr');
                    clickedtd.addClass('selectedtr');

                    accessdelete = checkaccess("delete");
                    if (accessdelete == true) {
                        //delete data
                        $(document).bind('keydown', 'shift+d', function () {
                            deletedata($(this)[0].id);
                        });
                    }


                });
                $('#dataintable tbody tr').dblclick(function (e) {

                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }


                });
            },

        });
    });

</script> -->
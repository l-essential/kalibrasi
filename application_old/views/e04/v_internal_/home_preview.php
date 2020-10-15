<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-file-invoice"></i> Preview</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    PT. L`Essential
                    <small class="float-right">Date: <?php echo date('d-m-Y'); ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From : <?php echo $this->session->userdata('ses_department_name') ?>
                  <address>
                    <b>ID Alat</b> : <?php echo $preview->calibration_code ?><br>
                    <b>Alat</b> : <?php echo $preview->tools_name ?>, <?php echo $preview->tools_merk ?>, <?php echo $preview->tools_model ?><br>
                    <b>Tanggal Kalibrasi</b> : <?php echo $preview->startcalibration_date ?><br>
                    <b>Lokasi</b> : <?php echo $preview->location_name ?>, <?php echo $preview->position_name ?>
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                    <tr>
                      <th>Awal Periode Kalibras</th>
                      <th>Akhir Periode Kalibrasi</th>  
                      <th>Vendor</th>
                      <th>Satus Kalibrasi</th>
                      <th>Harga Kalibrasi</th>  
                      <th>Keterangan Calibrasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table>
                </div>
              </div>
             
              <!-- /.row -->

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  

<script type="text/javascript">
    url_setstatus = '<?php echo $url_setstatus; ?>';
    url_grid = '<?php echo $url_grid; ?>';

    prefix_id = '<?php echo $prefix_id; ?>';

 datacolumn = [
       
                {"data": "periode_start"},
                {"data": "periode_end"},
                {"data": "vendor_name"},
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
                {"data": "calibration_price" ,render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )}, 
                {"data": "periode_information"},
            ];
    setdatagrid();

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
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
            }
        });
        return false;
    }


</script>

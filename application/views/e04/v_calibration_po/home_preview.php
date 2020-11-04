<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Permintaan Kalibrasi Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/Home')">Home</a></li>
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/Calibration_po')">DataTable</a></li>
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
               <div id='printarea'>
              <div class="row">
                <div class="col-12">
                  <h4>
                    PT. L`ESSENTIAL
                    <small class="float-right">Date: <?php echo date('d-m-Y'); ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From : 
                  <address>
                    <strong><?php echo $preview->user_pk ?> - <?php echo $preview->department_pk  ?></strong><br>
                    No Permintaan : <?php echo $preview->calibrationpo_code ?><br>
                    Tanggal : <?php echo $preview->date_po ?>

                  </address>
                </div>
                <!-- /.col -->
                 <!-- <div class="col-sm-4 invoice-col">
                  To 1
                  <address>
                    <strong>Procurement</strong><br>
                    Email : john.doe@example.com
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  To 2
                  <address>
                    <strong>Quality Assurance (QA)</strong><br>
                    Email : john.doe@example.com
                  </address>
                </div> -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              
              <div class="row">
                <div class="col-12 table-responsive">
                  <table id="dataintable" class="table table-sm table-head-fixed table-striped" width="100%">
                    <thead>
                    <tr>
                      <th>ID Kalibrasi</th>
                      <th>Nama Alat</th>
                      <th>Lokasi</th>
                      <th>Vendor</th>
                      <th>Status Kalibrasi</th>
                      <th>Estimasi Kalibrasi</th>
                      <th>Tgl Kalibrasi</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table>
                </div>
              </div>

                <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 50px;margin-bottom: 0px;font-size: 15px;">
                   userprint : <?php echo $this->session->userdata('ses_username') ?>
                  </p>
                  <p class="text-muted well well-sm shadow-none" style="font-size: 15px;">
                   printdate : <?php echo date('y-m-d') ?>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
             
             </div> <!-- printarea -->

              <!-- /.row -->
               <div class="row no-print">
                <div class="col-12">
                  <button type="button" class="btn btn-sm btn-default float-right" id='btnprint' onclick="fn_print()"><i class="fas fa-print"></i> Print</button>
                  <button type="button" class="btn btn-sm btn-secondary float-right" onclick="ToController('e04/Calibration_po')" style="margin-right: 5px;">
                    <i class="fas fa-times"></i> back to datatable
                  </button>
                  <!-- <button type="button" class="btn btn-sm btn-success float-right" onclick="downloadexceldata()" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate Excel
                  </button>
                  <button type="button" class="btn btn-sm btn-primary float-right" id="cmd" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>

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

    $(document).ready(function () {               
        $("#dataintable").dataTable({
            'order': [[0, 'desc']],
            "ordering": false,
             keys: true,
            'lengthChange': false,
            'searching': false,
            'paging': false,
            'info' : false,
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                        {"data": "calibration_code"},
                        {"data": "id_satuan",
                          "bSortable": false,
                          "mRender": function (data, type, row) {
                                  var btn = "";
                                      btn = btn + "<td>"+ row.tools_code +", "+ row.tools_name +", "+ row.tools_merk +"</td>";
                                  return btn;
                              }
                          },
                        {"data": "location_name"},
                        {"data": "vendor_name"},
                        {"data": "status_po"},
                        {"data": "estimasi_calibration"},
                        {"data": "id_satuan", "width": "100px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                    btn = btn + "<a href='javascript:void(0)'  class='text-inverse' style='color:#20c997'>"+ row.startcalibration_date +" <i class='fas fa-calendar-check'></i></a> &nbsp;";
                
                return btn;
            }
        },
                       ]

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
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
            }
        });
        return false;
    }

    function fn_print() {
                var printContents = document.getElementById('printarea').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                return true;

                return false;

            }


</script>

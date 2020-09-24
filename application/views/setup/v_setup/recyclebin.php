<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Recycle Bin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Recycle Bin</li>
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
                    <i class="far fa-trash-alt"></i> Data yang anda hapus
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                <h5 class="text-center">Penyimpangan</h5>
                  <table id="penyimpangan"class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Code</th>
                      <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                </br>
                <!-- /.col -->
                <div class="col-12 table-responsive">
                <h5 class="text-center">Kalibrasi</h5>
                  <table id="calibration" class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Code</th>
                      <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                </br>
                <!-- /.col -->
                <div class="col-12 table-responsive">
                <h5 class="text-center">Konsep Produk Baru</h5>
                  <table id="konsepproduk" class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Code</th>
                      <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                </br>
                <!-- /.col -->
                <div class="col-12 table-responsive">
                <h5 class="text-center">Formula Notifikasi Produk</h5>
                  <table id="formula" class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Code</th>
                      <th>User</th>
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
              <!-- <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div> -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script type="text/javascript">
    url_grid_penyimpangan   = '<?php echo $url_grid_penyimpangan; ?>';
    url_grid_calibration    = '<?php echo $url_grid_calibration; ?>';
    url_grid_konsepproduk   = '<?php echo $url_grid_konsepproduk; ?>';
    url_grid_formula        = '<?php echo $url_grid_formula; ?>';
   
    $(document).ready(function () {            
        $("#penyimpangan").dataTable({
            keys: true,
            fixedHeader: true,
            deferRender: true,
            "paging": false,
            "info": false,
            "orderable": false,
            "searching": false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging": false,
            lengthMenu: [
                [50, 10, 25, 50, 100],
                [50, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_penyimpangan,
                "type": 'POST',
            },
            "columns": [
              {"data": "improvement_code"},
              {"data": "title_improvement"},
              {"data": "username"}
            ]

        });

    });

    $(document).ready(function () {            
        $("#calibration").dataTable({
          keys: true,
            fixedHeader: true,
            deferRender: true,
            "paging": false,
            "info": false,
            "orderable": false,
            "searching": false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging": false,
            lengthMenu: [
                [50, 10, 25, 50, 100],
                [50, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_calibration,
                "type": 'POST',
            },
            "columns": [
              {"data": "calibration_id"},
              {"data": "calibration_code"},
              {"data": "username"}
            ]

        });

    });

    $(document).ready(function () {            
        $("#konsepproduk").dataTable({
          keys: true,
            fixedHeader: true,
            deferRender: true,
            "paging": false,
            "info": false,
            "orderable": false,
            "searching": false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging": false,
            lengthMenu: [
                [50, 10, 25, 50, 100],
                [50, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_konsepproduk,
                "type": 'POST',
            },
            "columns": [
              {"data": "konsep_produk_baru_id"},
              {"data": "no_konsep_produk"},
              {"data": "username"},
              
            ]

        });

    });


    $(document).ready(function () {            
        $("#formula").dataTable({
          keys: true,
            fixedHeader: true,
            deferRender: true,
            "paging": false,
            "info": false,
            "orderable": false,
            "searching": false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging": false,
            lengthMenu: [
                [50, 10, 25, 50, 100],
                [50, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_formula,
                "type": 'POST',
            },
            "columns": [
              {"data": "improvement_code"},
              {"data": "title_improvement","width": "250px",},
              {"data": "username"}
            ]

        });

    });


    

</script>
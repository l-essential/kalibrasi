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
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/Home')">Home</a></li>
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/External')">DataTable</a></li>
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
            <div class="invoice p-3 mb-3" id='printarea'>
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
                  <address>
                    <b>ID Alat</b> : <?php echo $preview->calibration_code ?><br>
                    <b>Alat</b> : <?php echo $preview->tools_name ?>, <?php echo $preview->tools_merk ?>, <?php echo $preview->tools_model ?><br>
                    <b>Detail Alat</b> :
                                  <?php
                                    if ($tools_detail) {
                                      $i = 1;
                                      foreach ($tools_detail as $rowdetail) {
                                        ?>
                                      
                                          <?php echo $i++ ?>.<?php echo $rowdetail['toolsdetail_name'] ; ?> 
                                      
                                    <?php
                                    }
                                  }
                                  ?> </br> 
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
                      <th>Tanggal</th>
                      <th>Vendor</th>
                      <!-- <th>Qty Order/ Unit</th> -->
                      <th>Unit Price</th>
                      <th>Disc %</th>
                      <th>Total</th>
                      <!-- <th>Ppn 10%</th> -->
                      <th>Total + PPN 10%</th>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                  </table>
                </div>
              </div>
              </br>
              <div class="row no-print">
                <div class="col-12">
                  <button type="button" class="btn btn-sm btn-like float-right" id='btnprint' onclick="fn_print()"><i class="fas fa-print"></i> Print</button>
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

   $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            "searching": false,
            "paging":   false,
            "ordering": false,
            "info":     false,
            
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [150, 250, 350],
                [150, 250, 350]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                {"data": "status_calibration", "sClass": "text-center",
                 "mRender": function (data, type, row) {
                      var status = "";
                          status = status + "<td>"+ row.periode_year + "-"+ row.periode_date +" </td>";
                      return status;
                  }
                },
                {"data": "vendor_name"},
                // {"data": "calibration_qty"},
                {"data": 'calibration_price',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
                // {"data": "calibration_price"},
                {"data": "calibration_disc"},
                {"data": "total_harga"},
                // {"data": "ppn"},
                {"data": 'disc_ppn',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
                {"data": "periode_information"},
                // {"data": "calibration_price" ,render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp ' )}, 
              
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
</script>

<script type="text/javascript">


function postaction(url, param) {
    var theResponse = {valid: false, message: ''};
    $.ajax({
        type: "POST",
        url: url,
        data: param,
        dataType: "json",
        async: false,
        success: function (data) {
            theResponse = data;
        },
        error: function () {
            theResponse = {valid: false, message: 'Ajax error'};
        }
    });
    return theResponse;
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

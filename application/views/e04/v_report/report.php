<?php
$basedata = base_url() . 'public/';
$templates = base_url() . 'allassets/';
?>

         <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
         <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">
        <body style="background-color: transparent;">
            <!-- Main content -->
            
            <div class="invoice p-3 mb-3">
              <!-- title row -->
               <div id='printarea'>
                   <div id="content">
              <div class="row">
                <div class="col-12">
                  <h5>
                    <i class="fas fa-globe"></i> PT. L`ESSENTIAL
                    
                  </h5>
                  <p align="center"><strong> LAPORAN KALIBRASI </strong></p>
                   <br>
                    <div class="col-sm-4 invoice-col">
                      From
                      <address>
                       <?php echo $this->session->userdata('ses_username') ?> -  <?php echo $this->session->userdata('ses_department_name') ?><br>
                        <!-- Phone: 401<br>
                        Email: info@almasaeedstudio.com -->
                      </address>
                    </div>
                </div>
                <!-- /.col -->
              </div>
           
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-sm table-striped" width='100%'>
                    <thead>
                    <tr style='font-size: 0.9rem;'>
                        <th>No</th>
                        <th>Tanggal PK</th>
                        <th>Tanggal Kalibrasi Awal</th>
                        <th>Tanggal Kalibrasi Berikutnya</th>
                        <th>ID Alat Kalibrasi</th>
                        <th>Nama Alat</th>
                        <th>Lokasi</th>
                        <th>Vendor</th>
                        <th>Harga</th>
                        <!-- <th>Total</th> -->
                        <!-- <th>Keterangan</th> -->
                    </tr>
                    </thead>
                    <tbody>
                     <?php
                    if ($result) {
                        $no = 0;

                        $total = 0;
                        foreach ($result as $row) {
                            $no++;
                            // $tanggal = date('d-m-Y', strtotime($row['date_po']));
                            // $periode_year = date('Y', strtotime($row['periode_year']));
                            // $periode_date = date('m-d', strtotime($row['periode_date']));

                            $html = "<tr style='font-size: 0.9rem;'>";
                            //------- start td -------
                            $html .= "<td>" . $no . "</td>";
                            // $html .= "<td width='175'>" . $row['tools_name'] . "</td>";
                            // $html .= "<td width='130'>" . $row['tools_merk'] . "</td>";
                            $html .= "<td width='130'>" . $row['date_po'] ."</td>";
                            $html .= "<td width='130'>" . $row['periode_date_awal'] ."</td>";
                            $html .= "<td width='130'>" . $row['periode_date_akhir'] ."</td>";
                            $html .= "<td>" . $row['calibration_code'] . "</td>";
                            $html .= "<td>" . $row['tools_code'] . "-" . $row['tools_name'] . "-" . $row['tools_merk'] . "</td>";
                            $html .= "<td width='90'>" . $row['location_name'] . "</td>";
                            $html .= "<td width='90'>" . $row['vendor_name'] . "</td>";
                            $html .= "<td width='90'>" . number_format($row['disc_ppn'], 0, ',', '.') . "</td>";
                            // $html .= "<td width='90'>" . $row['total'] . "</td>";
                            // $html .= "<td width='130'>" . $tanggal . "</td>";
                            // $html .= "<td width='90'>" . $row['keterangan'] . "</td>";
                           //------- end td -------
                            $html .= "</tr>";

                            echo $html;
                            $total += $row['total'];
                        }
                    }
                    ?>
                    
                    </tbody>
                    <tfoot>
                    <?php
                      $html = "<tr'>";
                      $html =" <th colspan=8>Total Harga</th>";
                         $html .= "<th>"  . number_format($total,0,',','.') . "</th>"; 
                         $html .= "</tr>";
                         echo $html;
                      ?>
                    </tfoot>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-7">
                
                </div>
                <!-- /.col -->
                <!-- <div class="col-5">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal :</th>
                        <td  align='Right'><strong><?php echo number_format($total) ?></strong></td>
                      </tr>
                    </table>
                  </div>
                </div> -->
                <div class="invoice-info">
                <address style="font-size:13px;padding-left:5px;">
                    username : <?php echo  $this->session->userdata('ses_username') ?><br>
                    print date :  <?php echo  date("d/m/Y") ?>
                  </address>
                  </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
                    </div>
                </div>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button type="button" class="btn btn-sm btn-default float-right" id='btnprint' onclick="fn_print()"><i class="fas fa-print"></i> Print</button>
                  <button type="button" class="btn btn-sm btn-success float-right" onclick="downloadexceldata()" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate Excel
                  </button>
                  <!-- <button type="button" class="btn btn-sm btn-primary float-right" id="cmd" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> -->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
            
         
    <!-- /.content -->
                </body>
        <script type="text/javascript">


            function postaction(url, param) {
                var theResponse = {valid: false, message: ''};
                ;
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
    </body>
</html>
<script type="text/javascript">
    function downloadexceldata(){
         var url_excel = '<?php echo $url_excel; ?>';
        var daritanggal = '<?php echo $daritanggal; ?>';
        var sampaitanggal = '<?php echo $sampaitanggal; ?>';
        window.open(url_excel + '?daritanggal=' + daritanggal + '&sampaitanggal=' + sampaitanggal);
        
    }
    
</script>

<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script>
    
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {   
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

$("#exceldata").click(function(){
             var url_excel = '<?php echo $url_excel; ?>';
             window.open(url_excel + '?daritanggal=' +  $("#daritanggal").val() + '&sampaitanggal=' + $("#sampaitanggal").val());
         });

</script>
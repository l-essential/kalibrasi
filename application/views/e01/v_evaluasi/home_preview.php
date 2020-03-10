<?php 
      $templates = base_url() . 'allassets/';
      $customes = base_url() . 'public/';
      $basedata = base_url() . 'public/';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $templates ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $templates ?>dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
   
            <div class="invoice p-3 mb-3">
                <table nobr="true" style="border-bottom: 1px solid;">
                    <tr>
                          <td width="20%"><b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" style="border-right: 1px solid;border-left: 1px solid;">&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;border-left: 1px solid;"><b>FORMULIR PENANGANAN PENYIMPANGAN</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : QASS-F-003</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;border-left: 1px solid;"><b>BATCH DAN NON BATCH</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 00</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;border-left: 1px solid;"><b></b></td>
                          <td width="12%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 1 September 2019</td>
                    </tr>
                  </table>

             <br/>
             <br/>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                   Nomor Penyimpangan &emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->improvement_code ?><br>
                   Tanggal Terjadi Penyimpangan &ensp; : <?php echo $preview->tanggal ?><br>
                   Judul Penyimpangan&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->title_improvement ?><br>
                   Tipe Penyimpangan&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->nama_tipe ?><br>
                   Katagori Penyimpangan &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->nama_katagori ?><br>
                   Ruang Lingkup Penyimpangan&ensp; : <?php echo $preview->nama_ruanglingkup ?><br>
                  </address>
                </div>
                <!-- /.col -->
               
              </div>
              <!-- /.row -->
              <br/>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>RINCIAN PENYIMPANGAN YANG TERJADI</th>
                      <th>RINCIAN TINDAKAN SEMENTARA YANG TELAH DIAMBIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $preview->rincian_penyimpangan ?></td>
                      <td><?php echo $preview->rincian_tindakan ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
               <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                   Nomor Penyimpangan &emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->nama_resiko ?><br>
                   Dampak pada hal lain &emsp;&emsp;&emsp;&ensp; &ensp; : <?php echo $preview->dampak ?><br>
                   Uraian bila ada &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->uraian ?><br>
                  </address>
                </div>
              </div>
              <br><br><br>

               <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th align="center">EVALUASI TERHADAP LAPORAN, TINDAKAN DAN RESIKO </th>
                      <th align="center">L</th>
                      <th align="center">S</th>
                      <th align="center">D</th>
                      <th align="center">RPN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo $preview->evaluasi_tindakan ?></td>
                      <td><?php echo $preview->L ?></td>
                      <td><?php echo $preview->S ?></td>
                      <td><?php echo $preview->D ?></td>
                      <td><?php echo $preview->RPN ?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
       
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
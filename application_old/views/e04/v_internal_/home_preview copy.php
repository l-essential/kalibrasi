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
                  From
                  <address>
                    <?php echo $this->session->userdata('ses_namaKaryawan') ?> (<?php echo $this->session->userdata('ses_department_name') ?>)<br>
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
              <!-- <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Periode Awal</th>
                      <th>Periode Akhir</th>
                      <th>Status Kalibrasi</th>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                            $resultdetail = $modeldata->getGridDatadetail($preview->calibration_id);
                            $no = 0;
                            foreach ($resultdetail->result_array() as $rowdetail) {
                                $no++;
                                $htmldata = "<tr>";
                                $htmldata .= "<td align='center'>" . $no . "</td>";
                                $htmldata .= "<td align='left'>" . $rowdetail['periode_start'] . "</td>";
                                $htmldata .= "<td align='right'>" . $rowdetail['periode_end'] . "</td>";
                                $htmldata .= "</tr>";
                                echo $htmldata;
                            }
                            ?>
                    
                    </tbody>
                  </table>
                </div>
              </div> -->
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
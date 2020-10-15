<?php 
        $templates = base_url() . 'allassets/';
    ?>
<style>
    .parsley-required{

        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

</style>  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <br>


    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">


            <!-- Main content -->
            <div class="invoice p-3 mb-3 ">
              <!-- title row -->
            
                  <table nobr="true" class="col-sm-12">
                        <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                              <td width="21%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="20" style="opacity: .8"> <b> PT. L 'ESSENTIAL</b> </td>
                              <td width="52%" >&nbsp;</td>
                              <td width="1%" align="left" style="padding-left: 10px;"> Halaman</td>
                              <td width="14%" align="left"> : 1 dari 2</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ><b>FORMULIR PENANGANAN PENYIMPANGAN</b></td>
                              <td width="1%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                              <td width="14%"align="left"> : QASS-F-002</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ><b>BATCH DAN NON BATCH</b></td>
                              <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                              <td width="14%"align="left"> : 05</td>
                              </tr>
                              <tr>
                              <td width="20%" style="border-bottom: 1px solid #797979;"></td>
                              <td width="52%" align="center" style="border-bottom: 1px solid #797979;"><b></b></td>
                              <td width="15%" align="left"align="left" style="padding-left: 10px;border-bottom: 1px solid #797979;"> Tanggal berlaku</td>
                              <td width="25%" style="border-bottom: 1px solid #797979;"> : 26 Des 2018</td>
                        </tr>
                        </tbody>
                      </table>
                 </br>
                 </br>
                  
              <!-- info row -->
              <table nobr="true" class="col-sm-12">
                <tbody style="font-family: initial;font-size: 14px;">
                <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> No Penyimpangan</td>
                      <td width="25%" > : <?php echo $preview->improvement_code ?></td>
                      <td width="23%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Tanggal</td>
                      <td width="25%" > : <?php echo $preview->tanggal ?></td>
                      <td width="23%" > </td>
                  </tr>
                      <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Nama</td>
                      <td width="25%" > : <?php echo $preview->title_improvement ?></td>
                      <td width="23%" > </td>
                      </tr>
                  <tr>
                      <td width="15%" align="left"align="left" style="padding-left: 10px;">Tipe Penyimpangan</td>
                      <td width="25%" > : <?php echo $preview->nama_tipe ?></td>
                      <td width="23%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Kategori Penyimpangan</td>
                      <td width="25%" > : <?php echo $preview->nama_katagori ?></td>
                      <td width="23%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Ruang Lingkup</td>
                      <td width="25%" > : <?php echo $preview->nama_ruanglingkup ?></td>
                      <td width="20%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Jenis Penyimpangan</td>
                      <td width="25%" > : <?php echo $preview->nama_jenis ?></td>
                      <td width="20%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Nomor</td>
                      <td width="25%" > : <?php echo $preview->number ?></td>
                      <td width="20%" > </td>
                  </tr>
                </tbody>
              </table>
              <br>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="text-center">&emsp;&emsp;&emsp;RINCIAN PENYIMPANGAN YANG TERJADI&emsp;&emsp;&emsp;</th>
                      <th class="text-center">RINCIAN TINDAKAN SEMENTARA YANG TELAH DIAMBIL</th>
                    </tr>
                    </thead>
                    <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                          <td style="height: 225px;"><?php echo $preview->rincian_penyimpangan ?> </td>
                          <td style="height: 225px;"><?php echo $preview->rincian_tindakan ?> </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <table nobr="true" class="col-sm-12">
                <tbody style="font-family: initial;font-size: 14px;">
                <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Tingkat Resiko</td>
                      <td width="25%" > : <?php if ($preview->id_resiko == 1 ){
                                                      echo "Critical ( C )";
                                                    } else if ($preview->id_resiko == 2){
                                                      echo "Major ( M )";
                                                    }else{
                                                      echo "minor ( m )";
                                                      
                                                    }
                                                    ?></td>
                      <td width="23%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Dampak pada hal lain</td>
                      <td width="25%" > : <?php  
                                                    if ($preview->dampak == 1) {
                                                      echo "ada";
                                                    }else{
                                                      echo "-";
                                                    }
                                                    echo $preview->uraian ?></td>
                      <td width="23%" > </td>
                  </tr>
                </tbody>
              </table>

              <br>
              <div class="col-12 table-responsive" style="padding-left: 9px;padding-right: 9px;">
              <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th class="text-center" rowspan="2" style="padding:30px;">EVALUASI TERHADAP LAPORAN TINDAKAN DAN RESIKO</th>
                      <th class="text-center" colspan="4" >TINGKAT RESIKO</th>
                    </tr>
                    <tr>
                      <th class="text-center" style="width: 50px;">L</th>
                      <th class="text-center" style="width: 50px;"> S</th>
                      <th class="text-center" style="width: 50px;"> D</th>
                      <th class="text-center" style="width: 50px;"> RPN</th>
                    </tr>
                  </thead>
                  <tbody style="font-family: initial;font-size: 14px;">
                    <tr>
                      <td style="height: 225px;"><?php echo $preview->evaluasi_tindakan ?></td>
                      <td class="text-center" style="height: 225px;"><?php echo $preview->L ?></td>
                      <td class="text-center" style="height: 225px;"><?php echo $preview->S ?></td>
                      <td class="text-center" style="height: 225px;"><?php echo $preview->D ?></td>
                      <td class="text-center" style="height: 225px;"><?php echo $preview->RPN ?></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              <!-- this row will not appear when printing -->
              <div class="row">
                <div class="table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered" width="100%">
                    <thead>
                    <tr>
                      <th colspan= "2" class="text-center">Pelapor</th>
                      <th colspan= "2" class="text-center">Kepala Department Pelapor</th>
                    </tr>
                    <tr>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Tanggal dibuat</th>
                      <th class="text-center">Nama</th>
                      <th class="text-center">Tanggal diapprove</th>
                    </tr>
                    </thead>
                    <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                          <td style="height: 70px;width: 170px;"><?php echo $preview->namaKaryawan ?></td>
                          <td style="height: 70px;width: 170px;"><?php echo $preview->time ?></td>
                          <td style="height: 70px;width: 170px;"><?php echo $preview->approveby ?></td>
                          <td style="height: 70px;width: 170px;"><?php echo $preview->time_a ?></td>
                        </tr>
                    </tbody>
                  </table>
                  <div>
                </div>

                <div class="row">
                    <div class="table-responsive" style="padding-left:7px;padding-right:7px;">
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                        <th colspan= "6" class="text-center">Dikaji oleh</th>
                        </tr>
                        <tr>
                          <?php
                                if ($dept) {
                                  foreach ($dept as $rowdept) {
                                    ?>
                                      <th class="text-center">Nama, Tanggal</th>
                                    <?php
                                  }
                              }
                          ?>
                        </tr>
                        </thead>
                        <tbody style="font-family: initial;font-size: 14px;">
                            <tr>
                            <?php
                                      if ($dept) {
                                        foreach ($dept as $rowdept) {
                                          ?><td class="text-center"style="height: 70px;">
                                              <?php echo $rowdept['department_name'] ; ?></br>
                                              <?php echo $rowdept['createtime'] ; ?>
                                            </td>                                        
                                            <?php
                                        }
                                    }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                    <div>
                </div>

              <div class="row no-print">
                <div class="col-12">
                    <?php 
                    
                    if ($btnapprove->status_formulir == 0) {
                      echo "<a href='#' onClick='approve()' class='btn btn-sm bg-gradient-info float-right' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Persetujuan</a>";
                    } else {
                      echo "";
                    } 
                    ?>
                    <button class='btn btn-sm btn-warning float-right'  type="reset" id="btncancelnilai" style='margin-right: 5px;'><i class='fas fa-chevron-circle-left'></i> Back</button>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
                </div>
              </div>
             

              <div class="modal fade" id="DialogConfirm-kirim">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Info Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <p>Untuk Sementara belum aktif</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-outline-light">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->





<!-- 

    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">


            <div class="invoice p-3 mb-3 ">
            
                  <table nobr="true" class="col-sm-12">
                        <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                              <td width="21%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="20" style="opacity: .8"> <b> PT. L 'ESSENTIAL</b> </td>
                              <td width="52%" >&nbsp;</td>
                              <td width="1%" align="left" style="padding-left: 10px;"> Halaman</td>
                              <td width="14%" align="left"> : 2 dari 2</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ><b>FORMULIR PENANGANAN PENYIMPANGAN</b></td>
                              <td width="1%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                              <td width="14%"align="left"> : QASS-F-002</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ><b>BATCH DAN NON BATCH</b></td>
                              <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                              <td width="14%"align="left"> : 05</td>
                              </tr>
                              <tr>
                              <td width="20%" style="border-bottom: 1px solid #797979;"></td>
                              <td width="52%" align="center" style="border-bottom: 1px solid #797979;"><b></b></td>
                              <td width="15%" align="left"align="left" style="padding-left: 10px;border-bottom: 1px solid #797979;"> Tanggal berlaku</td>
                              <td width="25%" style="border-bottom: 1px solid #797979;"> : 26 Des 2018</td>
                        </tr>
                        </tbody>
                      </table>
                 </br>
                 </br>

                 <div class="row">
                <div class="col-12">
                  <h6 class="text-center">ROOT CAUSE ANALYSIS</h6>
                </div>
              </div>
              <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>1. PERSONEL : 
                    <a href='#' onClick='kesimpulan_akar()' class='text-inverse float-right' title='' data-toggle='tooltip' data-original-title='Edit' style="font-size:13px;">
                    <i class='fas fa-edit'></i></a>
                  </h6>
                    <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['personel'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>2. MATERIAL :</h6>
                  <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['material'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>3. ALAT / MESIN :</h6>
                  <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['alat_mesin'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>4. METODE / PROSEDUR :</h6>
                    <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['metode'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>5. SARANA PENUJANG KRITIS / LINGKUNGAN  :</h6>
                    <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['sarana'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                </div>
                <div style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <p style="margin-bottom: 0rem;">Kesimpulan dari akar permasalahan :
                  </p>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                  <?php
                            if ($getid) {
                            foreach ($getid as $rowgetid) {
                                ?>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                                <?php echo $rowgetid['department_name'] ?> : <?php echo $rowgetid['kesimpulan_akar'] ?>
                                </p>
                            <?php
                            }
                        }
                    ?>
                  </p><br>
                </div>
              <br>
              <div class="row">
                <div class="col-12 table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="text-center">CORRECTIVE ACTION</th>
                      <th class="text-center">Due Date</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">PIC</th>
                      <th class="text-center">Tgl Selesai</th>
                      <th class="text-center">action</th>
                    </tr>
                    </thead>
                    <tbody style="font-family: initial;font-size: 14px;">
                       
                          <?php
                              if ($corrective) {
                              foreach ($corrective as $rowcorrective) {
                                  ?>
                                   <tr>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_act'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_duedate'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_status'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_pic'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['corrective_finis'] ?></td>
                                  <td class="text-center"><a href='javascript:void(0)' onClick='corrective(<?php echo $rowcorrective['corrective_id'] ?>)' class='text-inverse'><i class='fas fa-edit'></i></a></td>
                                  </tr>
                              <?php
                              }
                          }
                          ?>
                        
                    </tbody>
                  </table>
                </div>

                <div class="col-12 table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="text-center">PREVENTIVE ACTION</th>
                      <th class="text-center">Due Date</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">PIC</th>
                      <th class="text-center">Tgl Selesai</th>
                      <th class="text-center">action</th>
                    </tr>
                    </thead>
                    <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                        <?php
                              if ($preventive) {
                              foreach ($preventive as $rowpreventive) {
                                  ?>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_act'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_duedate'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_status'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_pic'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_finis'] ?></td>
                                  <td class="text-center"><a href='javascript:void(0)' onClick='preventive(<?php echo $rowcorrective['id_preventive  '] ?>)' class='text-inverse'><i class='fas fa-edit'></i></a></td>
                              <?php
                              }
                          }
                          ?>
                        </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-12 ">
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>Kesimpulan akhir :
                    <a href='javascript:void(0)' onClick='akhir()' class='text-inverse float-right' title='' data-toggle='tooltip' data-original-title='Edit' style="font-size:13px;">
                  <i class='fas fa-edit'></i></a></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 0px;margin-left: 17px;margin-bottom: 0rem;">
                    <?php echo $getakhir->kesimpulan_akhir ?>
                    </p>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>Status Penyimpangan :  <strong>
                    <?php  if ($preview->status_penyimpangan == 5) {
                               echo "OPEN";
                              } else if ($preview->status_penyimpangan == 7) {
                                echo "CLOSED";
                              } else {
                                echo "";
                              }?></strong>
                  </h6>
                </div>
                <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <p>Penyimpangan telah di tidaklajuti oleh Department?
                    &nbsp;&nbsp;&nbsp;<strong><?php echo $getakhir->ditindak_lanjuti ?></strong>&nbsp;&nbsp;&nbsp;
                    dan tidak perbaikan dan tidak pencegahan telah selesai dilaksanakan.
                  </p>
                </div>
              </div>
              </div>

              <div class="row">
                <div class="table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered" width="100%">
                    <thead>
                    <tr>
                      <th class="text-center">Diperiksa oleh,</th>
                      <th colspan= "3" class="text-center">Disetujui oleh</th>
                    </tr>
                    </thead>
                    <tbody style="font-family: initial;font-size: 14px;">
                        <tr>
                          <td style="height: 70px;"></td>
                          <td style="height: 70px;"></td>
                          <td style="height: 70px;"></td>
                          <td style="height: 70px;"></td>
                        </tr>
                        <tr>
                          <td class="text-center">Department QA</td>
                          <td class="text-center">QA Manager</td>
                          <td class="text-center">Plant Div.Head</td>
                          <td class="text-center">CEO</td>
                        </tr>
                    </tbody>
                  </table>
                  <div>
                </div>

                <div class="row no-print">
                <div class="col-12">
                    <button class='btn btn-sm btn-warning float-right'  type="reset" id="btncancelnilai" style='margin-right: 5px;'><i class='fas fa-chevron-circle-left'></i> Back</button>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
                </div>
              </div>


              <div class="modal fade" id="DialogConfirm-akar">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Kesimpulan Akar</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type ="hidden" name="id" id="id"/>
                      <div class="form-group" style="padding-left: 9px;">
                        <div class="col-sm-12" style="padding-left: 0px;">
                          <textarea name="akar" id="akar" type="text" class="form-control" rows="5" placeholder="Enter ..."><?php echo $getakar->kesimpulan_akar ?></textarea>
                        </div>                        
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="DialogConfirm-akhir">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Kesimpulan Akhir</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type ="hidden" name="id" id="id"/>
                      <div class="form-group" style="padding-left: 9px;">
                        <div class="col-sm-12" style="padding-left: 0px;">
                          <textarea name="akhir" id="akhir" class="form-control" rows="5" placeholder="Enter ..."><?php echo $getakhir->kesimpulan_akhir ?></textarea>
                        </div>                        
                      </div>

                      <div class="form-group row" style="padding-left: 25px;">
                        <input type="radio" id="status" name="status" value="7">&ensp;
                          <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                        <input type="radio" id="status" name="status" value="5">&ensp;
                          <label for="OPEN">OPEN</label>&ensp;
                      </div>

                      <div class="form-group" style="padding-left: 9px;">
                        <input name="dilanjuti" id="dilanjuti" type="text" class="form-control" value="<?php echo $getakhir->ditindak_lanjuti ?>">
                    </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                      <button type="button" onclick="insert_akhir()" class="btn btn-outline-light">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="DialogConfirm-corrective">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Corrective</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type ="hidden" name="id" id="id"/>
                      <div class="form-group row" style="padding-left: 25px;">
                          <input type="radio" id="status" name="status" value="CLOSED">&ensp;
                          <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                          <input type="radio" id="status" name="status" value="OPEN">&ensp;
                          <label for="OPEN">OPEN</label>&ensp;
                      </div>
                      <div class="form-group row" style="padding-left: 25px;">
                          <input type ="text" name="date" id="tanggal"/>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="DialogConfirm-preventive">
                <div class="modal-dialog">
                  <div class="modal-content bg-info">
                    <div class="modal-header">
                      <h4 class="modal-title">Kesimpulan Akar</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <input type ="hidden" name="id" id="id"/>
                      <div class="form-group" style="padding-left: 9px;">
                        <div class="col-sm-12" style="padding-left: 0px;">
                          <textarea name="akar" id="akar" type="text" class="form-control" rows="5" placeholder="Enter ..."><?php echo $getakar->kesimpulan_akar ?></textarea>
                        </div>                        
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
    </section> -->
    <!-- /.content -->

</div>

<script type="text/javascript">
        $(document).bind('keydown', 'ctrl+p', function () {
                    print();
                });
 </script>

<script type="text/javascript">
  url_add_approve = '<?php echo $url_add_approve; ?>';
  url_adddepartment = '<?php echo $url_adddepartment; ?>';
  
  $(document).ready(function () {
        url_index = '<?php echo $url_index; ?>';
        $("#btncancelnilai").click(function () {
            ToContent(url_index);
        });
    });
  
  function approve() {
    $('#DialogConfirm').modal('show');
    $("#DialogConfirm  input[name=id]").val('<?php echo $preview->id_formulir ?>');
    $("#DialogConfirm  input[name=code]").val('<?php echo $preview->improvement_code ?>');
  }

  function insert_approve() {
      $.ajax({
          url: url_add_approve,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm input[name=id]").val(),
              code: $("#DialogConfirm input[name=code]").val(),
              approve: $("#DialogConfirm input[name=approve]").val(),
              reason: $("#DialogConfirm input[name=reason]").val(),
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">FORM PERSETUJUAN </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" id="id"/>
                <input type ="hidden" name="code" name="code" />
                <h6> Saya menyetujui terjadi penyimpangan dengan no : <?php echo $preview->improvement_code ?></h6>
                <div class="form-group row" style="padding-left: 25px;">
                    <input type="radio" id="approve" name="approve" value="1">&ensp;
                    <label for="male">Setuju</label>&emsp;&emsp; 
                    <input type="radio" id="approve" name="approve" value="2">&ensp;
                <label for="female">Tidak Setuju</label>&ensp;
                <input type="text" id="reason" name="reason" style="width: 70%;">
                </div>
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insert_approve()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
            </div>
        </div>
    </div>
</div>







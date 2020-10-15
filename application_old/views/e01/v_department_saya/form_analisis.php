<?php 
        $templates = base_url() . 'allassets/';
        $basedata = base_url() . 'public/';
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

    .datepicker{z-index:1151;}

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
                          <td style="height: 70px;width: 170px;"><?php echo $preview->time_a ?>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                  <div>
                </div>

                
              <!-- modal add department-->
              <div id="DialogConfirm-dept" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header btn-like">
                              <h4 class="modal-title"><font color="white">Add Department </font></h4>
                          </div>
                          <div class="modal-body">
                              <input type ="hidden" name="id" id="id"/>
                              <input type ="hidden" name="code" name="code" />
                              <div class="form-group row">
                              <label for="katagori" class="col-sm-3 col-form-label">Department Terkait <span style="color:red">*</span></label>
                              <div class="col-sm-9">
                              <select id="dept" name="dept" class="form-control chosen-select" tabindex="1">
                                <?php 
                                        
                                        $sql ="SELECT * FROM lessential._department ";
                                                    $query = $this->db->query($sql);
                                                    if ($query->num_rows() > 0) {
                                                      
                                                      foreach ($query->result() as $row) {?>
                                                        <option  value="<?php echo $row->department_name ?>"><?php echo $row->department_name?> </option>
                                                    <?php }
                                                  
                                                  }
                                        ?>

                                </select>
                              </div>
                              </div>                   
                              </div>
                           <div class="modal-footer" style="padding: 0rem;">
                              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                              <button type="button" onclick="insert_dept()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.modal -->

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
                <!-- /.col -->
              </div>
              <!-- info row -->
              <!-- info row -->
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
              <!-- Table row -->

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
                                  <td class="text-muted well well-sm shadow-none">
                                    <?php echo $rowcorrective['correct_act'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_duedate'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_status'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['correct_pic'] ?></td>
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['corrective_finis'] ?></td>
                                  <td class="text-center">
                                    <a href='#' onClick='corrective(<?php echo $rowcorrective['corrective_id'] ?>)' class='text-inverse'><i class='fas fa-edit'></i></a>
                                    <a href='<?php echo $rowcorrective['lokasi_gambar'] ?>' target="_blank" class='text-inverse'><i class="fas fa-file-download"></i></a>
                                  </td>
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
                        
                        <?php
                              if ($preventive) {
                              foreach ($preventive as $rowpreventive) {
                                  ?>
                                  <tr>
                                    <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_act'] ?></td>
                                    <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_duedate'] ?></td>
                                    <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_status'] ?></td>
                                    <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_pic'] ?></td>
                                    <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['preventive_finis'] ?></td>
                                    <td class="text-center"><a href='#' onClick='preventive(<?php echo $rowpreventive['id_preventive'] ?>)' class='text-inverse'><i class='fas fa-edit'></i></a>
                                    <a href='<?php echo $rowpreventive['lokasi_gambar'] ?>' class='text-inverse'><i class="fas fa-file-download"></i></a></td>
                                  </tr>
                              <?php
                              }
                          }
                          ?>
                        
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->

                <div class="row">
              <div class="col-12">
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
                                ?><th class="text-center">Nama, Tanggal</th>
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
                                      <?php echo $rowdept['nama_user'] ; ?></br>
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
              <!-- /.row -->
              </div>

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
                  <div>

                <div class="row no-print">
                <div class="col-12">
                    <button class='btn btn-sm btn-warning float-right'  type="reset" id="btncancelnilai" style='margin-right: 5px;'><i class='fas fa-chevron-circle-left'></i> Back</button>
                    <button class='btn btn-sm btn-default float-right'  onclick='print()' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Add debuti</button>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
                </div>
              </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- /.kesimpulan akar -->
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
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.kesimpulan akhir -->
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
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.corrective -->
    <div class="modal fade" id="DialogConfirm-corrective">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">Corrective</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form data-parsley-validate="" novalidate="" autocomplete="off">
            <input type ="hidden" name="id" id="id"/>
            <div class="form-group row" style="padding-left: 25px;">
                <input type="radio" id="status" name="status" value="CLOSED">&ensp;
                <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                <input type="radio" id="status" name="status" value="OPEN">&ensp;
                <label for="OPEN">OPEN</label>&ensp;
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
                  <input type ="text" name="corrective" id="corrective" class="form-control" placeholder="taggal closed corrective..."/>
              </div>                        
          </div>
          </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" onclick="update_corrective()" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- /.corrective -->
    <div class="modal fade" id="DialogConfirm-preventive">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">Preventive</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form data-parsley-validate="" novalidate="" autocomplete="off">
            <input type ="hidden" name="id" id="id"/>
            <div class="form-group row" style="padding-left: 25px;">
                <input type="radio" id="status" name="status" value="CLOSED">&ensp;
                <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                <input type="radio" id="status" name="status" value="OPEN">&ensp;
                <label for="OPEN">OPEN</label>&ensp;
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
                  <input type ="text" name="preventive" id="preventive" class="form-control" placeholder="taggal closed preventive..."/>
              </div>                        
          </div>
          </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" onclick="update_preventive()" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

              
</div>

<script type="text/javascript">
        $(document).bind('keydown', 'ctrl+p', function () {
                    print();
                });
 </script>

<script type="text/javascript">
    	$(function(){
		    $("#corrective,#preventive").datepicker({
			format:'yyyy/dd/mm'
		    });
                });

    $(document).ready(function () {
        var formbankquota, formdatabankquota, url_index, url_post, idevaluasinilai, actiondatanilai;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        $("#btncancelnilai").click(function () {
            ToContent(url_index);
        });
    });

  url_analisis  = '<?php echo $url_analisis; ?>';
  url_akar = '<?php echo $url_akar; ?>';
  url_akhir = '<?php echo $url_akhir; ?>';
  url_ditindaklajuti = '<?php echo $url_ditindaklajuti; ?>';
  url_update_corrective = '<?php echo $url_update_corrective; ?>';
  url_update_preventive = '<?php echo $url_update_preventive; ?>';

  function kesimpulan_akar() {
    $('#DialogConfirm').modal('show');
    $("#DialogConfirm  input[name=id]").val('<?php echo $preview->id_formulir ?>');
  }
  function akhir() {
    $('#DialogConfirm-akhir').modal('show');
    $("#DialogConfirm-akhir  input[name=id]").val('<?php echo $preview->id_formulir ?>');
  }

  function corrective(id) {
    $('#DialogConfirm-corrective').modal('show');
    $("#DialogConfirm-corrective  input[name=id]").val(id);
  }

  function preventive(id) {
    $('#DialogConfirm-preventive').modal('show');
    $("#DialogConfirm-preventive  input[name=id]").val(id);
  }
  function insert_akar() {
      $.ajax({
          url: url_akar,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm-akar input[name=id]").val(),
              akar: $("#DialogConfirm-akar textarea[name=akar]").val()
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }
  
  function insert_akhir() {
      $.ajax({
          url: url_akhir,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm-akhir input[name=id]").val(),
              akhir: $("#DialogConfirm-akhir textarea[name=akhir]").val(),
              status: $("#DialogConfirm-akhir input[name=status]:checked").val(),
              dilanjuti: $("#DialogConfirm-akhir input[name=dilanjuti]").val()
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function insert_analisis() {
        $.ajax({
            url: url_analisis,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#DialogConfirm input[name=id]").val(),
                code: $("#DialogConfirm input[name=code]").val(),
                personel: $("#DialogConfirm textarea[name=personel]").val(),
                material: $("#DialogConfirm textarea[name=material]").val(),
                alat_mesin: $("#DialogConfirm textarea[name=alat_mesin]").val(),
                metode: $("#DialogConfirm textarea[name=metode]").val(),
                sarana: $("#DialogConfirm textarea[name=sarana]").val(),
                akar: $("#DialogConfirm textarea[name=akar]").val(),
                //  --- approve ---
                setuju: $("#DialogConfirm input[name=setuju]").val(),
                reason: $("#DialogConfirm input[name=reason]").val()
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                window.location.reload(true);
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }

    function update_corrective() {
      $.ajax({
          url: url_update_corrective,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm-corrective input[name=id]").val(),
              status: $("#DialogConfirm-corrective input[name=status]:checked").val(),
              date: $("#DialogConfirm-corrective input[name=corrective]").val(),
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function update_preventive() {
      $.ajax({
          url: url_update_preventive,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm-preventive input[name=id]").val(),
              status: $("#DialogConfirm-preventive input[name=status]:checked").val(),
              date: $("#DialogConfirm-preventive input[name=preventive]").val(),
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }


  $("#namaKaryawan").trigger("chosen:updated");
  $("#namaKaryawan").chosen({max_selected_options: 6});

</script>


<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">FORM ROOT CAUSE ANALYSIS : <?php echo $preview->improvement_code ?></font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" id="id"/>
                <input type ="hidden" name="code" id="code" value="<?php echo $preview->improvement_code ?>"/>
                <input type ="hidden" name="setuju" id="setuju" value="1"/>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="personel" id="personel" class="form-control" rows="2" placeholder="1. PERSONEL ..."></textarea>
                    </div>                        
                </div>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="material" id="material" class="form-control" rows="2" placeholder="2. MATERIAL ..."></textarea>
                    </div>                        
                </div>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="alat_mesin" id="alat_mesin" class="form-control" rows="2" placeholder="3. ALAT / MESIN ..."></textarea>
                    </div>                        
                </div>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="metode" id="metode" class="form-control" rows="2" placeholder="4. METODE / PROSEDUR ..."></textarea>
                    </div>                        
                </div>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="sarana" id="sarana" class="form-control" rows="2" placeholder="5. SARANA PENUJANG KRITIS / LINGKUNGAN ..."></textarea>
                    </div>                        
                </div>
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="akar" id="akar" class="form-control" rows="2" placeholder="Kesimpulan dari akar permasalahan : ..."></textarea>
                    </div>                        
                </div>
                
                  </div>
               
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insert_analisis()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
            </div>
        </div>
    </div>
</div>



    


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
                      <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Department Terkait</td>
                      <td width="25%" > : 
                        <?php
                            if ($dept) {
                              foreach ($dept as $rowdept) {
                                ?>
                                    ( <?php echo $rowdept['department_name'] ; ?> )
                                  <?php
                              }
                          }
                        ?>
                      </td>
                      </tr>
                  </tr>
                </tbody>
              </table>
              <br>
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

              <div class="row no-print">
                <div class="col-12">
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
                  
              <div class="post clearfix" style="padding-bottom: 10px;margin-left: 15px;margin-right: 15px;">
                  <h6>1. PERSONEL :</h6>
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
                  <p style="margin-bottom: 0rem;">Kesimpulan dari akar permasalahan :</p>
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
                  <div>
                    <a href='#' onClick="add_correntive(<?php echo $idformula->id_formulir ?>)" class='btn btn-sm bg-gradient-secondary float-right' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Add CORRECTIVE</a>
                  </div> <br>
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
                      <th class="text-center">Attachment</th>
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
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowcorrective['nama_gambar'] ?></td>
                                  </tr>
                              <?php
                              }
                          }
                          ?>
                    </tbody>
                  </table>
                </div>


                <div class="col-12">
                    <a href='#' onClick="add_preventive(<?php echo $idformula->id_formulir ?>)" class='btn btn-sm bg-gradient-secondary float-right' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Add CORRECTIVE</a>
                </div> 
                <br> <br>
                <div class="col-12 table-responsive" style="padding-left: 17px;padding-right: 17px;">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th class="text-center">PREVENTIVE ACTION</th>
                      <th class="text-center">Due Date</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">PIC</th>
                      <th class="text-center">Attachment</th>
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
                                  <td class="text-muted well well-sm shadow-none"><?php echo $rowpreventive['nama_gambar'] ?></td></td>
                                </tr>
                              <?php
                              }
                          }
                          ?>
                    </tbody>
                  </table>
                </div>
              </div>

             

            
          </div>
        </div>
      </div>
    </section>

</div>

<script type="text/javascript">
        $(document).bind('keydown', 'ctrl+p', function () {
                    print();
                });
 </script>

<script type="text/javascript">
  id = '<?php echo $preview->id_formulir ?>';
  url_add_approve = '<?php echo $url_add_approve; ?>';
  url_adddepartment = '<?php echo $url_adddepartment; ?>';
  url_correntive = '<?php echo $url_correntive; ?>';
  url_preventive = '<?php echo $url_preventive; ?>';
  
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

  function add_correntive(id) {
        ToContent(url_correntive + '/' + id);
    }

    function add_preventive(id) {
        ToContent(url_preventive + '/' + id);
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







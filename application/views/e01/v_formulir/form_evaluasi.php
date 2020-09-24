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
                                    ?><th class="text-center">Nama, Tanggal</th>                                        <?php
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
                    <a href='#' onClick='kirim()' class='btn btn-sm bg-gradient-info float-right' style='margin-right: 5px;'><i class='fas fa-paper-plane'></i> Kirim</a>
                    <a href='#' onClick='diterima()' class='btn btn-sm bg-gradient-secondary float-right' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Add Evaluasi</a>
                    <a href='#' onClick='add_dept()' class='btn btn-sm bg-gradient-secondary float-right' style='margin-right: 5px;'><i class='fas fa-file-signature'></i> Add Deparment</a>
                   
                    
                    <button class='btn btn-sm btn-warning float-right'  type="reset" id="btncancelnilai" style='margin-right: 5px;'><i class='fas fa-chevron-circle-left'></i> Back</button>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
                </div>
              </div>

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

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

<script type="text/javascript">
        $(document).bind('keydown', 'ctrl+p', function () {
                    print();
                });
 </script>

<script type="text/javascript">
    $(document).ready(function () {
        var formbankquota, formdatabankquota, url_index, url_post, idevaluasinilai, actiondatanilai;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        idevaluasinilai = $("#idevaluasinilai").val();
        
        $("#L").on("change paste keyup", function() {
        $("#RPN").val($("#n_l").val() * $("#S").val() * $("#D").val());
        });

        $("#S").on("change paste keyup", function() {
        $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
        });

        $("#D").on("change paste keyup", function() {
        $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
        });

       
        $("#btncancelnilai").click(function () {
            ToContent(url_index);
        });
    });


  url_evaluasi = '<?php echo $url_evaluasi; ?>';
  url_adddepartment = '<?php echo $url_adddepartment; ?>';
  id_formulir = '<?php echo $preview->id_formulir ?>';
  code_formulir = '<?php echo $preview->improvement_code ?>';
  L   = '<?php echo $preview->L ?>';
  S   = '<?php echo $preview->S ?>';
  D   = '<?php echo $preview->D ?>';
  RPN = '<?php echo $preview->RPN ?>';
  
  function diterima() {
    $('#DialogConfirm').modal('show');
    $("#DialogConfirm  input[name=id]").val(id_formulir);
    $("#DialogConfirm  input[name=code]").val(code_formulir);
    $("#DialogConfirm  input[name=L]").val(L);
    $("#DialogConfirm  input[name=S]").val(S);
    $("#DialogConfirm  input[name=D]").val(D);
    $("#DialogConfirm  input[name=RPN]").val(RPN);
  }

  function add_dept() {
    $('#DialogConfirm-dept').modal('show');
    $("#DialogConfirm-dept  input[name=id]").val(id_formulir);
    $("#DialogConfirm-dept  input[name=code]").val(code_formulir);
  }

  function kirim() {
    $('#DialogConfirm-kirim').modal('show');
  }


  function insert_evaluasi() {
      $.ajax({
          url: url_evaluasi,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm input[name=id]").val(),
              code: $("#DialogConfirm input[name=code]").val(),
              evaluasi: $("#DialogConfirm textarea[name=evaluasi_tindakan]").val(),
              l: $("#DialogConfirm input[name=L]").val(),
              s: $("#DialogConfirm input[name=S]").val(),
              d: $("#DialogConfirm input[name=D]").val(),
              rpn: $("#DialogConfirm input[name=RPN]").val()
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function insert_dept() {
      $.ajax({
          url: url_adddepartment,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm-dept input[name=id]").val(),
              code: $("#DialogConfirm-dept input[name=code]").val(),
              dept: $("#DialogConfirm-dept option:selected").val()
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
  $("#namaKaryawan").chosen({max_selected_options: 25});

</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">FORM EVALUASI </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" id="id"/>
                <input type ="hidden" name="code" name="code" />
                <div class="form-group" style="padding-left: 9px;">
                    <label>Evaluasi Terhadap Laporan Tindakan dan Resiko <span style="color:red">*</span></label>
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <textarea name="evaluasi_tindakan" id="evaluasi_tindakan" class="form-control" rows="5" placeholder="Enter ..."><?php echo $preview->evaluasi_tindakan ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row" style="padding-left: 15px;"> 

                    <label>L<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="L" id="L" required=""  minlength="1" maxlength="4" type="number" parsley-type="text" placeholder="input L" class="form-control"
                               value="<?php echo (isset($default['L'])) ? $default['L'] : ''; ?>"
                               <?php echo (isset($default['readonly_L'])) ? $default['readonly_L'] : ''; ?>
                               >
                    </div>
                    <label>S<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="S" id="S" required="" minlength="1" maxlength="10" type="number" parsley-type="text" placeholder="input S" class="form-control"
                               value="<?php echo (isset($default['S'])) ? $default['S'] : ''; ?>"
                               <?php echo (isset($default['readonly_S'])) ? $default['readonly_S'] : ''; ?>
                               >
                    </div>
                    <label>D<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-2">
                        <input name="D" id="D" required="" minlength="1" maxlength="10" type="number" parsley-type="text" placeholder="input D" class="form-control"
                               value="<?php echo (isset($default['D'])) ? $default['D'] : ''; ?>"
                               <?php echo (isset($default['readonly_D'])) ? $default['readonly_D'] : ''; ?>
                               >
                    </div>
                    <label>RPN</span>
                    </label>
                    <div class="col-3 col-lg-3">
                        <input name="RPN" id="RPN"  minlength="1" maxlength="10" type="text" parsley-type="text" placeholder="auto input" class="form-control"
                               value="<?php echo (isset($default['RPN'])) ? $default['RPN'] : ''; ?>"
                               <?php echo (isset($default['readonly_RPN'])) ? $default['readonly_RPN'] : ''; ?>
                              Readonly >
                    </div>
                  </div>
               
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insert_evaluasi()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
            </div>
        </div>
    </div>
</div>







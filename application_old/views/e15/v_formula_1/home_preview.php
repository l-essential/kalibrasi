<style>
.table td, .table th {
    padding: 0.35rem;
}
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PREVIEW</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">PREVIEW</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content page">
      <div class="container-fluid ">
        <div class="row ">
          <div class="col-12 ">


            <!-- Main content -->
            <div class="invoice p-3 mb-3 ">
              <!-- title row -->
            
                  <table nobr="true" class="col-sm-12">
                        <tbody style="font-family: initial;">
                        <tr>
                              <td width="21%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="20" style="opacity: .8"> <b> PT. L 'ESSENTIAL</b> </td>
                              <td width="52%" >&nbsp;</td>
                              <td width="1%" align="left" style="padding-left: 10px;"> Halaman</td>
                              <td width="14%" align="left"> : 1 dari 2</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ></td>
                              <td width="1%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                              <td width="14%"align="left"> : RNDK-F-029</td>
                              </tr>
                              <tr>
                              <td width="20%" ></td>
                              <td width="52%" align="center" ><b>FORMULA NOTIFIKASI PRODUK</b></td>
                              <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                              <td width="14%"align="left"> : 01</td>
                              </tr>
                              <tr>
                              <td width="20%" style="border-bottom: 1px solid #797979;"></td>
                              <td width="52%" align="center" style="border-bottom: 1px solid #797979;"><b></b></td>
                              <td width="15%" align="left"align="left" style="padding-left: 10px;border-bottom: 1px solid #797979;"> Tanggal berlaku</td>
                              <td width="25%" style="border-bottom: 1px solid #797979;"> : 12 Mei 2020</td>
                        </tr>
                        </tbody>
                      </table>
                 </br>
                 </br>
                  
              <!-- info row -->
              <table nobr="true" class="col-sm-12">
                <tbody style="font-family: initial;">
                <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Merek</td>
                      <td width="25%" > : <?php echo $preview->merek ?></td>
                      <td width="23%" > </td>
                      <td width="5%" align="left" style="padding-left: 10px;"> No. Formula</td>
                      <td width="14%" align="left"> : <?php echo $no_formula ?></td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Nama Produk</td>
                      <td width="25%" > : <?php echo $preview->nama_produk ?></td>
                      <td width="23%" > </td>
                      <td width="5%"  align="left" style="padding-left: 10px;"> No. Revisi</td>
                      <td width="14%"align="left"> : <?php echo $preview->no_revisi ?></td>
                  </tr>
                      <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Bentuk Sediaan</td>
                      <td width="25%" > : <?php echo $preview->bentuk_sediaan ?></td>
                      <td width="23%" > </td>
                      <td width="5%"  align="left" style="padding-left: 10px;"> Tgl. Berlaku</td>
                      <td width="14%"align="left"> : <?php echo $preview->tgl_berlaku ?></td>
                      </tr>
                  <tr>
                      <td width="15%" align="left"align="left" style="padding-left: 10px;"> Warna Sediaan</td>
                      <td width="25%" > : <?php echo $preview->warna_sediaan ?></td>
                      <td width="23%" > </td>
                      <td width="5%" align="left" style="padding-left: 10px;"> Formula Khusus</td>
                      <td width="25%" > : <?php echo $preview->formula_khusus ?></td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Bentuk Kemasan_</td>
                      <td width="25%" > </td>
                      <td width="23%" > </td>
                      <td width="5%" align="left" style="padding-left: 10px;"> Persamaan Produk</td>
                      <td width="25%" > : <?php echo $preview->persamaan_produk ?></td>
                  </tr>
                  <tr>
                      <td width="25%" align="left" style="padding-left: 10px;"> &emsp;1. Kemasan Primer</td>
                      <td width="25%" > : <?php echo $preview->kemasan_primer ?></td>
                      <td width="23%" > </td>
                      <td width="5%" align="left" style="padding-left: 10px;"></td>
                      <td width="25%" > </td>
                  </tr>
                  <tr>
                      <td width="25%" align="left" style="padding-left: 10px;"> &emsp;2. Kemasan Sekunder</td>
                      <td width="25%" > : <?php echo $preview->kemasan_sekunder ?></td>
                      <td width="20%" > </td>
                      <td width="15%" align="left" style="padding-left: 10px;"></td>
                      <td width="25%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Ukuran Kemasan</td>
                      <td width="25%" > : <?php echo $preview->ukuran_kemasan ?></td>
                      <td width="20%" > </td>
                      <td width="15%" align="left" style="padding-left: 10px;"> </td>
                      <td width="25%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Kategori*</td>
                      <td width="25%" > : <?php echo $preview->kategori ?></td>
                      <td width="20%" > </td>
                      <td width="15%" align="left" style="padding-left: 10px;"></td>
                      <td width="25%" > </td>
                  </tr>
                  <tr>
                      <td width="15%" align="left" style="padding-left: 10px;"> Sub Kategori*</td>
                      <td width="25%" > : <?php echo $preview->sub_kategori ?></td>
                      <td width="20%" > </td>
                      <td width="15%" align="left" style="padding-left: 10px;"></td>
                      <td width="25%" > </td>
                  </tr>
                </tbody>
              </table>
              <br>


              </h6><p>1. Komposisi</p></h6>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive" style="padding-left: 25px;padding-right: 25px;">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Dagang</th>
                      <th>INCI Name</th>
                      <th>Fungsi</th>
                      <th>No. CAS</th>
                      <th>Konsentrasi (%)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      if ($getdetail) {
                        foreach ($getdetail as $rowgetdetail) {
                          ?>
                        <tr>
                          <td><?php echo $rowgetdetail['no'] ; ?> </td>
                          <td><?php echo $rowgetdetail['nama_dagang'] ; ?> </td>
                          <td><?php echo $rowgetdetail['inci_name'] ; ?> </td>
                          <td><?php echo $rowgetdetail['fungsi'] ; ?> </td>
                          <td><?php echo $rowgetdetail['no_cas'] ; ?> </td>
                          <td><?php echo $rowgetdetail['konsentrasi'] ; ?> </td>
                        </tr>

                      <?php
                      }
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th class="text-center">Dibuat  oleh</th>
                      <th class="text-center">Disetujui oleh</th>
                      <th class="text-center">Diterima oleh</th>
                      <th class="text-center">Diketahui oleh</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center"><?php echo $preview->dibuat_oleh ?></td>
                      <td class="text-center"><?php echo $preview->disetujui_oleh ?></td>
                      <td class="text-center"><?php echo $preview->diterima_oleh ?></td>
                      <td class="text-center"><?php echo $preview->diketahui_oleh ?></td>
                    </tr>
                    <td class="text-center"><?php echo $preview->createtime ?></td>
                      <td class="text-center"><?php echo $preview->tgl_disetujui ?></td>
                      <td class="text-center"><?php echo $preview->tgl_diterima ?></td>
                      <td class="text-center"><?php echo $preview->tgl_diketahui ?></td>
                    </tr>
                    <tr>
                      <td class="text-center"><b>Cosmetic Product Development SPV</b></td>
                      <td class="text-center"><b>R&DC Manager</b></td>
                      <td class="text-center"><b>Regulatory Affairs Dept</b></td>
                      <td class="text-center"><b>Regulatory Affairs Manager</b></td>
                    </tr>
                  </tbody>
                </table>
              <!-- this row will not appear when printing -->
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
          <br>
              <table nobr="true" class="col-sm-12">
                    <tbody style="font-family: initial;">
                    <tr>
                          <td width="21%"><img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="20" style="opacity: .8"> <b> PT. L 'ESSENTIAL</b> </td>
                          <td width="52%" >&nbsp;</td>
                          <td width="1%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 2 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="52%" align="center" ></td>
                          <td width="1%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : RNDK-F-029</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="52%" align="center" ><b>FORMULA NOTIFIKASI PRODUK</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 01</td>
                          </tr>
                          <tr>
                          <td width="20%" style="border-bottom: 1px solid #797979;"></td>
                          <td width="52%" align="center" style="border-bottom: 1px solid #797979;"><b></b></td>
                          <td width="15%" align="left"align="left" style="padding-left: 10px;border-bottom: 1px solid #797979;"> Tanggal berlaku</td>
                          <td width="25%" style="border-bottom: 1px solid #797979;"> : 12 Mei 2020</td>
                    </tr>
                    </tbody>
                  </table>
                  </br>
                  </br>
                        
                  <!-- Table row -->
                  </h6><p>2. Prosedur Pembuatan</p></h6>
                  <div class="row">
                    <div class="col-12 table-responsive" style="padding-left: 25px;padding-right: 25px;">
                      <table class="table table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Prosedur Pembuatan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                          if ($getprosedur) {
                            foreach ($getprosedur as $rowprosedur) {
                              ?>
                                  <tr>
                                    <td style="width: 10px;"><?php echo $rowprosedur['no'] ; ?> </td>
                                    <td><?php echo $rowprosedur['prosedur_pembuatan'] ; ?> </td>
                                  </tr>
                              <?php
                            }
                          }
                        ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <br>

                  <!-- info row -->
                  <div class="col-12" style="border-bottom: 1px solid #adb5bd;margin-bottom: 15px;padding-bottom: 15px;">
                    </h6><p>3. Klaim Produk :</p></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $getformula2->klaim_produk; ?>
                    </p>
                  </div>
                  <div class="col-12" style="border-bottom: 1px solid #adb5bd;margin-bottom: 15px;padding-bottom: 15px;">
                    </h6><p>4. Cara Pakai :</p></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $getformula2->cara_pakai; ?>
                    </p>
                  </div>
                  <div class="col-12" style="border-bottom: 1px solid #adb5bd;margin-bottom: 15px;padding-bottom: 15px;">
                    </h6><p>5. Perhatian / Peringatan* :</p></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $getformula2->perhatian; ?>
                    </p>
                  </div>
                  <div class="col-12" style="border-bottom: 1px solid #adb5bd;margin-bottom: 15px;padding-bottom: 15px;">
                    </h6><p>6. Catatan :</p></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $getformula2->catataan; ?>
                    </p>
                  </div>
                  <div class="col-12" style="border-bottom: 1px solid #adb5bd;margin-bottom: 15px;padding-bottom: 15px;">
                    </h6><p>(*) : Diisi manual oleh Tim Regulatory Affairs</p></h6>
                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php echo $getformula2->keterangan; ?>
                    </p>
                  </div>
                  <br>
                  <br>


                    <!-- this row will not appear when printing -->
                  <div class="row no-print">
                    <div class="col-12">
                   
                    <?php 
                    
                    if($this->session->userdata('ses_department_name') == 2){
                      echo "";
                    } else if ($this->session->userdata('ses_department_name') == 'IT'){
                      echo "<a href='#' onClick='diterima()' class='btn btn-sm btn-warning float-right' style='margin-right: 5px;'><i class='fas fa-check'></i> Diterima</a>";
                      echo "<a href='#'  onClick='diketahui()' class='btn btn-sm btn-success float-right' style='margin-right: 5px;'><i class='fas fa-check'></i> Diketahui</a>";
                    } else if ($this->session->userdata('ses_department_name') == 'IT') {
                      echo "<a href='#'  onClick='diketahui()' class='btn btn-sm btn-success float-right' style='margin-right: 5px;'><i class='fas fa-check'></i> Diketahui</a>";
                    } else
                    echo "";
                    ?>
                    <div id="btn-setujui">
                      <a href='#' onClick='disetujui()' class='btn btn-sm btn-info float-right' style='margin-right: 5px;'><i class='fas fa-check'></i> Disetujui</a>
                    </div>
                    <button class='btn btn-sm btn-default float-right'  id='print' onclick='print()' style='margin-right: 5px;'><i class='fas fa-print'></i> Print</button>
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
   url_disetujui = '<?php echo $url_disetujui; ?>';
   url_diterima = '<?php echo $url_diterima; ?>';
   url_diketahui = '<?php echo $url_diketahui; ?>';

  accessdisetujui = checkaccess("btn_disetujui");
  accessditerima = checkaccess("btn_diterima");
  accessdiketahui = checkaccess("btn_diketahui");
  if (accessdisetujui == true) {
      $("#btn-setujui").show();
  } else {
      $("#btn-setujui").hide();
  }
  
  function diterima() {
    $('#DialogConfirm').modal('show');
    $("#DialogConfirm  input[name=id]").val('<?php echo $id_formula ?>');
  }
              
  function disetujui() {
      $.ajax({
          url: url_disetujui,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: '<?php echo $id_formula ?>'
          },
          success: function (data) {
               window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function insertditerima() {
      $.ajax({
          url: url_diterima,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm input[name=id]").val(),
              kategori: $("#DialogConfirm input[name=kategori]").val(),
              sub_kategori: $("#DialogConfirm input[name=sub_kategori]").val()
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function diketahui() {
      $.ajax({
          url: url_diketahui,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: '<?php echo $id_formula ?>'
          },
          success: function (data) {
              window.location.reload(true);
              _alert(data.msg, data.valid);
              

          }
      });
      return false;
  }

</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white"> Form Persetujuan </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" name="id" class="form-control" value="<?php echo $id_formula ?>"/>
                <p>FORMULA NOTIFIKASI PRODUK dengan No. Formula : <?php echo $no_formula ?> </p>
                <!-- <div class="form-group">
                  <select  name="status" id="status" class="form-control">
                    <option value="1">Terima</option>
                    <option value="2">Tolak</option>
                  </select>
                </div> -->
                <div class="form-group">
                  <input type ="text" required="" class="form-control" id="kategori" name="kategori" placeholder="Katagori"/>
                </div>
                <div class="form-group">
                  <input type ="text" required="" class="form-control" id="sub_kategori" name="sub_kategori" placeholder="sub katagori"/>
                </div>
               
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="insertditerima()" class="btn btn-sm btn-like" action="create">Setujui</button>
            </div>
        </div>
    </div>
</div>


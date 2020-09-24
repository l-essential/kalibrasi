 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1><?php echo $preview->improvement_code ?></h1> -->
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
            <!-- <form id="formdata" data-parsley-validate="" novalidate="">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" /> -->


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <table nobr="true" style="border-bottom: 1px solid;">
                    <tr>
                          <td width="20%"> <b>PT. L 'ESSENTIAL</b> </td>
                          <td width="54%" style="border-right: 1px solid;">&nbsp;</td>
                          <td width="12%" align="left" style="padding-left: 10px;"> Halaman</td>
                          <td width="14%" align="left"> : 1 dari 2</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b>FORMULIR PENANGANAN PENYIMPANGAN</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> No. Formulir</td>
                          <td width="14%"align="left"> : QASS-F-003</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b>BATCH DAN NON BATCH</b></td>
                          <td width="12%"  align="left"align="left" style="padding-left: 10px;"> Revisi</td>
                          <td width="14%"align="left"> : 00</td>
                          </tr>
                          <tr>
                          <td width="20%" ></td>
                          <td width="55%" align="center" style="border-right: 1px solid;"><b></b></td>
                          <td width="12%" align="left"align="left" style="padding-left: 10px;"> Tanggal berlaku</td>
                          <td width="25%" > : 1 September 2019</td>
                    </tr>
                  </table>

             <br/>
             <br/>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-5 invoice-col">
                   Nama Karyawan &emsp;&emsp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->namaKaryawan ?><br>
                   Department &ensp; : <?php echo $preview->department_name ?><br>
                   Role &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->id_role ?><br>
                   User Name&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->username ?><br>
                   Email &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $preview->email ?><br>
                   Note &ensp; : <?php echo $preview->note ?><br>
                   Status Login&ensp; : <?php echo $preview->status_login ?><br>
                  </address>
                </div>
                <!-- /.col -->
               
              </div>
             </br></br></br></br></br></br>
              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <p class="text-right">
                  <button type="button" id="btncanceldetail" class="btn btn-sm btn-warning"><li class='fa fa-save'></li> Back</button>
                  <button type="button" class="btn btn-sm btn-like"><li class='fa fa-save'></li> Print</button>
                   </p>
                </div>
              </div>
        <!-- </form> -->

            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->
   <script type="text/javascript">

        $('#tanggal').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

        $(document).ready(function () {
            var form, formdata, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();

            $("input:radio[name='statuspreview']").change(function () {
                checkpengawas();
            });

           actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdatadetail");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondatadetail").val(actiondata);
                    formdatadetail = form.serialize();
                    postdata(url_post, formdatadetail, url_index);
                }
            });
           
         $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });

        });
         function checkpengawas() {
            var dampak = $("input[name='statuspreview']:checked").val();
            if (dampak == '2') {
                $("#useraccess").show();
                $("#id_user").val('');
            } else {
                $("#useraccess").hide();
            }
        }
    </script>
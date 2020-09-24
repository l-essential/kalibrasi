
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">    
            <div class="card-header">
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdatadetail" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="periode_information" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="calibration_id" id="calibration_id" value="<?php echo $calibration_id; ?>" />


            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="periode_start" class="col-sm-3 control-label col-form-label">Periode Kalibrasi Mulai <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input name="periode_start" id="periode_start" type="text" required="" parsley-type="text" placeholder="input periode kalibrasi" class="form-control"
                               value="<?php echo (isset($default['periode_start'])) ? $default['periode_start'] : ''; ?>"
                               <?php echo (isset($default['readonly_periode_start'])) ? $default['readonly_periode_start'] : ''; ?>
                               >
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="periode_end" class="col-sm-3 control-label col-form-label">Periode Kalibrasi Akhir <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input name="periode_end" id="periode_end" type="text" required="" parsley-type="text" placeholder="input periode kalibrasi" class="form-control"
                               value="<?php echo (isset($default['periode_end'])) ? $default['periode_end'] : ''; ?>"
                               <?php echo (isset($default['readonly_periode_end'])) ? $default['readonly_periode_end'] : ''; ?>
                               >
                    </div>                        
                </div>

                <!-- <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Pelaksana <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="calibration_executor" name="calibration_executor" class="form-control" required="">
                        <?php foreach ($default['calibration_executor'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div> -->

                <div class="form-group row" id="vendor">
                <label for="katagori" class="col-sm-3 col-form-label">Nama Vendor <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="vendor_id" name="vendor_id" class="form-control" required="">
                        <?php foreach ($default['vendor_id'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Harga</label>
                  <div class="col-sm-9">
                    <input name="calibration_price" minlength="1" maxlength="30" id="calibration_price" type="text" parsley-type="text" placeholder="input harga kalibrasi" class="form-control money"
                    value="<?php echo (isset($default['calibration_price'])) ? $default['calibration_price'] : ''; ?>"
                    <?php echo (isset($default['readonly_calibration_price'])) ? $default['readonly_calibration_price'] : ''; ?>
                      >
                  </div>
                </div>

                <div class="form-group row">
                    <label for="periode_information" class="col-sm-3 col-form-label">Keterangan <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="periode_information" class="form-control" rows="3" <?php echo (isset($default['readonly_periode_information'])) ? $default['readonly_periode_information'] : ''; ?> ><?php echo (isset($default['periode_information'])) ? $default['periode_information'] : ''; ?></textarea>
                    </div>  
                </div> 

                <div class="col-sm-12">
                    <p class="text-right">
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
                    </p>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
</div>

<script type=”text/javascript”> 


</script>
<script type="text/javascript">
        $('#periode_start').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

        $('#datepicker1').datepicker( {
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'MM yy',
                onClose: function(dateText, inst) { 
                    var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                    $(this).datepicker('setDate', new Date(year, month, 1));
                }
            });


        $(document).ready(function () {
                var d = new Date();
                var m = d.getMonth() + 1; 
                var z = "/" + d.getFullYear() + "/" + m.toString().padStart(2, "0") + "/" + d.getDay().toString().padStart(2, "0") ;

                $('#h_th').val(d.getFullYear());
               
                var cekdatalog= '<?php echo $url_cekdatalog; ?>';
                var z = d.getDay().toString().padStart(2, "0") + "-" + m.toString().padStart(2, "0") + "-" + (d.getFullYear()+1) ;
               
                $('#periode_start').change(function() {
                $('#periode_end').val(z);
                });




            var form, formdatadetail, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdatadetail");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $('.money').unmask();
                    $("#actiondatadetail").val(actiondata);
                    formdatadetail = form.serialize();
                    postdata(url_post, formdatadetail, url_index);
                }
            });
            $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });
        });

    </script>
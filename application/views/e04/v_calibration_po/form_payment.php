
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
        <input type="hidden" name="checkdata1" id="checkdata1" value="harga" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
        <div class="main-content container-fluid">

            <div class="form-group row">
                        <label for="no_po" class="col-sm-2 col-form-label">No Po <span style="color:red">*</span></label>
                        <div class="col-sm-4">
                            <input name="no_po" minlength="1" maxlength="30" id="no_po" type="text" parsley-type="text" placeholder="input no po" class="form-control" required=""
                                value="<?php echo (isset($default['no_po'])) ? $default['no_po'] : ''; ?>"
                                <?php echo (isset($default['readonly_tools_no_po'])) ? $default['readonly_tools_no_po'] : ''; ?>
                                >
                        </div>  
                    </div> 

            <div class="form-group row">
                <label for="vendor_id" class="col-sm-2 col-form-label">Vendor Name <span style="color:red">*</span></label>
                <div class="col-sm-4">
                    <select id="vendor_id" name="vendor_id" class="form-control chosen-select" required="">
                            <?php foreach ($default['vendor_id'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Estimasi Kalibrasi <span style="color:red">*</span></label>
                <div class="col-sm-4">
                <textarea name="estimasi_calibration" placeholder="input keterangan estimasi kalibrasi" class="form-control" rows="2" <?php echo (isset($default['readonly_estimasi_calibration'])) ? $default['estimasi_calibration'] : ''; ?> ><?php echo (isset($default['estimasi_calibration'])) ? $default['estimasi_calibration'] : ''; ?></textarea>
                    </div>
                </div>
                
            <div class="form-group row">
                <label for="calibration_price" class="col-sm-2 col-form-label">Harga Kalibrasi <span style="color:red">*</span></label>
                <div class="col-sm-4">
                    <input name="calibration_price" minlength="2" maxlength="50" id="calibration_price" type="text" required=""  parsley-type="text" placeholder="input harga" class="form-control"
                            value="<?php echo (isset($default['calibration_price'])) ? $default['calibration_price'] : ''; ?>"
                            <?php echo (isset($default['readonly_calibration_price'])) ? $default['readonly_calibration_price'] : ''; ?>
                            >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="calibration_disc" class="col-sm-2 col-form-label">Diskon Harga %</label>
                <div class="col-sm-4">
                    <input name="calibration_disc" id="calibration_disc" type="text" parsley-type="text" placeholder="input diskon harga %" class="form-control"
                            value="<?php echo (isset($default['calibration_disc'])) ? $default['calibration_disc'] : ''; ?>"
                            <?php echo (isset($default['readonly_calibration_disc'])) ? $default['readonly_calibration_disc'] : ''; ?>
                            >
                </div>                        
            </div>  

            <div class="form-group row">
                <label for="calibration_disc_rp" class="col-sm-2 col-form-label">Diskon Harga Rupiah</label>
                <div class="col-sm-4">
                    <input name="calibration_disc_rp" id="calibration_disc_rp" type="text" parsley-type="text" placeholder="input diskon harga rupiah" class="form-control"
                            value="<?php echo (isset($default['calibration_disc_rp'])) ? $default['calibration_disc_rp'] : ''; ?>"
                            <?php echo (isset($default['readonly_calibration_disc_rp'])) ? $default['readonly_calibration_disc_rp'] : ''; ?>
                            >
                </div>                        
            </div>

            <div class="col-sm-6">
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
<script type="text/javascript">

        $(document).ready(function () {
            var form, formdatadetail, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
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

        $("#vendor_id").trigger("chosen:updated");
        $("#vendor_id").chosen();

    </script>


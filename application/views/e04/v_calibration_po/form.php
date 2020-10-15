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
       <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="calibrationpo_code" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <input type="hidden" name="user_pk" id="user_pk" value="<?php echo $this->session->userdata('ses_username') ?>" />
                <input type="hidden" name="department_pk" id="department_pk" value="<?php echo $this->session->userdata('ses_department_name') ?>" />

                <div class="main-content container-fluid">
                 <div class="form-group row">
                        <label for="calibrationpo_code" class="col-sm-2 col-form-label">NO PK  <span style="color:red">*</span></label>
                        <div class="col-sm-4">
                            <input name="calibrationpo_code" minlength="2" maxlength="50" id="calibrationpo_code" type="text"  parsley-type="text" placeholder="Auto no pk" class="form-control"
                                   value="<?php echo (isset($default['calibrationpo_code'])) ? $default['calibrationpo_code'] : ''; ?>"
                                   <?php echo (isset($default['readonly_calibrationpo_code'])) ? $default['readonly_calibrationpo_code'] : ''; ?>
                                   Readonly="">
                        </div>                        
                    </div>  

                    <div class="form-group row">
                        <label for="date_po" class="col-sm-2 col-form-label">Tanggal PK <span style="color:red">*</span></label>
                        <div class="col-sm-4">
                            <input name="date_po" minlength="2" maxlength="50" id="date_po" type="text" required=""  parsley-type="text" placeholder="input Tanggal PK" class="form-control"
                                   value="<?php echo (isset($default['date_po'])) ? $default['date_po'] : ''; ?>"
                                   <?php echo (isset($default['readonly_date_po'])) ? $default['readonly_date_po'] : ''; ?>
                                   >
                        </div>                        
                    </div>  

                    <!-- <div class="form-group row">
                        <label for="status_po" class="col-sm-2 col-form-label">Status Kalibrasi <span style="color:red">*</span></label>
                        <div class="col-sm-4">
                            <div class="demo-checkbox">
                                <input type="checkbox" id="status_po" name="status_po" value="0"/>
                                <label for="calibration_status">Draft</label><br>
                                <input type="checkbox" id="status_po" name="status_po" value="1"/>
                                <label for="calibration_status">Proses Vendor</label><br>
                                <input type="checkbox" id="status_po" name="status_po" value="2"/>
                                <label for="calibration_status">Barang diterima</label><br>
                                <input type="checkbox" id="status_po" name="status_po" value="3"/>
                                <label for="calibration_status">Proses Kalibrasi Selesai</label>
                            </div>                        
                        </div>                        
                    </div>  -->

                    <div class="form-group row">
                        <label for="calibration_type" class="col-sm-2 col-form-label">Tipe Kalibrasi</label>
                        <div class="col-sm-4">
                            <select name="calibration_type" id="calibration_type" class="form-control">
                                <option value="">- Please Select -</option>
                                <option  value="Internal">Internal</option>
                                <option  value="Eksternal">Eksternal</option>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="text-right">
                        <button type="reset" class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                        <button type="submit" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
                      </p>
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

    $('#date_po').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'calibrationpo_code': $("#calibrationpo_code").val()});
            homedetail(getdata);
        }



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                var resultdata = postaction(url_post, formdata);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'calibrationpo_code': resultdata.postdata.calibrationpo_code});
                    homedetail(getdata);
                    
                }
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var c_pohedaer_id = param.result.c_pohedaer_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + c_pohedaer_id);
    }
    
    
    $("#calibration_type").trigger("chosen:updated");
    $("#calibration_type").chosen();


</script>

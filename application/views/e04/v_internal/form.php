
<style>
 
#show8{
	color:red;
    border:1px solid red;
    padding:10px;
}
</style>
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
 <!-- value="Dev/O/QA/2020/02/62" -->
        <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="calibration_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" id="calibration_type" name="calibration_type" value="Eksternal">
            <input type="hidden" id="name_apps" name="name_apps" value="e04">
            <input type="hidden" id="h_kp" name="h_kp">
            <input type="hidden" id="h_kt" name="h_kt"> 
            <input type="hidden" value="<?php echo $this->session->userdata('ses_department_name'); ?>" id="h_or"  >
            <input type="hidden" id="h_th" name="h_th">
            <input type="hidden" id="h_bln" name="h_bln">
            <input type="hidden" id="h_no" name="h_no">


            <div class="main-content container-fluid">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">ID Alat</label>
                  <div class="col-sm-9">
                    <input name="calibration_code" minlength="1" maxlength="30" id="calibration_code" type="text" parsley-type="text" placeholder="Auto" class="form-control"
                    value="<?php echo (isset($default['calibration_code'])) ? $default['calibration_code'] : ''; ?>"
                    <?php echo (isset($default['readonly_calibration_code'])) ? $default['readonly_calibration_code'] : ''; ?>
                      readonly="readonly"/>
                  </div>
            </div>

            <div class="form-group row">
                <label for="tools_name" class="col-3 col-lg-3 col-form-label">Nama Alat</label>
                <div class="col-lg-9">
                    <input name="tools_name" id="tools_name" type="text" required="" parsley-type="text" placeholder="ketik minimal 2 kata untuk mencari nama alat" class="form-control"
                            value="<?php echo (isset($default['tools_name'])) ? $default['tools_name'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_name'])) ? $default['readonly_tools_name'] : ''; ?>
                            readonly="readonly"/>
                    <input type="hidden" id="tools_id" name="tools_id" value="<?php echo (isset($default['tools_id'])) ? $default['tools_id'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_id'])) ? $default['readonly_tools_id'] : ''; ?> />

                    <input type="hidden" id="tools_code" name="tools_code" class="form-control" value="<?php echo (isset($default['tools_code'])) ? $default['tools_code'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_code'])) ? $default['readonly_tools_code'] : ''; ?> />
                 </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Ruang Lingkup <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="scope_code" name="scope_code" class="form-control" required="">
                        <?php foreach ($default['scope_code'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <!-- <div class="form-group row">
                <label class="col-sm-3 col-form-label" autocomplete="off">Tanggal Awal Kalibrasi <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                      <input name="startcalibration_date" minlength="1" maxlength="30" id="startcalibration_date" type="text" required=""  parsley-type="text" placeholder="input tanggal awal" class="form-control"
                    value="<?php echo (isset($default['startcalibration_date'])) ? $default['startcalibration_date'] : ''; ?>"
                    <?php echo (isset($default['readonly_startcalibration_date'])) ? $default['readonly_startcalibration_date'] : ''; ?>
                      >
                      </div>
            </div>  -->

           <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Lokasi <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="location_name" name="location_name" class="form-control chosen-select" required="">
                        <?php foreach ($default['location_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

             <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Posisi <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="position_name" name="position_name" class="form-control chosen-select" required="">
                        <?php foreach ($default['position_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label" autocomplete="off">Tanggal Awal <span style="color:red">*</span></label>
                  <div class="col-sm-9">
                      <input name="startcalibration_date" minlength="1" maxlength="30" id="startcalibration_date" type="text" required=""  parsley-type="text" placeholder="input tanggal awal" class="form-control"
                    value="<?php echo (isset($default['startcalibration_date'])) ? $default['startcalibration_date'] : ''; ?>"
                    <?php echo (isset($default['readonly_startcalibration_date'])) ? $default['readonly_startcalibration_date'] : ''; ?>
                      Readonly="">
                      </div>
            </div> 

            <div class="form-group row">
                <label for="" class="col-sm-3 control-label col-form-label"></label>
                <div class="col-sm-3">
                    <div class="demo-checkbox">
                        <input type="checkbox" id="calibration_status" name="calibration_status" value="1"/>
                        <label for="calibration_status">Active</label>
                    </div>                        
                </div>                        
            </div> 

             <div class="form-group">
                <!-- <div id="divcalibration" style="display:none"></div><br/> -->
                <div id="divdetail" style="display:none"></div>
            </div>

               
            </div>
            <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'> Submit</i></button>
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
 $('#startcalibration_date').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

        

    $(document).ready(function () {
   
    var d = new Date();
    var m = d.getMonth() + 1; 
    var z = "/" + d.getFullYear() + "/" + m.toString().padStart(2, "0") + "/" + d.getDay().toString().padStart(2, "0") ;

    $('#h_th').val(d.getFullYear());
    // $('#h_bln').val(m.toString().padStart(2, "0"));
     

     var cekdatalog= '<?php echo $url_cekdatalog; ?>';
    $('#h_th').val(d.getFullYear());
    // $('#h_bln').val(m.toString().padStart(2, "0"));

    $('#startcalibration_date').change(function() {
      $('#calibration_code').val($('#h_or').val() + "/" + $('#h_kt').val() + "/" + $('#h_kp').val() + "/" + $('#h_th').val() + "/" + $('#h_no').val());
    });


    $('button').click(function() {
        var getkat=$('#tools_code').val();
      
      $('#h_kp').val(getkat);
      $('#calibration_code').val($('#h_or').val() + "/" + $('#h_kt').val() + "/" + $('#h_kp').val() + "/" + $('#h_th').val() + "/" + $('#h_no').val());
    });

    $('#scope_code').change(function() {
        var getruang=$('#scope_code').val();
        var h_th=$('#h_th').val();
        var h_bln=$('#h_bln').val();
      $('#h_kt').val(getruang);
            $.ajax(
                {
                    type: "POST",
                    url: cekdatalog,
                    dataType: "json",
                    data: {
                        getruang: getruang, 
                        h_th: h_th, 
                        h_bln: h_bln  
                    },
                    cache: false,
                    success:
                            function (data)
                            {   
                                var urut =data.nourut;
                                console.log(urut);
                                 $('#h_no').val(urut.toString().padStart(3, "0")); 
                             $('#calibration_code').val($('#h_or').val() + "/" + $('#h_kt').val() + "/" + $('#h_kp').val() + "/" + $('#h_th').val() + "/" + $('#h_no').val()); 
                            }
                });
            });
            
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'calibration_code': $("#calibration_code").val()});
            homedetail(getdata);
        }
         if (actiondata == 'update') {
            var calibration_status = '<?php echo $default['calibration_status']; ?>';
            if (calibration_status == '1') {
                $("#calibration_status").prop("checked", true);
            }
        }

            $("#tools_name").autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: "<?php echo site_url('Autocomplete/data_tools') ?>",
                        dataType: "json",
                        data: {
                            q: request.term
                        },
                        success: function (data) {
                            if (data.valid == false) {
                                $("#tools_name").val("");
                                $("#tools_code").val("");
                                $("#tools_id").val("");
                            }
                            response(data.contentdata);
                        }
                    });
                },
                dataType: "json",
                minLength: 2,
                autoFocus: true,
                select: function (event, result) {
                    var data = result.item;
                    $("#tools_id").val(data.id);
                    $("#tools_code").val(data.code);

                }
            });


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
                    var getdata = postaction('<?php echo $url_getdata; ?>', {
                                'calibration_code': $("#calibration_code").val(),
                                'startcalibration_date': $("#startcalibration_date").val(),
                            });
                    homedetail(getdata);    
                }

            }
        });

         
        
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
        });

    });

    function homedetail(param) {
        var calibration_id = param.result.calibration_id;
        $("#divcalibration").html("");
        $("#divcalibration").show();
        $("#divcalibration").load('<?php echo $url_homecalibration ?>' + '/' + calibration_id);
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + calibration_id);
        // --- sum calibration ---
    }

    function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }

    $("#calibration_name").trigger("chosen:updated");
    $("#calibration_name").chosen();
    $("#location_name").trigger("chosen:updated");
    $("#location_name").chosen();
    $("#position_name").trigger("chosen:updated");
    $("#position_name").chosen();
    // $("#tools_name").trigger("chosen:updated");
    // $("#tools_name").chosen();
    
         
</script>

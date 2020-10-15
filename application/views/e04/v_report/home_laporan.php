  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-file-contract"></i> <?php echo $title; ?></h1>
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
        <div class="col-12" id='divformdata'>
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

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="periode">Periode<span class="err_receive_date required" style="color:red">*</span>
                </label>
                <div class="col-sm-4">                         
                    <input type="text" id="periode_date_awal"  name="periode_date_awal" class="form-control" placeholder="dari tanggal"
                            value="<?php echo (isset($default['periode_date_awal'])) ? $default['periode_date_awal'] : ''; ?>"
                            <?php echo (isset($default['readonly_periode_date_awal'])) ? $default['readonly_periode_date_awal'] : ''; ?>      
                            />  
                </div>
                
                <div class="col-sm-4">          
                    <input type="text" id="periode_date_akhir"  name="periode_date_akhir" class="form-control"  placeholder="sampai tanggal"
                            value="<?php echo (isset($default['periode_date_akhir'])) ? $default['periode_date_akhir'] : ''; ?>"
                            <?php echo (isset($default['readonly_periode_date_akhir'])) ? $default['readonly_periode_date_akhir'] : ''; ?>      
                            />  
                </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-2 col-form-label">Ruang Lingkup </label>
                <div class="col-sm-4">
                   <select id="scope_code" name="scope_code" class="form-control">
                        <?php foreach ($default['scope_code'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-2 col-form-label">Departemen Name </label>
                <div class="col-sm-4">
                   <select id="location_name" name="location_name" class="form-control chosen-select">
                        <?php foreach ($default['location_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div>

             <!-- <div class="form-group row" id="approve">
               <label class="col-sm-2 col-form-label" for="">Kalibrasi</label>
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input name="calibration_type" id="calibration_type" type="radio" value="Internal" > Internal
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="calibration_type" id="calibration_type" value="External" > External
                    </label>
                </div>
            </div> -->

            <!-- <div class="form-group row">
                <label for="katagori" class="col-sm-2 col-form-label">Tipe Kalibrasi </label>
                <div class="col-sm-4">
                   <select id="calibration_type" name="calibration_type" class="form-control chosen-select">
                        <?php foreach ($default['calibration_type'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div> -->

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

        
        <div class="row no-print">
                <div class="col-12">
                    <button type="button" class="btn btn-sm btn-secondary" onclick="ToController('e04/Home')"><i class='fas fa-chevron-circle-left'> Back to home</i></button>
                    <button type="button" id="exceldata" name="btnpreview" class="btn btn-sm btn-info  float-right"><i class='far fa-file-excel'> Downloads</i></button>
                    <button type="button" id="btnpreview" name="btnpreview" class="btn btn-sm btn-like  float-right" style="margin-right: 5px;"><i class='fas fa-file-contract'> Preview</i></button>
                </div>
            </div>
        </form>
    </div>
    </div>
    
</div>
</div>
<div id='diviframe' style="display:none">
    <iframe id="contentiframe"  width="100%" height="500" frameBorder="0"></iframe>
    </div>
</div>
 
</div>

</section>
</div>


<script type="text/javascript">

    $('#periode_date_awal,#periode_date_akhir').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
     
    });

    $("#btnpreview").click(function () {

        if ($("#daritanggal").val() == '') {
            _alert("Isikan dari tanggal");
            $("#daritanggal").focus();

        } else if ($("#sampaitanggal").val() == '') {
            _alert("Isikan sampai tanggal");
            $("#sampaitanggal").focus();
        } else {

            var paramreport = '';
                paramreport = {
                    'daritanggal': $("#daritanggal").val(),
                    'sampaitanggal': $("#sampaitanggal").val(),
                    'scope_code': $("#scope_code").val(),
                    'calibration_code': $("#calibration_code").val(),
                    'calibration_type': $("#calibration_type").val(),

                };

            var resultdata = postaction('<?php echo $url_generatereport; ?>', paramreport);
            if (resultdata.valid !== false) {
                $("#divformdata").hide();
                $("#diviframe").show();
                injectHTML(resultdata.htmldata);
            } else {
                _alert(resultdata.message);
                return false;
            }

        }

         $("input[type=radio][name='calibration_type']").change(function () {
            checkstatus();
        });

        function checkstatus() {
        var status = $("input[name='calibration_type']:checked").val();
        if (status == 'Internal') {
            $("#userdata").show();
            $("#id_user").val('');
        } else {
            $("#userdata").hide();
        }
        
        }
        




    });

    function injectHTML(html_string) {
        var iframe = document.getElementById('contentiframe');

        var iframedoc = iframe.document;
        if (iframe.contentDocument)
            iframedoc = iframe.contentDocument;
        else if (iframe.contentWindow)
            iframedoc = iframe.contentWindow.document;

        if (iframedoc) {
            // Put the content in the iframe
            iframedoc.open();
            iframedoc.writeln(html_string);
            iframedoc.close();
        } else {
            //just in case of browsers that don't support the above 3 properties.
            //fortunately we don't come across such case so far.
            alert('Cannot inject dynamic contents into iframe.');
        }

    }

    $("#exceldata").click(function(){
             var url_excel = '<?php echo $url_excel; ?>';
             window.open(url_excel + '?daritanggal=' +  $("#daritanggal").val() + '&sampaitanggal=' + $("#sampaitanggal").val());
         });

    $("#scope_code").trigger("chosen:updated");
    $("#scope_code").chosen();
    $("#calibration_code").trigger("chosen:updated");
    $("#calibration_code").chosen();
    $("#calibration_type").trigger("chosen:updated");
    $("#calibration_type").chosen();




</script>

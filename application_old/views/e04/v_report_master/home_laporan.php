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
                <label for="katagori" class="col-sm-2 col-form-label">Department </label>
                <div class="col-sm-4">
                   <select id="department_name" name="department_name" class="form-control">
                        <?php foreach ($default['department_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div>

        
        <div class="row no-print">
                <div class="col-12">
                    <button type="button" class="btn btn-sm btn-secondary" onclick="ToController('e04/Calibration')"><i class='fas fa-chevron-circle-left'> Back to home</i></button>
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

    $("#btnpreview").click(function () {

            var paramreport = '';
                paramreport = {
                    'department_name': $("#department_name").val(),

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

    $("#department_name").trigger("chosen:updated");
    $("#department_name").chosen();

</script>

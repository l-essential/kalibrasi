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
            <form id="formdata" data-parsley-validate="" novalidate="">

                <div class="form-group row">
                    <label class="col-2 col-lg-1 col-form-label" for="periode">Periode<span class="err_receive_date required" style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-5">                            
                        <input type="text" id="daritanggal"  name="daritanggal" class="form-control" placeholder="dari tanggal"
                               value="<?php echo (isset($default['daritanggal'])) ? $default['daritanggal'] : ''; ?>"
                               <?php echo (isset($default['readonly_daritanggal'])) ? $default['readonly_daritanggal'] : ''; ?>      
                               />  
                    </div>
                    <div class="col-2 col-lg-1 text-center">  
                    <label>s/d</label>
                    </div>
                    
                    <div class="col-9 col-lg-5">                            
                        <input type="text" id="sampaitanggal"  name="sampaitanggal" class="form-control"  placeholder="sampai tanggal"
                               value="<?php echo (isset($default['sampaitanggal'])) ? $default['sampaitanggal'] : ''; ?>"
                               <?php echo (isset($default['readonly_sampaitanggal'])) ? $default['readonly_sampaitanggal'] : ''; ?>      
                               />  
                    </div>
                </div>

        </div>
        <div class="col-sm-11">
            <p class="text-right">
                <button type="button" id="btnpreview" name="btnpreview" class="btn btn-sm btn-like"><i class='fas fa-file-contract'> Preview</i></button>
                <button type="button" id="exceldata" name="btnpreview" class="btn btn-sm btn-info"><i class='far fa-file-excel'> Downloads</i></button>
            </p>
        </div>
        </form>
    </div>
    
</div>
</div>
<div id='diviframe' style="display:none">
    <iframe id="contentiframe" src="about:blank" width="100%" height="500" frameBorder="0"></iframe>
    </div>
</div>
 
</div>

</section>
</div>


<script type="text/javascript">

    $('#daritanggal,#sampaitanggal').datepicker({
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





</script>

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
              <li class="breadcrumb-item"><a href="#" onclick="ToController('lessential_pyp/home')">Home</a></li>
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
              <button type="button" class="btn bg-gradient-info btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick="importdata()">
                      <i class="fas fa-file-upload"></i> Import Data Penyimpangan</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                <thead>
                    <tr>
                        <th>No Penyimpangan</th>
                        <th>Nama</th>                      
                        <th>Tgl Penyimpangan</th>
                        <th>Nomer</th>
                        <th>Kategori</th>                      
                        <th>Tipe</th>
                        <th>Ruang Lingkup</th>
                        <th>Jenis</th>                      
                        <th>Etc</th>                  
                    </tr>
                </thead>                   
            </table>
        </div>
    </div>
</div>
</div>
</section>
</div>



<script type="text/javascript">
     url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';

    $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [5, 10, 25, 50, 100],
                [5, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                        {"data": "improvement_code"},
                        {"data": "title_improvement"},
                        {"data": "tanggal"},
                        {"data": "number"},
                        {"data": "id_katagori"},
                        {"data": "id_tipe"},
                        {"data": "id_ruanglingkup"},
                        {"data": "id_jenis"},
                        {"data": "etc"}
                        ]

        });

    });
    function adddata() {
        ToContent(url_add);
    }

    function editdata(id) {
        ToContent(url_edit + '/' + id);
    }
    function deletedata(id) {
        $('#DialogConfirm').modal('show');
        $("#DialogConfirm  input[name=id]").val(id);
    }
    function process_delete() {
        $.ajax({
            url: url_delete,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondata: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
               _alert(data.msg,data.valid);
            }
        });
        return false;
    }

    function importdata() {
        $('#DialogImportdata_komposisi').modal('show');

    }

    function import_komposisi() {
        var form, formdata_komposisi, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_importdata; ?>';
        url_index = '<?php echo $url_index; ?>';

        var formdata_komposisi = new FormData();

        var file_data = $('#uploadfile', "#formdata_komposisi").prop('files')[0];
        formdata_komposisi.append('uploadfile', file_data);
        formdata_komposisi.append('formdata_komposisi', $("#formdata_komposisi").serialize());

        $.ajax({
            type: 'POST',
            url: url_post,
            data: formdata_komposisi,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {

            },
            xhr: function () {
                $("#infoproses").html('<div class="alert" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading2.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                $("#btnprocess").hide();
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                        console.log(percentComplete);


                    }
                    ;
                }, false);

                return xhr;
            },
            success: function (returndata) {
                $("#infoproses").html("");
                $("#btnprocess").show();
                $('#DialogImportdata_komposisi').modal('hide');
                $('#dataintable').dataTable().fnReloadAjax();
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });
        return false;
    }
    
    function downloadtemplate(){
        window.open('<?php echo base_url().'allassets/template/template_import_master_komposisi.xlsx' ?>');
    }


</script>

<div id="DialogImportdata_komposisi" class="modal fade"  role="dialog" aria-labelledby="DialogImportdata_komposisi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8">
                Upload template for import data Penyimpangan</font></h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form id="formdata_komposisi" data-parsley-validate="" novalidate="">
                    <div class="main-content container-fluid">
                        <div class="form-group row">
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Download template for upload</LABEL>&nbsp;
                                 <button type="button" id="btndownloadtemlate" class="btn btn-default btn-circle" onclick="downloadtemplate()" title="Download template" data-toggle="tooltip"><i class="fas fa-file-excel"></i> </button>

                            </div>
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Upload file import from file template</LABEL>&nbsp;
                                <input type="file" class="form-control" id="uploadfile" name='uploadfile'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-Right">
                            <span id='infoproses'></span>
                            <button type="button" id="btnprocess" class="btn btn-space btn-like" onclick="import_komposisi()"> Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

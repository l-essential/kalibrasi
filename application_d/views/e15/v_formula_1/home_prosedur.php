 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header border">
                <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata_prosedur();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
                <button type="button" class="btn bg-gradient-info btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick="importdata()">
                      <i class="fas fa-file-upload"></i> Import Data Prosedur Pembuatan CSV</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            <div class="table-responsive">
                 <table id="dataintable_prosedur" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th>No</th>
                            <th>Prosedur Pembuatan</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<script type="text/javascript">

    url_grid_prosedur = '<?php echo $url_grid_prosedur; ?>';
    url_add_prosedur = '<?php echo $url_add_prosedur; ?>';
    url_edit_prosedur = '<?php echo $url_edit_prosedur; ?>';
    url_delete_prosedur = '<?php echo $url_delete_prosedur; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';


    accesscreate = checkaccess("add");
    accessedit = checkaccess("edit");
    accessdelete = checkaccess("delete");

    if (accesscreate == true) {
        $("#btncreate").show();
    } else {
        $("#btncreate").hide();
    }

    $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable_prosedur").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            // scrollY: 380,
            // scrollX: true,
            // scrollCollapse: true,
            // scroller: false,
            dom: "lfrtip",
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [5, 10, 15, 25,50,100],
                [5, 10, 15, 25,50,100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_prosedur,
                "type": 'POST',
            },
            "columns": [
                {
            "data": "id_satuan", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row.formula_prosedur_2;

                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata_prosedur(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata_prosedur(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }

                return btn;
            }
        },
        {"data": "no"},
        {"data": "prosedur_pembuatan"},
            ]

        });

    });

    function adddata_prosedur() {
        ToContent(url_add_prosedur);
    }

    function editdata_prosedur(id) {
        ToContent(url_edit_prosedur + '/' + id);
    }
    function deletedata_prosedur(id) {
        $('#DialogConfirm').modal('show');
        $("#DialogConfirm  input[name=id]").val(id);
    }
    function process_delete() {
        $.ajax({
            url: url_delete_prosedur,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondataprosedur: 'delete',
                '<?php echo $prefix_id_prosedur; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable_prosedur').dataTable().fnReloadAjax();
                }
                notif(data.valid, data.msg)

            }
        });
        return false;
    }

    function importdata() {
        $('#DialogImportdata_prosedur').modal('show');

    }

    function process_import() {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_import_prosedur; ?>';
        url_index = '<?php echo $url_index; ?>';

        var formdata = new FormData();

        var file_data = $('#uploaddata_prosedur', "#formdata_prosedur").prop('files')[0];
        formdata.append('uploaddata_prosedur', file_data);
        formdata.append('formdata_prosedur', $("#formdata_prosedur").serialize());

        $.ajax({
            type: 'POST',
            url: url_post,
            data: formdata,
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
                $('#DialogImportdata_prosedur').modal('hide');
                $('#dataintable_prosedur').dataTable().fnReloadAjax();
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });
        return false;
    }
    
    function downloadtemplate(){
        window.open('<?php echo base_url().'allassets/template/template_import_master_prosedur.xlsx' ?>');
    }


</script>
<div id="DialogImportdata_prosedur" class="modal fade"  role="dialog" aria-labelledby="DialogImportdata_prosedur" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8">
                Upload template for import data Prosedur Pembuatan</font></h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form id="formdata_prosedur" data-parsley-validate="" novalidate="">
                    <div class="main-content container-fluid">
                        <div class="form-group row">
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Download template for upload</LABEL>&nbsp;
                                 <button type="button" id="btndownloadtemlate" class="btn btn-default btn-circle" onclick="downloadtemplate()" title="Download template" data-toggle="tooltip"><i class="fas fa-file-excel"></i> </button>

                            </div>
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Upload file import from file template</LABEL>&nbsp;
                                <input type="file" class="form-control" id="uploaddata_prosedur" name='uploaddata_prosedur'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-Right">
                            <span id='infoproses'></span>
                            <button type="button" id="btnprocess" class="btn btn-space btn-like" onclick="process_import()"> Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
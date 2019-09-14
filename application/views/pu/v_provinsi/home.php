
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
               <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata()"><i class="fa fa-plus"></i> </button>
                 <button type="button" id="btncreate" class="btn btn-danger btn-circle" onclick="importdata()"  title="Import data from template" data-toggle="tooltip"><i class="fa fa-upload"></i> </button>
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th class="text-center" width="80px">Kode</th>   
                            <th class="text-center" >Provinsi</th>   
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
<script type="text/javascript">
    infoshorcuthome();
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
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


    datacolumn = [
        {
            "data": "id_satuan", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";
                }

                return btn;
            }
        },
        {"data": "kode_provinsi"},
        {"data": "provinsi"},
    ];
    setdatagrid();



    function process_delete() {
        $.ajax({
            url: url_delete,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondata: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val()
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }
    
    function importdata() {
        $('#DialogImportdata').modal('show');

    }

    function process_import() {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_import; ?>';
        url_index = '<?php echo $url_index; ?>';

        var formdata = new FormData();

        var file_data = $('#uploadfile', "#formdata").prop('files')[0];
        formdata.append('uploadfile', file_data);
        formdata.append('formdata', $("#formdata").serialize());

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
                $("#infoproses").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
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
                $('#DialogImportdata').modal('hide');
                $('#dataintable').dataTable().fnReloadAjax();
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });
        return false;
    }
    
    function downloadtemplate(){
        window.open('<?php echo base_url().'public/template/importdata/pu/provinsi/template_import_master_provinsi.xlsx' ?>');
    }



</script>
<div id="DialogImportdata" class="modal fade"  role="dialog" aria-labelledby="DialogImportdata" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h4 class="modal-title"><font color="white">Upload template for import data</font></h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form id="formdata" data-parsley-validate="" novalidate="">
                    <div class="main-content container-fluid">
                        <div class="form-group row">
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Download template for upload</LABEL>&nbsp;
                                 <button type="button" id="btndownloadtemlate" class="btn btn-info btn-circle" onclick="downloadtemplate()" title="Download template" data-toggle="tooltip"><i class="fas fa-file-excel"></i> </button>

                            </div>
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Upload file import from file template</LABEL>&nbsp;
                                <input type="file" class="form-control" id="uploadfile" name='uploadfile'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-left">
                            <span id='infoproses'></span>
                            <button type="button" id="btnprocess" class="btn btn-space btn-primary" onclick="process_import()"><p class='fa fa-save'>&nbsp;Process</p></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
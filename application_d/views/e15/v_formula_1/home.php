<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title; ?></h1>
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
             <div class="card-header border">
              <button type="button" id="btncreate" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
                      <i class="fas fa-file-signature"></i> Add Data</button> 
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
                    <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>No Formula</th>
                                <th>Merek</th>   
                                <th>Nama Produk</th> 
                                <th>Disetujui</th>
                                <th>Diterima</th>
                                <th>Diketahui</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>                
                    </table>
                </div>
            </div>
    </div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
    url_grid       = '<?php echo $url_grid; ?>';
    url_add        = '<?php echo $url_add; ?>';
    url_edit       = '<?php echo $url_edit; ?>';
    url_delete     = '<?php echo $url_delete; ?>';
    url_disetujui  = '<?php echo $url_disetujui; ?>';
    url_diterima   = '<?php echo $url_diterima; ?>';
    url_diketahui  = '<?php echo $url_diketahui; ?>';
    url_preview    = '<?php echo $url_preview; ?>'
    prefix_id      = '<?php echo $prefix_id; ?>';
    listbutton     = '<?php echo $this->session->userdata('listbutton'); ?>';


    accesscreate = checkaccess("add");
    accessedit = checkaccess("edit");
    accessdelete = checkaccess("delete");
    accessdisetujui = checkaccess("btn_disetujui");
    accessditerima = checkaccess("btn_diterima");
    accessdiketahui = checkaccess("btn_diketahui");

    if (accessditerima == true) {
        $("#btn").show();
    } else {
        $("#btn").hide();
    }


    datacolumn = [
        {
            "data": "id_satuan", "width": "10%",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                    btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-user-check'></i></a> &nbsp;";

                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }
                

                return btn;
            }
        },

        {"data": "no_formula"},
        {"data": "merek"},
        {"data": "nama_produk"},

       

        {"data": "id_satuan", "width": "10px",
         "bSortable": false,
         "mRender": function (data, type, row) {
            var btn = "";
            var idtr = row["<?php echo $prefix_id; ?>"];
            if (row.disetujui_oleh == null) {
                btn = btn + "<a href='javascript:void(0)' id='bntditerima' onClick='disetujui(" + idtr + ")' class='text-inverse'><small class='badge badge-warning'><i class='fas fa-times'></i> Menunggu </small></a>";
            } else {
                btn = btn + "<small class='badge badge-success'><i class='fas fa-check'></i> "+ row.disetujui_oleh +"</small>";
            }
            return btn;
            }
        },
        {"data": "id_satuan", "width": "10px",
         "bSortable": false,
         "mRender": function (data, type, row) {
            var btn = "";
            var idtr = row["<?php echo $prefix_id; ?>"];
            if (row.diterima_oleh == null) {
                btn = btn + "<a href='javascript:void(0)' id='btn' onClick='diterima(" + idtr + ")' class='text-inverse'><small class='badge badge-warning'><i class='fas fa-times'></i> Menunggu</small></a>";
            } else {
                btn = btn + "<small class='badge badge-success'><i class='fas fa-check'></i> "+ row.diterima_oleh +"</small>";
            }
            return btn;
            }
        },
        {"data": "id_satuan", "width": "10px",
         "bSortable": false,
         "mRender": function (data, type, row) {
            var btn = "";
            var idtr = row["<?php echo $prefix_id; ?>"];
            if (row.diketahui_oleh == null) {
                btn = btn + "<a href='javascript:void(0)' onClick='diketahui(" + idtr + ")' class='text-inverse'><small class='badge badge-warning'><i class='fas fa-times'></i> Menunggu </small></a>";
            } else {
                btn = btn + "<small class='badge badge-success'><i class='fas fa-check'></i> "+ row.diketahui_oleh +"</small>";
            }
            return btn;
            }
        },
    
        
    ];
    setdatagrid();

    function preview(id) {
        ToContent(url_preview + '/' + id);
    }

    function disetujui (id) {
        $('#Disetujui').modal('show');
        $("#Disetujui  input[name=id]").val(id);
    }

    function diterima(id) {
        $('#Diterima').modal('show');
        $("#Diterima  input[name=id]").val(id);
    }

    function diketahui(id) {
        $('#Diketahui').modal('show');
        $("#Diketahui  input[name=id]").val(id);
    }




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

    function setujui() {
        $.ajax({
            url: url_disetujui,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#Disetujui input[name=id]").val(),
            },
            success: function (data) {
                $('#Disetujui').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }

    function get_diterima() {
        $.ajax({
            url: url_diterima,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#Diterima input[name=id]").val(),
            },
            success: function (data) {
                $('#Diterima').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }

    function get_diketahui() {
        $.ajax({
            url: url_diketahui,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#Diketahui input[name=id]").val(),
            },
            success: function (data) {
                $('#Diketahui').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }



</script>

<div id="Disetujui" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="AdminLTE Logo" style="opacity: .8" width="35" height="35">
                Formuala Notifikasi Produk </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id"/>
                <h3> ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="setujui()" class="btn btn-sm btn-like" action="create">Oke</button>
            </div>
        </div>
    </div>
</div>

<div id="Diterima" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="AdminLTE Logo" style="opacity: .8" width="35" height="35">
                Formuala Notifikasi Produk </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id"/>
                <h3> ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="get_diterima()" class="btn btn-sm btn-like" action="create">Oke</button>
            </div>
        </div>
    </div>
</div>

<div id="Diketahui" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="AdminLTE Logo" style="opacity: .8" width="35" height="35">
                Formuala Notifikasi Produk </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id"/>
                <h3> ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="get_diketahui()" class="btn btn-sm btn-like" action="create">Oke</button>
            </div>
        </div>
    </div>
</div>
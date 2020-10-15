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
                            <th class="text-center" width="10px">Action</th>
                            <th>#</th> 
                            <th>Revisi</th>   
                            <th>tanggal Revisi</th>   
                            <th>Nama Merk</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi Produk</th> 
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
    url_setrevisi = '<?php echo $url_setrevisi; ?>';
    url_setfinis  = '<?php echo $url_setfinis; ?>';
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    url_preview = '<?php echo $url_preview ?>';
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
                 btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' title='preview' data-toggle='tooltip' data-original-title='preview'><i class='fas fa-file-contract'></i></a> &nbsp;";
                if (row.copy_data == '0') {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='edit' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='delete' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }

                return btn;
            }
        },
        {"data": "copy_data", "sClass": "text-center",
         "mRender": function (data, type, row) {
                var status = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                if (row.copy_data == '0') {
                    status = status + "<a href='javascript:void(0)' onClick='setfinis(" + idtr + ")' ><i class='far fa-check-square' title='finish' style='font-size:19px;'></i></a> &nbsp;&nbsp;";
                    status = status + "<a href='javascript:void(0)' onClick='setrevisi(1," + idtr + ")' ><i class='far fa-copy'  title='copy data' style='font-size:19px;'></i></a>";
                }else if (row.copy_data == '2'){
                    status = status + "<i class='far fa-check-circle' style='font-size:19px;color:#20c997'></i>";
                }else{
                    status = status + "<i class='far fa-times-circle' style='font-size:19px;color:#ff7979'></i>";
                }
                return status;
            }
        },
        {"data": "revisi"},
        {"data": "time"},
        {"data": "nama_merk"},
        {"data": "nama_produk"},
        {"data": "deskripsi_produk"},
        
    ];
    setdatagrid();

    
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
                actiondatadetail: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                notif(data.valid, data.msg)

            }
        });
        return false;
    }
    function preview(id) {
        ToContent(url_preview + '/' + id);
    }

    function setrevisi(status, id) {
        $.ajax({
            url: url_setrevisi,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                status: status,
                id: id,
            },
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
            }
        });
        return false;
    }

    function setfinis(id) {
        $.ajax({
            url: url_setfinis,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: id
            },
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
            }
        });
        return false;
    }


</script>

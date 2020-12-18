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
                            <th>Tanggal</th>
                            <th>Vendor</th>
                            <!-- <th>Item Description</th>  -->
                            <!-- <th>Qty Order/ Unit</th> -->
                            <!-- <th>Unit Price</th>
                            <th>Disc %</th>
                            <th>Total</th> -->
                            <!-- <th>Ppn 10%</th> -->
                            <!-- <th>Total + PPN 10%</th> -->
                            <th>Keterangan</th>
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
    url_setstatus = '<?php echo $url_setstatus; ?>';
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
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }

                return btn;
            }
        },
        {"data": "status_calibration", "sClass": "text-center",
         "mRender": function (data, type, row) {
                var status = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                if (row.status_calibration == '0') {
                    status = status + "<a href='javascript:void(0)' onClick='setstatus(1," + idtr + ")' ><i class='far fa-copy' style='font-size:19px;'></i></a>";
                }else {
                    status = status + "<i class='far fa-check-circle' style='font-size:19px;color:#20c997'></i>";
                }
                return status;
            }
        },
        {"data": "date_calibration", "width": "70px"},
        {"data": "vendor_name"},
        // {"data": "tools_name"},
        // {"data": "calibration_qty"},
        // {"data": 'calibration_price',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
        // {"data": "calibration_price"},
        // {"data": "calibration_disc"},
        // {"data": "total_harga"},
        // {"data": "ppn"},
        // {"data": 'disc_ppn',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
        {"data": "periode_information"},
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

    function setstatus(status, id) {
        $.ajax({
            url: url_setstatus,
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


</script>

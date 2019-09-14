
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
               <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" id="btncreatebunga" class="btn btn-info btn-circle" onclick="adddata_bunga()"><i class="fa fa-plus"></i> </button>
                <table id="dataintablebunga" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th>Periode</th>  
                            <th>Nilai bunga%</th> 
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
  <div id="DialogConfirmBunga" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmBungaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header btn-danger">
                        <input type ="hidden" name="id"/>
                        <h4 class="modal-title"><font color="white">Confirm for Delete Data</font></h4>
                    </div>
                    <div class="modal-body">
                        <font color="black">Are you sure delete this data ?</font>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="button" onclick="process_delete_bunga()" class="btn btn-danger" action="delete">Ok</button>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    
    url_grid_bunga = '<?php echo $url_grid_bunga; ?>';
    url_add_bunga = '<?php echo $url_add_bunga; ?>';
    url_edit_bunga = '<?php echo $url_edit_bunga; ?>';
    url_delete_bunga = '<?php echo $url_delete_bunga; ?>';
    prefix_id_bunga = '<?php echo $prefix_id_bunga; ?>';

 $(document).ready(function () {
        //initialize the javascript                
        $("#dataintablebunga").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            dom: "lfrtip",
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [10, 25, 50, 100,200,1000],
                [10, 25, 50, 100,200,1000]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_bunga,
                "type": 'POST',
            },
            "columns": [
                {
                    "data": "id", "width": "30px", "sClass": "center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn_bunga = "";
                        var trid_bunga = row['id_bankbunga'];
                        btn_bunga = btn_bunga + " <a href='#' onClick='editdata_bunga(" + trid_bunga + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit' ><i class='fas fa-edit'></i></a>";
                        btn_bunga = btn_bunga + " <a href='#' onClick='deletedata_bunga(" + trid_bunga + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";
                        return btn_bunga;
                    }
                },
                {"data": "periode"},
                {"data": "nilaibunga"},
            ]

        });

    });
    function adddata_bunga() {
        ToContent(url_add_bunga);
    }

    function editdata_bunga(id) {
        ToContent(url_edit_bunga + '/' + id);
    }
    function deletedata_bunga(id) {
        $('#DialogConfirmBunga').modal('show');
        $("#DialogConfirmBunga  input[name=id]").val(id);
    }
    function process_delete_bunga() {
        $.ajax({
            url: url_delete_bunga,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondatabunga: 'delete',
                '<?php echo $prefix_id_bunga; ?>': $("#DialogConfirmBunga input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirmBunga').modal('hide');
                if (data.valid == true) {
                    $('#dataintablebunga').dataTable().fnReloadAjax();
                }
                _alert(data.message, data.valid)

            }
        });
        return false;
    }




</script>
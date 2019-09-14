<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <table id="dataintablegroupuser" class="table table-bordered color-table muted-table" width="100%">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata_groupuser()"><i class="fa fa-plus"></i> </button>
                <thead>
                    <tr>
                        <th class="text-center" width="10px">Action</th>
                        <th class="text-center">UserID</th>    
                        <th class="text-center">Nama lengkap user</th> 
                    </tr>
                </thead>                 
            </table>
        </div>
    </div>
</div>

<div id="DialogConfirmGroupuser" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
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
                <button type="button" onclick="process_delete_groupuser()" class="btn btn-danger" action="delete">Ok</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    url_grid_groupuser = '<?php echo $url_grid_groupuser; ?>';
    url_add_groupuser = '<?php echo $url_add_groupuser; ?>';
    url_edit_groupuser = '<?php echo $url_edit_groupuser; ?>';
    url_delete_groupuser = '<?php echo $url_delete_groupuser; ?>';
    prefix_id_groupuser = '<?php echo $prefix_id_groupuser; ?>';


    $(document).ready(function () {
        $('#dataintablegroupuser').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid_groupuser,
                "type": 'POST',
            },
            dom: 'Blfrtip',
            'order': [[0, 'desc']],
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [10, 25, 50, 100, 200, 500, 1000],
                [10, 25, 50, 100, 200, 500, 1000]
            ],
            buttons: [
                {
                    extend: "copy",
                    key: '2',
                    className: "btn-sm glyphicon glyphicon-copy"
                },
                {
                    extend: "csv",
                    key: '3',
                    className: "btn-sm glyphicon glyphicon-file "
                },
            ],
            "columns": [
                {
                    "data": "id", "width": "10px", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn_groupuser = "";
                        var idtr_groupuser = row["<?php echo $prefix_id_groupuser; ?>"];
                        btn_groupuser = btn_groupuser + "<a href='javascript:void(0)' onClick='editdata_groupuser(" + idtr_groupuser + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                        btn_groupuser = btn_groupuser + "<a href='javascript:void(0)' onClick='deletedata_groupuser(" + idtr_groupuser + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";

                        return btn_groupuser;
                    }
                },
                {"data": "username", },
                {"data": "fullname", },
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id_groupuser]);
                return nRow;
            },

        });
    });



    function adddata_groupuser() {
        $("#tab_groupuser").load(url_add_groupuser);
    }

    function editdata_groupuser(id) {
        $("#tab_groupuser").load(url_edit_groupuser + '/' + id);
    }
    function deletedata_groupuser(id) {
        $.ajax({
            url: url_delete_groupuser,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondata: 'delete',
                '<?php echo $prefix_id_groupuser; ?>': id,
            },
            success: function (data) {
                _alert(data.msg, data.valid);
                if (data.valid == true) {
                    $('#dataintablegroupuser').dataTable().fnReloadAjax();
                }


            }
        });
        return false;
    }

</script>

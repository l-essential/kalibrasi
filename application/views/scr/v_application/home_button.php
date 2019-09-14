
<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
            </h4>
        </div>
        <div class="card-body">
            <table id="dataintablebutton" class="table table-bordered color-table muted-table" width="100%">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata()"><i class="fa fa-plus"></i> </button>
                <thead>
                    <tr>
                        <th class="text-center" width="10px">Action</th>
                        <th class="text-center">Button code</th>    
                        <th class="text-center">Button name</th> 
                        <th class="text-center">Icon</th>       
                    </tr>
                </thead>                 
            </table>
        </div>
    </div>
    </div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';

    datacolumn = [
        {
            "data": "id", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";

                return btn;
            }
        },
        {"data": "btncode", },
        {"data": "btnname", },
        {"data": "icon", },
    ];


    $(document).ready(function () {
        $('#dataintablebutton').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid,
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
            "columns": datacolumn,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintablebutton tbody tr').click(function (e) {
                    var clickedtd = $(e.target).closest('td');
                    $(this).closest('table').find('td').not(this).removeClass('selectedtr');
                    clickedtd.addClass('selectedtr');

                    accessdelete = checkaccess("delete");
                    if (accessdelete == true) {
                        //delete data
                        $(document).bind('keydown', 'shift+d', function () {
                            deletedata($(this)[0].id);
                        });
                    }
                });
                $('#dataintablebutton tbody tr').dblclick(function (e) {
                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }


                });
            },

        });
    });



    function adddata() {
        $("#tab_button").load(url_add);
    }

    function editdata(id) {
        $("#tab_button").load(url_edit + '/' + id);
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
                    $('#dataintablebutton').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }



</script>

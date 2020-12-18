<br/>
<br/>
<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <p class='fa fa-home'></p> <?php echo $title; ?>
        </div>
        <div class="panel-body">
            <table id="dataintable" class="table table-striped table-bordered table-hover" width="100%">
                <thead>
                    <tr>
                        <th class="actions">Actions</th>
                        <th>Menu Name</th>    
                    </tr>
                </thead>                   
            </table>
        </div>
        <div class="panel-footer">
            &nbsp;
        </div>
    </div>
</div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';

    $(document).ready(function () {
        //initialize the javascript                
        var dtablegroup = $("#dataintable").DataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            dom: "Blfrtip",
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [5, 10, 25, 50, 100],
                [5, 10, 25, 50, 100]
            ],
            buttons: [
                {
                    text: 'Add',
                    key: '1',
                    className: "btn-sm glyphicon glyphicon-plus-sign",
                    action: function (e, dt, node, config) {
                        adddata();
                    }
                },
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

                {
                    extend: "print",
                    key: '5',
                    className: "btn-sm glyphicon glyphicon-print"
                },
            ],
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                {
                    "data": "id_maplikasigroupmenu", "width": "60px", "sClass": "center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        btn = btn + " <a href='#' onClick='editdata(" + row.id_maplikasigroupmenu + ")' title='Edit Data'><p class='fa fa-pencil' title='Edit Data'> </p></i></a>";
                        btn = btn + " <a href='#0' onClick='deletedata(" + row.id_maplikasigroupmenu + ")' title='Hapus Data''><p class='fa fa-trash-o' title='Hapus Data'> </p></a>";
                        return btn;
                    }
                },
                {"data": "nama_menu"},
            ]
        });
    });



    function adddata() {
        $("#groupmenu-pills").load(url_add);
    }

    function editdata(id) {
        $("#groupmenu-pills").load(url_edit + '/' + id);
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
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }


</script>

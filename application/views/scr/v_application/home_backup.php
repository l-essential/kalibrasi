<style>
    td.details-control {
        background: url('<?php echo base_url('public/images'); ?>/details_open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.shown td.details-control {
        background: url('<?php echo base_url('public/images'); ?>/details_close.png') no-repeat center center;
    }
</style>    


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
                        <th>Detail</th>
                        <th>Kode</th>    
                        <th>Nama</th>    
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

    function format(d) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
                '<tr>' +
                '<td>Full name:</td>' +
                '<td>' + d.name + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extension number:</td>' +
                '<td>' + d.extn + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Extra info:</td>' +
                '<td>And any further details here (images etc)...</td>' +
                '</tr>' +
                '</table>';
    }

    $(document).ready(function () {
        //initialize the javascript                
        var dtable = $("#dataintable").DataTable({
            'order': [[2, 'asc']],
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
                    "data": "id_maplikasi", "width": "100px", "sClass": "center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        btn = btn + " <a href='#' onClick='editdata(" + row.id_maplikasi + ")' ><p class='fa fa-pencil'> </p></i></a>";
                        btn = btn + " <a href='#' onClick='deletedata(" + row.id_maplikasi + ")'><p class='fa fa-trash-o'> </p></a>";
                        return btn;
                    }
                },
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
                {"data": "kode_aplikasi"},
                {"data": "nama_aplikasi"},
            ]

        });

        // Add event listener for opening and closing details
        $('#dataintable tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dtable.row(tr);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
            }
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
                notif(data.valid, data.msg)

            }
        });
        return false;
    }


</script>

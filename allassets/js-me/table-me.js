function setdatagrid(idtable) {
    $(document).ready(function () {
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
        
            'order': [[0, 'asc']],
                    keys: true,
                    fixedHeader: true,
                    scrollY: true,
                    scrollX: true,
                    scrollCollapse: true,
                    scroller: false,
                    deferRender: true,
                    "bRetrieve": true,
                    "bDestroy": true,
                    lengthMenu: [
                        [15, 25, 50, 100],
                        [15, 25, 50, 100]
                    ],
        
            "columns": datacolumn,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintable tbody tr').click(function (e) {
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
            },

        });
    });
}

function setdatagridserverside(idtable) {
    $(document).ready(function () {
        $('#dataintable').DataTable({
            dom: 'Blrtip',
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
            responsive: true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": datacolumn,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintable tbody tr').click(function (e) {
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

                $('#dataintable tbody tr').dblclick(function (e) {
                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }
                });
            },

        });
    });
}

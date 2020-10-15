<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-body">
            <table id="dataintablegroupuser" class="table table-striped" width="100%">
              <thead>
                    <tr>
                        <th class="text-center">Department Approve</th>    
                        <th class="text-center">Status Approve</th> 
                        <th class="text-center">Date Time Approve</th> 
                        <th class="text-center">Alasan Tidak Setuju</th> 
                    </tr>
                </thead>                 
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    url_grid_detailapprove = '<?php echo $url_grid_detailapprove; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';


    $(document).ready(function () {
        $('#dataintablegroupuser').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid_detailapprove,
                "type": 'POST',
            },
            'order': [[0, 'desc']],
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            "searching": false,
            "paging": false,
            lengthMenu: [
                [10, 25, 50, 100, 200, 500, 1000],
                [10, 25, 50, 100, 200, 500, 1000]
            ],
            "columns": [
                        {"data": "department_name", "sClass": "text-center" },
                        {"data": "status_approve", "sClass": "text-center",
                                 "mRender": function (data, type, row) {
                                    var status = "-";
                                    if (row.status_approve == '0') {
                                        status = "<button class='btn btn-block btn-warning btn-xs'>Menunggu</button>";
                                    } else if (row.status_approve == '1'){
                                        status = "<button class='btn btn-block btn-success btn-xs'>Setuju</button>";
                                    }else {
                                        status = "<button class='btn btn-block btn-danger btn-xs'>Tidak Setuju</button>";
                                    }
                                    return status;
                                    }
                         },
                        {"data": "updatetime", "sClass": "text-center" },
                        {"data": "reason", "sClass": "text-center" },
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },

        });
    });

</script>
 
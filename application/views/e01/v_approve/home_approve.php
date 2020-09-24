<style>

.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #ffffff;
}


</style> 
 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-green-me" style=" box-shadow: 0 0 1px rgb(255, 255, 255), 0 1px 3px rgb(255, 255, 255);
    margin-bottom: 1rem;">
            <div class="card-body">
              <table id="dataintableapprove" class="table table-head-fixed" width="100%" style="border-top: 1px solid #ffffff; background-color: #fff;
    border-bottom: 0;
    box-shadow: inset 0 1px 0 #ffffff, inset 0 -1px 0 #ffffff;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 10;">
                    <thead>
                        <tr>
                          <!-- <th style="box-shadow: inset 0 1px 0 #ffffff, inset 0 -1px 0 #ffffff;"></th>  -->
                            <th style="box-shadow: inset 0 1px 0 #ffffff, inset 0 -1px 0 #ffffff;" width="70px">status</th> 
                            <th style="box-shadow: inset 0 1px 0 #ffffff, inset 0 -1px 0 #ffffff;">Alasan</th> 
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
    
    url_grid_approve = '<?php echo $url_grid_approve; ?>';
    url_edit_approve = '<?php echo $url_edit_approve; ?>';
    prefix_id_approve = '<?php echo $prefix_id_approve; ?>';

 $(document).ready(function () {
        //initialize the javascript                
        $("#dataintableapprove").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging":   false,
            "ordering": false,
            "info":     false,
            "searching": false,
            responsive: true,
            "ajax": {
                "url": url_grid_approve,
                "type": 'POST',
            },
            "columns": [
                // {
                //     "data": "id", "width": "150px", "sClass": "center",
                //     "bSortable": false,
                //     "mRender": function (data, type, row) {
                //         var btn_approve = "";
                //         var trid_approve = row['id_approve'];
                //         btn_approve = btn_approve + " <a href='#' onClick='editdata_approve(" + trid_approve + ")' class='text-inverse btn-secondary btn-sm' title='' data-toggle='tooltip' data-original-title='Edit' > update status<i class='far fa-question-circle'></i></a>";
                //         return btn_approve;
                //     }
                // },
               {
            "data": "status_approve", "width": "200px",
            "mRender": function (data, type, row) {
                var status = "-";
                if (row.status_approve == '0') {
                    status = "<a onClick='editdata_approve(" + row.id_approve + ")' class='btn btn-block btn-warning btn-sm'>Menunggu Status Approve <i class='fas fa-exclamation-circle'></i></a>";
                }else if(row.status_approve == '1') {
                    status = "<button class='btn btn-block btn-like btn-sm' disabled>Success Approve <i class='far fa-check-circle'></i></button>";
                
                } else {
                    status = "<button class='btn btn-block btn-danger btn-sm' disabled>Cannot Approve <i class='far fa-window-close'></i></button>";
                }
                return status;
            }
        },
                {"data": "reason"},
            ]

        });

    });
   
    function editdata_approve(id) {
        ToContent(url_edit_approve + '/' + id);
    }
   
</script>
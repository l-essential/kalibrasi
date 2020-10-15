 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-green-me">
            <div class="card-header">
              <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata_bankquota();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="dataintablenilai" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                           <th>Action</th> 
                            <th>Tindakan & Resiko</th>  
                            <th>L</th> 
                            <th>S</th> 
                            <th>D</th> 
                            <th>RPN</th> 
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
    
    url_home_nilai = '<?php echo $url_grid_nilaievaluasi; ?>';
    url_add_nilai= '<?php echo $url_add_nilai; ?>';
    url_edit_nilai = '<?php echo $url_edit_nilai; ?>';
    url_delete_nilai = '<?php echo $url_delete_nilai; ?>';
    prefix_prefix_evaluasi_tindakan = '<?php echo $prefix_prefix_evaluasi_tindakan; ?>';


     $(document).ready(function () {
        //initialize the javascript                
        $("#dataintablenilai").dataTable({
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
            "paging": false,
            lengthMenu: [
                [10, 25, 50, 100,200,1000],
                [10, 25, 50, 100,200,1000]
            ],
            responsive: true,
            "ajax": {
                "url": url_home_nilai,
                "type": 'POST',
            },
            "columns": [
                 {
                    "data": "id", "width": "30px", "sClass": "center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn_bankquota = "";
                        var trid_bankquota = row['id_evaluasi_tindakan'];
                        btn_bankquota = btn_bankquota + " <a href='#' onClick='editdata_bankquota(" + trid_bankquota + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit' ><i class='fas fa-edit'></i></a>";
                        btn_bankquota = btn_bankquota + " <a href='#' onClick='deletedata_bankquota(" + trid_bankquota + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";
                        return btn_bankquota;
                    }
                },
                {"data": "evaluasi_tindakan"},
                {"data": "L"},
                {"data": "S"},
                {"data": "D"},
                {"data": "RPN"},
            ]

        });

    });

    function adddata_bankquota() {
        ToContent(url_add_nilai);
    }

    function editdata_bankquota(id) {
        ToContent(url_edit_nilai + '/' + id);
    }
    function deletedata_bankquota(id) {
        $('#DialogConfirmQuota').modal('show');
        $("#DialogConfirmQuota  input[name=id]").val(id);
    }
    function process_delete_bankquota() {
        $.ajax({
            url: url_delete_nilai,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondatanilai: 'delete',
                '<?php echo $prefix_prefix_evaluasi_tindakan; ?>': $("#DialogConfirmQuota input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirmQuota').modal('hide');
                if (data.valid == true) {
                    $('#dataintablenilai').dataTable().fnReloadAjax();
                }
                _alert(data.message, data.valid)

            }
        });
        return false;
    }

</script>


 <div id="DialogConfirmQuota" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmQuotaLabel" aria-hidden="true">
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
                        <button type="button" onclick="process_delete_bankquota()" class="btn btn-danger" action="delete">Ok</button>
                    </div>
                </div>
            </div>
        </div>
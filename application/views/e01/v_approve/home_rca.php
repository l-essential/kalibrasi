 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-green-me">
            <div class="card-header">
              <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata_rca();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse" style="color: #ffffff;">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="dataintablerca" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                           
                            <th>Personel</th>  
                            <th>Material</th>
                            <th>Alat / Mesin</th> 
                            <th>Metode / Prosedur</th> 
                            <th>Sarana Penunjang</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
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
                        <button type="button" onclick="process_delete_rca()" class="btn btn-danger" action="delete">Ok</button>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    
    url_grid_rca = '<?php echo $url_grid_rca; ?>';
    url_add_rca = '<?php echo $url_add_rca; ?>';
    url_edit_rca = '<?php echo $url_edit_rca; ?>';
    url_delete_rca = '<?php echo $url_delete_rca; ?>';
    prefix_id_rootcause = '<?php echo $prefix_id_rootcause; ?>';

 $(document).ready(function () {
        //initialize the javascript                
        $("#dataintablerca").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            lengthMenu: [
                [10, 25, 50, 100,200,1000],
                [10, 25, 50, 100,200,1000]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid_rca,
                "type": 'POST',
            },
            "columns": [
                {
                    "data": "id", "width": "30px", "sClass": "center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn_rca = "";
                        var trid_rca = row['id_rootcause'];
                        btn_rca = btn_rca + " <a href='#' onClick='editdata_rca(" + trid_rca + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit' ><i class='fas fa-edit'></i></a>";
                        btn_rca = btn_rca + " <a href='#' onClick='deletedata_rca(" + trid_rca + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                        return btn_rca;
                    }
                },
                 
                {"data": "personel"},
                {"data": "material"},
                {"data": "alat_mesin"},
                {"data": "metode"},
                {"data": "sarana"},
            ]

        });

    });
    function adddata_rca() {
        ToContent(url_add_rca);
    }

    function editdata_rca(id) {
        ToContent(url_edit_rca + '/' + id);
    }
    function deletedata_rca(id) {
        $('#DialogConfirmBunga').modal('show');
        $("#DialogConfirmBunga  input[name=id]").val(id);
    }
    function process_delete_rca() {
        $.ajax({
            url: url_delete_rca,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondatarca: 'delete',
                '<?php echo $prefix_id_rootcause; ?>': $("#DialogConfirmBunga input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirmBunga').modal('hide');
                if (data.valid == true) {
                    $('#dataintablerca').dataTable().fnReloadAjax();
                }
                _alert(data.message, data.valid)

            }
        });
        return false;
    }




</script>
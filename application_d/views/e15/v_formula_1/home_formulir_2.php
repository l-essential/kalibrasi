 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header border">
              <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata_formula2();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            <div class="table-responsive">
                 <table id="dataintable_formula2" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th>Klaim Produk</th>
                            <th>Cara Pakai</th>
                            <th>Perhatian</th>
                            <th>Catatan</th>
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

    url_grid_formula_2 = '<?php echo $url_grid_formula_2; ?>';
    url_add_formula_2 = '<?php echo $url_add_formulir_2; ?>';
    url_edit_formula_2 = '<?php echo $url_edit_formula_2; ?>';
    url_delete_formula2 = '<?php echo $url_delete_formula2; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';


    accesscreate = checkaccess("add");
    accessedit = checkaccess("edit");
    accessdelete = checkaccess("delete");

    if (accesscreate == true) {
        $("#btncreate").show();
    } else {
        $("#btncreate").hide();
    }

    $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable_formula2").dataTable({
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
                "url": url_grid_formula_2,
                "type": 'POST',
            },
            "columns": [
                {
            "data": "id_satuan", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row.formula_id_2;

                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata_formula2(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata_formula2(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }

                return btn;
            }
        },
        {"data": "klaim_produk"},
        {"data": "cara_pakai"},
        {"data": "perhatian"},
        {"data": "catataan"},
            ]

        });

    });

    function adddata_formula2() {
        ToContent(url_add_formula_2);
    }

    function editdata_formula2(id) {
        ToContent(url_edit_formula_2 + '/' + id);
    }
    function deletedata_formula2(id) {
        $('#DialogConfirm').modal('show');
        $("#DialogConfirm  input[name=id]").val(id);
    }
    function process_delete() {
        $.ajax({
            url: url_delete_formula2,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondatarca: 'delete',
                '<?php echo $prefix_id_formula_2; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable_formula2').dataTable().fnReloadAjax();
                }
                notif(data.valid, data.msg)

            }
        });
        return false;
    }


</script>

<br/>
<div class="col-md-12">
    <div class="card card-outline-success">
       <div class="card-header">
              <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <div class="card card-outline-success">
                        <div class="card-header">
                            <span><strong>Menu Preview</strong></span>
                        </div>
                        <div class="card-body">
                            <?php echo $menupreview ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <div class="table-responsive">
                        <table id="dataintablemenu" class="table table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" width="10px">Actions</th>
                                    <!-- <th class="text-center" width="80px">ID Menu</th>    
                                    <th class="text-center" width="80px">ID Parent</th>  -->
                                    <th>Order</th>    
                                    <th>Parent Menu</th>    
                                    <th width="190px">Menu</th> 
                                    <th>Icon</th>    
                                    <th>Url Action</th>  
                                </tr>
                            </thead>                 
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer">

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
                btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";

                return btn;
            }
        },
        // {"data": "id_mmenu", },
        // {"data": "id_parent", },
        {"data": "urutan"},
        {"data": "parent_menu", },
        {"data": "nama_menu", },
        {"data": "icon"},
        {"data": "url_menu"},
    ];


    $(document).ready(function () {
        $('#dataintablemenu').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
           
            'order': [[0, 'desc']],
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [50, 100, 200, 500, 1000],
                [50, 100, 200, 500, 1000]
            ],
            "columns": datacolumn,
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintablemenu tbody tr').click(function (e) {
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
                $('#dataintablemenu tbody tr').dblclick(function (e) {
                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }


                });
            },

        });
    });



    function adddata() {
        $("#tab_menu").load(url_add);
    }

    function editdata(id) {
        $("#tab_menu").load(url_edit + '/' + id);
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
                    $('#dataintablemenu').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }



</script>
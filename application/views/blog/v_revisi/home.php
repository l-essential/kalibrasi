

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-like card-outline">
            <div class="card-header">
                Revisi ARTICLE
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>                      
                        <th>Slug Article</th>
                        <th>#</th>      
                    </tr>
                </thead>                   
            </table>
        </div>
    </div>
</div>
</div>
</section>



<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_preview = '<?php echo $url_preview; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
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
        $("#dataintable").dataTable({
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
            lengthMenu: [
                [5, 10, 25, 50, 100],
                [5, 10, 25, 50, 100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                            {
                                "data": "id_article", "width": "75px", "sClass": "text-center",
                                "bSortable": false,
                                "mRender": function (data, type, row) {
                                    var btn = "";
                                        btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + row.id_article + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-file-contract'></i></a> &nbsp;";
                                    
                                    return btn;
                                }
                            },
                            {"data": "name_category","width": "150px","sClass": "text-left"},
                            {"data": "slug_article"},
                            {"data": "status_article", "sClass": "text-center",
                              "mRender": function (data, type, row) {
                                    var status = "";
                                    var idtr = row["id_article"];
                                    if (row.status_article == '0') {
                                        status = status + "<a href='javascript:void(0)' onClick='setstatuslist(1," + idtr + ")' ><i class='far fa-square' style='font-size: 19px;'></i></a>";
                                    }
                                    return status;
                                }
                            },
                        
                        ]

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
               _alert(data.msg,data.valid);
            }
        });
        return false;
    }

     function preview(id) {
        ToContent(url_preview + '/' + id);
    }

    function setstatuslist(status, id) {
        $.ajax({
            url: url_setstatuslist,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                status: status,
                id: id,
            },
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
            }
        });
        return false;
    }






</script>

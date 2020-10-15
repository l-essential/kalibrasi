<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-book"></i> <?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#" onclick="ToController('lessential_pyp/home')">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
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
            <table id="dataintable" class="table table-striped" width="100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Sort Data</th>                      
                        <th>Kode Aplikasi</th>
                        <th>Nama Aplikasi</th>                        
                        <th>Icon</th>
                        <th>Status</th>               
                    </tr>
                </thead>                   
            </table>
        </div>
    </div>
</div>
</div>
</section>
</div>



<script type="text/javascript">
    url_setstatus = '<?php echo $url_setstatus; ?>';
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';

    $(document).ready(function () {
        //initialize the javascript                
        $("#dataintable").dataTable({
            'order': [[1, 'dsc']],
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
                    "data": "id_maplikasi", "width": "75px", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        btn = btn + "<td><a href='#' onClick='editdata(" + row.id_maplikasi + ")' class='text-muted'><i class='far fa-edit'></i></a></td>";
                        btn = btn + "&nbsp;&ensp;";
                        btn = btn + "<td><a href='#' onClick='deletedata(" + row.id_maplikasi + ")' class='text-muted'><i class='far fa-trash-alt'></i></a></td>";
                        return btn;
                    }
                },
                {"data": "sortdata"},
                {"data": "kode_aplikasi"},
                {"data": "nama_aplikasi"},
                {"data": "icon"},
                {"data": "statusdata", "sClass": "text-center",
                 "bSortable": false,
                 "mRender": function (data, type, row) {
                        var status = "";
                        if (row.statusdata == 'active'){
                        status = "<td><span class='badge badge-success'>Active</span></td>";
                        } else {
                        status = "<td><span class='badge badge-danger'>Nonactive</span></td>";
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


</script>

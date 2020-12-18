<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                User Login App
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
               <table id="dataintable" class="table  table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Date In</th>
                            <th>Date Out</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
</div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    url_logout = '<?php echo $url_logout; ?>';
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
            'order': [[1, 'desc']],
            keys: true,
           
            lengthMenu: [
                [5,10, 15, 25, 50,100],
                [5,10, 15, 25, 50,100]
            ],
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
            {"data": "id_satuan", "width": "10%",
             "bSortable": false,
             "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                    btn = btn + "<a href='#' onClick='logout(" + idtr + ")' class='text-inverse' title='Logout' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-sign-out-alt'></i></a> &nbsp;";

                    return btn;
                }
            },

                        {"data": "namaKaryawan"},
                        {"data": "date_in"},
                        {"data": "date_out"},
                    ]

        });

    });

    function logout(id) {
        $.ajax({
            url: url_logout,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: id
            },
            success: function (data) {
                $('#dataintable').dataTable().fnReloadAjax();
                _alert(data.msg, data.valid);
            }
        });
        return false;
    }

</script>
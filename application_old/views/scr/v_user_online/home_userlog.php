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
              <li class="breadcrumb-item"><a href="#" onclick="toIndex()">Home</a></li>
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
             DataLog
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
                                  <th>Userlog ID</th>
                                  <th>System Device</th>
                                  <th>Open By</th>
                                  <th>URL</th>
                                  <th>Access Time</th>
                                  <th>Username</th>
                                  <th>Difference </th>
                                </tr>
                                </thead>
                                <tbody>
                              
                                </tbody>
                              </table>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
</div>
                   

  <script type="text/javascript">
    url_gridlog = '<?php echo $url_gridlog; ?>';

    $(document).ready(function () {               
        $("#dataintable").dataTable({
            'order': [[0, 'desc']],
             keys: true,
            // 'lengthChange': false,
            // 'searching': false,
            lengthMenu: [
                [5,10, 15, 25, 50,100],
                [5,10, 15, 25, 50,100]
            ],
            responsive: true,
            "ajax": {
                "url": url_gridlog,
                "type": 'POST',
            },
            "columns": [
                        {"data": "id_userlog"},
                        {"data": "systemdevice"},
                        {"data": "browser"},
                        {"data": "url"},
                        {"data": "accesstime"},
                        {"data": "username"},
                        {"data": "hari", "width": "10%", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                            
                                btn = btn + "<a href='javascript:void(0)' class='text-inverse'>"+ row.hari +" Hari</a>";
                              
                            return btn;
                          }
                        },

                       ]

        });

    });


     function preview(id) {
        ToContent(url_preview + '/' + id);
    }


</script>

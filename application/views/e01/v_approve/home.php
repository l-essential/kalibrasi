<?php $templates = base_url() . 'allassets/'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="" onclick="ToController('e01/Formulir/')">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
                    <!-- TABLE: LATEST ORDERS -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">
                <div class="btn-group">
                        <button type="button" class="btn btn-default" onclick="ToController('e01/Formulir')">Data Penyimpangan Dibuat oleh saya</button>
                        <button type="button" class="btn btn-default" onclick="ToController('e01/Department_saya')">Data Penyimpangan Department Saya</button>
                        <button type="button" class="btn btn-success">Penyimpangan yang berkaitan dengan Department saya</button>
                      </div>
                 </h3>

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
                  <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                      <tr>
                          <th>ActionData</th>
                          <th>Approve User</th>
                          <th>No Penyimpangan</th> 
                          <th>Nama</th>  
                          <th>Tgl Penyimpangan</th>
                          <th>Status Penyimpangan</th> 
                          <th>Approve by Department</th> 
                      </tr>
                    </thead>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    url_preview = '<?php echo $url_preview; ?>';
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
           'order': [[2, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            // scrollY: 300,
            // scrollX: true,
            // scrollCollapse: false,
            // scroller: false,
            "paging": false,
            "bRetrieve": true,
            "bDestroy": true,
            "paging": true,
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
                  "data": "id_satuan", "width": "100px", "sClass": "text-center",
                  "bSortable": false,
                  "mRender": function (data, type, row) {
                      var btn = "";
                      var idtr = row["<?php echo $prefix_id; ?>"];
                      if (accessedit == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' data-toggle='tooltip' title='Edit' data-original-title='Edit'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;";
                      }

                      return btn;
                  }
              },
              {"data": "status_formulir", "sClass": "text-center",
               "mRender": function (data, type, row) {
                      var status = "-";
                      if (row.status_approve == '0') {
                          status = "<button class='btn btn-block btn-warning btn-xs'>Menunggu</button>";
                      } else if (row.status_approve == '1'){
                          status = "<button class='btn btn-block btn-like btn-xs'>Setuju</button>";
                      }else {
                          status = "<button class='btn btn-block btn-danger btn-xs'>Tidak Setuju</button>";
                      }
                      return status;
                  }
              },
              {"data": "improvement_code"},
              {"data": "title_improvement","width": "250px",},
              {"data": "tanggal"},
              {"data": "status_penyimpangan", "sClass": "text-center",
                  "mRender": function (data, type, row) {
                      var status = "-";
                      var idtr = row["<?php echo $prefix_id; ?>"];
                        if (row.status_penyimpangan == '0') {
                          status = "<a><i>DRAFT</i></a>";
                      } else if (row.status_penyimpangan == '1') {
                          status = "<a href='javascript:;' style='color:black'><i> EVALUASI</i></a>";
                      } else if (row.status_penyimpangan == '3') {
                          status = "<a href='javascript:;' style='color:black'><i> ANALISIS</i></a>";
                      } else if (row.status_penyimpangan == '5') {
                          status = "<a href='javascript:;' style='color:#ffc107'><i> OPEN</i></a>";
                      } else {
                          status = "<a href='javascript:;' style='color:green'><i> CLOSED</i></a>";
                      }
                      return status;
                  }
              },
              {"data": "id_satuan", "width": "70px", "sClass": "text-center",
                       "bSortable": false,
                       "mRender": function (data, type, row) {
                       var btn = "";
                       var idtr = row["<?php echo $prefix_id; ?>"];

                         btn = btn + "<button onClick='datadetail(\"" + row.improvement_code + "\"," + idtr + ")' class='btn btn-block btn-info btn-xs' title='' data-toggle='tooltip' data-original-title='Detail'>Info Detail <i class='far fa-check-circle'></i></button>";
                   
                      return btn;
                  }
              },
            ]

        });

    });

    
    function process_delete() {
        $.ajax({
            url: url_delete,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondata: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val()
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }
     function preview(id) {
        ToContent(url_preview + '/' + id);
    }


</script>
<?php $templates = base_url() . 'allassets/'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-paste"></i> <?php echo $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="" onclick="ToController('pu/Formulir/')">Home</a></li>
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
                <h3 class="card-title">Data Penyimpangan Evaluasi
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
                            <th>Action</th>
                            <th>Status</th>
                            <th>Code Penyimpangan</th> 
                            <th>Judul</th> 
                            <th>Katagori</th>
                            <th>Jenis</th>
                            <th>Ruang Lingkup</th>
                            <th>Tipe</th> 
                            <th>Tanggal</th>                     
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


    datacolumn = [
        {
            "data": "id_satuan", "width": "10px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-file-signature'></i></a>&nbsp;&nbsp;&nbsp;";
                }
               btn = btn + "<a href='" + url_preview + '/' + idtr + "' class='text-inverse' target='_blank' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-print'></i></a>";

                return btn;
            }
        },
         {
            "data": "status_formulir", "sClass": "text-center",
            "mRender": function (data, type, row) {
                var status = "-";
                if (row.status_formulir == '0') {
                    status = "<button class='btn btn-block btn-warning btn-xs'>Menunggu</button>";
                } else if (row.status_formulir == '1'){
                    status = "<button class='btn btn-block btn-like btn-xs'>Setuju</button>";
                }else {
                    status = "<button class='btn btn-block btn-danger btn-xs'>Tidak Setuju</button>";
                }
                return status;
            }
        },
        {"data": "improvement_code"},
        {"data": "title_improvement"},
        {"data": "nama_katagori"},
        {"data": "nama_jenis"},
        {"data": "nama_ruanglingkup"},
        {"data": "nama_tipe"},
        {"data": "tanggal"},
    ];
    setdatagrid();



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
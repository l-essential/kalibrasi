<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="ToController('e04/Home')">Home</a></li>
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
                <button type="button" id="btncreate" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
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
                    <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>Status Alat</th>
                                <th>Kode Kalibrasi</th>
                                <th>Alat</th>
                                <th>Lokasi</th>
                                <th>Reminder</th>
                                <th>tanggal kalibrasi Akhir</th>
                                <!-- <th>No Sertifikat</th> -->
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
    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_adddetail = '<?php echo $url_adddetail; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    url_detail = '<?php echo $url_detail; ?>';
    url_preview = '<?php echo $url_preview; ?>';
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
        {"data": "id_satuan", "width": "75px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                    btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='detail'><i class='fas fa-file-contract'></i></a> &nbsp;&nbsp;";
                
                if (accessedit == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                }
                if (accessdelete == true) {
                    btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                }
                

                return btn;
            }
        },
        {"data": "calibration_status", "sClass": "text-center",
         "mRender": function (data, type, row) {
                var status = "-";
                var idtr = row["<?php echo $prefix_id; ?>"];
                if (row.calibration_status == '1') {
                    status = "<span class='btn btn-block btn-like btn-xs'>Aktive</span>";
                }else {
                    status = "<span class='btn btn-block btn-danger btn-xs'>off</span>";
                }
                return status;
            }
        },
        {"data": "calibration_code"},
        {"data": "tools_code"},
        {"data": "locpos"},
        {"data": "reminder", "sClass": "text-center",
         "mRender": function (data, type, row) {
                var status = "-";
                var idtr = row["<?php echo $prefix_id; ?>"];
                
                if (row.reminder == '0') {
                    status = "<span class='btn btn-block btn-like btn-xs'>Masih Dalam Jangka Waktu</span>";
                }
                if (row.reminder == '1') {
                    status = "<span class='btn btn-block btn-warning btn-xs'>Expired 1 Bulan Lagi</span>";
                }
                if (row.reminder == '2') {
                    status = "<span class='btn btn-block btn-danger btn-xs'>Expired</span>";
                }
                return status;
            }
        },
        {"data": "startcalibration_date", "width": "100px", "sClass": "text-center",
            "bSortable": false,
            "mRender": function (data, type, row) {
                var btn = "";
                var idtr = row["<?php echo $prefix_id; ?>"];

                    btn = btn + "<a href='javascript:void(0)'  class='text-inverse' style='color:#20c997'>"+ row.startcalibration_date +" <i class='fas fa-calendar-check'></i></a> &nbsp;";
                
                return btn;
            }
        },
        
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

    // function add_detail(id) {
    //     ToContent(url_adddetail + '/' + id);
    // }

</script>
<style>
    .bg-ungu {
    background-color: #8820c9!important;
    color: #ffffff;
}
</style>

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
              <button type="button" id="btncreate" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
              <i class="far fa-calendar-check"></i> Add Jadwal</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-expand"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="table-responsive" style="padding-top:5px;">
                 <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th style="min-width: 237px;">Code</th>
                            <th style="min-width: 237px;">Start Date</th>
                            <th style="min-width: 237px;">End Date</th>
                            <th style="min-width: 237px;">Status</th>
                           
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
    url_edit = '<?php echo $url_edit; ?>';
    url_schedule = '<?php echo $url_schedule; ?>';
    url_lock_schedule = '<?php echo $url_lock_schedule; ?>';
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


    datacolumn = [
                {"data": "id_satuan", "width": "10px", "sClass": "text-center",
                "bSortable": false,
                "mRender": function (data, type, row) {
                    var btn = "";
                    var idtr = row["<?php echo $prefix_id; ?>"];
                    if (row.approve_schedule == 0) {
                    btn = btn + "<a href='javascript:void(0)' onClick='schedule(" + idtr + ")' class='text-inverse'><i class='far fa-calendar-alt' style='font-size:17px'></i></a> &nbsp;&nbsp;";
                    } else {
                    btn = btn + "<a href='javascript:void(0)' onClick='schedule(" + idtr + ")' class='text-inverse'><i class='far fa-calendar-minus' style='font-size:17px'></i></a> &nbsp;&nbsp;";
                    }
                    if (row.approve_schedule == 0) {
                        btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                    }
                    if (row.approve_schedule == 0) {
                        btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                    }
                    return btn;
                    }
                },
                {"data": "code_schedule"},
                {"data": "start_date"},
                {"data": "end_date"},
                {"data": "approve_schedule", "sClass": "text-center",
                "mRender": function (data, type, row) {
                        var status = "-";
                        var idtr = row["<?php echo $prefix_id; ?>"];
                        if (row.approve_schedule == '0') {
                            status = "<a href='#'  onClick='lock_schedule(" + idtr + ","+ row.start_date +","+ row.end_date +")'><i class='fas fa-unlock' style='color:#20c997'></i></a>";
                        }else {
                            status = "<i class='fas fa-lock' style='color:#dc3545'></i>";
                        }
                        return status;
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

    function schedule(id) {
        ToContent(url_schedule + '/' + id);
    }

    function lock_schedule(id, start_date, end_date) {
                    $('#DialogLock').modal('show');
                    $("#DialogLock  input[name=id]").val(id);
                    $("#DialogLock  input[name=start_date]").val(start_date);
                    $("#DialogLock  input[name=end_date]").val(end_date);
                }
                
    function lock_date() {
        $.ajax({
            url: url_lock_schedule,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#DialogLock input[name=id]").val(),
                approve: $("#DialogLock input[name=approve]").val(),
            },
            success: function (data) {
                $('#DialogLock').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }


</script>

<div id="DialogLock" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="AdminLTE Logo" style="opacity: .8" width="35" height="35"> Schedule </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id"/>
                <input type ="hidden" name="start_date" />
                <input type ="hidden" name="end_date" />
                <input type ="hidden" name="approve" value="1" />
                <h3>Apakah anda sudah yakin tidak ada yang akan di edit dengan schedule yg sudah dibuat ?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="lock_date()" class="btn btn-sm btn-like" action="create">Oke</button>
            </div>
        </div>
    </div>
</div>
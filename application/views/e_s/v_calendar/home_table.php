<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-alt"></i> <?php echo $title; ?></h1>
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
              <button id="btncreate" type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
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
               <table id="dataintable" class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
<section>
</div>

<script type="text/javascript">
    url_gridhome = '<?php echo $url_gridhome; ?>';
    url_add = '<?php echo $url_add; ?>';
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
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_gridhome,
                "type": 'POST',
            },
            dom: 'lfrtip',
            'order': [[3, 'desc']],
            // scrollY: 380,
            // scrollX: true,
            // scrollCollapse: true,
            // scroller: false,
            // "bRetrieve": true,
            // "bDestroy": true,
            lengthMenu: [
                [5, 10, 15, 20, 50, 100],
                [5, 10, 15, 20, 50, 100],
            ],
            "columns": [
                {
                    "data": "id_satuan", "width": "10px", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        var idtr = row["<?php echo $prefix_id; ?>"];

                       if (accessedit == true) {
                            btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                        }
                        if (accessdelete == true) {
                            btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                        }

                        return btn;
                    }
                },
                {"data": "title"},
                {"data": "description"},
                {"data": "start_date"},
                {"data": "end_date"},
            ],
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                $(nRow).attr("id", aData[prefix_id]);
                return nRow;
            },
            "initComplete": function (settings, json) {
                $('#dataintable tbody tr').click(function (e) {
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
                $('#dataintable tbody tr').dblclick(function (e) {

                    accessedit = checkaccess("edit");
                    if (accessedit == true) {
                        editdata($(this)[0].id);
                    }


                });
            },

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



</script>
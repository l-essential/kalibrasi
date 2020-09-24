<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-ticket-alt"></i> <?php echo $title; ?></h1>
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
                <div class="btn-group">
                        <button type="button" class="btn bg-gradient-secondary btn-sm" onclick="adddata();">Add Data</button>
                        <button type="button" class="btn btn-like btn-sm">Finis Job</button>
                        <button type="button" class="btn btn-danger btn-sm">Not Approve</button>
                      </div>
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
                            <th class="text-center" width="70px">Action</th>
                            <th class="text-center">Support ID</th>
                            <th class="text-left">Support Detail</th>
                            <th class="text-center">Progress Job</th>
                            <th class="text-center"> #</th>
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
    url_preview = '<?php echo $url_preview; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    url_status  = '<?php echo $url_status; ?>';
    url_disagree  = '<?php echo $url_disagree; ?>';
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
               {
                    "data": "id", "width": "10%", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        var idtr = row["<?php echo $prefix_id; ?>"];
                        btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-print'></i></a> &nbsp;";
                       
                            btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                         
                            btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                       
                        return btn;
                    }
                },
                {"data": "data", "sClass": "text-center",
                      "mRender": function (data, type, row) {
                              var btn = "";
                             btn= btn + "<a>"+ row.support_code +"</a><br/><small>Created "+ row.support_date +"</small>"
                              return btn;
                          }
                },
                {"data": "data", "sClass": "text-left",
                      "mRender": function (data, type, row) {
                              var btn = "";
                             btn= btn + "<a>"+ row.support_subject +" - "+ row.department_name +" </a><br/><p class='batas-text'> "+ row.support_message +"</p>"
                              return btn;
                          }
                },
                {"data": "data", "sClass": "text-center",
                      "mRender": function (data, type, row) {
                              var btn = "";
                                  btn = btn + "<div class='progress progress-sm'>"
                                  btn = btn + "<div class='progress-bar bg-green' role='progressbar' aria-volumenow='47' aria-volumemin='0' aria-volumemax='100' style='width: 47%'>"
                                  btn = btn + "</div></div><small>47% Complete</small>"
                              return btn;
                          }
                },
                {"data": "data", "sClass": "text-center",
                      "mRender": function (data, type, row) {
                                var btn = "-";
                                var idtr = row["<?php echo $prefix_id; ?>"];
                                if (row.support_status == '0') {
                                    btn = "<a href='javascript:;' style='color:green' onClick='status(" + idtr + ")'><span class='badge badge-info'> Wait</span> </a>";
                                } else if (row.support_status == '1'){
                                    btn = "<a href='javascript:;' style='color:green' onClick='status(" + idtr + ")'><span class='badge badge-success'> accept</span> </a>";
                                } else if (row.support_status == '2'){
                                    btn = "<a href='javascript:;' style='color:green' onClick='disagree(" + idtr + ")'><span class='badge badge-danger'>not approved</span> </a>";
                                } else if (row.support_status == '3'){
                                    btn = "<a href='javascript:;' style='color:green' onClick='finis(" + idtr + ")'><span class='badge badge-like'>Done</span> </a>";
                                }
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

    function status(id) {
      ToContent(url_status + '/' + id);
    }

    function disagree(id) {
      ToContent(url_disagree + '/' + id);
    }


</script>
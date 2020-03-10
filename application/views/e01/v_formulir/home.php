<?php $templates = base_url() . 'allassets/'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-map-signs"></i> Penyimpangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
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
          <div class="col-md-10">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Data Penyimpangan <span class="badge badge-info right"><?php echo $this->session->userdata('ses_namaDepartment') ?></span>
                </h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                  <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                    <tr>
                            <th>ActionData</th>
                            <th>Status</th>
                            <th>Code Penyimpangan</th> 
                            <th>Judul Penyimpangan</th>  
                            <th>Tanggal Terjadi Penyimpangan</th>
                            <th>Status Penyimpangan</th> 
                            <th>Approve by Department</th>                  
                        </tr>
                    </thead>
                  </table>
                
                <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-2">
            <!-- Info Boxes Style 2 -->

            
            <div id="btncreate" class="info-box mb-3 bg-secondary">
             
              <span class="info-box-icon">
                 <a href="javascript:;"  onclick="adddata();" style="color:#fff;">
                 <i class="fas fa-file-signature"></i></a>
              </span>
              
              <div  class="info-box-content">
                <span class="info-box-text">Add Laporan</span>
                <span class="info-box-number"><?php echo $total_add ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
              <?php

                if ($this->session->userdata('ses_id_role') == 2) {
                    $this->load->view('pages/penyimpangan');
                }
             ?>
         
            <!-- /.info-box -->
          </div>
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<input type="hidden" name="idapprovedetail" id="idapprovedetail" />
<div id="DialogDetail"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Detail Penyimpangan <span id="label_detail"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="contenttabdetail">
                    <li class=" nav-item"> <a href="#tab_detailDepartment" class="nav-link active" data-toggle="tab" aria-expanded="true"><span class='fas fa-home'></span> Department Approve</a> </li>
                 </ul>
                <div class="tab-content">
                    <div id="tab_detailDepartment" class="tab-pane active"> </div>
                </div>
                <script type="text/javascript">
                    $('#contenttabdetail a').on('shown.bs.tab', function (e) {
                        e.preventDefault()
                        var me = $(this);
                        var tabdata = me[0];
                        var tab_id = tabdata.getAttribute("href");
                        var url_tab = '';



                        if (tab_id == "#tab_detailDepartment") {
                            url_tab = '<?php echo $url_home_detailapprove . '/'; ?>' + $("#idapprovedetail").val();
                        }
                        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
                        $(tab_id).load(url_tab);


                    });

                    $(document).ready(function () {
                        $("#DialogDetail").on("show.bs.modal", function () {
                            $("#contenttabdetail").tabs().tabs('select', 0);
                            $("#tab_detailDepartment").load('<?php echo $url_home_detailapprove . '/'; ?>' + $("#idapprovedetail").val());
                        });
                    });

                </script>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script type="text/javascript">
    url_grid        = '<?php echo $url_grid; ?>';
    url_add         = '<?php echo $url_add; ?>';
    url_edit        = '<?php echo $url_edit; ?>';
    url_editapprove = '<?php echo $url_editapprove; ?>';
    url_homeapprove = '<?php echo $url_homeapprove; ?>';
    url_delete      = '<?php echo $url_delete; ?>';
    prefix_id       = '<?php echo $prefix_id; ?>';

    listbutton      = '<?php echo $this->session->userdata('listbutton'); ?>';
    
   

    accesscreate = checkaccess("add");
    accessedit = checkaccess("edit");
    accessapprove = checkaccess("approve");
    accessdelete = checkaccess("delete");

    if (accesscreate == true) {
        $("#btncreate").show();
    } else {
        $("#btncreate").hide();
    }

$(document).ready(function () {
        //initialize the javascript                
        $("#dataintable").dataTable({
           'order': [[2, 'desc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            // scrollY: 300,
            scrollX: true,
            scrollCollapse: false,
            scroller: false,
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
                  "data": "id_satuan", "width": "70px", "sClass": "text-center",
                  "bSortable": false,
                  "mRender": function (data, type, row) {
                      var btn = "";
                      var idtr = row["<?php echo $prefix_id; ?>"];
                      if (accessapprove == true) {
                         btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-user-check'></i></a>&nbsp;&nbsp;";
                      }
                      if (accessedit == true) {
                          btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;";
                      }
                      if (accessdelete == true) {
                          btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
                      }

                      return btn;
                  }
              },
              {"data": "status_formulir", "sClass": "text-center",
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
              {"data": "tanggal"},
              {"data": "status_penyimpangan", "sClass": "text-center",
                  "mRender": function (data, type, row) {
                      var status = "-";
                      if (row.status_penyimpangan == 'CLOSED') {
                          status = "<i class='fas fa-bookmark' style='color:red'></i>";
                      } else {
                          status = "<i class='far fa-bookmark' style='color:green'></i>";
                      
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

  function approve(id) {
        ToContent(url_homeapprove + '/' + id);
    }

  function datadetail(label, id) {
        $("#idapprovedetail").val(id);
        $('#DialogDetail').modal('show');
        $("#label_detail").html(label);
    }


</script>
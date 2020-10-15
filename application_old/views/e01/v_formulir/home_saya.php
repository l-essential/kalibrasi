<?php $templates = base_url() . 'allassets/'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Penyimpangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">
                <a href="javascript:;" class="btn btn-sm btn-secondary" onclick="adddata();">
                <i class="fas fa-file-signature"></i> Add Penyimpangan</a>
              </li>
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
                 <a href="javascript:;" class="btn btn-sm btn-info">Data Penyimpangan Dibuat oleh saya</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="javascript:;" class="btn btn-sm btn-default">Data Penyimpangan Department Saya</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="javascript:;" class="btn btn-sm btn-default" onclick="ToController('e01/approve')">Penyimpangan yang berkaitan dengan Department saya</a>
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
                            <th>Approve User</th>
                            <th>No Penyimpangan</th> 
                            <th>Nama</th>  
                            <th>Tgl Penyimpangan</th>
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

          <!--  -->
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  


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


<!-- <section class="content">
      <div class="container-fluid">
<div class="card card-success card-outline">
           <div class="card-header">
            <h3 class="card-title">
              Tabs Custom Content Examples
            </h3>
          </div>
          <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="false">Data Penyimpangan yang dibuat saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Data Penyimpangan Department saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Penyimpangan yng berkaitan dengan Department saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" id="custom-content-below-settings-tab" data-toggle="pill" href="#custom-content-below-settings" role="tab" aria-controls="custom-content-below-settings" aria-selected="true">Settings</a>
              </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur. 
              </div>
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                 Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
              </div>
              <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                 Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
              </div>
              <div class="tab-pane fade active show" id="custom-content-below-settings" role="tabpanel" aria-labelledby="custom-content-below-settings-tab">
                 Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
              </div>
            </div>
          
            </div>
          </div>
        </div>
      </div>
    </section> -->

</div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
    url_grid         = '<?php echo $url_grid; ?>';
    url_add          = '<?php echo $url_add; ?>';
    url_evaluasi = '<?php echo $url_evaluasi; ?>';
    url_analisis = '<?php echo $url_analisis; ?>';
    url_add_analisis = '<?php echo $url_add_analisis; ?>';
    url_edit         = '<?php echo $url_edit; ?>';
    url_approve      = '<?php echo $url_approve; ?>';
    url_homeapprove  = '<?php echo $url_homeapprove; ?>';
    url_homepreview  = '<?php echo $url_homepreview; ?>';
    url_delete       = '<?php echo $url_delete; ?>';
    prefix_id        = '<?php echo $prefix_id; ?>';
    url_kesimpulan   = '<?php echo $url_form_kesimpulan; ?>';

    listbutton       = '<?php echo $this->session->userdata('listbutton'); ?>';
    
   

    accesscreate = checkaccess("btn_add");
    accessedit = checkaccess("edit");
    accessapprove = checkaccess("approve");
    accessevaluasi = checkaccess("evaluasi");
    accessanalisis = checkaccess("analisis");
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

                      if (accessevaluasi == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='add_evaluasi(" + idtr + ")' class='text-inverse' title='Evaluasi' data-toggle='tooltip' data-original-title='Evaluasi'><i class='fas fa-calculator'></i></a>&nbsp;&nbsp;";
                      }
                      if (accessanalisis == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='analisis(" + idtr + ")' class='text-inverse' title='CAPA' data-toggle='tooltip' data-original-title='CAPA'><i class='fas fa-chalkboard-teacher'></i></a>&nbsp;&nbsp;";
                      }

                      if (accessapprove == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='approve(" + idtr + ")' class='text-inverse' data-toggle='tooltip' title='Approve' data-original-title='Approve'><i class='fas fa-user-check'></i></a>&nbsp;&nbsp;";
                      }
                      if (accessedit == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' data-toggle='tooltip' title='Edit' data-original-title='Edit'><i class='fas fa-edit'></i></a>&nbsp;&nbsp;";
                      }
                      if (accessdelete == true) {
                        btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' data-toggle='tooltip' title='Delete' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>&nbsp;&nbsp;";
                      }
                        btn = btn + "<a href='javascript:void(0)' onClick='preview(" + idtr + ")' class='text-inverse' data-toggle='tooltip' title='Preview' data-original-title='Preview'><i class='fas fa-file-contract'></i></a>";
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
              {"data": "title_improvement","width": "250px",},
              {"data": "tanggal"},
              {"data": "status_penyimpangan", "sClass": "text-center",
                  "mRender": function (data, type, row) {
                      var status = "-";
                      var idtr = row["<?php echo $prefix_id; ?>"];
                        if (row.status_penyimpangan == '0') {
                          status = "<a><i>DRAFT</i></a>";
                      } else if (row.status_penyimpangan == '1') {
                          status = "<a href='javascript:;' style='color:green'><i> EVALUASI</i></a>";
                      } else if (row.status_penyimpangan == '3') {
                          status = "<a href='javascript:;' style='color:green'><i> OPEN</i></a>";
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

  function add_evaluasi(id) {
        ToContent(url_evaluasi + '/' + id);
  }

  function approve(id) {
        ToContent(url_approve + '/' + id);
  }

  function analisis(id) {
        ToContent(url_analisis + '/' + id);
  }

  function add_analisis(id) {
        ToContent(url_add_analisis + '/' + id);
  }

  function preview(id) {
        ToContent(url_homepreview + '/' + id);
  }

  function kesimpulanakhir(id) {
      ToContent(url_kesimpulan + '/' + id);
  }

  function datadetail(label, id) {
        $("#idapprovedetail").val(id);
        $('#DialogDetail').modal('show');
        $("#label_detail").html(label);
    }

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });

</script>
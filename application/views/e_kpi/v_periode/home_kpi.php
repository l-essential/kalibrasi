<style type="text/css">  
   .word5 { word-spacing: 50px; }
   form {
        padding: 15px;
        border: 1px solid #5656562b;
        background: #fff;
        display: none;
        }
</style>
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
             <div class="card-header border">
                <button type="button" id="btncreate" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata_kpi();">
                <i class="fas fa-file-signature"></i> Add Data</button>
                <button type="button" class="btn bg-gradient-info btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick="importdata_kpi()">
                <i class="fas fa-file-upload"></i> Import Data KPI CSV</button>
                <!-- <button type="button" class="btn bg-gradient-info btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick="pembagi()">
                      <i class="fas fa-cog"></i> Pembagi</button> -->
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
                 <table id="dataintable" class="table table-bordered table-hover dataTable" width="100%">
                    <thead>
                        <tr>
                            <th style="padding-right: 250px;">KPI Objective</th>
                            <th class="text-center">Bobot (%)</th>
                            <th class="text-center">KPI Value</th>
                            <th style="padding-right: 601px;">Supporting_Information </th>
                            <th>Target Objective</th>
                            <th>Target KPI</th>
                            <th>Jan</th>
                            <th>Feb</th>
                            <th>Mar</th>
                            <th>Apr</th>
                            <th>Mei</th>
                            <th>Jun</th>
                            <th>Jul</th>
                            <th>Ags</th>
                            <th>Sep</th>
                            <th>Okt</th>
                            <th>Nov</th>
                            <th>Des</th> 
                            <th>Actual</th> 
                            <th>Target vs Actual</th>
                            <th>Pembagi</th> 
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                        <tr style="background-color: #d6d6d673;">
                            <td >Total : </td>
                            <td class="text-center"><?php echo $sumbobot ?>%</span></td>
                            <td class="text-center"><?php echo $sumvalue ?></span></td>
                            <td colspan="17"></td>
                        </tr>
                              
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- modal add department-->
<div id="DialogConfirm_pembagi" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header btn-like">
                    <h4 class="modal-title"><font color="white">Bobot <?php echo $bobot ?>%</font></h4>
                </div>
                <div class="modal-body">
                <input type ="text" name="id" id="id"/>
                <input type ="text" name="bobot" id="bobot" value="<?php echo $bobot ?>" onkeyup="sum();"/>
                <input type ="hidden" name="persen" id="persen" value="100" onkeyup="sum();"/>
                <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                    <label class="text-center">Jan</label>
                    <input name="jan" id="jan" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $jan ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Feb</label>
                    <input name="feb" id="feb" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $feb ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Mart</label>
                    <input name="mar" id="mar" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $mar ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Apr</label>
                    <input name="apr" id="apr" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $apr ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Mei</label>
                    <input name="mei" id="mei" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $mei ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Jun</label>
                    <input name="jun" id="jun" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $jun ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Jul</label>
                    <input name="jul" id="jul" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $jul ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Ags</label>
                    <input name="ags" id="ags" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $ags ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Sep</label>
                    <input name="sep" id="sep" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $sep ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Okt</label>
                    <input name="okt" id="okt" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $okt ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Nov</label>
                    <input name="nov" id="nov" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $nov ?>" onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Des</label>
                    <input name="des" id="des" type="number" required=""  parsley-type="number" class="form-control periode-awal"
                    value="<?php echo $des ?>" onkeyup="sum();">
                    </div>
                </div>
                

                <div class="col-sm-3">
                    <div class="form-group">
                   <p class="text-center">Pembagi </p>
                    <input name="pembagi" id="pembagi" type="number" required=""  parsley-type="number" class="form-control periode-akhir"
                            value="<?php echo $pembagi ?>" style="padding-left: 50%;">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p class="text-center">Actual </p>
                        <input name="act" id="act" type="text" parsley-type="text" class="form-control" Readonly style="padding-left: 50%;">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <p class="text-center">KPI Value </p>
                        <input name="kpivalue" id="kpivalue" type="text" parsley-type="text" class="form-control" Readonly style="padding-left: 50%;">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <p class="text-center">Target vs Actual </p>
                        <input name="tgtvsact" id="tgtvsact" type="text" parsley-type="text" class="form-control" Readonly style="padding-left: 50%;">
                    </div>
                </div>

                

                    </div>                   
                    </div>
                <div class="modal-footer" style="padding: 0rem;">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" onclick="insert_pembagi()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
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
        //initialize the javascript                
        $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            "scrollY": 350,
            "scrollX": true,
            "paging": false,
            "searching": false,
            scrollCollapse: true,
            scroller: false,
            dom: "lfrtip",
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [25, 50, 100],
                [25, 50, 100]
            ],

            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                    
                    {"data" : "kpi_objective"},
                    {"data": "id_satuan", "width": "10px", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                                btn = btn + "<td class='text-dark'>" + row.bobot + "%</td>";

                            return btn;
                        }
                    },
                    {"data" : "kpi_value","sClass": "text-center"},
                    {"data" : "supporting_information","width": "500%"},
                    {"data": "id_satuan", "width": "10px", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                                btn = btn + "<td class='text-dark'>" + row.target_objective + "%</td>";

                            return btn;
                        }
                    },
                    {"data" : "target_kpi","sClass": "text-center"},
                    {"data" : "jan","sClass": "text-center"},
                    {"data" : "feb","sClass": "text-center"},
                    {"data" : "mar","sClass": "text-center"},
                    {"data" : "apr","sClass": "text-center"},
                    {"data" : "mei","sClass": "text-center"},
                    {"data" : "jun","sClass": "text-center"},
                    {"data" : "jul","sClass": "text-center"},
                    {"data" : "ags","sClass": "text-center"},
                    {"data" : "sep","sClass": "text-center"},
                    {"data" : "okt","sClass": "text-center"},
                    {"data" : "nov","sClass": "text-center"},
                    {"data" : "des","sClass": "text-center"},
                    {"data" : "actual","sClass": "text-center"},
                    {"data": "id_satuan", "width": "10px", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                            var vs = row.actualvstarget;
                                if( vs == null){
                                    btn = btn + "<td class='text-dark'>0</td>";
                                } else {
                                    btn = btn + "<td class='text-dark'>" + row.target_vs_actual + " %</td>";
                                }
                                

                            return btn;
                        }
                    },
                    {"data": "id_satuan", "width": "10px", "sClass": "text-center",
                        "bSortable": false,
                        "mRender": function (data, type, row) {
                            var btn = "";
                            var idtr = row.kpi_id;
                            if (accessedit == true) {
                                btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='pembagi' data-toggle='tooltip' data-original-title='pembagi'><i class='fas fa-calculator'></i></a> &nbsp;";
                            }
                            if (accessdelete == true) {
                                btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
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
                id: $("#DialogConfirm input[name=id]").val()
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

    function importdata_kpi() {
        $('#DialogImportdata_kpi').modal('show');

    }

    function pembagi(id) {
        $('#DialogConfirm_pembagi').modal('show');
        $("#DialogConfirm_pembagi  input[name=id]").val(id);

    }

    function adddata_kpi() {
        ToContent(url_add);
    }

    function editdata(id) {
        ToContent(url_edit + '/' + id);
    }

    function import_kpi() {
        var form, formdata_kpi, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_import_kpi; ?>';
        url_index = '<?php echo $url_index; ?>';

        var formdata_kpi = new FormData();

        var file_data = $('#uploadfile', "#formdata_kpi").prop('files')[0];
        formdata_kpi.append('uploadfile', file_data);
        formdata_kpi.append('formdata_kpi', $("#formdata_kpi").serialize());

        $.ajax({
            type: 'POST',
            url: url_post,
            data: formdata_kpi,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {

            },
            xhr: function () {
                $("#infoproses").html('<div class="alert" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading2.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                $("#btnprocess").hide();
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                        console.log(percentComplete);


                    }
                    ;
                }, false);

                return xhr;
            },
            success: function (returndata) {
                $("#infoproses").html("");
                $("#btnprocess").show();
                $('#DialogImportdata_kpi').modal('hide');
                $('#dataintable').dataTable().fnReloadAjax();
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });
        return false;
    }

    function insert_pembagi() {
    url_pembagi = '<?php echo $url_pembagi; ?>';
      $.ajax({
          url: url_pembagi,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              id: $("#DialogConfirm_pembagi input[name=id]").val(),
              pembagi: $("#DialogConfirm_pembagi input[name=pembagi]").val(),
              jan: $("#DialogConfirm_pembagi input[name=jan]").val(),
              feb: $("#DialogConfirm_pembagi input[name=feb]").val(),
              mar: $("#DialogConfirm_pembagi input[name=mar]").val(),
              apr: $("#DialogConfirm_pembagi input[name=apr]").val(),
              mei: $("#DialogConfirm_pembagi input[name=mei]").val(),
              jun: $("#DialogConfirm_pembagi input[name=jun]").val(),
              jul: $("#DialogConfirm_pembagi input[name=jul]").val(),
              ags: $("#DialogConfirm_pembagi input[name=ags]").val(),
              sep: $("#DialogConfirm_pembagi input[name=sep]").val(),
              okt: $("#DialogConfirm_pembagi input[name=okt]").val(),
              nov: $("#DialogConfirm_pembagi input[name=nov]").val(),
              des: $("#DialogConfirm_pembagi input[name=des]").val(),
              act: $("#DialogConfirm_pembagi input[name=act]").val(),
              kpivalue: $("#DialogConfirm_pembagi input[name=kpivalue]").val(),
          },
          success: function (data) {
                $('#DialogConfirm_pembagi').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
              _alert(data.msg, data.valid);
              resetform();
          }
          
      });
      return false;
    }

    $("#jan, #feb, #mar, #apr, #mei, #jun, #jul, #ags, #sep, #okt, #nov, #des, #pembagi, #bobot, #persen").keyup(function() {
        var jan  = $("#jan").val();
        var feb = $("#feb").val();
        var mar = $("#mar").val();
        var apr = $("#apr").val();
        var mei = $("#mei").val();
        var jun = $("#jun").val();
        var jul = $("#jul").val();
        var ags = $("#ags").val();
        var sep = $("#sep").val();
        var okt = $("#okt").val();
        var nov = $("#nov").val();
        var des = $("#des").val();
        var bobot = $("#bobot").val();
        var pembagi = $("#pembagi").val();
        var persen = $("#persen").val();
        var total = (parseInt(jan) + parseInt(feb) + parseInt(mar) + parseInt(apr) + parseInt(mei) + parseInt(jun) + parseInt(jul) + parseInt(ags) + parseInt(sep) + parseInt(okt) + parseInt(nov) + parseInt(des)) / parseInt(pembagi);
        var hasil = (total * parseInt('<?php echo $bobot?>'))/ 100;
        var vs = (total / 5)* 100;
        $("#act").val(total);
        $("#kpivalue").val(hasil);
        $("#tgtvsact").val(vs);
    });
    
    $(document).ready(function() {
        $("#formButton").click(function() {
            $("#formdata").toggle();
        });
    });

    function downloadtemplate(){
        window.open('<?php echo base_url().'allassets/template/KPI.xlsx' ?>');
    }

    function resetform(){			
            document.getElementById("formdata").reset();		
    }

    function insert_info() {
        url_insert_info = '<?php echo $url_insert_info; ?>';
      $.ajax({
          url: url_insert_info,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
            id: $("#id").val(),
            bobot: $("#bobot").val(),
            kpi_objective: $("#kpi_objective").val(),
            supporting_information: $("#supporting_information").val(),
            target_objective: $("#target_objective").val(),
            target_kpi: $("#target_kpi").val()
          },
          success: function (data) {
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
              _alert(data.msg, data.valid);
              resetform();
          }
      });
      return false;
  }

  
  $('.chosen-select').css({ 'width':'350px' });


</script>

<div id="DialogImportdata_kpi" class="modal fade"  role="dialog" aria-labelledby="DialogImportdata_kpi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">
                <img src="http://localhost:8080/penyimpangan/allassets/dist/img/Logo.png" alt="Logo" class="brand-image" width="35" style="opacity: .8">
                    Upload template for import data KPI</font></h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <form id="formdata_kpi" data-parsley-validate="" novalidate="">
                    <div class="main-content container-fluid">
                        <div class="form-group row">
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Download template for upload</LABEL>&nbsp;
                                 <button type="button" id="btndownloadtemlate" class="btn btn-default btn-circle" onclick="downloadtemplate()" title="Download template" data-toggle="tooltip"><i class="fas fa-file-excel"></i> </button>

                            </div>
                            <div class="col-9 col-lg-9"> 
                                <LABEL class="text-center">Upload file import from file template</LABEL>&nbsp;
                                <input type="file" class="form-control" id="uploadfile" name='uploadfile'>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-Right">
                            <span id='infoproses'></span>
                            <button type="button" id="btnprocess" class="btn btn-space btn-like" onclick="import_kpi()"> Proses</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btn-danger">
                    <input type ="hidden" name="id"/>
                    <h4 class="modal-title"><font color="white">Confirm for Delete Data</font></h4>
                </div>
                <div class="modal-body">
                    <font color="black">Are you sure delete this data ?</font>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" onclick="process_delete()" class="btn btn-danger" action="delete">Ok</button>
                </div>
            </div>
        </div>
    </div>
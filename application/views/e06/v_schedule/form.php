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
             <div class="card-header">
             <!-- <button type="button" onclick="refreshtemplate()" class="btn btn-sm btn-like"><i class="fas fa-sync-alt"></i>&nbsp; Buat Baru</button>&nbsp;&nbsp; -->
             <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li> Back</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-expand"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="form-group row">
             <div class="col-sm-2">
                      <input name="date" id="date" type="text" required=""  parsley-type="text" placeholder="input periode" class="form-control"
                    value="">
                      </div>
            </div> 
            <div class="table-responsive">
            <span class='badge bg-like'>M = Masuk</span>
            <span class='badge bg-info'> W = Work From Home</span>
            <span class='badge bg-danger'>L = Libur</span>
            <span class='badge bg-warning'>LL = Lain-lain</span>
                 <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th style="min-width: 237px;">Nama</th>
                            <th>Department</th>
                            <th style="min-width:150px">01</th>
                            <th style="min-width:150px">02</th>
                            <th style="min-width:150px">03</th>  
                            <th style="min-width:150px">04</th>
                            <th style="min-width:150px">05</th>
                            <th style="min-width:150px">06</th>
                            <th style="min-width:150px">07</th>
                            <th style="min-width:150px">08</th>
                            <th style="min-width:150px">09</th>
                            <th style="min-width:150px">10</th>
                            <th style="min-width:150px">11</th>
                            <th style="min-width:150px">12</th>
                            <th style="min-width:150px">13</th>
                            <th style="min-width:150px">14</th>
                            <th style="min-width:150px">15</th>
                            <th style="min-width:150px">16</th>
                            <th style="min-width:150px">17</th>
                            <th style="min-width:150px">18</th>
                            <th style="min-width:150px">19</th>
                            <th style="min-width:150px">20</th>
                            <th style="min-width:150px">21</th>
                            <th style="min-width:150px">22</th>
                            <th style="min-width:150px">23</th>
                            <th style="min-width:150px">24</th>
                            <th style="min-width:150px">25</th>
                            <th style="min-width:150px">26</th>
                            <th style="min-width:150px">27</th>
                            <th style="min-width:150px">28</th>
                            <th style="min-width:150px">29</th>
                            <th style="min-width:150px">30</th>
                            <th style="min-width:150px">31</th>

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


</div>
</section>
</div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_setdate03 = '<?php echo $url_setdate03; ?>';
    url_date01 = '<?php echo $url_date01; ?>';
    url_date02 = '<?php echo $url_date02; ?>';
    url_date03 = '<?php echo $url_date03; ?>';
    url_date04 = '<?php echo $url_date04; ?>';
    url_date05 = '<?php echo $url_date05; ?>';
    url_date06 = '<?php echo $url_date06; ?>';
    url_date07 = '<?php echo $url_date07; ?>';
    url_date08 = '<?php echo $url_date08; ?>';
    url_date09 = '<?php echo $url_date09; ?>';
    url_date10 = '<?php echo $url_date10; ?>';
    url_date11 = '<?php echo $url_date11; ?>';
    url_date12 = '<?php echo $url_date12; ?>';
    url_date13 = '<?php echo $url_date13; ?>';
    url_date14 = '<?php echo $url_date14; ?>';
    url_date15 = '<?php echo $url_date15; ?>';
    url_date16 = '<?php echo $url_date16; ?>';
    url_date17 = '<?php echo $url_date17; ?>';
    url_date18 = '<?php echo $url_date18; ?>';
    url_date19 = '<?php echo $url_date19; ?>';
    url_date20 = '<?php echo $url_date20; ?>';
    url_date21 = '<?php echo $url_date21; ?>';
    url_date22 = '<?php echo $url_date22; ?>';
    url_date23 = '<?php echo $url_date23; ?>';
    url_date24 = '<?php echo $url_date24; ?>';
    url_date25 = '<?php echo $url_date25; ?>';
    url_date26 = '<?php echo $url_date26; ?>';
    url_date27 = '<?php echo $url_date27; ?>';
    url_date28 = '<?php echo $url_date28; ?>';
    url_date29 = '<?php echo $url_date29; ?>';
    url_date30 = '<?php echo $url_date30; ?>';
    url_date31 = '<?php echo $url_date31; ?>';
    
    url_setlbr = '<?php echo $url_setlbr; ?>';
    url_setlain = '<?php echo $url_setlain; ?>';

    // url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    // url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    $('#date').attr("autocomplete", "off").datepicker({ 
        dateFormat: 'yy-mm',
        changeMonth: true,
        changeYear: true
    });

     $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            fixedHeader: true,
            deferRender: true,
            scrollY: 300,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "paging": false,
            "bRetrieve": true,
            "bDestroy": true,
           
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                    {"data": "NIK"},
                    {"data": "namaKaryawan","width":"150%"},
                    {"data": "namaSeksi"},
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date01 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date01 = date01 + "<label><a href='javascript:void(0)' onClick='date01(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date01 = date01 + "<label><a href='javascript:void(0)' onClick='date01(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date01 = date01 + "<label><a href='javascript:void(0)' onClick='date01(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date01 = date01 + "<label><a href='javascript:void(0)' onClick='date01(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date01;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date02 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date02 = date02 + "<label><a href='javascript:void(0)' onClick='date02(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date02 = date02 + "<label><a href='javascript:void(0)' onClick='date02(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date02 = date02 + "<label><a href='javascript:void(0)' onClick='date02(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date02 = date02 + "<label><a href='javascript:void(0)' onClick='date02(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date02;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date03 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date03 = date03 + "<label><a href='javascript:void(0)' onClick='date03(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date03 = date03 + "<label><a href='javascript:void(0)' onClick='date03(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date03 = date03 + "<label><a href='javascript:void(0)' onClick='date03(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date03 = date03 + "<label><a href='javascript:void(0)' onClick='date03(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date03;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date04 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date04 = date04 + "<label><a href='javascript:void(0)' onClick='date04(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date04 = date04 + "<label><a href='javascript:void(0)' onClick='date04(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date04 = date04 + "<label><a href='javascript:void(0)' onClick='date04(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date04 = date04 + "<label><a href='javascript:void(0)' onClick='date04(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date04;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date05 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date05 = date05 + "<label><a href='javascript:void(0)' onClick='date05(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date05 = date05 + "<label><a href='javascript:void(0)' onClick='date05(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date05 = date05 + "<label><a href='javascript:void(0)' onClick='date05(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date05 = date05 + "<label><a href='javascript:void(0)' onClick='date05(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date05;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date06 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date06 = date06 + "<label><a href='javascript:void(0)' onClick='date06(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date06 = date06 + "<label><a href='javascript:void(0)' onClick='date06(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date06 = date06 + "<label><a href='javascript:void(0)' onClick='date06(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date06 = date06 + "<label><a href='javascript:void(0)' onClick='date06(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date06;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date07 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date07 = date07 + "<label><a href='javascript:void(0)' onClick='date07(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date07 = date07 + "<label><a href='javascript:void(0)' onClick='date07(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date07 = date07 + "<label><a href='javascript:void(0)' onClick='date07(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date07 = date07 + "<label><a href='javascript:void(0)' onClick='date07(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date07;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date08 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date08 = date08 + "<label><a href='javascript:void(0)' onClick='date08(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date08 = date08 + "<label><a href='javascript:void(0)' onClick='date08(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date08 = date08 + "<label><a href='javascript:void(0)' onClick='date08(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date08 = date08 + "<label><a href='javascript:void(0)' onClick='date08(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date08;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date09 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date09 = date09 + "<label><a href='javascript:void(0)' onClick='date09(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date09 = date09 + "<label><a href='javascript:void(0)' onClick='date09(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date09 = date09 + "<label><a href='javascript:void(0)' onClick='date09(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date09 = date09 + "<label><a href='javascript:void(0)' onClick='date09(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date09;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date10 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date10 = date10 + "<label><a href='javascript:void(0)' onClick='date10(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date10 = date10 + "<label><a href='javascript:void(0)' onClick='date10(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date10 = date10 + "<label><a href='javascript:void(0)' onClick='date10(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date10 = date10 + "<label><a href='javascript:void(0)' onClick='date10(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date10;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date11 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date11 = date11 + "<label><a href='javascript:void(0)' onClick='date11(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date11 = date11 + "<label><a href='javascript:void(0)' onClick='date11(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date11 = date11 + "<label><a href='javascript:void(0)' onClick='date11(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date11 = date11 + "<label><a href='javascript:void(0)' onClick='date11(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date11;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date12 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date12 = date12 + "<label><a href='javascript:void(0)' onClick='date12(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date12 = date12 + "<label><a href='javascript:void(0)' onClick='date12(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date12 = date12 + "<label><a href='javascript:void(0)' onClick='date12(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date12 = date12 + "<label><a href='javascript:void(0)' onClick='date12(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date12;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date13 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date13 = date13 + "<label><a href='javascript:void(0)' onClick='date13(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date13 = date13 + "<label><a href='javascript:void(0)' onClick='date13(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date13 = date13 + "<label><a href='javascript:void(0)' onClick='date13(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date13 = date13 + "<label><a href='javascript:void(0)' onClick='date13(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date13;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date14 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date14 = date14 + "<label><a href='javascript:void(0)' onClick='date14(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date14 = date14 + "<label><a href='javascript:void(0)' onClick='date14(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date14 = date14 + "<label><a href='javascript:void(0)' onClick='date14(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date14 = date14 + "<label><a href='javascript:void(0)' onClick='date14(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date14;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date15 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date15 = date15 + "<label><a href='javascript:void(0)' onClick='date15(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date15 = date15 + "<label><a href='javascript:void(0)' onClick='date15(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date15 = date15 + "<label><a href='javascript:void(0)' onClick='date15(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date15 = date15 + "<label><a href='javascript:void(0)' onClick='date15(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date15;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date16 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date16 = date16 + "<label><a href='javascript:void(0)' onClick='date16(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date16 = date16 + "<label><a href='javascript:void(0)' onClick='date16(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date16 = date16 + "<label><a href='javascript:void(0)' onClick='date16(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date16 = date16 + "<label><a href='javascript:void(0)' onClick='date16(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date16;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date17 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date17 = date17 + "<label><a href='javascript:void(0)' onClick='date17(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date17 = date17 + "<label><a href='javascript:void(0)' onClick='date17(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date17 = date17 + "<label><a href='javascript:void(0)' onClick='date17(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date17 = date17 + "<label><a href='javascript:void(0)' onClick='date17(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date17;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date18 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date18 = date18 + "<label><a href='javascript:void(0)' onClick='date18(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date18 = date18 + "<label><a href='javascript:void(0)' onClick='date18(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date18 = date18 + "<label><a href='javascript:void(0)' onClick='date18(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date18 = date18 + "<label><a href='javascript:void(0)' onClick='date18(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date18;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date19 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date19 = date19 + "<label><a href='javascript:void(0)' onClick='date19(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date19 = date19 + "<label><a href='javascript:void(0)' onClick='date19(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date19 = date19 + "<label><a href='javascript:void(0)' onClick='date19(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date19 = date19 + "<label><a href='javascript:void(0)' onClick='date19(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date19;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date20 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date20 = date20 + "<label><a href='javascript:void(0)' onClick='date20(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date20 = date20 + "<label><a href='javascript:void(0)' onClick='date20(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date20 = date20 + "<label><a href='javascript:void(0)' onClick='date20(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date20 = date20 + "<label><a href='javascript:void(0)' onClick='date20(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date20;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date21 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date21 = date21 + "<label><a href='javascript:void(0)' onClick='date21(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date21 = date21 + "<label><a href='javascript:void(0)' onClick='date21(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date21 = date21 + "<label><a href='javascript:void(0)' onClick='date21(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date21 = date21 + "<label><a href='javascript:void(0)' onClick='date21(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date21;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date22 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date22 = date22 + "<label><a href='javascript:void(0)' onClick='date22(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date22 = date22 + "<label><a href='javascript:void(0)' onClick='date22(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date22 = date22 + "<label><a href='javascript:void(0)' onClick='date22(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date22 = date22 + "<label><a href='javascript:void(0)' onClick='date22(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date22;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date23 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date23 = date23 + "<label><a href='javascript:void(0)' onClick='date23(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date23 = date23 + "<label><a href='javascript:void(0)' onClick='date23(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date23 = date23 + "<label><a href='javascript:void(0)' onClick='date23(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date23 = date23 + "<label><a href='javascript:void(0)' onClick='date23(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date23;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date24 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date24 = date24 + "<label><a href='javascript:void(0)' onClick='date24(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date24 = date24 + "<label><a href='javascript:void(0)' onClick='date24(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date24 = date24 + "<label><a href='javascript:void(0)' onClick='date24(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date24 = date24 + "<label><a href='javascript:void(0)' onClick='date24(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date24;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date25 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date25 = date25 + "<label><a href='javascript:void(0)' onClick='date25(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date25 = date25 + "<label><a href='javascript:void(0)' onClick='date25(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date25 = date25 + "<label><a href='javascript:void(0)' onClick='date25(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date25 = date25 + "<label><a href='javascript:void(0)' onClick='date25(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date25;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date26 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date26 = date26 + "<label><a href='javascript:void(0)' onClick='date26(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date26 = date26 + "<label><a href='javascript:void(0)' onClick='date26(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date26 = date26 + "<label><a href='javascript:void(0)' onClick='date26(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date26 = date26 + "<label><a href='javascript:void(0)' onClick='date26(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date26;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date27 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date27 = date27 + "<label><a href='javascript:void(0)' onClick='date27(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date27 = date27 + "<label><a href='javascript:void(0)' onClick='date27(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date27 = date27 + "<label><a href='javascript:void(0)' onClick='date27(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date27 = date27 + "<label><a href='javascript:void(0)' onClick='date27(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date27;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date28 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date28 = date28 + "<label><a href='javascript:void(0)' onClick='date28(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date28 = date28 + "<label><a href='javascript:void(0)' onClick='date28(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date28 = date28 + "<label><a href='javascript:void(0)' onClick='date28(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date28 = date28 + "<label><a href='javascript:void(0)' onClick='date28(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date28;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date29 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date29 = date29 + "<label><a href='javascript:void(0)' onClick='date29(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date29 = date29 + "<label><a href='javascript:void(0)' onClick='date29(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date29 = date29 + "<label><a href='javascript:void(0)' onClick='date29(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date29 = date29 + "<label><a href='javascript:void(0)' onClick='date29(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date29;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date30 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date30 = date30 + "<label><a href='javascript:void(0)' onClick='date30(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date30 = date30 + "<label><a href='javascript:void(0)' onClick='date30(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date30 = date30 + "<label><a href='javascript:void(0)' onClick='date30(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date30 = date30 + "<label><a href='javascript:void(0)' onClick='date30(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date30;
                        }
                    },
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var date31 = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                date31 = date31 + "<label><a href='javascript:void(0)' onClick='date31(1," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>M</label>&nbsp;";
                                date31 = date31 + "<label><a href='javascript:void(0)' onClick='date31(2," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>W</label>&nbsp;";
                                date31 = date31 + "<label><a href='javascript:void(0)' onClick='date31(3," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>L</label>&nbsp;";
                                date31 = date31 + "<label><a href='javascript:void(0)' onClick='date31(4," + idtr + ")'><input type='checkbox' style='margin-left:5px;'></a>Ll</label>&nbsp;";
                            }
                            return date31;
                        }
                    },
                //    {"data": "namaKaryawan", "sClass": "text-center",
                //     "mRender": function (data, type, row) {
                //             var wfh = "";
                //             var idtr = row["NIK"];
                //             if (row.NIK > 0) {
                //                 wfh = wfh + "<a href='javascript:void(0)' onClick='setwfh(2," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                //             }
                //             return wfh;
                //         }
                //     },
                //     {"data": "namaKaryawan", "sClass": "text-center",
                //     "mRender": function (data, type, row) {
                //             var lbr = "";
                //             var idtr = row["NIK"];
                //             if (row.NIK > 0) {
                //                 lbr = lbr + "<a href='javascript:void(0)' onClick='setlbr(3," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                //             }
                //             return lbr;
                //         }
                //     },
                //     {"data": "namaKaryawan", "sClass": "text-center",
                //     "mRender": function (data, type, row) {
                //             var lain = "";
                //             var idtr = row["NIK"];
                //             if (row.NIK > 0) {
                //                 lain = lain + "<a href='javascript:void(0)' onClick='setlain(4," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                //             }
                //             return lain;
                //         }
                //     },
               
            ]

        });


    //     $( "#status" ).change(function() { 
    //     var status =$("#status").val();
    //     $.ajax({
    //         url: url_setdate03,
    //         type: "post",
    //         dataType: "json",
    //         cache: false,
    //         data: {
    //             date03: date03,
    //             idtr: idtr,
    //             date: date,
    //             date2: date2,
    //         },
    //         // success: function (data) {
    //         //     $('#dataintable').dataTable().fnReloadAjax();
    //         // }
    //     });
    //     return false;
    //     });


     
    // function setsdate03(date03, idtr) {
    //     var date = $("#date").val();
    //     $.ajax({
    //         url: url_setdate03,
    //         type: "post",
    //         dataType: "json",
    //         cache: false,
    //         data: {
    //             date03: date03,
    //             idtr: idtr,
    //             date: date,
    //             date2: date2,
    //         },
    //         // success: function (data) {
    //         //     $('#dataintable').dataTable().fnReloadAjax();
    //         // }
    //     });
    //     return false;
    // }

    // function setwfh(wfh, idtr) {
    //      var date = $("#date").val();
    //     $.ajax({
    //         url: url_setwfh,
    //         type: "post",
    //         dataType: "json",
    //         cache: false,
    //         data: {
    //             wfh: wfh,
    //             idtr: idtr,
    //             date: date,
    //         },
    //         // success: function (data) {
    //         //     $('#dataintable').dataTable().fnReloadAjax();
    //         // }
    //     });
    //     return false;
    // }

    function setlbr(lbr, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_setlbr,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                lbr: lbr,
                idtr: idtr,
                date,date,
                date2: date2,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setlain(lain, idtr) {
         var date = $("#date").val();
         var date2 = $("#date2").val();
        $.ajax({
            url: url_setlain,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                lain: lain,
                idtr: idtr,
                date: date,
                date2: date2,
            },
             success:
                        function (data)
                        {
                            _alert(data.msg, data.valid);
                        },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }


    function date01(date01, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date01,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date01: date01,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date02(date02, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date02,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date02: date02,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date03(date03, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date03,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date03: date03,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date04(date04, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date04,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date04: date04,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date05(date05, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date05,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date05: date05,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date06(date06, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date06,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date06: date06,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date07(date07, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date07,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date07: date07,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date08(date08, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date08,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date08: date08,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date09(date09, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date09,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date09: date09,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date10(date10, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date10,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date10: date10,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date11(date11, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date11,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date11: date11,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date12(date12, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date12,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date12: date12,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date13(date13, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date13,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date13: date13,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date14(date14, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date14,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date14: date14,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date15(date15, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date15,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date15: date15,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date16(date16, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date16,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date16: date16,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date17(date17, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date17,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date17: date17,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date18(date18, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date18,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date18: date18,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date19(date19, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date19,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date19: date19,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date20(date20, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date20,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date20: date20,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date21(date21, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date21,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date21: date21,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date22(date22, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date22,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date22: date22,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date23(date23, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date23,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date23: date23,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date24(date24, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date24,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date24: date24,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date25(date25, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date25,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date25: date25,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date26(date26, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date26,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date26: date26,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date27(date27, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date27,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date27: date27,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date28(date28, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date28,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date28: date28,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date29(date29, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date29,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date29: date29,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date30(date30, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date30,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date30: date30,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }
    function date31(date31, idtr) {
         var date = $("#date").val();
        $.ajax({
            url: url_date31,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                date31: date31,
                idtr: idtr,
                date: date,
            },
            success: 
                    function (data) {
                            hideloading();
                            _alert(data.msg, data.valid);
                        },
            error: 
                    function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
        });
        return false;
    }

</script>

<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




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
                 <table id="datadetail" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th style="min-width: 237px;">Nama</th>
                            <th>Dept</th>
                            <th>periode</th>
                            <th>01</th>
                            <th>02</th>
                            <th>03</th>
                            <th>04</th>
                            <th>05</th>
                            <th>06</th>
                            <th>07</th>
                            <th>08</th>
                            <th>09</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                            <th>16</th>
                            <th>17</th>
                            <th>18</th>
                            <th>19</th>
                            <th>20</th>
                            <th>21</th>
                            <th>22</th>
                            <th>23</th>
                            <th>24</th>
                            <th>25</th>
                            <th>26</th>
                            <th>27</th>
                            <th>28</th>
                            <th>29</th>
                            <th>30</th>
                            <th>31</th>
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
    url_grid_detail = '<?php echo $url_grid_detail; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    var editor;

    $("#datadetail").dataTable({
      'order': [[1, 'asc']],
      keys: true,
      responsive: true,
      "ajax": {
          "url": url_grid_detail,
          "type": 'POST',
      },
      "columns": [
                //   {"data": "id_satuan", "width": "75px", "sClass": "text-center",
                //       "bSortable": false,
                //       "mRender": function (data, type, row) {
                //           var btn = "";
                //           var idtr = row["<?php echo $prefix_id; ?>"];
                //               btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-file-signature'></i></a> &nbsp;";
                //           return btn;
                //       }
                //   },
                  {"data": "nama_karyawan", "width":"150%"},
                  {"data": "department"},
                  {"data": "schedule_date"},
                  {"data": "date01", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date01 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date01 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date01 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date02", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date02 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date02 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date02 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date03", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date03 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date03 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date03 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date04", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date04 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date04 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date04 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date05", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date05 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date05 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date05 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date06", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date06 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date06 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date06 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date07", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date07 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date07 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date07 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date08", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date08 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date08 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date08 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date09", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date09 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date09 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date09 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date10", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date10 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date10 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date10 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date11", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date11 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date11 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date11 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date12", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date12 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date12 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date12 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date13", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date13 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date13 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date13 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date14", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date14 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date14 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date14 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date15", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date15 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date15 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date15 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date16", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date16 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date16 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date16 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date17", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date17 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date17 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date17 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date18", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date18 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date18 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date18 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date19", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date19 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date19 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date19 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date20", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date20 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date20 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date20 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date21", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date21 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date21 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date21 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date22", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date22 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date22 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date22 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date23", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date23 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date23 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date23 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },

                  {"data": "date24", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date24 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date24 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date24 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date25", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date25 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date25 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date25 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date26", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date26 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date26 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date26 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date27", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date27 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date27 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date27 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date28", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date28 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date28 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date28 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date29", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date29 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date29 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date29 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date30", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date30 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date30 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date30 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  {"data": "date31", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                          var status = "-";
                          if (row.date31 == '1') {
                              status = "<strong><span class='badge bg-like'>MASUK</span></strong>";
                          } else if (row.date31 == '2'){
                              status = "<span class='badge bg-ungu'>WFH</span>";
                          } else if (row.date31 == '3'){
                              status = "<span class='badge bg-danger'>LIBUR</span>";
                          } else {
                              status = "<span class='badge bg-warning'>LAIN-LAIN</span>";
                          }
                          return status;
                      }
                  },
                  ]

    });

  
    function adddata() {
        ToContent(url_add);
    }

</script>

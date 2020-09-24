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
             <button type="button" onclick="refreshtemplate()" class="btn btn-sm btn-like"><i class="fas fa-sync-alt"></i>&nbsp; Buat Baru</button>&nbsp;&nbsp;
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
                      <input name="date" id="date" type="text" required=""  parsley-type="text" placeholder="input tanggal awal" class="form-control"
                    value="">
                      </div> s/d 
            <div class="col-sm-2">
                      <input name="date2" id="date2" type="text" required=""  parsley-type="text" placeholder="input tanggal akhir" class="form-control"
                    value="">
                      </div>
            </div> 
            <div class="table-responsive">
            
                 <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Department</th>
                            <th>Masuk</th>
                            <th>WFH</th>
                            <th>Libur</th>
                            <th>Lain lain</th>  
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
    url_setmasuk = '<?php echo $url_setmasuk; ?>';
    url_setwfh = '<?php echo $url_setwfh; ?>';
    url_setlbr = '<?php echo $url_setlbr; ?>';
    url_setlain = '<?php echo $url_setlain; ?>';
   

    // url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    // url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
     $('#date,#date2').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'yy-mm-dd',
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
                    {"data": "namaKaryawan"},
                    {"data": "namaSeksi"},
                    {"data": "namaSeksi", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var masuk = "";
                            var idtr = row["NIK"];
                            var namaSeksi = row["namaSeksi"];
                            if (row.NIK > 0) {
                                masuk = masuk + "<a href='javascript:void(0)' onClick='setsmasuk(1," + idtr +")'><input type='checkbox' class='form-check-input'></a>";
                            }
                            return masuk;
                        }
                    },
                   {"data": "namaKaryawan", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var wfh = "";
                            var idtr = row["NIK"];
                            if (row.NIK > 0) {
                                wfh = wfh + "<a href='javascript:void(0)' onClick='setwfh(2," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                            }
                            return wfh;
                        }
                    },
                    {"data": "namaKaryawan", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var lbr = "";
                            var idtr = row["NIK"];
                            if (row.NIK > 0) {
                                lbr = lbr + "<a href='javascript:void(0)' onClick='setlbr(3," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                            }
                            return lbr;
                        }
                    },
                    {"data": "namaKaryawan", "sClass": "text-center",
                    "mRender": function (data, type, row) {
                            var lain = "";
                            var idtr = row["NIK"];
                            if (row.NIK > 0) {
                                lain = lain + "<a href='javascript:void(0)' onClick='setlain(4," + idtr + ")'><input type='checkbox' class='form-check-input'></a>";
                            }
                            return lain;
                        }
                    },
               
            ]

        });





     
    function setsmasuk(masuk, idtr) {
        var date = $("#date").val();
        var date2 = $("#date2").val();
        $.ajax({
            url: url_setmasuk,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                masuk: masuk,
                idtr: idtr,
                date: date,
                date2: date2,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setwfh(wfh, idtr) {
         var date = $("#date").val();
         var date2 = $("#date2").val();
        $.ajax({
            url: url_setwfh,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                wfh: wfh,
                idtr: idtr,
                date: date,
                date2: date2,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setlbr(lbr, idtr) {
         var date = $("#date").val();
         var date2 = $("#date2").val();
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
                        function (data, text)
                        {
                            _alert(data.msg, data.valid);
                        },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
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




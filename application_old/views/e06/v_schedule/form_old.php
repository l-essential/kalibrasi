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
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondata" id="actiondata" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="nama_karyawan" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="checkdata3" id="checkdata3" value="" />
        <input type="hidden" name="checkdata4" id="checkdata4" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                   <select id="nama_karyawan" name="nama_karyawan" class="form-control" required="">
                        <?php foreach ($default['namaKaryawan'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
           

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
              </p>
            </div>
    </div>
</form>

 <div class="col-5">
          <div class="card">
             <div class="card-header">
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-expand"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

            <div class="table-responsive">
                 <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>M</th>
                            <th>W</th>
                            <th>L</th>
                            <th>LL</th>  
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>                
                </table>
            </div>

              <div class="form-group">
                <div id="divdetail"></div><br/>
            </div>
        </div>
    </div>
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
    var editor;

     $("#dataintable").dataTable({
            'order': [[1, 'asc']],
            keys: true,
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            "columns": [
                    // {"data": "NIK"},
                    {"data": "namaKaryawan"},
                    // {"data": "namaSeksi"},
                    // {"data": "tanggalsekarang", "width": "100px"},
                    // {"data": "date_schedule", "sClass": "text-center",
                    //  "mRender": function (data, type, row) {
                    //         var status = "";
                    //             status = status + "<input name='date_po' id='date_schedule'>";
                    //         return status;
                    //     }
                    // },
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
        $.ajax({
            url: url_setmasuk,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                masuk: masuk,
                idtr: idtr,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setwfh(wfh, idtr) {
        $.ajax({
            url: url_setwfh,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                wfh: wfh,
                idtr: idtr,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setlbr(lbr, idtr) {
        $.ajax({
            url: url_setlbr,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                lbr: lbr,
                idtr: idtr,
            },
            // success: function (data) {
            //     $('#dataintable').dataTable().fnReloadAjax();
            // }
        });
        return false;
    }

    function setlain(lain, idtr) {
        $.ajax({
            url: url_setlain,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                lain: lain,
                idtr: idtr,
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

    $('#date_schedule').attr("autocomplete", "off").datepicker({ 
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true
    });


</script>

<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




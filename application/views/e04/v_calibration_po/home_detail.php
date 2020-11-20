 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header border">
              <button type="button" id="btncreate" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
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
                 <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th>Status Kalibrasi</th>
                            <th>Estimasi Kalibrasi</th>
                            <th>Tanggal Awal Kalibrasi</th>
                            <th>Tanggal Kalibrasi Berikutnya</th>
                            <!-- <th>Foto Sertifikat</th> -->
                            <th>ID alat Kalibrasi</th>
                            <th>Nama Alat</th>
                            <th>No PO</th>
                            <th>Vendor</th>
                            <th>No Sertifikat</th>
                            <th>Qty Unit</th>
                            <th>Unit Price</th>
                            <th>Disc %</th>
                            <th>Disc Rupiah</th>
                            <th>Total</th>
                            <th>Ppn 10%</th>
                            <th>Total + PPN 10%</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<script type="text/javascript">

    url_grid = '<?php echo $url_grid; ?>';
    url_add = '<?php echo $url_add; ?>';
    url_edit = '<?php echo $url_edit; ?>';
    url_payment = '<?php echo $url_payment; ?>';
    url_delete = '<?php echo $url_delete; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';


    accesscreate = checkaccess("add");
    accessedit   = checkaccess("edit");
    accessdelete = checkaccess("delete");
    payment      = checkaccess("payment");

    if (accesscreate == true) {
        $("#btncreate").show();
    } else {
        $("#btncreate").hide();
    }

 datacolumn = [
        {"data": "id_satuan", "width": "70px", "sClass": "text-center",
         "bSortable": false,
         "mRender": function (data, type, row) {
            var btn = "";
            var idtr = row["<?php echo $prefix_id; ?>"];

            if (payment == true) {
                btn = btn + "<a href='javascript:void(0)' onClick='addpayment(" + row.id_position + ")' class='text-inverse' title='edit harga & vendor' data-toggle='tooltip' data-original-title='Edit'><i class='far fa-money-bill-alt'></i></a> &nbsp;";
            }
            if (accessedit == true) {
                btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='edit alat' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
            }
            if (accessdelete == true) {
                btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='hapus' data-toggle='tooltip' data-original-title='Delete'><i class='far fa-trash-alt'></i></a>";
            }

            return btn;
          }
        },
        {"data": "status_po", "sClass": "text-center",
         "mRender": function (data, type, row) {
                var status = "";
                var idtr = row["<?php echo $prefix_id; ?>"];
                if (row.status_po == 'Draft') {
                    status = "<span class='btn btn-block btn-warning btn-xs'>Draft</span>";
                }if (row.status_po == 'Proses kalibrasi') {
                    status = "<span class='btn btn-block btn-warning btn-xs'>Proses kalibrasi</span>";
                }if (row.status_po == 'Sertifikat di terima') {
                    status = "<span class='btn btn-block btn-warning btn-xs'>Sertifikat di terima</span>";
                }if (row.status_po == 'Complete') {
                            status = "<span class='btn btn-block btn-like btn-xs'>Complete</span>";
                }
                return status;
            }
        },
        {"data": "estimasi_calibration"},
        {"data": "periode_date_awal",
         "mRender": function (data, type, row) {
                if( row.periode_date_awal == '1970-01-01' ){
                    return "";
                }else{
                    return row.periode_date_awal;
                }
            }
        },
        {"data": "periode_date_akhir",
        "mRender": function (data, type, row) {
            if( row.periode_date_akhir == '1970-01-01' ) {
                return "";
            }else {
                return row.periode_date_akhir;
            }
        }
        
        },
<<<<<<< HEAD
        {
        "data": "foto_sertifikat", "aTargets": [0],
        "render": function (data) {
                return '<img src="<?php echo base_url(); ?>allassets/foto/'+ data +'" style="height:80px;width:60px;"/>';
            }
        },
        // {
        // "data": "foto_sertifikat",
        // "render": function (data, row) {
        //     if(row.foto_sertifikat == ''){
        //         return "";
        //     }else{
        //         return '<img src="<?php echo base_url(); ?>allassets/foto/'+ data +'" style="height:80px;width:60px;"/>';
        //     }
        // },
=======
        // {"data": "foto_sertifikat"},
>>>>>>> a664502e1790e3ae212b44f8ea74513f78c040dd
        {"data": "calibration_code"},
        {"data": "id_satuan",
         "bSortable": false,
         "mRender": function (data, type, row) {
                var btn = "";
                    btn = btn + "<td>"+ row.tools_code +", "+ row.tools_name +", "+ row.tools_merk +"</td>";
                return btn;
            }
        },
        {"data": "no_po"},
        {"data": "vendor_name"},
        {"data": "tools_no_sertifikat"},
        {"data": 'qty_cal'},
        {"data": 'calibration_price',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
        {"data": "calibration_disc"},
        {"data": "calibration_disc_rp","render": $.fn.dataTable.render.number( ',', '.', 2, )},
        {"data": 'total_harga'},
        {"data": 'ppn'},
        {"data": 'disc_ppn',"render": $.fn.dataTable.render.number( ',', '.', 2, )},
        {"data": 'keterangan'},
    ];
    setdatagrid();

    
    function adddata() {
        ToContent(url_add+ '/' + id);
    }

    function editdata(id) {
        ToContent(url_edit + '/' + id);
    }

    function addpayment(id) {
        ToContent(url_payment + '/' + id);
    } 

    function deletedata(id) {
        $('#DialogConfirm').modal('show');
        $("#DialogConfirm  input[name=id]").val(id);
    }
    function process_delete() {
        $.ajax({
            url: url_delete,
            type: "post",
            dataType: "json",
            cache: false,
            data: { alasan: $("#inputAlasan").val(),
                actiondatadetail: 'delete',
                '<?php echo $prefix_id; ?>': $("#DialogConfirm input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                    $('#dataintable').dataTable().fnReloadAjax();
                }
                notif(data.valid, data.msg)

            }
        });
        return false;
    }
    

</script>


<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
                <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" id="btncreate" class="btn btn-info btn-circle" onclick="adddata()"><i class="fa fa-plus"></i> </button>
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center" width="10px">Action</th>
                            <th class="text-center" width="100px">Provinsi</th>
                            <th class="text-center" width="100px">Kab/Kota</th>
                            <th class="text-center" width="100px">Kecamatan</th>
                            <th class="text-center" width="100px">Desa</th>
                            <th class="text-center" width="100px">Kodepos</th>
                            <th class="text-center" width="100px">Terhitung sejak tanggal</th>
                            <th class="text-center">Harga per m2</th>
                            <th class="text-center">Batas harga rumah tapak</th>
                            <th class="text-center">Batas harga rumah susun</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
<script type="text/javascript">
    infoshorcuthome();
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
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid,
                "type": 'POST',
            },
            dom: 'lfrtip',
            'order': [[0, 'desc']],
            scrollY: 380,
            scrollX: true,
            scrollCollapse: true,
            scroller: false,
            "bRetrieve": true,
            "bDestroy": true,
            lengthMenu: [
                [10, 25, 50, 100, 200, 500, 1000],
                [10, 25, 50, 100, 200, 500, 1000]
            ],
            "columns": [
                {
                    "data": "id_m_bataspengasilan", "width": "10px", "sClass": "text-center",
                    "bSortable": false,
                    "mRender": function (data, type, row) {
                        var btn = "";
                        var idtr = row["<?php echo $prefix_id; ?>"];

                        if (accessedit == true) {
                            btn = btn + "<a href='javascript:void(0)' onClick='editdata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Edit'><i class='fas fa-edit'></i></a> &nbsp;";
                        }
                        if (accessdelete == true) {
                            btn = btn + "<a href='javascript:void(0)' onClick='deletedata(" + idtr + ")' class='text-inverse' title='' data-toggle='tooltip' data-original-title='Delete'><i class='fas fa-trash'></i></a>";
                        }

                        return btn;
                    }
                },
                {"data": "provinsi", },
                {"data": "kota", },
                {"data": "kecamatan", },
                {"data": "desa", },
                {"data": "kodepos", },
                {"data": "tanggal_tmt", },
                {"data": "harga_perm2", },
                {"data": "batasnilai_rumahtapak", },
                {"data": "batasnilai_rumahsusun", },
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
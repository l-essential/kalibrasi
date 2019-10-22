
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
                <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>

                            <th class="text-center">Nama Perumahan</th>
                            <th class="text-center">Kabupaten / Kota</th>
                            <th class="text-center">Kodepos</th>
                            <th class="text-center">Luas Tanah</th>
                            <th class="text-center">Luas Bangunan</th>
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
            'order': [[0, 'asc']],
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
                {"data": "nama_perumahan", },
                {"data": "kabkota", },
                {"data": "kodepos", },
                {"data": "luastanah", },
                {"data": "luasbangunan", },
            ],

        });
    });


</script>
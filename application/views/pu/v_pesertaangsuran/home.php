
<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo 'Angsuran Debitur'; ?>
                <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
            </h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="id_t_pengajuanbankheader" class="col-sm-2 text-right control-label col-form-label">Pengajuan bank nomor surat</label><span style="color:red">*</span>
                <div class="col-sm-8">
                    <select id="id_t_pengajuanbankheader" name="id_t_pengajuanbankheader" required="" class="form-control chosen-select" tabindex="1">
                        <?php foreach ($default['id_t_pengajuanbankheader'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                    <div id="infoproses_generatetenor"></div>
                    <button type="button" id="btngeneratetenor" onclick="generatetenor()" class="btn btn-success"><li class='fa fa-refresh'></li> &nbsp;Generate tenor debitur</button>
                    <button type="button" id="btngenerateangsuran" onclick="generateangsuran()" class="btn btn-success"><li class='fa fa-dollar'></li> &nbsp;Generate angsuran debitur</button>

                </div> 
            </div>
            <div class="table-responsive">
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>                          
                            <th class="text-center">No KTP</th>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Bulan</th>
                            <th class="text-center">Tenor ke</th>
                            <th class="text-center">Jatuh Tempo</th>
                            <th class="text-center">Source Bunga</th>
                            <th class="text-center">Suku Bunga</th>
                            <th class="text-center">Angsuran</th>
                            <th class="text-center">Cicilan Bunga</th>
                            <th class="text-center">Pokok</th>
                            <th class="text-center">Out Standing</th>
                            <th class="text-center">Selisih</th>               
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
    url_grid = '<?php echo $url_griddata; ?>';

    $("#id_t_pengajuanbankheader").change(function () {
        var id_t_pengajuanbankheader = $("#id_t_pengajuanbankheader").val();
        $("#dataintable").dataTable().fnReloadAjax(url_grid + '/' + id_t_pengajuanbankheader);
        return false;
    });

    $(document).ready(function () {
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid + '/0',
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
                [240, 500, 1000, 2000, 5000],
                [240, 500, 1000, 2000, 5000]
            ],
            "columns": [
                {"data": "nama", },
                {"data": "no_ktp", },
                {"data": "tahun", },
                {"data": "bulan", },
                {"data": "tenorke", },
                {"data": "duedate", },
                {"data": "sourcebunga", },
                {"data": "bunga_persentase", },
                {"data": "angsuran", },
                {"data": "bunga_cicilan", },
                {"data": "pokok", },
                {"data": "outstanding", },
                {"data": "selisih", },
            ],

        });
    });


    function generatetenor() {
        var formdata = new FormData();
        formdata.append('id_t_pengajuanbankheader', $("#id_t_pengajuanbankheader").val());

        $.ajax({
            type: 'POST',
            url: '<?php echo $url_generatetenorpeserta; ?>',
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#btngeneratetenor").hide();
            },
            xhr: function () {
                $("#infoproses_generatetenor").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');

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
                _alert(returndata.message, returndata.valid);
                $("#infoproses_generatetenor").html("");
                $("#btngeneratetenor").show();
                $("#dataintable").dataTable().fnReloadAjax('<?php echo $url_griddata; ?>' + '/' + $("#id_t_pengajuanbankheader").val());

            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });
        return false;

    }


</script>

<div class="col-md-12">
    <div class="card card-outline-success">
        <div class="card-header">
            <h4 class="m-b-0 text-white"><i class="fas fa-list-alt"></i> <?php echo $title; ?>
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
                        <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Process</button>

                    </div> 
                </div>
            <div class="table-responsive">
                <table id="dataintable" class="table table-bordered color-table muted-table" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">ID Pekerjaan</th>
                            <th class="text-center">Kode Jenis Kelamin</th>
                            <th class="text-center">KTP</th>
                            <th class="text-center">NPWP</th>
                            <th class="text-center">Gaji Pokok</th>
                            <th class="text-center">Nama Pasangan</th>
                            <th class="text-center">KTP Pasangan</th>
                            <th class="text-center">No Rekening</th>
                            <th class="text-center">Bank Cabang</th>
                            <th class="text-center">Tanggal Akad</th>
                            <th class="text-center">Harga Rumah</th>
                            <th class="text-center">Uang Muka</th>
                            <th class="text-center">Nilai Subsidi Uang Muka</th>
                            <th class="text-center">Nilai KPR</th>
                            <th class="text-center">Suku Bunga KPR</th>
                            <th class="text-center">Tenor</th>
                            <th class="text-center">Angsuran</th>
                            <th class="text-center">Nilai Selisih Angsuran</th>
                            <th class="text-center">Nama Badan Hukum</th>
                            <th class="text-center">Nama Perumahan</th>
                            <th class="text-center">Alamat Angunan</th>
                            <th class="text-center">Kabupaten / Kota Angunan</th>
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
    url_grid = '<?php echo $url_griddata; ?>';
    
    $("#id_t_pengajuanbankheader").change(function () {       
        var id_t_pengajuanbankheader = $("#id_t_pengajuanbankheader").val();
        $("#dataintable").dataTable().fnReloadAjax(url_grid +'/'+ id_t_pengajuanbankheader);
        return false;
    });

    $(document).ready(function () {
        $('#dataintable').DataTable({
            responsive: true,
            "ajax": {
                "url": url_grid+'/0',
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
                {"data": "nama", },
                {"data": "pekerjaan", },
                {"data": "jeniskelamin", },
                {"data": "no_ktp", },
                {"data": "no_npwp", },
                {"data": "gaji_pokok", },
                {"data": "nama_pasangan", },
                {"data": "no_ktp_pasangan", },
                {"data": "no_rekening", },
                {"data": "bankcabang", },
                {"data": "tanggal_akad", },
                {"data": "harga_rumah", },
                {"data": "uang_muka", },
                {"data": "nilai_subsidi", },
                {"data": "nilai_kpr", },
                {"data": "bunga", },
                {"data": "tenor", },
                {"data": "angsuran", },
                {"data": "nilia_selisihangsuran_ditagihkan", },
                {"data": "nama_badanhukum", },
                {"data": "nama_perumahan", },
                {"data": "alamat_perumahan", },
                {"data": "kotakab", },
                {"data": "kodepos", },
                {"data": "luastanah", },
                {"data": "luasbangunan", },
            ],

        });
    });


</script>
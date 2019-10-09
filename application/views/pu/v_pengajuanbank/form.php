<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0">
            <font color="white"><i class="fab fa-wpforms"></i> <?php echo $title . '&nbsp;&nbsp;&nbsp;<alert class="alert alert-warning">Status ' . $labelstatus . '<alert>'; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="no_sk" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
                <div class="form-group row" id="div_no_sk">
                    <label for="no_sk" class="col-sm-2 text-right control-label col-form-label">Nomor Surat</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="no_sk" required="" id="no_sk" type="text" minlength="5" maxlength="60" parsley-type="text" placeholder="Masukan Nomor Surat" class="form-control" value="<?php echo (isset($default['no_sk'])) ? $default['no_sk'] : ''; ?>" <?php echo (isset($default['readonly_no_sk'])) ? $default['readonly_no_sk'] : ''; ?>>
                    </div>
                </div>
                <div class="form-group row" id="div_tanggal_surat">
                    <label for="tanggal_surat" class="col-sm-2 text-right control-label col-form-label">Tanggal Surat</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="tanggal_surat" id="tanggal_surat" minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal surat, format dd-mm-yyyy" class="form-control" value="<?php echo (isset($default['tanggal_surat'])) ? $default['tanggal_surat'] : ''; ?>" <?php echo (isset($default['readonly_tanggal_surat'])) ? $default['readonly_tanggal_surat'] : ''; ?>>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="daritanggal" class="col-sm-2 text-right control-label col-form-label">Periode</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="daritanggal" id="daritanggal" minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal mulai periode, format dd-mm-yyyy" class="form-control" value="<?php echo (isset($default['daritanggal'])) ? $default['daritanggal'] : ''; ?>" <?php echo (isset($default['readonly_daritanggal'])) ? $default['readonly_daritanggal'] : ''; ?>>
                    </div>
                    <label for="sampaitanggal" class=" col-form-label">s/d</label>
                    <div class="col-sm-4">
                        <input name="sampaitanggal" id="sampaitanggal" minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal sampai periode, format dd-mm-yyyy" class="form-control" value="<?php echo (isset($default['sampaitanggal'])) ? $default['sampaitanggal'] : ''; ?>" <?php echo (isset($default['readonly_sampaitanggal'])) ? $default['readonly_sampaitanggal'] : ''; ?>>
                    </div>
                </div>
                 <div class="form-group row" id="div_id_bank">
                    <label for="id_bank" class="col-sm-2 text-right control-label col-form-label">Bank</label><span style="color:red">*</span>
                    <div class="col-sm-9">
                        <select id="id_bank" name="id_bank" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['id_bank'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?>>
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row" id="div_prihal">
                    <label for="prihal" class="col-sm-2 text-right control-label col-form-label">Prihal</label><span style="color:red">*</span>
                    <div class="col-sm-5">
                        <select id="prihal" name="prihal" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['prihal'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?>>
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penagihanke" class="col-sm-2 text-right control-label col-form-label">Pengajuan ke</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="penagihanke" required="" id="penagihanke" type="text" minlength="1" maxlength="3" parsley-type="text" placeholder="Masukan urutan nilai pengajuan" class="form-control" value="<?php echo (isset($default['penagihanke'])) ? $default['penagihanke'] : ''; ?>" <?php echo (isset($default['readonly_prihal'])) ? $default['readonly_prihal'] : ''; ?>>
                    </div>
                </div>
                <div class="form-group row" id="div_jenisperhitungan">
                    <label for="jenisperhitungan" class="col-sm-2 text-right control-label col-form-label">Rumus perhitungan</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <select id="jenisperhitungan" name="jenisperhitungan" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['jenisperhitungan'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?>>
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row" id="div_cek_dukcapil">
                    <label for="cek_dukcapil" class="col-sm-2 text-right control-label col-form-label">Validasi ke server dukcapil</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <select id="cek_dukcapil" name="cek_dukcapil" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['cek_dukcapil'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?>>
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row" id="div_lampiran_spv">
                    <label for="lampiran_spv" class="col-sm-2 text-right control-label col-form-label">Upload surat pernyataan verifikasi</label>
                    <div class="col-sm-9">
                        <input type="file" required="" name="lampiran_spv" id="lampiran_spv"> Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
                    </div>
                </div>
                <div class="form-group row" id="div_lampiran_drkas">
                    <label for="lampiran_drkas" class="col-sm-2 text-right control-label col-form-label">Upload daftar rekapitulasi kelompok sasaran</label>
                    <div class="col-sm-9">
                        <input type="file" name="lampiran_drkas" id="lampiran_drkas">Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
                    </div>
                </div>
                <div class="form-group row" id="div_lampiran_form1">
                    <label for="lampiran_form1" class="col-sm-2 text-right control-label col-form-label">Upload form 1</label>
                    <div class="col-sm-9">
                        <input type="file" required="" name="lampiran_form1" id="lampiran_form1">Max 20 MB, Tipe file yang diijinkan xls,xlsx
                    </div>
                </div>
                <div class="form-group row" id="div_lampiran_lainnya">
                    <label for="lampiran_lainnya" class="col-sm-2 text-right control-label col-form-label">Upload lampiran lain-lain</label>
                    <div class="col-sm-9">
                        <input type="file" name="lampiran_lainnya" id="lampiran_lainnya">Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
                    </div>
                </div>
                <div class="form-group">
                    <div id="divdetail" style="display:none"></div><br/>
                </div>

                <div class="text-center">
                    <span id='infoproses'></span>
                    <button type="button" id="btnsubmitform" onclick="submitdata()" class="btn btn-success">
                        <li class='fa fa-save'></li> &nbsp;Submit
                    </button>
                    <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-secondary">
                        <li class='fa fa-reply'></li>&nbsp; Cancel
                    </button>
                </div>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    var statuspengajuan = '<?php echo $statuspengajuan; ?>';


    actiondata = (id == 0) ? 'create' : 'update';
    if (actiondata == 'update') 
      {
        if (statuspengajuan != '1') {
            $("#no_sk,#tanggal_surat,#id_bank,#prihal,#jenisperhitungan,#cek_dukcapil,#lampiran_spv,#lampiran_drkas,#lampiran_form1,#lampiran_lainnya").removeAttr("required");
            $("#div_prihal,#div_no_sk,#div_tanggal_surat,#div_id_bank,#div_jenisperhitungan,#div_cek_dukcapil,#div_lampiran_spv,#div_lampiran_drkas,#div_lampiran_form1,#div_lampiran_lainnya").hide();
        }
        var getdata = postaction('<?php echo $url_getdata; ?>', {
            'no_sk': $("#no_sk").val(),
            'tanggal_surat': $("#tanggal_surat").val(),
        });
        homedetail(getdata.result.id_t_pengajuanbankheader);
    }
    
     $("#id_bank").trigger("chosen:updated");
     $("#id_bank").chosen();




    $('#tanggal_surat').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
    });

    $('#daritanggal').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        onSelect: function (dateText) {


        }
    });

    $('#sampaitanggal').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        onSelect: function (dateText) {


        }
    });

   
    infoshorcutform();

    function submitdata() {
        if ($("#id_bank").val() !== '' && statuspengajuan == '1') {
            prosesdata();
        } else if (statuspengajuan != '1') {
            prosesdata();
        } else {
            _alert('Data bank harus diisi..!', 'warning');
        }

        return false;

    }

    function prosesdata() {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        var statuspengajuan = '<?php echo $statuspengajuan; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        var form = $("#formdata");
        form.parsley().validate();
        if (form.parsley().isValid()) {
            $('.money').unmask();
            $("#actiondata").val(actiondata);

            var formdata = new FormData();

            if (statuspengajuan == '1') {
                var lampiran_spv = $('#lampiran_spv').prop('files')[0];
                var lampiran_drkas = $('#lampiran_drkas').prop('files')[0];
                var lampiran_form1 = $('#lampiran_form1').prop('files')[0];
                var lampiran_lainnya = $('#lampiran_lainnya').prop('files')[0];
                formdata.append('lampiran_spv', lampiran_spv);
                formdata.append('lampiran_drkas', lampiran_drkas);
                formdata.append('lampiran_form1', lampiran_form1);
                formdata.append('lampiran_lainnya', lampiran_lainnya);
            }

            formdata.append('formdata', $("#formdata").serialize());

            $.ajax({
                type: 'POST',
                url: url_post,
                data: formdata,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {

                },
                xhr: function () {
                    $("#infoproses").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                    $("#btnsubmitform,#btncancelform").hide();
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
                    $("#infoproses").html("");
                    $("#btnsubmitform,#btncancelform").show();
                    if (returndata.valid == true) {                       
                        if (returndata.valid == true && actiondata == 'create') {
                            var getdata = postaction('<?php echo $url_getdata; ?>', {
                                'no_sk': $("#no_sk").val(),
                                'tanggal_surat': $("#tanggal_surat").val(),
                            });
                            homedetail(getdata.result.id_t_pengajuanbankheader);
                        }

                    }

                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                }
            });
            return false;
        }

        return false;


    }

    function homedetail(id_header) {
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + id_header);
    }
</script>
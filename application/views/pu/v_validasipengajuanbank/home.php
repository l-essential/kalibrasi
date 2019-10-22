
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">           
            <div class="main-content container-fluid">

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

                <div class="text-center">
                    <div id="infosetup"></div>
                    <div class="form-group row" id="divfinfoproses">
                        <table width="100%">
                            <tr>
                                <td width="10%" class="text-left">Step 1</td>
                                <td width="2%" class="text-left">:</td>
                                <td width="88%" class="text-left"><span id="step_1"><div class="alert alert-warning">Generate CSV, waiting</div></span></td>
                            </tr>
                            <tr>
                                <td width="10%" class="text-left">Step 2</td>
                                <td width="2%" class="text-left">:</td>
                                <td width="88%" class="text-left"><span id="step_2"><div class="alert alert-warning">Generate temporary data, waiting</div></span></td>
                            </tr>
                            <tr>
                                <td width="10%" class="text-left">Step 3</td>
                                <td width="2%" class="text-left">:</td>
                                <td width="88%" class="text-left"><span id="step_3"><div class="alert alert-warning">Generate master badan hukum, waiting</div></span></td>
                            </tr>
                            <tr>
                                <td width="10%" class="text-left">Step 4</td>
                                <td width="2%" class="text-left">:</td>
                                <td width="88%" class="text-left"><span id="step_4"><div class="alert alert-warning">Generate master perumahan, waiting</div></span></td>
                            </tr>
                            <tr>
                                <td width="10%" class="text-left">Step 5</td>
                                <td width="2%" class="text-left">:</td>
                                <td width="88%" class="text-left"><span id="step_5"><div class="alert alert-warning">Validasi data, waiting</div></span></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    actiondata = (id == 0) ? 'create' : 'update';

    function submitform() {
        var form = $("#formdata");
        form.parsley().validate();
        if (form.parsley().isValid()) {
            $("#step_1").html();
            $("#btnsubmitform").hide();
            $.ajax({
                type: 'POST',
                url: url_post,
                data: {'id_t_pengajuanbankheader': $("#id_t_pengajuanbankheader").val()},
                cache: false,
                beforeSend: function () {
                    $("#divfinfoproses").show();
                },
                xhr: function () {
                    $("#infosetup").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                    var xhr = new XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (event) {
                        if (event.lengthComputable) {
                            var percentComplete = Math.round((event.loaded / event.total) * 100);
                        }
                        ;

                    }, false);

                    return xhr;
                },
                success: function (resultdata) {
                    if (resultdata.valid == true) {
                        $("#divfinfoproses").show();
                        $("#infosetup").html("");
                        $("#step_1").html("<div class='alert alert-success'>" + resultdata.message + '</div>');
                        generate_tmpdata(resultdata.filecsv);
                    } else {
                        _alert(resultdata.message);
                    }
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                }
            });

        }
        return false;
    }

    function generate_tmpdata(filecsv) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $url_generate_tmpdata; ?>',
            data: {
                'filecsv': filecsv,
                'id_t_pengajuanbankheader': $("#id_t_pengajuanbankheader").val()
            },
            cache: false,
            beforeSend: function () {
                $("#btnsubmitform").hide();
            },
            xhr: function () {
                $("#infosetup").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                    }
                    ;

                }, false);

                return xhr;
            },
            success: function (resultdata) {
                if (resultdata.valid == true) {
                    $("#step_2").html("<div class='alert alert-success'>" + resultdata.message + '</div>');
                    $("#infosetup").html("");
                    generate_badanhukum($("#id_t_pengajuanbankheader").val());
                } else {
                    _alert(resultdata.message);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });

    }

    function generate_badanhukum(id_t_pengajuanbankheader) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $url_generate_badanhukum; ?>' + '/' + id_t_pengajuanbankheader,
            data: {},
            cache: false,
            beforeSend: function () {
                $("#btnsubmitform").hide();
            },
            xhr: function () {
                $("#infosetup").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                    }
                    ;

                }, false);

                return xhr;
            },
            success: function (resultdata) {
                if (resultdata.valid == true) {
                    $("#step_3").html("<div class='alert alert-success'>" + resultdata.message + '</div>');
                    $("#infosetup").html("");
                    $("#btnsubmitform").show();
                    generate_perumahan(id_t_pengajuanbankheader);
                } else {
                    _alert(resultdata.message);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });

    }
    function generate_perumahan(id_t_pengajuanbankheader) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $url_generate_perumahan; ?>' + '/' + id_t_pengajuanbankheader,
            data: {},
            cache: false,
            beforeSend: function () {
                $("#btnsubmitform").hide();
            },
            xhr: function () {
                $("#infosetup").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                    }
                    ;

                }, false);

                return xhr;
            },
            success: function (resultdata) {
                if (resultdata.valid == true) {
                    $("#step_4").html("<div class='alert alert-success'>" + resultdata.message + '</div>');
                    $("#infosetup").html("");
                    $("#btnsubmitform").show();
                    generate_validasi(id_t_pengajuanbankheader);

                } else {
                    _alert(resultdata.message);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });

    }

    function generate_validasi(id_t_pengajuanbankheader) {
        $.ajax({
            type: 'POST',
            url: '<?php echo $url_generate_validasi; ?>' + '/' + id_t_pengajuanbankheader,
            data: {},
            cache: false,
            beforeSend: function () {
                $("#btnsubmitform").hide();
            },
            xhr: function () {
                $("#infosetup").html('<div class="alert alert-primary" role="alert"><img class=""  src="<?php echo base_url(); ?>public/images/loading.gif"  width="45" height="45"/>&nbsp;&nbsp;Please wait...</div>');
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener("progress", function (event) {
                    if (event.lengthComputable) {
                        var percentComplete = Math.round((event.loaded / event.total) * 100);
                    }
                    ;

                }, false);

                return xhr;
            },
            success: function (resultdata) {
                if (resultdata.valid == true) {
                    $("#step_5").html("<div class='alert alert-success'>" + resultdata.message + '</div>');
                    $("#infosetup").html("");
                    $("#btnsubmitform").show();
                    window.open('<?php echo $url_reportnotvalid ?>'+'/'+id_t_pengajuanbankheader);

                } else {
                    _alert(resultdata.message);
                }
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
            }
        });

    }

</script>



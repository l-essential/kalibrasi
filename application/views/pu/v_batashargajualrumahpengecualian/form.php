
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="tanggal_tmt" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="id_provinsi" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="id_provinsi" class="col-sm-2 text-right control-label col-form-label">Provinsi</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <select id="id_provinsi" name="id_provinsi" required="" class="form-control chosen-select" tabindex="1">
                        <?php foreach ($default['id_provinsi'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="id_kota" class="col-sm-2 text-right control-label col-form-label">Kota/Kabupaten</label>
                <div class="col-sm-3">
                    <select id="id_kota" name="id_kota" class="form-control chosen-select" tabindex="1"></select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="id_kecamatan" class="col-sm-2 text-right control-label col-form-label">Kecamatan</label>
                <div class="col-sm-3">
                    <select id="id_kecamatan" name="id_kecamatan" class="form-control chosen-select" tabindex="1"></select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="id_desa" class="col-sm-2 text-right control-label col-form-label">Kelurahan / Desa</label>
                <div class="col-sm-3">
                    <select id="id_desa" name="id_desa" class="form-control chosen-select" tabindex="1"></select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="tanggal_tmt" class="col-sm-2 text-right control-label col-form-label">Terhitung sejak tanggal</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="tanggal_tmt" required="" id="tanggal_tmt" type="text" minlength="10" maxlength="10" parsley-type="text" placeholder="Masukan tanggal, format dd-mm-yyyy" class="form-control"
                           value="<?php echo (isset($default['tanggal_tmt'])) ? $default['tanggal_tmt'] : ''; ?>"
                           <?php echo (isset($default['readonly_tanggal_tmt'])) ? $default['readonly_tanggal_tmt'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="harga_perm2" class="col-sm-2 text-right control-label col-form-label">Harge per m2</label>
                <div class="col-sm-4">
                    <input name="harga_perm2" id="harga_perm2" maxlength="11" type="text" parsley-type="text" placeholder="Masukan batas nilai" class="form-control money"
                           value="<?php echo (isset($default['harga_perm2'])) ? $default['harga_perm2'] : ''; ?>"
                           <?php echo (isset($default['readonly_harga_perm2'])) ? $default['readonly_harga_perm2'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="batasnilai_rumahtapak" class="col-sm-2 text-right control-label col-form-label">Batas rumah tapak</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input name="batasnilai_rumahtapak" id="batasnilai_rumahtapak"  minlength="7" maxlength="18" type="text" required="" parsley-type="text" placeholder="Masukan batas nilai" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahtapak'])) ? $default['batasnilai_rumahtapak'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahtapak'])) ? $default['readonly_batasnilai_rumahtapak'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="batasnilai_rumahsusun" class="col-sm-2 text-right control-label col-form-label">Batas rumah susun</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input name="batasnilai_rumahsusun" id="batasnilai_rumahsusun" minlength="7" maxlength="18" type="text" required="" parsley-type="text" placeholder="Masukan batas nilai" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahsusun'])) ? $default['batasnilai_rumahsusun'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahsusun'])) ? $default['readonly_batasnilai_rumahsusun'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="text-center">
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    if (actiondata == 'update') {
        $("#id_provinsi").prop("disabled", true);
        getdynamic_kotakabupaten('<?php echo $id_kota;  ?>');
        getdynamic_kecamatan('<?php echo $id_kecamatan;  ?>');
        getdynamic_desa('<?php echo $id_desa;  ?>');
    } else {
        $("#id_provinsi").trigger("chosen:updated");
        $("#id_provinsi").chosen();
        
        $('#tanggal_tmt').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });
    }


    $('.money').mask('000.000.000.000.000', {reverse: true});

    $("#id_provinsi").change(function () {
        getdynamic_kotakabupaten();
        getdynamic_kecamatan();
        getdynamic_desa();
    });
    
    $("#id_kota").change(function () {
        getdynamic_kecamatan();
        getdynamic_desa();
    });
    
    $("#id_kecamatan").change(function () {
        getdynamic_desa();
    });


    function getdynamic_kotakabupaten(result_id) {
        var resultkab = postaction('<?php echo site_url('pu/Combobox/getdynamic_kotakabupaten'); ?>', {
            'id_provinsi': $("#id_provinsi").val(),
        });

        $("#id_kota option").remove();
        $("#id_kota").empty();

        if (resultkab.valid == true) {
            $("#id_kota").append($("<option></option>").attr("value", "").text(" -Please Select- "));
            $.each(resultkab.data, function (key, value) {
                $("#id_kota")
                        .append($("<option></option>")
                                .attr("value", value.id_kota)
                                .text(value.kota));
            });
            $("#id_kota").val(result_id);
        }

        $("#id_kota").trigger("chosen:updated");
        $("#id_kota").chosen();
    }

    
    
    function getdynamic_kecamatan(result_id) {
        var resultkec = postaction('<?php echo site_url('pu/Combobox/getdynamic_kecamatan'); ?>', {
            'id_kota': $("#id_kota").val(),
        });

        $("#id_kecamatan option").remove();
        $("#id_kecamatan").empty();

        if (resultkec.valid == true) {
            $("#id_kecamatan").append($("<option></option>").attr("value", "").text(" -Please Select- "));
            $.each(resultkec.data, function (key, value) {
                $("#id_kecamatan")
                        .append($("<option></option>")
                                .attr("value", value.id_kecamatan)
                                .text(value.nama_kecamatan));
            });
            $("#id_kecamatan").val(result_id);
            //getdynamic_kecamatan();
        }

        $("#id_kecamatan").trigger("chosen:updated");
        $("#id_kecamatan").chosen();
    }
    
     function getdynamic_desa(result_id) {
        var resultdesa = postaction('<?php echo site_url('pu/Combobox/getdynamic_desa'); ?>', {
            'id_kecamatan': $("#id_kecamatan").val(),
        });

        $("#id_desa option").remove();
        $("#id_desa").empty();

        if (resultdesa.valid == true) {
            $("#id_desa").append($("<option></option>").attr("value", "").text(" -Please Select- "));
            $.each(resultdesa.data, function (key, value) {
                $("#id_desa")
                        .append($("<option></option>")
                                .attr("value", value.id_desa)
                                .text(value.nama_desa+' ( '+value.kodepos+' )'));
            });
            $("#id_desa").val(result_id);
            //getdynamic_kecamatan();
        }

        $("#id_desa").trigger("chosen:updated");
        $("#id_desa").chosen();
    }



    infoshorcutform();

    function submitform() {
        var form = $("#formdata");
        form.parsley().validate();
        if (form.parsley().isValid()) {
            $('.money').unmask();
            $("#actiondata").val(actiondata);
            var formdata = $("#formdata").serialize();
            postdata(url_post, formdata, url_index);
        }
        return false;
    }
</script>




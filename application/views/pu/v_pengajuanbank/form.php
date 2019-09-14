
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="no_sk" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">           
                <div class="form-group row">
                    <label for="no_sk" class="col-sm-2 text-right control-label col-form-label">Nomor</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="no_sk" required="" id="no_sk" type="text" minlength="5" maxlength="60" parsley-type="text" placeholder="Masukan Nomor SK" class="form-control"
                               value="<?php echo (isset($default['no_sk'])) ? $default['no_sk'] : ''; ?>"
                               <?php echo (isset($default['readonly_no_sk'])) ? $default['readonly_no_sk'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="tanggal_surat" class="col-sm-2 text-right control-label col-form-label">Tanggal Surat/label</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="tanggal_surat" id="tanggal_surat"  minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal surat, format dd-mm-yyyy" class="form-control"
                               value="<?php echo (isset($default['tanggal_surat'])) ? $default['tanggal_surat'] : ''; ?>"
                               <?php echo (isset($default['readonly_tanggal_surat'])) ? $default['readonly_tanggal_surat'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="daritanggal" class="col-sm-2 text-right control-label col-form-label">Periode</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="daritanggal" id="daritanggal"  minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal mulai periode, format dd-mm-yyyy" class="form-control"
                               value="<?php echo (isset($default['daritanggal'])) ? $default['daritanggal'] : ''; ?>"
                               <?php echo (isset($default['readonly_daritanggal'])) ? $default['readonly_daritanggal'] : ''; ?>
                               >
                    </div> 
                    <label for="sampaitanggal" class=" col-form-label">s/d</label>
                    <div class="col-sm-4">
                        <input name="sampaitanggal" id="sampaitanggal" minlength="10" maxlength="10" type="text" required="" parsley-type="text" placeholder="Masukan tanggal sampai periode, format dd-mm-yyyy" class="form-control"
                               value="<?php echo (isset($default['sampaitanggal'])) ? $default['sampaitanggal'] : ''; ?>"
                               <?php echo (isset($default['readonly_sampaitanggal'])) ? $default['readonly_sampaitanggal'] : ''; ?>
                               >
                    </div> 
                </div> 
                <div class="form-group row">
                <label for="id_bankquotatahunan" class="col-sm-2 text-right control-label col-form-label">Bank</label>
                <div class="col-sm-9">
                    <select id="id_bankquotatahunan" name="id_bankquotatahunan" class="form-control chosen-select" tabindex="1"></select>
                </div>                        
            </div>

                <div class="text-center">
                    <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';

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
            getbankquota();

        }
    });

    $('#sampaitanggal').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
        onSelect: function (dateText) {
            getbankquota();

        }
    });
    
    function getbankquota(result_id) {
        var resultkec = postaction('<?php echo site_url('pu/Combobox/getdynamic_bankquota'); ?>', {
            'daritanggal': $("#daritanggal").val(),
            'sampaitanggal': $("#sampaitanggal").val(),
        });

        $("#id_bankquotatahunan option").remove();
        $("#id_bankquotatahunan").empty();

        if (resultkec.valid == true) {
            $("#id_bankquotatahunan").append($("<option></option>").attr("value", "").text(" -Please Select- "));
            $.each(resultkec.data, function (key, value) {
                $("#id_bankquotatahunan")
                        .append($("<option></option>")
                                .attr("value", value.id_bankquotatahunan)
                                .text(value.labelbank));
            });
            $("#id_bankquotatahunan").val(result_id);
            //getdynamic_kecamatan();
        }

        $("#id_bankquotatahunan").trigger("chosen:updated");
        $("#id_bankquotatahunan").chosen();
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




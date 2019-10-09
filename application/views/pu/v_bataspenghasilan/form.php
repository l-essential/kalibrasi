
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
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
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
                <label for="batasnilai_rumahtapak" class="col-sm-2 text-right control-label col-form-label">Batas rumah tapak</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="batasnilai_rumahtapak" id="batasnilai_rumahtapak"  minlength="7" maxlength="11" type="text" required="" parsley-type="text" placeholder="Masukan batas nilai" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahtapak'])) ? $default['batasnilai_rumahtapak'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahtapak'])) ? $default['readonly_batasnilai_rumahtapak'] : ''; ?>
                           >
                </div> 
                <label for="batasnilai_rumahsusun" class="col-sm-2 text-right control-label col-form-label">Batas rumah susun</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="batasnilai_rumahsusun" id="batasnilai_rumahsusun" minlength="7" maxlength="11" type="text" required="" parsley-type="text" placeholder="Masukan batas nilai" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahsusun'])) ? $default['batasnilai_rumahsusun'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahsusun'])) ? $default['readonly_batasnilai_rumahsusun'] : ''; ?>
                           >
                </div> 
            </div> 
           
            <div class="form-group row">
                <label for="batasnilai_rumahtapak_suamiistri" class="col-sm-2 text-right control-label col-form-label">Batas rumah tapak suami istri</label>
                <div class="col-sm-3">
                    <input name="batasnilai_rumahtapak_suamiistri" id="batasnilai_rumahtapak_suamiistri"  maxlength="11" type="text" parsley-type="text" placeholder="Masukan batas nilai suami istri" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahtapak_suamiistri'])) ? $default['batasnilai_rumahtapak_suamiistri'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahtapak_suamiistri'])) ? $default['readonly_batasnilai_rumahtapak_suamiistri'] : ''; ?>
                           >
                </div> 
                  <label for="batasnilai_rumahrusun_suamiistri" class="col-sm-2 text-right control-label col-form-label">Batas rumah susun suami istri</label>
                <div class="col-sm-3">
                    <input name="batasnilai_rumahrusun_suamiistri" id="batasnilai_rumahrusun_suamiistri" maxlength="11" type="text" parsley-type="text" placeholder="Masukan batas nilai suami istri" class="form-control money"
                           value="<?php echo (isset($default['batasnilai_rumahrusun_suamiistri'])) ? $default['batasnilai_rumahrusun_suamiistri'] : ''; ?>"
                           <?php echo (isset($default['readonly_batasnilai_rumahrusun_suamiistri'])) ? $default['readonly_batasnilai_rumahrusun_suamiistri'] : ''; ?>
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
    if(actiondata=='update'){
        $("#id_provinsi").prop("disabled",true);
    }else{
        $("#id_provinsi").trigger("chosen:updated");
        $("#id_provinsi").chosen();
        
         $('#tanggal_tmt').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });
    }
    
    
    $('.money').mask('000.000.000.000.000', {reverse: true});

   

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




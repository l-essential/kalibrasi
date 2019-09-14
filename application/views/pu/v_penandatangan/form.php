
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="nip" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-2 text-right control-label col-form-label">NIP</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input name="nip" id="nip" type="text" minlength="18" maxlength="20" required="" parsley-type="text" placeholder="Masukan NIP" class="form-control"
                           value="<?php echo (isset($default['nip'])) ? $default['nip'] : ''; ?>"
                           <?php echo (isset($default['readonly_nip'])) ? $default['readonly_nip'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="nama_penandatangan" class="col-sm-2 text-right control-label col-form-label">Nama</label><span style="color:red">*</span>
                <div class="col-sm-8">
                    <input name="nama_penandatangan" id="nama_penandatangan" type="text" minlength="5" maxlength="80" required="" parsley-type="text" placeholder="Masukan nama penandatangan" class="form-control"
                           value="<?php echo (isset($default['nama_penandatangan'])) ? $default['nama_penandatangan'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_penandatangan'])) ? $default['readonly_nama_penandatangan'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="jabatan_penandatangan" class="col-sm-2 text-right control-label col-form-label">Jabatan</label><span style="color:red">*</span>
                <div class="col-sm-6">
                    <input name="jabatan_penandatangan" id="jabatan_penandatangan" type="text" minlength="5" maxlength="60" required="" parsley-type="text" placeholder="Masukan jabatan penandatangan" class="form-control"
                           value="<?php echo (isset($default['jabatan_penandatangan'])) ? $default['jabatan_penandatangan'] : ''; ?>"
                           <?php echo (isset($default['readonly_jabatan_penandatangan'])) ? $default['readonly_jabatan_penandatangan'] : ''; ?>
                           >
                </div>                        
            </div> 

            <div class="form-group row">
                <label for="tanggal_tmt" class="col-sm-2 text-right control-label col-form-label">Tanggal TMT</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="tanggal_tmt" id="tanggal_tmt" type="text" minlength="5" maxlength="60" required="" parsley-type="text" placeholder="Masukan jabatan penandatangan" class="form-control"
                           value="<?php echo (isset($default['tanggal_tmt'])) ? $default['tanggal_tmt'] : ''; ?>"
                           <?php echo (isset($default['readonly_tanggal_tmt'])) ? $default['readonly_tanggal_tmt'] : ''; ?>
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
    $('#tanggal_tmt').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
           
        });
    actiondata = (id == 0) ? 'create' : 'update';
    
    infoshorcutform();
</script>




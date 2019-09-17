
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="kode_jenisrumah" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
           
            <div class="form-group row">
                <label for="kode_jenisrumah" class="col-sm-2 text-right control-label col-form-label">Kode Jenis Rumah</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="kode_jenisrumah" id="kode_jenisrumah" type="text" minlength="2" maxlength="10" required="" parsley-type="text" placeholder="Masukan kode jenis rumah" class="form-control"
                           value="<?php echo (isset($default['kode_jenisrumah'])) ? $default['kode_jenisrumah'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_jenisrumah'])) ? $default['readonly_kode_jenisrumah'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="nama_jenisrumah" class="col-sm-2 text-right control-label col-form-label">Nama Jenis Rumah</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="nama_jenisrumah" id="nama_jenisrumah" type="text" minlength="5" maxlength="50" required="" parsley-type="text" placeholder="Masukan nama jenis rumah" class="form-control"
                           value="<?php echo (isset($default['nama_jenisrumah'])) ? $default['nama_jenisrumah'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_jenisrumah'])) ? $default['readonly_nama_jenisrumah'] : ''; ?>
                           >
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
    infoshorcutform();
</script>




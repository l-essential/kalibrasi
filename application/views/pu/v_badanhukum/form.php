
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="badanhukum" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">


                <div class="form-group row">
                    <label for="" class="col-sm-2 text-right control-label col-form-label"></label>
                    <div class="col-sm-3">
                        <div class="demo-checkbox">
                            <input type="checkbox" id="statusbadanhukum" name="statusbadanhukum" value="2"/>
                            <label for="statusbadanhukum">Balcklish</label>
                        </div>                        
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="badanhukum" class="col-sm-2 text-right control-label col-form-label">Badan Hukum</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="badanhukum" id="badanhukum" minlength="5" maxlength="50" type="text" required="" parsley-type="text" placeholder="Masukan badan hukum" class="form-control"
                               value="<?php echo (isset($default['badanhukum'])) ? $default['badanhukum'] : ''; ?>"
                               <?php echo (isset($default['readonly_badanhukum'])) ? $default['readonly_badanhukum'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 text-right control-label col-form-label">Keterangan</label>
                    <div class="col-sm-6">
                        <input name="keterangan" id="keterangan" type="text"  parsley-type="text" placeholder="Masukan nama keterangan" class="form-control"
                               value="<?php echo (isset($default['keterangan'])) ? $default['keterangan'] : ''; ?>"
                               <?php echo (isset($default['readonly_keterangan'])) ? $default['readonly_keterangan'] : ''; ?>
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
    if (actiondata == 'update') {
        var statusbadanhukum = '<?php echo $default['statusbadanhukum']; ?>';
        if (statusbadanhukum == '2') {
            $("#statusbadanhukum").prop("checked", true);
        }
    }

    infoshorcutform();
</script>




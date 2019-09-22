
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="tanggal_terbit" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="tanggal_terbit" class="col-sm-2 text-right control-label col-form-label">Tanggal terbit</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="tanggal_terbit" id="tanggal_terbit" type="text" minlength="2" maxlength="10" required="" parsley-type="text" placeholder="Masukan tanggal terbit" class="form-control"
                               value="<?php echo (isset($default['tanggal_terbit'])) ? $default['tanggal_terbit'] : ''; ?>"
                               <?php echo (isset($default['readonly_tanggal_terbit'])) ? $default['readonly_tanggal_terbit'] : ''; ?>
                               >
                    </div> 
                    <label for="bi_rate" class="col-sm-2 text-right control-label col-form-label">BI Rate</label><span style="color:red">*</span>
                    <div class="col-sm-2">
                        <input name="bi_rate" id="bi_rate" onkeyup="validasiangka(this,'numbers')" type="text" minlength="1" maxlength="8" required="" parsley-type="text" placeholder="Masukan nilai BI Rate" class="form-control"
                               value="<?php echo (isset($default['bi_rate'])) ? $default['bi_rate'] : ''; ?>"
                               <?php echo (isset($default['readonly_bi_rate'])) ? $default['readonly_bi_rate'] : ''; ?>
                               >
                              
                    </div> 
                    %
                </div> 

                <div class="form-group row">
                    <label for="hari_efektif" class="col-sm-2 text-right control-label col-form-label">Total hari efektif</label><span style="color:red">*</span>
                    <div class="col-sm-2">
                        <input name="hari_efektif" id="hari_efektif" onkeyup="validasiangka(this,'numbers')" type="text" minlength="1" maxlength="2" required="" parsley-type="text" placeholder="Masukan jumlah hari efektif" class="form-control"
                               value="<?php echo (isset($default['hari_efektif'])) ? $default['hari_efektif'] : ''; ?>"
                               <?php echo (isset($default['readonly_hari_efektif'])) ? $default['readonly_hari_efektif'] : ''; ?>
                               >
                              
                    </div> 
                    Hari                       
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
    $('#tanggal_terbit').datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy',
    });
    infoshorcutform();
</script>




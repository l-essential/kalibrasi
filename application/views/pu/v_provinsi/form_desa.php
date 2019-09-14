
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatadetail" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_kecamatan" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_kecamatan" id="id_kecamatan" value="<?php echo $id_kecamatan; ?>" />


            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="kode_desa" class="col-sm-2 text-right control-label col-form-label">Kode Desa</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input type="text" id="kode_desa" name="kode_desa" onkeyup="validasiangka(this,'numbers')" class="form-control money" required="" placeholder="Masukan kode desa"
                           value="<?php echo (isset($default['kode_desa'])) ? $default['kode_desa'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_desa'])) ? $default['readonly_kode_desa'] : ''; ?>      
                           />  
                </div>
                <label for="nama_desa" class="col-sm-2 text-right control-label col-form-label">Nama Desa</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input type="text" id="nama_desa" name="nama_desa" class="form-control money" required="" placeholder="Masukan nama desa"
                           value="<?php echo (isset($default['nama_desa'])) ? $default['nama_desa'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_desa'])) ? $default['readonly_nama_desa'] : ''; ?>      
                           />  
                </div> 
            </div> 
            <div class="form-group row">
                <label for="kodepos" class="col-sm-2 text-right control-label col-form-label">Kodepos</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input type="text" id="kodepos" name="kodepos" onkeyup="validasiangka(this,'numbers')" class="form-control money" required="" placeholder="Masukan kodepos"
                           value="<?php echo (isset($default['kodepos'])) ? $default['kodepos'] : ''; ?>"
                           <?php echo (isset($default['readonly_kodepos'])) ? $default['readonly_kodepos'] : ''; ?>      
                           />  
                </div>
            </div>
          
            <div class="text-center">
                <button type="button" id="btnsavedetail" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="button" id="btncanceldetail"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var form, formdatadetail, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';



        $("#btnsavedetail").click(function () {
            form = $("#formdatadetail");
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondatadetail").val(actiondata);
                formdatadetail = form.serialize();
                var resultdata = postaction(url_post, formdatadetail);
                _alert(resultdata.message, resultdata.valid);
                if(resultdata.valid==true){
                    ToContent(url_index);
                }
               

            }
        });
        $("#btncanceldetail").click(function () {
            ToContent(url_index);
        });
    });

   


</script>



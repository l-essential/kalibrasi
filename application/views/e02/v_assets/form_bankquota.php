<style>
    .parsley-required{

        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

</style>  
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatabankquota" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="idbankquota" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatabankquota" id="actiondatabankquota" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_bank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_bank" id="id_bank" value="<?php echo $id_bank; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">                       
                    <label class="col-3 col-lg-2 col-form-label text-right" for="tipe">Tipe<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-3">
                        <select id="tipe" name="tipe" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['tipe'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select> 
                    </div>
                    <label class="col-3 col-lg-2 col-form-label text-right" for="tanggal_pko">Tanggal<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-3">
                        <input name="tanggal_pko"  minlength="10" maxlength="10" id="tanggal_pko" type="text" required="" parsley-type="text" placeholder="Masukan tanggal pko" class="form-control"
                               value="<?php echo (isset($default['tanggal_pko'])) ? $default['tanggal_pko'] : ''; ?>"
                               <?php echo (isset($default['readonly_tanggal_pko'])) ? $default['readonly_tanggal_pko'] : ''; ?>
                               >
                    </div>
                </div>
                <div class="form-group row">                       
                    <label class="col-3 col-lg-2 col-form-label text-right" for="tahun">Tahun<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-3">
                        <input name="tahun" id="tahun" required=""  minlength="4" maxlength="4" type="text" parsley-type="text" placeholder="Masukan tahun" class="form-control"
                               value="<?php echo (isset($default['tahun'])) ? $default['tahun'] : ''; ?>"
                               <?php echo (isset($default['readonly_tahun'])) ? $default['readonly_tahun'] : ''; ?>
                               >
                    </div>
                    <label class="col-3 col-lg-2 col-form-label text-right" for="quota">Quota<span style="color:red">*</span>
                    </label>
                    <div class="col-9 col-lg-3">
                        <input name="quota" id="quota" required="" minlength="1" maxlength="10" type="text" parsley-type="text" placeholder="Masukan quota" class="form-control"
                               value="<?php echo (isset($default['quota'])) ? $default['quota'] : ''; ?>"
                               <?php echo (isset($default['readonly_quota'])) ? $default['readonly_quota'] : ''; ?>
                               >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 text-right control-label col-form-label">Keterangan</label>
                    <div class="col-sm-8">
                        <textarea id="keterangan" class="form-control" name="keterangan" required="" placeholder="Masukan keetrangan" cols="18" rows="3" <?php echo (isset($default['readonly_keterangan'])) ? $default['readonly_keterangan'] : ''; ?> ><?php echo (isset($default['keterangan'])) ? $default['keterangan'] : ''; ?></textarea>

                    </div>                        
                </div> 

                <div class="text-center">
                    <button type="button" id="btnsavebankquota"  class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncancelbankquota" class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var formbankquota, formdatabankquota, url_index, url_post, idbankquota, actiondatabankquota;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        idbankquota = $("#idbankquota").val();
        actiondatabankquota = (idbankquota == 0) ? 'create' : 'update';


        $('#tanggal_pko').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });


        $("#btnsavebankquota").click(function () {
            formbankquota = $("#formdatabankquota");
            formbankquota.parsley().validate();
            if (formbankquota.parsley().isValid()) {
                $("#actiondatabankquota").val(actiondatabankquota);
                formdatabankquota = formbankquota.serialize();
                postdata(url_post, formdatabankquota, url_index);
            }
        });
        $("#btncancelbankquota").click(function () {
            ToContent(url_index);
        });
    });


</script>




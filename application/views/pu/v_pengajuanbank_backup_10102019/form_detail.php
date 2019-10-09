

<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatadetail" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_jeniskpr" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_t_pengajuanbankheader" id="id_t_pengajuanbankheader" value="<?php echo $id_t_pengajuanbankheader; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="jeniskpr" class="col-sm-2 text-right control-label col-form-label">Jenis KPR</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <select id="id_jeniskpr" name="id_jeniskpr" required="" class="form-control chosen-select" tabindex="1">
                            <?php foreach ($default['id_jeniskpr'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="kpr1_jumlahunit" class="col-sm-2 text-right control-label col-form-label">Total Unit</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="kpr1_jumlahunit" onkeyup="validasiangka(this, 'numbers')" id="kpr1_jumlahunit" type="text" required=""  parsley-type="text" placeholder="Masukan total unit" class="form-control"
                               value="<?php echo (isset($default['kpr1_jumlahunit'])) ? $default['kpr1_jumlahunit'] : ''; ?>"
                               <?php echo (isset($default['readonly_kpr1_jumlahunit'])) ? $default['readonly_kpr1_jumlahunit'] : ''; ?>
                               >
                    </div>
                    <label for="kpr1_harga" class="col-sm-2 text-right control-label col-form-label">Total Nilai Harga</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="kpr1_harga" onkeyup="validasiangka(this, 'numbers')" id="kpr1_harga" type="text" required=""  parsley-type="text" placeholder="Masukan total harga" class="form-control"
                               value="<?php echo (isset($default['kpr1_harga'])) ? $default['kpr1_harga'] : ''; ?>"
                               <?php echo (isset($default['readonly_kpr1_harga'])) ? $default['readonly_kpr1_harga'] : ''; ?>
                               >
                    </div>   
                </div>  
                <div class="form-group row">
                    <label for="permintaan_unit" class="col-sm-2 text-right control-label col-form-label">Permintaan Total Unit</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="permintaan_unit" onkeyup="validasiangka(this, 'numbers')" id="permintaan_unit" type="text" required=""   parsley-type="text" placeholder="Masukan permintaan total" class="form-control"
                               value="<?php echo (isset($default['permintaan_unit'])) ? $default['permintaan_unit'] : ''; ?>"
                               <?php echo (isset($default['readonly_permintaan_unit'])) ? $default['readonly_permintaan_unit'] : ''; ?>
                               >
                    </div>
                    <label for="permintaan_harga" class="col-sm-2 text-right control-label col-form-label">Permintaan Total Nilai Harga</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="permintaan_harga" onkeyup="validasiangka(this, 'numbers')" id="permintaan_harga" type="text" required=""  parsley-type="text" placeholder="Masukan permintaan total harga" class="form-control"
                               value="<?php echo (isset($default['permintaan_harga'])) ? $default['permintaan_harga'] : ''; ?>"
                               <?php echo (isset($default['readonly_permintaan_harga'])) ? $default['readonly_permintaan_harga'] : ''; ?>
                               >
                    </div>   
                </div>  

                <div class="text-center">
                    <button type="button" id="btnsavedetail" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncanceldetail"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
        </form>
    </div>
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
                postdata(url_post, formdatadetail, url_index);
            }
        });
        $("#btncanceldetail").click(function () {
            ToContent(url_index);
        });
    });

</script>


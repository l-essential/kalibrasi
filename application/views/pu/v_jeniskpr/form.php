
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="jeniskpr" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="jeniskpr" class="col-sm-2 text-right control-label col-form-label">Jenis Rumah</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <select id="id_jenisrumah" name="id_jenisrumah" required="" class="form-control chosen-select" tabindex="1">
                        <?php foreach ($default['id_jenisrumah'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="jeniskpr" class="col-sm-2 text-right control-label col-form-label">Jenis KPR</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="jeniskpr" id="jeniskpr" type="text" minlength="3" maxlength="50" required="" parsley-type="text" placeholder="Masukan Jenis KPR" class="form-control"
                           value="<?php echo (isset($default['jeniskpr'])) ? $default['jeniskpr'] : ''; ?>"
                           <?php echo (isset($default['readonly_jeniskpr'])) ? $default['readonly_jeniskpr'] : ''; ?>
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
    infoshorcutform();
</script>




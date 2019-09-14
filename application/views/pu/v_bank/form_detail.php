

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
            <input type="hidden" name="checkdata1" id="checkdata1" value="kantor_cabank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_bank" id="id_bank" value="<?php echo $id_bank; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="kantor_cabank" class="col-sm-2 text-right control-label col-form-label">Kota</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="kantor_cabank" id="kantor_cabank" type="text" required="" parsley-type="text" placeholder="Masukan nama kantor cabang" class="form-control"
                               value="<?php echo (isset($default['kantor_cabank'])) ? $default['kantor_cabank'] : ''; ?>"
                               <?php echo (isset($default['readonly_kantor_cabank'])) ? $default['readonly_kantor_cabank'] : ''; ?>
                               >
                    </div>                        
                </div>  
                <div class="form-group row">
                    <label for="no_rekening" class="col-sm-2 text-right control-label col-form-label">Nomor Rekening</label>
                    <div class="col-sm-3">
                        <input name="no_rekening" id="no_rekening" type="text"  parsley-type="text" placeholder="Masukan nomor rekening" class="form-control"
                               value="<?php echo (isset($default['no_rekening'])) ? $default['no_rekening'] : ''; ?>"
                               <?php echo (isset($default['readonly_no_rekening'])) ? $default['readonly_no_rekening'] : ''; ?>
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


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
    .ui-datepicker-calendar {
        display: none;
    }
</style>  
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatabunga" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="idbunga" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondatabunga" id="actiondatabunga" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="id_bank" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" name="id_bank" id="id_bank" value="<?php echo $id_bank; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="periode" class="col-sm-2 text-right control-label col-form-label">Periode</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="periode" id="periode" type="text" required="" parsley-type="text" placeholder="Masukan periode" class="form-control"
                               value="<?php echo (isset($default['periode'])) ? $default['periode'] : ''; ?>"
                               <?php echo (isset($default['readonly_periode'])) ? $default['readonly_periode'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="nilaibunga" class="col-sm-2 text-right control-label col-form-label">Nilai Bunga %</label>
                    <div class="col-sm-3">
                        <input name="nilaibunga" id="nilaibunga" type="text" parsley-type="text" placeholder="Masukan nilai suku bunga" class="form-control"
                               value="<?php echo (isset($default['nilaibunga'])) ? $default['nilaibunga'] : ''; ?>"
                               <?php echo (isset($default['readonly_nilaibunga'])) ? $default['readonly_nilaibunga'] : ''; ?>
                               >
                    </div>                        
                </div> 

                <div class="text-center">
                    <button type="button" id="btnsavebunga"  class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncancelbunga" class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
 <script type="text/javascript">
        $(document).ready(function () {
            var formbunga, formdatabunga, url_index, url_post, idbunga, actiondatabunga;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            idbunga = $("#idbunga").val();
            actiondatabunga = (idbunga == 0) ? 'create' : 'update';


            $('#periode').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'MM yy',
                maxDate: '0',
                onClose: function (dateText, inst) {
                    $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
                }
            });


            $("#btnsavebunga").click(function () {
                formbunga = $("#formdatabunga");
                formbunga.parsley().validate();
                if (formbunga.parsley().isValid()) {
                    $("#actiondatabunga").val(actiondatabunga);
                    formdatabunga = formbunga.serialize();
                    postdata(url_post, formdatabunga, url_index);
                }
            });
            $("#btncancelbunga").click(function () {
                ToContent(url_index);
            });
        });


    </script>




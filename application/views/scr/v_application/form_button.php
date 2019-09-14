
<br/>    
 <div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
       </h3>

    </div>
    <div class="card card-body">
        <form id="formdatabutton" class="form-horizontal" data-parsley-validate="" novalidate="">           
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_maplikasi" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="btncode" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_maplikasi" id="id_maplikasi" value="<?php echo $id_maplikasi; ?>" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="btncode" class="col-sm-2 text-right control-label col-form-label">Kode Button<span style="color:red">*</span></label>
                <div class="col-sm-3">
                    <input name="btncode" id="btncode" type="text" required="" parsley-type="text" placeholder="Masukan kode button" class="form-control"
                                   value="<?php echo (isset($default['btncode'])) ? $default['btncode'] : ''; ?>"
                                   <?php echo (isset($default['readonly_btncode'])) ? $default['readonly_btncode'] : ''; ?>
                                   >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="btnname" class="col-sm-2 text-right control-label col-form-label">Nama Button<span style="color:red">*</span></label>
                <div class="col-sm-3">
                     <input  name="btnname" id="btnname" type="text" required="" parsley-type="text" placeholder="Masukan nama button" class="form-control"
                                    value="<?php echo (isset($default['btnname'])) ? $default['btnname'] : ''; ?>"
                                    <?php echo (isset($default['readonly_btnname'])) ? $default['readonly_btnname'] : ''; ?>
                                    >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="icon" class="col-sm-2 text-right control-label col-form-label">Icon button</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input  name="icon" id="icon" type="text" required="" parsley-type="text" placeholder="Masukan icon untuk button" class="form-control"
                                    value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                                    <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                                    >
                </div>                        
            </div> 
            <div class="text-center">
                <button type="submit" id="btnsubmitform"  class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
</div>   



    <script type="text/javascript">
        $(document).ready(function () {
            var form, formdatabutton, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id","#formdatabutton").val();
            actiondata = (id == 0) ? 'create' : 'update';           

            $("#formdatabutton").on('submit', function (e) {
                e.preventDefault();
                form = $(this);
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondata","#formdatabutton").val(actiondata);
                    formdatabutton = $("#formdatabutton").serialize();
                    var returndata = postaction(url_post, formdatabutton);
                    _alert(returndata.msg, returndata.valid);
                    if (returndata.valid == true) {
                        backdata();
                    }
                }
            });
            $("#formdatabutton").on('reset', function (e) {
                e.preventDefault();
                backdata();
            });


        });

        function backdata() {
            $("#tab_button").load('<?php echo $url_index; ?>');
        }
    </script>

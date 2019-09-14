<br/>
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatagroup" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="id_maplikasi" id="id_maplikasi" value="<?php echo $id_maplikasi; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="kode_group" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="id_maplikasi" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
           
            
            <div class="form-group row">
                <label for="kode_group" class="col-sm-2 text-right control-label col-form-label">Kode Group</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="kode_group" id="kode_group" type="text" required="" parsley-type="text" placeholder="Masukan kode group" class="form-control"
                           value="<?php echo (isset($default['kode_group'])) ? $default['kode_group'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_group'])) ? $default['readonly_kode_group'] : ''; ?>
                           >
                </div> 
                <label for="nama_group" class="col-sm-2 text-right control-label col-form-label">Nama Group</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input name="nama_group" id="nama_group" type="text" required="" parsley-type="text" placeholder="Masukan nama group" class="form-control"
                           value="<?php echo (isset($default['nama_group'])) ? $default['nama_group'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_group'])) ? $default['readonly_nama_group'] : ''; ?>
                           >
                </div>
            </div> 
                
            <div class="form-group row">
                    <label for="" class="col-sm-2 text-right control-label col-form-label"></label>
                    <div class="col-sm-3">
                        <div class="demo-checkbox">
                            <input type="checkbox" id="spesialgroup" name="spesialgroup" value="Y"/>
                            <label for="spesialgroup">Set Special group</label>
                        </div>                        
                    </div>                        
              </div> 
            
           
            <div class="text-center">
                <button type="submit" id="btnsubmitform"  class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
            </div>
    </div>
</form>
</div>



    <script type="text/javascript">
        $(document).ready(function () {
            var form, formdatagroup, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id","#formdatagroup").val();
            actiondata = (id == 0) ? 'create' : 'update';


            if (actiondata == 'update') {
                var flaglimitdata = '<?php echo $default['spesialgroup']; ?>';
                if (flaglimitdata == 'Y') {
                    $("#spesialgroup","#formdatagroup").prop("checked", true);
                }
            }

            $("#formdatagroup").on('submit', function (e) {
                e.preventDefault();
                form = $(this);
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondata","#formdatagroup").val(actiondata);
                    formdatagroup = $("#formdatagroup").serialize();
                    var returndata = postaction(url_post, formdatagroup);
                    _alert(returndata.msg, returndata.valid);
                    if (returndata.valid == true) {
                        backdata();
                    }
                }
            });
            $("#formdatagroup").on('reset', function (e) {
                e.preventDefault();
                backdata();
            });


        });

        function backdata() {
            $("#tab_group").load('<?php echo $url_index; ?>');
        }
    </script>

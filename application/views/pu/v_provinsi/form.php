
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="provinsi" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="kode_provinsi" class="col-sm-2 text-right control-label col-form-label">Kode Provinsi</label><span style="color:red">*</span>
                    <div class="col-sm-3">
                        <input name="kode_provinsi" id="kode_provinsi" onkeyup="validasiangka(this,'numbers')" type="text" required="" parsley-type="text" placeholder="Masukan nama kode provinsi" class="form-control"
                               value="<?php echo (isset($default['kode_provinsi'])) ? $default['kode_provinsi'] : ''; ?>"
                               <?php echo (isset($default['readonly_kode_provinsi'])) ? $default['readonly_kode_provinsi'] : ''; ?>
                               >
                    </div> 
                    <label for="provinsi" class="col-sm-2 text-right control-label col-form-label">Provinsi</label><span style="color:red">*</span>
                    <div class="col-sm-4">
                        <input name="provinsi" id="provinsi" type="text" required="" parsley-type="text" placeholder="Masukan nama provinsi" class="form-control"
                               value="<?php echo (isset($default['provinsi'])) ? $default['provinsi'] : ''; ?>"
                               <?php echo (isset($default['readonly_provinsi'])) ? $default['readonly_provinsi'] : ''; ?>
                               >
                    </div> 
                </div> 
                <div class="form-group">
                     <div id="divdetail" style="display:none"></div>
                </div> 

                <div class="text-center">
                    <button type="submit" id="btnsubmitform" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="reset" id="btncancelform"   class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'provinsi': $("#provinsi").val()});
            homedetail(getdata);
        }



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                var resultdata = postaction(url_post, formdata);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'provinsi': resultdata.postdata.provinsi});
                    homedetail(getdata);
                    
                }
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var id_provinsi = param.result.id_provinsi;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + id_provinsi);
    }
</script>





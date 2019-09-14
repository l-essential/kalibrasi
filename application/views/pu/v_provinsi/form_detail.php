
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="backtodata()">&nbsp;Back</button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatadetail" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_provinsi" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_provinsi" id="id_provinsi" value="<?php echo $id_provinsi; ?>" />


            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="kode_kota" class="col-sm-2 text-right control-label col-form-label">Kode Kota / Kabupaten</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input type="text" id="kode_kota" name="kode_kota" onkeyup="validasiangka(this,'numbers')" class="form-control money" required="" placeholder="Masukan nama kode kota"
                           value="<?php echo (isset($default['kode_kota'])) ? $default['kode_kota'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_kota'])) ? $default['readonly_kode_kota'] : ''; ?>      
                           />  
                </div>
                <label for="kota" class="col-sm-2 text-right control-label col-form-label">Kode Kota</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input type="text" id="kota" name="kota" class="form-control money" required="" placeholder="Masukan nama kota"
                           value="<?php echo (isset($default['kota'])) ? $default['kota'] : ''; ?>"
                           <?php echo (isset($default['readonly_kota'])) ? $default['readonly_kota'] : ''; ?>      
                           />  
                </div> 
            </div> 
            <div class="form-group">
                <div id="divdetail" style="display:none"></div>
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
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdatakecamatan; ?>', {
                'id_kota': id
            });

            homedetail(getdata);
        }

        $("#btnsavedetail").click(function () {
            form = $("#formdatadetail");
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondatadetail").val(actiondata);
                formdatadetail = form.serialize();
                var resultdata = postaction(url_post, formdatadetail);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdatakecamatan; ?>', {
                        'id_kota': resultdata.ref_id,
                    });
                    homedetail(getdata);

                }
            }
        });
        $("#btncanceldetail").click(function () {
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var id_kota = param.result.id_kota;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_home_kecamatan ?>' + '/' + id_kota);
    }
 function backtodata(){
         ToContent('<?php echo $url_index; ?>');
    }

</script>



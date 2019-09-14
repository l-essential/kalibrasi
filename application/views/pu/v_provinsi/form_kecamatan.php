
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_kota" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_kota" id="id_kota" value="<?php echo $id_kota; ?>" />


            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="kode_kecamatan" class="col-sm-2 text-right control-label col-form-label">Kode Kecamatan</label><span style="color:red">*</span>
                <div class="col-sm-3">
                    <input type="text" id="kode_kecamatan" name="kode_kecamatan" onkeyup="validasiangka(this,'numbers')" class="form-control money" required="" placeholder="Masukan kode kecamatan"
                           value="<?php echo (isset($default['kode_kecamatan'])) ? $default['kode_kecamatan'] : ''; ?>"
                           <?php echo (isset($default['readonly_kode_kecamatan'])) ? $default['readonly_kode_kecamatan'] : ''; ?>      
                           />  
                </div>
                <label for="nama_kecamatan" class="col-sm-2 text-right control-label col-form-label">Nama Kecamatan</label><span style="color:red">*</span>
                <div class="col-sm-4">
                    <input type="text" id="nama_kecamatan" name="nama_kecamatan" class="form-control money" required="" placeholder="Masukan nama kecamatan"
                           value="<?php echo (isset($default['nama_kecamatan'])) ? $default['nama_kecamatan'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_kecamatan'])) ? $default['readonly_nama_kecamatan'] : ''; ?>      
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
            var getdata = postaction('<?php echo $url_getdatadesa; ?>', {
                'id_kecamatan': id
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
                _alert(resultdata.message, resultdata.valid);
                var getdata = postaction('<?php echo $url_getdatadesa; ?>', {
                    'id_kecamatan': resultdata.ref_id,
                });
                homedetail(getdata);

            }
        });
        $("#btncanceldetail").click(function () {
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var id_kecamatan = param.result.id_kecamatan;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_home_desa ?>' + '/' + id_kecamatan);
    }
    function backtodata(){
         ToContent('<?php echo $url_index; ?>');
    }

</script>



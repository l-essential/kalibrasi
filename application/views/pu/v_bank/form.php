
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
            <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="refreshtemplate()"><i class="mdi mdi-refresh">&nbsp;Refresh</i></button></div>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdata" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="kode_bank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
                <div class="form-group row">
                    <label for="kode_bank" class="col-1 col-form-label text-right">Kode Bank</label>
                    <div class="col-3 col-lg-3">
                        <input name="kode_bank" minlength="1" maxlength="30" id="kode_bank" type="text" required=""  parsley-type="text" placeholder="Masukan kode bank" class="form-control"
                               value="<?php echo (isset($default['kode_bank'])) ? $default['kode_bank'] : ''; ?>"
                               <?php echo (isset($default['readonly_kode_bank'])) ? $default['readonly_kode_bank'] : ''; ?>
                               >
                    </div>
                    <label for="nama_bank" class="col-3 col-lg-2 col-form-label text-right">Nama Bank</label>
                    <div class="col-9 col-lg-6">
                        <input name="nama_bank" minlength="2" maxlength="50" id="nama_bank" type="text" required=""  parsley-type="text" placeholder="Masukan nama bank" class="form-control"
                               value="<?php echo (isset($default['nama_bank'])) ? $default['nama_bank'] : ''; ?>"
                               <?php echo (isset($default['readonly_nama_bank'])) ? $default['readonly_nama_bank'] : ''; ?>
                               >
                    </div>                         
                </div>  
                <div class="form-group">
                    <div id="divdetail" style="display:none"></div><br/>
                    <div id="divbunga" style="display:none"></div>
                    <div id="divbankquota" style="display:none"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <p class="text-right">
                    <button type="submit" class="btn btn-space btn-primary"><p class='fa fa-save'>&nbsp;Submit</p></button>
                    <button type="reset" class="btn btn-space btn-secondary"><p class='fa fa-reply'>&nbsp;Cancel</p></button>
                </p>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var form, formdata, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            if (actiondata == 'update') {
                var getdata = postaction('<?php echo $url_getdata; ?>', {'nama_bank': $("#nama_bank").val()});
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
                        var getdata = postaction('<?php echo $url_getdata; ?>', {'nama_bank': resultdata.postdata.nama_bank});
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
            var id_bank = param.result.id_bank;
            $("#divdetail").html("");
            $("#divdetail").show();
            $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + id_bank);
            $("#divbunga").html("");
            $("#divbunga").show();
            $("#divbunga").load('<?php echo $url_homebunga ?>' + '/' + id_bank);
            $("#divbankquota").html("");
            $("#divbankquota").show();
            $("#divbankquota").load('<?php echo $url_homebankquota ?>' + '/' + id_bank);
        }
    </script>

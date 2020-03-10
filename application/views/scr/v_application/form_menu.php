<br/>

<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatamenu" class="form-horizontal" data-parsley-validate="" novalidate="">           
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="nama_menu" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_maplikasi" id="id_maplikasi" value="<?php echo $id_maplikasi; ?>" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="id_parent" class="col-sm-2 text-right control-label col-form-label">Parent menu</label>
                <div class="col-sm-6">
                    <?php echo $parentmenu; ?>
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="nama_menu" class="col-sm-2 text-right control-label col-form-label">Nama menu<span style="color:red">*</span></label>
                <div class="col-sm-7">
                    <input name="nama_menu" id="nama_menu" type="text" required="" parsley-type="text" placeholder="Masukan nama menu" class="form-control"
                           value="<?php echo (isset($default['nama_menu'])) ? $default['nama_menu'] : ''; ?>"
                           <?php echo (isset($default['readonly_nama_menu'])) ? $default['readonly_nama_menu'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="urutan" class="col-sm-2 text-right control-label col-form-label">Urutan menu</label>
                <div class="col-sm-3">
                    <input  name="urutan" id="urutan" type="text" parsley-type="text" placeholder="Masukan urutan menu" class="form-control"
                            value="<?php echo (isset($default['urutan'])) ? $default['urutan'] : ''; ?>"
                            <?php echo (isset($default['readonly_urutan'])) ? $default['readonly_urutan'] : ''; ?>
                            >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="icon" class="col-sm-2 text-right control-label col-form-label">Icon menu</label>
                <div class="col-sm-4">
                    <input  name="icon" id="icon" type="text"  parsley-type="text" placeholder="Masukan kode icon,kode icon menggunakan Font Awesome Icons" class="form-control"
                            value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                            <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                            >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="url_menu" class="col-sm-2 text-right control-label col-form-label">Url module menu</label>
                <div class="col-sm-7">
                    <input  name="url_menu" id="url_menu" type="text" parsley-type="text" placeholder="Fill url for menu, if url not standard, then with example 0#www.google#newtab , only replace www.google" class="form-control"
                            value="<?php echo (isset($default['url_menu'])) ? $default['url_menu'] : ''; ?>"
                            <?php echo (isset($default['readonly_url_menu'])) ? $default['readonly_url_menu'] : ''; ?>
                            >
                </div>                        
            </div> 

            <div class="text-center">
                <button type="submit" id="btnsubmitform" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                <button type="reset" id="btncancelform"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
            </div>
    </div>
</form>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        var form, formdatamenu, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id", "#formdatamenu").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            $("#id_parent", "#formdatamenu").val('<?php echo $id_parentmenu; ?>');
        }



        $("#formdatamenu").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata", "#formdatamenu").val(actiondata);
                formdatamenu = $("#formdatamenu").serialize();
                var returndata = postaction(url_post, formdatamenu);
                _alert(returndata.msg, returndata.valid);
                if (returndata.valid == true) {
                    backdata();
                }
            }
        });
        $("#formdatamenu").on('reset', function (e) {
            e.preventDefault();
            backdata();
        });


    });

    function backdata() {
        $("#tab_menu").load('<?php echo $url_index; ?>');
    }
</script>

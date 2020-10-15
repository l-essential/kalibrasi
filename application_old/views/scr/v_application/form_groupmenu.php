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
</style>    

<br/>
<br/>

<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <p class='fa fa-edit'></p> <?php echo $title; ?>
        </div>
        <div class="panel-body">
            <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="id_maplikasigroup" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="id_mmenu" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
                <input type="hidden" name="id_maplikasigroup" id="id_maplikasi" value="<?php echo $id_maplikasigroup; ?>" />

                <div class="main-content container-fluid">        
                   
                     <div class="form-menu row">
                        <label class="col-3 col-lg-2 col-form-label text-right" for="id_mmenu">Menu
                        </label>
                        <div class="col-9 col-lg-6">
                            <select id="id_mmenu" name="id_mmenu" class="form-control">
                                <?php foreach ($default['id_mmenu'] as $row) { ?>

                                    <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                            <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                        <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                                <?php } ?>
                            </select>   
                        </div>
                    </div> 
                </div>
                <br/><br/>
                
                <div id="divdetail" style="display:none"></div>
                
                <div class="col-sm-6">
                    <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary"><p class='fa fa-save'>&nbsp;&nbsp;Submit</p></button>
                        <button type="reset" class="btn btn-space btn-secondary"><p class='fa fa-reply'>&nbsp;&nbsp;Cancel</p></button>
                    </p>
                </div>
            </form>        
            <div class="panel-footer">
                &nbsp;
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function () {
            var form, formdata, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            

           

            $("#formdata").on('submit', function (e) {
                e.preventDefault();
                form = $(this);
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondata").val(actiondata);
                    formdata = $("#formdata").serialize();
                    var returndata = postaction(url_post, formdata);
                    _alert(returndata.msg, returndata.valid);
                    if (returndata.valid == true) {
                        backdata();
                    }
                }
            });
            $("#formdata").on('reset', function (e) {
                e.preventDefault();
                backdata();
            });


        });

        function backdata() {
            $("#groupmenu-pills").load('<?php echo $url_index; ?>');
        }
    </script>



<br/>    
<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i> <?php echo $title; ?></font>
        </h3>

    </div>
    <div class="card card-body">
        <form id="formdatagroupuser" class="form-horizontal" data-parsley-validate="" novalidate="" autocomplete="off">           

            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_maplikasigroup" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="id_user" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_maplikasigroup" id="id_maplikasi" value="<?php echo $id_maplikasigroup; ?>" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="id_user" class="col-sm-2 text-right control-label col-form-label">User <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <select id="id_user" name="id_user" class="form-control">
                        <?php foreach ($default['id_user'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>  
                </div>                        
            </div> 

            <div class="col-sm-12">
                <p  class="text-right">
                <button type="reset" id="btncancelform"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="submit" id="btnsubmitform"  class="btn btn-sm btn-success"><li class='fas fa-check'></li> &nbsp;Submit</button>
                </p>
            </div>
    </div>
</form>
</div>    



<script type="text/javascript">
    $(document).ready(function () {
        var form, formdatagroupuser, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id", "#formdatagroupuser").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#id_user").trigger("chosen:updated");
        $("#id_user").chosen();


        $("#formdatagroupuser").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata", "#formdatagroupuser").val(actiondata);
                formdatagroupuser = $("#formdatagroupuser").serialize();
                var returndata = postaction(url_post, formdatagroupuser);
                _alert(returndata.msg, returndata.valid);
                if (returndata.valid == true) {
                    backdata();
                }
            }
        });
        $("#formdatagroupuser").on('reset', function (e) {
            e.preventDefault();
            backdata();
        });


    });

    function backdata() {
        $("#tab_groupuser").load('<?php echo $url_index; ?>');
    }
</script>


<div class="card card-outline-success">
    <div class="card-header">
        <h3 class="box-title m-b-0"><font color="white"><i class="fab fa-wpforms"></i>&nbsp;Proses Approval</font></h3>
        <div style="float:right"><button class="btn btn-secondary btn-sm" onclick="closedata()"><li class="fa fa-reply"></li></button></div>
    </div>
    <div class="card-body">
        <table width="100%" class="table table-bordered">
            <tr>
                <td width="10%" align="right">Module</td>
                <td width="2%"  align="center">:</td>
                <td width="85%" align="left"><?php echo $default['module']; ?></td>
            </tr>
            <tr>
                <td width="10%" align="right">Info</td>
                <td width="2%"  align="center">:</td>
                <td width="85%" align="left"><?php echo $default['title']; ?></td>
            </tr>
            <tr>
                <td width="10%" align="right">Note</td>
                <td width="2%" align="center">:</td>
                <td width="85%" align="left"><?php echo $default['message']; ?></td>
            </tr>
            <input type="hidden" id="transaksi" name="transaksi" value="<?php echo $default['transaksi']; ?>" />
            <input type="hidden" id="keydata" name="keydata" value="<?php echo $default['keydata']; ?>" />
        </table>
        
        <?php if($default['typedata'] !=='information'){ ?>
        <div align="center">
            <button class="btn btn-info btn-sm" id="btnapprove" onclick="Postdata('approve')">Appove</button>
            <button class="btn btn-danger btn-sm" id="btnreject" onclick="Rejectdata()">Reject</button>
        </div>
        <?php } ?>
    </div>
</div>

<div id="DialogRejectNotif" class="modal fade"  role="dialog" aria-labelledby="DialogRejectNotifLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input type ="hidden" name="id"/>
                <h4 class="modal-title">Confirm Reject Data</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure reject &nbsp;&nbsp; <?php echo $default['title']; ?></p>
                <div class="form-group row">
                    <label for="rejectnote" class="col-3 col-lg-2 col-form-label text-right">Description</label>
                    <div class="col-9 col-lg-10">                  
                        <textarea id="rejectnote" class="form-control" name="rejectnote" placeholder="Fill reason for reject" cols="18" rows="3" <?php echo (isset($default['readonly_rejectnote'])) ? $default['readonly_rejectnote'] : ''; ?> ><?php echo (isset($default['rejectnote'])) ? $default['rejectnote'] : ''; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="Postdata('reject')" class="btn btn-danger" action="reject">Ok</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = '<?php echo $id; ?>';
    actiondata = (id == 0) ? 'create' : 'update';
    
    function Rejectdata(){
         $('#DialogRejectNotif').modal('show');        
    }


    function Postdata(actiondata) {             
        $.ajax({
            type: 'POST',
            url: url_post,
            data: {
                'id_notification': '<?php echo $id; ?>',
                'rejectnote': $("#rejectnote").val(),
                'actiondata': actiondata,
            },
            cache: false,          
            beforeSend: function () {
                $('#contentdata').html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
            },
            xhr: function () {
                var xhr = new XMLHttpRequest();
                return xhr;
            },
            success: function (returndata) {
                $('#DialogRejectNotif').modal('hide');
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();
                getnotification();
                _alert(returndata.message, returndata.valid);
                if (returndata.valid == true) {
                    ToContent(url_index);
                }else{
                    ToContent(url_index);
                }
            },
            error: function (xhr, status, error) {
                showdialogerror(xhr.responseText);
            }
        });

    }



</script>




        <div class="col-md-12">
          <div class="card card-like card-outline">
            <div class="card-header">
              <h3 class="card-title"><?php echo $preview->slug_article ?></h3>

              <div class="card-tools">
                <h6><?php echo $preview->done_by ?></h6>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p><?php echo $preview->article ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
           
           <form id="formdata" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="slug_article" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="status_article" id="status_article" value="1" />
                <div class="main-content container-fluid">
                </div>
                <div class="form-group row">
                    <div class="col-sm-3">
                        <div class="demo-checkbox">
                            <input type="checkbox" id="status_article" name="status_article" value="3"/>
                            <label for="status_article">Finis</label>
                        </div>                        
                    </div>                        
                </div> 
                
                <div class="col-sm-12">
                <p class="text-right">
                    <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm  btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
                </p>
                </div>
                </div>
            </form>
           
          </div>
          <!-- /.card -->
        </div>

        <script type="text/javascript">
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            $('#tanggal_tmt').datepicker({
                    dateFormat: 'dd-mm-yy',
                    changeMonth: true,
                    changeYear: true,
                
            });

            $("#article").summernote({
            height: 300
            });
            actiondata = (id == 0) ? 'create' : 'update';
            if (actiondata == 'update') {
                var status_article = '<?php echo $default['status_article']; ?>';
                if (status_article == '3') {
                    $("#status_article").prop("checked", true);
                }
            }
            
        </script>
 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-like card-outline">
            <div class="card-header">
            <?php echo $title_update ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
            <div class="form-group">
                   <textarea name="article" id="article" class="form-control"
                        <?php echo (isset($default['readonly_article'])) ? $default['readonly_article'] : ''; ?> ><?php echo (isset($default['article'])) ? $default['article'] : ''; ?></textarea>                      
            </div>

             <div class="form-group row">
                  <div class="col-sm-3">
                      <div class="demo-checkbox">
                          <input type="checkbox" id="status_article" name="status_article" value="3"/>
                          <label for="status_article">Done</label>
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
        </div>
    </div>
</div>
</div>
</section>

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




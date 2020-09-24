 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-like card-outline">
            <div class="card-header">
            CREATE ARTICLE
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="title_article" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="katagori" class="col-sm-2 col-form-label">Category <span style="color:red">*</span></label>
                <div class="col-sm-10">
                   <select id="id_category" name="id_category" class="form-control" required="">
                        <?php foreach ($default['id_category'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

             <div class="form-group row">
                <label for="title_article" class="col-sm-2 control-label col-form-label">Slug Article <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="title_article" id="title_article" type="text" required="" parsley-type="text" placeholder="input info page title" class="form-control"
                           value="<?php echo (isset($default['title_article'])) ? $default['title_article'] : ''; ?>"
                           <?php echo (isset($default['readonly_title_article'])) ? $default['readonly_title_article'] : ''; ?>
                           >
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
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




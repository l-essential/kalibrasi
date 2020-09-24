<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header border">
                <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="ToController('asm/Bank');">
                      <i class="fas fa-chevron-circle-left"></i> Back Home</button>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdatadetail" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="kantor_cabank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_bank" id="id_bank" value="<?php echo $id_bank; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="kantor_cabank" class="col-sm-2 text-right control-label col-form-label">Merek/type</label><span style="color:red">*</span>
                    <div class="col-sm-7">
                        <input name="kantor_cabank" id="kantor_cabank" type="text" required="" parsley-type="text" placeholder="Masukan nama kantor cabang" class="form-control"
                               value="<?php echo (isset($default['kantor_cabank'])) ? $default['kantor_cabank'] : ''; ?>"
                               <?php echo (isset($default['readonly_kantor_cabank'])) ? $default['readonly_kantor_cabank'] : ''; ?>
                               >
                    </div>                        
                </div>  
                <div class="form-group row">
                    <label for="no_rekening" class="col-sm-2 text-right control-label col-form-label">Deskripsi</label><span style="color:red">*</span>
                    <div class="col-sm-7">
                        <textarea name="no_rekening" class="form-control" rows="3" 
                        <?php echo (isset($default['readonly_no_rekening'])) ? $default['readonly_no_rekening'] : ''; ?> ><?php echo (isset($default['no_rekening'])) ? $default['no_rekening'] : ''; ?></textarea>
                    </div>                        
                </div>  

                <div class="text-center">
                    <button type="button" id="btnsavedetail" class="btn btn-success"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncanceldetail"  class="btn btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
</div>
</div>
</section>
</div>

<script type="text/javascript">
        $(document).ready(function () {
            var form, formdatadetail, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdatadetail");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondatadetail").val(actiondata);
                    formdatadetail = form.serialize();
                    postdata(url_post, formdatadetail, url_index);
                }
            });
            $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });
        });

    </script>


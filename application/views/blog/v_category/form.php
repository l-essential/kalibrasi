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
            <div class="card-header">
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="code_category" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="code_category" class="col-sm-2 text-right control-label col-form-label">Code Category <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="code_category" id="code_category" type="text" required="" parsley-type="text" placeholder="Masukan code_category" class="form-control"
                           value="<?php echo (isset($default['code_category'])) ? $default['code_category'] : ''; ?>"
                           <?php echo (isset($default['readonly_code_category'])) ? $default['readonly_code_category'] : ''; ?>
                           >
                </div>                        
            </div> 
              <div class="form-group row">
                <label for="slug_category" class="col-sm-2 text-right control-label col-form-label">Slug Category <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="slug_category" id="slug_category" type="text" required="" parsley-type="text" placeholder="Masukan slug_category" class="form-control"
                           value="<?php echo (isset($default['slug_category'])) ? $default['slug_category'] : ''; ?>"
                           <?php echo (isset($default['readonly_slug_category'])) ? $default['readonly_slug_category'] : ''; ?>
                           >
                </div>                        
            </div>
              <div class="form-group row">
                <label for="name_category" class="col-sm-2 text-right control-label col-form-label">Name Category <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="name_category" id="name_category" type="text" required="" parsley-type="text" placeholder="Masukan name_category" class="form-control"
                           value="<?php echo (isset($default['name_category'])) ? $default['name_category'] : ''; ?>"
                           <?php echo (isset($default['readonly_name_category'])) ? $default['readonly_name_category'] : ''; ?>
                           >
                </div>                        
            </div>

             <div class="form-group row">
                  <label for="icon" class="col-sm-2 text-right control-label col-form-label">Name Icon <span style="color:red">*</span></label>
                  <div class="col-sm-10">
                      <input name="icon" id="icon" type="text" required="" parsley-type="text" placeholder="Masukan icon" class="form-control"
                              value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                              <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                              >
                  </div>                        
              </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="file"> Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
            </div>

            <div class="col-sm-12">
              <p class="text-right">
                <button type="reset" id="btncancelform" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="submit" id="btnsubmitform" class="btn btn-sm  btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();

        $("#areaeditor").summernote({
                height: 300
            });
        actiondata = (id == 0) ? 'create' : 'update';

         

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            $("#actiondata").val(actiondata);

            $.ajax({
                url: url_post,
                type: "post",
                data: new FormData(this),
                dataType: "json",
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success:
                        function (data, text)
                        {

                            hideloading();
                            _alert(data.msg, data.valid);
                            if (data.valid == true) {
                                ToContent(url_index);
                            }
                        },
                error: function (request, status, error) {
                    alert(request.responseText + " " + status + " " + error);
                }
            });
            return false;


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });
</script>
<!-- <script type="text/javascript">
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    $('#tanggal_tmt').datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
           
        });
    actiondata = (id == 0) ? 'create' : 'update';
    
</script> -->




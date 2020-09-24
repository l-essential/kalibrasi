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

            <form id="formdata" data-parsley-validate="" novalidate="">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="middle_three_note" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />

                <div class="main-content container-fluid">
                      <!-- <?php
                    if ($id > 0) {
                        $image = "<div class='form-group row'><label for='images' class='col-3 col-lg-2 col-form-label text-right'>Gambar</label><div class='col-9 col-lg-10'><img src='$file_images' width='75' height='75'></div></div>";
                        echo $image;
                    }
                    ?> -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label col-form-label">Gambar</label>
                        <input type="file" name="file"> Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
                    </div>

                    <div class="form-group row">
                        <label for="middle_three_titile" class="col-sm-2 control-label col-form-label">Demo Title <span style="color:red">*</span></label>
                        <div class="col-sm-10">
                            <input name="middle_three_titile" id="middle_three_titile" type="text" required="" parsley-type="text" placeholder="Masukan middle_three_titile" class="form-control"
                                value="<?php echo (isset($default['middle_three_titile'])) ? $default['middle_three_titile'] : ''; ?>"
                                <?php echo (isset($default['readonly_middle_three_titile'])) ? $default['readonly_middle_three_titile'] : ''; ?>
                                >
                        </div>                        
                    </div> 

                     <div class="form-group row">
                        <label class="col-sm-2 control-label col-form-label">middle_three_note</label>
                        <div class="col-9 col-sm-10">
                            <textarea id="areaeditor" name="middle_three_note" cols="18" rows="3" <?php echo (isset($default['readonly_middle_three_note'])) ? $default['readonly_middle_three_note'] : ''; ?> ><?php echo (isset($default['middle_three_note'])) ? $default['middle_three_note'] : ''; ?></textarea>
                        </div>                        
                    </div>    
                </div>

                 <div class="col-sm-12">
                    <p class="text-right">
                        <button type="reset" id="btnsubmitform" class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                        <button type="submit" id="btncancelform" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
                      </p>
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

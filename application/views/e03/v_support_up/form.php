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
                <input type="hidden" name="checkdata1" id="checkdata1" value="keterangan" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">
                  <div class="form-group">
                        <label for="type" >Kode Katagori</label>
                            <input name="apps_code" id="apps_code" type="text" required="" parsley-type="text" placeholder="Fill apps_code" class="form-control"
                                    value="<?php echo (isset($default['apps_code'])) ? $default['apps_code'] : ''; ?>"
                                    <?php echo (isset($default['readonly_apps_code'])) ? $default['readonly_apps_code'] : ''; ?>
                                    >
                    </div>
                    <div class="form-group">
                        <label for="type" >Nama Katagori</label>
                        <input name="apps_name" id="apps_name" type="text" required="" parsley-type="text" placeholder="Fill apps_name" class="form-control"
                                value="<?php echo (isset($default['apps_name'])) ? $default['apps_name'] : ''; ?>"
                                <?php echo (isset($default['readonly_apps_name'])) ? $default['readonly_apps_name'] : ''; ?>
                                >
                    </div>
                    <div class="form-group">
                        <label for="type" >Kode Katagori</label>
                            <input name="url_apps" id="url_apps" type="text" required="" parsley-type="text" placeholder="Fill url_apps" class="form-control"
                                    value="<?php echo (isset($default['url_apps'])) ? $default['url_apps'] : ''; ?>"
                                    <?php echo (isset($default['readonly_url_apps'])) ? $default['readonly_url_apps'] : ''; ?>
                                    >
                    </div>
                    <div class="form-group">
                        <label for="type" >Nama Katagori</label>
                        <input name="icon_apps" id="icon_apps" type="text" required="" parsley-type="text" placeholder="Fill icon_apps" class="form-control"
                                value="<?php echo (isset($default['icon_apps'])) ? $default['icon_apps'] : ''; ?>"
                                <?php echo (isset($default['readonly_icon_apps'])) ? $default['readonly_icon_apps'] : ''; ?>
                                >
                    </div>  
                </div>

                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="submit" id="btnsubmitform" class="btn btn-sm btn-space btn-like"><i class='fa fa-save'>&nbsp;Submit</i></button>
                        <button type="reset" id="btncancelform" class="btn btn-sm btn-space btn-secondary"><i class='fa fa-reply'>&nbsp;Cancel</i></button>
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

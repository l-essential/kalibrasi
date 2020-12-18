
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
                <input type="hidden" name="checkdata1" id="checkdata1" value="file" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />

                <div class="main-content container-fluid">
                    <?php
                    if ($id > 0) {
                        $image = "<div class='form-group row'><label for='images' class='col-3 col-lg-2 col-form-label text-right'>Gambar</label><div class='col-9 col-lg-10'><img src='$file_images' width='300' height='150'></div></div>";
                        echo $image;
                    }
                    ?>
                    <div class="form-group row">
                        <label for="Gambar" class="col-3 col-lg-2 col-form-label text-right">Gambar</label>
                        <input type="file" name="file">
                    </div>

                </div>

                <div class="col-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
              </p>
            </div>
            </form>  
</div>
</div>
</div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            $("#actiondata").val(actiondata);

             $.ajax({
                            url: '<?php echo site_url('Useraccess/postdataimages'); ?>',
                            type: "post",
                            data: formdata,
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            cache: false,
                            async: false,
                            success:
                                    function (data, text)
                                    {
                                        _alert(data.msg, data.valid);
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

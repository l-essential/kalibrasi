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

      <div class="row">
        <!-- /.col -->
        <div class="col-7">
           <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
            <div class="card-header">
               you images
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
                <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />
                
                
                <div class="main-content container-fluid">
                    <div class="form-group">
                        <label>Gambar</label>
                       
                    </div>

                     <div class="form-group">
                     <div class="col-sm-9">
                       <input type="file" name="file" id="profile-img"> Max 10 MB, jpg,png
                     </div>
                </div> 

                </div>
               
                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="submit" id="btnsubmitform" class="btn btn-sm btn-space btn-like"><i class='fa fa-check'>&nbsp;Submit</i></button>
                    </p>
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="card card-success card-outline" style="border-top: 3px solid #33c595;">
        <div class="card-body">
                <p align="center">
                    <img src="" id="profile-img-tag"class="profile-user-img img-fluid"  style="width:175px;"/>
                </p>
        </div>
    </div>
    </div>
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

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        }
        $("#profile-img").change(function(){
            readURL(this);
        });
</script>

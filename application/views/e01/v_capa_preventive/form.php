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
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $idw; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="preventive_act" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />

                <input type="hidden" name="id_formulir" id="id_formulir" value="<?php echo $id_formulir; ?>" />

                <div class="main-content container-fluid">
                    <div class="form-group" style="padding-left: 9px;">
                        <div class="col-sm-12" style="padding-left: 0px;">
                        <textarea name="preventive_act" id="preventive_act" class="form-control" rows="2" placeholder="CORRECTIVE ACTION ..."></textarea>
                        </div>                        
                    </div>
                    <div class="form-group" style="padding-left: 9px;" autocomplete="off">
                        <div class="col-sm-12" style="padding-left: 0px;">
                            <input type ="text" name="preventive_duedate" id="preventive_duedate" class="form-control" placeholder="Due Date ..."/>
                        </div>                        
                    </div>
                    <div class="form-group row" style="padding-left: 9px;">
                        <div class="col-sm-12" style="padding-left: 0px;">
                        <div class="form-group row" style="padding-left: 25px;">
                            <input type="radio" id="preventive_status" name="preventive_status" value="CLOSED">&ensp;
                            <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                            <input type="radio" id="preventive_status" name="preventive_status" value="OPEN">&ensp;
                            <label for="OPEN">OPEN</label>&ensp;
                        </div>
                        </div>                        
                    </div>
                    <div class="form-group" style="padding-left: 9px;" autocomplete="off">
                        <div class="col-sm-12" style="padding-left: 0px;">
                        <select id="preventive_pic" name="preventive_pic[]" multiple class="form-control form-control-sm" required="">
                            <?php foreach ($default['namaKaryawan'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Attachment </label>
                        <input type="file" name="file"> Max 10 MB, Tipe file yang diijinkan jpg,png,pdf,xls,xlsx,doc,docx,csv
                    </div>
                </div>

                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="reset" id="btncancelform" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'> Cancel</i></button>
                        <button type="submit" id="btnsubmitform" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'> Submit</i></button>
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
        url_back = '<?php echo $url_back; ?>';
        id = $("#id").val();

        $("#areaeditor").summernote({
                height: 300
            });

            $(function(){
		    $("#preventive_duedate").datepicker({
			format:'yyyy/dd/mm'
		    });
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
                                ToContent(url_back);
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
            ToContent(url_back);
        });
    });

    $("#preventive_pic").trigger("chosen:updated");
    $("#preventive_pic").chosen({max_selected_options: 25});
</script>

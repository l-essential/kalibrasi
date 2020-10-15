
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
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdatadetail" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="tools_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="tools_id" id="tools_id" value="<?php echo $tools_id; ?>" />
            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="toolsdetail_code" class="col-sm-2 control-label col-form-label">Kode Alat Detail <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input name="toolsdetail_code" id="toolsdetail_code" type="text"  parsley-type="text" placeholder="input kode alat detail" class="form-control"
                               value="<?php echo (isset($default['toolsdetail_code'])) ? $default['toolsdetail_code'] : ''; ?>"
                               <?php echo (isset($default['readonly_toolsdetail_code'])) ? $default['readonly_toolsdetail_code'] : ''; ?>
                               >
                    </div>                        
                </div>
                 <div class="form-group row">
                    <label for="toolsdetail_name" class="col-sm-2 control-label col-form-label">Alat Name Detail <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <input name="toolsdetail_name" id="toolsdetail_name" type="text"  parsley-type="text" placeholder="input nama alat detail" class="form-control"
                               value="<?php echo (isset($default['toolsdetail_name'])) ? $default['toolsdetail_name'] : ''; ?>"
                               <?php echo (isset($default['readonly_toolsdetail_name'])) ? $default['readonly_toolsdetail_name'] : ''; ?>
                               >
                    </div>                        
                </div>  

                <div class="col-sm-6">
                    <p class="text-right">
                      <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                      <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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


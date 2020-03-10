
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
        <form id="formdatadetail" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="location_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_location" id="id_location" value="<?php echo $id_location; ?>" />
            <input type="hidden" name="location_code" id="location_code" value="<?php echo $location_code; ?>" />

            <div class="main-content container-fluid">

                <!-- <div class="form-group row">
                    <label for="location_code" class="col-sm-3 text-right control-label col-form-label">Kota</label><span style="color:red">*</span>
                    <div class="col-sm-9">
                        <input name="location_code" id="location_code" type="text" required="" parsley-type="text" placeholder="Masukan nama kantor cabang" class="form-control"
                               value="<?php echo (isset($default['location_code'])) ? $default['location_code'] : ''; ?>"
                               <?php echo (isset($default['readonly_location_code'])) ? $default['readonly_location_code'] : ''; ?>
                               >
                    </div>                        
                </div>   -->
                <div class="form-group row">
                    <label for="position_code" class="col-sm-3 text-right control-label col-form-label">Position Code <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input name="position_code" id="position_code" type="text"  parsley-type="text" placeholder="Masukan nomor rekening" class="form-control"
                               value="<?php echo (isset($default['position_code'])) ? $default['position_code'] : ''; ?>"
                               <?php echo (isset($default['readonly_position_code'])) ? $default['readonly_position_code'] : ''; ?>
                               >
                    </div>                        
                </div>
                 <div class="form-group row">
                    <label for="position_name" class="col-sm-3 text-right control-label col-form-label">Position Name <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input name="position_name" id="position_name" type="text"  parsley-type="text" placeholder="Masukan nomor rekening" class="form-control"
                               value="<?php echo (isset($default['position_name'])) ? $default['position_name'] : ''; ?>"
                               <?php echo (isset($default['readonly_position_name'])) ? $default['readonly_position_name'] : ''; ?>
                               >
                    </div>                        
                </div>  

                <div class="col-sm-12">
                    <p class="text-right">
                    <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fa fa-save'></li> &nbsp;Submit</button>
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fa fa-reply'></li>&nbsp; Cancel</button>
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


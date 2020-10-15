
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="schedule_notewfh" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="schedule_id" id="schedule_id" value="<?php echo $schedule_id; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="schedule_date" class="col-sm-2 control-label col-form-label">Date <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="schedule_date" id="schedule_date" type="text"  parsley-type="text" placeholder="input date wfh" class="form-control"
                               value="<?php echo (isset($default['schedule_date'])) ? $default['schedule_date'] : ''; ?>"
                               <?php echo (isset($default['readonly_schedule_date'])) ? $default['readonly_schedule_date'] : ''; ?>
                               >
                    </div>                        
                </div>
                 <div class="form-group row">
                    <label for="schedule_notewfh" class="col-sm-2 control-label col-form-label">Note WFH<span style="color:red">*</span></label>
                    <div class="col-sm-10">
                    <textarea name="schedule_notewfh" id="schedule_notewfh" class="form-control"
                        <?php echo (isset($default['readonly_article'])) ? $default['readonly_article'] : ''; ?> ><?php echo (isset($default['article'])) ? $default['article'] : ''; ?></textarea>                      
            
                    </div>                        
                </div>  

                <div class="col-sm-12">
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
        $('#schedule_date').datepicker({
                dateFormat: 'dd-mm-yy',
                changeMonth: true,
                changeYear: true,
              
        });
        $("#schedule_notewfh").summernote({
          height: 300
        });

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


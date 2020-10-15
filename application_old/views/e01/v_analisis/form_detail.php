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

        <form id="formdatadetail" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="Y" />
            <input type="hidden" name="id_formulir" id="id_formulir" value="<?php echo $id_formulir; ?>" />

            <div class="main-content container-fluid">
            <h3><p align="center"> Corrective </p></h3>
                 <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Corrective Action <span style="color:red">*</span></label>
                     <div class="col-sm-9">
                    <textarea name="correct_act" class="form-control" rows="3" required="" 
                    <?php echo (isset($default['readonly_correct_act'])) ? $default['readonly_correct_act'] : ''; ?> ><?php echo (isset($default['correct_act'])) ? $default['correct_act'] : ''; ?></textarea>
                </div>
                     </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label" autocomplete="off">Corrective Due Date <span style="color:red">*</span></label>
                     <div class="col-sm-9">
                         <input name="correct_duedate" minlength="1" maxlength="30" id="correct_duedate" type="text" required=""  parsley-type="text" placeholder="input corrective due date" class="form-control"
                        value="<?php echo (isset($default['correct_duedate'])) ? $default['correct_duedate'] : ''; ?>"
                        <?php echo (isset($default['readonly_correct_duedate'])) ? $default['readonly_correct_duedate'] : ''; ?>
                         >
                         </div>
                </div> 
           
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Corrective Status <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="correct_status" name="correct_status" class="form-control" required="" tabindex="1">
                        <?php foreach ( $default['status'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Corrective PIC <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="correct_pic" name="correct_pic[]" multiple="" class="form-control chosen-select">
                        <?php foreach ($default['namaKaryawan'] as $row) { ?>

                            <option value="<?php echo implode (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
            </div>


          <h3><p align="center"> Preventive </p></h3>
            

            <div class="form-group row">
                <label for="preventive_act" class="col-sm-3 col-form-label">Preventive Action <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <textarea name="preventive_act" class="form-control" rows="3" required="" 
                    <?php echo (isset($default['readonly_preventive_act'])) ? $default['readonly_preventive_act'] : ''; ?> ><?php echo (isset($default['preventive_act'])) ? $default['preventive_act'] : ''; ?></textarea>
                </div>                        
             </div> 

             <div class="form-group row">
                    <label for="preventive_duedate" class="col-sm-3 col-form-label">Preventive Due Date <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <input name="preventive_duedate" minlength="1" maxlength="30" id="preventive_duedate" type="text" required=""  parsley-type="text" placeholder="input preventive due date" class="form-control"
                        value="<?php echo (isset($default['preventive_duedate'])) ? $default['preventive_duedate'] : ''; ?>"
                        <?php echo (isset($default['readonly_preventive_duedate'])) ? $default['readonly_preventive_duedate'] : ''; ?>
                        >
                    </div>                        
             </div> 

              <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Preventive Status <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="preventive_status" name="preventive_status" class="form-control" required="" >
                         <?php foreach ($default['status'] as $row) { ?>

                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>

              <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Preventive PIC <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="preventive_pic" name="preventive_pic[]" multiple class="form-control chosen-select">
                        <?php foreach ($default['namaKaryawan'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

                <div class="col-sm-12">
                   <p class="text-right">
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><i class='fas fa-times'></i> Cancel</button>
                    <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><i class='fas fa-check'></i> Submit</button>
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

        $('#correct_duedate').datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'dd-mm-yy',
              });

            $('#preventive_duedate').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'dd-mm-yy',
            });

        $("#correct_pic").trigger("chosen:updated");
         $("#correct_pic").chosen();
         $("#preventive_pic").trigger("chosen:updated");
         $("#preventive_pic").chosen();

    </script>


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
            <input type="hidden" name="checkdata1" id="checkdata1" value="code_schedule" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <div class="col-sm-10" style="display: none;">
                <select id="namaKaryawan" name="namaKaryawan[]" multiple class="form-control chosen-select" tabindex="1">
                        
                   <?php 
                           $user = $this->session->userdata('ses_KodeSeksi');
                           $sql ="SELECT * FROM lessential_accessapps.useraccess WHERE 	KodeSeksi = '$user' GROUP BY namaKaryawan ";
                                        $query = $this->db->query($sql);
                                        if ($query->num_rows() > 0) {
                                          foreach ($query->result() as $row) {?>
                                            <!-- <option value="<?php echo $row->namaKaryawan;?>"><?php echo $row->namaKaryawan;?></option> -->
                                            <option <?php if($row->KodeSeksi == $this->session->userdata('ses_KodeSeksi')){ echo 'selected="selected"'; } ?> value="<?php echo $row->namaKaryawan ?>"><?php echo $row->namaKaryawan?> </option>
                                        <?php }
                                        }
                            ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="start_date" class="col-sm-2 control-label col-form-label">start_date <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="start_date" id="start_date" type="text" required="" parsley-type="text" placeholder="input start_date" class="form-control"
                           value="<?php echo (isset($default['start_date'])) ? $default['start_date'] : ''; ?>"
                           <?php echo (isset($default['readonly_start_date'])) ? $default['readonly_start_date'] : ''; ?>
                           >
                </div>                        
            </div> 
            <div class="form-group row">
                <label for="end_date" class="col-sm-2 control-label col-form-label">End Date <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="end_date" id="end_date" type="text" required="" parsley-type="text" placeholder="input end date" class="form-control"
                           value="<?php echo (isset($default['end_date'])) ? $default['end_date'] : ''; ?>"
                           <?php echo (isset($default['readonly_end_date'])) ? $default['readonly_end_date'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
    
    var dateToday = new Date();
    var dates = $("#start_date, #end_date").datepicker({
        defaultDate: "+1w",
        dateFormat: 'yy/mm/dd',
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 1,
        minDate: dateToday,
        onSelect: function(selectedDate) {
            var option = this.id == "start_date" ? "minDate" : "maxDate",
                instance = $(this).data("datepicker"),
                date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
    
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';

   
    $("#namaKaryawan").trigger("chosen:updated");
    $("#namaKaryawan").chosen({max_selected_options: 1000});
    
</script>




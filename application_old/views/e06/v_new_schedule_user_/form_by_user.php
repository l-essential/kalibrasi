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
            <div class="card-header"> 2.143 189.198
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
            <input type="text" name="<?php echo $prefix_id ?>" id="iddata" value="<?php echo $schedule_byuser; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="schedule_note_user" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="text" name="schedule_id" id="schedule_id" value="<?php echo $schedule_id; ?>" />

            <div class="main-content container-fluid">
            </div>

            <div class="form-group row">
                   <textarea name="schedule_note_user" id="schedule_note_user" class="form-control"
                        <?php echo (isset($default['readonly_schedule_note_user'])) ? $default['readonly_schedule_note_user'] : ''; ?> ><?php echo (isset($default['schedule_note_user'])) ? $default['schedule_note_user'] : ''; ?></textarea>                      
            </div>

            <div class="col-sm-12">
              <p class="text-right">
                <button type="reset" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="submit" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#iddata").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                loading_proces();
                postdata(url_post, formdata, url_index);
            }


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });


    });
    // var dateToday = new Date();
    // var dates = $("#start_date, #end_date").datepicker({
    //     defaultDate: "+1w",
    //     dateFormat: 'yy/mm/dd',
    //     changeMonth: true,
    //     changeYear: true,
    //     numberOfMonths: 1,
    //     minDate: dateToday,
    //     onSelect: function(selectedDate) {
    //         var option = this.id == "start_date" ? "minDate" : "maxDate",
    //             instance = $(this).data("datepicker"),
    //             date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
    //         dates.not(this).datepicker("option", option, date);
    //     }
    // });

    // $("#schedule_note_user").summernote({
    //   height: 300
    // });
    
    // url_post = '<?php echo $url_post; ?>';
    // url_index = '<?php echo $url_index; ?>';
    // id = $("#iddata").val();
    // actiondata = (id == 0) ? 'create' : 'update';
    
</script>




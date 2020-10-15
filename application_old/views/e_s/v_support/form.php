 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" onclick="ToController('lessential_pyp/home')">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"><?php echo $title ?></h3>
              </div>
              <!-- /.card-header -->
              
        <div id="content_support">
       <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
       <div class="card-body">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="support_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <input type="hidden" id="department_name"  name="department_name" value="<?php echo $this->session->userdata('ses_department_name'); ?>" />
            <input type="hidden" id="namaKaryawan"  name="namaKaryawan" value="<?php echo $this->session->userdata('ses_namaKaryawan'); ?>" />
            <input name="support_date" id="support_date" type="hidden" value="<?php echo (isset($default['support_date'])) ? $default['support_date'] : ''; ?>"
                    <?php echo (isset($default['readonly_support_date'])) ? $default['readonly_support_date'] : ''; ?>
                      >
            <div class="col-9 col-lg-5">                            
                <input id="support_code" type="hidden" name="support_code" class="form-control"  placeholder=" -AUTO NUMBER- " readonly=""
                        value="<?php echo (isset($default['support_code'])) ? $default['support_code'] : ''; ?>"
                        <?php echo (isset($default['readonly_support_code'])) ? $default['readonly_support_code'] : ''; ?>      
                        />  
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-2 col-form-label">Support Subject <span style="color:red">*</span></label>
                <div class="col-sm-10">
                   <select id="support_subject" name="support_subject" class="form-control" required="">
                        <?php foreach ($default['subject_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
            </div>

             <div class="form-group row">
                    <label for="support_message" class="col-sm-2 control-label col-form-label">Support Message <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="support_message" class="form-control" rows="3" <?php echo (isset($default['readonly_support_message'])) ? $default['readonly_support_message'] : ''; ?> ><?php echo (isset($default['support_message'])) ? $default['support_message'] : ''; ?></textarea>
                    </div>  
            </div>

            <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-secondary"> <i class="fas fa-times"></i> Cancel</button>
                    <button type="submit" id="btnsimpan" class="btn btn-sm btn-like"> <i class="fas fa-check"></i> Submit</button>
                  </p>  
            </div>
        </div>

    </form>
    </div>
</div>
</div>
</div>

</section>
</div>




<script type="text/javascript">

$('#support_date').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

    $(document).ready(function () {



        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';

        $("#titledata").html('<?php echo $title; ?>');

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
    function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }

   
</script>

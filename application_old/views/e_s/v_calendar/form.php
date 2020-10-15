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
            <input type="hidden" name="checkdata1" id="checkdata1" value="title" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />


            <div class="form-group row">
              <label for="type" class="col-3 col-lg-2 col-form-label text-left">Title <span style="color:red">*</span></label>
              <div class="col-9 col-lg-10">
                <input name="title" id="title" type="text" required="" parsley-type="text" placeholder="Fill title" class="form-control"
                        value="<?php echo (isset($default['title'])) ? $default['title'] : ''; ?>"
                        <?php echo (isset($default['readonly_title'])) ? $default['readonly_title'] : ''; ?>
                        >
                </div>
            </div>

            <div class="form-group row">
                    <label for="description" class="col-sm-2 control-label col-form-label">Deskripsi <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" class="form-control" rows="3" <?php echo (isset($default['readonly_description'])) ? $default['readonly_description'] : ''; ?> ><?php echo (isset($default['description'])) ? $default['description'] : ''; ?></textarea>
                    </div>  
            </div>

            <div class="form-group row">
                <label for="start_date" class="col-sm-2 control-label col-form-label">Tangal Mulai <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="start_date" id="start_date" type="text" minlength="5" maxlength="60" required="" parsley-type="text" placeholder="input tanggal" class="form-control"
                           value="<?php echo (isset($default['start_date'])) ? $default['start_date'] : ''; ?>"
                           <?php echo (isset($default['readonly_start_date'])) ? $default['readonly_start_date'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="end_date" class="col-sm-2 control-label col-form-label">Tanggal Akhir <span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input name="end_date" id="end_date" type="text" minlength="5" maxlength="60" required="" parsley-type="text" placeholder="input tanggal" class="form-control"
                           value="<?php echo (isset($default['end_date'])) ? $default['end_date'] : ''; ?>"
                           <?php echo (isset($default['readonly_end_date'])) ? $default['readonly_end_date'] : ''; ?>
                           >
                </div>                        
            </div>

            <div class="form-group row">
                <label for="color" class="col-sm-2 control-label">Color</label>
                <div class="col-sm-10">
                    <select name="color" class="form-control">
                        <option value="">Choose</option>
                        <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                        <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                        <option style="color:#008000;" value="#008000">&#9724; Green</option>                       
                        <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                        <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                        <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                        <option style="color:#000;" value="#000">&#9724; Black</option>
                    </select>
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

$('#start_date,#end_date').attr("autocomplete", "off").datepicker({ 
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

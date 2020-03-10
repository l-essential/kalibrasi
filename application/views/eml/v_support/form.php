  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Compose</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Compose</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="#" class="btn btn-like btn-block mb-3" onclick="ToController('eml/Support')">Back to Inbox</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-envelope"></i> Sent
                    </a>
                  </li>
                  <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-file-alt"></i> Drafts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fas fa-filter"></i> Junk
                      <span class="badge bg-warning float-right">65</span>
                    </a>
                  </li> -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-trash-alt"></i> Trash
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-like card-outline">
              <div class="card-header">
                <h3 class="card-title"> New Message</h3>
              </div>

              <form id="formdata" data-parsley-validate="" novalidate="">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="message" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
                <input type="hidden" name="message_name" id="message_name" value=" <?php echo $this->session->userdata('ses_namaKaryawan') ?>" />

                <div class="main-content container-fluid">
                 <div class="card-body">


                    <div class="form-group">
                       <div class="col-9 col-lg-12">
                        <select id="message_divisi" name="message_divisi" required="" class="form-control chosen-select" tabindex="1">
                                <?php foreach ($default['department_name'] as $row) { ?>

                                    <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                            <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                        <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                                <?php } ?>
                            </select>
                      </div>                        
                    </div>

                     
                    <div class="form-group">
                        <div class="col-9 col-lg-12">
                            <input name="message_subject" id="message_subject" type="text" required=""  parsley-type="text" placeholder="Subject" class="form-control"
                                   value="<?php echo (isset($default['message_subject'])) ? $default['message_subject'] : ''; ?>"
                                   <?php echo (isset($default['readonly_message_subject'])) ? $default['readonly_message_subject'] : ''; ?>
                                   >
                        </div>                        
                    </div>

                    <div class="form-group">
                        <div class="col-9 col-lg-12">
                            <textarea id="areaeditor" name="message" cols="18" rows="3" <?php echo (isset($default['readonly_message'])) ? $default['readonly_message'] : ''; ?> ><?php echo (isset($default['message'])) ? $default['message'] : ''; ?></textarea>
                        </div>                        
                    </div>    
                     <!-- <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
                    </div> -->
                </div>
                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="reset" class="btn btn-sm btn-secondary"><i class='fas fa-times'> Cancel Send</i></button>
                         <button type="submit" class="btn btn-sm btn-like"><i class='far fa-envelope'> Send Message</i></button>
                    </p>
                </div>
                </div>
                </div>
            </form>        
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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

     $("#message_divisi").trigger("chosen:updated");
     $("#message_divisi").chosen();
</script>

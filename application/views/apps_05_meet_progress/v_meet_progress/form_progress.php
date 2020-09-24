<?php 
      $templates = base_url() . 'allassets/';
      $customes = base_url() . 'public/';
      $basedata = base_url() . 'public/';
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects Detail</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" onclick="ToController('apps_05_meet_progress/Meet_progress')" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-7 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0">2300</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0">2000</span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated project</span>
                      <span class="info-box-number text-center text-muted mb-0">20 <span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
            <div class="sticky-top mb-3" style="top:58px;">
            <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="" style="background: #FFF;">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="progress_id" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="progress_id" id="progress_id" value="<?php echo $progress_id; ?>" />
            <input type="hidden" name="progressdetail_createby" id="progressdetail_createby" value="<?php echo $this->session->userdata('ses_username'); ?>" />

             <div class="form-group">
                <input type="file" name="file"> Max 10 MB
            </div>
            <div class="form-group">
                 <textarea id="areaeditor" name="progressdetail_text" cols="18" rows="3" <?php echo (isset($default['readonly_progressdetail_text'])) ? $default['readonly_progressdetail_text'] : ''; ?> ><?php echo (isset($default['progressdetail_text'])) ? $default['progressdetail_text'] : ''; ?></textarea>
            </div>

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btnsavedetail" class="btn btn-xs btn-like"><li class='far fa-paper-plane'></li> &nbsp;Send</button>
                <!-- <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-xs btn-like"><li class='far fa-paper-plane'></li> &nbsp;Send</button> -->
              </p>
            </div>
            </form>
            </div>
                  <h4>Recent Activity</h4>


                    <?php
                      if ($progressdetail) {
                            foreach ($progressdetail as $rowprogressdetail) {
                                $id = $rowprogressdetail['progressdetail_id'];
                                $image = $rowprogressdetail['lokasi_gambar'];
                                $progressdetail_createby = $rowprogressdetail['progressdetail_createby'];
                                $createtime = $rowprogressdetail['createtime'];
                                $progressdetail_text = $rowprogressdetail['progressdetail_text'];
                                
                                $htmlprogress = '';
                                $htmlprogress .= "<div class='post'>";
                                $htmlprogress .= "<div class='user-block'>";
                                $htmlprogress .= "<img class='img-circle img-bordered-sm' src='$image' alt='user image'>";
                                $htmlprogress .= "<span class='username'>";
                                $htmlprogress .= "<a href='#'>". $progressdetail_createby . "</a>";
                                $htmlprogress .= "</span>";
                                $htmlprogress .= "<span class='description'>Shared publicly - ". $createtime ."</span>";
                                $htmlprogress .= "</div>";
                                $htmlprogress .= "<p> ". $progressdetail_text." </p>";
                              
                                $htmlprogress .= "<p class='text-right'>";
                                $htmlprogress .= "<a href='#' onClick='form_reply()'class='link-black text-sm' data-toggle='modal' data-target='#modal-default' style='padding-right: 25px;'>";
                                $htmlprogress .= "<i class='far fa-paper-plane'></i> Reply";
                                $htmlprogress .= "</a>";
                                $htmlprogress .= "</p>";
                                $htmlprogress .= "</div>";
                                echo $htmlprogress;
                              }
                          }
                    ?>
                    
                </div>
              </div>
            </div>




            <div class="col-12 col-md-12 col-lg-5 order-1 order-md-2">
             
              <h5 class="text-like"><i class="fas fa-envelope-open-text"></i> <?php echo $progress_title ?> </h5>
              <div class="post" style="border-bottom: 0px solid #ffffff; margin-bottom: 0px; padding-bottom: 0px;">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo $lokasi_gambar ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $progress_createby ?>.</a>
                        </span>
                        <span class="description">Shared publicly - <?php echo $createtime ?></span>
                      </div>
                      <!-- /.user-block -->
                      <p style="margin-bottom: 0rem;">
                       <?php echo $progress_content ?>
                      </p>
                    </div>
              <br>

              <div class="text-muted">
                <p class="text-sm">Project Leader
                  <b class="d-block"><?php echo $progress_leader ?></b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <!-- <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div> -->
             
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
            <div class="modal-body">
             <div class="form-group">
                        <label>Reply </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  <script type="text/javascript">
  
    $(document).ready(function () {
      
      var form, formdata, url_index, url_post, id, actiondata;
      url_form_reply = '<?php echo $url_form_reply; ?>';
      url_post = '<?php echo $url_post; ?>';
      url_index = '<?php echo $url_index; ?>';
      id  = $("#id").val();
            $("#areaeditor").summernote({
              toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        // ['insert', ['link', 'picture']],
                        ]
            });
      
            actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdata");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondata").val(actiondata);
                    formdata = form.serialize();
                    postdata(url_post, formdata, url_index);
                }
            });

            $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });
    });

        function form_reply(label) {
        $("#idapprovedetail").val(id);
        $('#DialogDetail').modal('show');
        $("#label_detail").html(label);
    }

    </script>
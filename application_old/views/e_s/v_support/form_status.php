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
            <h1><?php echo $title ?></h1>
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
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
              <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="<?php echo $img ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?php echo $name ?></a>
                        </span>
                         <span class="description">Create : <?php echo $time ?></span>
                      </div>
                      <!-- /.user-block -->
                      <p style="margin-left: 50px;">
                      <?php echo $msg ?>
                      </p>
                    </div>
                     <div class="post clearfix"></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h5 class="text-muted"> files</h5>
              <ul class="list-unstyled">
                <!-- <li>
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
                </li> -->
              </ul>
            </div>
          </div>
        </div>

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

            <input type="hidden" id="support_name"  name="support_name" value="<?php echo $this->session->userdata('ses_namaKaryawan'); ?>" />
             <div class="form-group row" id="approve">
               <label class="col-sm-2 col-form-label" for="">Persetujuan<span style="color:red">*</span></label>
               <input name="support_status" id="support_status" type="hidden" value="0">
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input name="support_status" id="support_status" type="radio" value="1" > Setuju
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="support_status" value="2" > Tidak Setuju
                    </label>
                </div>
            </div>

                <div class="form-group row" id="userdata" style="display: none">
                    <label for="support_reason" class="col-sm-2 col-form-label">Jelaskan Alasannya? <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="support_reason" class="form-control" rows="3" <?php echo (isset($default['readonly_support_reason'])) ? $default['readonly_support_reason'] : ''; ?> ><?php echo (isset($default['support_reason'])) ? $default['support_reason'] : ''; ?></textarea>
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

    
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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

        $("input[type=radio][name='support_status']").change(function () {
            checkstatus();
        });

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

    function checkstatus() {
        var status = $("input[name='support_status']:checked").val();
        if (status == '2') {
            $("#userdata").show();
            $("#id_user").val('');
        } else {
            $("#userdata").hide();
        }
        
    }

   
</script>

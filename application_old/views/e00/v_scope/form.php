
<div class="content-box">
    <!--
    <h3 class="content-box-header bg-primary">
        <i class="glyph-icon icon-pencil"></i>
    <?php echo $title; ?>

    </h3>
    -->
    <div class="content-wrapper">
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
      </div>
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
              
    <div class="content-box-wrapper">
        <form id="formdata" data-parsley-validate="" novalidate="">
             <div class="card-body">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
             <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="kode_ruanglingkup" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
            <div class="form-group row">
              <label for="type" class="col-3 col-lg-2 col-form-label text-left">Kode Katagori <span style="color:red">*</span></label>
              <div class="col-9 col-lg-10">
                <input name="kode_ruanglingkup" id="kode_ruanglingkup" type="text" required="" parsley-type="text" placeholder="Fill kode_ruanglingkup" class="form-control"
                        value="<?php echo (isset($default['kode_ruanglingkup'])) ? $default['kode_ruanglingkup'] : ''; ?>"
                        <?php echo (isset($default['readonly_kode_ruanglingkup'])) ? $default['readonly_kode_ruanglingkup'] : ''; ?>
                        >
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-3 col-lg-2 col-form-label text-left">Nama Katagori <span style="color:red">*</span></label>
                <div class="col-9 col-lg-10">
                  <input name="nama_ruanglingkup" id="nama_ruanglingkup" type="text" required="" parsley-type="text" placeholder="Fill nama_ruanglingkup" class="form-control"
                          value="<?php echo (isset($default['nama_ruanglingkup'])) ? $default['nama_ruanglingkup'] : ''; ?>"
                          <?php echo (isset($default['readonly_nama_ruanglingkup'])) ? $default['readonly_nama_ruanglingkup'] : ''; ?>
                          >
                  </div>
            </div>
            
            <div class="col-sm-12">
               <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'> Submit</i></button>
                </p>
                <div class="text-right" id="contentloading" style="display: none">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div  class="glyph-icon remove-border demo-icon tooltip-button icon-spin-3 icon-spin" title="icon-spin-3"></div>
                </div>
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
        //$("#contentbutton").hide();
        $("#contentloading").show();
    }
</script>

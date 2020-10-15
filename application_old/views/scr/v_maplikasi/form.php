
<div class="content-box">
    <!--
    <h3 class="content-box-header bg-primary">
        <i class="glyph-icon icon-pencil"></i>
    <?php echo $title; ?>

    </h3>
    -->
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
              

        <form id="formdata" data-parsley-validate="" novalidate=""  role="form" autocomplete="off">
             <div class="card-body">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
             <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="kode_aplikasi" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="nama_aplikasi" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            
           
            <div class="form-group row">
              <label for="note" class="col-sm-2" >Sort Data</label>
              <div class="col-sm-10">
                <input name="sortdata" id="sortdata" type="text" parsley-type="text" placeholder="input sortdata" class="form-control"
                        value="<?php echo (isset($default['sortdata'])) ? $default['sortdata'] : ''; ?>"
                        <?php echo (isset($default['readonly_sortdata'])) ? $default['readonly_sortdata'] : ''; ?>
                        >
              </div>
            </div>

            <div class="form-group row">
                <label for="note" class="col-sm-2" >Kode Aplikasi <span style="color:red">*</span></label>
                <div class="col-sm-10">
                  <input name="kode_aplikasi" id="kode_aplikasi" type="text" required="" parsley-type="text" placeholder="input kode_aplikasi" class="form-control"
                          value="<?php echo (isset($default['kode_aplikasi'])) ? $default['kode_aplikasi'] : ''; ?>"
                          <?php echo (isset($default['readonly_kode_aplikasi'])) ? $default['readonly_kode_aplikasi'] : ''; ?>
                          >
                </div>
            </div>
            
            <div class="form-group row">
                <label for="note" class="col-sm-2" >Nama Aplikasi <span style="color:red">*</span></label>
                <div class="col-sm-10">
                  <input name="nama_aplikasi" id="nama_aplikasi" type="text" required="" parsley-type="text" placeholder="input nama_aplikasi" class="form-control"
                          value="<?php echo (isset($default['nama_aplikasi'])) ? $default['nama_aplikasi'] : ''; ?>"
                          <?php echo (isset($default['readonly_nama_aplikasi'])) ? $default['readonly_nama_aplikasi'] : ''; ?>
                          >
                  </div>
            </div>

            <div class="form-group row">
                <label for="note" class="col-sm-2" >Icon <span style="color:red">*</span></label>
                <div class="col-sm-10">
                  <input name="icon" id="icon" type="text" required="" parsley-type="text" placeholder="input icon" class="form-control"
                          value="<?php echo (isset($default['icon'])) ? $default['icon'] : ''; ?>"
                          <?php echo (isset($default['readonly_icon'])) ? $default['readonly_icon'] : ''; ?>
                          >
                </div>
            </div>
             
            <div class="col-sm-12">
                <p class="text-right" id="contentbutton">
                    <button type="reset" id="btnclose" class="btn btn-sm btn-secondary"> <i class="fa fa-times"></i> Cancel</button>
                     <button type="submit" id="btnsimpan" class="btn btn-sm btn-like"> <i class="fas fa-check"></i> Save Data</button>                 
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
        $("#contentbutton").hide();
        $("#contentloading").show();
    }
</script>

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
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
       <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
                <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="actiondata" id="actiondata" />
                <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
                <input type="hidden" name="checkdata1" id="checkdata1" value="nama_customer" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">

                 <div class="form-group row">
                        <label for="pic_marketing" class="col-3 col-lg-2 col-form-label text-left">PIC Marketing <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="pic_marketing" minlength="2" maxlength="50" id="pic_marketing" type="text" required=""  parsley-type="text" placeholder="input location code" class="form-control"
                                   value="<?php echo (isset($default['pic_marketing'])) ? $default['pic_marketing'] : ''; ?>"
                                   <?php echo (isset($default['readonly_pic_marketing'])) ? $default['readonly_pic_marketing'] : ''; ?>
                                   >
                        </div>                        
                    </div>  

                    <div class="form-group row">
                        <label for="nama_customer" class="col-3 col-lg-2 col-form-label text-left">Nama Customer <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="nama_customer" minlength="2" maxlength="50" id="nama_customer" type="text" required=""  parsley-type="text" placeholder="input Location name" class="form-control"
                                   value="<?php echo (isset($default['nama_customer'])) ? $default['nama_customer'] : ''; ?>"
                                   <?php echo (isset($default['readonly_nama_customer'])) ? $default['readonly_nama_customer'] : ''; ?>
                                   >
                        </div>                        
                    </div>

                    <div class="form-group row">
                        <label for="nama_sample" class="col-3 col-lg-2 col-form-label text-left">Nama Sampel Yang Diminta <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="nama_sample" minlength="2" maxlength="50" id="nama_sample" type="text" required=""  parsley-type="text" placeholder="input Location name" class="form-control"
                                   value="<?php echo (isset($default['nama_sample'])) ? $default['nama_sample'] : ''; ?>"
                                   <?php echo (isset($default['readonly_nama_sample'])) ? $default['readonly_nama_sample'] : ''; ?>
                                   >
                        </div>                        
                    </div>  

                    <div class="form-group row">
                        <label for="keterangan_formula" class="col-3 col-lg-2 col-form-label text-left">Keterangan Formula <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="keterangan_formula" minlength="2" maxlength="50" id="keterangan_formula" type="text" required=""  parsley-type="text" placeholder="input Location name" class="form-control"
                                   value="<?php echo (isset($default['keterangan_formula'])) ? $default['keterangan_formula'] : ''; ?>"
                                   <?php echo (isset($default['readonly_keterangan_formula'])) ? $default['readonly_keterangan_formula'] : ''; ?>
                                   >
                        </div>                        
                    </div>  

                    
                     <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="reset" class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                        <button type="submit" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
                      </p>
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
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'pic_marketing': $("#pic_marketing").val()});
            homedetail(getdata);
        }



        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                var resultdata = postaction(url_post, formdata);
                _alert(resultdata.msg, resultdata.valid);
                if (resultdata.valid == true && actiondata == 'create') {
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'pic_marketing': resultdata.postdata.pic_marketing});
                    homedetail(getdata);
                    
                }
            }
        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            ToContent(url_index);
        });
    });

    function homedetail(param) {
        var psample_id = param.result.psample_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + psample_id);
    }
    
</script>

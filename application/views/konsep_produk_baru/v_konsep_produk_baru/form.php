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
                <input type="hidden" name="checkdata1" id="checkdata1" value="no_konsep_produk" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">

                    <div class="form-group row">
                        <label for="no_konsep_produk" class="col-3 col-lg-2 col-form-label text-left">No Konsep <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="no_konsep_produk" id="no_konsep_produk" type="text" parsley-type="text" placeholder="input no kosep" class="form-control"
                                   value="<?php echo (isset($default['no_konsep_produk'])) ? $default['no_konsep_produk'] : ''; ?>"
                                   <?php echo (isset($default['readonly_no_konsep_produk'])) ? $default['readonly_no_konsep_produk'] : ''; ?>
                                  Readonly >
                        </div>                        
                    </div>  

                    <div class="form-group row">
                        <label for="tanggal_pembuatan" class="col-3 col-lg-2 col-form-label text-left">Tangal Pembutan <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="tanggal_pembuatan" minlength="2" maxlength="50" id="tanggal_pembuatan" type="text" required=""  parsley-type="text" placeholder="input Tangal Pembutan" class="form-control"
                                   value="<?php echo (isset($default['tanggal_pembuatan'])) ? $default['tanggal_pembuatan'] : ''; ?>"
                                   <?php echo (isset($default['readonly_tanggal_pembuatan'])) ? $default['readonly_tanggal_pembuatan'] : ''; ?>
                                   >
                        </div>                        
                    </div>
                    <div class="form-group row">
                    <label for="" class="col-sm-2 text-right control-label col-form-label"></label>
                    <div class="col-sm-3">
                        <div class="demo-checkbox">
                            <input type="checkbox" id="status_kosep" name="status_kosep" value="1"/>
                            <label for="status_kosep">Finnish</label>
                        </div>                        
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
    $('#tanggal_pembuatan').attr("autocomplete", "off").datepicker({ 
        minDate: moment().add('d', 0).toDate(),
      });
    $(document).ready(function () {
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();
        actiondata = (id == 0) ? 'create' : 'update';
        var status_kosep = '<?php echo $default['status_kosep']; ?>';
        if (status_kosep == '1') {
            $("#status_kosep").prop("checked", true);
        }
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'no_konsep_produk': $("#no_konsep_produk").val()});
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
                    var getdata = postaction('<?php echo $url_getdata; ?>', {'no_konsep_produk': resultdata.postdata.no_konsep_produk});
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
        var konsep_produk_baru_id = param.result.konsep_produk_baru_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + konsep_produk_baru_id);
    }
    
</script>

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
            <div class="card-header border">
                <button type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="ToController('asm/Bank');">
                      <i class="fas fa-chevron-circle-left"></i> Back Home</button>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
              </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="kode_bank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
                <div class=" row">

                    <div class="col-4 col-lg-4">

                    <div class="form-group">
                      <label>Lokasi <span style="color:red">*</span></label>
                        <select id="id_location" name="id_location" class="form-control" required="">
                                <?php foreach ($default['id_location'] as $row) { ?>

                                    <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                            <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                        <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                
                    <div class="col-3 col-lg-3">
                    <div class="form-group row">
                            <label>Nama Asset</label>
                            <input name="nama_bank" minlength="2" maxlength="50" id="nama_bank" type="text" required=""  parsley-type="text" placeholder="Masukan nama bank" class="form-control"
                                value="<?php echo (isset($default['nama_bank'])) ? $default['nama_bank'] : ''; ?>"
                                <?php echo (isset($default['readonly_nama_bank'])) ? $default['readonly_nama_bank'] : ''; ?>
                                >
                        </div>                         
                    </div>

                </div>
                
                <div class="form-group">
                    <div id="divdetail" style="display:none"></div><br/>
                    <!-- <div id="divbunga" style="display:none"></div>
                    <div id="divbankquota" style="display:none"></div> -->
                </div>
            </div>
            <div class="col-sm-6">
                <p class="text-right">
                    <button type="submit" class="btn btn-sm btn-like"><i class='fa fa-save'> Submit</i></button>
                    <button type="reset" class="btn btn-sm btn-secondary"><i class='fa fa-reply'> Cancel</i></button>
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
                var getdata = postaction('<?php echo $url_getdata; ?>', {'nama_bank': $("#nama_bank").val()});
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
                        var getdata = postaction('<?php echo $url_getdata; ?>', {'nama_bank': resultdata.postdata.nama_bank});
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
            var id_bank = param.result.id_bank;
            $("#divdetail").html("");
            $("#divdetail").show();
            $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + id_bank);
            $("#divbunga").html("");
            $("#divbunga").show();
            $("#divbunga").load('<?php echo $url_homebunga ?>' + '/' + id_bank);
            $("#divbankquota").html("");
            $("#divbankquota").show();
            $("#divbankquota").load('<?php echo $url_homebankquota ?>' + '/' + id_bank);
        }
    </script>

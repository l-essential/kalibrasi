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
              Assets
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

            <div class="form-group row">
                <label  for="assets_code" class="col-sm-3 col-form-label">Kode Assets <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input name="assets_code" minlength="1" maxlength="30" id="assets_code" type="text" required=""  parsley-type="text" placeholder="kode assets" class="form-control"
                        value="<?php echo (isset($default['assets_code'])) ? $default['assets_code'] : ''; ?>"
                        <?php echo (isset($default['readonly_assets_code'])) ? $default['readonly_assets_code'] : ''; ?>
                        Readonly >
                </div>
            </div>

             <div class="form-group row">
                <label  for="assets_type" class="col-sm-3 col-form-label">Type Assets <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="assets_type" name="assets_type" class="form-control" required="">
                        <?php foreach ($default['type_assets_id'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Lokasi Assets <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="assets_location" name="assets_location" class="form-control" required="">
                        <?php foreach ($default['location_id'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
            </div>

           <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Posisi assets <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="assets_position" name="assets_position" class="form-control" required="">
                        <?php foreach ($default['position_id'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

          <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Department <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="assets_responsible" name="assets_responsible" class="form-control" required="">
                        <?php foreach ($default['department_name'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Deskripsi Assets <span style="color:red">*</span></label>
                <div class="col-sm-9">
                        <textarea name="assets_descripsi" class="form-control" rows="3" <?php echo (isset($default['readonly_assets_descripsi'])) ? $default['readonly_assets_descripsi'] : ''; ?> ><?php echo (isset($default['assets_descripsi'])) ? $default['assets_descripsi'] : ''; ?></textarea>
                    </div> 
            </div>
          
                
                <div class="form-group">
                    <div id="divdetail" style="display:none"></div><br/>
                </div>
            </div>

            <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-secondary"><i class='fa fa-times'> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-like"><i class='fa fa-check'> Submit</i></button>
                </p>
            </div>
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

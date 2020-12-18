
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
        <form id="formdatadetail" data-parsley-validate="" novalidate="" autocomplete="off">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondatadetail" id="actiondatadetail" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="harga" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" name="status_bayar" id="status_bayar" value="1" />
            
        <div class="main-content container-fluid">
            <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga Kalibrasi <span style="color:red">*</span></label>
                <div class="col-sm-4">
                    <input name="harga" minlength="2" maxlength="50" id="harga" type="text" required=""  parsley-type="text" placeholder="input harga" class="form-control"
                            value="<?php echo (isset($default['harga'])) ? $default['harga'] : ''; ?>"
                            <?php echo (isset($default['readonly_harga'])) ? $default['readonly_harga'] : ''; ?>
                            >
                </div>                        
            </div>  

            <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Vendor <span style="color:red">*</span></label>
            <div class="col-sm-4">
                <select id="vendor_id" name="vendor_id" class="form-control" required="" tabindex="1">
                    <?php foreach ( $default['vendor_id'] as $row) { ?>

                        <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                            <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                    <?php } ?>
                </select>
            </div>   
            </div>
                      
            <div class="col-sm-6">
                <p class="text-right">
                <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
            var form, formdatadetail, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondata = (id == 0) ? 'create' : 'update';
            $("#btnsavedetail").click(function () {
                form = $("#formdatadetail");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondatadetail").val(actiondata);
                    formdatadetail = form.serialize();
                    postdata(url_post, formdatadetail, url_index);
                }
            });
            $("#btncanceldetail").click(function () {
                ToContent(url_index);
            });
        });

        $("#vendor_name").trigger("vendor_name:updated");
        $("#vendor_name").chosen();
        $("#vendor_id").chosen();

    </script>


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
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" class="form-horizontal" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondata" id="actiondata" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="nama_karyawan" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="checkdata3" id="checkdata3" value="" />
        <input type="hidden" name="checkdata4" id="checkdata4" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

            <div class="main-content container-fluid">
            </div>
            <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan <span style="color:red">*</span></label>
                <div class="col-sm-10">
                   <select id="nama_karyawan" name="nama_karyawan" class="form-control" required="">
                        <?php foreach ($default['namaKaryawan'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
           

            <div class="col-sm-12">
              <p class="text-right">
                <button type="button" id="btncancelform" onclick="closedata()" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
    
</script>




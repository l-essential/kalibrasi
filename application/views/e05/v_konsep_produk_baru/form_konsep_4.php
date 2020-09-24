<style>
    .parsley-required{

        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .ui-datepicker-calendar {
        display: none;
    }
</style>  
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
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
        <form id="formdatabunga" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="idrca" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondatarca" id="actiondatarca" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="formula_id_H" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" name="formula_id_h" id="formula_id_h" value="<?php echo $formula_id_h; ?>" />
        <input type="hidden" name="no_formula" id="no_formula" value="<?php echo $no_formula; ?>" />
        
            <div class="main-content container-fluid">
                <div class="form-group row">
                    <label for="prosedur_pembuatan" class="col-sm-3 col-form-label" >Prosedur Pembuatan<span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="prosedur_pembuatan" class="form-control" rows="3" placeholder="input prosedur_pembuatan"
                    <?php echo (isset($default['readonly_prosedur_pembuatan'])) ? $default['readonly_prosedur_pembuatan'] : ''; ?> ><?php echo (isset($default['prosedur_pembuatan'])) ? $default['prosedur_pembuatan'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="klaim_produk" class="col-sm-3 col-form-label" >Klaim Produk <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="klaim_produk" class="form-control" rows="3" placeholder="input klaim_produk"
                       <?php echo (isset($default['readonly_klaim_produk'])) ? $default['readonly_klaim_produk'] : ''; ?> ><?php echo (isset($default['klaim_produk'])) ? $default['klaim_produk'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="cara_pakai" class="col-sm-3 col-form-label" >Cara Pakai <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="cara_pakai" class="form-control" rows="3" placeholder="input alat / mesin"
                       <?php echo (isset($default['readonly_cara_pakai'])) ? $default['readonly_cara_pakai'] : ''; ?> ><?php echo (isset($default['cara_pakai'])) ? $default['cara_pakai'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="perhatian" class="col-sm-3 col-form-label">perhatian <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="perhatian" class="form-control" rows="3" placeholder="input perhatian / prosedur"
                       <?php echo (isset($default['readonly_perhatian'])) ? $default['readonly_perhatian'] : ''; ?> ><?php echo (isset($default['perhatian'])) ? $default['perhatian'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="catataan" class="col-sm-3 col-form-label" >catataan  <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                       <textarea name="catataan" class="form-control" rows="3" placeholder="input catataan penunjang"
                       <?php echo (isset($default['readonly_catataan'])) ? $default['readonly_catataan'] : ''; ?> ><?php echo (isset($default['catataan'])) ? $default['catataan'] : ''; ?></textarea>
                    </div>                        
                </div>
                

                <div class="col-sm-12">
                  <p class="text-right">
                    <button type="button" id="btncancelbunga" class="btn btn-sm btn-secondary"><i class='fas fa-times'></i> Cancel</button>
                    <button type="button" id="btnsavebunga"  class="btn btn-sm btn-like"><i class='fas fa-check'></i> Submit</button>
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
            var formbunga, formdatabunga, url_index, url_post, idrca, actiondatarca;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            idrca = $("#idrca").val();
            actiondatarca = (idrca == 0) ? 'create' : 'update';

            $("#btnsavebunga").click(function () {
                formbunga = $("#formdatabunga");
                formbunga.parsley().validate();
                if (formbunga.parsley().isValid()) {
                    $("#actiondatarca").val(actiondatarca);
                    formdatabunga = formbunga.serialize();
                    postdata(url_post, formdatabunga, url_index);
                }
            });
            $("#btncancelbunga").click(function () {
                ToContent(url_index);
            });
        });


    </script>




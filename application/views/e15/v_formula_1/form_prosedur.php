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
        <form id="formdataprosedur" data-parsley-validate="" novalidate="">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="formula_prosedur_2" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondataprosedur" id="actiondataprosedur" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="formula_id_H" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="text" name="formula_id_h" id="formula_id_h" value="<?php echo $formula_id_h; ?>" />
        
            <div class="main-content container-fluid">
                <div class="form-group row">
                    <label for="prosedur_pembuatan" class="col-sm-3 col-form-label" >No<span style="color:red">*</span></label>
                    <div class="col-sm-4">
                    <input name="no" maxlength="50" id="no" type="text" required=""  parsley-type="text" placeholder="input ukuran kemasan" class="form-control"
                          value="<?php echo (isset($default['no'])) ? $default['no'] : ''; ?>"
                          <?php echo (isset($default['readonly_no'])) ? $default['readonly_no'] : ''; ?>
                          >
                    </div>                        
                </div>

                <div class="form-group row">
                    <label for="prosedur_pembuatan" class="col-sm-3 col-form-label" >Prosedur Pembuatan <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                       <textarea name="prosedur_pembuatan" class="form-control" rows="3" placeholder="input prosedur_pembuatan"
                       <?php echo (isset($default['readonly_prosedur_pembuatan'])) ? $default['readonly_prosedur_pembuatan'] : ''; ?> ><?php echo (isset($default['prosedur_pembuatan'])) ? $default['prosedur_pembuatan'] : ''; ?></textarea>
                    </div>                        
                </div>

                <div class="col-sm-7">
                  <p class="text-right">
                    <button type="button" id="btncancel" class="btn btn-sm btn-secondary"><i class='fas fa-times'></i> Cancel</button>
                    <button type="button" id="btnsave"  class="btn btn-sm btn-like"><i class='fas fa-check'></i> Submit</button>
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
            var formbunga, formdataprosedur, url_index, url_post, formula_prosedur_2, actiondataprosedur;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            formula_prosedur_2 = $("#formula_prosedur_2").val();
            actiondataprosedur = (formula_prosedur_2 == 0) ? 'create' : 'update';

            $("#btnsave").click(function () {
                formbunga = $("#formdataprosedur");
                formbunga.parsley().validate();
                if (formbunga.parsley().isValid()) {
                    $("#actiondataprosedur").val(actiondataprosedur);
                    formdataprosedur = formbunga.serialize();
                    postdata(url_post, formdataprosedur, url_index);
                }
            });
            $("#btncancel").click(function () {
                ToContent(url_index);
            });
        });


    </script>




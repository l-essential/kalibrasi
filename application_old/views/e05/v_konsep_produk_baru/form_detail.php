
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="nama_dagang" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="formula_id_H" id="formula_id_H" value="<?php echo $formula_id_H; ?>" />
            <input type="hidden" name="no_formula" id="no_formula" value="<?php echo $no_formula; ?>" />

            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label for="nama_dagang" class="col-sm-2 control-label col-form-label">Nama Dagang <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="nama_dagang" id="nama_dagang" type="text"  parsley-type="text" placeholder="Masukan nama dagang" class="form-control"
                               value="<?php echo (isset($default['nama_dagang'])) ? $default['nama_dagang'] : ''; ?>"
                               <?php echo (isset($default['readonly_nama_dagang'])) ? $default['readonly_nama_dagang'] : ''; ?>
                               >
                    </div>                        
                </div>
                 <div class="form-group row">
                    <label for="inci_name" class="col-sm-2 control-label col-form-label">INCI Name <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="inci_name" id="inci_name" type="text"  parsley-type="text" placeholder="Masukan inci name" class="form-control"
                               value="<?php echo (isset($default['inci_name'])) ? $default['inci_name'] : ''; ?>"
                               <?php echo (isset($default['readonly_inci_name'])) ? $default['readonly_inci_name'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="fungsi" class="col-sm-2 control-label col-form-label">Fungsi <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="fungsi" id="fungsi" type="text"  parsley-type="text" placeholder="Masukan fungsi" class="form-control"
                               value="<?php echo (isset($default['fungsi'])) ? $default['fungsi'] : ''; ?>"
                               <?php echo (isset($default['readonly_fungsi'])) ? $default['readonly_fungsi'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="no_cas" class="col-sm-2 control-label col-form-label">No Cas <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="no_cas" id="no_cas" type="text"  parsley-type="text" placeholder="Masukan no cas" class="form-control"
                               value="<?php echo (isset($default['no_cas'])) ? $default['no_cas'] : ''; ?>"
                               <?php echo (isset($default['readonly_no_cas'])) ? $default['readonly_no_cas'] : ''; ?>
                               >
                    </div>                        
                </div> 
                <div class="form-group row">
                    <label for="konsentrasi" class="col-sm-2 control-label col-form-label">Konsentrasi <span style="color:red">*</span></label>
                    <div class="col-sm-10">
                        <input name="konsentrasi" id="konsentrasi" type="text"  parsley-type="text" placeholder="Masukan nomor rekening" class="form-control"
                               value="<?php echo (isset($default['konsentrasi'])) ? $default['konsentrasi'] : ''; ?>"
                               <?php echo (isset($default['readonly_konsentrasi'])) ? $default['readonly_konsentrasi'] : ''; ?>
                               >
                    </div>                        
                </div> 

                <div class="col-sm-12">
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

    </script>


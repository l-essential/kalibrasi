<style>
.ui-datepicker-calendar { display: none; }
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
                <input type="hidden" name="checkdata1" id="checkdata1" value="periode_awal" />
                <input type="hidden" name="checkdata2" id="checkdata2" value="" />
                <input type="hidden" name="checkdata3" id="checkdata3" value="" />
                <input type="hidden" name="checkdata4" id="checkdata4" value="" />
                <input type="hidden" name="dengangambar" id="dengangambar" value="N" />

                <div class="main-content container-fluid">

                 <div class="form-group row">
                        <label for="periode_awal" class="col-3 col-lg-2 col-form-label text-left">Periode Awal <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="periode_awal" minlength="2" maxlength="50" id="periode_awal" type="text" required=""  parsley-type="text" placeholder="input location code" class="form-control periode-awal"
                                   value="<?php echo (isset($default['periode_awal'])) ? $default['periode_awal'] : ''; ?>"
                                   <?php echo (isset($default['readonly_periode_awal'])) ? $default['readonly_periode_awal'] : ''; ?>
                                   >
                        </div>                        
                    </div>  

                    <div class="form-group row">
                        <label for="periode_akhir" class="col-3 col-lg-2 col-form-label text-left">Periode Akhir <span style="color:red">*</span></label>
                        <div class="col-9 col-lg-10">
                            <input name="periode_akhir" minlength="2" maxlength="50" id="periode_akhir" type="text" required=""  parsley-type="text" placeholder="input Location name" class="form-control periode-akhir"
                                   value="<?php echo (isset($default['periode_akhir'])) ? $default['periode_akhir'] : ''; ?>"
                                   <?php echo (isset($default['readonly_periode_akhir'])) ? $default['readonly_periode_akhir'] : ''; ?>
                                   >
                        </div>                        
                    </div>

                    <div class="form-group row">
                <div class="col-sm-10" style="display:none">
                <select id="namaKaryawan" name="namaKaryawan[]" multiple class="form-control chosen-select" tabindex="1">
                        
                   <?php 
                           $user = $this->session->userdata('ses_department_name');
                           $sql ="SELECT * FROM lessential_accessapps.useraccess WHERE 	KodeSeksi = '$user' GROUP BY namaKaryawan ";
                                        $query = $this->db->query($sql);
                                        if ($query->num_rows() > 0) {
                                          for ($i=0; $i < 1; $i++) {
                                          foreach ($query->result() as $row) {?>
                                            <option <?php if($row->KodeSeksi == $this->session->userdata('ses_KodeSeksi')){ echo 'selected="selected"'; } ?> value="<?php echo $row->namaKaryawan ?>"><?php echo $row->namaKaryawan?> </option>
                                        <?php }
                                        }
                                      }
                            ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                        <div id="divdetail" style="display:none"></div><br/>
                    </div>

                </div>
                <div class="col-sm-12">
                    <p class="text-right">
                        <button type="button" id="btncancelform" onclick="closedata()"  class="btn btn-sm btn-secondary"><i class="fas fa-times"> Cancel</i></button>
                        <button type="button" id="btnsubmitform" onclick="submitform()" class="btn btn-sm btn-like"><i class='fas fa-check'> Submit</i></button>
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
 
$(function() {
    $('.periode-awal,.periode-akhir').datepicker({
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });
	$(".periode-awal,.periode-akhir").focus(function () {
    });
});
    url_post = '<?php echo $url_post; ?>';
    url_index = '<?php echo $url_index; ?>';
    id = $("#id").val();
    actiondata = (id == 0) ? 'create' : 'update';
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'periode_awal': $("#periode_awal").val()});
            homedetail(getdata);
        }

    //     $("#formdata").on('submit', function (e) {
    //         e.preventDefault();
    //         form = $(this);
    //         form.parsley().validate();
    //         if (form.parsley().isValid()) {
    //             $("#actiondata").val(actiondata);
    //             formdata = $("#formdata").serialize();
    //             var resultdata = postaction(url_post, formdata);
    //             _alert(resultdata.msg, resultdata.valid);
    //             if (resultdata.valid == true && actiondata == 'create') {
    //                 var getdata = postaction('<?php echo $url_getdata; ?>', {'location_name': resultdata.postdata.location_name});
    //                 homedetail(getdata);
                    
    //             }
    //         }
    //     });
    //     $("#formdata").on('reset', function (e) {
    //         e.preventDefault();
    //         ToContent(url_index);
    //     });
    // });


    function homedetail(param) {
        var periode_id = param.result.periode_id;
        $("#divdetail").html("");
        $("#divdetail").show();
        $("#divdetail").load('<?php echo $url_homedetail ?>' + '/' + periode_id);
    }

    $("#namaKaryawan").trigger("chosen:updated");
    $("#namaKaryawan").chosen({max_selected_options: 1000});
    
</script>

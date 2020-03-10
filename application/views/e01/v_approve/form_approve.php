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
             
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdataapprove" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="idapprove" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondataapprove" id="actiondataapprove" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="id_bank" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="id_bank" id="id_bank" value="<?php echo $id_bank; ?>" />

            <div class="main-content container-fluid">

              <h3><p>Saya telah mengkaji form laporan penyimpangan dengan nomor :<b> <?php echo $code ?></b> Dengan ini saya ...</p></h3>

                <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="">Persetujuan<span style="color:red">*</span></label>
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input type="radio" name="status_approve" value="1"> Setujui
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="status_approve" value="2" > Tidak Setuju
                    </label>
                </div>
            </div>

                <div class="form-group row" id="useraccess" style="display: none">
                    <label for="rincian_tindakan" class="col-sm-3 col-form-label">Jelaskan alasannya? <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="reason" class="form-control" rows="3" <?php echo (isset($default['readonly_reason'])) ? $default['readonly_reason'] : ''; ?> ><?php echo (isset($default['reason'])) ? $default['reason'] : ''; ?></textarea>
                    </div>  
                </div>


                </div> 

                <div class="col-sm-12">
                    <p class="text-right">
                    <button type="button" id="btncancelbankquota" class="btn btn-sm btn-secondary"><li class='fas fa-times'></li> Cancel</button>
                     <button type="button" id="btnsaveapprove"  class="btn btn-sm btn-like"><li class='fas fa-check'></li> Submit</button>
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
        var formapprove, formdataapprove, url_index, url_post, idapprove, actiondataapprove;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        idapprove = $("#idapprove").val();
        actiondataapprove = (idapprove == 0) ? 'create' : 'update';

         $("input[type=radio][name='status_approve']").change(function () {
               checkpengawas();
            });

        $('#tanggal_pko').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-mm-yy',
        });


        $("#btnsaveapprove").click(function () {
            formapprove = $("#formdataapprove");
            formapprove.parsley().validate();
            if (formapprove.parsley().isValid()) {
                $("#actiondataapprove").val(actiondataapprove);
                formdataapprove = formapprove.serialize();
                postdata(url_post, formdataapprove, url_index);
            }
        });
        $("#btncancelbankquota").click(function () {
            ToContent(url_index);
        });
    });

     function checkpengawas() {
            var status_approve = $("input[name='status_approve']:checked").val();
            if (status_approve == '2') {
                $("#useraccess").show();
                $("#id_user").val('');
            } else {
                $("#useraccess").hide();
            }
    }

</script>




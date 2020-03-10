
<style>
 
#show8{
	color:red;
    border:1px solid red;
    padding:10px;
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
            <div class="card-header bg-like">
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
 <!-- value="Dev/O/QA/2020/02/62" -->
        <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="improvement_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" id="h_kp" name="h_kp">
            <input type="hidden" id="h_kt" name="h_kt"> 
            <input type="hidden" value="<?php echo $this->session->userdata('ses_department_name'); ?>" id="h_or"  >
            <input type="hidden" id="h_th" name="h_th">
            <input type="hidden" id="h_bln" name="h_bln">
            <input type="hidden" id="h_no" name="h_no">


            <div class="main-content container-fluid">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nomor Penyimpangan</label>
                     <div class="col-sm-3">
                       <input name="improvement_code" minlength="1" maxlength="30" id="improvement_code" type="text" required=""  parsley-type="text" placeholder="input kode penyimpangan" class="form-control"
                        value="<?php echo (isset($default['improvement_code'])) ? $default['improvement_code'] : ''; ?>"
                        <?php echo (isset($default['readonly_improvement_code'])) ? $default['readonly_improvement_code'] : ''; ?>
                         readonly="readonly">
                     </div>
               
                    <label class="col-sm-3 col-form-label" autocomplete="off" style="max-width: 19%;">Tanggal Penyimpangan</label>
                     <div class="col-sm-3">
                         <input name="tanggal" minlength="1" maxlength="30" id="tanggal" type="text" required=""  parsley-type="text" placeholder="input kode penyimpangan" class="form-control"
                        value="<?php echo (isset($default['tanggal'])) ? $default['tanggal'] : ''; ?>"
                        <?php echo (isset($default['readonly_tanggal'])) ? $default['readonly_tanggal'] : ''; ?>
                         >
                         </div>
                </div> 
           
            <div class="form-group row">
                <label  for="title_improvement" class="col-sm-3 col-form-label">Judul Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input name="title_improvement" minlength="1" maxlength="30" id="title_improvement" type="text" required=""  parsley-type="text" placeholder="input judul Penyimpangan" class="form-control"
                        value="<?php echo (isset($default['title_improvement'])) ? $default['title_improvement'] : ''; ?>"
                        <?php echo (isset($default['readonly_title_improvement'])) ? $default['readonly_title_improvement'] : ''; ?>
                        >
                </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Tipe Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_tipe" name="id_tipe" class="form-control" required="">
                        <?php foreach ($default['id_tipe'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
            </div>

           <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Katagori Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_katagori" name="id_katagori" class="form-control" required="">
                        <?php foreach ($default['id_katagori'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

          <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Ruang Lingkup <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_ruanglingkup" name="id_ruanglingkup" class="form-control" required="">
                        <?php foreach ($default['id_ruanglingkup'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>  
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Jenis Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_jenis" name="id_jenis" class="form-control" required="">
                        <?php foreach ($default['id_jenis'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div id="show8"  class="form-group row" style="display:none;">
                <label  for="etc" class="col-sm-3 col-form-label"> Lain -lain <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <textarea name="etc" class="form-control" rows="3"
                        <?php echo (isset($default['readonly_etc'])) ? $default['readonly_etc'] : ''; ?> ><?php echo (isset($default['etc'])) ? $default['etc'] : ''; ?></textarea>
                </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nomor Identitas <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input name="number" minlength="1" maxlength="30" id="number" type="text" required=""  parsley-type="text" placeholder="input nomor" class="form-control"
                        value="<?php echo (isset($default['number'])) ? $default['number'] : ''; ?>"
                        <?php echo (isset($default['readonly_number'])) ? $default['readonly_number'] : ''; ?>
                        >
                </div>
            </div>

             <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Tingkat Resiko <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_resiko" name="id_resiko" class="form-control" required="">
                        <?php foreach ($default['id_resiko'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

             <div class="form-group row">
                    <label for="rincian_penyimpangan" class="col-sm-3 col-form-label">Rincian Penyimpangan Yang Terjadi <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="rincian_penyimpangan" class="form-control" rows="3" required=""
                        <?php echo (isset($default['readonly_rincian_penyimpangan'])) ? $default['readonly_rincian_penyimpangan'] : ''; ?> ><?php echo (isset($default['rincian_penyimpangan'])) ? $default['rincian_penyimpangan'] : ''; ?></textarea>
                    </div>                        
             </div>  

             <div class="form-group row">
                <label for="rincian_tindakan" class="col-sm-3 col-form-label">Rincian Tindakan Sementara Yang Telah Diambil <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <textarea name="rincian_tindakan" class="form-control" rows="3" required="" <?php echo (isset($default['readonly_rincian_tindakan'])) ? $default['readonly_rincian_tindakan'] : ''; ?> ><?php echo (isset($default['rincian_tindakan'])) ? $default['rincian_tindakan'] : ''; ?></textarea>
                </div>                        
             </div>

             <div class="form-group row">
               <label class="col-sm-3 col-form-label" for="">Dampak Pada Hal Lain<span style="color:red">*</span></label>
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input type="radio" name="dampak" value="1"> Ada
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="dampak" value="0" > Tidak Ada
                    </label>
                </div>
            </div>

                <div class="form-group row" id="useraccess" style="display: none">
                    <label for="rincian_tindakan" class="col-sm-3 col-form-label">uraian <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="uraian" class="form-control" rows="3" <?php echo (isset($default['readonly_uraian'])) ? $default['readonly_uraian'] : ''; ?> ><?php echo (isset($default['uraian'])) ? $default['uraian'] : ''; ?></textarea>
                    </div>  
                </div>

                <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Department Terkait <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="department_name" name="department_name[]" multiple class="form-control chosen-select" tabindex="1">
                        
                          <?php foreach ($default['department_name'] as $row) { ?>
                                
                                <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                    </select>
                </div>
            </div>


             <div class="form-group row" id="approve">
               <label class="col-sm-3 col-form-label" for="">Persetujuan<span style="color:red">*</span></label>
               <input name="statusevaluasi" id="statusevaluasi" type="hidden" value="0">
                <div class="col-sm-1">
                    <label class="radio-inline">
                        <input name="statusevaluasi" id="statusevaluasi" type="radio" value="1" > Setuju
                    </label>
                </div>
                <div class="col-sm-2">
                    <label class="radio-inline">
                        <input type="radio" name="statusevaluasi" value="2" > Tidak Setuju
                    </label>
                </div>
            </div>

                <div class="form-group row" id="userdata" style="display: none">
                    <label for="reason" class="col-sm-3 col-form-label">Jelaskan Alasannya? <span style="color:red">*</span></label>
                    <div class="col-sm-9">
                        <textarea name="reason" class="form-control" rows="3" <?php echo (isset($default['readonly_reason'])) ? $default['readonly_reason'] : ''; ?> ><?php echo (isset($default['reason'])) ? $default['reason'] : ''; ?></textarea>
                    </div>  
                </div>

               
            </div>
            <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'> Submit</i></button>
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
 listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';
 accessapprove = checkaccess("approve");

    if (accessapprove == true) {
        $("#approve").show();
    } else {
        $("#approve").hide();
    }

 $('#tanggal').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

        

    $(document).ready(function () {
   
    var d = new Date();
    var m = d.getMonth() + 1; 
    var z = "/" + d.getFullYear() + "/" + m.toString().padStart(2, "0") + "/" + d.getDay().toString().padStart(2, "0") ;

    $('#h_th').val(d.getFullYear());
    $('#h_bln').val(m.toString().padStart(2, "0"));
     

     var cekdatalog= '<?php echo $url_cekdatalog; ?>';
    $('#h_th').val(d.getFullYear());
    $('#h_bln').val(m.toString().padStart(2, "0"));
   

    $('#tanggal').change(function() {
      $('#improvement_code').val($('#h_kp').val() + "/" + $('#h_kt').val() + "/" + $('#h_or').val() + "/" + $('#h_th').val() + "/" + $('#h_bln').val() + "/" + $('#h_no').val());
    });

    $('#id_katagori').change(function() {
        var getkat=$('#id_katagori').val();
        if (getkat==1){
            var idkat='DevB';
        }else{
            var idkat='DevNB';
        }
      $('#h_kp').val(idkat);
      $('#improvement_code').val($('#h_kp').val() + "/" + $('#h_kt').val() + "/" + $('#h_or').val() + "/" + $('#h_th').val() + "/" + $('#h_bln').val() + "/" + $('#h_no').val());
    });

    $('#id_ruanglingkup').change(function() {
        var getruang=$('#id_ruanglingkup').val();
        var h_th=$('#h_th').val();
        var h_bln=$('#h_bln').val();
        if (getruang==1){
            var idruang='K';
        }else if(getruang==2){
            var idruang='O';
        }else{
            var idruang='U';
        }
      $('#h_kt').val(idruang);
            $.ajax(
                {
                    type: "POST",
                    url: cekdatalog,
                    dataType: "json",
                    data: {
                        getruang: idruang, 
                        h_th: h_th, 
                        h_bln: h_bln  
                    },
                    cache: false,
                    success:
                            function (data)
                            {   
                                var urut =data.nourut;
                                console.log(urut);
                                 $('#h_no').val(urut); 
                             $('#improvement_code').val($('#h_kp').val() + "/" + $('#h_kt').val() + "/" + $('#h_or').val() + "/" + $('#h_th').val() + "/" + $('#h_bln').val() + "/" + $('#h_no').val()); 
                            }
                });
            });
            
        var form, formdata, url_index, url_post, id, actiondata;
        url_post = '<?php echo $url_post; ?>';
        url_index = '<?php echo $url_index; ?>';
        id = $("#id").val();

        $("input[type=radio][name='dampak']").change(function () {
               checkpengawas();
            });

        $("input[type=radio][name='statusevaluasi']").change(function () {
            checkstatus();
        });


       
        actiondata = (id == 0) ? 'create' : 'update';

        $("#titledata").html('<?php echo $title; ?>');
        

        $("#formdata").on('submit', function (e) {
            e.preventDefault();
            form = $(this);
            form.parsley().validate();
            if (form.parsley().isValid()) {
                $("#actiondata").val(actiondata);
                formdata = $("#formdata").serialize();
                loading_proces();
                postdata(url_post, formdata, url_index);
            }


        });
        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });


    });
    function loading_proces() {
        $("#contentbutton").hide();
        $("#contentloading").show();
    }

    function checkpengawas() {
            var dampak = $("input[name='dampak']:checked").val();
            if (dampak == '1') {
                $("#useraccess").show();
                $("#id_user").val('');
            } else {
                $("#useraccess").hide();
            }
    }

    function checkstatus() {
        var status = $("input[name='statusevaluasi']:checked").val();
        if (status == '2') {
            $("#userdata").show();
            $("#id_user").val('');
        } else {
            $("#userdata").hide();
        }
        
    }

     $(document).ready(function(){
     $('#id_jenis').on('change', function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
        });
    });


    $("#department_name").trigger("chosen:updated");
    $("#department_name").chosen();
    
    function send_mail(nopn, nik) {
        $(document).ajaxStart(function() {
        $("#wait").css("display", "block");
            });
        $(document).ajaxComplete(function() {
        $("#wait").css("display", "none");
            });
    var url = 'e01/sendmail';
        $.ajax({
        url: url,
        type: "post",
        data: {
            'code':improvement_code,
        },
        dataType: "json",
        success: function(response) {
            alert(response.msg);
        }
        });

  }
         
</script>


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
          <!-- <div class="card">    
            <div class="card-header bg-like">
                <?php echo $title; ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                   
                  </div>
            </div> -->
            <!-- /.card-header -->
            <!-- <div class="card-body"> -->
 <!-- value="Dev/O/QA/2020/02/62" -->

    <form id="formdata" data-parsley-validate="" novalidate="" autocomplete="off">
        <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="actiondata" id="actiondata" />
        <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
        <input type="hidden" name="checkdata1" id="checkdata1" value="title_improvement" />
        <input type="hidden" name="checkdata2" id="checkdata2" value="" />
        <input type="hidden" name="checkdata3" id="checkdata3" value="" />
        <input type="hidden" name="checkdata4" id="checkdata4" value="" />
        <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
        <input type="hidden" id="name_apps" name="name_apps" value="e01">
        <input type="hidden" id="h_kp" name="h_kp">
        <input type="hidden" id="h_kt" name="h_kt"> 
        <input type="hidden" value="<?php echo $this->session->userdata('ses_department_name'); ?>" id="h_or"  >
        <input type="hidden" id="h_th" name="h_th">
        <input type="hidden" id="h_bln" name="h_bln">
        <input type="hidden" id="h_no" name="h_no">

        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">From Penyimpangan</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input name="improvement_code" id="improvement_code" type="text" class="form-control form-control-sm"  parsley-type="text" placeholder="no penyimpangan"
                        value="<?php echo (isset($default['improvement_code'])) ? $default['improvement_code'] : ''; ?>"
                        <?php echo (isset($default['readonly_improvement_code'])) ? $default['readonly_improvement_code'] : ''; ?>
                         readonly="readonly">
                  </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input name="tanggal" id="tanggal" type="text" required=""  parsley-type="text" placeholder="tanggal penyimpangan" class="form-control form-control-sm"
                        value="<?php echo (isset($default['tanggal'])) ? $default['tanggal'] : ''; ?>"
                        <?php echo (isset($default['readonly_tanggal'])) ? $default['readonly_tanggal'] : ''; ?>
                         >
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input name="title_improvement" id="title_improvement" type="text" required=""  parsley-type="text" placeholder="nama penyimpangan" class="form-control form-control-sm"
                        value="<?php echo (isset($default['title_improvement'])) ? $default['title_improvement'] : ''; ?>"
                        <?php echo (isset($default['readonly_title_improvement'])) ? $default['readonly_title_improvement'] : ''; ?>
                        >
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="id_tipe" name="id_tipe" class="form-control form-control-sm" required="" title="Choose one of the following...">
                        <?php foreach ($default['id_tipe'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="id_katagori" name="id_katagori" class="form-control form-control-sm" required="">
                        <?php foreach ($default['id_katagori'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="id_ruanglingkup" name="id_ruanglingkup" class="form-control form-control-sm" required="">
                        <?php foreach ($default['id_ruanglingkup'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="id_jenis" name="id_jenis" class="form-control form-control-sm" required="">
                        <?php foreach ($default['id_jenis'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <input name="number" id="number" type="text" required=""  parsley-type="text" placeholder="nomor kode" class="form-control form-control-sm"
                        value="<?php echo (isset($default['number'])) ? $default['number'] : ''; ?>"
                        <?php echo (isset($default['readonly_number'])) ? $default['readonly_number'] : ''; ?>
                        >
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                <textarea name="rincian_penyimpangan" class="form-control form-control-sm" rows="2" required="" placeholder="RINCIAN PENYIMPANGAN YANG TERJADI ..." <?php echo (isset($default['readonly_rincian_penyimpangan'])) ? $default['readonly_rincian_penyimpangan'] : ''; ?> ><?php echo (isset($default['rincian_penyimpangan'])) ? $default['rincian_penyimpangan'] : ''; ?></textarea>
                  </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                <textarea name="rincian_tindakan" class="form-control form-control-sm" rows="2" required="" placeholder="RINCIAN TINDAKAN SEMENTARA YANG TELAH DIAMBIL ..." <?php echo (isset($default['readonly_rincian_tindakan'])) ? $default['readonly_rincian_tindakan'] : ''; ?> ><?php echo (isset($default['rincian_tindakan'])) ? $default['rincian_tindakan'] : ''; ?></textarea>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="id_resiko" name="id_resiko" class="form-control form-control-sm" required="">
                        <?php foreach ($default['id_resiko'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label" for="">Dampak Pada Hal Lain<span style="color:red">*</span></label>
                    <div class="col-sm-2">
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
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <select id="singkatan" name="singkatan[]" multiple class="form-control form-control-sm chosen-select" tabindex="1" required="">
                            
                            <?php foreach ($default['singkatan'] as $row) { ?>
                                
                                <option  value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                    </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                    <textarea name="uraian" class="form-control form-control-sm" rows="2" placeholder="dampak pada hal lain ..."<?php echo (isset($default['readonly_uraian'])) ? $default['readonly_uraian'] : ''; ?> ><?php echo (isset($default['uraian'])) ? $default['uraian'] : ''; ?></textarea>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="callout callout-success" style="font-size: 19px;background-color: #dedede;padding: 0rem;">
                <p class="text-center"> ROOT CAUSE ANALYSIS</P>
            </div>

            <div class="row">
              <div class="col-12 col-sm-12">
                <div class="form-group">
                    <textarea name="personel" class="form-control form-control-sm" rows="2" required="" placeholder="PERSONEL ..."<?php echo (isset($default['readonly_personel'])) ? $default['readonly_personel'] : ''; ?> ><?php echo (isset($default['personel'])) ? $default['personel'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea name="material" class="form-control form-control-sm" rows="2" required="" placeholder="MATERIAL ..."<?php echo (isset($default['readonly_material'])) ? $default['readonly_material'] : ''; ?> ><?php echo (isset($default['material'])) ? $default['material'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea name="alat_mesin" class="form-control form-control-sm" rows="2" required="" placeholder="ALAT/MESIN ..."<?php echo (isset($default['readonly_alat_mesin'])) ? $default['readonly_alat_mesin'] : ''; ?> ><?php echo (isset($default['alat_mesin'])) ? $default['alat_mesin'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea name="metode" class="form-control form-control-sm" rows="2" required="" placeholder="METODE/PROSEDUR ..."<?php echo (isset($default['readonly_metode'])) ? $default['readonly_metode'] : ''; ?> ><?php echo (isset($default['metode'])) ? $default['metode'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                    <textarea name="sarana" class="form-control form-control-sm" rows="2" required="" placeholder="SARANA PENUNJANG KRITIS/LINGKUNGAN ..."<?php echo (isset($default['readonly_sarana'])) ? $default['readonly_sarana'] : ''; ?> ><?php echo (isset($default['sarana'])) ? $default['sarana'] : ''; ?></textarea>
                </div>
                <div class="form-group">
                <textarea name="kesimpulan_akar" class="form-control form-control-sm" rows="2" required="" placeholder="kesimpulan dari akar permasalahan ..."<?php echo (isset($default['readonly_kesimpulan_akar'])) ? $default['readonly_kesimpulan_akar'] : ''; ?> ><?php echo (isset($default['kesimpulan_akar'])) ? $default['kesimpulan_akar'] : ''; ?></textarea>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- <div class="callout callout-success" style="font-size: 19px;background-color: #dedede;padding: 0rem;">
                <p class="text-center"> CORRENTIVE & PREVENTIVE ACTION</P>
            </div>
            <div class="form-group">
                        <div id="divcorrective" style="display:none"></div><br/>
                    </div>
        <div class="row">
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CORRENTIVE ACTION</h3>
                <div class="card-tools">
                    <a href="#" type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick='add_corrective()'">
                      <i class="fas fa-file-signature"></i> Add Data</a>
                </div>
              </div>
              <div class="card-body p-0">
                <table id="tablecorrective" class="table table-sm">
                  <thead>
                    <tr>
                      <th>Corrective action</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>PPIC</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PREVENTIVE ACTION</h3>
                <div class="card-tools">
                <a href="#" type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onClick='preventive()'>
                      <i class="fas fa-file-signature"></i> Add Data</a>
                </div>
              </div>
              <div class="card-body p-0">
                <table id="tablepreventive" class="table table-sm">
                  <thead>
                    <tr>
                      <th>Preventive action</th>
                      <th>Due Date</th>
                      <th>Status</th>
                      <th>PPIC</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
        </div> -->

          <div class="col-sm-12">
                <p class="text-right">
                    <button type="reset" class="btn btn-sm btn-space btn-secondary"><i class='fas fa-times'> Cancel</i></button>
                    <button type="submit" class="btn btn-sm btn-space btn-like"><i class='fas fa-check'> Submit</i></button>
                </p>
            </div>
        </div>
        <!-- /.card-body -->
        </form>
          
          <div class="card-footer">
            Form v.0.3
          </div>
        </div>


    </div>
<!-- </div> -->
</div>
</div>
</div>
</section>

    <!-- /.corrective -->
    <div class="modal fade" id="DialogConfirm-corrective">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">CORRECTIVE</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form data-parsley-validate="" novalidate="" autocomplete="off">
            <input type ="hidden" name="id" id="id" />
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
              <textarea name="correct_act" id="correct_act" class="form-control form-control-sm" rows="2" placeholder="CORRECTIVE ACTION ..."></textarea>
              </div>                        
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
                  <input type ="text" name="due_date_corrective" id="due_date_corrective" class="form-control form-control-sm" placeholder="DUE DATE ..."/>
              </div>                        
            </div>
            <div class="form-group row" style="padding-left: 25px;">
                <input type="radio" id="status" name="status" value="CLOSED">&ensp;
                <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                <input type="radio" id="status" name="status" value="OPEN">&ensp;
                <label for="OPEN">OPEN</label>&ensp;
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
                  <select id="corrective" name="corrective[]" multiple class="form-control form-control-sm chosen-select" tabindex="1" required="">
                          <?php foreach ($default['singkatan'] as $row) { ?>
                              
                              <option  value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                      <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                  <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                          <?php } ?>
                  </select>                 
            </div>
          </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" onclick="update_preventive()" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

     <!-- /.corrective -->
     <div class="modal fade" id="DialogConfirm-preventive">
      <div class="modal-dialog">
        <div class="modal-content bg-info">
          <div class="modal-header">
            <h4 class="modal-title">preventive</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form data-parsley-validate="" novalidate="" autocomplete="off">
            <input type ="hidden" name="id" id="id"/>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
              <textarea name="prevent_act" id="prevent_act" class="form-control form-control-sm" rows="2" placeholder="CORRECTIVE ACTION ..."></textarea>
              </div>                        
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
              <div class="col-sm-12" style="padding-left: 0px;">
                  <input type ="text" name="due_date_preventive" id="due_date_preventive" class="form-control form-control-sm" placeholder="DUE DATE ..."/>
              </div>                        
            </div>
            <div class="form-group row" style="padding-left: 25px;">
                <input type="radio" id="status" name="status" value="CLOSED">&ensp;
                <label for="CLOSED">CLOSED</label>&emsp;&emsp; 
                <input type="radio" id="status" name="status" value="OPEN">&ensp;
                <label for="OPEN">OPEN</label>&ensp;
            </div>
            <div class="form-group" style="padding-left: 9px;" autocomplete="off">
                  <select id="preventive" name="preventive[]" multiple class="form-control form-control-sm chosen-select" tabindex="1" required="">
                          <?php foreach ($default['singkatan'] as $row) { ?>
                              
                              <option  value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                      <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                  <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                          <?php } ?>
                  </select>                 
            </div>
          </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            <button type="button" onclick="update_preventive()" class="btn btn-outline-light">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>

<script type="text/javascript">

$(function(){
    $("#due_date_corrective,#due_date_preventive").datepicker({
    format:'yyyy/dd/mm'
    });
});
 listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';
 session = '<?php echo $this->session->userdata('ses_KodeSeksi') == 'QA'; ?>';
 accessapprove = checkaccess("approve");
    
    if (session == true) {
        $("#session,#username").show();
    } else {
        $("#session,#username").hide();
    }

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
                                 $('#h_no').val(urut.toString().padStart(2, "0")); 
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
        if (actiondata == 'update') {
            var getdata = postaction('<?php echo $url_getdata; ?>', {'title_improvement': $("#title_improvement").val()});
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
                        var getdata = postaction('<?php echo $url_getdata; ?>', {'improvement_code': resultdata.postdata.improvement_code});
                        homedetail(getdata);
                    }
                }


        });
        

        $("#formdata").on('reset', function (e) {
            e.preventDefault();
            loading_proces();
            ToContent(url_index);
            //$("#getCodeModal").modal('hide');
        });


    });

    function homedetail(param) {
      var id_formulir = param.result.id_formulir;
      $("#divcorrective").html("");
      $("#divcorrective").show();
      $("#divcorrective").load('<?php echo $url_homecorrective ?>' + '/' + id_formulir);
      $("#divpreventive").html("");
      $("#divpreventive").show();
      $("#divpreventive").load('<?php echo $url_homepreventive ?>' + '/' + id_formulir);
    }
    url_addcorrective = '<?php echo $url_addcorrective ?>';
    function add_corrective () {
        ToContent(url_addcorrective);
  }

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

    // $("#L").on("change paste keyup", function() {
    // $("#RPN").val($("#n_l").val() * $("#S").val() * $("#D").val());
    // });

    // $("#S").on("change paste keyup", function() {
    // $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
    // });

    // $("#D").on("change paste keyup", function() {
    // $("#RPN").val($("#L").val() * $("#S").val() * $("#D").val());
    // });


    $("#singkatan").trigger("chosen:updated");
    $("#singkatan").chosen({max_selected_options: 25});

    $("#corrective,#preventive").chosen({ width: "100%", disable_search: true });
    $(".addNewLicense").dialog();
   
    
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

  url_insert_corrective = '<?php echo $url_insert_corrective; ?>';
  url_insert_preventive = '<?php echo $url_insert_preventive; ?>';

  function corrective(id) {
    $('#DialogConfirm-corrective').modal('show');
    $("#DialogConfirm-corrective  input[name=id]").val(id);
  }

  function preventive(id) {
    $('#DialogConfirm-preventive').modal('show');
    $("#DialogConfirm-preventive  input[name=id]").val(id);
  }

  function insert_corrective() {
      $.ajax({
          url: url_insert_corrective,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              crtive: $("#DialogConfirm-corrective textarea[name=correct_act]").val(),
              duedate: $("#DialogConfirm-corrective input[name=due_date_corrective]").val(),
              status: $("#DialogConfirm-corrective input[name=status]:checked").val(),
              ppic: $("#DialogConfirm-corrective input[name=corrective]").val(),
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }

  function insert_preventive() {
      $.ajax({
          url: url_insert_preventive,
          type: "post",
          dataType: "json",
          cache: false,
          data: {
              prvtive: $("#DialogConfirm-preventive textarea[name=prevent_act]").val(),
              duedate: $("#DialogConfirm-preventive input[name=due_date_preventive]").val(),
              status:  $("#DialogConfirm-preventive input[name=status]:checked").val(),
              ppic:    $("#DialogConfirm-preventive input[name=preventive]").val(),
          },
          success: function (data) {
              $('#DialogConfirm').modal('hide');
              window.location.reload(true);
              _alert(data.msg, data.valid);

          }
      });
      return false;
  }
         
</script>

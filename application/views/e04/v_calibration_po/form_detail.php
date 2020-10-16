
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
            <input type="hidden" name="checkdata1" id="checkdata1" value="calibration_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="c_pohedaer_id" id="c_pohedaer_id" value="<?php echo $c_pohedaer_id; ?>" />
            

            <div class="main-content container-fluid">
            <?php if ($this->session->userdata('ses_department_name') != 'Procurement' ) { ?>

                <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">ID / Alat <span style="color:red">*</span></label>
                <div class="col-sm-4">
                   <select id="calibration_code" name="calibration_code" class="form-control" required="" tabindex="1">
                        <?php foreach ( $default['calibration_code'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>   
                </div>  

                <!-- <div class="form-group row">
                  <label for="kategori" class="col-sm-2 col-form-label">Nama Komponen</label>
                    <div class="col-sm-4">
                      <input type="checkbox" name="nama_component" value="Temperatur">Temperatur <br>
                      <input type="checkbox" name="nama_component" value="Suhu">Suhu <br>
                      <input type="checkbox" name="nama_component" value="Temperatur">Kecepatan <br>
                      <input type="checkbox" name="nama_component" value="Suhu">Kelembaban <br>
                    </div>
                </div> -->

                

                <!-- <div class="form-group row">
                    <label for="kategori" class="col-sm-2 col-form-label">Nama Komponen</label>
                    <div class="col-sm-6">
                      <?php $komp = $this->db_pu->from('e04_ms_component')->get()->result();
                      foreach ($komp as $key => $value):
                      ?>
                      <div class="col-sm-4">
                      <input type="checkbox" name="nama_component" value="<?php echo (isset($default['nama_component'])) ? $default['nama_component'] : ''; ?>" <?php echo (isset($default['readonly_nama_component'])) ? $default['readonly_nama_component'] : ''; ?>>
                      <?= $value->nama_component;?>
                      </div>
                      <?php endforeach;?>
                    </div>  
                </div> -->

                <div class="form-group row">
                    <label for="tools_no_sertifikat" class="col-sm-2 col-form-label">No Sertifikat</label>
                    <div class="col-sm-4">
                        <input name="tools_no_sertifikat" minlength="1" maxlength="30" id="tools_no_sertifikat" type="text" parsley-type="text" placeholder="input no sertifikat" class="form-control"
                            value="<?php echo (isset($default['tools_no_sertifikat'])) ? $default['tools_no_sertifikat'] : ''; ?>"
                            <?php echo (isset($default['readonly_tools_no_sertifikat'])) ? $default['readonly_tools_no_sertifikat'] : ''; ?>
                            >
                    </div>  
                </div> 

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" autocomplete="off">Tanggal Periode Awal</label>
                    <div class="col-sm-4">
                        <input name="periode_date_awal" id="periode_date_awal" type="text" parsley-type="text" placeholder="input tanggal awal" class="form-control"
                      value="<?php echo (isset($default['periode_date_awal'])) ? $default['periode_date_awal'] : ''; ?>"
                      <?php echo (isset($default['readonly_periode_date_awal'])) ? $default['readonly_periode_date_awal'] : ''; ?>
                        >
                      </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" autocomplete="off">Tanggal Periode Akhir</label>
                    <div class="col-sm-4">
                        <input name="periode_date_akhir" id="periode_date_akhir" type="text" parsley-type="text" placeholder="input tanggal akhir" class="form-control"
                      value="<?php echo (isset($default['periode_date_akhir'])) ? $default['periode_date_akhir'] : ''; ?>"
                      <?php echo (isset($default['readonly_periode_date_akhir'])) ? $default['readonly_periode_date_akhir'] : ''; ?>
                        >
                      </div>
                </div>

                
                <div class="form-group row">
                <label for="calibration_qty" class="col-sm-2 col-form-label">Qty Unit <span style="color:red">*</span></label>
                <div class="col-sm-4">
                  <input name="calibration_qty" id="calibration_qty" type="text" required=""  parsley-type="text" placeholder="input jumlah unit" class="form-control"
                              value="<?php echo (isset($default['calibration_qty'])) ? $default['calibration_qty'] : ''; ?>"
                              <?php echo (isset($default['readonly_calibration_qty'])) ? $default['readonly_calibration_qty'] : ''; ?>
                              >
                </div>
                </div>

                
                    <input name="status_po" id="status_po" type="hidden"  parsley-type="text" placeholder="Auto Status Kalibrasi" class="form-control" value="Draft">
                    

                <div class="form-group row">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan <span style="color:red">*</span></label>
                    <div class="col-sm-4">
                        <textarea name="keterangan" placeholder="input keterangan komponen kalibrasi" class="form-control" rows="2" <?php echo (isset($default['readonly_keterangan'])) ? $default['readonly_keterangan'] : ''; ?> ><?php echo (isset($default['keterangan'])) ? $default['keterangan'] : ''; ?></textarea>
                    </div>  
                </div>

                <?php  } else if ($this->session->userdata('ses_department_name') == 'Procurement' ) { ?>

                <?php } ?>
                         
                <div class="col-sm-6">
                    <p class="text-right">
                    <button type="button" id="btncanceldetail"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsavedetail" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
                    <div id="nama_component"></div>
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

$('#periode_date_awal').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

        $('#periode_date_akhir').attr("autocomplete", "off").datepicker({ 
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true
        });

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
                    var getdata = postaction('<?php echo $url_getdata; ?>', {
                                'periode_date_awal': $("#periode_date_awal").val(),
                                'periode_date_akhir': $("#periode_date_akhir").val(),
                            });
                    homedetail(getdata);    
                }

            }
        });

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

        var btn = document.getElementById("submit");

          btn.onclick = function() {
              var checkbox = document.getElementsByTagName("input");
              var nama_component = "";
              for(var i = 0; i < checkbox.length; i++){
                  if(checkbox[i].checked){
                      nama_component = nama_component + checkbox[i].value +", ";
                  }
              }
              document.getElementById("nama_component").innerText = nama_component.replace(/,\s*$/, "");
          }

        $("#calibration_code").trigger("calibration_code:updated");
        $("#calibration_code").chosen();
        $("#vendor_id").trigger("chosen:updated");
        $("#vendor_id").chosen();

    </script>


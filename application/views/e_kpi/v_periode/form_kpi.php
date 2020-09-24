<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">KPI</h1>
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
            <input type="hidden" name="actiondatakpi" id="actiondatakpi" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="location_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />
            <input type="hidden" name="detail_id" id="detail_id" value="<?php echo $detail_id; ?>" />
            <input type="hidden" name="target_objective" id="target_objective" value="100" />
            <input type="hidden" name="target_kpi" id="target_kpi" value="5" />

            <div class="row">
            <div class="col-sm-6">
                    <div class="form-group">
                    <label>KPI OBJECTIVE</label>
                    <input name="kpi_objective" id="kpi_objective" type="text" required=""  parsley-type="text" class="form-control form-control-sm"
                            value="<?php echo (isset($default['kpi_objective'])) ? $default['kpi_objective'] : ''; ?>"
                            <?php echo (isset($default['readonly_kpi_objective'])) ? $default['readonly_kpi_objective'] : ''; ?>
                            >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>Supporting Information</label>
                    <input name="supporting_information" id="supporting_information" type="text" required=""  parsley-type="text" class="form-control form-control-sm"
                            value="<?php echo (isset($default['supporting_information'])) ? $default['supporting_information'] : ''; ?>"
                            <?php echo (isset($default['readonly_supporting_information'])) ? $default['readonly_supporting_information'] : ''; ?>
                            >
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                    <label>Bobot</label>
                    <div class="input-group input-group-sm">
                    <input name="bobot" id="bobot" type="number" required=""  parsley-type="number" placeholder="input bobot" class="form-control form-control-sm"
                                value="<?php echo (isset($default['bobot'])) ? $default['bobot'] : ''; ?>"
                                <?php echo (isset($default['readonly_bobot'])) ? $default['readonly_bobot'] : ''; ?>
                                >
                  <div class="input-group-append">
                    <span class="input-group-text">%</span>
                  </div>
                </div>
                    
                    </div>
                </div>
                </div>
                <!-- <div class="col-sm-6">
                    <div class="form-group">
                    <label>Nama Karyawan</label>
                    <select id="singkatan" name="singkatan[]" multiple class="form-control form-control-sm chosen-select" tabindex="1" required="">
                            
                            <?php foreach ($default['namaKaryawan'] as $row) { ?>
                                <option  value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                        <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                    <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                            <?php } ?>
                    </select>
                    </div>
                </div> -->
                <div class="row">
                <div class="col-sm-1">
                    <div class="form-group">
                    <label class="text-center">Jan</label>
                    <input name="jan" id="jan" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['jan'])) ? $default['jan'] : ''; ?>"
                    <?php echo (isset($default['readonly_jan'])) ? $default['readonly_jan'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Feb</label>
                    <input name="feb" id="feb" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['feb'])) ? $default['feb'] : ''; ?>"
                    <?php echo (isset($default['readonly_feb'])) ? $default['readonly_feb'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Mart</label>
                    <input name="mar" id="mar" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['mar'])) ? $default['mar'] : ''; ?>"
                    <?php echo (isset($default['readonly_mar'])) ? $default['readonly_mar'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Apr</label>
                    <input name="apr" id="apr" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['apr'])) ? $default['apr'] : ''; ?>"
                    <?php echo (isset($default['readonly_apr'])) ? $default['readonly_apr'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Mei</label>
                    <input name="mei" id="mei" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['mei'])) ? $default['mei'] : ''; ?>"
                    <?php echo (isset($default['readonly_mei'])) ? $default['readonly_mei'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Jun</label>
                    <input name="jun" id="jun" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['jun'])) ? $default['jun'] : ''; ?>"
                    <?php echo (isset($default['readonly_jun'])) ? $default['readonly_jun'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Jul</label>
                    <input name="jul" id="jul" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['jul'])) ? $default['jul'] : ''; ?>"
                    <?php echo (isset($default['readonly_jul'])) ? $default['readonly_jul'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Ags</label>
                    <input name="ags" id="ags" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['ags'])) ? $default['ags'] : ''; ?>"
                    <?php echo (isset($default['readonly_ags'])) ? $default['readonly_ags'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Sep</label>
                    <input name="sep" id="sep" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['sep'])) ? $default['sep'] : ''; ?>"
                    <?php echo (isset($default['readonly_sep'])) ? $default['readonly_sep'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Okt</label>
                    <input name="okt" id="okt" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['okt'])) ? $default['okt'] : ''; ?>"
                    <?php echo (isset($default['readonly_okt'])) ? $default['readonly_okt'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Nov</label>
                    <input name="nov" id="nov" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['nov'])) ? $default['nov'] : ''; ?>"
                    <?php echo (isset($default['readonly_nov'])) ? $default['readonly_nov'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                    <label>Des</label>
                    <input name="des" id="des" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['des'])) ? $default['des'] : ''; ?>"
                    <?php echo (isset($default['readonly_des'])) ? $default['readonly_des'] : ''; ?>
                    onkeyup="sum();">
                    </div>
                </div>
                

                <div class="col-sm-2">
                    <div class="form-group">
                   <p class="text-center">Pembagi </p>
                    <input name="pembagi" id="pembagi" type="number" required=""  parsley-type="number" class="form-control form-control-sm"
                    value="<?php echo (isset($default['pembagi'])) ? $default['pembagi'] : ''; ?>"
                    <?php echo (isset($default['readonly_pembagi'])) ? $default['readonly_pembagi'] : ''; ?> style="padding-left: 50%;">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <p class="text-center">Actual </p>
                        <input name="act" id="act" type="text" parsley-type="text" class="form-control form-control-sm" 
                        value="<?php echo (isset($default['actual'])) ? $default['actual'] : ''; ?>"
                        <?php echo (isset($default['readonly_actual'])) ? $default['readonly_actual'] : ''; ?> Readonly style="padding-left: 50%;">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <p class="text-center">KPI Value </p>
                        <input name="kpivalue" id="kpivalue" type="text" parsley-type="text" class="form-control form-control-sm" 
                        value="<?php echo (isset($default['kpi_value'])) ? $default['kpi_value'] : ''; ?>"
                        <?php echo (isset($default['readonly_kpi_value'])) ? $default['readonly_kpi_value'] : ''; ?>
                        Readonly style="padding-left: 50%;">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <p class="text-center">Target vs Actual </p>
                        <input name="tgtvsact" id="tgtvsact" type="text" parsley-type="text" class="form-control form-control-sm" 
                        value="<?php echo (isset($default['target_vs_actual'])) ? $default['target_vs_actual'] : ''; ?>"
                        <?php echo (isset($default['readonly_target_vs_actual'])) ? $default['readonly_target_vs_actual'] : ''; ?>Readonly style="padding-left: 50%;">
                    </div>
                </div>

                

                    </div>                   
                    </div>

                <div class="col-sm-12">
                    <p class="text-right">
                    <button type="button" id="btncancel"  class="btn btn-sm btn-secondary"><li class='fas fa-times'></li>&nbsp; Cancel</button>
                    <button type="button" id="btnsave" class="btn btn-sm btn-like"><li class='fas fa-check'></li> &nbsp;Submit</button>
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
            var form, formdata, url_index, url_post, id, actiondatakpi;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
            actiondatakpi = (id == 0) ? 'create' : 'update';


            $("#btnsave").click(function () {
                form = $("#formdata");
                form.parsley().validate();
                if (form.parsley().isValid()) {
                    $("#actiondatakpi").val(actiondatakpi);
                    formdata = form.serialize();
                    postdata(url_post, formdata, url_index);
                }
            });
            $("#btncancel").click(function () {
                ToContent(url_index);
            });
        });

        $("#jan, #feb, #mar, #apr, #mei, #jun, #jul, #ags, #sep, #okt, #nov, #des, #pembagi, #bobot, #persen").keyup(function() {
        var jan  = $("#jan").val();
        var feb = $("#feb").val();
        var mar = $("#mar").val();
        var apr = $("#apr").val();
        var mei = $("#mei").val();
        var jun = $("#jun").val();
        var jul = $("#jul").val();
        var ags = $("#ags").val();
        var sep = $("#sep").val();
        var okt = $("#okt").val();
        var nov = $("#nov").val();
        var des = $("#des").val();
        var bobot = $("#bobot").val();
        var pembagi = $("#pembagi").val();
        var persen = $("#persen").val();
        var total = (parseInt(jan) + parseInt(feb) + parseInt(mar) + parseInt(apr) + parseInt(mei) + parseInt(jun) + parseInt(jul) + parseInt(ags) + parseInt(sep) + parseInt(okt) + parseInt(nov) + parseInt(des)) / parseInt(pembagi);
        var hasil = (total * parseInt(bobot))/ 100;
        var vs = (total / 5)* 100;
        $("#act").val(total);
        $("#kpivalue").val(hasil);
        $("#tgtvsact").val(vs);
    });

    $("#singkatan").trigger("chosen:updated");
  $("#singkatan").chosen({max_selected_options: 25});
    </script>




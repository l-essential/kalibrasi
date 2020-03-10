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
              <li class="breadcrumb-item"><a href="#" onclick="ToController('pu/Analisis/')">Data Table</a></li>
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
                 <button type="button" class="btn bg-gradient-secondary btn-xs" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="ToController('e01/Approve');">
                      <i class="fas fa-chevron-circle-left"></i> Back to Data Table</button>
              <div class="card-tools">
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

        <form id="formdata" data-parsley-validate="" novalidate="">
            <input type="hidden" name="<?php echo $prefix_id ?>" id="id" value="<?php echo $id; ?>" />
            <input type="hidden" name="actiondata" id="actiondata" />
            <input type="hidden" name="dynamicpost" id="dynamicpost" value="Y" />
            <input type="hidden" name="checkdata1" id="checkdata1" value="improvement_code" />
            <input type="hidden" name="checkdata2" id="checkdata2" value="" />
            <input type="hidden" name="checkdata3" id="checkdata3" value="" />
            <input type="hidden" name="checkdata4" id="checkdata4" value="" />
            <input type="hidden" name="dengangambar" id="dengangambar" value="N" />


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
                         readonly="readonly">
                         </div>
                </div> 
           
            <div class="form-group row">
                <label  for="title_improvement" class="col-sm-3 col-form-label">Judul Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <input name="title_improvement" minlength="1" maxlength="30" id="title_improvement" type="text" required=""  parsley-type="text" placeholder="input judul Penyimpangan" class="form-control"
                        value="<?php echo (isset($default['title_improvement'])) ? $default['title_improvement'] : ''; ?>"
                        <?php echo (isset($default['readonly_title_improvement'])) ? $default['readonly_title_improvement'] : ''; ?>
                        readonly="readonly">
                </div>
            </div>

            <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Tipe Penyimpangan <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_tipe" name="id_tipe" class="form-control" required="" readonly="readonly">
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
                   <select id="id_katagori" name="id_katagori" class="form-control" required="" readonly="readonly">
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
                   <select id="id_ruanglingkup" name="id_ruanglingkup" class="form-control" required="" readonly="readonly">
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
                   <select id="id_jenis" name="id_jenis" class="form-control" required="" readonly="readonly">
                        <?php foreach ($default['id_jenis'] as $row) { ?>

                            <option value="<?php echo (isset($row['value'])) ? $row['value'] : ''; ?>" 
                                    <?php echo (isset($row['selected'])) ? $row['selected'] : ''; ?> >
                                <?php echo (isset($row['display'])) ? $row['display'] : ''; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nomor Identitas <span style="color:red">*</span></label>
            <div class="col-sm-9">
                <input name="number" minlength="1" maxlength="30" id="number" type="text" required=""  parsley-type="text" placeholder="input nomor" class="form-control"
                        value="<?php echo (isset($default['number'])) ? $default['number'] : ''; ?>"
                        <?php echo (isset($default['readonly_number'])) ? $default['readonly_number'] : ''; ?>
                        readonly="readonly">
                </div>
            </div>

             <div class="form-group row">
                <label for="katagori" class="col-sm-3 col-form-label">Tingkat Resiko <span style="color:red">*</span></label>
                <div class="col-sm-9">
                   <select id="id_resiko" name="id_resiko" class="form-control" required="" readonly="readonly">
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
                        <textarea name="rincian_penyimpangan" class="form-control" rows="3" required="" readonly="readonly"
                        <?php echo (isset($default['readonly_rincian_penyimpangan'])) ? $default['readonly_rincian_penyimpangan'] : ''; ?> ><?php echo (isset($default['rincian_penyimpangan'])) ? $default['rincian_penyimpangan'] : ''; ?></textarea>
                    </div>                        
             </div>  

             <div class="form-group row">
                <label for="rincian_tindakan" class="col-sm-3 col-form-label">Rincian Tindakan Sementara Yang Telah Diambil <span style="color:red">*</span></label>
                <div class="col-sm-9">
                    <textarea name="rincian_tindakan" class="form-control" rows="3" required="" readonly="readonly"
                    <?php echo (isset($default['readonly_rincian_tindakan'])) ? $default['readonly_rincian_tindakan'] : ''; ?> ><?php echo (isset($default['rincian_tindakan'])) ? $default['rincian_tindakan'] : ''; ?></textarea>
                </div>                        
             </div>

            <!-- <div class="col-sm-12">
                <p class="text-left">
                    <button type="button" class="btn btn-sm btn-space bg-gradient-secondary" onclick='approvedata()'><i class='far fa-check-circle'> Persetujuan Penyimpangan</i></button>
                </p>
            </div> -->

            <div class="form-group">
                <div id="divapprove" style="display:none"></div>
                <div id="divrca" style="display:none"></div>
                
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
            var form, formdata, url_index, url_post, id, actiondata;
            url_post = '<?php echo $url_post; ?>';
            url_index = '<?php echo $url_index; ?>';
            id = $("#id").val();
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
                        var getdata = postaction('<?php echo $url_getdata; ?>', {'title_improvement': resultdata.postdata.title_improvement});
                        homedetail(getdata);
                    }
                }
            });
            $("#formdata").on('reset', function (e) {
                e.preventDefault();
                ToContent(url_index);
            });
        });

    // function approvedata (id) {
    //     $('#DialogConfirmApprove').modal('show');
    //     $("#DialogConfirmApprove  input[name=id]").val(id);
    // }

    function approvedata (label, id) {
        $("#id").val(id);
        $('#DialogApprove').modal('show');
        $("#label_approve").html(label);
    }

    url_postdataapprove ='<?php echo $url_postdataapprove; ?>';
    function process_approve() {
        $.ajax({
            url: url_postdataapprove,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                actiondataapprove: 'create',
                '<?php echo $prefix_id; ?>': $("#DialogConfirmApprove input[name=id]").val(),
            },
            success: function (data) {
                $('#DialogConfirmApprove').modal('hide');
                if (data.valid == true) {
                    $('#dataintablerca').dataTable().fnReloadAjax();
                }
                _alert(data.message, data.valid)

            }
        });
        return false;
    }

    function mail_send(nopn, nik) {
            $(document).ajaxStart(function() {
            $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function() {
            $("#wait").css("display", "none");
        });
        var tDiv = [];
        var to;
        var url = b_url + 'pn/kirimemail';
        $.ajax({
            url: url,
            type: "post",
            //data: data,
            data: {
                'nopn':nopn,
                'nik':nik
            },
            dataType: "json",
            success: function(response) {
                alert(response.msg);
            }
        });

  }

        function homedetail(param) {
            var id_formulir = param.result.id_formulir;
            $("#divrca").html("");
            $("#divrca").show();
            $("#divrca").load('<?php echo $url_homerca ?>' + '/' + id_formulir);
            $("#divapprove").html("");
            $("#divapprove").show();
            $("#divapprove").load('<?php echo $url_homeapprove ?>' + '/' + id_formulir);
            
        }

        $("input:radio[name='status_approve']").change(function () {
            checkstatus();
        });

        function checkstatus() {
            var status = $("input[name='status_approve']:checked").val();
            if (status == '0') {
                $("#userdata").show();
                $("#id_user").val('');
            } else {
                $("#userdata").hide();
            }
        }

    </script>


<input type="hidden" id="id" name="id" />
<div id="DialogApprove"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-like">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Pernyataan <span id="label_approve"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="contentapprove" style="display: none;">
                    <li class=" nav-item" type="hidden"> <a href="#tab_groupuser" class="nav-link active" data-toggle="tab" aria-expanded="true"><span class='fas fa-home'></span>&nbsp;Group User</a> </li>
                    <!-- <li class="nav-item"> <a href="#tab_menuuser" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Menu User</a> </li>
                    <li class="nav-item"> <a href="#tab_buttonuser" class="nav-link" data-toggle="tab" aria-expanded="false"><span class='fas fa-home'></span>&nbsp;Button User</a> </li> -->
                </ul>
                <div class="tab-content">
                    <div id="tab_groupuser" class="tab-pane active"> </div>
                    <!-- <div id="tab_menuuser" class="tab-pane"> </div>
                    <div id="tab_buttonuser" class="tab-pane"></div> -->
                </div>
                <script type="text/javascript">
                    $('#contentapprove a').on('shown.bs.tab', function (e) {
                        e.preventDefault()
                        var me = $(this);
                        var tabdata = me[0];
                        var tab_id = tabdata.getAttribute("href");
                        var url_tab = '';



                        if (tab_id == "#tab_groupuser") {
                            url_tab = '<?php echo $url_approve_bydeprt . '/ id_formulir' ; ?>' + $("#id").val();
                        }
                        // } else if (tab_id == "#tab_menuuser") {
                        //     url_tab = '<?php echo $url_usermenu . '/'; ?>' + $("#id").val();

                        // } else if (tab_id == "#tab_buttonuser") {
                        //     url_tab = '<?php echo $url_usermenubutton . '/'; ?>' + $("#id").val();

                        // }
                        $(tab_id).html("<div class='text-center' align='center'><img  src='<?php echo base_url(); ?>public/images/loading5.gif' alt=''/><br/>Please wait ...</div>");
                        $(tab_id).load(url_tab);


                    });

                    $(document).ready(function () {
                        $("#DialogApprove").on("show.bs.modal", function () {
                            $("#contentapprove").tabs().tabs('select', 0);
                            $("#tab_groupuser").load('<?php echo $url_approve_bydeprt . '/'; ?>' + $("#id").val());
                        });
                    });

                </script>
            </div>

            <div class="modal-footer"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
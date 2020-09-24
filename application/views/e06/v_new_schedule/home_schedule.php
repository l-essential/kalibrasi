<style>
 th, td { white-space: nowrap; }
    div.dataTables_wrapper {
        width: auto;
         margin: 0 auto;
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
              <li class="breadcrumb-item"><a href="#" onclick="ToController('lessential_pyp/home')">Home</a></li>
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
            <!-- /.card-header -->
            <div class="card-header">
              <button type="button" id="btncreate" onclick="ToController('e06/New_schedule');" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data">
              <i class="far fa-calendar-check"></i> Back schedule</button>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-expand"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive" style="overflow-x:auto;">
                <table class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th rowspan="2">Nama Karyawan</th>
                            <th colspan="<?php echo $cosplan ?>" style="text-align: center;">Tanggal</th>
                        </tr>
                        <tr>
                              <?php 
                                if ($getdate) {
                                  foreach ($getdate as $rowdetail) {
                                    ?>
                                  <th><?php echo date('d/m/y', strtotime($rowdetail['schedule_date'])) ; ?> </th>
                                <?php
                                }
                              }
                              ?>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                      if ($getuser) {
                        foreach ($getuser as $rowgetuser) {
                          ?>
                              <tr>
                                <td><?php echo $rowgetuser['namaKaryawan'] ; ?> </td>
                                <?php
                                      if ($getdate) {
                                        foreach ($getdate as $rowdetail) {
                                          ?>
                                        <td><a href='javascript:void(0)' onClick='schedule(<?php echo $rowdetail['schedule_id'] ; ?>,"<?php echo $rowdetail['schedule_date'] ; ?>","<?php echo $rowgetuser['namaKaryawan'] ; ?>")'>
                                          <span class='badge bg-like'> masuk</span></a>
                                        </td>
                                        <?php
                                      }
                                    }
                                ?>
                        
                        </tr>

                      <?php
                      }
                    }
                    ?>
                    </tbody>                
                </table>
              </div>
        </div>
    </div>
</div>
</div>
</section>
</div>

<script type="text/javascript">
   
     url_date01 = '<?php echo $url_date01; ?>'; 
    
     function schedule(id, date, name, status) {
                    $('#DialogConfirm').modal('show');
                    $("#DialogConfirm  input[name=id]").val(id);
                    $("#DialogConfirm  input[name=date]").val(date);
                    $("#DialogConfirm  input[name=name]").val(name);
                    $("#DialogConfirm  input[name=status]").val(status);
                }
                
    function date() {
        $.ajax({
            url: url_date01,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#DialogConfirm input[name=id]").val(),
                date: $("#DialogConfirm input[name=date]").val(),
                name: $("#DialogConfirm input[name=name]").val(),
                status: $("#DialogConfirm option:selected").val(),
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                _alert(data.msg, data.valid);

            }
        });
        return false;
    }

   

</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white"> Create Schedule </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" class="form-control"/>
                <div class="form-group">
                <input type ="text" class="form-control" name="name" Readonly />
                </div>
                 <div class="form-group">
                <input type ="text" class="form-control" name="date" Readonly />
                </div>
                <div class="form-group">
                  <select  name="status" id="status" class="form-control">
                    <option value="1">Masuk</option>
                    <option value="2">WFH</option>
                    <option value="3">Libur</option>
                    <option value="4">Lain Lain</option>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="date()" class="btn btn-sm btn-like" action="create">Create</button>
            </div>
        </div>
    </div>
</div>
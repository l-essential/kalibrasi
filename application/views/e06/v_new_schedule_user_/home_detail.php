<style>
    .bg-ungu {
    background-color: #8820c9!important;
    color: #ffffff;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> <?php echo $title; ?></h1>
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
                <?php echo $this->session->userdata('ses_namaKaryawan'); ?>
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="maximize" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-expand"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div id="dataintable" class="table-responsive" style="padding-top:5px;">
                 <table class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Note WFH</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                        if ($getuser) {
                          foreach ($getuser as $rowgetuser) {
                            ?>
                                <tr>
                                  <td> 
                                  <a href='javascript:void(0)' onClick='write_note(<?php echo $rowgetuser['schedule_byuser'] ; ?>,"<?php echo $rowgetuser['schedule_note_user'] ; ?>")'>
                                            <span class='badge bg-like'> <?php echo $rowgetuser['schedule_date'] ; ?></span></a></td>
                                  <td><?php echo $rowgetuser['schedule_note_user'] ; ?> </td>
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
    url_grid = '<?php echo $url_grid; ?>';
    url_edit_byuser = '<?php echo $url_edit_byuser; ?>';
    url_update = '<?php echo $url_update; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';
                    
    function write_note(id, note) {
                    $('#DialogConfirm').modal('show');
                    $("#DialogConfirm  input[name=id]").val(id);
                    $("#DialogConfirm  textarea[name=note]").val(note);
                }

    function action_insert() {
        $.ajax({
            url: url_update,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                  id: $("#DialogConfirm input[name=id]").val(),
                note: $("#DialogConfirm textarea[name=note]").val()
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                if (data.valid == true) {
                  window.location.reload();
                }
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
                <h4 class="modal-title"><font color="white">Schedule </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id"/>
                <div class="form-group">
                <textarea class="form-control" name="note" id="note" rows="3" placeholder="Enter ..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="action_insert()" class="btn btn-sm btn-like" action="create">Create</button>
            </div>
        </div>
    </div>
</div>
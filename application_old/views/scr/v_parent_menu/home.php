
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
             
              <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" onclick="refreshtemplate()" data-toggle="tooltip" title="Reload">
                      <i class="fas fa-redo-alt"></i></button>
                  </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               <table id="dataintable" class="table table-head-fixed table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>ID Menu</th>
                            <th>Nama Aplikasi</th>
                            <th>Nama Menu</th>
                            <th>Url menu</th>
                            <th>Status Menu</th>
                        </tr>
                    </thead>                 
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
</div>

<script type="text/javascript">
    url_grid = '<?php echo $url_grid; ?>';
    url_status = '<?php echo $url_status; ?>';
    prefix_id = '<?php echo $prefix_id; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';
   

    accesscreate = checkaccess("add");
    accessedit = checkaccess("edit");
    accessdelete = checkaccess("delete");

    if (accesscreate == true) {
        $("#btncreate").show();
    } else {
        $("#btncreate").hide();
    }


    datacolumn = [
                  {"data": "id_mmenu"},
                  {"data": "nama_aplikasi"},
                  {"data": "nama_menu"},
                  {"data": "url_menu"},
                  {"data": "statusdata",
                    "mRender": function (data, type, row) {
                          var btn = "";
                          if (row.statusdata == 'active') {
                              btn = "<a href='javascript:void(0)' onClick='update("+ row.id_mmenu +")'><strong><span class='badge bg-like'>Aktive</span></strong></a>";
                          } else {
                              btn = "<a href='javascript:void(0)' onClick='update("+ row.id_mmenu +")'><strong><span class='badge bg-danger'>Nonactive</span></strong></a>";
                          }
                          return btn;
                      }
                  }
    ];
    setdatagrid();

    function update(id) {
                    $('#DialogConfirm').modal('show');
                    $("#DialogConfirm  input[name=id]").val(id);
                }
                
    function proses_status(id, status) {
        $.ajax({
            url: url_status,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
                id: $("#DialogConfirm input[name=id]").val(),
                status: $("#DialogConfirm option:selected").val()
            },
            success: function (data) {
                $('#DialogConfirm').modal('hide');
                    window.location.reload();
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
                <h4 class="modal-title"><font color="white"> Update Status Parent Menu </font></h4>
            </div>
            <div class="modal-body">
                <input type ="hidden" name="id" class="form-control"/>
                <div class="form-group">
                  <select  name="status" id="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="nonactive">Nonactive</option>
                  </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="proses_status()" class="btn btn-sm btn-like" action="create">Create</button>
            </div>
        </div>
    </div>
</div>

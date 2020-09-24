<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></i> <?php echo $title; ?></h1>
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
        <div class="col-md-3">
          <a href="#" onClick='inputname_db()' class="btn btn-like btn-block mb-3">Create Database</a>

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a href="http://localhost:8080/phpmyadmin/" target="_blank" class="nav-link">
                    <i class="fas fa-database"></i> phpmyadmin
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-like card-outline">
            <div class="card-header">
              <h3 class="card-title">Database</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Mail">
                  <div class="input-group-append">
                    <div class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td class="mailbox-subject"><b>lessential</b></td>
                  </tr>
                  <tr>
                    <td class="mailbox-subject"><b>lessential_accessapps</b></td>
                  </tr>
                  <tr>
                    <td class="mailbox-subject"><b>lessential_chat</b></td>
                  </tr>
                  <tr>
                    <td class="mailbox-subject"><b>lessential_dbmasterdata</b></td>
                  </tr>
                  <tr>
                    <td class="mailbox-subject"><b>lessential_hris</b></td>
                  </tr>
                  <tr>
                    <td class="mailbox-subject"><b>lessential_kpi</b></td>
                  </tr>
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->

            <?php
              // Usage without mysql_list_dbs()
              $link = mysql_connect('localhost', 'root', '');
              $res = mysql_query("SHOW DATABASES LIKE 'lessential%' ");

              while ($row = mysql_fetch_assoc($res)) {
                  echo $row['Database'] . "\n" ."</br>";
              }

            
            ?>

            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                <div class="float-right">
                  1-50/200
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>


<script>
  url_create_database = '<?php echo $url_create_database; ?>';
  function inputname_db() {
        $('#DialogConfirm').modal('show');
    }

    function create_db() {
        $.ajax({
            url: url_create_database,
            type: "post",
            dataType: "json",
            cache: false,
            data: {
              database: $("#DialogConfirm input[name=database]").val()
            },
            success: function () {
                $('#DialogConfirm').modal('hide');
                window.location.reload(true);

            }
        });
        return false;
    }
</script>

<div id="DialogConfirm" class="modal fade"  role="dialog" aria-labelledby="DialogConfirmLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-like">
                <h4 class="modal-title"><font color="white">Create Database</font></h4>
            </div>
            <div class="modal-body">
                <div class="form-group" style="padding-left: 9px;">
                    <div class="col-sm-12" style="padding-left: 0px;">
                     <input name="database" id="database" class="form-control" rows="2" placeholder="Name Database">
                    </div>                        
                </div>
              </div>
               
            <div class="modal-footer" style="padding: 0rem;">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" onclick="create_db()" class="btn btn-sm bg-gradient-secondary" action="create">Submit</button>
            </div>
        </div>
    </div>
</div>
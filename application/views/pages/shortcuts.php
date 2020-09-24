<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Shortcuts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Shortcuts</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
      <button id="btncreate" type="button" class="btn bg-gradient-secondary btn-sm" data-card-widget="add" data-toggle="tooltip" title="add data" onclick="adddata();">
                      <i class="fas fa-file-signature"></i> Add Data</button>
        <!-- Info boxes -->
        <?php
            if ($shortcut) {
              foreach ($shortcut as $rowshortcut) {
                ?>
                    <div class="row">
                      <a href="<?php echo $rowshortcut['url_apps']; ?>" class="col-12 col-sm-6 col-md-3" target="_blank">
                        <div class="info-box">
                          <span class="info-box-icon bg-like elevation-1"><i class="<?php echo $rowshortcut['icon']; ?>"></i></span>

                          <div class="info-box-content">
                            <span class="info-box-text" style="padding: 19px 0px"> <?php echo $rowshortcut['apps_name']; ?></span>
                            </span>
                          </div>
                          <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                      </a>
                      <!-- /.col -->
                      </div>
          <?php
                  }
              }
          ?>
         
        
      </div><!--/. container-fluid -->

    </section>
    <!-- /.content -->
  </div>
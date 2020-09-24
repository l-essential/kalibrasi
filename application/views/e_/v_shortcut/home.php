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
              <li class="breadcrumb-item"><a href="#" id="btncreate" onclick="adddata();">Add Shortcut</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        
      <div class="container-fluid">
    
        <!-- Info boxes -->
        <div class="row">
        <?php
            if ($shortcut) {
              foreach ($shortcut as $rowshortcut) {
                ?>
                    
                      <a href="<?php echo $rowshortcut['url_apps']; ?>" target="_blank" class="col-12 col-sm-6 col-md-3">
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
                   
          <?php
                  }
              }
          ?>
          </div>
        
      </div><!--/. container-fluid -->

    </section>
    <!-- /.content -->
  </div>


  <script type="text/javascript">
    url_add = '<?php echo $url_add; ?>';
    listbutton = '<?php echo $this->session->userdata('listbutton'); ?>';


    accesscreate = checkaccess("add");

    // if (accesscreate == true) {
    //     $("#btncreate").show();
    // } else {
    //     $("#btncreate").hide();
    // }

</script>
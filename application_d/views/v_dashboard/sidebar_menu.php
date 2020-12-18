<?php  $templates = base_url() . 'allassets/'; ?>
<style>
  .badge-info {
    color: #fff;
    background-color: #20c997;
}
</style>

<?php $templates = base_url() . 'allassets/'; ?>
    <!-- Brand Logo -->
    <!-- <i class="nav-icon fas fa-camera" style="padding-left: 3px;font-size: 11px;"></i> -->
    <a href="#" class="brand-link" style="line-height: 0.9;">
      <img src="<?php echo base_url(); ?>allassets/dist/img/Logo.png" alt="Logo" class="brand-image img-circle"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 1.3rem">
      <b>PT</b>. L`ESSENTIAL
      </span>
    </a>
    
    <div class="sidebar" style="padding:9px 9px;">
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $infobyuser->lokasi_gambar ?>" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div> -->

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
           <li class="nav-item">
            <a href="javascript:;" class="nav-link active" onclick="toIndex()">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p class="digital">
                Dashboard
              </p>
            </a>
          </li>
           <?php echo $buildaccess; ?>



          <?php if ($this->session->userdata('ses_username') == 'moehamad' ) { ?>
          
          <li class="nav-header">Extras</li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link" onclick="ToController('setup/setup', '')">
            <i class="fas fa-history"></i>
              <p> Setup </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="javascript:;" class="nav-link" onclick="ToController('setup/Recyclebin', '')">
            <i class="far fa-trash-alt"></i>
              <p> Recycle Bin </p>
            </a>
          </li>


          <li class="nav_item"><a href="" class="nav-link" onclick="Tocontroller('error_404', '')">
          <i class="fas fa-terminal"></i>
              <p></p>
            </a></li>
          <li class="nav-item">
            <a href="javascript:;" class="nav-link" onclick="ToController('error_404', '')">
              <i class="fas fa-journal-whills"></i>
              <p> Documentation</p>
            </a>
          </li>
          <?php  } ?>

          <li class="nav_item">
            <a href="javascript:;" class="nav-link" onclick="ToController('e_/Shortcut')">
              <i class="fas fa-th"></i>
              <p> Shortcut</p>
            </a>
          </li>
          
        </ul>
      </nav>
    </div>
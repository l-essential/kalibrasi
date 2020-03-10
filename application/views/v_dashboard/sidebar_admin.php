<style>
  .badge-info {
    color: #fff;
    background-color: #20c997;
}
</style>

<?php $templates = base_url() . 'allassets/'; ?>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo $templates ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><span class="digital" id="LiveDate" style="font-size: 1.rem"></span></span>
    </a>
    
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
           <li class="nav-item">
            <a href="javascript:;" class="nav-link active" onclick="toIndex()">
              <i class="nav-icon fas fa-laptop-code"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <?php echo $buildaccess; ?>

        
        </ul>
      </nav>
    </div>
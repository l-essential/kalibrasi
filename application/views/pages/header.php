
  <!-- begin navbar-header -->
      <div class="navbar-header">
        <a href="index.html" class="navbar-brand" style="padding: 10px 13px;"><span class="navbar-logo">
          <!-- <img src="<?php echo base_url(); ?>assets/img/logoheader.png" style="margin-top: -7px;"> -->
        </span>
        <span class="logo" style="color:#fff; font-size: 29px">Ff</span> <!-- <b>My</b> Apps --></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <!-- end navbar-header -->
      
      <!-- begin header-nav -->
      <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
           <a href="#" style="line-height: 15px;">
            <span class="d-md-inline">
              <i><span class="digital" id="LiveDate" style="font-size: 17px"></span></i>
              <span class="digital" id="LiveTime" style="font-size: 19px"></span>
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" onclick="Logoutjs();">
            <b><i class="fa fa-power-off" style="font-size: 15px;color: #f11"></i></b>
          </a>
        </li>
      </ul>
      <!-- end header navigation right -->
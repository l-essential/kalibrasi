<?php $templates = base_url() . 'allassets/'; ?>
<!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-info-circle"></i> App's
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header">PT. L`Essential</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <!-- <span class="float-right text-muted text-sm">2 days</span> -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="http://192.168.0.91/portal/" target ="_blank" class="dropdown-item dropdown-footer">To portal</a>
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"onclick="ToController('eml/Email', '')">
          <i class="far fa-handshake"></i>
          <span class="badge badge-info navbar-badge">3</span>
        </a>
      </li> -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"onclick="ToController('eml/Support', '')">
          <!-- <i class="fas fa-envelope"></i> -->
          <i class="fab fa-teamspeak"></i>
          <span class="badge badge-info navbar-badge">3</span>
        </a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"onclick="ToController('eml/Email', '')">
          <!-- <i class="fas fa-envelope"></i> -->
          <i class="far fa-comments"></i>
          <span class="badge badge-info navbar-badge">3</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <!-- <i class="fas fa-user-cog"></i> -->
          <i class="fas fa-user-shield"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo $templates ?>dist/img/AdminLTELogo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php echo $this->session->userdata('ses_namaKaryawan'); ?>
                 <!--  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span> -->
                </h3>
                <p class="text-sm"><?php echo $this->session->userdata('ses_username'); ?></p>
                <p class="text-sm"> <?php echo $this->session->userdata('ses_department_name'); ?></p>
                 <!-- <p class="text-sm"> <?php echo $this->session->userdata('ses_namaDepartment'); ?></p> -->
                <!-- <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p> -->
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-item" style="text-align: center;">
            <a href="#" class="fas fa-user" style="color:#555555;" onclick="ToController('scr/Useraccess/Userinfo', '')"></a>&emsp;&emsp;&emsp;
            <a href="#" class="fas fa-unlock-alt" style="color:#555555;" onclick="changepassword()"></a>&emsp;&emsp;&emsp;
            <a href="#" class="fas fa-power-off" style="color:#555555;" onclick="Logoutjs();"></a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
<?php $templates = base_url() . 'allassets/';
      $chat = base_url() . 'chatme/'; ?>
<!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="#"><strong><?php echo $ip; ?></strong></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"><?php echo $message ?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <?php
                if ($value_ms) {
                  foreach ($value_ms as $rowvalue) {
                    ?><td class="text-center"style="height: 70px;">

                      <a class="dropdown-item">
                        <div class="media">
                          <img src="<?php echo $chat ?>/gambar/user/<?php echo $rowvalue['user_foto'] ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                          <div class="media-body">
                            <h5 class="dropdown-item-title">
                            <?php echo $rowvalue['user_nama'] ; ?>
                            </h5>
                            <p class="text-sm"><?php echo $rowvalue['chat_isi'] ; ?></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> <?php echo $rowvalue['chat_waktu'] ; ?></p>
                          </div>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>               
                      <?php
                  }
              }
          ?>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a target="_blank" href="http://192.168.0.241:8080/penyimpangan/chatme/" class="dropdown-item dropdown-footer">Login</a>
        </div>
      </li> -->

      <!-- <li>
        <a class="nav-link" target="_blank" href="http://192.168.0.241:8080/penyimpangan/chatme/">
        <i class="far fa-comments" style="font-size:19px"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $message ?></span>
        </a>
      </li> -->

      <!-- <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-bullhorn"></i>
            <span class="badge badge-warning navbar-badge"><?php echo $notifapprove ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Notifications Apps <?php echo $notifapprove ?></span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" onclick="ToController('e01/approve')" style="padding: .25rem 1rem !important;">
              <i class="fas fa-map-signs mr-2"></i> Penyimpangan
              <span class="badge badge-info float-right text-muted"><?php echo $notifapprove ?></span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" style="padding: .25rem 1rem !important;">
              <i class="fas fa-tachometer-alt mr-2"></i> Kalibrasi
              <span class="badge badge-info float-right text-muted">0</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" style="padding: .25rem 1rem !important;">
              <i class="fas fa-box-open mr-2"></i> Notifasi Produk
              <span class="badge badge-info float-right text-muted">0</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">All Notifications</a>
          </div>
        </li> -->
      
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="openFullscreen()">
            <i class="fas fa-expand-alt"></i></a>
        </li>
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <i class="fas fa-user-cog"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-like">
            <img src="<?php echo $this->session->userdata('ses_lokasi_gambar') ?>" class="img-circle elevation-2" alt="User Image">

            <p style="font-size:15px">
              <?php echo $this->session->userdata('ses_namaKaryawan') ?> - <?php echo $this->session->userdata('ses_department_name') ?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
            <div class="row">
              <div class="col-4 text-center">
                <a href="#" onclick="ToController('scr/Useraccess/home_info', '')">Profile</a>
              </div>
              <div class="col-4 text-center">
                <a href="#" onclick="ToController('scr/Useraccess/home_userlog', '')">Logs</a>
              </div>
              <div class="col-4 text-center">
                <a href="#" onclick="ToController('scr/Kpi_byuser', '')">KPI</a>
              </div>
            </div>
            <!-- /.row -->
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?php echo site_url('Login/lockscreen') ?>" class="btn btn-default btn-flat">Lock Screen</a>
            <a href="#" class="btn btn-default btn-flat float-right" onclick="Logoutjs();">Sign out</a>
          </li>
        </ul>
      </li>

      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" onclick="Logoutjs();">
          <i class="fas fa-power-off" style="color:#ef5c61"></i>
        </a>
      </li> -->

      
    </ul>

    <script type="text/javascript">
      var elem = document.documentElement;
      function openFullscreen() {
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox */
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
          elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE/Edge */
          elem.msRequestFullscreen();
        }
      }
    </script>

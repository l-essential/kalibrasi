sidebar_report<div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav" style="border-right: 1px solid black;">
          <li class="nav-profile" style="padding: 23px;">
            <a href="javascript:;" data-toggle="nav-profile">
              <div class="cover with-shadow"></div>
              <div class="image">
                <img src="assets/img/user/user-13.jpg" alt="" />
              </div>
              <div class="info">
                <b class="caret"></b>
                </i><span class="logo"><?php echo $this->session->userdata('ses_nama'); ?></span>
                <small><?php echo $this->session->userdata('ses_email'); ?></small>
              </div>
            </a>
          </li>
          <li>
            <ul class="nav nav-profile">
              <li><a href="javascript:;" onclick="ToController('Useraccess/Userinfo', '')">
                  <i class="ion-social-octocat bg-gradient-blue"></i> Peofile</a></li>
            </ul>
          </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav" style="border-right: 1px solid black;">
          <li class="nav-header">Navigation</li>
          <li class="has-sub active">
            <a href="#" onclick="toIndex()">
              <i class="ion-social-windows"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <!-- begin sidebar  -->
            <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              <i class="ion-social-buffer bg-gradient-blue"></i>
              <span>Report</span>
            </a>
            <ul class="sub-menu">
                <li><a href="#" onclick="ToController('Pettycash/home_laporan', '')"><b class="fa fa-dot-circle-o"></b> Petty Cash</a></li>
                <li><a href="#"><b class="fa fa-dot-circle-o"></b> Online Store</a></li>
            </ul>
          </li>
           <!-- <li class="nav-header">Portofolio</li>
            <li class="has-sub">
            <a href="javascript:;">
              <b class="caret"></b>
              <i class="ion-social-octocat bg-gradient-blue"></i>
              <span>My Portofolio </span>
            </a>
            <ul class="sub-menu">
                <li><a href="#" onclick="ToController('Useraccess', '')"><b class="fa fa-dot-circle-o"></b> User </a></li>
                <li><a href="#" onclick="ToController('Role', '')"><b class="fa fa-dot-circle-o"></b> Role </a></li>
            </ul>
          </li>
          <li class="nav-header">Extra</li> -->
           <li><a href="#" onclick="ToController('Gallery', '')"><i class="ion-images bg-gradient-blue"></i> <span>Gallery</span></a></li>
           <li><a href="calendar.html"><i class="fa fa-calendar fa-3 bg-gradient-blue"></i> <span>Calendar</span></a></li>
          <!-- begin sidebar minify button -->
          <li><a href="javascript:;" class="sidebar-minify-btn bg-gradient-blue" data-click="sidebar-minify"><i class="fa fa-angle-double-left" style="color:#FFF"></i> <span>Collapse</span></a></li>
          <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
      </div>
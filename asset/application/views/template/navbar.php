 <!-- /menu footer buttons -->
 <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo base_url('assets/');?>production/images/img.jpg" alt=""><?php echo $this->fungsi->user_login()->username ?>
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="javascript:;"> Profile</a>
                <a class="dropdown-item"  href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                </a>
            <a class="dropdown-item"  href="javascript:;">Help</a>
                <a class="dropdown-item"  href="<?php echo site_url('Ctr_auth/proseslogout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-green">6</span>
            </a>
            <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                <li class="nav-item">
                <a class="dropdown-item">
                    <span class="image"><img src="<?php echo base_url('assets/');?>production/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <a class="dropdown-item">
                    <span class="image"><img src="<?php echo base_url('assets/');?>production/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <a class="dropdown-item">
                    <span class="image"><img src="<?php echo base_url('assets/');?>production/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <a class="dropdown-item">
                    <span class="image"><img src="<?php echo base_url('assets/');?>production/images/img.jpg" alt="Profile Image" /></span>
                    <span>
                    <span>John Smith</span>
                    <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                </a>
                </li>
                <li class="nav-item">
                <div class="text-center">
                    <a class="dropdown-item">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                    </a>
                </div>
                </li>
            </ul>
            </li>
        </ul>
        </nav>
    </div>
    </div>
<!-- /top navigation -->
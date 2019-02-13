<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a target="_blank" href="<?php echo base_url(); ?>" class="logo">
        <img src="<?php echo base_url("assets/img/")."logo.png"; ?>" />
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!--<li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>-->
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <!--<img alt="" src="images/2.png">-->
                <i class="fa fa-lock"></i>
                <span class="username">admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?php echo base_url();?>/users/show_Users"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <!--<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>-->
                <li><a href="<?php echo base_url();?>/dashboard/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>

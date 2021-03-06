<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Hotel management system - Responsive Admin"/>
    <meta name="RamathiT" content="Hotel management system"/>
    <title>Iceberg</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"/>
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css"/>
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="assets/css/c3.css">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico"/>
</head>
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index.php">
                    <img alt="" src="assets/img/logo.png">
                    <span class="logo-default">Iceberg</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn search-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                </div>
            </form>

            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu animated swing">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span> Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                <b>Ramathi Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 hrs</span>
                                            <span class="details">
                                                <span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <!--<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">-->
                    <!--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">-->
                    <!--<i class="fa fa-envelope-o"></i>-->
                    <!--<span class="badge headerBadgeColor2"> 2 </span>-->
                    <!--</a>-->
                    <!--<ul class="dropdown-menu animated slideInDown">-->
                    <!--<li class="external">-->
                    <!--<h3><span class="bold">Messages</span></h3>-->
                    <!--<span class="notification-label cyan-bgcolor">New 2</span>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--<span class="photo">-->
                    <!--<img src="assets/img/user/user2.jpg" class="img-circle" alt=""> </span>-->
                    <!--<span class="subject">-->
                    <!--<span class="from"> Sarah Smith </span>-->
                    <!--<span class="time">Just Now </span>-->
                    <!--</span>-->
                    <!--<span class="message"> Jatin I found you on LinkedIn... </span>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--<span class="photo">-->
                    <!--<img src="assets/img/user/user3.jpg" class="img-circle" alt=""> </span>-->
                    <!--<span class="subject">-->
                    <!--<span class="from"> Ramathi Tilakaratne </span>-->
                    <!--<span class="time">16 mins </span>-->
                    <!--</span>-->
                    <!--<span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--<span class="photo">-->
                    <!--<img src="assets/img/user/user1.jpg" class="img-circle" alt=""> </span>-->
                    <!--<span class="subject">-->
                    <!--<span class="from"> Yohan </span>-->
                    <!--<span class="time">2 hrs </span>-->
                    <!--</span>-->
                    <!--<span class="message"> pls take a print of attachments. </span>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--<span class="photo">-->
                    <!--<img src="assets/img/user/user8.jpg" class="img-circle" alt=""> </span>-->
                    <!--<span class="subject">-->
                    <!--<span class="from"> Lina Smith </span>-->
                    <!--<span class="time">40 mins </span>-->
                    <!--</span>-->
                    <!--<span class="message"> Apply for Ortho Surgeon </span>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--<a href="#">-->
                    <!--<span class="photo">-->
                    <!--<img src="assets/img/user/user5.jpg" class="img-circle" alt=""> </span>-->
                    <!--<span class="subject">-->
                    <!--<span class="from"> Jacob Ryan </span>-->
                    <!--<span class="time">46 mins </span>-->
                    <!--</span>-->
                    <!--<span class="message"> Request for leave application. </span>-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--</ul>-->
                    <!--<div class="dropdown-menu-footer">-->
                    <!--<a href="#"> All Messages </a>-->
                    <!--</div>-->
                    <!--</li>-->
                    <!--</ul>-->
                    <!--</li>-->
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <img alt="" class="img-circle " src="assets/img/dp.jpg"/>
                            <span class="username username-hide-on-mobile"> Ramathi </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default animated jello">
                            <li>
                                <a href="user_profile.html">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-directions"></i> Help
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="lock_screen.html">
                                    <i class="icon-lock"></i> Lock
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                           data-upgraded=",MaterialButton">
                            <i class="material-icons">settings</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <?php include('navigation.php'); ?>
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Dashboard</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <!-- start widget -->
                <div class="state-overview">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-blue">
                                <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Orders</span>
                                    <span class="info-box-number">450</span>
                                    <div class="progress">
                                        <div class="progress-bar width-60"></div>
                                    </div>
                                    <span class="progress-description">
					                    60% Increase in 28 Days
					                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-orange">
                                <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">New Booking</span>
                                    <span class="info-box-number">155</span>
                                    <div class="progress">
                                        <div class="progress-bar width-40"></div>
                                    </div>
                                    <span class="progress-description">
					                    40% Increase in 28 Days
					                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-purple">
                                <span class="info-box-icon push-bottom"><i
                                            class="material-icons">phone_in_talk</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Inquiry</span>
                                    <span class="info-box-number">52</span>
                                    <div class="progress">
                                        <div class="progress-bar width-80"></div>
                                    </div>
                                    <span class="progress-description">
					                    80% Increase in 28 Days
					                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon push-bottom"><i
                                            class="material-icons">monetization_on</i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Earning</span>
                                    <span class="info-box-number">13,921</span><span>$</span>
                                    <div class="progress">
                                        <div class="progress-bar width-60"></div>
                                    </div>
                                    <span class="progress-description">
					                    60% Increase in 28 Days
					                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- end widget -->
                <!--                    <div class="row">-->
                <!--                        <div class="col-md-12">-->
                <!--                            <div class="card card-topline-red">-->
                <!--                                <div class="card-head">-->
                <!--                                    <header>TOTAL ENERGY CONSUMPTION</header>-->
                <!--                                    <div class="tools">-->
                <!--                                        -->
                <!--                                        <img src="assets/img/Capture.PNG">-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!---->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-topline-red">
                            <div class="page-card__header">
                                <div class="page-card__header-left">
                                    <p class="secondary-text">TOTAL ENERGY CONSUMPTION</p>
                                </div>
                            </div>
                            <div class="page-card__body">
                                <div class="page-top-chart-area_energy-chart mCustomScrollbar _mCS_1"
                                     id="page-top-chart-area__energy-chart">
                                    <div class="energy-chart" id="energy-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-topline-red">
                            <div class="page-card__header">
                                <div class="page-card__header-left">
                                    <p class="secondary-text">TEMPRATURE CONTROL</p>
                                </div>
                            </div>
                            <div class="page-card__body">
                                <div class="page-top-chart-area__Temprature-chart mCustomScrollbar _mCS_1"
                                     id="page-top-chart-area__Temprature-chart">
                                    <div class="Temprature-chart" id="Temprature-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-topline-red">
                            <div class="page-card__header">
                                <div class="page-card__header-left">
                                    <p class="secondary-text">ROOM ACCESSING </p>
                                </div>
                            </div>
                            <div class="page-card__body">
                                <div class="page-top-chart-area__Accessing-chart mCustomScrollbar _mCS_1"
                                     id="page-top-chart-area__Accessing-chart">
                                    <div class="Accessing-chart" id="Accessing-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-topline-red">
                            <div class="page-card__header">
                                <div class="page-card__header-left">
                                    <p class="secondary-text">TOTAL WATER CONSUMPTION</p>
                                </div>
                            </div>
                            <div class="page-card__body">
                                <div class="page-top-chart-area__water-chart mCustomScrollbar _mCS_1"
                                     id="page-top-chart-area__water-chart">
                                    <div class="water-chart" id="water-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Room Details</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-wrap">
                                    <div class="table-responsive tblHeightSet">
                                        <table class="table display product-overview mb-30" id="support_table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Type</th>
                                                <th>Details</th>
                                                <th>Rent</th>
                                                <th>status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>102</td>
                                                <td>Premier</td>
                                                <td>1 Queen-sized bed, arm chair</td>
                                                <td>$25</td>
                                                <td>
                                                    <span class="label label-sm label-success">Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>202</td>
                                                <td>Deluxe</td>
                                                <td>1 Queen-sized bed, patio chairs</td>
                                                <td>$40</td>
                                                <td>
                                                    <span class="label label-sm label-danger"> Booked </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>104</td>
                                                <td>Twin</td>
                                                <td>2 single-beds</td>
                                                <td>$45</td>
                                                <td>
                                                    <span class="label label-sm label-success">Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>706</td>
                                                <td>Triple</td>
                                                <td>1 Queen-sized bed & 1 single bed</td>
                                                <td>$62</td>
                                                <td>
                                                    <span class="label label-sm label-warning">Maintenance</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>102</td>
                                                <td>Premier</td>
                                                <td>1 Queen-sized bed, arm chair</td>
                                                <td>$25</td>
                                                <td>
                                                    <span class="label label-sm label-success">Available</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>202</td>
                                                <td>Deluxe</td>
                                                <td>1 Queen-sized bed, patio chairs</td>
                                                <td>$40</td>
                                                <td>
                                                    <span class="label label-sm label-danger"> Booked </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>104</td>
                                                <td>Twin</td>
                                                <td>2 single-beds</td>
                                                <td>$45</td>
                                                <td>
                                                    <span class="label label-sm label-danger">Booked</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="card card-box">
                            <div class="card-head">
                                <header>Employee List</header>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <ul class="empListWindow small-slimscroll-style">
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user1.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Yohan Pandya</a>
                                                </div>
                                                <div>
                                                    <span class="clsAvailable">Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Sarah Smith</a>
                                                </div>
                                                <div>
                                                    <span class="clsAvailable">Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Ramathi Tilakaratne</a>
                                                </div>
                                                <div>
                                                    <span class="clsNotAvailable">Not Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Jay Soni</a>
                                                </div>
                                                <div>
                                                    <span class="clsOnLeave">On Leave</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user5.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Jacob Ryan</a>
                                                </div>
                                                <div>
                                                    <span class="clsNotAvailable">Not Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user6.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Megha Trivedi</a>
                                                </div>
                                                <div>
                                                    <span class="clsAvailable">Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user2.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Sarah Smith</a>
                                                </div>
                                                <div>
                                                    <span class="clsAvailable">Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user3.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Ramathi Tilakaratne</a>
                                                </div>
                                                <div>
                                                    <span class="clsNotAvailable">Not Available</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="prog-avatar">
                                                <img src="assets/img/user/user4.jpg" alt="" width="40" height="40">
                                            </div>
                                            <div class="details">
                                                <div class="title">
                                                    <a href="#">Jay Soni</a>
                                                </div>
                                                <div>
                                                    <span class="clsOnLeave">On Leave</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="full-width text-center p-t-10">
                                        <a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- start Payment Details -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card  card-box">
                            <div class="card-head">
                                <header>Booking Details</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display product-overview mb-30" id="support_table5">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Status</th>
                                                <th>Phone</th>
                                                <th>Room Type</th>
                                                <th>Edit</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Jens Brincker</td>
                                                <td>23/05/2016</td>
                                                <td>27/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success">paid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Single</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Mark Hay</td>
                                                <td>24/05/2018</td>
                                                <td>26/05/2019</td>
                                                <td>
                                                    <span class="label label-sm label-warning">unpaid </span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Double</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Anthony Davie</td>
                                                <td>17/05/2016</td>
                                                <td>21/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Queen</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>David Perry</td>
                                                <td>19/04/2016</td>
                                                <td>20/04/2016</td>
                                                <td>
                                                    <span class="label label-sm label-danger">unpaid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>King</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Anthony Davie</td>
                                                <td>21/05/2016</td>
                                                <td>24/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Single</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Alan Gilchrist</td>
                                                <td>15/05/2016</td>
                                                <td>22/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-warning ">unpaid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>King</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mark Hay</td>
                                                <td>17/06/2016</td>
                                                <td>18/06/2016</td>
                                                <td>
                                                    <span class="label label-sm label-success ">paid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Single</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Sue Woodger</td>
                                                <td>15/05/2016</td>
                                                <td>17/05/2016</td>
                                                <td>
                                                    <span class="label label-sm label-danger">unpaid</span>
                                                </td>
                                                <td>123456789</td>
                                                <td>Double</td>
                                                <td>
                                                    <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <button class="btn btn-tbl-delete btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Payment Details -->
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="card-box ">
                            <div class="card-head">
                                <header>Guest Review</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <ul class="docListWindow small-slimscroll-style">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user1.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Yohan Mishra</a>
                                                            <p class="rating-text">Awesome!!! Highly recommend</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_border</i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user2.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Sarah Smith</a>
                                                            <p class="rating-text">Very bad service :(</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user3.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Ramathi Simensh</a>
                                                            <p class="rating-text"> Staff was good nd i'll come
                                                                again</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user4.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Priya Sarma</a>
                                                            <p class="rating-text">The price I received was good
                                                                value.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user5.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Serlin Ponting</a>
                                                            <p class="rating-text">Not Satisfy !!!1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                    <i class="material-icons">star_border</i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                    <div class="prog-avatar">
                                                        <img src="assets/img/user/user6.jpg" alt="" width="40"
                                                             height="40">
                                                    </div>
                                                    <div class="details">
                                                        <div class="title">
                                                            <a href="#">Priyank Jain</a>
                                                            <p class="rating-text">Good....</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 rating-style">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <i class="material-icons">star_border</i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="full-width text-center p-t-10">
                                        <a href="#" class="btn purple btn-outline btn-circle margin-0">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="card-box">
                            <div class="card-head">
                                <header>Todo List</header>
                                <button id="panel-button"
                                        class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                        data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </button>
                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                    data-mdl-for="panel-button">
                                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body ">
                                <ul class="to-do-list ui-sortable" id="sortable-todo">
                                    <li class="clearfix">
                                        <div class="todo-check pull-left">
                                            <input type="checkbox" value="None" id="todo-check1">
                                            <label for="todo-check1"></label>
                                        </div>
                                        <p class="todo-title">Add fees details in system
                                        </p>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="todo-check pull-left">
                                            <input type="checkbox" value="None" id="todo-check2">
                                            <label for="todo-check2"></label>
                                        </div>
                                        <p class="todo-title">Announcement for holiday
                                        </p>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="todo-check pull-left">
                                            <input type="checkbox" value="None" id="todo-check3">
                                            <label for="todo-check3"></label>
                                        </div>
                                        <p class="todo-title">call bus driver</p>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="todo-check pull-left">
                                            <input type="checkbox" value="None" id="todo-check4">
                                            <label for="todo-check4"></label>
                                        </div>
                                        <p class="todo-title">School picnic</p>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="todo-check pull-left">
                                            <input type="checkbox" value="None" id="todo-check5">
                                            <label for="todo-check5"></label>
                                        </div>
                                        <p class="todo-title">Exam time table generate
                                        </p>
                                        <div class="todo-actionlist pull-right clearfix">
                                            <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-head">
                                <header>Salary Status</header>
                            </div>
                            <div class="card-body ">
                                <div class="mdl-tabs mdl-js-tabs">
                                    <div class="mdl-tabs__tab-bar tab-left-side">
                                        <a href="#tab4-panel" class="mdl-tabs__tab tabs_three is-active">Managers</a>
                                        <a href="#tab5-panel" class="mdl-tabs__tab tabs_three">Housekeeper</a>
                                        <a href="#tab6-panel" class="mdl-tabs__tab tabs_three">Other</a>
                                    </div>
                                    <div class="mdl-tabs__panel is-active p-t-20" id="tab4-panel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Ammount</th>
                                                    <th>Transaction ID</th>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user6.jpg" alt="">
                                                    </td>
                                                    <td>Ramathi Tilakaratne</td>
                                                    <td>05-01-2019</td>
                                                    <td><span class="label label-danger">Unpaid</span></td>
                                                    <td>1200$</td>
                                                    <td>#7234486</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user4.jpg" alt="">
                                                    </td>
                                                    <td>Eugine Turner</td>
                                                    <td>04-01-2019</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                    <td>1400$</td>
                                                    <td>#7234417</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user2.jpg" alt="">
                                                    </td>
                                                    <td>Jacqueline Howell</td>
                                                    <td>03-01-2019</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>1100$</td>
                                                    <td>#7234454</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <div class="full-width text-center p-t-10">
                                                <a href="#" class="btn purple btn-outline btn-circle margin-0">Load
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-tabs__panel p-t-20" id="tab5-panel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Ammount</th>
                                                    <th>Transaction ID</th>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user1.jpg" alt="">
                                                    </td>
                                                    <td>Eugine Turner</td>
                                                    <td>04-01-2019</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                    <td>700$</td>
                                                    <td>#7234417</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user4.jpg" alt="">
                                                    </td>
                                                    <td>Jacqueline Howell</td>
                                                    <td>03-01-2019</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>500$</td>
                                                    <td>#7234454</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user5.jpg" alt="">
                                                    </td>
                                                    <td>Jayesh Parmar</td>
                                                    <td>03-01-2019</td>
                                                    <td><span class="label label-danger">Unpaid</span></td>
                                                    <td>400$</td>
                                                    <td>#72544</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <div class="full-width text-center p-t-10">
                                                <a href="#" class="btn purple btn-outline btn-circle margin-0">Load
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdl-tabs__panel p-t-20" id="tab6-panel">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Ammount</th>
                                                    <th>Transaction ID</th>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user8.jpg" alt="">
                                                    </td>
                                                    <td>Jane Elliott</td>
                                                    <td>06-01-2019</td>
                                                    <td><span class="label label-primary">Paid</span></td>
                                                    <td>300$</td>
                                                    <td>#7234421</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user7.jpg" alt="">
                                                    </td>
                                                    <td>Jacqueline Howell</td>
                                                    <td>03-01-2019</td>
                                                    <td><span class="label label-warning">Pending</span></td>
                                                    <td>450$</td>
                                                    <td>#723344</td>
                                                </tr>
                                                <tr>
                                                    <td class="patient-img sorting_1">
                                                        <img src="assets/img/user/user9.jpg" alt="">
                                                    </td>
                                                    <td>Jacqueline Howell</td>
                                                    <td>03-01-2019</td>
                                                    <td><span class="label label-primary">Paid</span></td>
                                                    <td>550$</td>
                                                    <td>#7235454</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-center">
                                            <div class="full-width text-center p-t-10">
                                                <a href="#" class="btn purple btn-outline btn-circle margin-0">Load
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        <div class="chat-sidebar-container" data-close-on-body-click="false">
            <div class="chat-sidebar">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
                         id="quick_sidebar_tab_1">
                        <div class="slimscroll-style">
                            <div class="theme-light-dark">
                                <h6>Sidebar Theme</h6>
                                <button type="button" data-theme="white"
                                        class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar
                                </button>
                                <button type="button" data-theme="dark"
                                        class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar
                                </button>
                            </div>
                            <div class="theme-light-dark">
                                <h6>Sidebar Color</h6>
                                <ul class="list-unstyled">
                                    <li class="complete">
                                        <div class="theme-color sidebar-theme">
                                            <a href="#" data-theme="white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h6>Header Brand color</h6>
                                <ul class="list-unstyled">
                                    <li class="theme-option">
                                        <div class="theme-color logo-theme">
                                            <a href="#" data-theme="logo-white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="logo-red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                                <h6>Header color</h6>
                                <ul class="list-unstyled">
                                    <li class="theme-option">
                                        <div class="theme-color header-theme">
                                            <a href="#" data-theme="header-white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            <a href="#" data-theme="header-red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Start Doctor Chat -->
                    <div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
                        <div class="chat-sidebar-list">
                            <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                                 data-wrapper-class="chat-sidebar-list">
                                <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                <ul class="media-list list-items">
                                    <li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Ramathi Tilakaratne</h5>
                                            <div class="media-heading-sub">Spine Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">5</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user1.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Yohan</h5>
                                            <div class="media-heading-sub">Director</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="away dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jacob Ryan</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">8</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user4.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Kehn Anderson</h5>
                                            <div class="media-heading-sub">CEO</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="busy dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Sarah Smith</h5>
                                            <div class="media-heading-sub">Anaesthetics</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="online dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Vlad Cardella</h5>
                                            <div class="media-heading-sub">Cardiologist</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">4</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user6.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jennifer Maklen</h5>
                                            <div class="media-heading-sub">Nurse</div>
                                            <div class="media-heading-small">Last seen 01:20 AM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Lina Smith</h5>
                                            <div class="media-heading-sub">Ortho Surgeon</div>
                                            <div class="media-heading-small">Last seen 11:14 PM</div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">9</span>
                                        </div>
                                        <img class="media-object" src="assets/img/user/user9.jpg" width="35" height="35"
                                             alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Jeff Adam</h5>
                                            <div class="media-heading-sub">Compounder</div>
                                            <div class="media-heading-small">Last seen 3:31 PM</div>
                                        </div>
                                    </li>
                                    <li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
                                                           width="35" height="35" alt="...">
                                        <i class="offline dot"></i>
                                        <div class="media-body">
                                            <h5 class="media-heading">Anjelina Cardella</h5>
                                            <div class="media-heading-sub">Physiotherapist</div>
                                            <div class="media-heading-small">Last seen 7:45 PM</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-sidebar-item">
                            <div class="chat-sidebar-chat-user">
                                <div class="page-quick-sidemenu">
                                    <a href="javascript:;" class="chat-sidebar-back-to-list">
                                        <i class="fa fa-angle-double-left"></i>Back
                                    </a>
                                </div>
                                <div class="chat-sidebar-chat-user-messages">
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:10</span>
                                            <span class="body-out"> could you send me menu icons ? </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:10</span>
                                            <span class="body"> please give me 10 minutes. </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:11</span>
                                            <span class="body-out"> ok fine :) </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:22</span>
                                            <span class="body">Sorry for
													the delay. i sent mail to you. let me know if it is ok or not.</span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> it is perfect! :) </span>
                                        </div>
                                    </div>
                                    <div class="post out">
                                        <img class="avatar" alt="" src="assets/img/dp.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Kiran
                                                Patel</a> <span class="datetime">9:26</span>
                                            <span class="body-out"> Great! Thanks. </span>
                                        </div>
                                    </div>
                                    <div class="post in">
                                        <img class="avatar" alt="" src="assets/img/user/user5.jpg"/>
                                        <div class="message">
                                            <span class="arrow"></span> <a href="javascript:;" class="name">Jacob
                                                Ryan</a> <span class="datetime">9:27</span>
                                            <span class="body"> it is my pleasure :) </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-sidebar-chat-user-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn deepPink-bgcolor">
                                                <i class="fa fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Doctor Chat -->
                    <!-- Start Setting Panel -->
                    <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
                        <div class="chat-sidebar-settings-list slimscroll-style">
                            <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                            <div class="chatpane inner-content ">
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Position</div>
                                        <div class="setting-set">
                                            <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                <option value="left" selected="selected">Left</option>
                                                <option value="right">Right</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Header</div>
                                        <div class="setting-set">
                                            <select class="page-header-option form-control input-inline input-sm input-small ">
                                                <option value="fixed" selected="selected">Fixed</option>
                                                <option value="default">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Sidebar Menu</div>
                                        <div class="setting-set">
                                            <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                <option value="accordion" selected="selected">Accordion</option>
                                                <option value="hover">Hover</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Footer</div>
                                        <div class="setting-set">
                                            <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                <option value="fixed">Fixed</option>
                                                <option value="default" selected="selected">Default</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Notifications</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-1">
                                                    <input type="checkbox" id="switch-1"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Show Online</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-7">
                                                    <input type="checkbox" id="switch-7"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Status</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-2">
                                                    <input type="checkbox" id="switch-2"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">2 Steps Verification</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-3">
                                                    <input type="checkbox" id="switch-3"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                <div class="settings-list">
                                    <div class="setting-item">
                                        <div class="setting-text">Location</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-4">
                                                    <input type="checkbox" id="switch-4"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Save Histry</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-5">
                                                    <input type="checkbox" id="switch-5"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="setting-item">
                                        <div class="setting-text">Auto Updates</div>
                                        <div class="setting-set">
                                            <div class="switch">
                                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                       for="switch-6">
                                                    <input type="checkbox" id="switch-6"
                                                           class="mdl-switch__input" checked>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
    <?php include('footer.php'); ?>
    <!-- end footer -->
</div>
</body>
<!-- start js include path -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/popper/popper.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- morris chart -->
<!--<script src="assets/plugins/morris/morris.min.js"></script>-->
<!--<script src="assets/plugins/morris/raphael-min.js"></script>-->
<!--<script src="assets/js/pages/chart/morris/morris_chart_data.js"></script>-->
<!-- Common js-->
<script src="assets/js/app.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/theme-color.js"></script>
<!-- Material -->
<script src="assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="assets/js/pages/ui/animations.js"></script>
<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-jvectormap-2.0.3.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-jvectormap-world-mill.js"></script>
<script type="text/javascript" src="assets/js/d3.js"></script>
<script type="text/javascript" src="assets/js/c3.js"></script>

<script>
    $("#page-top-chart-area__energy-chart").mCustomScrollbar({
        axis: "x" // horizontal scrollbar
    });
</script>

<script>
    $("#page-top-chart-area__Temprature-chart").mCustomScrollbar({
        axis: "x" // horizontal scrollbar
    });
</script>

<script>
    $("#page-top-chart-area__Accessing-chart").mCustomScrollbar({
        axis: "x" // horizontal scrollbar
    });
</script>

<script>
    $("#page-top-chart-area__water-chart").mCustomScrollbar({
        axis: "x" // horizontal scrollbar
    });
</script>

<!--Total energy consumption-->
<script>


    var chart = c3.generate({
        bindto: '#energy-chart',
        data: {
            columns: [
                ['March', 500, 7000, 9750, 5150, 5440, 9000, 7050, 8000, 14500, 4000, 13400, 7500, 12750, 8350, 8500, 7000, 13800, 11800, 8100, 700, 12500, 7000, 4200, 2900, 3000, 12110, 5400, 9000, 11200, 2500, 1000],
                ['April', 1400, 8500, 500, 6200, 5900, 4000, 12000, 1600, 8000, 5500, 12100, 8100, 7000, 8200, 13900, 4500, 11100, 9000, 10900, 3510, 8500, 2300, 3500, 9200, 4400]
            ],
            axes: {
                April: 'y2'
            },
            types: {
                March: 'area-spline',
                April: 'area-spline'
            },
            colors: {
                March: '#ffba00',
                April: '#00cfaa'
            },
            tooltip: {
                format: {
                    title: function (d) {
                        return 'Data ' + d;
                    },
                    value: function (value, ratio, id) {
                        var format = id === 'data1' ? d3.format(',') : d3.format('$');
                        return format(value);
                    }
//            value: d3.format(',') // apply this format to both y and y2
                }
            }
        },
        axis: {
            x: {
                label: 'Date'
            },
            y: {
                label: 'Energy',
                tick: {
                    format: d3.format("s")
                }
            }
        }
    });
</script>

<!-- Temprature control -->
<script>


    var chart = c3.generate({
        bindto: '#Temprature-chart',
        data: {
            columns: [
                ['March', 500, 7000, 9750, 5150, 5440, 9000, 7050, 8000, 14500, 4000, 13400, 7500, 12750, 8350, 8500, 7000, 13800, 11800, 8100, 700, 12500, 7000, 4200, 2900, 3000, 12110, 5400, 9000, 11200, 2500, 1000],
                ['April', 1400, 8500, 500, 6200, 5900, 4000, 12000, 1600, 8000, 5500, 12100, 8100, 7000, 8200, 13900, 4500, 11100, 9000, 10900, 3510, 8500, 2300, 3500, 9200, 4400]
            ],
            axes: {
                April: 'y2'
            },
            types: {
                March: 'area-spline',
                April: 'area-spline'
            },
            colors: {
                March: '#ff4765',
                April: '#006656'
            },
            tooltip: {
                format: {
                    title: function (d) {
                        return 'Data ' + d;
                    },
                    value: function (value, ratio, id) {
                        var format = id === 'data1' ? d3.format(',') : d3.format('$');
                        return format(value);
                    }
//            value: d3.format(',') // apply this format to both y and y2
                }
            }
        },
        axis: {
            x: {
                label: 'Date'
            },
            y: {
                label: 'Temprature',
                tick: {
                    format: d3.format("s")
                }
            }
        }
    });
</script>

<!-- Room accessing -->
<script>


    var chart = c3.generate({
        bindto: '#Accessing-chart',
        data: {
            columns: [
                ['March', 500, 7000, 9750, 5150, 5440, 9000, 7050, 8000, 14500, 4000, 13400, 7500, 12750, 8350, 8500, 7000, 13800, 11800, 8100, 700, 12500, 7000, 4200, 2900, 3000, 12110, 5400, 9000, 11200, 2500, 1000],
                ['April', 1400, 8500, 500, 6200, 5900, 4000, 12000, 1600, 8000, 5500, 12100, 8100, 7000, 8200, 13900, 4500, 11100, 9000, 10900, 3510, 8500, 2300, 3500, 9200, 4400]
            ],
            axes: {
                April: 'y2'
            },
            types: {
                March: 'area-spline',
                April: 'area-spline'
            },
            colors: {
                March: '#00CED1',
                April: '#7B68EE'
            },
            tooltip: {
                format: {
                    title: function (d) {
                        return 'Data ' + d;
                    },
                    value: function (value, ratio, id) {
                        var format = id === 'data1' ? d3.format(',') : d3.format('$');
                        return format(value);
                    }
//            value: d3.format(',') // apply this format to both y and y2
                }
            }
        },
        axis: {
            x: {
                label: 'Date'
            },
            y: {
                label: 'Accessing',
                tick: {
                    format: d3.format("s")
                }
            }
        }
    });
</script>

<!-- Total water consumption -->
<script>
    var chart = c3.generate({
        bindto: '#water-chart',
        data: {
            columns: [
                ['March', 500, 7000, 9750, 5150, 5440, 9000, 7050, 8000, 14500, 4000, 13400, 7500, 12750, 8350, 8500, 7000, 13800, 11800, 8100, 700, 12500, 7000, 4200, 2900, 3000, 12110, 5400, 9000, 11200, 2500, 1000],
                ['April', 1400, 8500, 500, 6200, 5900, 4000, 12000, 1600, 8000, 5500, 12100, 8100, 7000, 8200, 13900, 4500, 11100, 9000, 10900, 3510, 8500, 2300, 3500, 9200, 4400]
            ],
            axes: {
                April: 'y2'
            },
            types: {
                March: 'area-spline',
                April: 'area-spline'
            },
            colors: {
                March: '#00008B',
                April: '#00FF7F'
            },
            tooltip: {
                format: {
                    title: function (d) {
                        return 'Data ' + d;
                    },
                    value: function (value, ratio, id) {
                        var format = id === 'data1' ? d3.format(',') : d3.format('$');
                        return format(value);
                    }
//            value: d3.format(',') // apply this format to both y and y2
                }
            }
        },
        axis: {
            x: {
                label: 'Date'
            },
            y: {
                label: 'Water',
                tick: {
                    format: d3.format("s")
                }
            }
        }
    });
</script>
</html>
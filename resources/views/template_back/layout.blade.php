{{-- @extends('template_back.content')
@section('content') --}}

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Azira -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon --->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Bootstrap css -->
		<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

		<!--- Style css --->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/plugins.css" rel="stylesheet">

		<!--- Icons css --->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini ltr">

		<!-- Loader -->
		<div id="global-loader">
			<img src="../assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
        <div class="main-header side-header sticky nav nav-item bg-primary">
            <div class="container-fluid main-container">
                <div class="main-header-left ">
                    <div class="app-sidebar__toggle mobile-toggle" data-bs-toggle="sidebar">
                        <a class="open-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="menu-outline"></i></a>
                        <a class="close-toggle"   href="javascript:void(0);"><i class="header-icons" data-eva="close-outline"></i></a>
                    </div>
                    <div class="responsive-logo">
                        <a href="/" class="header-logo"><img src="{{asset('')}}back/img/brand/logo.png" class="logo-11"></a>
                        <a href="/" class="header-logo"><img src="{{asset('')}}back/img/brand/logo-white.png" class="logo-1"></a>
                    </div>
                  
                </div>
                <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button>
                <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0  mg-lg-s-auto">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="main-header-right">
                            <div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button type="reset" class="btn btn-default">
                                                <i class="fas fa-times"></i>
                                            </button>
                                            <button type="submit" class="btn btn-default nav-link">
                                                <i class="fe fe-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <li class="dropdown nav-item main-layout">
                                <a class="new theme-layout nav-link-bg layout-setting" >
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </li>
                            <div class="nav nav-item  navbar-nav-right mg-lg-s-auto">
                                <div class="nav-item full-screen fullscreen-button">
                                    <a class="new nav-link full-screen-link"   href="javascript:void(0);"><i class="fe fe-maximize"></i></span></a>
                                </div>
                                
                                <div class="dropdown main-profile-menu nav nav-item nav-link">
                                    <a class="profile-user d-flex" href=""><img src="{{asset('')}}back/user/al.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>
    
                                    <div class="dropdown-menu">
                                        <div class="main-header-profile header-img">
                                            {{-- <td><img width="100px" height="60px" class="rounded-5" src="@if($dt->img) {{asset('')}}images/user/{{$dt->img}} @else {{asset('')}}images/no-user.png @endif" style="object-fit:cover"> </td> --}}
                                            <div class="main-img-user"><img src="{{asset('')}}back/user/al.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"></div>
                                            <h6>hello</h6>
                                            <span>hay</span>
    
                                        </div>
                                        <!-- <a class="dropdown-item" href=""><i class="far fa-user"></i> My Profile</a>
                                        <a class="dropdown-item" href=""><i class="far fa-clock"></i> Activity Logs</a> -->
                                        <form method="POST" action="">
                                            @csrf
                                            <div class="row mb-3 px-3"> 
                                                <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Sign Out</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="dropdown main-header-message right-toggle">
                                    <!-- <a class="nav-link pe-0" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                                        <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                                    </a> -->
                                    <a class="nav-link pe-0">
                                        <i class="ion ion-md-menu tx-20 bg-transparent"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- page -->
	   <div class="page custom-index">

        @include('template_back.sidebar')
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                @include('template_back.navheader')

				@yield('isi')
				</div>
				<!-- /container -->
			</div>
			<!-- /main-content -->

		<!--Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0">
				<div class="panel-body tabs-menu-body p-0 border-0">
					<ul class="Date-time">
						<li class="time">
							<h1 class="animated ">21:00</h1>
							<p class="animated ">Sat,October 1st 2029</p>
						</li>
					</ul>
					<div class="card-body latest-tasks">
						<h3 class="events-title"><span>Events For Week </span></h3>
						<div class="event">
							<div class="Day">Monday 20 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Tuesday 21 Jan</div>
							<a   href="javascript:void(0);">No Events Today</a>
						</div>
						<div class="event">
							<div class="Day">Wednessday 22 Jan</div>
							<div class="tasks">
								<div class=" task-line primary">
									<a   href="javascript:void(0);" class="label">
										XML Import &amp; Export
									</a>
									<div class="time">
										12:00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input checked="" type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line danger">
									<a   href="javascript:void(0);" class="label">
										Connect API to pages
									</a>
									<div class="time">
										08:00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Thursday 23 Jan</div>
							<div class="tasks">
								<div class="task-line success">
									<a   href="javascript:void(0);" class="label">
										Create Wireframes
									</a>
									<div class="time">
										06:20 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="Day">Friday 24 Jan</div>
							<div class="tasks">
								<div class="task-line warning">
									<a   href="javascript:void(0);" class="label">
										Test new features in tablets
									</a>
									<div class="time">
										02: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks">
								<div class="task-line teal">
									<a   href="javascript:void(0);" class="label">
										Design Evommerce
									</a>
									<div class="time">
										10: 00 PM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
							<div class="tasks mb-0">
								<div class="task-line purple">
									<a   href="javascript:void(0);" class="label">
										Fix Validation Issues
									</a>
									<div class="time">
										12: 00 AM
									</div>
								</div>
								<div class="checkbox">
									<label class="check-box">
										<label class="ckbox"><input type="checkbox"><span></span></label>
									</label>
								</div>
							</div>
						</div>
						<div class="d-flex pagination wd-100p">
							<a   href="javascript:void(0);">Previous</a>
							<a   href="javascript:void(0);" class="ms-auto">Next</a>
						</div>
					</div>
					<div class="card-body border-top border-bottom">
						<div class="row">
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-20 m-0 leading-tight"></i></a>
								<div>Inbox</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-tune fs-20 m-0 leading-tight"></i></a>
								<div>Settings</div>
							</div>
							<div class="col-4 text-center">
								<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-20 m-0 leading-tight"></i></a>
								<div>Sign out</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Footer opened -->
		<div class="main-footer ht-45">
			<div class="container-fluid pd-t-0-f ht-100p">
				<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</div>
		<!-- page closed -->

		<!--- Back-to-top --->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js --->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!--- Datepicker js --->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="assets/plugins/bootstrap/popper.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- Ionicons js --->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!--- Chart bundle min js --->
		<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!--- JQuery sparkline js --->
		<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Internal Sampledata js --->
		<script src="assets/js/chart.flot.sampledata.js"></script>

		<!--- Eva-icons js --->
		<script src="assets/js/eva-icons.min.js"></script>

		<!--- Moment js --->
		<script src="assets/plugins/moment/moment.js"></script>

		<!--- Perfect-scrollbar js --->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!--- Sidebar js --->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>

		<!--- sticky js --->
		<script src="assets/js/sticky.js"></script>

		<!-- right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

		<!-- Morris js -->
		<script src="assets/plugins/raphael/raphael.min.js"></script>
		<script src="assets/plugins/morris.js/morris.min.js"></script>

		<!--- Scripts js --->
		<script src="assets/js/script.js"></script>

		<!--- Index js --->
		<script src="assets/js/index.js"></script>

		<!--themecolor js-->
		<script src="assets/js/themecolor.js"></script>

		<!--swither-styles js-->
		<script src="assets/js/swither-styles.js"></script>

		<!--- Custom js --->
		<script src="assets/js/custom.js"></script>

	</body>
</html>
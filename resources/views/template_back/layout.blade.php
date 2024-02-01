
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

		<!-- page -->
	   <div class="page custom-index">

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
			<div class="sticky">
				<aside class="app-sidebar sidebar-scroll">
					<div class="main-sidebar-header active">
						<a class="desktop-logo logo-light active" href="index.html"><img src="../assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
						<a class="desktop-logo logo-dark active" href="index.html"><img src="../assets/img/brand/logo-white.png" class="main-logo" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="../assets/img/brand/favicon.png" alt="logo"></a>
						<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="../assets/img/brand/favicon-white.png" alt="logo"></a>
					</div>
					<div class="main-sidemenu">
						<div class="main-sidebar-loggedin">
							<div class="app-sidebar__user">
								<div class="dropdown user-pro-body text-center">
									<div class="user-pic">
										<img src="../assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded">
									</div>
									<div class="user-info">
										<h6 class=" mb-0 text-dark">Petey Cruiser</h6>
										<span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
									</div>
								</div>
							</div>
						</div>
						<div class="sidebar-navs">
							<ul class="nav  nav-pills-circle">
								<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" aria-describedby="tooltip365540">
									<a class="nav-link text-center m-2">
										<i class="fe fe-settings"></i>
									</a>
								</li>
								<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Chat" aria-describedby="tooltip143427">
									<a class="nav-link text-center m-2">
										<i class="fe fe-mail"></i>
									</a>
								</li>
								<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Followers">
									<a class="nav-link text-center m-2">
										<i class="fe fe-user"></i>
									</a>
								</li>
								<li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Logout">
									<a class="nav-link text-center m-2">
										<i class="fe fe-power"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
						<ul class="side-menu ">
							<li class="slide">
								<a class="side-menu__item" href="index.html"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide"   href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Data Buku</span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li class="side-menu__label1"><a href="javascript:void(0);">Data Buku</a></li>
									<li><a class="slide-item" href="">Kategori Buku</a></li>
									<li><a class="slide-item" href="">Koleksi Pribadi</a></li>
									<li><a class="slide-item" href="">Ulasan Buku</a></li>
								</ul>
							</li>
                            <li class="slide">
								<a class="side-menu__item" href=""><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Data Pengguna</span></a>
							</li>
						</ul>

						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div>
							<h4 class="content-title mb-2">Hi, welcome back!</h4>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
									<li class="breadcrumb-item active" aria-current="page">Project</li>
								</ol>
							</nav>
						</div>
						<div class="d-flex my-auto">
							<div class=" d-flex right-page">
								<div class="d-flex justify-content-center me-5">
									<div class="">
										<span class="d-block">
											<span class="label ">EXPENSES</span>
										</span>
										<span class="value">
											$53,000
										</span>
									</div>
									<div class="ms-3 mt-2">
										<span class="sparkline_bar"></span>
									</div>
								</div>
								<div class="d-flex justify-content-center">
									<div class="">
										<span class="d-block">
											<span class="label">PROFIT</span>
										</span>
										<span class="value">
											$34,000
										</span>
									</div>
									<div class="ms-3 mt-2">
										<span class="sparkline_bar31"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- main-content-body -->
					<div class="main-content-body">
						<!-- row -->
						<div class="row row-sm ">
							<div class="col-md-12 col-xl-12">
								<div class="card overflow-hidden review-project">
									<div class="card-body">
										<div class="d-flex justify-content-between">
											<h4 class="card-title mg-b-10">Data Pengguna</h4>
											<i class="mdi mdi-dots-horizontal text-gray"></i>
										</div>
										<p class="tx-12 text-muted mb-3">A project is an activity to meet the creation of a unique product or service and thus activities that are undertaken to accomplish routine activities cannot be considered projects. <a href="">Learn more</a></p>
										<div class="table-responsive mb-0">
											<table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
												<thead>
													<tr>
														<th>Judul buku</th>
														<th>Penulis</th>
														<th>Penerbit</th>
														<th>Tahun Terbit</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="project-contain">
																<h6 class="mb-1 tx-13">Angular Project</h6>
															</div>
														</td>
														<td>
															<div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/2.jpg"></div>
														</td>
														<td>Web Design</td>
														<td>01 Jan 2020</td>
														<td><span class="badge bg-primary-gradient">Ongoing</span></td>
														<td>15 March 2020</td>
													</tr>
													<tr>
														<td>
															<div class="project-contain">
																<h6 class="mb-1 tx-13">PHP Project</h6>
															</div>
														</td>
														<td>
															<div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"></div>
														</td>
														<td>Web Development</td>
														<td>03 March 2020</td>
														<td><span class="badge bg-success-gradient">Ongoing</span></td>
														<td>15 Jun 2020</td>
													</tr>
													<tr>
														<td>
															<div class="project-contain">
																<h6 class="mb-1 tx-13">Python</h6>
															</div>
														</td>
														<td>
															<div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/3.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/12.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
														</td>
														<td>Web Development</td>
														<td>15 March 2020</td>
														<td><span class="badge bg-danger-gradient">Pending</span></td>
														<td>15 March 2020</td>
													</tr>
													<tr>
														<td>
															<div class="project-contain">
																<h6 class="mb-1 tx-13">Android App</h6>
															</div>
														</td>
														<td>
															<div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/7.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/6.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/16.jpg"></div>
														</td>
														<td>Android</td>
														<td>15 March 2020</td>
														<td><span class="badge bg-success-gradient">Ongoing</span></td>
														<td>15 March 2020</td>
													</tr>
													<tr>
														<td>
															<div class="project-contain">
																<h6 class="mb-1 tx-13">Mobile Application</h6>
															</div>
														</td>
														<td>
															<div class="image-grouped"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/8.jpg"><img class="profile-img brround " alt="profile image" src="../assets/img/faces/11.jpg"><img class="profile-img brround" alt="profile image" src="../assets/img/faces/15.jpg"></div>
														</td>
														<td>Android</td>
														<td>15 March 2020</td>
														<td><span class="badge bg-pink-gradient">Ongoing</span></td>
														<td>15 March 2020</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /row -->

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
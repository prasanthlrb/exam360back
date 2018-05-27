<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Admina Bootstrap Admin. This is the demo of Admina. You need to purchase a license for legal use!">
		<meta name="author" content="DownTown Themes">

		<link rel="shortcut icon" href="assets/img/icon.png">

		<title>Admina - Responsive Admin Template</title>

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!--Icon fonts css-->
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/plugins/ionicon/css/ionicons.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-reset.css" rel="stylesheet">

		<!--Animation css-->
		<link href="assets/css/animate.css" rel="stylesheet">

		<!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

		<!-- sweet alerts -->
		<link href="assets/plugins/sweet-alert/sweet-alert.min.css" rel="stylesheet">

		<link href="assets/plugins/toggles/toggles.css" rel="stylesheet" />

		<!-- Custom styles -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/helper.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet" />
		
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>

		<!-- Header -->
		<header class="top-head container-fluid navbar-fixed-top">
			<!-- logo -->
			<div class="logo hidden-xs">
				<a href="index-2.html" class="logo-expanded"> <img src="assets/img/icon.png" alt="logo"> <span class="nav-text">EXAM360</span> </a>
			</div>
			<!-- end logo -->
			<button type="button" class="navbar-toggle pull-left">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-toggle ion-navicon-round"></span>
			</button>

			<!-- Search -->
			<form role="search" class="navbar-left app-search pull-left hidden-xs">
				<input type="text" placeholder="Search..." class="form-control">
			</form>
			<!-- End Search -->

			<!-- Right navbar -->
			<ul class="list-inline navbar-right top-menu top-right-menu">
				<!-- Messages -->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="fa fa-envelope-o "></i> <span class="badge badge-sm up bg-purple count">4</span> </a>
					<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
						<li>
							<p>
								Messages
							</p>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><img src="assets/img/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Hammond Burke</strong></span> <span class="media-body block">New tasks
								<br>
								<small class="text-muted">3 seconds ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><img src="assets/img/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Ray Shannon</strong></span> <span class="media-body block">New file add
								<br>
								<small class="text-muted">5 minutes ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><img src="assets/img/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Hammond Burke</strong></span> <span class="media-body block">New file add
								<br>
								<small class="text-muted">12 minutes ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><img src="assets/img/avatar-5.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span> <span class="block"><strong>Ray Shannon</strong></span> <span class="media-body block">New tasks needs to be done
								<br>
								<small class="text-muted">15 minutes ago</small></span> </a>
						</li>
						<li>
							<p class="text-center">
								<a href="inbox.html">All Messages</a>
							</p>
						</li>
					</ul>
				</li>
				<!-- End messages -->
				<!-- Notification -->
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="fa fa-bell-o"></i> <span class="badge badge-sm up bg-pink count">5</span> </a>
					<ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
						<li class="noti-header">
							<p>
								Notifications
							</p>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span> <span>New user add
								<br>
								<small class="text-muted">2 minutes ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span> <span>Use file add
								<br>
								<small class="text-muted">4 minutes ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span> <span>Send project demo files to client
								<br>
								<small class="text-muted">2 hour ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><i class="fa fa-cloud-upload fa-2x text-success"></i></span> <span>Download project
								<br>
								<small class="text-muted">3 hour ago</small></span> </a>
						</li>
						<li>
							<a href="#"> <span class="pull-left"><i class="fa fa-cloud-download fa-2x text-warning"></i></span> <span>Upload projects
								<br>
								<small class="text-muted">5 hour ago</small></span> </a>
						</li>

						<li>
							<p class="text-center">
								<a href="#">All notifications</a>
							</p>
						</li>
					</ul>
				</li>
				<!-- End Notification -->

				<!-- User Menu Dropdown -->
				<li class="dropdown text-center">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <img alt="" src="assets/img/avatar-2.jpg" class="img-circle profile-img thumb-sm"> <span class="username">Ray Shannon </span> <span class="caret"></span> </a>
					<ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
						<li>
							<a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-cog"></i> Settings</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-bell"></i><span class="pull-left"> Issues</span> <span class="label label-info pull-right mail-info">5</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-sign-out"></i> Log Out</a>
						</li>
					</ul>
				</li>
				<!-- End User Menu Dropdown -->
			</ul>
			<!-- End Right Navbar -->

		</header>
		<!-- End Header -->

		<!-- Aside Menu -->
		<aside class="left-panel">

			<!-- Navbar -->
			<nav class="navigation">
				<ul class="list-unstyled">
					<li class="active">
						<a href="/dashboard"><i class="ion-home"></i> <span class="nav-label">Dashboard</span></a>
					</li>
					
					<li class="has-submenu">
						<a href="#"><i class="fa fa-institution"></i> <span class="nav-label">INSTITUTE</span> <span class="caret pull-right m-t-10"></span></a>
						<ul class="list-unstyled">
							<li>
								<a href="/institute">Create Institute</a>
							</li>
							<li>
								<a href="/institute_list">Institute List</a>
							</li>
							<li>
								<a href="/inst_pack">Institute Pack Details</a>
							</li>
							<li>
								<a href="#">Institute Usage Details</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#"><i class="fa fa-pencil-square-o"></i> <span class="nav-label">Questions</span> <span class="caret pull-right m-t-10"></span></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Exam Title</a>
							</li>
							<li>
								<a href="#">Subject / Category</a>
							</li>
							<li>
								<a href="#">Unit / SubCategory</a>
							</li>
							<li>
								<a href="#">Add Questions</a>
							</li>
							
						</ul>
					</li>

				

					<li class="has-submenu">
						<a href="#"><i class="ion-settings"></i> <span class="nav-label">Setting</span> <span class="caret pull-right m-t-10"></span></a>
						<ul class="list-unstyled">
							<li>
								<a href="inbox.html">Profile</a>
							</li>
							<li>
								<a href="/package">Package</a>
							</li>
							
						</ul>
					</li>

					
				</ul>
			</nav>
			<!-- End Navbar -->

		</aside>
		<!-- End Aside -->

		<!--Main Content -->
		<section class="content">

			@section('body')
			@show


			<!-- Footer -->
			<footer class="footer">
				20<?php echo date('y')?> © LRB TECH
			</footer>
			<!-- End Footer -->

		</section>

		<div class="demo-options">
			<div class="demo-options-icon">
				<i class="fa fa-cog"></i>
			</div>
			<div class="demo-heading">
				Demo Settings
			</div>

			<div class="demo-body">

				<label class="control-label">Fixed Topnav</label>
				<div class="control-label">
					<div class="toggle toggle-default active fixedTop"></div>
				</div>

			</div>

			<div class="demo-body">
				<div class="option-title">
					Topnav
				</div>
				<ul id="demo-header-color" class="demo-color-list">
					<li>
						<span class="themecolor default"></span>
					</li>
					<li>
						<span class="themecolor dark"></span>
					</li>
					<li>
						<span class="themecolor red"></span>
					</li>
					<li>
						<span class="themecolor green"></span>
					</li>
					<li>
						<span class="themecolor yellow"></span>
					</li>
					<li>
						<span class="themecolor pink"></span>
					</li>
					<li>
						<span class="themecolor purple"></span>
					</li>
					<li>
						<span class="themecolor acqua"></span>
					</li>
					<li>
						<span class="themecolor grey"></span>
					</li>
					<li>
						<span class="themecolor white"></span>
					</li>

				</ul>
			</div>

		</div>

		<!-- Basic Plugins -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/modernizr.min.js"></script>
		<script src="assets/js/pace.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/jquery.scrollTo.min.js"></script>
		<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="assets/plugins/chat/moment-2.2.1.js"></script>
		<script src="assets/plugins/toggles/toggles.min.js"></script>

		<!-- Counter up -->
		<script src="assets/js/waypoints.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>

		<!-- jQuery Flot Chart-->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>

		<!-- Morris Chart
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/raphael.min.js"></script>
		<script src="assets/plugins/morris/morris.init.js"></script> -->

		<!-- Sparkline -->
		<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
		<script src="assets/js/sparkline_demo.js" type="text/javascript"></script>

		<!-- Sweet Alerts -->
		<script src="assets/plugins/sweet-alert/sweet-alert.min.js"></script>
		<script src="assets/plugins/sweet-alert/sweet-alert.init.js"></script>

<script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>
		<!-- Todo -->
		<script src="assets/js/todo.js"></script>

		<!-- Site Script -->
		<script src="assets/js/app.js"></script>
		<script src="assets/js/script.js"></script>

		<!-- Demo Swicth Color -->
		<script src="assets/js/demo_color.js"></script>

		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#datatable').dataTable();
			});
		</script>

	</body>
</html>

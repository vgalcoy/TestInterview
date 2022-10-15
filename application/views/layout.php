<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Pemrograman Web 2</title>
		
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.googleapis.com.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace.min.css');?>" class="ace-main-stylesheet" id="main-ace-style" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-skins.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ace-rtl.min.css');?>">
	<script type="text/javascript" src="<?php echo base_url('assets/js/ace-extra.min.jss');?>"></script>
	
</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Ace Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url('assets/images/avatars/user.jpg'); ?>" alt="Jason's Photo" />
								<span class="user-info">
									<small>Selamat datang,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Ubah Password
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text">
								Menu 1
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 1.1
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 1.2
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Menu 2 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 2.1
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 2.2
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Menu 3 </span>
							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>
						<ul class="submenu">
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 3.1
								</a>
								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="#">
									<i class="menu-icon fa fa-caret-right"></i>
									Sub Menu 3.2
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Dashboard
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>
							</h1>
						</div><!-- /.page-header -->
						<div class="row">
							<div class="col-xs-12">
									<div class="alert alert-block alert-info">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
										<i class="ace-icon fa fa-check green"></i>
										Selamat datang
										<strong class="green">
											<b>Admin</b>
										</strong>,<br><br>
										Berusaha dan berdoa
									</div>
									<div class="widget-header widget-header-flat widget-header-small">
										<h5 class="widget-title">
											<i class="ace-icon fa fa-signal"></i>
											Kelola Halaman Web
										</h5>
									</div>
									<br>
									<div class="widget-body">
										<div class="infobox infobox-green ">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-comments"></i>
											</div>
											<div class="infobox-data">
												<span class="infobox-data-number">0</span>
												<div class="infobox-content">Komentar &nbsp;
												+
													<span class="label label-info arrowed-right arrowed-in">New</span>
												</div>
											</div>
												<div class="stat stat-success">4</div>
										</div>
										<div class="infobox infobox-red">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-flask"></i>
											</div>
											<div class="infobox-data">
												<span class="infobox-data-number">0</span>
												<div class="infobox-content">Testimoni &nbsp;
												+
												<span class="label label-info arrowed-right arrowed-in">New</span>
												</div>
											</div>
												<div class="stat stat-success">5</div>
										</div>
										<div class="infobox infobox-orange2">
											<div class="infobox-icon">
												<i class="ace-icon fa fa-download"></i>
											</div>
											<div class="infobox-data">
												<span class="infobox-data-number">100</span>
												<div class="infobox-content"><i>pageviews</i></div>
											</div>
										</div>
									</div><!-- /.widget-body -->
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Wawan Gunawan, S.Kom., M.T.</span>
							Application &copy; 2018
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.custom.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.ui.touch-punch.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easypiechart.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.sparkline.index.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.pie.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flot.resize.min.js');?>"></script>
		
		<!-- ace scripts -->
		<script type="text/javascript" src="<?php echo base_url('assets/js/ace-elements.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/ace.min.js');?>"></script>
		
	</body>
</html>

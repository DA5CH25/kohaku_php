<?php 
require_once './models/Roles.dao.php' ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>KOHAKU</title>
</head>
<body>
<div class="main-container">
<div class="row gutters">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card h-100">
<div class="card-header">
		<h1>Lista de Alumnos</h1>
		</div>
		<div class="card-body pt-0 pb-0">
	<a class="badge badge-success" href="./views/modules/ingresar.php">Ingresar nuevo</a>
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Identificacion</th>
			<th>Tel.Fijo</th>
			<th>Celular</th>
			<th>Direccion</th>
			<th>Correo</th>
			<th colspan="2">Opciones</th>
		</tr>
		<?php foreach (RolesDAO::listarDatos() as $fila) { ?>
			<tr>
				<td><?= $fila[1] ?></td>
				<td><?= $fila[2] ?></td>
				<td><?= $fila[3] ?></td>
				<td><?= $fila[4] ?></td>
				<td><?= $fila[5] ?></td>
				<td><?= $fila[6] ?></td>
				<td><?= $fila[7] ?></td>
				<td><a class="badge badge-success" href="./views/modules/editar.php?id_usuario=<?=$fila[0]?>">Editar</a></td>
				<td><a class="badge badge-danger" href="./controllers/Roles.controlador.php?a=elim&id_usuario=<?=$fila[0]?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a></td>
			</tr>
		<?php } ?>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>

<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/le-rouge/design/table-hover.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:52:35 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Le Rouge Admin Template - Table Hover</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css" />

	</head>

	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav id="sidebar" class="sidebar-wrapper">
				
				<!-- Sidebar brand start  -->
				<div class="sidebar-brand">
					<a href="index.html" class="logo">
						<img src="img/logo.png" alt="Le Rouge Admin Dashboard" />
					</a>
				</div>
				<!-- Sidebar brand end  -->

				<!-- Sidebar content start -->
				<div class="sidebar-content">

					<!-- sidebar menu start -->
					<div class="sidebar-menu">
						<ul>
							<li class="header-menu">General</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-devices_other"></i>
									<span class="menu-text">Dashboards</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="index.html">Admin Dashboard</a>
										</li>
										<li>
											<a href="sales-dashboard.html">Sales Dashboard</a>
										</li>
										<li>
											<a href="crm-dashboard.html">CRM Dashboard</a>
										</li>
										<li>
											<a href="ecommerce-dashboard.html">Ecommerce Dashboard</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="chat.html">
									<i class="icon-message-circle"></i>
									<span class="menu-text">Chat</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-calendar1"></i>
									<span class="menu-text">Calendars</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="calendar.html">Daygrid View</a>
										</li>
										<li>
											<a href="calendar-external-draggable.html">External Draggable</a>
										</li>
										<li>
											<a href="calendar-google.html">Google Calendar</a>
										</li>
										<li>
											<a href="calendar-list-view.html">List View</a>
										</li>
										<li>
											<a href="calendar-selectable.html">Selectable</a>
										</li>
										<li>
											<a href="calendar-week-numbers.html">Week Numbers</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="contacts.html">
									<i class="icon-phone1"></i>
									<span class="menu-text">Contacts</span>
								</a>
							</li>
							<li>
								<a href="documents.html">
									<i class="icon-documents"></i>
									<span class="menu-text">Documents</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-layout"></i>
									<span class="menu-text">Layouts</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="default-layout.html">Default Layout</a>
										</li>
										<li>
											<a href="slim-sidebar.html">Slim Layout</a>
										</li>
										<li>
											<a href="card-options.html">Card Options</a>
										</li>
										<li>
											<a href="drag-drop-cards.html">Drag and Drop Cards</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-book-open"></i>
									<span class="menu-text">Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="account-settings.html">Account Settings</a>
										</li>
										<li>
											<a href="blog.html">Blog</a>
										</li>
										<li>
											<a href="cards.html">Cards</a>
										</li>
										<li>
											<a href="datepickers.html">Datepickers</a>
										</li>
										<li>
											<a href="faq.html">Faq</a>
										</li>
										<li>
											<a href="invoice.html">Invoice</a>
										</li>
										<li>
											<a href="search-results.html">Search Results</a>
										</li>
										<li>
											<a href="timeline.html">Timeline</a>
										</li>
										<li>
											<a href="comments.html">Comments</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="pricing.html">
									<i class="icon-dollar-sign"></i>
									<span class="menu-text">Pricing Plans</span>
								</a>
							</li>
							<li>
								<a href="user-profile.html">
									<i class="icon-user1"></i>
									<span class="menu-text">User Profile</span>
								</a>
							</li>
							<li>
								<a href="tasks.html">
									<i class="icon-check-circle"></i>
									<span class="menu-text">Tasks</span>
								</a>
							</li>
							<li class="header-menu">Forms</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-edit1"></i>
									<span class="menu-text">Inputs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="form-inputs.html">Form Inputs</a>
										</li>
										<li>
											<a href="input-groups.html">Input Groups</a>
										</li>
										<li>
											<a href="check-radio.html">Check Boxes</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-file-text"></i>
									<span class="menu-text">Contact Forms</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="contact.html">Contact Form</a>
										</li>
										<li>
											<a href="contact2.html">Contact Form #2</a>
										</li>
										<li>
											<a href="contact3.html">Contact Form #3</a>
										</li>
										<li>
											<a href="contact4.html">Contact Form #4</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="bs-select.html">
									<i class="icon-pocket"></i>
									<span class="menu-text">BS Select</span>
								</a>
							</li>
							<li>
								<a href="editor.html">
									<i class="icon-edit-3"></i>
									<span class="menu-text">Editor</span>
								</a>
							</li>
							<li>
								<a href="input-masks.html">
									<i class="icon-eye-off"></i>
									<span class="menu-text">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="input-tags.html">
									<i class="icon-terminal"></i>
									<span class="menu-text">Input Tags</span>
								</a>
							</li>
							<li>
								<a href="range-sliders.html">
									<i class="icon-toggle-right"></i>
									<span class="menu-text">Range Sliders</span>
								</a>
							</li>
							<li>
								<a href="wizard.html">
									<i class="icon-triangle"></i>
									<span class="menu-text">Wizards</span>
								</a>
							</li>
							<li class="header-menu">UI Elements</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-list2"></i>
									<span class="menu-text">Accordions</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="accordion.html">Accordion</a>
										</li>
										<li>
											<a href="accordion-icons.html">Accordion Icons</a>
										</li>
										<li>
											<a href="accordion-arrows.html">Accordion Arrows</a>
										</li>
										<li>
											<a href="accordion-lg.html">Accordion Large</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-disc"></i>
									<span class="menu-text">Buttons</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="buttons.html">Buttons</a>
										</li>
										<li>
											<a href="button-groups.html">Button Groups</a>
										</li>
										<li>
											<a href="dropdowns.html">Dropdowns</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="carousel.html">
									<i class="icon-toll"></i>
									<span class="menu-text">Carousels</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-star2"></i>
									<span class="menu-text">Components</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="jumbotron.html">Jumbotron</a>
										</li>
										<li>
											<a href="labels-badges.html">Labels &amp; Badges</a>
										</li>
										<li>
											<a href="list-items.html">List Items</a>
										</li>
										<li>
											<a href="pagination.html">Paginations</a>
										</li>
										<li>
											<a href="progress.html">Progress Bars</a>
										</li>
										<li>
											<a href="pills.html">Pills</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="gallery.html">
									<i class="icon-image"></i>
									<span class="menu-text">Gallery</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-box"></i>
									<span class="menu-text">Grid</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="grid.html">Grid</a>
										</li>
										<li>
											<a href="grid-doc.html">Grid Doc</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="icons.html">
									<i class="icon-timer"></i>
									<span class="menu-text">Icons</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-image"></i>
									<span class="menu-text">Images</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="avatars.html">Avatars</a>
										</li>
										<li>
											<a href="media-objects.html">Media Objects</a>
										</li>
										<li>
											<a href="images.html">Thumbnails</a>
										</li>
										<li>
											<a href="text-avatars.html">Text Avatars</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="modals.html">
									<i class="icon-credit-card"></i>
									<span class="menu-text">Modals</span>
								</a>
							</li>
							<li>
								<a href="alerts.html">
									<i class="icon-bell"></i>
									<span class="menu-text">Notifications</span>
								</a>
							</li>
							<li>
								<a href="spinners.html">
									<i class="icon-circular-graph"></i>
									<span class="menu-text">Spinners</span>
								</a>
							</li>
							<li>
								<a href="tooltips.html">
									<i class="icon-change_history"></i>
									<span class="menu-text">Tooltips</span>
								</a>
							</li>
							<li>
								<a href="typography.html">
									<i class="icon-sort_by_alpha"></i>
									<span class="menu-text">Typography</span>
								</a>
							</li>
							<li class="header-menu">Tables</li>
							<li class="sidebar-dropdown active">
								<a href="#">
									<i class="icon-border_all"></i>
									<span class="menu-text">Tables</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="custom-tables.html">Custom Tables</a>
										</li>
										<li>
											<a href="default-table.html">Default Table</a>
										</li>
										<li>
											<a href="table-bordered.html">Table Bordered</a>
										</li>
										<li>
											<a href="table-hover.html" class="current-page">Table Hover</a>
										</li>
										<li>
											<a href="table-striped.html">Table Striped</a>
										</li>
										<li>
											<a href="table-small.html">Table Small</a>
										</li>
										<li>
											<a href="table-colors.html">Table Colors</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="data-tables.html">
									<i class="icon-border_all"></i>
									<span class="menu-text">Data Tables</span>
								</a>
							</li>
							<li class="header-menu">Graphs &amp; Maps</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-line-graph"></i>
									<span class="menu-text">Apex Graphs</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="area-graphs.html">Area Charts</a>
										</li>
										<li>
											<a href="bubble.html">Bubble Graphs</a>
										</li>
										<li>
											<a href="bar-graphs.html">Bar Charts</a>
										</li>
										<li>
											<a href="candlestick.html">Candlestick</a>
										</li>
										<li>
											<a href="column-graphs.html">Column Charts</a>
										</li>
										<li>
											<a href="donut-graphs.html">Donut Charts</a>
										</li>
										<li>
											<a href="line-graphs.html">Line Charts</a>
										</li>
										<li>
											<a href="mixed-graphs.html">Mixed Charts</a>
										</li>
										<li>
											<a href="pie-graphs.html">Pie Charts</a>
										</li>
										<li>
											<a href="radial-chart.html">Radial Graph</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="morris-graphs.html">
									<i class="icon-tonality"></i>
									<span class="menu-text">Morris Graphs</span>
								</a>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-map2"></i>
									<span class="menu-text">Maps</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="vector-maps.html">Vector Maps</a>
										</li>
										<li>
											<a href="google-maps.html">Google Maps</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="header-menu">Extra</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-airplay"></i>
									<span class="menu-text">Login</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="login.html">Login</a>
										</li>
										<li>
											<a href="signup.html">Signup</a>
										</li>
										<li>
											<a href="forgot-pwd.html">Forgot Password</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="sidebar-dropdown">
								<a href="#">
									<i class="icon-alert-triangle"></i>
									<span class="menu-text">Error Pages</span>
								</a>
								<div class="sidebar-submenu">
									<ul>
										<li>
											<a href="error.html">404</a>
										</li>
										<li>
											<a href="error2.html">505</a>
										</li>
									</ul>
								</div>
							</li>
							<li>
								<a href="coming-soon.html">
									<i class="icon-schedule"></i>
									<span class="menu-text">Coming Soon</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- sidebar menu end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- Page content start  -->
			<div class="page-content">

				<!-- Header start -->
				<header class="header">
					<div class="toggle-btns">
						<a id="toggle-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
						<a id="pin-sidebar" href="#">
							<i class="icon-list"></i>
						</a>
					</div>
					<div class="header-items">
						<!-- Custom search start -->
						<div class="custom-search">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>
						<!-- Custom search end -->

						<!-- Header actions start -->
						<ul class="header-actions">
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-box"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Tasks (05)
									</div>	
									<ul class="header-tasks">
										<li>
											<p>#20 - Dashboard UI<span>90%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
													<span class="sr-only">90% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#35 - Alignment Fix<span>60%</span></p>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													<span class="sr-only">60% Complete (success)</span>
												</div>
											</div>
										</li>
										<li>
											<p>#50 - Broken Button<span>40%</span></p>
											<div class="progress">
												<div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
									<i class="icon-bell"></i>
									<span class="count-label">8</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
									<div class="dropdown-menu-header">
										Notifications (40)
									</div>
									<ul class="header-notifications">
										<li>
											<a href="#">
												<div class="user-img away">
													<img src="img/user21.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Abbott</div>
													<div class="noti-details">Membership has been ended.</div>
													<div class="noti-date">Oct 20, 07:30 pm</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img busy">
													<img src="img/user10.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Braxten</div>
													<div class="noti-details">Approved new design.</div>
													<div class="noti-date">Oct 10, 12:00 am</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="user-img online">
													<img src="img/user6.png" alt="User">
												</div>
												<div class="details">
													<div class="user-title">Larkyn</div>
													<div class="noti-details">Check out every table in detail.</div>
													<div class="noti-date">Oct 15, 04:00 pm</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
									<span class="user-name">Julie Sweet</span>
									<span class="avatar">
										<img src="img/user24.png" alt="avatar">
										<span class="status busy"></span>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
									<div class="header-profile-actions">
										<div class="header-user-profile">
											<div class="header-user">
												<img src="img/user24.png" alt="Admin Template">
											</div>
											<h5>Julie Sweet</h5>
											<p>Admin</p>
										</div>
										<a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
										<a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
										<a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
									</div>
								</div>
							</li>
						</ul>						
						<!-- Header actions end -->
					</div>
				</header>
				<!-- Header end -->

				<!-- Page header start -->
				<div class="page-header">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item">Tables</li>
						<li class="breadcrumb-item active">Table Hover</li>
					</ol>

					<ul class="app-actions">
						<li>
							<a href="#" id="reportrange">
								<span class="range-text"></span>
								<i class="icon-chevron-down"></i>	
							</a>
						</li>
						<li>
							<a href="#">
								<i class="icon-export"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Page header end -->
				
				<!-- Main container start -->
				<div class="main-container">

					

				</div>
				<!-- Main container end -->

			</div>
			<!-- Page content end -->

		</div>
		<!-- Page wrapper end -->

		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from bootstrap.gallery/le-rouge/design/table-hover.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:52:35 GMT -->
</html>
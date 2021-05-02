<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="./vendor/img/fav.png" />

		<!-- Title -->
		<title>KOHAKU</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="./vendor/fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="./vendor/css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->
		<!-- DateRange css -->
		<link rel="stylesheet" href="./vendor/vendor/daterange/daterange.css" />

	</head>
    <body>
		<?php
		 //se incluye el archivo vista controlador
		 require_once "./controllers/viewsController.php";

		 $noTemplateViews = ["forgot-password", "register"];
 
		 //se instancia la vista controlado vistas o vt
		 $vt = new viewsController();
		 //queremos utilizar la funcion  obtener vista controlador
		 //se crea una NUEVA variala $vtA para poder hacer el includ de la variabl en el conenido SN ERROR
		 $vtA=$vt->get_views_controller();
		 ?>
			<div id="wrapper">

			<!-- Sidebar: MENU LATERAL -->
			<?php include "views/modules/lateral.php";?>

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">

					<!-- topbar: BUSCADOR-->
					<?php include "views/modules/cabecera.php"; ?>

					<!-- Begin Page Content -->
					<div class="container-fluid">

						<!-- Page Heading -->

						<!-- ICNCLUYE EL CONTENIDO DE LA VARIABLE VT-->
						<?php require_once $vtA; ?>

					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; Kohaku 2021</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->
		</div>
	</body> 


	<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="./vendor/js/jquery.min.js"></script>
		<script src="./vendor/js/bootstrap.bundle.min.js"></script>
		<script src="./vendor/js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="./vendor/vendor/slimscroll/slimscroll.min.js"></script>
		<script src="./vendor/vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="./vendor/vendor/daterange/daterange.js"></script>
		<script src="./vendor/vendor/daterange/custom-daterange.js"></script>

		<!-- Polyfill JS -->
		<script src="./vendor/vendor/polyfill/polyfill.min.js"></script>

		<!-- Apex Charts -->
		<script src="./vendor/vendor/apex/apexcharts.min.js"></script>
		<script src="./vendor/vendor/apex/admin/visitors.js"></script>
		<script src="vendor/apex/admin/deals.js"></script>
		<script src="./vendor/./vendor/vendor/apex/admin/income.js"></script>
		<script src="vendor/apex/admin/customers.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>

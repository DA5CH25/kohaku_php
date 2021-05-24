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


		<!-- Datepicker css -->
		<link rel="stylesheet" href="./vendor/vendor/datepicker/css/classic.css" />
		<link rel="stylesheet" href="./vendor/vendor/datepicker/css/classic.date.css" />

        
		<!-- Data Tables -->
		<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="./vendor/vendor/datatables/dataTables.bs4-custom.css" />
		<link href="./vendor/vendor/datatables/buttons.bs.css" rel="stylesheet" />
		
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
		<script src="./vendor/vendor/apex/admin/deals.js"></script>
		<script src="./vendor/vendor/apex/admin/income.js"></script>
		<script src="./vendor/vendor/apex/admin/customers.js"></script>

		
		<!-- Datepickers -->
		<script src="./vendor/vendor/datepicker/js/picker.js"></script>
		<script src="./vendor/vendor/datepicker/js/picker.date.js"></script>
		<script src="./vendor/vendor/datepicker/js/custom-picker.js"></script>
        
		
		<!-- Summernote CSS -->
		<link rel="stylesheet" href="./vendor/vendor/summernote/summernote-bs4.css" />

		<!-- Data Tables -->
		<script src="./vendor/vendor/datatables/dataTables.min.js"></script>
		<script src="./vendor/vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="./vendor/vendor/datatables/custom/custom-datatables.js"></script>
		<script src="./vendor/vendor/datatables/custom/fixedHeader.js"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="./vendor/vendor/datatables/buttons.min.js"></script>
		<script src="./vendor/vendor/datatables/jszip.min.js"></script>
		<script src="./vendor/vendor/datatables/pdfmake.min.js"></script>
		<script src="./vendor/vendor/datatables/vfs_fonts.js"></script>
		<script src="./vendor/vendor/datatables/html5.min.js"></script>
		<script src="./vendor/vendor/datatables/buttons.print.min.js"></script>

		
		<!-- Input Masks JS -->
		<script src="./vendor/vendor/input-masks/cleave.min.js"></script>
		<script src="./vendor/vendor/input-masks/cleave-phone.js"></script>
		<script src="./vendor/vendor/input-masks/cleave-custom.js"></script>

		<!-- Main JS -->
		<script src="./vendor/js/main.js"></script>

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
			<div class="page-wrapper">

			<!-- Sidebar: MENU LATERAL -->
			<?php include "views/modules/lateral.php";?>

			<!-- Content Wrapper -->
			<div id="content-wrapper" >

				<!-- Main Content -->
				<div class="page-content">

					<!-- topbar: BUSCADOR-->
					<?php include "views/modules/cabecera.php"; ?>

					<!-- Begin Page Content -->
					<div>

						<!-- Page Heading -->

						<!-- ICNCLUYE EL CONTENIDO DE LA VARIABLE VT-->
						<?php require_once $vtA; ?>

					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer >
					<div>
						<div >
							<span>Copyright &copy; Kohaku 2021</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->
		</div>
	</body> 



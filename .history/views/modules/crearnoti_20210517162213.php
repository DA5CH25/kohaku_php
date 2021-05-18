<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/le-rouge/design/editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:51:40 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap css -->
		<link rel="stylesheet" href="./vendor/css/bootstrap.min.css">
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="./vendor/fonts/style.css">
		<!-- Main css -->
		<link rel="stylesheet" href="./vendor/css/main.css">


    	<!-- DateRange css -->
		<link rel="stylesheet" href="./vendor/vendor/daterange/daterange.css" />

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="./vendor/vendor/summernote/summernote-bs4.css" />
	</head>
<body>
<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card m-0">
								<div class="card-header">
									<div class="card-title">Editor de noticias</div>
									<div class="card-sub-title">Espacio diseñado En este espacio podras crear las noticias que veran los usuarios.</div>
								</div>
								<div class="card-body">
									
									<div class="summernote"></div>

									<button class="btn btn-dark" type="button">Cancel</button>
									<button class="btn btn-primary" type="button">Save Changes</button>									

								</div>
							</div>

						</div>

					</div>
					<!-- Row end -->

				</div>
				<!-- Main container end -->
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

		<!-- Summernote JS -->
		<script src="./vendor/vendor/summernote/summernote-bs4.js"></script>


		<!-- Main Js Required -->
		<script src="./vendor/js/main.js"></script>

		<script>
			$(document).ready(function() {
				$('.summernote').summernote({
					height: 170,
					tabsize: 2
				});
			});
		</script>
	</body>
</html>
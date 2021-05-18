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
<div class="note-editor note-frame card">
<div class="note-dropzone"> 
 <div class="note-dropzone-message">
 </div>
 </div>
 <div class="note-toolbar card-header" role="toolbar">
 <div class="note-btn-group btn-group note-style">
 <div class="note-btn-group btn-group">
 <button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" role="button" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style">
 <i class="note-icon-magic">
 </i>
 </button>
 <div class="dropdown-menu dropdown-style" role="list" aria-label="Style">
 <a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p"><p>Normal</p></a>
 <a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote"> <blockquote class="blockquote">Blockquote</blockquote></a><a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre"><pre>Code</pre></a>
 <a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1"><h1>Header 1</h1></a>
 <a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2"><h2>Header 2</h2></a>
 <a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3"><h3>Header 3</h3></a>
 <a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4"><h4>Header 4</h4></a>
 <a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5"><h5>Header 5</h5></a>
 <button class="btn btn-dark" type="button">Cancel</button>
 <button class="btn btn-primary" type="button">Save Changes</button>
 </div>
 </div>
 </div>
 </div>
<div class="main-container">

					<!-- Row start -->
					<div class="row gutters">

						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card m-0">
								<div class="card-header">
									<div class="card-title">Editor de noticias</div>
									<div class="card-sub-title">Espacio diseñado donde podras crear las noticias que serán presentadas a los usuarios.</div>
								</div>
								<div class="card-body">
									
									<div class="summernote"></div>

									<button class="btn btn-dark" type="button">Cancelar</button>
									<button class="btn btn-primary" type="button">Guardar</button>									

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
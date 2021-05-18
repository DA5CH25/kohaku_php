<!doctype html>
<html lang="en">
	
<!-- Mirrored from bootstrap.gallery/le-rouge/design/editor.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Apr 2020 10:51:40 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png" />

		<!-- Title -->
		<title>Le Rouge Admin Template - WYSIWYG editor</title>


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

		<!-- Summernote CSS -->
		<link rel="stylesheet" href="vendor/summernote/summernote-bs4.css" />

	</head>

	<body>

<div class="row gutters">

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card m-0">
        <div class="card-header">
            <div class="card-title">WYSIWYG Editor</div>
            <div class="card-sub-title">Beautiful Javascript web editor that's easy to integrate for developers and your users will simply fall in love with its clean design.</div>
        </div>
        <div class="card-body">
            
            <div class="summernote"></div>

            <button class="btn btn-dark" type="button">Cancel</button>
            <button class="btn btn-primary" type="button">Save Changes</button>									

        </div>
    </div>

</div>

</div>
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

		<!-- Summernote JS -->
		<script src="vendor/summernote/summernote-bs4.js"></script>


		<!-- Main Js Required -->
		<script src="js/main.js"></script>

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
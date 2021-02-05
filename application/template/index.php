<!DOCTYPE html>
<html lang="en">
<head>
	<base href="http://localhost/spk_prodi/">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Aplikasi Penentuan Prodi</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="media/css/linearicons.css">
		<link rel="stylesheet" href="media/css/owl.carousel.css">
		<link rel="stylesheet" href="media/css/font-awesome.min.css">
		<link rel="stylesheet" href="media/css/nice-select.css">
		<link rel="stylesheet" href="media/css/magnific-popup.css">
		<link rel="stylesheet" href="media/css/bootstrap.css">
		<link rel="stylesheet" href="media/css/main.css">

		<link rel="stylesheet" href="media/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- bootstrap datepicker -->
  		<link rel="stylesheet" href="media/datepicker/datepicker3.css">
		<!-- text fonts -->
		<link rel="stylesheet" href="media/css/fonts.googleapis.com.css" />
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="media/css/colorbox.min.css" />
		<!-- styles -->
		<link rel="stylesheet" href="media/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	</head>
	<body class="dup-body">
		<div class="dup-body-wrap">
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<!-- <a href="index.html"><img src="img/logo.png" alt=""></a> -->
						</div>
						<?php 
							//get navbar content
							include "application/template/part/navbar.php";
						?>
					</div>
				</div>
			</header>
		<!-- End Header Area -->

		<!-- Start Konten Area -->
			<?php 
				//routing content dinamic
				if (isset($_GET['val']) && $_GET['val'] != "") {
					include "core/routing.php";
				} else {
					include "application/front/modules/dashboard/index.php";
				}
			?>
		<!-- End Konten Area -->

		<!-- Strat Footer Area -->
		<?php 
			//get footer content
			include "application/template/part/footer.php";
			?>
		<!-- End Footer Area -->
		</div>

		<script src="media/js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="media/js/vendor/bootstrap.min.js"></script>
		<script src="media/js/jquery.ajaxchimp.min.js"></script>
		<script src="media/js/owl.carousel.min.js"></script>
		<script src="media/js/jquery.nice-select.min.js"></script>
		<script src="media/js/jquery.magnific-popup.min.js"></script>
		<script src="media/js/main.js"></script>
		<script src="media/js/jquery.min.js"></script>
		<!-- CHART -->
		<script src="media/js/highcharts.js"></script>
		<script src="media/js/modules/data.js"></script>
		<script src="media/js/modules/exporting.js"></script>
		<script src="media/js/modules/export-data.js"></script>
	</body>
</html>

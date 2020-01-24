<?php
include '../config/database.php';

$qry_tatib = "SELECT * FROM jenis_tatib";
$exe_tatib = mysqli_query($db, $qry_tatib);

$qry_isi_tatib = "SELECT * FROM isi_tatib";
$exe_isi_tatib = mysqli_query($db, $qry_isi_tatib);

?>
<html>
<head>
	<title>Aplikasi Tata Tertib</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	<script src="js/jquery.min.js"></script>
	<script src="../dist/js/standalone/selectize.js"></script>
	<script src="js/index.js"></script>



</head>
<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<span class="icon fa-book"></span>
			</div>
			<div class="content">
				<div class="inner">
					<h1>APLIKASI TATA TERTIB</h1>
					</div>
				</div>
				<nav>
					<ul>
						<li><a href="tata tertib">Tata Tertib</a></li>					</ul>
				</nav>
			</header>

	<!-- Footer -->
	<footer id="footer">
		<p class="copyright">&copy; 2018 By Aditya Prasetyo</p>
	</footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery-1.11.1.js"></script>
</body>
</html>

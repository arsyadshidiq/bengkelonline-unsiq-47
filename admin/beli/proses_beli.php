<?php
include_once"../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini digunakan untuk memanggil file css dari bootstrap -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
	<!-- ini untuk brand/logo dan menu -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="index.php">Bengkel Online</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="../home/servis.php">Servis</a></li>
					<li><a href="../home/onderdil.php">Onderdil</a></li>
					<li><a href="../home/tambah_saran.php">Saran</a></li>
					<li><a href=" ../admin/login/login.php">Login</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron">
			<h2><center> Selamat datang Pembeli Onderdil </center></h2>
			<p>
				<h4><center> Pilih Metode Pembayaran </center></h4>
				<br>
				<p><center><a href="../../admin/beli/tambah_beli.php?id=<?$data['id_beli']?>" class="btn btn-success">Via BanK</a></center></p>
				<center><a href="../../admin/beli/tambah_beli.php?id=<?$data['id_beli']?>" class="btn btn-success">Via Alfamart</a></center>

				
				<br>
				
			</p>
		</div>
	</div>
	<!-- penutup isi -->

	<!-- bagian bawah -->
	<footer>
		<p class="text-center">
			Copyright &copy; 2019 Bengkel Online
		</p>
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
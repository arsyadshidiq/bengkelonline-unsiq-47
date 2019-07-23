<?php
include_once"../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Onderdil</title>
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
			  <a class="navbar-brand" href="../index.php">BengkelOL</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="../index.php">Home</a></li>
					<li><a href="onderdil.php">onderdil</a></li>
					<li><a href="../servis/servis.php">servis</a></li>
					<li><a href="../saran/saran.php">Saran</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
			<h2>Tambahkan onderdil</h2>

		<!--Kembali ke data admin-->
		<p>
			<a href="onderdil.php" class="btn btn-warning">Back</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<form action="insert_onderdil.php" method="post" name="isidataonderdil" class="form-group">

				<p>
					<label>Nama onderdil</label>
					<input type="text" name="nm_kat" placeholder="nama onderdil" class="form-control">
				</p>
				<p>
					<label>Nama harga</label>
					<input type="text" name="harga" placeholder="harga onderdil" class="form-control">
				</p>
				<p>
					<label>keterangan</label>
					<input type="text" name="keterangan" placeholder="keterangan" class="form-control">
				</p>
				

			
				<p>
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
				</p>

			</form>
		</div>
	</div>
	<!-- penutup isi -->

	<!-- bagian bawah -->
	<footer>
		<p class="text-center">
			Copyright &copy; 2019 BengkelOL
		</p>
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
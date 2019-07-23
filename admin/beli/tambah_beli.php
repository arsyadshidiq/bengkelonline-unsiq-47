<?php
include_once"../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>BengkelOL</title>
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
					<li><a href="../../home/servis.php">Home</a></li>
					<li><a href="../../home/onderdil.php">onderdil</a></li>
					<li><a href="../../home/servis.php">servis</a></li>
					<li><a href="../saran/saran.php">Saran</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
			<h2>Data Pelanggan Bengkel Pada Website BengkelOL</h2>

		<!--Kembali ke data admin-->
		<p>
			<a href="servis.php" class="btn btn-warning">Back</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<form action="../../admin/beli/insert_beli.php" method="post" name="isidataservis" class="form-group">

				<p>
					<label>nama pembeli</label>
					<input type="text" name="nama" placeholder="nama lengkap" class="form-control">
				</p>
				<p>
					<label>Onderdil </label>
					<input type="text" name="onderdil" placeholder="nama onderdil " class="form-control">
				</p>
				<p>
					<label>jumlah</label>
					<input type="text" name="jumlah" placeholder="jumlah onderdil" class="form-control">
				</p>
				<p>
					<label>Tanggal Beli</label>
					<input type="date" name="tgl" placeholder="Tanggal beli" class="form-control">
				</p>
				<p>
					<label>harga</label>
					<input type="text" name="harga" placeholder="harga total" class="form-control">
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
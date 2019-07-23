<?php
include_once"../config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Faktur</title>
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
			  <a class="navbar-brand" href="../user/index.php">BengkelOL</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a href="../user/index.php">Home</a></li>
					<li><a href="../onderdil/onderdil.php">Onderdil</a></li>
					<li><a href="../servis/servis.php">Servis</a></li>
					<li><a href="../saran/saran.php">Saran</a></li>
					<li><a href="../beli/beli.php">Pembeli</a></li>
					<li><a href="../faktur/tambah.php">Faktur</a></li>
					<li><a href="../admin/login/login.php">Keluar</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron alert-info">
			<h2>Faktur Pelanggan</h2>
		</div>
		<p>
			<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
		</p>

		<div class="row col-sm-12 col-md-6">	
			<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>No </th>
						<th>id faktur</th>
						<th>Onderdil</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>tgl_servis</th>
						<th>total Biaya</th>
						<th>opsi</th>

						
				
						
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM faktur ";
						$exec = mysqli_query($konek,$query);
						$no=1;
						

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								<td><?=$no?></td>
								<td><?=$data['id_faktur']?></td>	
								<td><?=$data['onderdil']?></td>
								<td><?=$data['harga']?></td>
								<td><?=$data['jml']?></td>
								<td><?=$data['tgl_servis']?></td>
								<td><?=$data['total_biaya']?></td>
								<td>
									<a href="cetak_faktur.php?id=<?=$data['id_faktur']?>" class="btn btn-success">cetak</a>

								</td>
								
								
							</tr>
							<?php
						
						}
					?>
					
					<!-- Cuma sampai disini kok-->
				</tbody>
			</table>
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
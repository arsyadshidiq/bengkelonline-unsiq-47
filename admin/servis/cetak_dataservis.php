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
					<li><a href="../index.php">Home</a></li>
					<li><a href="servis.php">servis</a></li>
					<li><a href="../onderdil/onderdil.php">onderdil</a></li>
					<li><a href="../saran/saran.php">Saran</a></li>
					<li><a href="../beli/beli.php">Pembeli</a></li>
					<li><a href="../faktur/faktur.php">Faktur</a></li>
					<li><a href="../login/logout.php">Keluar</a></li>
				</ul>
			</div>
	 	</div>
	</nav>
	<!-- penutup navigasi/menu -->


	<!-- content isi -->
	<div class="container">
		<div class="jumbotron alert-info">
			<h2>Data Servis Bengkel Online wonosobo</h2>
		</div>
		<!--Tombol buat nambah data-->

		<div class="row col-sm-12 col-md-6">	
			<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>id customer</th>
						<th>Nama Pelanggan</th>
						<th>Jenis Kendaraan</th>
						<th>no plat</th>
						<th>masalah</th>						
						<th>no telephon</th>
						<th>alamat</th>
						<th>Tanggal</th>
						
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
					<?php
						$query = "SELECT * FROM servis ORDER BY id_cust";
						$exec = mysqli_query($konek,$query);
						$no=1;

						while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>
								<td><?=$no?></td>
								<td><?=$data['id_cust']?></td>
								<td><?=$data['nama_pelanggan']?></td>
								<td><?=$data['jenis']?></td>
								<td><?=$data['no_plat']?></td>
								<td><?=$data['masalah']?></td>
								<td><?=$data['no_telp']?></td>
								<td><?=$data['alamat']?></td>
								<td><?=$data['tanggal']?></td>


								

							</tr>
							<?php
						$no++;	
						}
					?>
					<script>
					window.print();
					</script> 
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
				
			<p class="text-right">Wonosobo,          ,2019</p>

			<br>



			
			</br>
			<p class="text-right">-----------------------</p>
			<p class="text-right"> Owner</p>
		
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
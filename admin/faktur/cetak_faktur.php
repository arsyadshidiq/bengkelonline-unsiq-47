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
					<li><a href="../faktur/faktur.php">Faktur</a></li>
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
		

		<div class="row col-sm-12 col-md-6">	
			<table class="table table-bordered table-responsive table-striped">
				<thead>
					<tr>
						<th>no</th>
						<th>id faktur</th>
						<th>nama customer</th>
						<th>jenis kendaraan</th>
						<th>no plat</th>
						<th>no telphone</th>
						<th>alamat</th>
						<th>Onderdil</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>tanggal daftar</th>
						<th>tgl_servis</th>
						<th>total Biaya</th>
				
						
					</tr>
				</thead>
				<tbody>
					<!--Menampilkan data dengan mysqli dan php-->
				
						
			
					<?php
						$query = "SELECT * FROM servis as sv JOIN faktur as fk  ON sv.id_faktur=fk.id_cust limit 1";
						$exec = mysqli_query($konek,$query) or die (mysqli_error($konex));
						$no =1;
					
							while ($data = mysqli_fetch_array($exec)) {
							?>
							<tr>

								<td><?=$no?></td>
								<td><?=$data['id_faktur']?></td>
								<td><?=$data['nama_pelanggan']?></td>
								<td><?=$data['jenis']?></td>
								<td><?=$data['no_plat']?></td>
								<td><?=$data['no_telp']?></td>
								<td><?=$data['alamat']?></td>
								<td><?=$data['onderdil']?></td>	
								<td><?=$data['harga']?></td>
								<td><?=$data['jml']?></td>
								<td><?=$data['tanggal']?></td>	
								<td><?=$data['tgl_servis']?></td>
								<td><?=$data['total_biaya']?></td>

								
							</tr>
							<?php
						
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
			<p class="text-right"> customer</p>
	</footer>
	<!-- penutup bagian bawah -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
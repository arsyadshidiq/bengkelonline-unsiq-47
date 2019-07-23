<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$nama = $_POST['nama_pelanggan'];
	$jenis = $_POST['jenis'];
	$alamat = $_POST['alamat'];
	$masalah = $_POST['masalah'];
	$no_plat = $_POST['no_plat'];
	$no_telp = $_POST['no_telp'];
	$tanggal = $_POST['tanggal'];



	 
	
	
	$query = "INSERT INTO servis (nama_pelanggan,jenis,alamat, masalah, no_plat, no_telp, tanggal) VALUES('$nama','$jenis','$alamat',' $masalah', '$no_plat', '$no_telp', '$tanggal')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		echo "<script>alert('PENDAFTARAN SUKSES, Segera Kami Kirim NO ANTRIAN ') ;document.location.href='../../home/servis.php'</script>";
	}
	else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>
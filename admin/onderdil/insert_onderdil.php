<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_kat = $_POST['id_kat'];
	$nama = $_POST['nm_kat'];
	$harga = $_POST['harga'];
	$keterangan = $_POST['keterangan'];
	

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO onderdil (nm_kat,harga,keterangan) VALUES('$nama','$harga', '$keterangan')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:onderdil.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>
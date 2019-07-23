<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id = $_POST['id'];
	$nm_kat = $_POST['nm_kat'];
	$harga = $_POST['harga'];
	$keterangan = $_POST['keterangan'];

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "UPDATE onderdil SET nm_kat='$nm_kat',harga='$harga', keterangan ='$keterangan' WHERE id_kat='$id'";

	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:onderdil.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Merubah data</div>";
	}
?>
<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
    $onderdil = $_POST['onderdil'];
	$jml = $_POST['jml'];
	$harga = $_POST['harga'];
	$tgl_servis = $_POST['tgl_servis'];
	$total_biaya = $_POST['total_biaya'];

	


	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO faktur (onderdil, jml,harga,tgl_servis, total_biaya) VALUES('$onderdil','$jml','$harga' ,'$tgl_servis','$total_biaya')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:faktur.php");
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>
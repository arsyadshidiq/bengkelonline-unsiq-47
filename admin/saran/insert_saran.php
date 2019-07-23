<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$saran = $_POST['saran'];
	

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO saran (username,email,saran) VALUES('$username', '$email', '$saran')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		echo "<script>alert('PENGIRIMAN SARAN SUKSES, TERIMAKASIH ATAS MASUKANNYA  ') ;document.location.href='../../home/servis.php'</script>";
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>
<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$id_beli = $_POST['id_beli'];
	$nama = $_POST['nama'];
	$onderdil = $_POST['onderdil'];
	$jumlah = $_POST['jumlah'];
	$tgl = $_POST['tgl'];
	$harga = $_POST['harga'];
	

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	$query = "INSERT INTO beli (nama,onderdil,jumlah,tgl,harga) VALUES('$nama','$onderdil','$jumlah','$tgl','$harga')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		echo "<script>alert('PEMBELIAN SUKSES, Segera Kami Kirim Kode Pembayaran ') ;document.location.href='../../home/servis.php'</script>";
	}else{
		echo "<div class='jumbotron alert alert-danger'>Gagal Sob selamat Berjuang PANTANG MENYERAH...:V</div>";
	}
?>
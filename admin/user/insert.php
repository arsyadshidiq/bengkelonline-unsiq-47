<?php
include_once"../config/config.php";
	//dapatkan data dari form yang dikirim ke file ini
	$admin = $_POST['username'];
	$sandi = $_POST['password'];
	$level = $_POST['level'];

	$nama_file=$_FILES['gambar']['name'];
	$tmp_file=$_FILES['gambar']['tmp_name'];
	$lokasi="img/".$nama_file;

	//karena id_user terisi otomatis maka querynya disebutkan dulu kolom yang akan disi 
	move_uploaded_file($tmp_file, $lokasi);
	$query = "INSERT INTO admin (username,password,level,gambar) VALUES('$admin','$sandi','$level','$nama_file')";
	$exec = mysqli_query($konek,$query);

	if ($exec) {
		header("location:admin.php");
	}else{
		echo "<script>alert('PENDAFTARAN SUKSES, Segera Kami Kirim NO ANTRIAN ') ;document.location.href='../../admin/user/tambah.php'</script>";
	
	}
?>
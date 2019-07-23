<?php 
include_once ('../config/config.php');

$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from admin where username='$username' and password='$password'";

$sql=mysqli_query ($konek,$query);
$row=mysqli_num_rows($sql);

$data=mysqli_fetch_array($sql);
if ($row>0) {
	if ($data['level'] == 'admin'){
	session_start();
	$_SESSION['nama']=$data['username'];

	$_SESSION['level']=$data['level'];
	echo "<script>alert('SELAMAT DATANG , ADMIN') ;document.location.href='../index.php'</script>";
	

	}elseif ($data['level'] == 'user') {

	session_start();
	$_SESSION['nama']=$data['username'];

	$_SESSION['level']=$data['level'];
	echo "<script>alert('SELAMAT DATANG , MEMBER') ;document.location.href='../../home/servis.php'</script>";


}
}
else{
	echo "<script>alert('MAAF PASSWORD ANDA SALAH, SILAHKAN ULANGI') ;document.location.href='../../admin/login/login.php'</script>";

}
?>
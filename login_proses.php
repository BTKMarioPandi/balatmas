<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql	 = "SELECT * FROM pemandu_pelatihan WHERE nama='$username' AND password='$password' ";
$result  = mysqli_query($koneksi, $sql);
$ketemu  = mysqli_num_rows($result);
$r 		 = mysqli_fetch_assoc($result);
	if ($ketemu > 0)
	 {
	session_start();
	$_SESSION['username']	= $r['nama'];
	$_SESSION['password']	= $r['password'];
	$_SESSION['foto']		= $r['foto'];

	echo "<script language='javascript'>alert('Selamat Anda berhasil Login');location.replace('home_admin.php')</script>";
	}
	else {
echo "<script language='javascript'>alert('Maaf Username & Password Tidak Sesuai');location.replace('login_admin.php')</script>";

	}

?>
<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql	 = "SELECT * FROM peserta_pelatihan WHERE nama_peserta='$username' AND password='$password' ";
$result  = mysqli_query($koneksi, $sql);
$ketemu  = mysqli_num_rows($result);
$r 		 = mysqli_fetch_assoc($result);
	if ($ketemu > 0)
	 {
	session_start();
	$_SESSION['username_peserta']	= $r['nama_peserta'];
	$_SESSION['password_peserta']	= $r['password'];
	$_SESSION['id_peserta']			= $r['id_peserta'];

	echo "<script language='javascript'>alert('Selamat Anda berhasil Login');location.replace('pelatihan.php')</script>";
	}
	else {
echo "<script language='javascript'>alert('Maaf Username & Password Tidak Sesuai');location.replace('login_peserta.php')</script>";

	}

?>
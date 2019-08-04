<?php
include 'koneksi.php';

$pass=md5($_POST['password']);

$deletfile = "SELECT * FROM pemandu_pelatihan WHERE id_pemandu='$_POST[id_pemandu]' ";
$hasil=mysqli_query($koneksi, $deletfile);
$kolom= mysqli_fetch_assoc($hasil);
$namaft = $kolom['foto'];

$namafoto = $_FILES['foto']['name'];
$folderawal = $_FILES['foto']['tmp_name'];
$foldertujuan="img/pemandu/";
move_uploaded_file($folderawal,$foldertujuan.$namafoto);

if (!empty($folderawal))
	{
	unlink('img/pemandu/'.$namaft);
	move_uploaded_file($folderawal,$foldertujuan.$namafoto);

	$queri="UPDATE pemandu_pelatihan SET 
	nama='$_POST[nama]',
	alamat_lengkap='$_POST[alamat]',
	tempat_lahir='$_POST[tmp_lahir]',
	tgl_lahir='$_POST[tgl_lahir]',
	umur='$_POST[umur]',
	jenis_kelamin ='$_POST[jenis_kelamin]',
	tamatan='$_POST[tamatan]',
	pekerjaan='$_POST[pekerjaan]',
	status='$_POST[status]',
	agama='$_POST[agama]',
	password = '$pass',
	foto= '$namafoto'
	WHERE id_pemandu= '$_POST[id_pemandu]' ";
	}else {

	$queri="UPDATE pemandu_pelatihan SET 
	nama='$_POST[nama]',
	alamat_lengkap='$_POST[alamat]',
	tempat_lahir='$_POST[tmp_lahir]',
	tgl_lahir='$_POST[tgl_lahir]',
	umur='$_POST[umur]',
	jenis_kelamin='$_POST[jenis_kelamin]',
	tamatan='$_POST[tamatan]',
	pekerjaan='$_POST[pekerjaan]',
	status='$_POST[status]',
	agama='$_POST[agama]',
	password='$pass'
	WHERE id_pemandu='$_POST[id_pemandu]' ";
}

mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pemandu.php');
?> 
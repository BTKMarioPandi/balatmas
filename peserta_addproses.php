<?php
include 'koneksi.php';

$pass=md5($_POST['password']);
$nama=$_POST['nama'];

if (empty($nama)) {
	$queri="INSERT INTO peserta_pelatihan
	(id_peserta,
	nama_peserta,
	alamat_lengkap,
	tempat_lahir,
	tgl_lahir,
	umur,
	jenis_kelamin,
	tamatan,
	pekerjaan,
	status,
	agama,
	password) 
	VALUES 
	('',
	'$_POST[nama]',
	'$_POST[alamat]',
	'$_POST[tmp_lahir]',
	'$_POST[tgl_lahir]',
	'$_POST[umur]',
	'$_POST[jenis_kelamin]',
	'$_POST[tamatan]',
	'$_POST[pekerjaan]',
	'$_POST[status]',
	'$_POST[agama]',
	'$pass')";

	mysqli_query($koneksi,$queri);
	mysqli_close($koneksi);
	echo "<script language='javascript'>alert('Data Anda berhasil Di Masukkan, Slahkan Login');location.replace('index.php')</script>";	
}else{
	echo "<script language='javascript'>alert('Data Masih Kosong');location.replace('index.php')</script>";
}


?> 
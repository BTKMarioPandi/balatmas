<?php
include 'koneksi.php';

$pass=md5($_POST['password']);

$namafoto = $_FILES['foto']['name'];
$folderawal = $_FILES['foto']['tmp_name'];
$foldertujuan="img/pemandu/";
move_uploaded_file($folderawal,$foldertujuan.$namafoto);

$queri="INSERT INTO pemandu_pelatihan
(id_pemandu,
nama,
alamat_lengkap,
tempat_lahir,
tgl_lahir,
umur,
jenis_kelamin,
tamatan,
pekerjaan,
status,
agama,
password,
foto) 
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
'$pass',
'$namafoto')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:pemandu.php');
?> 
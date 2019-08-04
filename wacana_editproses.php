<?php
include 'koneksi.php';

$queri="UPDATE wacana_pelatihan SET
id_pemandu 	= '$_POST[id_pemandu]',
nama_wacana = '$_POST[nama_wacana]',
isi_wacana 	= '$_POST[isi_wacana]' 
WHERE no_wacana = '$_POST[id_wacana]' ";

mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:wacana.php');
?> 
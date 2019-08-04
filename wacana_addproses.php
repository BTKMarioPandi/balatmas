<?php
include 'koneksi.php';

$queri="INSERT INTO wacana_pelatihan
(no_wacana,
id_pemandu,
nama_wacana,
isi_wacana) 
VALUES 
('',
'$_POST[id_pemandu]',
'$_POST[nama_wacana]',
'$_POST[isi_wacana]')";
mysqli_query($koneksi,$queri);
mysqli_close($koneksi);
header('location:wacana.php');
?> 
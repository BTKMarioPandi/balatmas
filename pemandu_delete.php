
<?php
include "koneksi.php";

$deletfile = "SELECT * FROM pemandu_pelatihan WHERE id_pemandu='$_GET[id]'";
$hasil=mysqli_query($koneksi, $deletfile);
$kolom= mysqli_fetch_assoc($hasil);
$namaft = $kolom[foto];
unlink('img/pemandu/'.$namaft);

$queri = "DELETE FROM pemandu_pelatihan WHERE id_pemandu='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:pemandu.php');

?>
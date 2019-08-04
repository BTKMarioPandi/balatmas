
<?php
include "koneksi.php";

$queri = "DELETE FROM wacana_pelatihan WHERE no_wacana='$_GET[id]'";
mysqli_query($koneksi, $queri); 
mysqli_close($koneksi);
header('location:wacana.php');

?>
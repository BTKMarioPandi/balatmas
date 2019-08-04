<?php
 if (!isset($_SESSION)) {
        session_start();
    }
    if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
        include 'login_admin.php';
    }
    else
    {

?>
<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BALATMAS PEKANBARU | Wacanna</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <?php include 'nav.php'; ?>
        
</div>
<?php 
include 'koneksi.php';

$queriinduk = "SELECT * FROM wacana_pelatihan WHERE no_wacana='$_GET[id]'";
$hasilinduk = mysqli_query($koneksi,$queriinduk);
$kolominduk=mysqli_fetch_assoc($hasilinduk);
 ?>

<div class="wrapper wrapper-content">
	<h2 class="text-center alert-danger" ><strong> Tambah Data Wacana</strong></h2>
	<hr>
    <form method="post" action="wacana_editproses.php" enctype="multipart/form-data">
        <div class="form-group row">
        <div class="col-offset-2 col-xs-8">
        	<input type="hidden" name="id_wacana" value="<?= "$kolominduk[no_wacana]"; ?>">
            <label for="ex2">Nama Pemandu</label>
           <select class="form-control" name="id_pemandu">
           	<option value="<?= "$kolominduk[id_pemandu]"; ?>"><?= "$kolominduk[id_pemandu]"; ?></option>
	           	<?php
	           	$queri = "SELECT * FROM pemandu_pelatihan";
	            $hasil = mysqli_query($koneksi, $queri);
	            while($x=mysqli_fetch_assoc($hasil))
	                { echo "<option value='$x[id_pemandu]'>$x[id_pemandu] | $x[nama] </option>"; }
	            ?>
           	
           </select>
            
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-offset-2 col-xs-8">
            <label for ="ex1">Nama Wacana</label>
                <input type="text" class="form-control"  name="nama_wacana" value="<?= "$kolominduk[nama_wacana]"; ?>">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-offset-2 col-xs-8">
            <label for="ex2">Isi Wacana</label>
            <textarea class="form-control" name="isi_wacana"> <?= "$kolominduk[isi_wacana]"; ?></textarea>
        </div>
    </div>
    <br>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        
        
    </form>
    
</div>
<hr>





    <div class="footer">
        <div>
            <strong>Copyright</strong> BALATMAS Pekanbaru &copy; 2019
        </div>
    </div>
</div>
<?php 
include 'footer.php'; ?>
</body>
</html>
<?php } ?> 

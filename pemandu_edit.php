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

    <title>BALATMAS PEKANBARU | Beranda</title>

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
include "koneksi.php"; 
$queri = "SELECT * FROM pemandu_pelatihan WHERE id_pemandu='$_GET[id]'";
$hasil = mysqli_query($koneksi,$queri);
$kolom=mysqli_fetch_assoc($hasil);
?>
<div class="wrapper wrapper-content">
    <form method="post" action="pemandu_editproses.php" enctype="multipart/form-data">
        <div class="form-group row">
        <div class="col-xs-6">
            <input type="hidden" name="id_pemandu" value="<?= "$kolom[id_pemandu]"; ?>">
            <label for="ex2">Nama Pemandu</label>
            <input type="text" name="nama" class="form-control" value="<?= "$kolom[nama]"; ?>">
                
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-6">
            <label for="ex2">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat"><?= "$kolom[alamat_lengkap]"; ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmp_lahir" value="<?= "$kolom[tempat_lahir]"; ?>">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Tanggal Lahir</label>
                <input type="date" class="form-control"  name="tgl_lahir" value="<?= "$kolom[tgal_lahir]"; ?>" >
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Umur</label>
                <input type="text" class="form-control" name="umur" value="<?= "$kolom[umur]"; ?>">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" >
                <option value="<?= "$kolom[jenis_kelamin]"; ?>"><?= "$kolom[jenis_kelamin]"; ?></option>
                <option  value="Pria"> Pria</option>
                <option value="Wanita"> Wanita</option>
            </select>
    </div>
    </div>
    
     <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Tamatan </label>
                <input type="text" class="form-control" name="tamatan" value="<?= "$kolom[tamatan]"; ?>">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Pekerjaan</label>
                <input type="text" class="form-control"  name="pekerjaan" value="<?= "$kolom[pekerjaan]"; ?>" >
        </div>
    </div>

     <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Status </label>
            <select class="form-control" name="status">
                <option value="<?= "$kolom[status]"; ?>"><?= "$kolom[status]"; ?></option>
                <option  value="Kawin"> Kawin</option>
                <option value="Belum Kawin"> Belum Kawin</option>
            </select>
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Agama</label>
                <select class="form-control" name="agama">
                <option value="<?= "$kolom[agama]"; ?>"><?= "$kolom[agama]"; ?></option>
                <option  value="Islam"> Islam</option>
                <option value="Kristen"> Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            <label for ="ex1">Password </label>
                <input type="password" class="form-control" name="password">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Foto </label>
                <input type="file" class="form-control" name="foto">
        </div>
         <div class="col-xs-3">
            <img src='<?= "img/pemandu/$kolom[foto]"; ?>'  width='250'>
        </div>
    </div>

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

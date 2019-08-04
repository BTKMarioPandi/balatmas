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
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>BALATMAS PEKANBARU | Wacana</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <?php include 'nav.php'; ?>
        
    </div>
  
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Wacana</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Tables</a>
        </li>
        <li class="active">
            <strong>Data Wacana</strong>
        </li>
    </ol>
</div>
<div class="col-lg-2">

</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
<div class="col-lg-12">
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Daftar Wacana</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">


<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover dataTables-example" >
    
    <thead>
    <tr>
        <th width="10px">#</th>
        <th>Nama Pemandu</th>
        <th>Nama Wacana</th>
        <th>Isi Wacana</th>
        <th class="text-center"><i class="fa fa-gear"></i></th>
    </tr>
    </thead>
     <button class="btn btn-sm btn-warning"><a href="wacana_add.php">Tambah Data</a> </span> </button>
    <tbody>
    <?php
        include "koneksi.php"; 
        $hasil = mysqli_query($koneksi, "SELECT * FROM wacana_pelatihan
                        INNER JOIN pemandu_pelatihan ON wacana_pelatihan.id_pemandu = pemandu_pelatihan.id_pemandu ") or die (mysqli_error($koneksi));
        $no=1;
        while($kolom=mysqli_fetch_assoc($hasil))
        {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$kolom[nama]</td>
                    <td>$kolom[nama_wacana]</td>
                    <td>$kolom[isi_wacana]</td>
                    <td width='80px'><a href='wacana_edit.php?id=$kolom[no_wacana]'class='btn btn-xs btn-primary'><span class='glyphicon glyphicon-pencil'></span></a>
                    <a href='wacana_delete.php?id=$kolom[no_wacana]' class='btn btn-xs btn-danger'><span class='glyphicon glyphicon-trash'></span></a> </td>
                </tr>
                ";
                $no=$no+1;
        }
        mysqli_close($koneksi);
    ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>



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
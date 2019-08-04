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

    <title>BALATMAS PEKANBARU | Koesioner</title>

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
    <h2>Data Kuesioner</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Tables</a>
        </li>
        <li class="active">
            <strong>Data Kuesioner</strong>
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
        <h5>Daftar Kuesioner</h5>
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
        <th>Nama Peserta</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    <?php
        include "koneksi.php"; 
        $hasil = mysqli_query($koneksi, "SELECT * FROM kuesioner
                        INNER JOIN pemandu_pelatihan ON kuesioner.id_pemandu = pemandu_pelatihan.id_pemandu
                        INNER JOIN wacana_pelatihan ON kuesioner.no_wacana = wacana_pelatihan.no_wacana
                        INNER JOIN peserta_pelatihan ON kuesioner.id_peserta = peserta_pelatihan.id_peserta ") or die (mysqli_error($koneksi));
        $no=1;
        while($kolom=mysqli_fetch_assoc($hasil))
        {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$kolom[nama]</td>
                    <td>$kolom[nama_wacana]</td>
                    <td>$kolom[nama_peserta]</td>
                    <td>$kolom[nilai]</td>
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

    <div class="col-lg-6">

     <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Diagram Perkembangan Pelatihan</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-bar-chart"></div>
                            </div>
                    </div>
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
<script type="text/javascript">
    //Flot Bar Chart
$(function() {
    var barOptions = {
        series: {
            bars: {
                show: true,
                barWidth: 0.6,
                fill: true,
                fillColor: {
                    colors: [{
                        opacity: 0.8
                    }, {
                        opacity: 0.8
                    }]
                }
            }
        },
        xaxis: {
            tickDecimals: 0
        },
        colors: ["#1ab394"],
        grid: {
            color: "#999999",
            hoverable: true,
            clickable: true,
            tickColor: "#D4D4D4",
            borderWidth:0
        },
        legend: {
            show: false
        },
        tooltip: true,
        tooltipOpts: {
            content: "x: %x, y: %y"
        }
    };
    var barData = {
        label: "bar",
        data: [
            [1, 34],
            [2, 25],
            [3, 19],
            [4, 34],
            [5, 32],
            [6, 44]
        ]
    };
    $.plot($("#flot-bar-chart"), [barData], barOptions);

});
</script>

</body>
</html>
<?php } ?> 
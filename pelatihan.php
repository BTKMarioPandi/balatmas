<?php
 if (!isset($_SESSION)) {
        session_start();
    }
    if (empty($_SESSION['username_peserta']) AND empty($_SESSION['password_peserta'])) {
        include 'login_peserta.php';
    }
    else
    {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BALATMAS PEKANBARU | Pendaftaran Peserta</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
</head>
<body id="page-top" class="landing-page">
<?php include 'nav2.php'; ?>



<section id="daftar" class="container services">
    
        <h2 class="text-center">Wacana Pelatihan </h2>
        <hr>
    <div class="row">
    <form method="post" action="kuesioner_addproses.php" enctype="multipart/form-data">

    	<?php 

    	include "koneksi.php"; 
        $hasil = mysqli_query($koneksi, "SELECT * FROM wacana_pelatihan
                        INNER JOIN pemandu_pelatihan ON wacana_pelatihan.id_pemandu = pemandu_pelatihan.id_pemandu ") or die (mysqli_error($koneksi));
        $querikue="SELECT * FROM kuesioner ORDER BY id_kuesioner DESC ";
                $hasilkue=mysqli_query($koneksi,$querikue);
                $x= mysqli_num_rows($hasilkue);
                
        while($kolom=mysqli_fetch_assoc($hasil)) {  
         $x++;
         ?>
        
    <div class="col-md-6">	
	  <div class="ibox">
		<div class="ibox-content">
		    <a href="article.html" class="btn-link">
		        <h2>
                    <input type="hidden"  name="id_kus[]" value="<?= $x ?>">
                    <input type="hidden" name="no_wacana[]" value="<?= $kolom['no_wacana'] ?>">
		            <?= $kolom['nama_wacana'] ?>
		        </h2>
		    </a>
		    <div class="small m-b-xs">
                <input type="hidden" name="id_pemandu[]" value="<?= $kolom['id_pemandu'] ?>">
		        <strong><?= $kolom['nama'] ?></strong>
		    </div>
		    <p>
		        <?= $kolom['isi_wacana'] ?>
		    </p>
		    <div class="row">
		        <div class="col-md-6">
		                <h5>Bagaimana Pendapat Anda Tentang Wacana <?= $kolom['nama_wacana'] ?>:</h5>
		                <strong>

                        <div class="i-checks"><label> <input name="nilai[]" type="checkbox" value="4"> <i></i> Sangat Baik </label></div>
                        <div class="i-checks"><label> <input name="nilai[]" type="checkbox" value="3"> <i></i> Baik </label></div>
                        <div class="i-checks"><label> <input name="nilai[]" type="checkbox" value="2"> <i></i> Cukup </label></div>
                        <div class="i-checks"><label> <input name="nilai[]" type="checkbox" value="1"> <i></i> Kurang </label></div>
		        </strong></div>
		    </div>
		</div>
		</div>
   	</div>
   	<?php } 
    ?>

   





    </div>
            <button type="submit" class="btn btn-warning">Kirim Nilai</button>
        
        
    </form>
</section>





<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>
<script src="js/plugins/wow/wow.min.js"></script>
<script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
<?php }
?>
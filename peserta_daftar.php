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
</head>
<body id="page-top" class="landing-page">
<?php include 'nav2.php'; ?>



<section id="daftar" class="container services">
    <div class="row">
    
        <h2>Pendaftaran  Peserta Pelatihan</h2>
        <hr>

    <form method="post" action="peserta_addproses.php" enctype="multipart/form-data">
        <div class="form-group row">
        <div class="col-xs-6">
            <label for="ex2">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda">
                
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-6">
            <label for="ex2">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Tempat Lahir</label>
                <input type="text" class="form-control" name="tmp_lahir">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Tanggal Lahir</label>
                <input type="date" class="form-control"  name="tgl_lahir" >
        </div>
    </div>

    <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Umur</label>
                <input type="text" class="form-control" name="umur">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin">
                <option  value="Pria"> Pria</option>
                <option value="Wanita"> Wanita</option>
            </select>
    </div>
    </div>
    
     <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Tamatan </label>
                <input type="text" class="form-control" name="tamatan">
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Pekerjaan</label>
                <input type="text" class="form-control"  name="pekerjaan" >
        </div>
    </div>

     <div class="form-group row">
        <div class="col-xs-3">
            <label for ="ex1">Status </label>
            <select class="form-control" name="status">
                <option  value="Kawin"> Kawin</option>
                <option value="Belum Kawin"> Belum Kawin</option>
            </select>
        </div>
        <div class="col-xs-3">
            <label for ="ex1">Agama</label>
                <select class="form-control" name="agama">
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
                <input type="password" class="form-control" name="password" placeholder="kata sandi">
        </div>
    </div>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        
        
    </form>

    </div>
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

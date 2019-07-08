<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>En clave de Sol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="../css/simpletextrotator.css">

    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="../css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/efectoZoom.css">
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../css/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]-->

</head>
<body class="home">
<!-- navbar-->
<header class="header">
    <div role="navigation" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="procesaLogin.php">Home</a></li>
                    <li><a href="procesaEstilos.php">Estilos</a></li>
                    <li><a href="procesaContacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div id="carousel-home" data-ride="carousel" class="carousel slide carousel-fullscreen carousel-fade">
    <section id="portfolio" class="section--no-padding-bottom">
        <div class="container">
            <div class="row">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-space">
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/pop.html"><p class = "titulo">Pop</p><img src="../img/pop_640.jpg" alt="Pop" id = "pop" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/hip-hop.html"><p class = "titulo">Hip-Hop</p><img src="../img/male-3682679_640.jpg" id = "hiphop" alt="Hip-hop" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/reggae.html"><p class = "titulo">Reggae</p><img src="../img/reggae_620.jpg" id = "reggae" alt="" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/jazz.html"><p class = "titulo">Jazz</p><img src="../img/jazz_640.jpg" id = "jazz" alt="" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/flamenco.html"><p class = "titulo">Flamenco</p><img src="../img/flamenco_640.jpg" id="flamenco" alt="" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/rock.html"><p class = "titulo">Rock</p><img src="../img/rock_640.jpg" id = "rock" alt="" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/blues.html"><p class = "titulo" >Blues</p><img src="../img/blues_640.jpg" id = "blues" alt="Blues" class="img-responsive"></a></div>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                    <div class="box-dark"><a href="../estilos/ska.html" ><p class = "titulo">Ska</p><img src="../img/ska_640.jpg" id = "ska" alt="" class="img-responsive"></a></div>
                </div>

            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy;2019 Víctor Álvarez Provencio</p>
                </div>
                <div class="col-md-6">
                    <p class="credit">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious templates</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.cookie.js"> </script>
<script src="../js/lightbox.min.js"></script>
<script src="../js/front.js"></script>
<script src="../js/jquery.simple-text-rotator.js"></script>
<script src="../js/jquery.simple-text-rotator.min.js"></script>


<!-- substitute:livereload -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<!-- rotate-text-script -->
<script>$(".rotate").textrotator({
    animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
    separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
    speed: 2000, // How many milliseconds until the next word show.
});</script>
</body>
</html>
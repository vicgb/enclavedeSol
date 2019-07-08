<?php

//Validamos campos del login
header('Content-Type: text/html; charset=utf-8');
require_once 'validaLogin.php';

$usuario = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $db = new mysqli('sql301.epizy.com', 'epiz_23751785', 'OBGCwKftCnEXnj6', 'epiz_23751785_usuarios');
    if($db->connect_error) {
        die("Conexión rechazada: " . $db->connect_error);
    }

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = $db->query($sql);
    if($result->num_rows == 1){
        $db->close();
        header('Location: procesaLogin.php');
        exit;
    }else{
        echo '<script type="text/javascript">
                alert("Por favor introduce un Login valido");
                window.location.href="../index.php";
                </script>';
    }
}


?>

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
<!-- navbar-->
<body class="home">
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

    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-home" data-slide-to="1"></li>
        <li data-target="#carousel-home" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides-->
    <div role="listbox" class="carousel-inner">
        <div style="background-image: url('../img/headphones-690685_1920.jpg')" class="item active">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading" style ="font-style: oblique">En clave de Sol</h1>
                <p class="super-paragraph"><span class ="rotate">Porque hay música más allá de Youtube</span></p>

            </div>
        </div>
        <div style="background-image: url('../img/microphone-2130806_1920.jpg');" class="item">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading" style ="font-style: oblique" >Podcasts actualizados</h1>
                <p class="super-paragraph"><span class ="rotate">Disfruta de los últimos podcasts compartidos por amantes de la música para ti</span></p>
            </div>
        </div>
        <div style="background-image: url('../img/electronics-1845272_1920.jpg');" class="item">
            <div class="overlay"></div>
            <div class="carousel-caption">
                <h1 class="super-heading" style ="font-style: oblique">Comparte tus gustos con los demás</h1>
                <p class="super-paragraph"><span class ="rotate">Descubrirás música nueva para disfrutar de los mejores momentos de tu día</span></p>
            </div>
        </div>
    </div>
</div>
<footer class="footer" style="bottom: auto">
    <div class="footer__copyright" style="padding-top: 63px">
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
        </div><script src="../js/jquery.simple-text-rotator.js"></script>
        <script src="../js/jquery.simple-text-rotator.min.js"></script>
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
        speed: 2000 // How many milliseconds until the next word show.
    });</script>
</body>

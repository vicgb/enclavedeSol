

<!DOCTYPE>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>En clave de Sol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->
    <link rel="stylesheet" href="css/simpletextrotator.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/efectoZoom.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="css/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]-->
</head>
<body class="registro">
<!-- navbar-->
<header class="home">
    <div role="navigation" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="estilos.php">Estilos</a></li>
                    <li><a href="contacto.php">Contacto</a></li></ul>

            </div>
        </div>
    </div>
</header>

<section>
    <div class = "modal-content" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-header">
                <h4 id="registro" class="modal-title">Registro de usuario</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="php/procesaRegistro.php" >
                    <div class="form-group">
                        <label for="nombre_registro">Usuario*</label>
                        <input id = "nombre_registro" name = "name" type="text" placeholder="Introduzca su nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for ="email_registro">Email*</label>
                        <input id="email_registro" name = "email" type="email" placeholder="Introduzca su e-mail" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for = "contraseña_registro">Contraseña*</label>
                        <input id ="contraseña_registro" name = "pwd" type="password" placeholder="Introduzca su contraseña" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for = "contraseña2_registro">Repita la contraseña*</label>
                        <input id = "contraseña2_registro" name = "pwd2" type="password" placeholder="Repita su contraseña" class="form-control" required>
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i>Registrarme</button>

                    </p>
                </form>
                <a href="index.php"><strong>Volver al inicio</strong></a>
            </div>
        </div>
    </div>
</section>

</body>
</html>

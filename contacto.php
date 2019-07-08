
<!DOCTYPE html>
<html lang ="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="css/favicon.ico">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]-->

</head>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="estilos.php">Estilos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-ghost pull-left"><i class="fa fa-sign-in"></i>Entrar</a></ul>
        </div>
      </div>
    </div>
  </header>
  <!-- *** LOGIN MODAL ***_________________________________________________________
-->
<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                <h4 id="Login" class="modal-title">Inicio de Sesión</h4>
            </div>
            <div class="modal-body">
                <form action="php/procesaLogin.php" method="post">
                    <div class="form-group">
                        <input id="email_modal" name = "email" type="text" placeholder="Introduzca su nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input id="password_modal" name="password" type="password" placeholder="Introduzca su contraseña" class="form-control" required>
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary" ><i class="fa fa-sign-in"></i>Únete</button>

                    </p>
                </form>
                <p class="text-center text-muted">¿No estás registrado?</p>
                <p class="text-center text-muted"><a href="registro.php"><strong> ¡Regístrate ahora! </strong></a></p>
            </div>
        </div>
    </div>
</div>
<!-- *** LOGIN MODAL END ***-->
    <section class="background-gray-lightest">
      <div class="container">
        <div class="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Contacto</li>
          </ul>
        </div>
        <h1>Contacto</h1>
        <p class="lead">Porque nadie es perfecto, queremos que nos mandes tus mejoras o tus sugerencias. ¡Construyendo comunidad musical, colectivamente!</p>
      </div>
    </section>
    <section>
      <div id="contact" class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><a href="#" class="fa fa-twitter"></a></div>
              <div class="content">
                <h4>Twitter:</h4>
                <p>@enClavedeSol</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class="box-simple">
              <div class="icon"><a href="#" class = "fa fa-phone-square"></a></div>
              <div class="content">
                <h4>Teléfono</h4>
                <p class="text-muted">Horarios: Lunes-Viernes de 9:00 a 15:00</p>
                <p><strong>+3491919191</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-mail-open"></i></div>
              <div class="content">
                <h4>Correo Eléctronico</h4>
                <p class="text-muted">enclavedesol@atencioncliente.com</p>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="box-simple">
              <div class="icon"><i class="pe-7s-pen"></i></div>
              <div class="content">
                <h4>Formulario de sugerencia/Quejas</h4>
                <p class="text-muted"></p>
                <form action="php/procesaFormulario.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="firstname" >Nombre*</label>
                        <input id="firstname" name = "nombre" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="lastname">Apellidos</label>
                        <input id="lastname" name = "apellidos" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input id="email" name = "email" type="email" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="subject">Tema:*</label>
                        <input id="subject" name = "tema" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="mensaje" type ="text" class="form-control" placeholder="Escriba su mensaje" required></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Enviar</button>
                    </div>
                  </div>
                </form>
                <p class="text-center text-muted">¿No estás registrado?</p>
                <p class="text-center text-muted"><a href="registro.php"><strong> ¡Regístrate ahora! </strong></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <footer class="footer">
    <div class="footer__copyright" style="margin-top: -61px">
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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.cookie.js"> </script>
  <script src="js/lightbox.min.js"></script>
  <script src="js/front.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/jquery.simple-text-rotator.min.js"></script>


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
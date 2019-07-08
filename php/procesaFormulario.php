<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'validaFormulario.php';


$nombre = $apellidos = $email = $tema = $mensaje = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = test_input($_POST["nombre"]);
    $apellidos = test_input($_POST["apellidos"]);
    $email = test_input($_POST["email"]);
    $tema = test_input($_POST["tema"]);
    $mensaje = test_input($_POST["mensaje"]);
}

if (!validaEmail($email)) {
    $errors[] = 'El campo email es incorrecto.';
}

if(!$errors){
    

    $conn = new mysqli('sql301.epizy.com', 'epiz_23751785', 'OBGCwKftCnEXnj6', 'epiz_23751785_formulario');

    if($conn->connect_error){
        die("La conexion ha fallado" . $conn->connect_error);
}

$sql = "INSERT INTO formulario (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

if($conn->query($sql) == TRUE){
    header('Location: procesaFormulario.php');
}else{
    echo '<script type "text/javascript">
    alert("Ups, algo ha ido mal");
    window.location.href = "../contacto.php";
    </script>';
}
    $conn->close();
    exit;
}



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>En clave de Sol</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome & Pixeden Icon Stroke icon font-->

    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
    <!-- Google fonts - Roboto Condensed & Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,400">
    <!-- lightbox-->
    <link rel="stylesheet" href="../css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../css/favicon.ico">

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
                    <li class="active"><a href="../index.php">Home</a></li>
                    <li><a href="../estilos.php">Estilos</a></li>
                    <li><a href="#">Contacto</a></li></ul>

            </div>
        </div>
    </div>
</header>

<section>
    <div class = "modal-content" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-header">
                <h4 id="registro" class="modal-title">Gracias por enviarnos el mensaje</h4>
            </div>
            <div class="modal-body">
                <h4 class = "modal-title">Seguiremos trabajando para que esté todo a tu gusto.</h4>
                <div>

                

                    <p><a href="../index.php"><strong>Seguir escuchando música</strong></a></p>
                </div>
            </div>
        </div>
</section>


</body>
</html>
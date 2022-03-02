<?php
    session_start(); //estamos reanudando la sesión
    error_reporting(0); //No mostrar errores

    $varsesion = $_SESSION['usuario'];


    if($varsesion == null || $varsesion=''){
        echo 'Usted no tiene autorización';
        die(); //Nada de lo que sigue se ejecutará
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Panel de administración</h1>
    <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
    <a href="Session_cerrarSesión.php">Cerrar Sesión</a>
</body>
</html>
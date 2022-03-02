<?php
    session_start();

    if(isset($_SESSION['admin'])){ //Si existe una sesion 'admin'
        echo 'Bienvenido!'.$_SESSION['admin'];
        echo '<br> <a href="registro.php">Cerrar Sesión</a>';
    }
    else{
        header('location:registro.php');
    }
<?php
    session_start();
    if(isset($_SESSION['admin'])){ //Si existe una sesion 'admin'
        echo 'Bienvenido!';
        echo '<br> <a href="Sesiones_cerrar.php">Cerrar Sesión</a>';
    }
    else{
        header('location:Sesiones_index.php');
    }
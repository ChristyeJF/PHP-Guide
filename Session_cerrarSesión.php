<?php
    session_start();
    error_reporting(0); //No mostrar errores

    $varsesion = $_SESSION['usuario'];


    if($varsesion == null || $varsesion=''){
        echo 'Usted no tiene autorización';
        die(); //Nada de lo que sigue se ejecutará
    }
    session_destroy(); //Se cierra la sesión
    header("Location:Session.php");


?>  
<?php
    session_start(); //Iniciado una sesión
    $_SESSION['usuario'] = 'Cristian';
    header("Location:SessionPanel.php");


?>
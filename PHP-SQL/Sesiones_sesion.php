<?php
    session_start();
    $login = 'ignacio';

    $_SESSION['admin'] = $login;
    if(isset($_SESSION['admin'])){ //si la variable no es null entonces...
        header('location:Sesiones_index.php');
    }
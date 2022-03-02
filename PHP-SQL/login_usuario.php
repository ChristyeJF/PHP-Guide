<?php
    session_start();
    include_once '../PHP-MySQL/Conexion.php';
    $usuario_login = $_POST['nombre_usuario'];
    $contrasena_login = $_POST['contrasena'];
    
    //Comprobar si llegan las variables
    echo '<pre>'; //texto preformateado
    var_dump($usuario_login);
    var_dump($contrasena_login);
    echo '</pre>';

    //Verificar si el usuario existe
    $sql = 'SELECT * FROM usuarios WHERE nombre = ?'; //el código reutilizado se puede trabajar(mejorar) utilizando POO
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($usuario_login));
    $resultado = $sentencia->fetch(); //el fetch tirara un V o F segun si encontro el usuario o no

    if(!$resultado){
        //matar la operación
        echo '<br>Este usuario no existe, registrese !';
        die();
    }

    if(password_verify($contrasena_login, $resultado['contrasena'])){ //verificamos el pass ingresado con el pass de la BD
        //las contraseñas coinciden, se procede a iniciar sesion
        $_SESSION['admin'] = $usuario_login; //se inicia sesion admin con el usuario ingresado
        header('location:login_restringido.php');
    }
    else{
        echo 'Contraseña incorrecta!';
        die();
    }
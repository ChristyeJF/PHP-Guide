<?php
    include_once '../PHP-MySQL/Conexion.php'; //conexion BD
    //Encriptacion de contraseña: echo password_hash("bluuweb", PASSWORD_DEFAULT)."\n";
    $usuario_nuevo = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];

    //Verificar usuarios duplicados
    $sql = 'SELECT * FROM usuarios WHERE nombre = ?';
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute(array($usuario_nuevo));
    $resultado = $sentencia->fetch(); //el fetch tirara un V o F segun si encontro el usuario o no

    if($resultado){
        echo '<br>Este usuario ya existe!';
        die();
    }
    



    //Comprobar si llegan las variables
    echo '<pre>'; //texto preformateado
    var_dump($usuario_nuevo);
    var_dump($contrasena);
    var_dump($contrasena2);
    echo '</pre>';

    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT); //el hash de la contraseña se pasará a la base de datos
    //Comprobar si las contraseñas ingresadas son iguales

    if (password_verify($contrasena2, $contrasena)) {
        echo '¡La contraseña es válida!<br>';
        
        $sql_agregar = 'INSERT INTO usuarios(nombre, contrasena) VALUES (?,?)'; 
        $sentencia_agregar = $pdo->prepare($sql_agregar);

        if($sentencia_agregar->execute(array($usuario_nuevo, $contrasena))){
            echo 'Agregado<br>';
        }
        else{
            echo 'Error!<br>';
        }
        //cerramos la conexion y redirigimos
        $sentencia_agregar = null;
        $pdo = null;
        //header('location:Conexion_index1.php');
        
    } 
    else {
        echo 'La contraseña no es válida.';
    }

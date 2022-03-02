<?php
    //Parámetros para la conexión 1ra forma
    $link = 'mysql:host=localhost;dbname=colores';
    $usuario = 'root';
    $password = '';
    /*//Parámetros para la conexión 2da forma
    define('HOST_DB', 'localhost');
    define('USER_DB', 'root');
    define('PASS_DB', '');
    define('NAME_DB', 'colores');*/
    
    //Conexión 1ra forma
    try{
        $pdo = new PDO($link, $usuario, $password);
        echo 'Conectado<br>';
    }
    catch (PDOException $e){
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
    /*
    //Conexión 2da forma
    $conexion = new mysqli(
        constant('HOST_DB'),
        constant('USER_DB'),
        constant('PASS_DB'),
        constant('NAME_DB')
    );
    */
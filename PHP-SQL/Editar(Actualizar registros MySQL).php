<?php
    //Recibir datos a través del método GET
   /*echo 'Editar(Actualizar%20registros%20MySQL).php?id=1&color=black&descripcion= este es un color negro'; //Ejemplo GET URL
    echo '<br>';*/

    $id = $_GET['id'];
    $color = $_GET['color'];
    $descripcion = $_GET['descripcion'];

    /*echo $id;
    echo $color;
    echo $descripcion; imprimir lo que viene del index*/

    include_once 'Conexion.php';

    $sql_editar = 'UPDATE colores SET color=?, descripcion=? WHERE id=?'; //Actualizamos los registros
    $sentencia_editar = $pdo->prepare($sql_editar);
    $sentencia_editar->execute(array($color, $descripcion, $id));

    header('location:Conexion_index1.php');

<?php

    include_once 'Conexion_index1.php';
    $id = $_GET['id'];

    $sql_eliminar = 'DELETE FROM colores WHERE id=?';
    $sentencia_eliminar =$pdo->prepare($sql_eliminar);
    $sentencia_eliminar->execute(array($id));
    header('location:Conexion_index1.php');
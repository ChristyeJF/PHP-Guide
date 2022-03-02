<?php
    //php-html 2da forma
    require_once 'Conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BD</title>
</head>
<body>
    <?php
        // php-html 2da forma
        $resultado = $conexion->query('SELECT * FROM colores');
        while($row = mysqli_fetch_array($resultado)){ //recorre la tabla fila a fila
            echo $row['color'].'</br>';
        }
    ?>
</body>
</html>